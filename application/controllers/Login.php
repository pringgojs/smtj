<?php
class Login extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->load->helper('url','form','cookie'); 
	    $this->load->model('Modellogin'); 
	    $this->load->library('session');   
	    global $user;
	    global $password;
	    global $cookie;
	    global $kodeuser;
	}
	function index(){
		if(isset($_SESSION['kode']) OR isset($_COOKIE['kode'])){
			redirect("administrator");
		}else{
			$mac = $this->mac();
			$datamac= array('mac' =>$mac);
			$selectx = $this->db->get_where('tb_auth_mac', $datamac);
			if($selectx->num_rows() > 0){
				$selectx = $selectx->row();
				$date 	= strtotime($selectx->date);
				$now = strtotime(date('Y-m-d'));
				if($now > $date ){
					#jika tgl di db sudah lewat, maka hapus
					$this->db->where('mac', $mac); 
      					$this->db->delete('tb_auth_mac'); 
					$this->load->view('admin/login');

				}else{
					#----------------------#
					if($selectx->count > 3 ){
						redirect('not_access');
					}else{
						$this->load->view('admin/login');
					}
				}
				
			}else{
				$this->load->view('admin/login');
			}
			
			
			
		}
		
	} 
	function cek_login(){
		/*
			1. detek IP
			2. detek username
			3. jika login 3x salah dan username benar, maka hari itu tidak bisa login dengan 
			4. jika login 3x salah dan username salah, maka hari itu IP diblock
			
		*/

		if(!isset($_POST['username']) || !isset($_POST['password'])|| !isset($_GET['pakecookie'])){
			redirect("login");
		}
		
		// cek user dan pass
		$mac = $this->mac();
		$datamac= array('mac' =>$mac);
		$selectx = $this->db->get_where('tb_auth_mac', $datamac);
		if($selectx->num_rows() > 0){
			$selectx = $selectx->row();
			if($selectx->count > 0 ){
				$i 	= $selectx->count;
			}else{
				
				$this->secure('1',$mac);
				$i = 0;
			}
		}else{
			$this->secure('1',$mac);
			$i = 0;
		}
		
		
		
		do{
			if($i > 3){
				echo "4";
				break;
			}else{
				$user = $_POST['username'];
				$password = $_POST['password'];
				$cookie = $_GET['pakecookie'];
				$data=array(
					'username'=>$user
				);
				$cekusername = $this->Modellogin->cek_user($data);
				
				if($cekusername == 1){
					$data2 = array(
						'username'=>$user,
						'password'=>md5($password)
					);
					$cekpassword = $this->Modellogin->cek_user($data2);
					if($cekpassword == 1){
						$sqlcekuser = $this->db->get_where('tb_user',$data2)->row();  // lihat data user berdasar username dan pasas
						$kodeuser 	= $sqlcekuser->id_user; // set kode user
						if($cookie=="iya"){ // cek cookie
							$datacookie= array(
						      	'name'   => 'kode',
		      					'value'  => $kodeuser,
						       	'expire' => time()+7*24*3600,
						  	);
							$this->input->set_cookie($datacookie);
							
						}else{ // buat session
							$datauser = array('kode' => $kodeuser, );
							$buat_session = $this->session->set_userdata($datauser);
							

						}
						$this->db->where('mac', $mac); 
          				$this->db->delete('tb_auth_mac'); 

						$time 	= date('Y-m-d H:i:s');
						$data4 = array('last_login' => $time);
						$this->db->where('id_user', $kodeuser);
						$this->db->update('tb_user', $data4);
						// sukses
						echo "1";
						break;
					}else{
						
						$i++;
						//echo $i;
						$mac = $this->mac();
						$this->secure($i,$mac);
						$datamac= array('mac' =>$mac);
						$select = $this->db->get_where('tb_auth_mac', $datamac)->row();
						if($select->count > 3 ){
							echo "4";
						}else{
							echo "2"; // password salah
						}
						break;
						//$this->secure($i,$mac, $user);
						//
					}
				}else {
					
					$i++;
					$mac = $this->mac();
					$this->secure($i,$mac);
					//echo $i;
					$datamac= array('mac' =>$mac);
					$select = $this->db->get_where('tb_auth_mac', $datamac)->row();
					if($select->count > 3 ){
						echo "4";
					}else{
						echo "0"; // tidak ditemukan data
					}
					break;
					//$this->secure($i,$mac,$user);
					//echo '0'; //  tidak ditemukan data
				}
			}
			
		}while($i <= 3);

		

	}
	function secure($i,$mac){
		$sesion = $mac.".".$i;
		$ip = $_SERVER['REMOTE_ADDR'];
		$date = date('Y-m-d');
		$security = array('name'=>'secure','value' => $sesion, 'expire' => time()+7*24*3600,);
		set_cookie($security);
		$datamac= array('mac' =>$mac);
		$select = $this->db->get_where('tb_auth_mac', $datamac)->num_rows();
		$data = array('mac'=>$mac, 'count'=>$i,'ip'=>$ip,'date'=>$date );
		if($select > 0){
			$this->db->where('mac', $mac); 
           	$this->db->update('tb_auth_mac', $data);
		}else{
			$this->db->insert('tb_auth_mac', $data);
		}
		

		//get_cookie('secure');	
		
		
		
		
	}
	function mac(){
		 $ipaddress = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
		// $mac = exec('getmac');
		// $mac = explode(" ", $mac);
		// return $mac[0];
		/*
		exec('netstat -ie', $result);
		  if(is_array($result)) {
		    $iface = array();
		    foreach($result as $key => $line) {
		      if($key > 0) {
		        $tmp = str_replace(" ", "", substr($line, 0, 10));
		        if($tmp <> "") {
		          $macpos = strpos($line, "HWaddr");
		          if($macpos !== false) {
		            $iface[] = array('iface' => $tmp, 'mac' => strtolower(substr($line, $macpos+7, 17)));
		          }
		        }
		      }
		    }
		    return $iface[0]['mac'];
		  } else {
		    return"notfound";
		  }	
		  */	
	}
	function sukses(){
		redirect('modul/dashbord/dashbord_main.php');
		// $data = array(
		// 	'username' => $this->session->userdata('username')
		// 	);
		// $this->load->view('dashbord', $data);	
	}

	function logout(){
		$this->session->sess_destroy('kode');
		redirect(base_url('login'));
	}

	
}
?>