<?php
session_start();
include("../connection.php");

// processorder.php processes the order by inserting the order data into the orders table of the database.

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


$table_name="orders";
// query to insert order info to orders table
$sql = "INSERT INTO $table_name (client, phone, pickup_street_address, pickup_city, pickup_state, pickup_zip_code, recipient_name, 
delivery_street_address, delivery_city, delivery_state_province, delivery_country, dom_int, class_code, 
item_name, freight_type, quantity, length, width, height, weight, customer_cost, volume, density, delivery_zip_code, zone) VALUES ('$client', '$phone', 
'$pickup_street_address', '$pickup_city', '$pickup_state', '$pickup_zip_code', '$recipient_name', '$delivery_street_address', 
'$delivery_city','$delivery_state_province', '$country', '$destination', '$class_code', '$item', 
'$freight', '$qty', '$length', '$width', '$height', '$weight', '$freightquote', '$volume', '$density', '$delivery_zip_code', '$zone')";

    if(mysqli_query($con, $sql)){
                header('location: confirmationc.php');
            } else{
                echo "<script>alert('Could not process order. Please try again.');
        		    				window.location='placeorderc.php';
        			    			</script>";
                }

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


?>