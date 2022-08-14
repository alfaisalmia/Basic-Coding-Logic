<?php
	require("database.php");
	header('Content-Type: application/json');
	
	$arr = array();
	$search = " where title like '%{$_GET['title']}%'";	
	$sql = $db->query("select id, title, amount from purchase $search order by id desc limit 10");
	while($d = $sql->fetch_object()){
		$arr[] = $d;
	}	
	echo json_encode($arr);
?>