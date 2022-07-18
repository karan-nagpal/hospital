<?php
session_start();
include('header.php');
include('dbconnect.php');

if(!isset($_SESSION['aid'])){
    header('location:login.php');
}
include('adleftmenu.php');?>
<div class="col-md-9 text-center" style= "height: 455px">
    <h1>Add Patient</h1>
    <div class="col-md-12 addpat text-center">

        <form action="addp.php" method="post" class="addpat">
            <input type="text" name="name" placeholder="Pateint Name" required>
            <input type="text" name="mobile" placeholder="Mobile No" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="city" placeholder="City / Village" required>

            <?php
                $cmd = "select catname from category";
                $data =mysqli_query($conn, $cmd);
                $numrow = mysqli_num_rows($data);
               
          ?><p>Please choose Department
            <select name="Category" id="category" required>
                <option value="">Select one

                <?php
                while($row = mysqli_fetch_array($data)){
                    ?>
                    <option value="<?php echo $row['catname'];?>"><?php echo $row['catname'];?></option>
                    <?php
                }
                ?>
            </select></p>
            <input type="submit" class="button btn-default" style="width: 100px; margin:10px">
        </form>
        <p><?php
        if(isset($_GET['pd'])){
            if($_GET['pd']==1){
                echo "Patient Added succesfully!";
            }else{
                echo "ERROR!  patient No added";
            }
        } ?>
    </div>
</div>



<?php
include('footer.php');


?>