<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$arr = array(
				"Bangladesh"=>"Dhaka", 
				"India"=>"New Delhi",
				"Pakistan"=>"Islamabad",
				"Maldiv"=>"Maloy",
				"Afganistan"=>"Kabul"
				);
	ksort($arr); //Index Sort
	asort($arr); //Value Sort
	
	
	echo "<pre>";
	print_r($arr);			
	echo "</pre>";
?>
</body>
</html>