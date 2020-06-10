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
        $result = $this->select('*','PRODUCT','ID = \''.$id.'\'',null);
        return $result;
    }
}
?>