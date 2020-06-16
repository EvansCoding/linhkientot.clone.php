<?php

class CartClientController extends Controller
{
    function __construct()
    {
        $this->folder = "default";    
    }

    function addToCart()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/ProductModel.php';
        $md = new ProductModel;
        $id = array();
        if(isset($_POST['id'])) {$id = $_POST['id'];}
        if(isset($_POST['quantity'])) {$quantity = $_POST['quantity'];} else {$quantity = 1;}
        if(isset($_SESSION['cart'])){
            // $data = 
            $position = array_key_exists ($md->getProductByID($id)[0]['ID'], $_SESSION['cart']);
            if($position !== false){
                $_SESSION['cart'][$id] += $quantity;
                $temp = $_SESSION['cart'][$id];
                // $_SESSION['cart'][$id] = $quanlity; 
            }
            else{
           
                $_SESSION['cart'][$id] = $quantity;
                $temp = $_SESSION['cart'][$id];
                // $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + $quanlity; 
            }
            echo "". count($_SESSION['cart']);
        }
        else{
            $_SESSION['cart'][$id] = $quantity;
			echo " ".count($_SESSION['cart']);
        }
    }

    function viewCart()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/ProductModel.php';
        $md = new ProductModel;
        $data[] = array();

        if(isset($_SESSION['cart']))
        {
            if(count($_SESSION['cart']) <= 0){
                $title = "<span class='glyphicon glyphicon-alert' style='color: #c1ac13'></span> Giỏ hàng của bạn trống!";
                $data = null;
            }
            $title = "Giỏ hàng của bạn";
            $index = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                $data[$index][] = $md->getProductByID($key)[0];
                $data[$index++][] = $value;
            }
        }
        else
        {
            $title = "<span class='glyphicon glyphicon-alert' style='color: #c1ac13'></span> Giỏ hàng của bạn trống!";
            $data = null;
        }
        $this->render('ViewCart', $data ,$title);
    }

    function deleteItem(){
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            unset($_SESSION['cart'][$id]);
            echo count($_SESSION['cart']);
        }
        else{
            echo 'error';
        }
    }

    function orderComplete(){
        if(isset($_POST['data'])){
            $data = $_POST['data'];

            for ($i=0; $i < 3; $i++) { 
                if($data[$i] == ''){
                    echo json_encode("error");
                    return;
                }
            }
            for ($i= count($data) - 1; $i > 5; $i--) { 
                if(count($data[$i]) <= 0){
                    echo json_encode("error");
                    return;
                }
            }

            require_once 'vendor/Model.php';
            require_once 'models/admin/CartModel.php';
            $cart = new CartModel;
            $row = array('CUSTOMER','EMAIL','PHONE','ADDRESS','NOTE','CREATE_AT','STATUS');
            $now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
            $now = $now->format('Y-m-d H:i:s');
            $value = array($data[0],$data[1],$data[2], $data[3], $data[4],$now, 0);

            // if($row != null){$row = rtrim(implode(',',$row),',');}
            // $value = rtrim(implode('\',\'',$value),',');
            // $value = str_pad($value, strlen($value)+2,'\'',STR_PAD_BOTH);
            // $sql = "SELECT CART.ID FROM CART WHERE 1 = (INSERT INTO CART (".$row.") VALUES (".$value."))";

            // $sql = 'SELECT CART.ID FROM CART WHERE 1 = (INSERT INTO CART (CUSTOMER,EMAIL,PHONE,ADDRESS,NOTE,CREATE_AT, STATUS) VALUES ('.$value.'))';
            $result = $cart->insert('cart',$value, $row);
            if($result){
                if(isset($data[5]) && isset($data[6])){
                    $num = $data[5];
                    $idProduct = $data[6];
                    require_once 'models/admin/CartDetailModel.php';
                    $cartDetail = new CartDetailModel;
                    $rowCD = array('ID_CART', 'ID_PRODUCT', 'QUANTUM');
                    $idCart = $cart->query('SELECT CART.ID FROM CART ORDER BY CART.ID DESC LIMIT 1');
                    for ($i=0; $i < count($num); $i++) { 
                        $valueCD = array($idCart[0][0],$idProduct[$i],$num[$i]);
                        $cartDetail->insert('cart_detail',$valueCD,$rowCD);
                    }
                    echo json_encode ("success");
                    $_SESSION['cart'] = null;
                    return;
                }
            }
            echo json_encode ("error");
        }
    }

    function orderFinish(){
        $this->render('orderComplete',$data= null,null);
    }
}
?>