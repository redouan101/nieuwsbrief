<?php
// DATA UITLEZEN
$subject = $_POST['subject'];
$message = $_POST['message'];



// DATABASE INTERACTIE

// 1. VERBINDING MAKEN MET DE DATA BASE
$dbc = mysqli_connect('localhost', '24830_db', '24830db', '24830_db')or die ('ERROR CONNECTING');

// 2. OPDRACHT (QUERY)SCHRIJVEN VOOR DE DATABASE
$query = "SELECT mailadres From nieuwsbrief tutorial";


// 3. QUERY UITVOEREN

$result = mysqli_query($dbc,$query) or die ('ERROR QUERYING.');

// MAILEN MET WHILE-LOOP"
    while ($row = mysqli_fetch_array($result)){
        echo 'Mail verzonden naar:  ' . $row['mailadres'] . '<br>';
        //Variabelen voor de mail
        $to = $row['mailadres'];
        $headers = 'From: redouan101@outlook.com';
        // Mail verzenden
        mail($to,$subject,$message,$headers);
    }

    echo 'Klaar met verzenden.';