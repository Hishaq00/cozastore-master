<?php
include('connection.php');
session_start();
?>
<?php
if(isset($_POST["AddToCart"])){
if(isset($_SESSION['cart'])){}
}
else{
    $_SESSION['cart'][0]=array("proid"=>$_POST['pid'],"proname"=>$_POST['pname'],"proprice"=>$_POST['pprice'],"proimg"=>$_POST['pimg']);
    echo "<script>alert('cart added successfully');
    location.assign('index.php')</script>";
}
?>