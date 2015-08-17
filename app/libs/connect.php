<?php if(!defined("SPECIALCONSTANT")) die("Access Denied");

function getConnection()
{
	try{
		$db_host		= "";
		$db_name 		= "";
		$db_username 	= "";
		$db_password 	= "";

		$connection = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_username, $db_password);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
	return $connection;
}