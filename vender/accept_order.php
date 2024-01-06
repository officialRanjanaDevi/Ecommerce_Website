<?php
include 'authguard.php';
include "../shared/connection.php";
include "menu.html";
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];


$order_id=$_POST['order_id'];
$order_date=$_POST['order_date'];
mysqli_query($conn,"update order_table set  order_date ='".$order_date."' where order_id=$order_id");
$status=mysqli_query($conn,"update order_table set  order_status ='Accepted' where order_id=$order_id");
if($status){
    echo "Order accepted ";
    
    header("location:accepted_order.php");
}
else{
    echo "Error while accepting the order";
    mysqli_error($conn);
}


?>
