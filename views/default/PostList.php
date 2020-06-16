<style>
    .text-overflow-string {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: inherit;
    }
</style>
<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li><a target="none" href="PostClient/list">Bài viết</a></li>
    </ul>
</div>
<div class="container product-listing">
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="blog-category clearfix">
                <div class="blog-header">
                    <h3>Bài viết</h3>
                </div>
                <div class="blog-listitem row">
                    <?php if (isset($data)) {
                        foreach ($data as $key => $value) {
                    ?>    
                            <div class="blog-item blog-list blog-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="blog-item-inner clearfix">
                                    <div class="itemBlogImg clearfix">
                                        <div class="article-image">
                                            <div>
                                                <a><img src="<?php echo $value['PATH_IMAGE'] ?>" alt="<?php echo $value['TITLE']; ?>" style="height:200px"></a>
                                            </div>
                                            <div class="article-date">
                                                <div class="date">

                                                    <span class="article-date">
                                                        <b><?php echo date('d', strtotime($value['CREATE_AT']));?></b> <?php echo date('M', strtotime($value['CREATE_AT']));     ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="itemBlogContent clearfix ">
                                        <div class="blog-content">
                                            <div class="article-title font-title">
                                                <h4 class="text-overflow-string "> <a><?php echo $value['TITLE']; ?></a></h4>
                                            </div>
                                            <div class="readmore">
                                                <a class="btn-readmore font-title" href="PostClient/PostDetail/<?php echo $value['ID']; ?>"><i class="fa fa-caret-right"></i>Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
                <div class="product-filter product-filter-bottom filters-panel clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>