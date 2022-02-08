<?php
session_start();
include("../connection.php");
include("customerheader.php");

// confirmation.php displays order details and confirms that the order has been placed and is pending approval. 

//put session data into variables
$weight=$_SESSION['weight'];
$length=$_SESSION['length'];
$width=$_SESSION['width'];
$height=$_SESSION['height'];
$volume=$_SESSION['volume'];
$density=$_SESSION['density'];
$item=$_SESSION['item'];
$freight=$_SESSION['freight'];
$qty=$_SESSION['qty'];
$destination=$_SESSION['destination'];
$country=$_SESSION['country'];
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

?>

<center>
        <div style="height: 10%;"><h2 class="mt-3">Thank you!</h2>
        <h4>Your shipment order has been received and is pending for approval.</h4></div>
    
        <div class="w-75 p-2 border">
            <h4>Shipment Details:</h4>
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
            <h5>Weight:</h5>
            <p><?php echo $weight;  ?> lb</p>
            <h5>Length:</h5>
            <p><?php echo $length;  ?> in</p>
            <h5>Width:</h5>
            <p><?php echo $width;  ?> in</p>
            <h5>Height:</h5>
            <p><?php echo $height;  ?> in</p>
            <h5>Density:</h5>
            <p><?php echo $density;  ?> lb/cubic feet</p>
            <h5>Freight Class:</h5>
            <p><?php echo $class_code;  ?></p>
            <h5>Freight Type:</h5>
            <p><?php echo $freight;  ?></p>
            <h5>Quantity:</h5>
            <p><?php echo $qty;  ?></p>
            <h5>Total Price:</h5>
            <p>$<?php echo $freightquote;  ?></p>
            <br>
        </div>    
    </center>

<?php


include("../footer.php");
?>