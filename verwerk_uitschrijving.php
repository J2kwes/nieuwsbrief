<?php
// het formulier uitlezen
$mailadres = $_POST['mailadres'];
// concectie maken met database
$host = 'localhost';
$user = 'Joey_24442';
$password = '12345';
$dbname = '24442_db2';

$dbc =  mysqli_connect($host, $user, $password,$dbname) or die ('There is no connection to the database!');

$mailadres = $_POST['mailadres'];

$query = "SELECT * FROM `niewsbrief_les7` WHERE mailadres = '$mailadres'";

$result = mysqli_query($dbc,$query) or die ('There is a problem with your SELECT query!');

$numbers_of_rows = mysqli_num_rows($result);

if ($numbers_of_rows == 0) {
    echo 'An error occured, the email address <b>' . $mailadres . '</b> is not found in our database!';
    echo '<a href="uitschrijven.php"><br>Click here to try again...</a><br>';
    exit();
} else {
    echo 'The email address ' . $mailadres . ' has been found in the database! <br>';
}

$dbc = mysqli_connect($host, $user, $password,$dbname) or die ('There is no connection to the database!');
$query = "DELETE FROM `niewsbrief_les7` WHERE mailadres = '$mailadres'";

$result = mysqli_query($dbc,$query) or die (' There is a problem with your DELETE query!');

echo 'The email address <b>' . $mailadres . '</b> has successfully been removed from the database!';
mysqli_close($dbc);
?>

<a href="index.php"><br>Click here to go back to the front page!</a>