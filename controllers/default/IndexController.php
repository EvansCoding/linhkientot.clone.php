<?php 
/**
* 
*/
class IndexController extends Controller
{
	function __construct(){
		$this->folder = "default";
	}
	function index()
	{
		 require_once 'vendor/Model.php';
		// require_once 'models/default/productModel.php';
		// $md = new productModel;

		// $data[] = $md->getPrds('ngay_nhap',4,4);
		// $data[] = $md->getPrds('ngay_nhap',0,4);
		// $data[] = $md->getPrds('luotmua',0,4);
		$data['TITLE'] = "Linh Kiện Điện Tử &amp; Thiết Bị Thông Minh giá tốt";

		require_once 'models/admin/PostModel.php';
		$post = new PostModel;
		$data['ListPost'] = $post->getPostLimit('CREATE_AT',0,5);

		require_once 'models/admin/BannerModel.php';
		$banner = new BannerModel;
		$data['ListBanner'] = $banner->getBannerLimit('SERIAL',0,4);

		require_once 'models/admin/ProductModel.php';
		$product = new ProductModel;
		$data['DealsProduct'] = $product->getProductLimit('ID', 0 ,3);

		$data['TopProduct'] = $product->getProductLimit('UPDATE_AT', 0 ,3);

		require_once 'models/admin/CategoryModel.php';
		$ctg = new CategoryModel;
		$data['Category_1'] = $ctg->getParentCategoryByID('117');
		$data['Product_1'] = array_chunk($product->getProductsByIdParent('117'),3);
		$data['Category_2'] = $ctg->getParentCategoryByID('118');
		$data['Product_2'] = array_chunk($product->getProductsByIdParent('118'),3);
		$data['Category_3'] = $ctg->getParentCategoryByID('119');
		$data['Product_3'] = array_chunk($product->getProductsByIdParent('119'),3);

		$this->render('index', $data);
	}

	function listCategory(){
		require_once 'vendor/Model.php';
		require_once 'models/admin/CategoryModel.php';
		$md = new CategoryModel;
		$ctgs = $md->getParentCategory();
		$count = count($ctgs);
		$data[][] = null;


		for ($i=0; $i < $count; $i++) { 
			$data[$i] = $ctgs[$i];
			$chilCtgs = $md->getParentCategoryByID($ctgs[$i]['ID']);
			for ($j=0; $j < count($chilCtgs); $j++) { 
				$data[$i][4][$j] = $chilCtgs[$j];
			}
		}
		return $data;
	}

	function signup(){
		if(isset($_SESSION['user'])){
			header('location: ../');
		}
		$this->render('signup');
	}
	function signin(){
		if(isset($_SESSION['user'])){
			header('location: ../');
		}
		$this->render('signin');
	}
}
?>