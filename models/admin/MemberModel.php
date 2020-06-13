<?php

class MemberModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllMember()
    {
        $result = $this->select('*','member',null,'ORDER BY ID');
        return $result;
    }

    function getMemberById($id = '')
    {
        $result = $this->select('*','member','ID = "'.$id.'"');
        return $result;
    }
}
?>