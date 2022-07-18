<?php
include('dbconnect.php');

$catid = $_GET['cid'];

$cmd = "delete from category where catid = '".$catid."'";

$status = mysqli_query($conn, $cmd);

if($status){
    header('location:adpanel.php?ok');
}else{
    echo mysqli_error($conn);
}

?>