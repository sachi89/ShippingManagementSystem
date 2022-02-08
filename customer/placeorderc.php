<?php
session_start();
include("../connection.php");
include("customerheader.php");

// placeorder.php page displays form data for user to confirm before placing the order.

$_SESSION['weight'];
$_SESSION['length'];
$_SESSION['width'];
$_SESSION['height'];
$_SESSION['item'];
$_SESSION['freight'];
$_SESSION['qty'];
$_SESSION['destination'];
$_SESSION['country'];
$_SESSION['volume'];
$_SESSION['density'];
$_SESSION['class_code'];
$_SESSION['zone'];
$_SESSION['freightquote'];
$_SESSION['client'];
$_SESSION['phone'];
$_SESSION['pickup_street_address'];
$_SESSION['pickup_city'];
$_SESSION['pickup_state'];
$_SESSION['pickup_zip_code'];
$_SESSION['recipient_name'];
$_SESSION['delivery_street_address'];
$_SESSION['delivery_city'];
$_SESSION['delivery_state_province'];
$_SESSION['delivery_zip_code'];

//put session data into variables
$weight=$_SESSION['weight'];
$length=$_SESSION['length'];
$width=$_SESSION['width'];
$height=$_SESSION['height'];
$item=$_SESSION['item'];
$freight=$_SESSION['freight'];
$qty=$_SESSION['qty'];
$destination=$_SESSION['destination'];
$country=$_SESSION['country'];
$volume=$_SESSION['volume'];
$density=$_SESSION['density'];
$class_code=$_SESSION['class_code'];
$zone=$_SESSION['zone'];
$freightquote=$_SESSION['freightquote'];
$client=$_SESSION['client'];
$phone=$_SESSION['phone'];
$pickup_street_address=$_SESSION['pickup_street_address'];
$pickup_city=$_SESSION['pickup_city'];
$pickup_state=$_SESSION['pickup_state'];
$pickup_zip_code=$_SESSION['pickup_zip_code'];
$recipient_name=$_SESSION['recipient_name'];
$delivery_street_address=$_SESSION['delivery_street_address'];
$delivery_city=$_SESSION['delivery_city'];
$delivery_state_province=$_SESSION['delivery_state_province'];
$delivery_zip_code=$_SESSION['delivery_zip_code'];

//if optional delivery zip code is not posted, set to 0
if(empty($delivery_zip_code)) {
    $delivery_zip_code= 0;
}


?>

<center>
        <div style="height: 10%;"><h2 class="mt-3">Confirm Shipment Details</h2></div>
    
        <div class="w-75 p-2 border">
            <h5>Client Name:</h5>
            <p><?php echo $client;  ?></p>
            <h5>Client Phone:</h5>
            <p><?php echo $phone;  ?></p>
            <h5>Pickup Address:</h5>
            <p><?php echo $pickup_street_address;  ?></p>
            <p><?php echo $pickup_city;  ?></p>
            <p><?php echo $pickup_state;  ?></p>
            <p><?php echo $pickup_zip_code;  ?></p>
            <h5>Recipient Name:</h5>
            <p><?php echo $recipient_name;  ?></p>
            <h5>Delivery Address:</h5>
            <p><?php echo $delivery_street_address;  ?></p>
            <p><?php echo $delivery_city;  ?></p>
            <p><?php echo $delivery_state_province;  ?></p>
            <p><?php echo $delivery_zip_code;  ?></p>
            <p><?php echo $country;  ?></p>
            <br>
            <h5>Shipping Type:</h5>
            <p><?php echo $destination;  ?></p>
            <h5>Item:</h5>
            <p><?php echo $item;  ?></p>
            <h5>Freight Class:</h5>
            <p><?php echo $class_code;  ?></p>
            <h5>Freight Type:</h5>
            <p><?php echo $freight;  ?></p>
            <h5>Quantity:</h5>
            <p><?php echo $qty;  ?></p>
            <h5>Total Price:</h5>
            <p>$<?php echo $freightquote;  ?></p>
            <br>
            <form method="post" action="processorderc.php">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
            <br>
        </div>    
    </center>

<?php


//put variable data back into session
$_SESSION['weight']=$weight;
$_SESSION['length']=$length;
$_SESSION['width']=$width;
$_SESSION['height']=$height;
$_SESSION['item']=$item;
$_SESSION['freight']=$freight;
$_SESSION['qty']=$qty;
$_SESSION['destination']=$destination;
$_SESSION['country']=$country;
$_SESSION['volume']=$volume;
$_SESSION['density']=$density;
$_SESSION['class_code']=$class_code;
$_SESSION['zone']=$zone;
$_SESSION['freightquote']=$freightquote;
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


include("../footer.php");
?>