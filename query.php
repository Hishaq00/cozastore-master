<?php
include('connection.php');
session_start();

?>
<?php
// if(isset($_POST["AddToCart"])){               
// if(isset($_SESSION['cart'])){
//     $count = count($_SESSION['cart']);
//     $_SESSION['cart'][$count]=array("proid"=>$_POST['pid'],"proname"=>$_POST['pname'],"proqty"=>$_POST['pqty'],"proprice"=>$_POST['pprice'],"proimg"=>$_POST['pimg']);
//     echo "<script>alert('cart added successfully');
//     location.assign('index.php')</script>";
     
//         }

// else{
//     $_SESSION['cart'][$count]=array("proid"=>$_POST['pid'],"proname"=>$_POST['pname'],"proqty"=>$_POST['pqty'],"proprice"=>$_POST['pprice'],"proimg"=>$_POST['pimg']);
//     echo "<script>alert('cart added successfully');
//     location.assign('index.php')</script>";
// }
// }    
if (isset($_POST["AddToCart"])) {               
   
    if (isset($_SESSION['cart'])) {
        $productExists = false;


        foreach ($_SESSION['cart'] as $key => $val) {
            if ($val['proid'] == $_POST['pid']) {
                $productExists = true;
                break; 
            }
        }

        if ($productExists) {
            echo "<script>alert('This product is already in your cart!'); location.assign('index.php');</script>";
        } else {
            
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array(
                "proid" => $_POST['pid'],
                "proname" => $_POST['pname'],
                "proqty" => $_POST['pqty'],
                "proprice" => $_POST['pprice'],
                "proimg" => $_POST['pimg']
            );
            echo "<script>alert('Product added to cart successfully'); location.assign('index.php');</script>";
        }
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][0] = array(
            "proid" => $_POST['pid'],
            "proname" => $_POST['pname'],
            "proqty" => $_POST['pqty'],
            "proprice" => $_POST['pprice'],
            "proimg" => $_POST['pimg']
        );
        echo "<script>alert('Product added to cart successfully'); location.assign('index.php');</script>";
    }
}


?>




