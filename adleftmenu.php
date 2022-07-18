<div class="col-md-3">
<a href="adpanel.php"><span class= "btn btn-info" style = "width : 150px; margin: 20px">Category</span></a>
<a href="addPat.php"><span class= "btn btn-info" style = "width : 150px; margin: 20px">Add Patient</span></a></a>
<a href="seepat.php"> <span class= "btn btn-info" style = "width : 150px; margin: 20px">See Patients</span></a>
    <?php if(isset($_SESSION['aid'])){
        ?>
        <a href="logout.php"> <button class= "btn btn-info" style = "width : 150px; margin: 20px">Logout</button></a>
        <a href="changepass.php"><button class= "btn btn-info" style = "width : 150px; margin: 20px">Change Password</button></a><?php
} ?>

</div>