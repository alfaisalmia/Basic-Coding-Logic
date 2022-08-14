<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['sub'])){
	$num = $_POST['num'];
	
	$c = 0;
	for($i=2; $i<=floor($num/2); $i++){
		if($num%$i==0){
			$c++;
			break;	
		}
	}	
	if($c==0){
		echo "Number is Prime";	
	}
	else{
		echo "Number is Composit";	
	}		
}
?>
<form action="" method="post">
	<input type="text" name="num" /><br /><br />
    <input type="submit" name="sub" value="Check" /><br /><br />
</form>
</body>
</html>