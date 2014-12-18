<?php require(PROTECT);
	
	class About extends Controller {
		function about() {
			/* We can load other resources here */
			parent::controller();
			
		}
		
		function index() {
			$this->view->load('header');
			$this->view->load('comingsoon');
			$this->view->load('footer');
		}
	}

	