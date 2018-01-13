<?php  

	class contact extends CI_CONTROLLER {

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->template->load('template','contact');
		}

		function comittee(){
			$this->template->load('template','comittee');
		}
	}

?>