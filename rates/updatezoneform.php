<?php
session_start();
include("../connection.php");
include("rateheader2.php");

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 

$zone=$_POST['zone'];

$query="SELECT * FROM zonerate WHERE zone='$zone'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    $zone = $row['zone'];
    $rate = $row['rate'];

$_SESSION['zone']=$zone;

?>
<div style="height: 15%;">
    <center><h2 class="mt-5">Update Rate</h2></center>
</div>
 <center>
<div class="border align-middle w-50 p-4">
    <form method="post" action="updatezone.php">
    <div><center></center></div>
    <div><center>
        <p>Zone <?php echo $zone ?></p>
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