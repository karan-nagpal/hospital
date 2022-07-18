<?php
include('dbconnect.php');

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$a = $page*8-8;
$b =$a + 8;

?>

<table class="table table-dark" style="height: auto;">
    <tr>
        <th>Patient Id/th>
        <th>Pateint name</th>
        <th>Address</th>
        <th>City / Village</th>
        <th>Department</th>
        <th>Mobile No</th>
        <th>Date of Admission</th>
        <th>Time of Admission</th>
        <th></th> </tr>
        <tbody id="myTable">
    <?php

    $cmd = "select * from patients limit ".$a.", ".$b."";

    $data = mysqli_query($conn, $cmd);
    $numrow = mysqli_num_rows($data);
    
    if($numrow < 0 ){
        Echo " no data Found";
    }else { $sn =0;
        while($row = mysqli_fetch_array($data)){
            $sn++
            ?>
            <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $row['1']; ?></td>
            <td><?php echo $row['2']; ?></td>
            <td><?php echo $row['3']; ?></td>
            <td><?php echo $row['5']; ?></td>
            <td><?php echo $row['4']; ?></td>
            <td><?php echo $row['6']; ?></td>
            <td><?php echo $row['7']; ?></td>
            <td><a href="updatepat.php?upr=<?php echo $row['0'];?>">Update</a></td>
            <td><a href="delpat.php?dpr=<?php echo $row['0'];?>">Delete</a></td>
        </tr>
            <?php
        }

       
    
    }
?>
</tbody>
</table>
