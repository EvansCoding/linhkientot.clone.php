<?php

class CartController extends Controller
{
    function __construct()
    {
        $this->folder = "admin";
        if(!isset($_SESSION['admin']))
        {
            header("Location: http://localhost:8080/web-shop/indexadmin");
        }
    }

    function index()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/CartModel.php';
        $md = new CartModel;
        $data ='';
        $this->render('cart',$data, 'DANH SÁCH HÓA ĐƠN', 'admin');
    }

    function show()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/CartModel.php';
        
    }
}
?>