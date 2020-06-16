<?php

class ImageModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getImageByIdProduct($id = ''){
        $result = $this->select('*','IMAGE','ID_PRODUCT = \''.$id.'\'',null);
        return $result;
    }
    
}
?>