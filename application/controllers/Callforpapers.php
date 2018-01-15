<?php  

	class Callforpapers extends CI_CONTROLLER {

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->template->load('template','call-for-paper/callforpapers');
		}

		function area_of_research(){
			$this->template->load('template','call-for-paper/area-of-research');
		}
	}

?>