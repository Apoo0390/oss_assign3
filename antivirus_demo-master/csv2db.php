<?php

	include("./db_connect.php");

	//mysql_query('set names utf8');

	echo("HI<br>");
	
	//$db_selected = mysql_select_db($mysql_db, $con);

	$csv = "./menu.csv";

	$lines = file($csv);
	$count = count($lines);

	echo($count."<br>");
	$cnt = 0;	
	for($i = 1; $i < $count; $i++)
	{
		$str = explode(",", rtrim($lines[$i], "rm"));
		$name = "";
		$cal = 0.0;
		$carbo = 0.0;
		$protein = 0.0;
		$fat = 0.0;
		$price = 0;
		$score = 0.0;
		$dep = "";
		
		$name = trim($str[0]);
		$cal = trim($str[1]);
		$carbo = trim($str[2]);
		$protein = trim($str[3]);
		$fat = trim($str[4]);
		$price = trim($str[5]);
		$score = trim($str[6]);
		$dep = trim($str[7]);
		$gram = $carbo + $protein + $fat;
		$imag_name = $name.".png";

		if($cal && $carbo && $protein && $fat)
		{
			//echo($i.' '.$name.' '.$cal.' '.$carbo.' '.$protein.' '.$fat.' '.$price.' '.$score.' '.$dep.' '.$imag_name."<br>");

			$query = "INSERT INTO food_table (dep, name, score, cal, gram, carbo, protein, fat, price, image_name) VALUES ('".$dep."', '".$name."', ".$score.", ".$cal.", ".$gram.", ".$carbo.", ".$protein.", ".$fat.", ".$price.", '".$imag_name."')";
			echo($cnt++.' : '.$query."<br>");

			
		}
	}
	
?>
