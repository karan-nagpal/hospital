<?php
session_start();
include('dbconnect.php');

$pname  =$_POST['name'];
$mobile =$_POST['mobile'];
$address =$_POST['address'];
$city =$_POST['city'];
$cat  =$_POST['Category'];
$date = date('d/m/Y');
$time = date('h:i:s');

$cmd = "insert into patients (name, address, city, mobile, category, date, time) Values( '".$pname."','".$address."','".$city."','".$mobile."','".$cat."','".$date."','".$time."')";


$status = mysqli_query($conn, $cmd);

if($status){
    header('location:addPat.php?pd=1');
}else{
    header('location:addPat.php?pd=0');   
}



?>