<?php require(PROTECT);
	
	class Pricing extends Controller {
		function pricing() {
			/* We can load other resources here */
			parent::controller();
			
		}
		
		function index() {
			$this->view->load('header');
			$this->view->load('pricing');
			$this->view->load('footer');
		}
	}

	