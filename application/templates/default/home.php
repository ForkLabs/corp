<?php require(PROTECT);

	class home_template {
		function __construct() {
			// Extract our array
			extract(unserialize(ALLDATA));
			$userdata = unserialize($userdata);
			
			// Require our header
			require(VIEWS . 'home/header.php');
			
			// Require our Content
			if(TEMPLATE_DATA == NULL)
				$USE_TEMPLATE = 'home/welcome';
			else
				$USE_TEMPLATE = TEMPLATE_DATA;
				
			require(VIEWS . $USE_TEMPLATE . '.php');
			
			//Require our footer
			require(VIEWS . 'home/footer.php');
			
		}
	}
	new home_template();