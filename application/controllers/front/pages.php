<?php
class Pages extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->load->model('ModelWebsite'); 
		$this->method_call =& get_instance(); // untuk memanggil method dari view
    }
   	function index($parentUrl="", $childUrl=""){
   		$url = base_url($parentUrl."/".$childUrl);
   		
   	}

}