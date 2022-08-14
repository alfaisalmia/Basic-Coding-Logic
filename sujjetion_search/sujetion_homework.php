<?php
	require("database.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
#search{
	position: relative;
}
#list{
	position: absolute;
	width: 155px;
	background-color: #fff;
	border: 1px solid #ccc;
	border-bottom: none;
	display: none;
}
#list ul, #list ul li{
	list-style: none;
	padding: 0;
	margin: 0;
}

#list ul li a{
	line-height: 25px;
	border-bottom: 1px solid #ccc;
	text-decoration: none;
	display: block;
	padding: 0 10px;
	font-size:14px;	
}
#list ul li a:hover{
	background-color:#CCC;
}

</style>
<body>
<div id="search">
<form method="get">
	<input type="text" name="title" id="title" autocomplete="off"/> 
    <img src="loading.gif" id="loading" style="display: none" /><br />  
    <span id="list">
    </span>
</form>
</div>
<table border="1" width="80%" id="myTable">
	<tr>
    	<th>ID</th>
    	<th>Title</th>
        <th>Amount</th>
    </tr>
    <?php
		
		$sql = $db->query("select * from purchase order by id desc");		
		while($d = $sql->fetch_object()){
			echo "<tr class='poly'>";
			echo "<td>$d->id</td>";
			echo "<td>$d->title</td>";
			echo "<td>$d->amount</td>";
			echo "</tr>";	
		}
	?>
</table>


<script src="jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(e) {
	$("body").on("click", ".mydata", function(){
		var abc = $(this).text();
		$("#title").val(abc);
		$("#list ul").remove();
		$("#list").hide();
		return false;
		
	})
	
	$("#title").keyup(function(){
		$("#list ul").remove();
		if($(this).val() != ""){
				$("#loading").show();
		$.ajax({
			type: 'GET',
			data: {				
				"title": $(this).val()	
			},
			url: "search_home_work.php",
			success: function (result) {
				$("#loading").hide();
				var dt = "";
				if(result.length > 0){
					for(i=0; i<result.length; i++){
						dt += "<ul>";
						dt += "<li><a href='' class='mydata'>" + result[i]['title'] + "</a></li>";
						dt += "</ul>";
					}
					$("#list").show();
					$("#list").append(dt);					
				}
				else{
					$("#list").hide();
				}

			},
			error: function (request) {
				alert(request);
			}
		 });
		 return false;
		}
		else{
			$("#list ul").remove();
			$("#list").hide();
		}
	});
});
</script>
</body>
</html>











