<?php 
include('dbconnect.php');
$category = $_POST['category'];
$cmd = "insert into category(catname) values('".$category."')";

$status = mysqli_query($conn, $cmd);

if($status){
    header('location:adpanel.php?id=1');
}else{
    header('location:adpanel.php?id=0');
   
}
?>