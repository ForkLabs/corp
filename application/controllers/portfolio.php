<?php require(PROTECT);
	
	class Portfolio extends Controller {
		function portfolio() {
			/* We can load other resources here */
			parent::controller();
			
		}
		
		function index() {
			$this->view->load('header');
			$this->view->load('comingsoon');
			$this->view->load('footer');
		}
	}

	