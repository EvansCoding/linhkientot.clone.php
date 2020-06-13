<?php
class PostModel extends Model
{
    function __construct()
    {
     parent::__construct();   
    }

    function getAllPost()
    {
        $result = $this->select('*','POST', null, 'ORDER BY CREATE_AT');
        return $result;
    }

    function getPostByID($id='')
    {
        $result = $this->select('*','POST', 'ID = '. $id,null);
        return $result;
    }
}
?>