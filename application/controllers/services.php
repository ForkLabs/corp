<?php require(PROTECT);
	
	class Services extends Controller {
		function services() {
			/* We can load other resources here */
			parent::controller();
			
		}
		
		function index() {
			$this->view->load('header');
			$this->view->load('comingsoon');
			$this->view->load('footer');
		}
	}

	