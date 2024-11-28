<?php
include('connection.php');
session_start();
?>
<?php
if(isset($_POST["AddToCart"])){               
if(isset($_SESSION['cart'])){
    // $count = count($_SESSION['cart']);
    // $_SESSION['cart'][$count]=array("proid"=>$_POST['pid'],"proname"=>$_POST['pname'],"proqty"=>$_POST['pqty'],"proprice"=>$_POST['pprice'],"proimg"=>$_POST['pimg']);
    // echo "<script>alert('cart added successfully');
    // location.assign('index.php')</script>";
        foreach($_SESSION['cart'] as $item) {
            if($item['proid'] == $_POST['pid']) {
                $productExists = true;
                break;
            }
        }
        if($productExists) {
            echo "<script>alert('Product already exists in the cart!'); location.assign('index.php');</script>";
        }

else{
    $_SESSION['cart'][$count]=array("proid"=>$_POST['pid'],"proname"=>$_POST['pname'],"proqty"=>$_POST['pqty'],"proprice"=>$_POST['pprice'],"proimg"=>$_POST['pimg']);
    echo "<script>alert('cart added successfully');
    location.assign('index.php')</script>";
}
}    }
?>




