<?php
session_start();
include('header.php');
include('dbconnect.php');

if(!isset($_SESSION['aid'])){
    header('location:login.php');
}
include('adleftmenu.php');?>
<div class="col-md-9" style= "height: 455px">
        
<div class="col-md-6 text-left addpat">
    
    <?php
    $id  = $_GET['upr'];
    $cmd = "select * from patients where pid = ".$id."";

    $data = mysqli_query($conn, $cmd);
    
       $row = mysqli_fetch_array($data);
          ?>
          <form action="updatereq.php" method="post" >
              <input type="hidden" name="upr" value="<?php echo $id ?>">
             Name:   &nbsp&nbsp&nbsp<input type="text" name="name" value= "<?php echo $row['name'] ?>" required disabled><br>
            Mobile:  &nbsp&nbsp<input type="text" name="mobile" value= "<?php echo $row['mobile'] ?>" required><br>
            Address:<input type="text" name="address" value = "<?php echo $row['address'] ?>" required><br>
            City :  &nbsp&nbsp&nbsp&nbsp <input type="text" name="city" value = "<?php echo $row['city'] ?>" required><br>
            Dept. &nbsp&nbsp&nbsp&nbsp
            <?php
                $cmd1 = "select catname from category";
                $data1 =mysqli_query($conn, $cmd1);
                $numrow1 = mysqli_num_rows($data1);
               
          ?>
            <select name="category" id="category" required>
                <option value="">Select one </option>

                <?php
                while($row1 = mysqli_fetch_array($data1)){
                    ?>
                    <option value="<?php echo $row1['catname'];?>"<?php if($row1['catname']==$row['category']){echo "selected";}  ?>><?php echo $row1['catname'];?></option>
                    <?php
                }
                ?>
            </select>
                <input type="submit" value="update">
        </form>
            
      
        <p>
             <?php
             if(isset($_GET['ok'])){
               Echo " Entry Updated";
             }
             ?>
        </p>
    </div>
    
    





  

</table>








</div>




<?php
include('footer.php');


?>
