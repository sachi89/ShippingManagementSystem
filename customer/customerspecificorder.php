<?php
session_start();
include("../connection.php");
include("customerheader.php");

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 
$order_id = $_GET['order_id'];

$table_name="orders";
//query
$sql="SELECT * FROM $table_name WHERE order_id = '$order_id'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$client = $row['client'];
$phone = $row['phone'];
$pickup_st_add = $row['pickup_street_address'];
$pickup_city = $row['pickup_city'];
$pickup_state = $row['pickup_state'];
$pickup_zip = $row['pickup_zip_code'];
$recipient = $row['recipient_name'];
$delivery_st_add = $row['delivery_street_address'];
$delivery_city = $row['delivery_city'];
$delivery_state_province = $row['delivery_state_province'];
$delivery_zip = $row['delivery_zip_code'];
$delivery_country = $row['delivery_country'];
$class_code = $row['class_code'];
$item_name = $row['item_name'];
$freight_type = $row['freight_type'];
$quantity = $row['quantity'];
$length = $row['length'];
$width = $row['width'];
$height = $row['height'];
$weight = $row['weight'];
$volume = $row['volume'];
$density = $row['density'];
$zone = $row['zone'];
$di = $row['dom_int'];
$customer_cost = $row['customer_cost'];
$date_placed = $row['date_placed'];
$date_completed = $row['date_completed'];
$status = $row['status'];
$cur_vehicle_id = $row['cur_vehicle_id'];
$item_warning = $row['item_warning'];
$party_warning = $row['party_warning'];

if ($date_completed == '') {
    $date_completed = 'Package has yet to reach its destination';
}


?>


        
        <h1>Order ID: <?php echo "$order_id"; ?></h1>
        <h2>Recipient: <?php echo "$recipient"; ?></h2>
        <h2>Pickup Address</h2>
        <h3><?php echo "$pickup_city, $pickup_state, US"; ?></h3>
        <h3><?php echo "$pickup_st_add, $pickup_zip"; ?></h3>
        
        <h2>Delivery Address</h2>
        <h3><?php echo "$delivery_city, $delivery_state_province, $delivery_country"; ?></h3>
        <h3><?php echo "$delivery_st_add, $delivery_zip"; ?></h3>
        
          <table>
            <caption><strong>Cargo</strong></caption>
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Frieght Type</th>
                </tr>
            </thead>
            
            <tbody>
                <?php echo '<tr><td>' . "$item_name" . '</dt><td>' . "$quantity" . '</dt><td>' . "$freight_type" . '</dt></tr>'; ?>
                </tbody>
                </table>
        <h2>Date Placed: <?php echo "$date_placed"; ?></h2>
        <h2>Date Completed: <?php echo "$date_completed"; ?></h2>
        <h2>Price: $<?php echo "$customer_cost"; ?></h2>
        <h2>Status: <?php echo "$status"; ?></h2>
        
<?php     
include("../footer.php");
?>