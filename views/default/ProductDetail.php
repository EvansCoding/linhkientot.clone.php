<!-- <script src="public/default/vender/javascript/so_home_slider/js/owl.carousel.js" type="text/javascript"></script> -->
<script src="public/default/vender/javascript/soconfig/js/jquery.elevateZoom-3.0.8.min.js" type="text/javascript"></script>
<div class="breadcrumbs ">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="ProductClient/ProductDetail/<?php echo $data[0][0]['ID']; ?>"><?php echo $data[0][0]['NAME']; ?></a></li>
        </ul>
    </div>
</div>
<style>
    .yt-content-slider.owl2-carousel .owl2-item img {
        opacity: 0.5;
    }

    .yt-content-slider.owl2-carousel .owl2-item img:hover {
        opacity: 1;
    }
</style>
<div class="content-main container product-detail  ">
    <div class="row">
        <div id="content" class="product-view col-md-9 col-sm-12 col-xs-12 fluid-sidebar">
            <a href="javascript:void(0)" class=" open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
            <div class="sidebar-overlay "></div>
            <div class="content-product-mainheader clearfix">
                <div class="row">
                    <div class="content-product-left  col-md-5 col-sm-12 col-xs-12">
                        <div class="so-loadeding"></div>

                        <div class="large-image  ">
                            <img itemprop="image" class="product-image-zoom" src="<?php echo $data[0][0]['IMAGE']; ?>" title="Case bảo vệ Raspberry Pi - thiết kế chính thức" alt="Case bảo vệ Raspberry Pi - thiết kế chính thức">
                        </div>

                        <div id="thumb-slider" style="width: 1000px;" class="full_slider  contentslider owl2-carousel owl2-theme owl2-responsive-1200 owl2-loaded" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="4" data-items_column1="3" data-items_column2="5" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">

                            <div class="owl2-stage-outer">
                                <div class="owl2-stage itemsRmv" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 177.5px;">
                                    <div class="owl2-item active" style="width: 78.75px; margin-right: 10px;">
                                        <div class="image-additional--default">
                                            <a data-index="0" class="img thumbnail" data-image="<?php echo $data[0][0]['IMAGE']; ?>" title="Case bảo vệ Raspberry Pi - thiết kế chính thức">
                                                <img src="<?php echo $data[0][0]['IMAGE']; ?>" title="Case bảo vệ Raspberry Pi - thiết kế chính thức" alt="Case bảo vệ Raspberry Pi - thiết kế chính thức">
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    if ($data[2] != null) {
                                        foreach ($data[2] as $key => $value) {
                                    ?>
                                            <div class="owl2-item active" style="width: 78.75px; margin-right: 10px;">
                                                <div class="image-additional--default">
                                                    <a data-index="0" class="img thumbnail" data-image="<?php echo $value['PATH_IMAGE'] ?>" title="Case bảo vệ Raspberry Pi - thiết kế chính thức">
                                                        <img src="<?php echo $value['PATH_IMAGE'] ?>" title="Case bảo vệ Raspberry Pi - thiết kế chính thức" alt="Case bảo vệ Raspberry Pi - thiết kế chính thức">
                                                    </a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="owl2-controls">
                                <div class="owl2-nav">
                                    <div class="owl2-prev" style="display: none;"></div>
                                    <div class="owl2-next" style="display: none;"></div>
                                </div>
                                <div class="owl2-dots" style="display: none;"></div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                var zoomCollection = '.large-image img';
                                $(zoomCollection).elevateZoom({   
                                    lensSize: 200,
                                    easing: false,
                                    scrollZoom: false,
                                    gallery: 'thumb-slider',
                                    cursor: 'pointer',
                                    galleryActiveClass: "active",
                                });
                            });
                        </script>
                    </div>
                    <div class="content-product-right col-md-7 col-sm-12 col-xs-12" itemprop="offerDetails" itemscope="" itemtype="http://schema.org/Product">
                        <div class="title-product">
                            <h1 itemprop="name"><?php echo $data[0][0]['NAME']; ?></h1>
                        </div>
                        <div class="product_page_price price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
										
						<span class="price-new">
							<span itemprop="price" content="475000.0000" id="price-special"><?php echo number_format($data[0][0]['DISCOUNT'], 0, '', ','); ?>đ</span>
							<meta itemprop="priceCurrency" content="VND">
						</span>
					   <span class="price-old" id="price-old"> 
                       <?php echo number_format($data[0][0]['PRICE'], 0, '', ','); ?>đ
					   </span>
					   
										
				
											<div class="price-tax"><span></span> <span id="price-tax"> <?php echo number_format($data[0][0]['DISCOUNT'], 0, '', ','); ?>đ </span></div>
									 
				</div>
    
                        <div class="product-box-desc">
                            <div class="inner-box-desc">
                                <div class="model"><span>Mã sản phẩm: </span> <?php echo $data[0][0]['ID']; ?></div>
                                <div class="stock"><span>Tình trạng:</span> <i class="fa fa-check-square-o"></i> <?php if ($data[0][0]['STATUS']) {
                                                                                                                        echo "Còn hàng";
                                                                                                                    } else {
                                                                                                                        echo "Hết hàng";
                                                                                                                    } ?></div>
                            </div>
                        </div>
                        <div class="short_description form-group">
                            <h3></h3>
                            <?php echo $data[0][0]['NAME']; ?>
                        </div>
                        <div id="product">
                            <div class="box-cart clearfix ">
                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
                                            <span class="input-group-addon product_quantity_down fa fa-minus"></span>
                                            <input class="form-control" type="text" name="quantity"id="quantity" value="1">
                                            <input type="hidden" name="product_id" value="54">
                                            <span class="input-group-addon product_quantity_up fa fa-plus"></span>
                                        </div>
                                    </div>
                                    <div class="detail-action">
                                        <div class="cart">
                                            <input type="button" value="Thêm vào giỏ hàng" data-loading-text="Đang Xử lý..." data-id="<?php echo $data[0][0]['ID'];?>" id="button-cart" class="addToCart btn btn-mega btn-lg ">
                                            <button type="button" id="product-buy-now" data-loading-text="Đang Xử lý..."data-id="<?php echo $data[0][0]['ID'];?>" class="btn product-buy-now " style="background-color:#ff4000;width:110px ;font-size:15px ;height:39px ;position:inherit ;font-weight:500 ;margin:% % 0% 0%;padding:% % % %;border:px none #2626b3;border-radius: 5px;text-align:center;float:right;color:#ffffff "><span class="btn_txt_icon"> </span> <span class="btn_txt_span">MUA NGAY</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix form-group"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-product-mainbody clearfix row" style="margin-top: 10px ;">
                <div class="content-product-content col-sm-12">
                    <div class="content-product-midde clearfix">
                        <div class="producttab ">
                            <div class="tabsslider   horizontal-tabs  col-xs-12">
                                <ul class="nav nav-tabs font-sn">
                                    <li class="active"><a data-toggle="tab" href="#tab-description">Thông tin sản phẩm</a></li>
                                </ul>
                                <div class="tab-content  col-xs-12">
                                    <div class="tab-pane active" id="tab-description">
                                        <h3 class="product-property-title"> </h3>
                                        <div id="collapse-description" class="desc-collapse showdown">
                                            <?php echo $data[0][0]['CONTENT']; ?>
                                        </div>
                                        <div class="button-toggle">
                                            <a class="showmore" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapse-footer">
                                                <span class="toggle-more">Mở rộng <i class="fa fa-angle-down"></i></span>
                                                <span class="toggle-less">Thu gọn <i class="fa fa-angle-up"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="moduletable module so-extraslider-ltr best-seller best-seller-custom ">
                <h3 class="modtitle"><span><i class="fa fa-diamond fa-hidden"></i> BÁN CHẠY</span></h3>
                <div class="modcontent">
                    <div id="so_extra_slider_12703583671590916814" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                        <!-- Begin extraslider-inner -->
                        <div class="extraslider-inner" data-effect="none">
                            <div class="item ">
                                <?php
                                if (isset($data[1])) {
                                    foreach ($data[1] as $key => $value) {
                                ?>
                                        <div class="item-wrap style1 ">
                                            <div class="item-wrap-inner">
                                                <div class="media-left">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <div class="box-label">
                                                            </div>
                                                            <a class="lt-image" data-product='53' target="_self" title="Bộ Arduino Advance..">
                                                                <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-height: 60px" data-src="<?php echo $value['IMAGE'] ?>" alt="<?php echo $value['NAME'] ?>" class="lazyload">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-info">
                                                        <div class="item-title">
                                                            <a href="ProductClient/ProductDetail/<?php echo $value['ID'] ?>" target="_self" title="<?php echo $value['NAME'] ?> ">
                                                                <?php echo $value['NAME'] ?>
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
    </div>
</div>

<script>
    $(document).ready(function() {
        console.log($(".itemsRmv").parent().parent().css('width', ''));
        $(".itemsRmv").css('width', '');
    });
</script>

<script>
$(document).ready(function(){
    $(".addToCart").click(function(){
   // $(this).toggleClass('cart-ordered');
    var id = $(this).data('id');
    var quantity = $("#quantity").val();
    addToCart(id,quantity);
  });
  $(".product-buy-now").click(function(){
    var id = $(this).data('id');
    var quantity = $("#quantity").val();
    buyNow(id,quantity);
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

function addToCart(id,quantity){
  $.ajax({
    url : "CartClient/addToCart",
    type : "post",
    dataType:"text",
    data : {
     id,quantity
   },
   success : function (result){
    toastr["success"]("Thêm vào giỏ hàng thành công!");
    $('.total-shopping-cart .items_cart').html(result);
  }
});
}

function buyNow(id,quantity){
    $.ajax({
    url : "CartClient/addToCart",
    type : "post",
    dataType:"text",
    data : {
     id,quantity
   },
   success : function (result){
    window.location.href="CartClient/ViewCart";
    $('.total-shopping-cart .items_cart').html(result);
  }
});
}
</script>