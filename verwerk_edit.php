<?php

$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];

$host = 'localhost';
$user = 'Joey_24442';
$password = '12345';
$dbname = '24442_db2';

$dbc =  mysqli_connect($host, $user, $password, $dbname) or die ('There is no connection to the database!');
$query =  "UPDATE niewsbrief_les7 ";
$query .= "SET voornaam = '$voornaam', tussenvoegsel = '$tussenvoegsel', achternaam = '$achternaam', mailadres = '$mailadres'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($dbc, $query) or die('error query');

header("Location: beheren.php");



