<?php

class PostController extends Controller
{
    function __construct()
    {
        $this->folder = "admin";
        if(!isset($_SESSION['admin'])){
            header("Location: http://localhost:8080/web-shop/indexadmin");
        }
    }

    function index()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/PostModel.php';
        $md = new PostModel;
        $data = $md->getAllPost();
        $this->render('post',$data,'DANH SÁCH BÀI VIẾT','admin');
    }

    function show(){
        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            if($id != 'null'){
                require_once 'vendor/Model.php';
                require_once 'models/admin/PostModel.php';
                $md = new PostModel;
                $result = $md->getPostByID($id);
                $data['id'] = $result[0]['ID'];
                $data['title'] = $result[0]['TITLE'];
                $data['pathImage'] = $result[0]['PATH_IMAGE'];
                $data['content'] = $result[0]['CONTENT']; 
                echo json_encode($data);
            }else{
                $data['id'] = '';
                $data['title'] = '';
                $data['pathImage'] = '';
                $data['content'] = ''; 
                echo json_encode($data);
            }

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
                $now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
                $now = $now->format('Y-m-d H:i:s');
                $setVal = array($title, $content, $now, $pathImage);
                $result = $md->update('post',$row, $setVal, 'ID = "'. $id. '"');
                if($result) $data = "Update Successfull";
                else $data = "Update Failed";
                echo json_encode($data);
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