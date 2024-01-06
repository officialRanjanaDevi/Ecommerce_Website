<?php
session_start();
if(!isset($_SESSION['login_status'])){
    echo"Login Skipped,Please login first!!";
    die;
}
if($_SESSION['login_status']==false){
  echo"Forbidden Access, Login first";
  die;
}

if($_SESSION['usertype']!="Vender"){
    echo"Only Venders can access this page";
    die;
}

echo"<div  class=' p-3 d-flex justify-content-evenly bg-warning text-white'  >
<div>#$_SESSION[userid]</div>
<div>$_SESSION[username]</div>
<div>$_SESSION[usertype]</div>
<div>
<a href='../shared/logout.php'><button class=' btn btn-danger'>logout</button></a></div>
</div>";
?>

