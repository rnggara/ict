<?php  

	class Contact extends CI_CONTROLLER {

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->template->load('template','contact/contact');
		}

		function comittee(){
			$this->template->load('template','contact/comittee');
		}

		function accommodation(){
			$this->template->load('template','contact/accommodation');
		}

		function venue(){
			$this->template->load('template','contact/conference-venue');
		}

		function flight_and_visa(){
			$this->template->load('template','contact/flight-and-visa');
		}
	}

?>