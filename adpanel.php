<?php
session_start();
include('header.php');
include('dbconnect.php');

?>
<?php if(!isset($_SESSION['aid'])){
  header('location:login.php');
}
?>
<div class="col-md-12">
    <?php $name = $_SESSION['aname'];
    echo "Welcome :"."   ".$name; 
    
    
    ?>

        <div class="col-md-3">
             <?php include('adleftmenu.php');?>
        </div>
        <div class="col-md-9 tmar" style= "height: 455px">
            <div class="col-md-3 tmar text-right" style="border: 1px solid black; padding:30px">

                 <form action="addcat.php" method="post">
                 <input type="text" name="category" placeholder="New Category here.." required>
                 <input type="submit" Value="Add Category" class="tmar">
                 </form>
                  <p class= "text-center tmar">
                      <?php if(isset($_GET['id'])){
                         if($_GET['id']==1){
                        echo "Category Added";
                          }
                         if($_GET['id']==0){
                        echo "Error: Category not Added!";
                         }
                        ?>
                    </p>
                    <?php
                         }
                    ?>
        </div>

<div id ="show category" class="col-md-9" >
<?php
    $cmd = "select * from category";

    $data  = mysqli_query($conn, $cmd);
   $numrow = mysqli_num_rows($data);
?>
    <p><?php
    if($numrow<0){
        echo  "NO data found";
    }else{
        echo "Total Categories : "."  ". $numrow;
    }?>
    <table class= "table">
   
			<tr>
				<th>S.No</th>
				<th>Category</th>
                <th>action</th>			
			</tr>
    <?php
    $sn = 0;
    while($row = mysqli_fetch_array($data)){
            $sn++;
            ?>  
                <tr>
					<td><?php echo $sn; ?></td>
					<td><?php echo $row['catname']; ?></td>
					<td><a href="delcat.php?cid=<?php echo $row[0]; ?>">Delete</a></td>
				</tr>
            <?php
            }    
    
?>
</table>
</div>    


</div>

</div>
<?php
include('footer.php');

?>