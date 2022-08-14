<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
if(isset($_POST['sub'])){
	$datas = file("log.txt");
	foreach($datas as $value){
		list($a, $b, $c) = explode(";", $value);				
		if(trim($b)==$_POST['email'] && trim($c)==$_POST['password']){
			$_SESSION['myname'] = $a;
			break;	
		}
	}	
	
	if(!isset($_SESSION['myname'])){
		echo "Invalid Email or Password";	
	}
}

if(isset($_SESSION['myname'])){
	echo "Welcome: " . $_SESSION['myname'];	
	echo "<a href='logout.php'>Logout</a>";
}
else{
?>
   <form action="" method="post">
        <input type="text" name="email" /><br /><br />
        <input type="password" name="password" /><br /><br />
        <input type="submit" name="sub" value="Login" /><br /><br />
    </form> 
<?php
}
?>    
</body>
</html>