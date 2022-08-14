<?php 
$e="";
if(isset($_POST['sub']))
{
	
	if (empty($_POST["un"])||empty($_POST["ps"])||empty($_POST["em"])||empty($_POST["pn"]) ) 
	   echo ("Required field is/are empty.");
	else
	{
	
   	     $un = $_POST['un'];
	   $ps = $_POST['ps'];
	   $em = $_POST['em'];
	   $pn = $_POST['pn'];

  	   if (strlen($un)<4 || strlen($un)>8 ) 
	       $e .= "Invalid username.<br/>";
		
		if (strlen($ps)<6 ) 
	       $e .= "Invalid password.<br/>";
     
   		if (strpos($em,'@') <= 0) 
      		$e .= "Invalid email.<br/>";
     
	    if (!preg_match("(^(880)-[0-9]{3}-[0-9]{7})",$pn))   
		   $e .= "Invalid phone number. ";
	 
   		if($e =="") $e = "valid";
	}
}
echo $e;
?>

<html>
<body>
<p>User validation form</p>
<form action="#" method="post">
<p>username: <input type="text" name="un" maxlength="8" />*

<p>password: <input type="password" name="ps"  />*

<p>email: <input type="text" name="em" />*

<p>phone: <input type="text" name="pn" maxlength="15" />*

<p><input type="submit" name="sub" value="Submit" /></p>

</body>
</html>