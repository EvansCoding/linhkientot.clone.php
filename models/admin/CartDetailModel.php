<?php

class CartDetailModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getCartDetailByIdCart($id = '')
    {
        $result = $this->select('*','CART_DETAIL','ID_CART = '.$id,'ORDER BY QUANTUM');
        return $result;        
    }
}
?>