<?php
include "authguard.php";
include "Menu.html";
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
           }
           .h1font{
           font-family: cursive;
           font-size: large;
           }
          
    </style>
</head>
<body>
 <div class="d-flex flex-column justify-content-center align-items-center vh-100 box">
    <h2 class="text-white h1font mb-5">" One new product a day keeps the boredom at bay"</h2>
   <form action="add_product.php" method="POST" class="bg-warning p-4" enctype="multipart/form-data">
    <input type="text" name="name" class="form-control mt-2" placeholder="Product Name">
    <input type="number" name="price"class="form-control mt-2" placeholder="Product Price">
    <textarea name="detail" id="" cols="30" rows="5"class="form-control mt-2" placeholder="Product Description"></textarea>
    <input type="file" name="pdtimg" class="form-control mt-2">
    <div class="text-center"><button class="btn btn-success" >Upload</button></div>  
</form>
</div>

</body>
</html>
<?php
include"footer.html";
?>
