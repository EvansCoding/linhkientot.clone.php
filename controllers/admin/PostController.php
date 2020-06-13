<?php

class PostController extends Controller
{
    function __construct()
    {
        $this->folder = "admin";
        if(!isset($_SESSION['admin'])){
            header("Location: http://localhost:8081/web-shop/indexadmin");
        }
    }

    function index()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/PostModel.php';
        $md = new PostModel;
        $data = $md->getAllPost();
        $this->render('post',$data,'DANH SACH BAI VIET','admin');
    }

    function show(){
        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            require_once 'vendor/Model.php';
            require_once 'models/admin/PostModel.php';
            $md = new PostModel;
            
        }
    }

    function store ()
    {
        if(isset($_REQUEST['data'])){
            $data = $_REQUEST['data'];
            $id = $data[0];
            $title = $data[1];
            $content = $data[2];
            $pathImage = $data[3];
            require_once 'vendor/Model.php';
            require_once 'models/admin/PostModel.php';
            $md = new PostModel;
            $row = array('TITLE','CONTENT','CREATE_AT','PATH_IMAGE');
            if(empty($id)){
                $now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
                $now = $now->format('Y-m-d H:i:s');
                $data = array($title, $content,$now,$pathImage);
                $result = $md->insert('post',$data,$row);
                if($result) $data = "Insert Successfull";
                else $data = "Insert Failed";
                echo json_encode($data);
            }else{

            }
        }

    }

    function delete($id='')
    {
        if(isset($_GET['id'])){$id = $_GET['id'];}
        require_once 'vendor/Model.php';
        require_once 'models/admin/PostModel.php';
        $md = new PostModel;
        $result = $md->delete('post','ID = '. $id);
        echo $result;
    }
}
?>