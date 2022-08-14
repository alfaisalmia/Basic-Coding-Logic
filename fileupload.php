<form action="#" method="post" enctype="multipart/form-data">
		<h2>input file</h2>
        <input type="file" name="up" /><br />
        <input type="submit" name="sub" value="GO" />

</form>
<?php
	if(isset($_POST['sub']))
	{
		if($_FILES['up']['size']>(400*1024)) die ("Large file.");
		
		if(($_FILES['up']['type'] =="application/pdf" ) || ($_FILES['up']['type'] =="image/jpeg" ) || ($_FILES['up']['type'] =="image/pjpeg" ) || ($_FILES['up']['type'] =="text/plain" ) || ($_FILES['up']['type'] =="application/vnd.openxmlformats-officedocument.wordprocessingml.document" )	)
		{
		move_uploaded_file($_FILES['up']['tmp_name'],"upload/".$_FILES['up']['name']);
		echo "ok";	
		}
		else
		 echo "File type is not supported";
		
		
		
	}
?>