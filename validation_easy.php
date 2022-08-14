<?php 
$error="";
if(isset($_POST['sub']))
{
	
	if (empty($_POST["un"])||empty($_POST["ps"])||empty($_POST["em"])||empty($_POST["pn"]) ) 
	   $error .="Required field is/are empty.<br/>";
	
   	   $un = $_POST['un'];
	   $ps = $_POST['ps'];
	   $em = $_POST['em'];
	   $pn = $_POST['pn'];
   
   		if (!preg_match("/^[a-zA-Z0-9]{6,}$/",$un) ) 
	       $error .= "Invalid username/must be at least 6 characters.<br/>";
     
   		if (!preg_match("(^[a-zA-Z0-9!@$&*]{6,8})",$ps)) 
      		$error .= "Invalid password/at least 6 and maximum 8 characters.<br/>";
     
   		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$em)) 
	       $error .= "Invalid email.<br/>";
   		if (!preg_match("(^(880)-[0-9]{3}-[0-9]{7})",$pn))   
		   $error .= "Invalid phone number. ";
	
}
echo $error;
?>

<html>
<body>
<p>User validation form</p>
<form action="#" method="post">
<p>username: <input type="text" name="un" />*</p>
<p>password: <input type="text" name="ps"  />*</p>
<p>email: <input type="text" name="em" />*</p>
<p>phone: <input type="text" name="pn" />*</p>
<p><input type="submit" name="sub" value="Submit" /></p>

</body>
</html>