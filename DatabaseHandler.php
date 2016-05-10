<?php
class DatabaseHandler{	
	static function getDBHandler(){
		$DB_HOST="localhost";
		$DB_USER="root";
		$DB_NAME="achieve3000";
		$DB_PASSWORD="";
		$db = new PDO("mysql:host=".$DB_HOST.";dbname=".$DB_NAME,$DB_USER,$DB_PASSWORD);
		return $db;
	}
}