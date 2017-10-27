<?php 
	class MyToDoDB extends SQLite3 {
		
		public function __construct()
		{
			$this->open('MyToDoDB.db');
		}


	}
?>