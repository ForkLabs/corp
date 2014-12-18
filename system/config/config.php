<?php require(PROTECT);

 /*	-------------------------------------- *
  *		RawFront Configuration File		   *
  * -------------------------------------- */
  
	define('YU_PATH', '');
  
	/* URI stuff */
	
	define('DEFAULT_CONTROLLER', 'home');
	define('DEFAULT_METHOD', 'index');
	
	/* Template stuff */
	
	define('USING_TEMPLATE', 'default');
	define('TEMPLATES', APPLICATION_PATH . 'templates/');
	
	/* DATABASE stuff */
	
	$CONFIG_database = array(
		'host' => '',
		'user' => '',
		'password' => '',
		'database' => '',
		'enable' => FALSE
	);
	
		/* Library stuff */

	//define('USING_LIBRARIES', 'default');
	//define('LIBRARIESS', APPLICATION_PATH . 'libraries/');
	
	