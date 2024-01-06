<?php
include "authguard.php";
include "Menu.html";
include "../shared/connection.php";


$userid=$_SESSION['userid'];
$pid=$_GET['pid'];
$name=$_GET['name'];
$price=$_GET['price'];
$detail=$_GET['detail'];


$sql_result=mysqli_query($conn,"select* from product_details where pid=$pid");
$row=mysqli_fetch_assoc($sql_result);

    echo"<div class='box d-flex justify-content-center'>
    <div class='card-box text-white border-white  '>
    <div class=' pdt-img '> <img src='$row[impath]' class='picture'></div>
<form action='edit_product.php' method='GET' class='bg-warning p-4' enctype='multipart/form-data'>
<div class='name text-white'>   <label>Name<input type='text' name='name' class='form-control mt-2' value=' $name'></label></div>
<div class='price'>     <input type='text' name='price' class='form-control mt-2' value=' $price'></div>

<div class='detail'>   <label>Detail     <input type='text'  name='detail' cols='30' rows='5'class='form-control mt-2' value=' $detail'></label></div><br>
<div class='pid'>   <label>Pid     <input type='text' name='pid' class='form-control mt-2' value=' $pid'></label></div> 

<div class='action mt-2'><a href='edit_product.php? pid=$pid'><button class='btn btn-danger'>Upload</button></div>
</form></div></div>";

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <style>
        .box{
            background: url("backimg.png");
            background-size: 100% 100%;
            height: 100vh;
        }
           .h1font{
           font-family: cursive;
           font-size: large;
           }
          .card-box{
            width: 25%;
           
          }
          .picture{
            height: 40%;
          }
          
    </style>
</head>
<body>
   
</body>
</html>

