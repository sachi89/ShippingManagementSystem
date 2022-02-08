<?php
session_start();

include("rateheader2.php");


$query="SELECT * FROM portrate";
$result=mysqli_query($con,$query);


?>

<center><h1>Rate Management</h1></center>
    <br>
    <div class="containerrates">
        <form method="post" action="updateportform.php">
            <!-- spaces out table-->
            <style> table { border-spacing: 10px; border-collapse: separate; </style>
            <center><h5>Port Rates</h5>
            <table class="table table-sm table-striped"  style="border-collapse: collapse">
                <thead class="thead-dark">
                <tr>
                    <th>Port</th>
                    <th>Current Rate</th>
                    <th>Update Rate</th>
                </tr>
                </thead>
                <!-- loops through the database table's rows and displays row data on html table -->
                <?php 
                while($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['rate']; ?></td>
                    <td><button type=submit class="btn btn-warning btn-sm" name="country" value="<?php echo $row['country']; ?>">Update</button></td>
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