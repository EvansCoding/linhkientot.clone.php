<?php
    if(isset($data)){
?>
<div class="container ">

    <ul class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="PostClient/List">Bài viết</a></li>
        <li><a href="PostClient/PostDetail/<?php echo $data[0]['ID']; ?>"><?php echo $data[0]['TITLE']; ?></a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="rows form-group">
                <div class="article-info">
                    <div class="article-title">
                        <h3><?php echo $data[0]['TITLE']; ?></h3>
                    </div>
                    <div class="article-sub-title">
                        <span class="article-date">Ngày tạo: <?php echo $data[0]['CREATE_AT']; ?></span>
                    </div>
                    <div class="article-image" style="text-align:center">
                        <img src="<?php echo $data[0]['PATH_IMAGE']; ?>" alt="<?php echo $data[0]['TITLE']; ?>">
                    </div>
                    <div class="article-description" style="clear: both;">
                        <?php echo $data[0]['CONTENT']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>