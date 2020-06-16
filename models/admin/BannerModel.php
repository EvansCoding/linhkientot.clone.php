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

    function getBannerLimit($orderBy, $start, $last, $where = null){
		if($where === null){
			$sql = "SELECT * FROM BANNER ORDER BY ".$orderBy." desc LIMIT ".$start.",".$last;
		} else {
			$sql = "SELECT * FROM BANNER WHERE ".$where." ORDER BY ".$orderBy." desc LIMIT ".$start.",".$last;
		}
		
		$prd = array();
		foreach($this->conn->query($sql) as $row){
			$prd[] = $row;
		}
		return $prd;
	}
}
?>