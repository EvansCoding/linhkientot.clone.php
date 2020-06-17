<?php

class CartController extends Controller
{
    function __construct()
    {
        $this->folder = "admin";
        if(!isset($_SESSION['admin']))
        {
            header("Location: http://localhost:8081/web-shop/indexadmin");
        }
    }

    function index()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/CartModel.php';
        $cart = new CartModel;
        $data['products'] = $cart->query('SELECT * FROM CART WHERE STATUS = 1');

        $this->render('cart',$data, 'DANH SÁCH ĐƠN HÀNG', 'admin');
    }

    function show()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/CartModel.php';
        
    }

    function ChangeStatus(){
        require_once 'vendor/Model.php';
        require_once 'models/admin/CartModel.php';
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $md = new CartModel;
            $data = $md->getCartByID($id);
            $now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
            $now = $now->format('Y-m-d H:i:s');
            $result = $md->exe_query("UPDATE CART SET STATUS = 1 WHERE ID = ". $id);
            if($result){
                echo json_encode("success");
            }else{
                echo json_encode("error");
            }
        }
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        require_once 'vendor/Model.php';
        require_once 'models/admin/CartModel.php';
        $md = new CartModel;
        $img = $md->delete('CART_DETAIL', 'ID_CART = "' . $id . '"');
        $result =  $md->delete('CART', 'ID = "' . $id . '"');
        echo $result;
    }
}
?>