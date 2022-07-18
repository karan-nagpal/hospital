<?php
$host = "localhost";
$user = "root";
// $user = "id18942869_karan";
$pass = '';
// $pass = 'm>G#g{i5$WFD#Dns';
// $database = 'id18942869_mydb';
$database = 'hospital';



$conn = mysqli_connect($host, $user, $pass, $database);

if(!$conn){
    die("ERROR: Database not connected");
}