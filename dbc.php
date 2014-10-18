<?php 

require('CoffeeEntity.php');

class CoffeeModel
{

	function GetCoffeeTypes()
	{
		require'credentials.php'

		$dbc = mysql_connect($host, $user, $pass) or die("can't connect to database FOOL!!!");

		mysql_select_db($database);

		$query = "SELECT DISTINCT type FROM `coffee`";

		$result = mysql_query($query) or die("no query selected");

		$types = array();


		while($row = mysql_fetch_array($result))
		{
			array_push($types, $row[0]);
		}

		mysql_close();
		return $types;
	}

	function GetCoffeeByType($type)
	{
		require 'credentials.php';

		mysql_connect($host, $user, $pass) or die(mysql_error());
		mysql_select_db($database);
		$query = "SELECT * FROM `coffee` WHERE type LIKE '$type'";
		$result = mysql_query($query) or die (mysql_error());
		$coffeeArray = array();

		while($row = mysql_fetch_array($result))
		{
			$name = $row[1];
			$type = $row[2];
			$price = $row[3];
			$roast = $row[4];
			$country = $row[5];
			$image = $row[6];
			$review = $row[7];

			$coffee = new CoffeeEntity(-1,$name, $type,$price,$roast)
		}
	}

}

 ?>