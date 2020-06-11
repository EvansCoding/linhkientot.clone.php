<?php
class ProductController extends Controller
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
        require_once 'models/admin/ProductModel.php';
        require_once 'models/admin/CategoryModel.php';
        $product = new ProductModel;
        $category = new CategoryModel;
        $data['product'] = $product->getAllProducts();
        $data['category'] = $category->getChilCategory();
        $this->render('Product',$data,'DANH SÁCH SẢN PHẨM','admin');
    }

    function show()
    {
        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            require_once 'vendor/Model.php';
            require_once 'models/admin/ProductModel.php';
            require_once 'models/admin/CategoryModel.php';
            require_once 'models/admin/ImageModel.php';
            $category = new CategoryModel;
            $image = new ImageModel;
            $md = new ProductModel;
            $result = $md->getProductByID($id);
            if(count($result) > 0){
                // $cat = $category->getCategoryByID($result[0][11]);
                $data['id'] = $result[0][0];
                $data['name'] = $result[0][1];
                $data['price'] = $result[0][2];
                $data['discount'] = $result[0][3];
                $data['quantum'] = $result[0][4];
                $data['description'] = $result[0][6];
                $data['content'] = $result[0][7];
                $data['image'] = $result[0][8];
                $data['category'] = $result[0][11];
                $data['listImage'] = $image->getImageByIdProduct($result[0][0]);
                echo json_encode($data);
            }else{
                $data = null;
                echo json_encode($data);
            }
        }
    }

    function store()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/ProductModel.php';
        require_once 'models/admin/ImageModel.php';
        $md = new ProductModel;
        $image = new ImageModel;
        if(isset($_REQUEST['data']) && isset($_REQUEST['caseItem'])){
            $data = $_REQUEST['data'];
            $caseItem = $_REQUEST['caseItem'];
            if(empty($caseItem)){
                if($data[0] != ""){
                    $row = array('ID','NAME','PRICE','DISCOUNT','QUANTUM','DESCRIPTION','CONTENT','IMAGE','ID_CATEGORY','STATUS','UPDATE_AT','ID_MEMBER');
                    $setVal = array();
                    $countData = count($data);
                    for ($i=0; $i < $countData ; $i++) { 
                        array_push($setVal,$data[$i]);
                    }
                    if($data[4] <= 0){
                        $setVal[4] = 0;
                        $setVal[9] = 0;
                    }else{
                        $setVal[9] = 1;
                    }
    
                    $now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
                    $now = $now->format('Y-m-d H:i:s');
                    $setVal[10] = $now;
                    $setVal[11] = $_SESSION['admin'][0];
                
                    $result = $md->insert('product', $setVal, $row);
                    if(isset($data[9])){
                        $countListImage = count($data[9]);
                        if($countListImage > 0){
                            for ($i=0; $i < $countListImage ; $i++) { 
                                $image->insert('image',array($data[9][$i],$data[0]),array('PATH_IMAGE','ID_PRODUCT'));
                            }
                        }
                    }

                    if ($result) {
                        $data = 1;
                    } else {
                        $data = 0;
                    }
                    echo json_encode($data);
                    return;
                }else{
                    $data = 0;
                    echo json_encode($data);
                    return;
                }
                
            }else{
                if(!empty($data[0])){
                    $row = array('NAME','PRICE','DISCOUNT','QUANTUM','DESCRIPTION','CONTENT','IMAGE','ID_CATEGORY','STATUS','UPDATE_AT','ID_MEMBER');
                    $setVal = array();
                    $countData = count($data);
                    for ($i=1; $i < $countData ; $i++) { 
                        array_push($setVal,$data[$i]);
                    }
                    if($data[4] <= 0){
                        $setVal[3] = 0;
                        $setVal[8] = 0;
                    }else{
                        $setVal[8] = 1;
                    }
    
                    $now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
                    $now = $now->format('Y-m-d H:i:s');
                    $setVal[9] = $now;
                    $setVal[10] = $_SESSION['admin'][0];
                
                    $result = $md->update('product',$row, $setVal, 'ID = "'. $data[0]. '"');
                    $countImage = count($image->getImageByIdProduct($data[0]));
                    if($countImage > 0){
                        for ($i=0; $i < $countImage ; $i++) { 
                            $image->delete('image', 'ID_PRODUCT = \'' . $data[0].'\'');
                        }
                    }

                    if(isset($data[9])){
                        $countListImage = count($data[9]);


                        if($countListImage > 0){
                            for ($i=0; $i < $countListImage ; $i++) { 
                                $image->insert('image',array($data[9][$i],$data[0]),array('PATH_IMAGE','ID_PRODUCT'));
                            }
                        }
                    }
                    if ($result) {
                        $data = 1;
                    } else {
                        $data = 0;
                    }
                    echo json_encode($data);
                    return;
                }else{
                    $data = 0;
                    echo json_encode($data);
                    return;
                }
            }
        }
    }

    function delete(){
        if(isset($_GET['id'])) { $id = $_GET['id'];}
        require_once 'vendor/Model.php';
        require_once 'models/admin/ProductModel.php';
        $md = new ProductModel;
        $result =  $md->delete('product','ID = "' . $id.'"  ');
        echo $result;
    }
}
