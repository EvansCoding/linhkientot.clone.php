<?php

class IndexAdminController extends Controller
{
    function __construct()
    {
        $this->folder = "admin";
    }

    function index()
    {
        require_once 'views/admin/index.php';
    }
    
    function dashboard()
    {
        if(!isset($_SESSION['admin'])){
            header("Location: http://localhost:8080/web-shop/indexadmin");
        }
        require_once 'vendor/Model.php';
        require_once 'models/admin/CartModel.php';
        $cart = new CartModel;
        $data['products'] = $cart->query('SELECT * FROM CART WHERE STATUS = 0');
        $data['totalProduct'] = $cart->query('SELECT COUNT(*) FROM PRODUCT');

        $sqltotalProduct = "SELECT COUNT(*) FROM PRODUCT WHERE PRODUCT.ID IN (SELECT CART_DETAIL.ID_PRODUCT FROM CART_DETAIL)";
        $data['totalOrderProduct'] = $cart->query($sqltotalProduct);

        $sqltotalQuantum = "SELECT SUM(PRODUCT.DISCOUNT * CART_DETAIL.QUANTUM) FROM PRODUCT INNER JOIN CART_DETAIL ON PRODUCT.ID = CART_DETAIL.ID_PRODUCT INNER JOIN CART ON CART.ID = CART_DETAIL.ID_CART WHERE CART.STATUS = 1";
        $data['totalQuantum'] = $cart->query($sqltotalQuantum);
        $this->render('dashboard',$data,null,'admin');
    }



    function login()
    {
        require_once 'vendor/Model.php';
        require_once 'models/users/UserModel.php';
        $md = new UserModel;
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "" || $password == "")
        {
            echo "Do not leave blank!";
            return 0;
        }
        $data = array();
        if($md->getUserByUsername($username))
        {
            $data = $md->getUserByUsername($username);
            if($password == $data['PASSWORD'])
            {
                echo "LoginSuccess";
                $_SESSION['admin'] = $data;
                return true;
            } else 
                echo "Username or password wrong!";
        }
        else echo "Username or password wrong!";
    }

    function logout(){
        session_unset();
        session_destroy();
        unset($_COOKIE['admin']);
        setcookie('admin',null,-1,'/');
    }
}