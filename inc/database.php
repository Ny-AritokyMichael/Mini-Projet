<?php
	function dbconnect()
	{
		static $connect = null;
		if ($connect === null) {
			$connect = new PDO('pgsql:host=localhost;port=5432;dbname=rechauffement','admin','admin') or die ('Connetion impossible : '.preg_last_error());
		}
		return $connect;
	}
	
?>