<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['sub'])){
	move_uploaded_file($_FILES['pic']['tmp_name'], $_FILES['pic']['name']);
	echo "Save Successful";
}
?>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="pic" /><br /><br />
    <input type="submit" name="sub" value="Check" /><br /><br />
</form>
</body>
</html>