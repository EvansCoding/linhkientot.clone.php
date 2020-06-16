<?php

class PostClientController extends Controller
{
    function __construct()
    {
        $this->folder = "default";    
    }

    function List()
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/PostModel.php';
        $md = new PostModel;
        $data = $md->getAllPost();
        $this->render('PostList',$data,'Bài viết');
    }

    function PostDetail($id)
    {
        require_once 'vendor/Model.php';
        require_once 'models/admin/PostModel.php';
        $md = new PostModel;
        $data = $md->getPostByID($id);
        $this->render('PostDetail',$data,'Detail Post');
        // require_once 'views/default/PostDetail.php';
    }
}
?>