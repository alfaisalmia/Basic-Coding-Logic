<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$db = new mysqli("localhost", "root", "", "evidence");
	$sql = GetMultipleQueryResult("call home()");
	
	
	foreach($sql[0] as $value){
		echo "<p>$value->id. $value->name</p>";	
	}
	foreach($sql[1] as $value){
		echo "<p>$value->id. $value->name $value->price</p>";	
	}
	
	
	
	
	function GetMultipleQueryResult($queryString) {
		global $db;
        if (empty($queryString)) {
            return false;
        }
        $index = 0;
        $ResultSet = array();
        if (mysqli_multi_query($db, $queryString)) {
            do {
                if (false != $result = mysqli_store_result($db)) {
                    $rowID = 0;
                    while ($row = $result->fetch_object()) {
                        $ResultSet[$index][$rowID] = $row;
                        $rowID++;
                    }
                }
                $index++;
            } while (mysqli_more_results($db) && mysqli_next_result($db));
        }
        return $ResultSet;
    }
?>
</body>
</html>