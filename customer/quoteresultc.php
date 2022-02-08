<?php
session_start();
include("../connection.php");
include("customerheader.php");

//quoteresult.php calculates and displays the freight quote for the user to decide if he/she would like to book the shipment

//put post data from previous form into variables
$weight=$_POST['weight'];
$length=$_POST['length'];
$width=$_POST['width'];
$height=$_POST['height'];
$item=$_POST['item'];
$freight=$_POST['freight'];
$qty=$_POST['qty'];
$client=$_POST['client'];
$phone=$_POST['phone'];
$pickup_street_address=$_POST['pickup_street_address'];
$pickup_city=$_POST['pickup_city'];
$pickup_state=$_POST['pickup_state'];
$pickup_zip_code=$_POST['pickup_zip_code'];
$destination=$_POST['destination'];
$recipient_name=$_POST['recipient_name'];
$delivery_street_address=$_POST['delivery_street_address'];
$delivery_city=$_POST['delivery_city'];
$dstate=$_POST['dstate'];
$delivery_state_province=$_POST['delivery_state_province'];
$delivery_zip_code=$_POST['delivery_zip_code'];
$country=$_POST['country'];


//calculate volume and then density
$volume = $height*$width*$length;
$cubicft=$volume/1728;
//formats number to 1 decimal place
$cubicft = number_format($cubicft, 1);
$density=$weight/$cubicft;
$density = number_format($density, 1);

//query classrate table to get freight class and rate by comparing density
$query="SELECT * FROM classrate WHERE gdensity <= '$density' AND ldensity > '$density'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
$class_code=$row['class_code'];
$classrate=$row['rate'];
    
//query freightrate table to get rate by freight type
$query="SELECT * FROM freightrate WHERE freight_type = '$freight'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
$frate=$row['rate'];
//freight type rate multiplied by quantity of freight for freight type quote
$freightrate=$frate*$qty;

//query statezones table to get zone by state
$query="SELECT * FROM statezones WHERE state = '$pickup_state'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
//origin zone
$zone=$row['zone'];

//query zonerate table to get rate by zone
$query="SELECT * FROM zonerate WHERE zone = '$zone'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
//origin zone rate    
$zonerate=$row['rate'];

if($destination=="DOMESTIC") {
    //if destination is domestic, query staterate table to get zone of state
    //then query zonerate table to get rate by zone
    
    //query statezones table to get zone by state
    $query="SELECT * FROM statezones WHERE state = '$dstate'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    $dzone=$row['zone'];

    //query zonerate table to get rate by zone
    $query="SELECT * FROM zonerate WHERE zone = '$dzone'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    $dzonerate=$row['rate'];
    $portrate=0;
    $delivery_state_province=$dstate;
}
if($destination=="INTERNATIONAL") {
    //if international, query portrate table to get rate by country

    //query portrate table to get rate by country
    $query="SELECT * FROM portrate WHERE country = '$country'";
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    $portrate=$row['rate'];
    $dzonerate=0;
    $dzone=0;
    
}
//add all rates to get freight quote
$freightquote=$classrate+$freightrate+$zonerate+$dzonerate+$portrate;

?>

<center>
<div></div>
<div class="w-50 p-2"><br><h3>Freight Quote Results:</h3>
<br>
<table class="table">
    <tr>
        <th>Freight Class Rate:</th>
        <td>$<?php echo $classrate ?></td>
    </tr>
    <tr>
        <td>Freight Class:</td>
        <td><?php echo $class_code ?></td>
    </tr>
    <tr>
        <th>Freight Type Rate:</th>
        <td>$<?php echo $freightrate ?></td>
    </tr>
    <tr>
        <td>Freight Type:</td>
        <td><?php echo $freight ?></td>
    </tr>
    <tr>
        <td>Freight Quantity:</td>
        <td><?php echo $qty ?></td>
    </tr>
    <tr>
        <th>Origin Rate:</th>
        <td>$<?php echo $zonerate ?></td>
    </tr>
    <tr>
        <th>Destination Rate:</th>
        <td></td>
    </tr>
    <tr>
        <td>Zone Rate:</td>
        <td>$<?php echo $dzonerate ?></td>
    </tr>
    <tr>
        <td>Port Rate:</td>
        <td>$<?php echo $portrate ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>Freight Quote:</th>
        <td>$<?php echo $freightquote ?></td>
    </tr>
</table>

<form method="post" action="placeorderc.php">
    <br>
    <button type="submit" class="btn btn-primary">Book Shipment</button>
</form>

</div>

</center>
</body>
</html>



<?php
//put values into session
$_SESSION['weight']=$weight;
$_SESSION['length']=$length;
$_SESSION['width']=$width;
$_SESSION['height']=$height;
$_SESSION['item']=$item;
$_SESSION['freight']=$freight;
$_SESSION['qty']=$qty;
$_SESSION['client']=$client;
$_SESSION['phone']=$phone;
$_SESSION['pickup_street_address']=$pickup_street_address;
$_SESSION['pickup_city']=$pickup_city;
$_SESSION['pickup_state']=$pickup_state;
$_SESSION['pickup_zip_code']=$pickup_zip_code;
$_SESSION['recipient_name']=$recipient_name;
$_SESSION['delivery_street_address']=$delivery_street_address;
$_SESSION['delivery_city']=$delivery_city;
$_SESSION['delivery_state_province']=$delivery_state_province;
$_SESSION['delivery_zip_code']=$delivery_zip_code;
$_SESSION['destination']=$destination;
$_SESSION['country']=$country;
$_SESSION['volume']=$volume;
$_SESSION['density']=$density;
$_SESSION['class_code']=$class_code;
$_SESSION['zone']=$dzone;
$_SESSION['freightquote']=$freightquote;


include("../footer.php");
?>