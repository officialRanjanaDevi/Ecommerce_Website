<?php 
include"authguard.php";
include "../shared/connection.php";


$pid=$_GET['pid'];
$name=$_GET['name'];
$price=$_GET['price'];
$detail=$_GET['detail'];
$userid=$_SESSION['userid'];


$status=mysqli_query($conn," UPDATE product_details SET name='$name' , price='$price', detail='$detail'  WHERE pid='$pid' ");
if($status){
   
    header("location:view_product.php");
}else{
    echo"Failed to Upload products";
    echo"mysqli_error";
}
?>
