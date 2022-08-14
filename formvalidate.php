<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.error{color:#F00;}
</style>
</head>

<body>
<?php
	$name=$address=$phone=$email=$password=$uname="";
	$nameErr=$addressErr=$phoneErr=$emailErr=$passwordErr=$unameErr="";
	$pwordErr="";
	if (isset($_POST['submit'])){
		

		
	echo $name = $_POST['name'];
	echo $address = $_POST['address'];
	echo $phone = $_POST['phone'];
	echo $email = $_POST['email'];
	echo $uname = $_POST['username'];
	echo $pword = $_POST['password'];
	
		if(empty($name)){
		$nameErr = "please enter your name.";	
		}
		else {
    $name = ($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
	  if(empty($address)){
		$addressErr="Please enter your address";  
	  }
	  
	  if(empty($phone)){
		$phoneErr="Phone number is required";  
	  }else{
		$phone=($_POST['phone']);
		if (!preg_match("(^(880)-[0-9]{3}-[0-9]{7})",$phone)) 
		$phoneErr="Type your phone in correct format";	
			  
	  }
	  
	  if(empty($email)){
		$emailErr="Enter your valid email address.";  
	  }else{
		  $email=($_POST['email']);
		  if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9]+)*(\.[a-z]{2,3})$/",$email))
	$emailErr="Email is not valid";  
	}
	
	if(Empty($uname)){
	$unameErr="Enter the username";	
	}else{
	$uname=($_POST['username']);
	if(!preg_match("(^[a-zA_Z0-9!@$&*]{4,8})",$uname))
	$unameErr="Enter the username between 4-8 caracters";	
	}
	
	if(empty($pword)){
	$pwordErr="Enter the valid password.";	
	}else{
	$pword=($_POST['password']);
	if(!preg_match("/^[a-zA_Z0-9]{6,10}$/"))
	$pwordErr="Invalid password! Your passwod should be at leat 6 caracters";	
	}
	
}

?>
	<h2>Student Registration Form</h2>
<form action="" method="post">
	<p>Name:<br>
    <input type="text" name="name"><span class="error">* <?php echo $nameErr;?></span></p>
    <p>Address:<br>
    <textarea cols="30" rows="3" name="address"></textarea><span class="error">* <?php echo $addressErr;?></span></p>
    <p>Phone:<br>
    <input type="text" name="phone"><span class="error">* <?php echo $phoneErr;?></span></p>
    <p>Email:<br>
    <input type="text" name="email"><span class="error">*<?php echo $emailErr;?></span></p>
    <p>Username:<br>
    <input type="text" name="username"><span class="error">*<?php echo $unameErr;?></span></p>
    <p>Password:<br>
    <input type="password" name="password"><span class="error">*<?php echo $pwordErr;?></span></p>
    <button type="submit" name="submit">Sign Up</button>

</form>

</body>
</html>