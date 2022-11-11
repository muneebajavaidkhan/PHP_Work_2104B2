<?php include 'header.php'; ?>

<?php include 'connection.php'; ?>


<?php

$query = 'select * from student';

if(isset($_GET['srch'])){

    $search = $_GET['search']; //abc

   $query  = "select * from student where StduentName like '%$search%' or Education like '%$search%'";

}

   ($res = mysqli_query($con, $query)) or die('incorrect query');
   $rowCount = mysqli_num_rows($res); //7


?>


<form action = "" method = "get">
                <div class="input-group col-lg-6 container mb-5 mt-3">
                    <input type="text" class="form-control" placeholder="Search" name = "search"> 
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" name = "srch" >Search</button>
                        <a href="ViewData.php" class = "btn btn-primary ml-3">Reset</a>
                    </div>
                        
                </div>
                
    </form>

<?php
if ($rowCount > 0) {//7>0
?>







    <table class = "container table table-bordered mt-5">
    <tr>
        <th>Name</th>
        <th>Education</th>
        <th>Fees</th>
        <th>Gender</th>
        <th>City</th>
        <th>Courses</th>
        <th></th>
    </tr>
    <?php  while(  $data = mysqli_fetch_assoc($res) )  {
        echo '<tr>';
    ?>
            <td> <?= $data['StduentName']?>  </td>
            <td> <?= $data['Education']?> </td>
            <td><?= $data['Fess']?></td>
            <td><?= $data['Gender']?></td>
            <td><?= $data['City']?></td>
            <td><?= $data['Courses']?></td>
            <td>   <a href="" class = "btn btn-primary">Edit</a>  </td>
            <td>   <a href=""  class = "btn btn-danger">Delete</a>  </td>     
    <?php
        echo '</tr>';
    } ?>       
    </table>   
<?php   
} else {
    echo '<p>No Record Found</p>';
}


?>
