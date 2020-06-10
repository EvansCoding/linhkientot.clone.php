<?php
class Controller
{
    protected $folder;

    function render($file, $data = array(), $title = null, $admin = null)
    {
        $file_path = "views/".$this->folder."/".$file.".php";
        if(file_exists($file_path)){
            ob_start();
            require_once($file_path);
            $content = ob_get_clean();
            if($admin == null){
                require_once('views/layouts/application.php');
            } else{
               require_once('views/layouts/admin.php') ;
            }
        } else{
                echo "View not found!!!";
                echo "<br />".$file_path;
            }
    }
}
?>