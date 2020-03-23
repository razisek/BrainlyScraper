<?php
header('Content-Type: application/json');
include 'brainly.php';

$query = 'kapan terjadinya bulan puranama?';
$result = Brainly($query);
echo $result;

?>