<?php

class CategoryModel extends Model
{
    function __construct()
    {
       parent::__construct(); 
    }

    function getAllCategory()
    {
        $parent = $this->select('*','CATEGORY','ID_PARENT IS NULL ','ORDER BY ID');
        $result = array();
        for ($i = 0; $i < count($parent); $i++) { 
            $chil = $this->select('*','CATEGORY', 'ID_PARENT = '.$parent[$i][0]);
            $result[$i] = array($parent[$i],$chil);
        }
        return $result;
    }

    function getParentCategory()
    {
        $result = $this->select('*','CATEGORY','ID_PARENT IS NULL','ORDER BY ID');
        return $result;        
    }

    function getCategoryByID($id=''){
        $result = $this->select('*','CATEGORY','ID = '.$id,null);
        return $result;
    }

    function getParentCategoryByID($id='')
    {
        $result = $this->select('*','CATEGORY','ID_PARENT = '.$id, null);
        return $result;
    }

    function getCategoryByMetaName($metaName){
        $result = $this->select('*','CATEGORY', 'UPPER(META_NAME) = UPPER("'.$metaName . '")' ,null);
        return $result;
    }

    function getChilCategory(){
        $result = $this->select('*','CATEGORY','ID_PARENT IS NOT NULL','ORDER BY ID');
        return $result;  
    }
}
?>