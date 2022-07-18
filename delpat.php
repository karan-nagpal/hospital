<?php
session_start();
include('dbconnect.php');

$id = $_GET['dpr'];

$cmd = "delete from patients where pid = ".$id."";

$status = mysqli_query($conn, $cmd);

if($status){
    header('location:seepat.php?ok=1');
}else{
    header('location:seepat.php?ok=0');
}


?>
