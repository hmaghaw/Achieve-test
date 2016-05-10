<?php
spl_autoload_register();

$db=DatabaseHandler::getDBHandler();
$id=$_REQUEST['id'];
$dataProvider = new DataProvider($db);
$result=$dataProvider->getColorVotes($id);
echo $result['color_total'];
