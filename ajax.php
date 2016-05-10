<?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_NAME="achieve3000";
$DB_PASSWORD="";
$db = new PDO("mysql:host=".$DB_HOST.";dbname=".$DB_NAME,$DB_USER,$DB_PASSWORD);
$id=$_REQUEST['id'];
$Sql="SELECT
	  votes.city,
	  colors.color,
	  SUM(votes.votes) AS color_total,
	  colors.color_id
	FROM votes
	  RIGHT OUTER JOIN colors
		ON votes.color_id = colors.color_id
	WHERE colors.color_id = $id
	GROUP BY colors.color,
			 colors.color_id";
$st=$db->query($Sql);
$result=0;
foreach($st as $rec){
	if (isset($rec['color_total'])){
		$result=$rec['color_total'];
	}
}	
echo $result;
