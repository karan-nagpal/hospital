<?php
Session_start();
include('dbconnect.php');

$username = $_POST['user'];
$password = $_POST['pass'];

$cmd = "Select aid from admin where name= '".$username."' and password = '".$password."'";

$data = mysqli_query($conn, $cmd);
$numrow = mysqli_num_rows($data);
if ($numrow>0){
 $row = mysqli_fetch_array($data);
 $_SESSION['aid'] = $row['aid'];
 $_SESSION['aname'] = $username;
 header('location:adpanel.php');
}else{
    header('location:login.php?error=0');   
}

?>