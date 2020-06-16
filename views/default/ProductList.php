<div class="breadcrumbs ">
    <div class="container">

        <ul class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a id="titleCategory" data-id="<?php echo $data['Category'][0]['ID']; ?>" href="ProductClient/ProductList/<?php echo $data['Category'][0]['ID']; ?>"><?php echo $data['Category'][0]['META_NAME']; ?></a></li>
        </ul>
    </div>
</div>
<div class="container product-listing content-main ">

    <div class="row">
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas ">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="moduletable module so-extraslider-ltr best-seller best-seller-custom ">
                <h3 class="modtitle"><span><i class="fa fa-diamond fa-hidden"></i>BÁN CHẠY</span></h3>
                <div class="modcontent">
                    <div id="so_extra_slider_12703583671590916814" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                        <!-- Begin extraslider-inner -->
                        <div class="extraslider-inner" data-effect="none">
                            <div class="item ">
                                <?php
                                if (isset($data['TopProduct'])) {
                                    foreach ($data['TopProduct'] as $key => $value) {
                                ?>

                                        <div class="item-wrap style1 ">
                                            <div class="item-wrap-inner">
                                                <div class="media-left">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <div class="box-label">
                                                            </div>
                                                            <a class="lt-image" data-product="53" href="ProductClient/ProductDetail/<?php echo $value['ID']; ?>" target="_self" title="Bộ Arduino Advance..">
                                                                <img data-sizes="auto" src="<?php echo $value['IMAGE']; ?>" data-src="<?php echo $value['IMAGE']; ?>" alt="<?php echo $value['NAME']; ?>" class="lazyautosizes lazyloaded" sizes="80px">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-info">
                                                        <div class="item-title">
                                                            <a href="ProductClient/ProductDetail/<?php echo $value['ID']; ?>" target="_self" title="<?php echo $value['NAME']; ?>">
                                                                <?php echo $value['NAME']; ?>
                                                            </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="price">
                                                                <span class="old-price product-price"><?php echo number_format($value['DISCOUNT'], 0, '', ','); ?>đ</span>&nbsp;&nbsp;
                                                                <span class="price-old"><?php echo number_format($value['PRICE'], 0, '', ','); ?>đ</span>&nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php

                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>


        <div id="content" class="col-md-9 col-sm-12 col-xs-12 fluid-sidebar">
            <div class="products-category clearfix">


                <h3 class="title-category "><?php echo $data['Category'][0]['META_NAME']; ?></h3>
                <div class="form-group category-info">
                    <div class=" row">
                    </div>
                </div>
                <div class="products-list row nopadding-xs so-filter-gird" id="pagination-result">

                    <?php
                    if (isset($data['ListProduct'])) {
                        foreach ($data['ListProduct'] as $key => $value) {

                    ?>
                            <div class="product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block left-b">
                                        <div class="product-image-container">
                                            <a href="ProductClient/ProductDetail/<?php echo $value['ID']; ?>" title="<?php echo $value['NAME']; ?>">
                                                <img data-sizes="auto" src="<?php echo $value['IMAGE']; ?>" data-src="<?php echo $value['IMAGE']; ?>" title="Bộ xe Car Robot 3 bánh điều khiển Bluetooth, hồng ngoại, tránh vật cản - Arduino " class="img-responsive lazyautosizes lazyloaded" sizes="193px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block right-b">
                                        <h4><a href="ProductClient/ProductDetail/<?php echo $value['ID']; ?>"><?php echo $value['NAME']; ?> </a></h4>
                                        <div class="price">
                                            <span class="price-new"><?php echo number_format($value['DISCOUNT'], 0, '', ','); ?>đ </span>
                                        </div>
                                        <div class="description">
                                            <p><?php echo $value['NAME']; ?></p>
                                        </div>
                                        <div class="button-group cartinfo--static">
                                            <button class="addToCart" type="button" title="Thêm vào giỏ hàng" data-id="<?php echo $value['ID']; ?>">
                                                <i class="fa fa-shopping-cart"></i><span>Thêm vào giỏ hàng</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="list-block">

                                        <button class="addToCart btn-button" data-id="<?php echo $value['ID']; ?>" type="button" title="Thêm vào giỏ hàng" ><i class="fa fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

      
                </div>
                <?php
                require_once 'vendor/Model.php';
                require_once 'models/admin/ProductModel.php';
                require_once 'vendor/Pagination.php';
                $product = new ProductModel;
                $idCtgs = array(117, 118, 119);

                $perPage       = new sbpagination;


                $page = 1;
                // $id = '';
                $id = $data['Category'][0]['ID'];
                // if(!empty($_GET["data"])) {
                //     $data = $_GET["data"];
                //     $id = $data['Category'][0]['ID'];
                //     $page = $data[1];
                // }

                $start = ($page - 1) * $perPage->perpage;
                if ($start < 0) $start = 0;


                if (in_array($id, $idCtgs)) {
                    $data['ListProduct'] = $product->query("SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY IN (SELECT CATEGORY.ID FROM CATEGORY WHERE CATEGORY.ID_PARENT =" . $id . ")");
                } else {

                    $data['ListProduct'] = $product->query('SELECT * FROM PRODUCT WHERE PRODUCT.ID_CATEGORY = ' . $id);
                }


                $rowcount      = count($data['ListProduct']);
                $showpagination = $perPage->getAllPageLinks($rowcount);
                ?>
              <style>
                     .pagination>.active>a, 
                     .pagination>.active>a:focus, 
                     .pagination>.active>a:hover, 
                     .pagination>.active>span:hover,
                     .pagination>.active>span, 
                     .pagination>.active>span:focus {
                        background-color:  #FF5C00 ;
                        border-color: #FF5C00 ;
                     }
       

                        .pagination>li>a, 
                        .pagination>li>span{
                            border-color: #FF5C00 ;
                        }
                    </style>
                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <ul class="pagination">
                                <?php
                                if (!empty($showpagination)) {
                                ?>
                                    <ul class="pagination">
                                        <?php echo $showpagination; ?>
                                    </ul>
                                <?php
                                }
                                ?>
                            </ul>
                            
                        </div>
                        <div class="col-sm-6 text-right"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(window).load(sidebar_sticky_update);
            $(window).resize(sidebar_sticky_update);

            function sidebar_sticky_update() {
                var viewportWidth = $(window).width();
                if (viewportWidth > 1200) {
                    // Initialize the sticky scrolling on an item 
                    sidebar_sticky = 'disable';

                    if (sidebar_sticky == 'left') {
                        $(".left_column").stick_in_parent({
                            offset_top: 10,
                            bottoming: true
                        });
                    } else if (sidebar_sticky == 'right') {
                        $(".right_column").stick_in_parent({
                            offset_top: 10,
                            bottoming: true
                        });
                    } else if (sidebar_sticky == 'all') {
                        $(".content-aside").stick_in_parent({
                            offset_top: 10,
                            bottoming: true
                        });
                    }
                }
            }
        </script>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        
        $(document).on("click", ".page", function() {
            var id = $('#titleCategory').data('id');
            var page = $(this).data('page');
            $('.pagination .page-item').removeClass('active disabled');
            $(this).parent().addClass('active disabled');
            console.log($(this).data('page'));
            var data = [id, page];
            $.ajax({
                url: "ProductClient/Paginate",
                type: "GET",
                data: {
                    data
                },
                success: function(data) {
                    $("#pagination-result").html(data);
                },
                error: function() {}
            });
        });
    });
</script>

<script>
$(document).ready(function(){
    $(".addToCart").click(function(){
   // $(this).toggleClass('cart-ordered');
    var id = $(this).data('id');
    addToCart(id);
  });
  toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "2000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
});

function addToCart(id){
  $.ajax({
    url : "CartClient/addToCart",
    type : "post",
    dataType:"text",
    data : {
     id
   },
   success : function (result){
    toastr["success"]("Thêm vào giỏ hàng thành công!");
    $('.total-shopping-cart .items_cart').html(result);
  }
});
}
</script>