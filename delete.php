<?php
$id = $_GET['id'];
$dbc = mysqli_connect('localhost', '24830_db', '24830db', '24830_db')or die ('ERROR CONNECTING');
$query = "DELETE FROM nieuwsbrief WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('ERROR DELETING.');
header("Location: beheren.php");