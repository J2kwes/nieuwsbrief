<?php
    //post array uitlezen
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mailadres = $_POST['mailadres'];

    //data in database stoppen
    // concectie maken met database
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = '24442_db';

    $dbc =  mysqli_connect($host, $user, $password,$dbname) or die ('There is no connection to the database!');
    //2. opdracht schrijven voor database
    $query =  "INSERT INTO niewsbrief_les7 VALUES (0, '$voornaam','$tussenvoegsel', '$achternaam', '$mailadres')";
    //3. query uitvoeren
    $result = mysqli_query($dbc, $query) or die('qeury error');
    //4. verbinding verbreken
    mysqli_close($dbc);



    //bevestigen binnenkomst database
    if ($result) {
        echo 'de volgende gegevens zijn doorgegeven aan de database.' . '<br>' . '<br>';
        echo 'voornaam: ' . $voornaam . '<br>';
        echo 'tussenvoegsel: ' . $tussenvoegsel . '<br>';
        echo 'achternaam: ' . $achternaam . '<br>';
        echo 'mailadres: ' . $mailadres . '<br>';
    } else {
        echo 'exuser er is iets misgegaan probeer het opnieuw';
    }

