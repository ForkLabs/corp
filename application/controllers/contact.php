<?php require(PROTECT);
	
	class Contact extends Controller {
		function contact() {
			/* We can load other resources here */
			parent::controller();
			
		}
		
		function index() {
			$this->view->load('header');
			$this->view->load('comingsoon');
			$this->view->load('footer');
		}
	}

	