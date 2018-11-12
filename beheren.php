<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>beheren</title>
</head>
<body>
<?php
// 1. Connectie maken met de DB
$dbc = mysqli_connect('localhost', 'Joey_24442', '12345', '24442_db2') or die('connecting error');

// 2. Kijken in de database om alle mailadressen tevoorschijn halen
$query = "SELECT * FROM niewsbrief_les7";
$result = mysqli_query($dbc, $query) or die ('Error querying');

echo '<table>';

//. 3 loop waarin alle mailadressen in beeld worden gebreacht
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $voornaam = $row['voornaam'];
    $tussenvoegsel = $row['tussenvoegsel'];
    if($tussenvoegsel == "") {
        $tussenvoegsel = "-";
    }
    $achternaam = $row['achternaam'];
    $mailadres = $row['mailadres'];

    echo '<tr>';
    echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td><td>$mailadres</td>";
    echo '<td><a href="delete.php?id='. $id .'">DELETE</a></td>';
    echo '<td><a href="edit.php?id='. $id .'&voornaam='. $voornaam .'&tussenvoegsel='. $tussenvoegsel .'&achternaam='. $achternaam .'&mailadres='. $mailadres .'">EDIT</a></td>';
    echo '<tr>';
}

echo '</table>';
?>

</body>
</html>