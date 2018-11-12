<?php

    // POST ARRY UITLEZEN
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mailadres = $_POST['mailadres'];

    //DATA IN DATABASE STOPPPEN
// 1. VERBINDING MAKEN MET DE DATA BASE
$dbc = mysqli_connect('localhost', '24830_db', '24830db', '24830_db')or die ('ERROR CONNECTING');

// 2. OPDRACHT (QUERY)SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";

// 3. QUERY UITVOEREN

$result = mysqli_query($dbc,$query) or die ('ERROR QUERYING.');

    //4. VERBINDING VERBREKEN
    mysqli_close($dbc);




    // BEVSTIGEN DAT DATA IN DATABASE START
    if ($result){
        echo 'De volgende gegevens zijn toegevoegd aan de data base:<br>';
        echo $voornaam . '<br>';
        echo $tussenvoegsel . '<br>';
        echo $achternaam . '<br>';
        echo $mailadres . '<br>';

    }  else{
        echo 'SORRY ER IS IETS MISGEGAAN. PROBEER HET OPNIEUW.';
    }
