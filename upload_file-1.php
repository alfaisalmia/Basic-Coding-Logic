<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="#" enctype="multipart/form-data"  method="post" >
<table>
<tr><td><h1>Select file</h1></td><td>:</td><td><input type="file" name="kaka" /></td></tr>
<tr><td><input type="submit" name="sub" value="upload" /></td></tr>
</table>
</body>
</html>
<?php

if(isset($_POST['sub'])){
	
	move_uploaded_file($_FILES["kaka"]["tmp_name"],"Upload/".$_FILES["kaka"]["name"]);
	}

?>





