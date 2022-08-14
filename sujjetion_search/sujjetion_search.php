<?php
	require("database.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form method="get">
	<input type="text" name="title" id="title" /> 
    <img src="loading.gif" id="loading" style="display: none" />   
</form>
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
	$("#title").keyup(function(){
		$(".poly").remove();
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
						dt += "<tr class='poly'>";
						dt += "<td>" + result[i]['id'] + "</td>";
						dt += "<td>" + result[i]['title'] + "</td>";
						dt += "<td>" + result[i]['amount'] + "</td>";
						dt += "</tr>";
					}
					
				}
				else{
					dt += "<tr class='poly'>";
					dt += "<td colspan='3'>Data not found</td>";
					dt += "</tr>";
				}
				$("#myTable").append(dt);
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











