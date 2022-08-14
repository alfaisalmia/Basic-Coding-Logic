<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['sub'])){
	$msg = 0;
	
	if(strlen($_POST['name']) != 3){
		$msg++;
		echo "Invalid Name";	
	}
	if(strlen($_POST['address'])<4 && strlen($_POST['name']) >= 8){
		$msg++;
		echo "Invalid address";	
	}
	if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$_POST['email'])) {
		$msg++;
		echo "Invalid Email";	
	}
	
	if($msg==0){
		echo "Save Successful";	
	}
}
?>
<form action="" method="post">
	Name<input type="text" name="name" /><br /><br />
    Address<input type="text" name="address" /><br /><br />
    <input type="text" name="phone" /><br /><br />
    <input type="text" name="email" /><br /><br />
    <input type="text" name="password" /><br /><br />
    <input type="submit" name="sub" value="Check" /><br /><br />
</form>
</body>
</html>