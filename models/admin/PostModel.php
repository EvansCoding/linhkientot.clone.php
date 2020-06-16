<?php
class PostModel extends Model
{
    function __construct()
    {
     parent::__construct();   
    }

    function getAllPost()
    {
        $result = $this->select('*','POST', null, 'ORDER BY CREATE_AT DESC');
        return $result;
    }

    function getPostByID($id='')
    {
        $result = $this->select('*','POST', 'ID = '. $id,null);
        return $result;
    }

    function getPostLimit($orderBy, $start, $last, $where = null){
		if($where === null){
			$sql = "SELECT * FROM POST ORDER BY ".$orderBy." desc LIMIT ".$start.",".$last;
		} else {
			$sql = "SELECT * FROM POST WHERE ".$where." ORDER BY ".$orderBy." desc LIMIT ".$start.",".$last;
		}
		
		$prd = array();
		foreach($this->conn->query($sql) as $row){
			$prd[] = $row;
		}
		return $prd;
	}
}
?>