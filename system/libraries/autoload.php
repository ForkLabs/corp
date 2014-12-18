<?php require(PROTECT);

/*	Load the following libraries */


class autoload extends Libraries {

	function __construct()
	{
		$autoLoad_array = array();
		if(count($autoLoad_array)) {
			foreach($autoLoad_array as $autoLoad_class) {
			
				if(file_exists(LIBRARIES . $autoLoad_class. '.php'))
					require LIBRARIES . $autoLoad_class . '.php';
				else
					echo ERROR_FATAL_OPEN."Could not load the library: <b>".$autoLib."</b>".ERROR_FATAL_CLOSE;
			}
		}
	}

}

$autoload = new autoload();