<?php
include 'authguard.php';

$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
include "../shared/connection.php";

$sql_result=mysqli_query($conn,"select * from cart join product_details on cart.pid=product_details.pid  where userid=$userid");

$total=0;
$count=1;
while($row=mysqli_fetch_assoc($sql_result)){
$cartid=$row['cartid'];
$total+=$row['price'];

$status=mysqli_query($conn,"insert into order_table (user_id,pid,order_status) values($userid,$row[pid],'pending')");
if($status){
    echo "Product orderd successfully!";
    mysqli_query($conn,"delete from cart where cartid=$cartid");
    header("location:order.php");
}
else{
    echo "Error while adding to cart";
    mysqli_error($conn);
}
$count=$count+1;
}
?>
