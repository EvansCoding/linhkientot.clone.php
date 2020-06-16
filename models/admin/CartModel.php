<?php

class CartModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCartByID($id=''){
        $result = $this->select('*','CART','ID = '. $id,null);
        return $result;
    }
}
?>