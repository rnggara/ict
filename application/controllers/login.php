<?php 
	
	class login extends CI_CONTROLLER{
		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->template->load('template','form/login');
		}
	}

 ?>