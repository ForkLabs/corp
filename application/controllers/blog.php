<?php require(PROTECT);
	
	class Blog extends Controller {
		function blog() {
			/* We can load other resources here */
			parent::controller();
			$this->vars = array();
		}
		
		function index() {
			$this->view->load('header');
			$this->view->load('comingsoon');
			$this->view->load('footer');
		}
		
		function dev() {
			# We need header variables for organization
			$header_properties = new stdClass();
			$header_properties->page_title = 'ForkLabs Blog | Digital Agency Development Blog';
			# Merge the header_properties with our vars
			$this->vars = $this->view->mergeVars($header_properties, $this->vars);
			
			$this->view->load('header', $this->vars);
			$this->view->load('blog');
			$this->view->load('footer');
		}
	}

	