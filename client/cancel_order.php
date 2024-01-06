<?php
include "authguard.php";
include "menu.html";


$userid=$_SESSION['userid'];

$order_id=$_GET['order_id'];
include "../shared/connection.php";
$status=mysqli_query($conn,"delete  from order_table where order_id=$order_id");
if($status){
    echo"Product removed successfully!";
     header("location:order.php");
}else{
    echo"Error while removing the product";
    echo mysqli_error($conn);
}
?>
