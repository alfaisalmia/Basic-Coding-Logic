<?php
	require("database.php");
	$limit = ($_GET['pn'] - 1) * $_GET['perpage'];	
	$sql = $db->query("select * from purchase order by id desc limit $limit, {$_GET['perpage']}");
	
		$html = "";
		while($d = $sql->fetch_object()){
			$html .= "<tr class='datas'>";
			$html .= "<td>$d->id</td>";
			$html .= "<td>$d->title</td>";
			$html .= "<td>$d->amount</td>";
			$html .= "<td>";
			$html .=($d->photo)?"<img src='images/forhad-{$d->id}.{$d->photo}' width='100'/>":"<img src='images/no-images.jpg' width='100'/>";
			$html .= "</td>";
			$html .= "<td><a href='crud.php'>edit</a></td>";
			$html .= "<td><a href='crud.php'>Delete</a></td>";
			$html .= "</tr>";	
		}	
			
	echo $html;	
?>	