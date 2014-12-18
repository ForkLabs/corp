<?php require(PROTECT);
	
	class Controller {
		function controller() {
			$this->db = unserialize(DATABASE_OBJECT);
			$this->view = new view();
		}
	}
	