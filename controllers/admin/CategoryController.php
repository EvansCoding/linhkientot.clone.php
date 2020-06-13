<?php

class CategoryController extends Controller
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
        require_once 'models/admin/CategoryModel.php';
        $md = new CategoryModel;
        $data['category'] = $md->getAllCategory();
        $data['categoryOfParent'] = $md->getParentCategory();
        $this->render('category',$data, 'DANH SÁCH LOẠI SẢN PHẨM','admin');
    }

    function show()
    {
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            require_once 'vendor/Model.php';
            require_once 'models/admin/CategoryModel.php';
            $md = new CategoryModel;
            $result = $md->getCategoryByID($id);
            if (count($result) > 0) {
                $data['id'] = $result[0][0];
                $data['title'] = $result[0][2];
                $data['value'] = $result[0][1];
                $data['id_parent'] = $result[0][3] == null ? 'null' : $result[0][3];
                echo json_encode($data);
            } else {
                $data['id'] = '';
                $data['title'] = '';
                $data['value'] = '';
                $data['id_parent'] = 'null';
                echo json_encode($data);
            }
        }
    }

    function store()
    {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $value = $_REQUEST['value'];
        $id_parent = $_REQUEST['id_parent'];

        require_once 'vendor/Model.php';
        require_once 'models/admin/CategoryModel.php';
        $md = new CategoryModel;
        $category = $md->getCategoryByMetaName($title);
        if (empty($_REQUEST['id'])) {
            $data['META_KEY'] = $value;
            if(count($category) > 0){
                $data = "Meta Name existed!";
                echo json_encode($data);
                return;
            }
            $data['META_NAME'] = $title;
            if (empty($title)) {
                $data = "Title free";
                echo json_encode($data);
            } else {
                if ($id_parent == 'null') {
                    $row = array("META_KEY", "META_NAME");
                } else {
                    $data['ID_PARENT'] = $id_parent;
                    $row = array("META_KEY", "META_NAME", "ID_PARENT");
                }
                $result = $md->insert('category', $data, $row);
                if ($result) {
                    $data = "Insert Successfull";
                } else {
                    $data = "Insert Failed";
                }
                echo json_encode($data);
            }
        } else {

            if (empty($title) || $id == $id_parent) {
                $data = "Update Failed";
                echo json_encode($data);
            } else {

                $result  = $md->getParentCategoryByID($id);
                if( ( count($result) > 0)){
                   
                    $setVal = array($value);
                    $row = array("META_KEY");
                    if(count($category) > 1)
                    {
                        $data = "Meta Name existed!";
                        echo json_encode($data);
                        return;    
                    }
                    array_push($row, "META_NAME");
                    array_push($setVal, $title);

                    $result = $md->update('category', $row, $setVal, 'ID = ' . $id);
                    if ($result) {
                        $data = "Update Successfull";
                    } else {
                        $data = "Update Failed";
                    }
                    echo json_encode($data);
                    return;
                }
                else {
                    $setVal = array($value);
                    $row = array("META_KEY");
                    if(count($category) > 1)
                    {
                        $data = "Meta Name existed!";
                        echo json_encode($data);
                        return;    
                    }
                    array_push($row, "META_NAME");
                    array_push($setVal, $title);

                     if ($id_parent != 'null') {
                         $id_parent = $_REQUEST['id_parent'];
                         array_push($row, "ID_PARENT");
                         array_push($setVal, $id_parent);       
                     } else{
                        $id_parent = $_REQUEST['id_parent'];
                        array_push($row, "ID_PARENT");
                        array_push($setVal, null);   
                        $result = $md->exe_query("UPDATE category SET META_KEY='". $value."',META_NAME='".$title."',ID_PARENT= NULL WHERE ID = " . $id);
                        if ($result) {
                            $data = "Update Successfull";
                        } else {
                            $data = "Update Failed";
                        }
                        echo json_encode($data);
                        return;
                     }
                    $result = $md->update('category', $row, $setVal, 'ID = ' . $id);
                    if ($result) {
                        $data = "Update Successfull";
                    } else {
                        $data = "Update Failed";
                    }
                    echo json_encode($data);
                    return;
                }
            }
        }
    }

    function delete($id = ''){
        if(isset($_GET['id'])) { $id = $_GET['id'];}
        require_once 'vendor/Model.php';
        require_once 'models/admin/CategoryModel.php';
        $md = new CategoryModel;
        $result =  $md->delete('category','ID = ' . $id);
        echo $result;
    }
}
