<?php
session_start();
include("../connection.php");
include("customerheader.php");

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 
$customer_id = 2;

$table_name="orders";
$status="IN PROGRESS";
//query
$sql="SELECT * FROM $table_name WHERE status='$status' AND customer_id = '$customer_id'";
$result=mysqli_query($con,$sql);



?>


        
        <h4><a href = "customerpending.php">Pending</a></h4>
        <h4><a href = "customercompleted.php">Completed</a></h4>
        
        
                <table>
            <caption><strong>Orders In Progress</strong></caption>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Recipient</th>
                    <th>Dom/Int</th>
                    <th>Date Placed</th>
                    <th>Price</th>
                </tr>
            </thead>
            
            <tbody>
                
                <?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $order_id = $row['order_id'];
                        $recipient = $row['recipient_name'];
                        $di = $row['dom_int'];
                        $date_placed = $row['date_placed'];
                        $cost = $row['customer_cost'];

                        
                        echo '<tr><td><a href = "customerspecificorder.php?order_id=' . $order_id . '">' . "$order_id" . '</a></td><td>' . "$recipient" . '</dt><td>' . "$di" . '</dt><td>' . "$date_placed" . '</dt><td>$' . "$cost" . '</dt></tr>';
                        
                    }
                ?>
                
                
            </tbody>
            
        </table>
        
        
        
        
        
        
<?php     
include("../footer.php");
?>