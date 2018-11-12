<?php
// 0. uitlezen van de post array
$subject = $_POST['subject'];
$message = $_POST['message'];

// 1. Connectie maken met de DB
$dbc = mysqli_connect('localhost', 'Joey_24442', '12345', '24442_db2') or die('connecting error');

// 2. Kijken in de database om alle mailadressen tevoorschijn halen
$query = "SELECT mailadres FROM niewsbrief_les7";
$result = mysqli_query($dbc, $query) or die ('Error querying');

//. 3 loop waarin een bericht word verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'mail verzonden naar ' . $row['mailadres'] . "<br>";
    //variabellen voor de mail
    $to = $row['mailadres'];
    $headers = 'FROM: 24442@ma-web.nl';
    //mail verzenden
    mail($to,$subject,$message,$headers);
}

echo 'Klaar met verzenden.';