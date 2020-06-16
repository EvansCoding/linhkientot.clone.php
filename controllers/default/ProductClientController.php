<?php

class ProductClientController extends Controller
{
    function __construct()
    {
        $this->folder = "default";
    }

    function ProductDetail($id){
        require_once 'vendor/Model.php';
        require_once 'models/admin/ProductModel.php';

        $md = new ProductModel;
        $data[0] = $md->getProductByID($id);

        $data[1] = $md->getProductLimit('UPDATE_AT', 0 ,4);
        $data[2] = null;
        require_once 'models/admin/ImageModel.php';
        $img = new ImageModel;
        $images = $img->getImageByIdProduct($id);
        if(count($images) > 0){
            $data[2] = $images;
        }
        
        $this->render('ProductDetail', $data, 'Detail Product');
    }

    function ProductList($id = ''){
        require_once 'vendor/Model.php';
        require_once 'models/admin/ProductModel.php';
        require_once 'models/admin/CategoryModel.php';
        $product = new ProductModel;
        $category = new CategoryModel;
        $data['Category'] = $category->getCategoryByID($id);

        $data['TopProduct'] = $product->getProductLimit('UPDATE_AT', 0 ,4);
        $idCtgs = array(117,118,119);
        if(in_array($id,$idCtgs)){
            $data['ListProduct'] = $product->query('SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY IN (SELECT CATEGORY.ID FROM CATEGORY WHERE CATEGORY.ID_PARENT ='. $id. ') LIMIT  0,12' );
            
        }else{
            $data['ListProduct'] = $product->query('SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY = '.$id .' LIMIT 0,12' );
        }
        
    
        $this->render("ProductList", $data, 'List Product');
    }

    function Paginate(){
        require_once 'vendor/Model.php';
        require_once 'models/admin/ProductModel.php';
        require_once 'vendor/Pagination.php';
        $product = new ProductModel;
        $idCtgs = array(117,118,119);
        
        $perPage       = new sbpagination;


        $page = 1;
        $id = '';
        
        if(!empty($_GET["data"])) {
            $data = $_GET["data"];
            $id = $data[0];
            $page = $data[1];
        }

        $start = ($page-1)*$perPage->perpage;
        if($start < 0) $start = 0;

       
        if(in_array($id,$idCtgs)){
            $data['ListProduct'] = $product->query("SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY IN (SELECT CATEGORY.ID FROM CATEGORY WHERE CATEGORY.ID_PARENT =". $id. ") LIMIT " .$start . "," . $perPage->perpage);
            
        }else{
            
            $data['ListProduct'] = $product->query('SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY = '.$id .' LIMIT ' .$start . ',' . $perPage->perpage);
        }
     

        $rowcount      = count($data['ListProduct']);
        $showpagination = $perPage->getAllPageLinks($rowcount);	

        $output = '';
                foreach ($data['ListProduct'] as $key => $value)
                {
                    $output .= '<div class="product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item-container">
                                    <div class="left-block left-b">
                                        <div class="product-image-container">
                                            <a href="ProductClient/ProductDetail/'. $value['ID'].'" title="'.$value['NAME'].'">
                                                <img data-sizes="auto" src="'.$value['IMAGE'].'" data-src="'.$value['IMAGE'].'" title="'.$value['NAME'].'" class="img-responsive lazyautosizes lazyloaded" sizes="193px">
                                            </a>
                                        </div>
                                    </div>
        
                                    <div class="right-block right-b">
                                        <h4><a href="ProductClient/ProductDetail/'.$value['ID'].'">'.$value['NAME'].'</a></h4>
                                        <div class="price">
                                            <span class="price-new">0đ </span>
                                        </div>
                                        <div class="description">
                                            <p>'.$value['DESCRIPTION'].'</p>
                                        </div>
                                        <div class="button-group cartinfo--static">
                                            <button class="addToCart" data-id="'.$value['ID'].'"  type="button" title="Thêm vào giỏ hàng" >
                                                <i class="fa fa-shopping-cart"></i><span>Thêm vào giỏ hàng</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="list-block">
        
                                        <button class="addToCart btn-button" data-id="'.$value['ID'].'" type="button" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                </div>';
                }
        if(!empty($showpagination))
        {
            $output .= '<ul class="pagination">'.$showpagination.'</ul>';
        }
        echo $output;
    }

    function search(){
        if(isset($_POST['searchText'])){
            $searchText = $_POST['searchText'];
            require_once 'vendor/Model.php';
            require_once 'models/admin/ProductModel.php';
            $product = new ProductModel;
            $sql = "SELECT * FROM PRODUCT WHERE NAME LIKE '%".$searchText."%'";
            $data = $product->query($sql);
            echo json_encode($data);
        }
        
    }
}
?>