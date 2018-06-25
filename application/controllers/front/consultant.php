<?php
class Consultant extends CI_Controller {
	public function __construct()    {
	    parent::__construct();

	}
	function index(){
		show('front/include/header');
		show('front/include/footer');

	}