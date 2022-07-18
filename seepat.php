<?php
session_start();
include('header.php');
include('dbconnect.php');

if(!isset($_SESSION['aid'])){
    header('location:login.php');
}
include('adleftmenu.php');?>
<div class="col-md-9" style= "height: 475px">
<p>

<?php
if(isset($_GET['ok'])){
    if($_GET['ok']==1){
        echo " Data deleted";
    }
}
$cmd = "select * from patients";

    $data = mysqli_query($conn, $cmd);
    $numrow = mysqli_num_rows($data);
    $noOfpages =ceil($numrow/8);
?>
<div class="col-md-12">
    <input type="text" id="myInput" placeholder="search">
    Sort By City
<select name="sortcity" >
        <option value="all">please select </option>

        <?php
   while($row = mysqli_fetch_array($data)){
        ?>
                    <option value="<?php echo $row['3']; ?>"><?php echo $row['3']; ?></option>
                    <?php
                }
                ?>
                </select>
                Sort By Department
    <select name="sortcat" id="">
        <option value="all">please select </option>

        <?php
    $cmd2 = "select * from category";
    
    $data = mysqli_query($conn, $cmd2);
    while($row2 = mysqli_fetch_array($data)){
        ?>
                    <option value="<?php echo $row2['catname'];?>"><?php echo $row2['catname'];?></option>
                    <?php
                }
                ?>
                </select>
</div>
</p>
<div id="tablediv">

</div>
<p id="numbering" class= "text-center"></P>
</div>

<script>

$(document).ready(function(){

var currentpage=1;
       

		$('#tablediv').load('patloadingfile.php');

		for(i=1; i<=<?php echo $noOfpages; ?>; i++)
		{
			$("#numbering").append("<span class='btn btn-warning'>"+i+"</span>");
		}


		$("#numbering span").click(function(){

			$('#tablediv').load('patloadingfile.php?page='+$(this).text());
			currentpage=$(this).text();
		});

        $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



</script>


<?php
include('footer.php');


?>
