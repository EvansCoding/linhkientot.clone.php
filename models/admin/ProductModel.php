<?php

class ProductModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllProducts()
    {
        require_once 'models/admin/CategoryModel.php';
        $category = new CategoryModel;
        $result = $this->select('*','PRODUCT',null,'ORDER BY UPDATE_AT DESC ');

        $count = count($result);
        for ($i=0; $i < $count; $i++) { 
            $md = $category->getCategoryByID($result[$i]['ID_CATEGORY']);
            $result[$i]['ID_CATEGORY'] = $md[0]['META_NAME'];
        }
        return $result;
    }

    function getProductByID($id=''){

        $result = $this->select('*','PRODUCT','ID LIKE \''.$id.'\'',null);
        return $result;
    }

    function getProductLimit($orderBy, $start, $last, $where = null){
		if($where === null){
			$sql = "SELECT * FROM PRODUCT ORDER BY ".$orderBy." desc LIMIT ".$start.",".$last;
		} else {
			$sql = "SELECT * FROM PRODUCT WHERE ".$where." ORDER BY ".$orderBy." desc LIMIT ".$start.",".$last;
		}
		
		$prd = array();
		foreach($this->conn->query($sql) as $row){
			$prd[] = $row;
		}
		return $prd;
    }
    
    function getProductsByIdParent($id=''){
        $sql = 'SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY IN (SELECT CATEGORY.ID FROM CATEGORY WHERE CATEGORY.ID_PARENT ='. $id. ')';
        $result = $this->query($sql);
        return $result;
    }

    function getProductsByIdCategory($id = ''){
        $sql = 'SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY = '.$id;
        $result = $this->query($sql);
        return $result;
    }
}
?>