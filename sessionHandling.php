 <?php
session_start();
$found = false;
 
if(!isset($_SESSION['name']))
{
	if(isset($_POST['username']))
	{
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		if($username != "" && $pwd !="")
		{
			$authfile = file("user.txt");
			foreach($authfile as $login)
			{
				list($user,$pass,$name) = explode(":",$login);
				$pass = trim($pass);
				if(($username==$user) && ($pwd == $pass))
				{
					$_SESSION['name']=$name;
					$_SESSION['username']=$user;
					echo "You'r logged in. Feel free to return at a later time";	
					$found = true;
					break;
				}
			}
		}
	}
	if ($found == false){
		if($_POST['username'] !="" || $_POST['pwd']!="")
		{
			 echo "Username or password is wrong";
		}
		 include "login.html";			
	}
}
else
{
	$name = $_SESSION['name'];
	echo "Welcome back,$name!";
}
?>
