<?php

class BannerModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllBanner()
    {
        $result = $this->select('*','BANNER',null,'ORDER BY SERIAL DESC');
        return $result;
    }

    function getBannerByID($id=''){
        $result = $this->select('*','BANNER','ID = '. $id,null);
        return $result;
    }
}
?>