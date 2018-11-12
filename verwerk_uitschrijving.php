<?php
// FORMULIER UITLEZEN (DATA BINNENHALEN)
$mailadres = $_POST['mailadres'];
// CONNECTIE MAKEN MET DE DATABASE



$dbc = mysqli_connect('localhost', '24830_db', '24830db', '24830_db')or die ('ERROR CONNECTING');
// QUERY SCHRIJVEN VOOR ZOEKEN NAAR DATA
$query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die ('ERROR QUERYING(SELECT)');
// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result);
//TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIE AAN VERBINDEN
if ($number_of_rows == 0){
    echo 'helaas, het mailadres '. $mailadres . ' staat niet in de database.<br> ';
    echo '<a href="uitschrijven.php">Klik hier om het nogmaals te proberen.</a><br><br>';
    exit();
} else{
    echo 'Hoera! Het mailadres ' . $mailadres . ' is gevonden in de database!';
}
//
$result = mysqli_query($dbc, $query) or die ('ERROR QUERYING(DELETE)');
// CONNECTIE VERBREKEN
mysqli_close($dbc);
// VERSLAG DOEN VAN HET RESULTAAT
echo 'Het mailadres ' . $mailadres . ' is verwijderd uit de database! <br> ';
?>
<a href="index.php">Klik hier om terug te keren naar de homepage</a><br><br>
