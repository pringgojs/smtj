<?php
class NotFound extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    //$this->load->model('ModelWebsite'); 
		
    }
    function index(){
    	//$this->output->set_status_header('404');
    	$this->load->view('/admin/not-found');
    }
    function not_access(){
    	$this->load->view('/admin/not-access');
    }
}