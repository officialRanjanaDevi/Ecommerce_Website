<?php
include"authguard.php";
$target="../shared/images/". $_FILES['pdtimg']['name'];

move_uploaded_file($_FILES['pdtimg']['tmp_name'], $target);
$name=$_POST['name'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$userid=$_SESSION['userid'];
include "../shared/connection.php";
$status=mysqli_query($conn,"insert into product_details (name,price,detail,impath,uploaded_by) values('$name',$price,'$detail','$target',$userid )");
if($status){
    header("location:view_product.php");
}else{
    echo"Failed to Upload products";
    echo"mysqli_error";
}
?>

