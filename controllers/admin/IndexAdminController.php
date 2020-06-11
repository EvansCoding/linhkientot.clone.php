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
            header("Location: http://localhost:8081/web-shop/indexadmin");
        }
        $this->render('dashboard',null,null,'admin');
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