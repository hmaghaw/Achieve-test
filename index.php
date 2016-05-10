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
	spl_autoload_register();

	$db=DatabaseHandler::getDBHandler();
	$dataProvider = new DataProvider($db);
	$dataSet=$dataProvider->getColors();
	
	$dataTable = new TableDisplay();
	$dataTable->showTable($dataSet);
?>

</body>
</html>