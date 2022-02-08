<?php
session_start();
include("../connection.php");
include("rateheader2.php");

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 

$freight_type=$_POST['freight_type'];

$query="SELECT * FROM freightrate WHERE freight_type='$freight_type'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    $freight_type = $row['freight_type'];
    $rate = $row['rate'];

$_SESSION['freight_type']=$freight_type;

?>
<div style="height: 15%;">
    <center><h2 class="mt-5">Update Rate</h2></center>
</div>
 <center>
<div class="border align-middle w-50 p-4">
    <form method="post" action="updatefreight.php">
    <div><center></center></div>
    <div><center>
        <p>Freight Type: <?php echo $freight_type ?>
        <p>Current Rate: $ <?php echo $rate ?></p>
        <label for="rate">New Rate</label>
        <input type="number" class="form-control col-md-2" name="rate" id="rate"  placeholder="0.00" min="0" max="99999999.99" required>
        <br>
        <button type="Submit" value="submit" class="btn btn-warning btn-sm">Update</button>
    </div></center>
    </form>
</div>
</center>

<?php include("../footer.php"); ?>
