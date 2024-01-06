<?php
include "authguard.php";
include "menu.html";
include "../shared/connection.php";

$userid=$_SESSION['userid'];

$cartid=$_GET['cartid'];

$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status){
    echo"Product removed successfully!";
    header("location:view_cart.php");
}else{
    echo"Error while removing the product";
    echo mysqli_error($conn);
}
?>
