<?php
session_start();
include("../connection.php");
include("rateheader2.php");

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 

$country=$_POST['country'];

$query="SELECT * FROM portrate WHERE country='$country'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    $country = $row['country'];
    $rate = $row['rate'];

?>
<div style="height: 15%;">
    <center><h2 class="mt-5">Update Rate</h2></center>
</div>
 <center>
<div class="border align-middle w-50 p-4">
    <form method="post" action="updateport.php">
    <div><center></center></div>
    <div><center>
        <p>Port: <?php echo $country ?></p>
        <p>Current Rate: $ <?php echo $rate ?></p>
        <label for="rate">New Rate</label>
        <input type="number" class="form-control col-md-2" name="rate" id="rate"  placeholder="0.00" min="0" max="99999999.99" required>
        <br>
        <button type="Submit" value="submit" class="btn btn-warning btn-sm">Update</button>
    </div></center>
    </form>
</div>
</center>

<?php 
$_SESSION['country']=$country;
include("../footer.php"); ?>