<?php
session_start();
include('dbconnect.php');

$id = $_POST['upr'];
$mobile =$_POST['mobile'];
$address =$_POST['address'];
$city =$_POST['city'];
$cat  =$_POST['category'];

$cmd = "update patients set address = '".$address."', city =  '".$city."', mobile = '".$mobile."', category ='".$cat."' where pid = '".$id."'";


$status = mysqli_query($conn, $cmd);

header('location:updatepat.php?upr='.$id.'&ok=1');



?>