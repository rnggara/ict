<?php  

	class accommodation extends CI_CONTROLLER {

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->template->load('template','accommodation');
		}
	}

?>