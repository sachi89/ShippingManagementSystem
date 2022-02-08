<?php
session_start();

include("rateheader2.php");


$query="SELECT * FROM freightrate";
$result=mysqli_query($con,$query);


?>

<center><h1>Rate Management</h1></center>
    <br>
    <div class="containerrates">
        <form method="post" action="updatefreightform.php">
            <!-- spaces out table-->
            <style> table { border-spacing: 10px; border-collapse: separate; </style>
            <center><h5>Freight Type Rates</h5>
            <table class="table table-sm table-striped"  style="border-collapse: collapse">
                <!-- loops through the database table's rows and displays row data on html table -->
                <thead class="thead-dark">
                <tr>
                    <th>Freight</th>
                    <th>Current Rate</th>
                    <th>Update Rate</th>
                </tr>
                </thead>
                <?php 
                while($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['freight_type']; ?></td>
                    <td><?php echo $row['rate']; ?></td>
                    <td><button type=submit class="btn btn-warning btn-sm" name="freight_type" value="<?php echo $row['freight_type']; ?>">Update</button></td>
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