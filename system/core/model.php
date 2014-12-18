<?php require(PROTECT);
    	
	class Model {
	
		function model() {
			/* This is the parent Model class */
			$this->db = unserialize(DATABASE_OBJECT);
		}
		
	}
	