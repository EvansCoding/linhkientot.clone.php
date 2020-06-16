<?php

class MemberController extends Controller
{
    function __construct()
    {
        $this->folder = "admin";
        if(!isset($_SESSION['admin']))
        {
            header("Location: http://localhost:8080/web-shop/indexadmin");
        }   
    }

    function index()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/MemberModel.php';
        $md = new MemberModel;
        $data = $md->getAllMember();
        $this->render('member',$data,'DANH SÁCH NHÂN VIÊN','admin');
    }

    function show()
    {
        if(isset($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];
            require_once 'vendor/Model.php';
            require_once 'models/admin/MemberModel.php';
            $md = new MemberModel;
            $result = $md->getMemberByID($id);
            if(count($result) > 0){
                $data['id']  = $result[0][0];
                $data['nickname']  = $result[0][1];
                $data['username'] = $result[0][2];
                $data['password'] = $result[0][3];
                $data['email'] = $result[0][4];
                $data['thumbnail'] = $result[0][5];
                echo json_encode($data); 
            } else{
                $data['id']  ='';
                $data['nickname']  = '';
                $data['username'] = '';
                $data['password'] = '';
                $data['email'] = '';
                $data['thumbnail'] = '';
                echo json_encode($data);
            }
        }
    }

    function store()
    {
        $data= $_REQUEST['data'];
        $id = $data[0];
        
        $nickname = $data[1];
        $username = $data[2];
        $password = $data[3];
        $email = $data[4];
        $thumbnail = $data[5];

        require_once 'vendor/Model.php';
        require_once 'models/admin/MemberModel.php';
        $md = new MemberModel;
        $row = array('NICKNAME','USERNAME','PASSWORD','EMAIL','THUMBNAIL');

        if (empty($id)) {
            $data = array($nickname,$username,$password,$email,$thumbnail);
            
                $result = $md->insert('member', $data, $row);
                if ($result) {
                    $data = "Insert Successfull";
                } else {
                    $data = "Insert Failed";
            }
            echo json_encode($data);
            
        } else {
            $setVal = array($nickname, $username, $password, $email, $thumbnail);
            $result = $md->update('member', $row, $setVal, 'ID = ' . $id);
            if ($result) {
                $data = "Update Successfull";
            } else {
                $data = "Update Failed";
        }
        echo json_encode($data);
        }
    }

    function delete()
    {
       if(isset($_GET['id'])) {$id = $_GET['id'];} 
       require_once 'vendor/Model.php';
       require_once 'models/admin/MemberModel.php';
       $md = new MemberModel;
       $result = $md->delete('member', 'ID = '. $id.' AND ID != 1');
       echo $result;
    }

   
}
?>