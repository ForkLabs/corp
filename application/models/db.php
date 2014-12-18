<?php

class models_Db {

	function __construct($userdata) { 
		
		# This DB model, is simply the model for the database caching
		$this->cache_enabled = false;
		$this->cache_path = '';
		$this->cache_encryption_key = '1234567890abcdefghijklmnopqrstuvwxyz';
		
	}
	
	private function generate_cache_checksum($sql) {
		$checksum = $sql . $this->cache_encryption_key;
		$checksum_return = sha1($checksum);
		
		return $checksum_return;
	}
	
	public function log_query_results($sql) {
		if(!$sql)
			exit('No SQL query supplied for cache. Contact the database administrator {Fork@Syndroneonline.com}.');
		
		# We need to generate a name for the SQL query
		# convert sql to lowercase
		$sql_clean = strtolower($sql);
		
		# Lets create an SHA1 checksum
		$checksum = $this->generate_cache_checksum($sql);
		
		return($checksum);
		//$output_sql = $sql . ' INTO OUTFILE ';
	}
	
	public function result($sql) {
		return $this->log_query_results($sql);
	}
}
