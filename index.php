<?php
	require("inc/db.class.php");

	// Creates the instance
	$db = new Db();
		
	// 3 ways to bind parameters :		
	

	// 3. Or just give the parameters to the method
	//$db->query("SELECT * FROM Persons WHERE firstname = :firstname AND age = :age", array("firstname"=>"John","age"=>"19"));

	//  Fetching data
	$person 	 =     $db->query("SELECT * FROM vb_data WHERE date_id = 1");

	var_dump($person);
	
	//echo $person[1];
	/*	
	function d($v,$t) 
	{
		echo '<pre>';
		echo '<h1>' . $t. '</h1>';
		var_dump($v);
		echo '</pre>';
	}
	d($person, "All persons");*/
	//d($firstname, "Fetch Single value, The firstname");
	//d($id_age, "Single Row, Id and Age");
	//d($ages, "Fetch Column, Numeric Index");

?>
