<?php

include "authguard.php";
$pid=$_GET['pid'];
include "../shared/connection.php";
$status=mysqli_query($conn,"delete from product_details where pid=$pid");
if($status){
    echo"Product deleted successfully!";
    header("location:view_product.php");
}else{
    echo"Error while deleting the product";
    echo mysqli_error($conn);
}
?>
