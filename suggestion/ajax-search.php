<?php
	require("database.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
#search{
	position:relative;
}
input{
	width:280px;
}
#list{
	position:absolute;
	background-color:#FFF;
	width:280px;
	line-height:35px;
	border:1px solid #ccc;
	border-bottom:none;
}
#list ul, #list ul li{
	margin:0;
	padding :0;
}
#list ul li{
	list-style:none;
}
#list ul li a{
	text-decoration: none;
	line-height:35px;
	display:block;
	border-bottom:1px solid #ccc;
	padding:0 10px;
}
#list ul li a:hover{
	background-color:#eee;
}
</style>

</head>

<body>
<div id="search">
<form method="get">
	<input type="text" name="title" id="title" placeholder="Search Here" /> 
    <img src="loading.gif" id="loading" style="display: none" /><br/>
	<span id="list"></span>
</form>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p>s a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
 
</table>


<script src="jquery.min.js"></script>
<script>
$(document).ready(function(e) {
	$("#title").keyup(function(){
		$("#list").html();
		$("#loading").show();
		$.ajax({
			type: 'GET',
			data: {				
				"title": $(this).val()	
			},
			url: "search.php",
			success: function (result) {
				$("#loading").hide();
				var dt = "";
				if(result.length > 0){
					for(i=0; i<result.length; i++){
						dt += "<ul>";
						dt += "<li><a href=''>" + result[i]['title'] + "</a></li>";
						dt += "</ul>";
					}
					
				}
				$("#list").append(dt);
			},
			error: function (request) {
				alert(request);
			}
		 });
		 return false;
	});
});
</script>
</body>
</html>











