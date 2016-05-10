<?php
class DataProvider {
	private $db;
	function __construct(PDO $mydb){		
		$this->db=$mydb;
	}

	public function getSumOfColors(){
		$result=array();
		$Sql="SELECT
		  votes.city,
		  colors.color,
		  votes.votes
		FROM votes
		  INNER JOIN colors
			ON votes.color_id = colors.color_id";
		$st=$this->db->query($Sql);
		$i=0;
		foreach($st as $rec){
			$result[$i]['city']=$rec['city'];
			$result[$i]['color']=$rec['color'];
			$result[$i]['votes']=$rec['votes'];	
			$i++;			
		}
		return $result;
	}
	public function getColors(){
		$result=array();
		$Sql="SELECT
				  colors.color_id,
				  colors.color
				FROM colors";
		$st=$this->db->query($Sql);
		$i=0;
		foreach($st as $rec){
			$result[$i]['color_id']=$rec['color_id'];
			$result[$i]['color']=$rec['color'];
			$i++;			
		}
		return $result;
	}
}
class TableDisplay {
		
	function __construct(){
		
		
	}
	public function showTable($data){	
		?>
		<div class="container">
		  <table>
			<thead>
			  <tr>
				<th>Color</th>
				<th>Votes</th>
			  </tr>
			</thead>
			<tbody>
<?php
		foreach($data as $item){
?>			
			  <tr>
				<td><a href="#" onclick="getData(<?php echo $item['color_id']?>);"><?php echo $item['color']?></a></td>
				<td>
					<input type="hidden" class ="colorCount" id="count_<?php echo $item['color_id']?>" value="0">
					<span id="span_count_<?php echo $item['color_id']?>"></span>
				</td>        
			  </tr>
<?php
		}
?>			  
			  <tr>
				<td><a href="#" onclick="getTotal();">Total</a></td>
				<td><span  id="total">0</span></td>        
			  </tr>
			</tbody>
		  </table>
		</div>
		<?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>  
  <script src="js/achieve.js"></script> 
</head>
<body>
<?php
	$DB_HOST="localhost";
	$DB_USER="root";
	$DB_NAME="achieve3000";
	$DB_PASSWORD="";
	$db = new PDO("mysql:host=".$DB_HOST.";dbname=".$DB_NAME,$DB_USER,$DB_PASSWORD);
	$dataProvider = new DataProvider($db);
	$dataSet=$dataProvider->getColors();
	
	$dataTable = new TableDisplay();
	$dataTable->showTable($dataSet);
?>

</body>
</html>