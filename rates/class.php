<?php
session_start();

include("rateheader2.php");


$query="SELECT * FROM classrate";
$result=mysqli_query($con,$query);


?>

<center><h1>Rate Management</h1></center>
    <br>
    <div class="containerrates">
        <form method="post" action="updateclassform.php">
            <!-- spaces out table-->
            <style> table { border-spacing: 10px; border-collapse: separate; </style>
            <center><h5>Freight Class Rates</h5>
            <table class="table table-sm table-striped"  style="border-collapse: collapse">
                <!-- loops through the database table's rows and displays row data on html table -->
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Class</th>
                    <th scope="col">Current Rate</th>
                    <th scope="col">Update Rate</th>
                </tr>
                </thead>
                <?php 
                while($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['class_code']; ?></td>
                    <td><?php echo $row['rate']; ?></td>
                    <td><button type="submit" class="btn btn-warning btn-sm" name="class_code" value="<?php echo $row['class_code']; ?>">Update</button></td>
                </tr>
                <?php 
                }
                if(!$result) {die(mysqli_error());}
                ?>
            </table>
            
            <br>
            </center>
        </form>
    </div>


<?php 
include("footer.php");
?>