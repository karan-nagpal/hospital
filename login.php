<?php  include('header.php') 

?>

<div class="col-md-12 mainlog text-center">
<h1>Patient Care System</h1>
    <div class="col-md-4"></div>
    <div class="col-md-3 logbox text-center">
       
        <form action="log.php" method= "post">
            <input type="text" name="user" placeholder= "Enter ID">
            <input type="password" name="pass" placeholder= "enter your password">
            <input type="submit" >

        </form>
        <p class="text-danger"> <?php
        if(isset($_GET['error'])){
            echo " Incorrect Username or Password";
        }
        ?>
    </div>
<div class="col-md-4"></div>
</div>



<?php include('footer.php'); ?>