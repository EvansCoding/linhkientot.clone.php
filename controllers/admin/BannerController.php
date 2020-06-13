<?php

class BannerController extends Controller
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
        require_once 'models/admin/BannerModel.php';
        $md = new BannerModel;
        $data = $md->getAllBanner();
        $this->render('banner',$data, 'DANH SACH BANNER', 'admin');
    }

    function show()
    {
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            require_once 'vendor/Model.php';
            require_once 'models/admin/BannerModel.php';
            $md = new BannerModel;
            $result = $md->getBannerByID($id);
            if (count($result) > 0) {
                $data['id'] = $result[0][0];
                $data['title'] = $result[0][1];
                $data['pathImage'] = $result[0][2];
                $data['serial'] = $result[0][3];
                echo json_encode($data);
            } else {
                $data['id'] = '';
                $data['title'] = '';
                $data['pathImage'] = '';
                $data['serial'] = '0';
                echo json_encode($data);
            }
        }
    }

    function store()
    {
        $data= $_REQUEST['data'];
        $id = $data[0];
        
        $title = $data[1];
        $pathImage = $data[2];
        $serial = $data[3];

        require_once 'vendor/Model.php';
        require_once 'models/admin/BannerModel.php';
        $md = new BannerModel;
        $row = array('TITLE','PATH_IMAGE','SERIAL');

        if (empty($id)) {
            $data = array($title,$pathImage,$serial);
            
                $result = $md->insert('banner', $data, $row);
                if ($result) {
                    $data = "Insert Successfull";
                } else {
                    $data = "Insert Failed";
            }
            echo json_encode($data);
            
        } else {
            $setVal = array($title, $pathImage, $serial);
            $result = $md->update('banner', $row, $setVal, 'ID = ' . $id);
            if ($result) {
                $data = "Update Successfull";
            } else {
                $data = "Update Failed";
        }
        echo json_encode($data);
        }
    }

    function delete($id = ''){
        if(isset($_GET['id'])) { $id = $_GET['id'];}
        require_once 'vendor/Model.php';
        require_once 'models/admin/BannerModel.php';
        $md = new BannerModel;
        $result =  $md->delete('banner','ID = ' . $id);
        echo $result;
    }
}

?>
