
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
div{
	margin-bottom: 50px;	
}
</style>
</head>

<body>

<form method="post">
<input type="text" name="exp[]" class="color1" placeholder="Previous Experience" />
<input type="text" name="exp[]" class="color1" placeholder="Previous Experience" />
<input type="text" name="exp[]" class="color1" placeholder="Previous Experience" />
<input type="text" name="exp[]" class="color1" placeholder="Previous Experience" />

<input type="submit" value="add" id="add" />
<input type="submit" value="Save" name="save" />
</form>

<script src="jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(e) {    
	$("input").focus(function(){
		$(this).css({"background":"white"});	
	});
	$("input").blur(function(){
		if ( $(this).val().length > 0 )
		$(this).css({"background":"#15e415"});
		else{
			$(this).css({"background":"#F00"});
		}	
	});	
});
</script>
</body>
</html>