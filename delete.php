<?php
$id = $_GET['id'];

//dbc gegevens
$host = 'localhost';
$user = 'Joey_24442';
$password = '12345';
$dbname = '24442_db2';

$dbc =  mysqli_connect($host, $user, $password,$dbname) or die ('There is no connection to the database!');
$query = "DELETE FROM niewsbrief_les7 WHERE id = $id";
$result = mysqli_query($dbc,$query) or die ('ERROR deleting');
header("location: beheren.php");


