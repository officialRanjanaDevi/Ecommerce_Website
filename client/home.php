 <?php
include "authguard.php";
include "menu.html";
include "../shared/connection.php";

$userid=$_SESSION['userid'];

$sql_result=mysqli_query($conn,"select* from product_details ");
while($row=mysqli_fetch_assoc($sql_result)){
   echo"<div class='card-box text-white border-white box pdt_box'>
         
          <div class='name text-white'>    $row[name]</div>
          <div class='price'>$row[price]</div>
          <div class=' pdt-img '>
          <img src='$row[impath]' class='picture'></div>
          <div class='detail'>$row[detail]</div><br>

          <a href='addcart.php? pid=$row[pid]'><button class='btn btn-danger'>Add to cart</button></a></div></div>";
}
include"footer.html";
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      .box{
       
         background-color: #095769;
      }
       .picture{
         height: 300px;
         background-size: contain;
      }
      .pdt_box:hover{
      transition-duration: 1s;
    transform: scale(1.07);
    box-shadow: 10px 10px 15px black;
    }
   </style>
</head>
<body>
