<?php

class UserModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getUserByUsername($username)
    {
        $result = array();
        $sql = "SELECT * FROM MEMBER WHERE USERNAME = '".$username."'";
        if($this->conn->query($sql)->rowCount() == 0)
            return false;
        else{
            foreach ($this-> conn->query($sql) as $row) {
                $result = $row;
            }
            return $result;
        }
    }
}
?>