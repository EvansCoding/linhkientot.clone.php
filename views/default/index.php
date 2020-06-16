<div class="so-page-builder">
    <section id="section-1" class="section-style1 ">
        <div class="container-fluid page-builder-ltr">
            <div class="row row_gnyv  row-style ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ihh9   block-slide block block_1">
                    <div class="module sohomepage-slider so-homeslider-ltr  ">
                        <div class="modcontent">
                            <div id="sohomepage-slider1">
                                <div class="so-homeslider sohomeslider-inner-1">
                                    <?php
                                    if (isset($data['ListBanner'])) {
                                        foreach ($data['ListBanner'] as $key => $value) {
                                    ?>
                                            <div class="item">
                                                <a title="Slide 2 - 2" target="_self">
                                                    <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $value['PATH_IMAGE'] ?>" alt="Slide 2 - 2" />
                                                </a>
                                                <div class="sohomeslider-description">
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
            </div>
        </div>
    </section>

    <div class="container page-builder-ltr">
        <div class="row row_nfjd  row-style ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_p8f5  block block_2">
                <div class="block-infos">
                    <div class="info info1">
                        <div class="inner">
                            <i class="fa fa-truck"></i>
                            <div class="info-cont">
                                <span class="font-ct">Giao hàng toàn quốc</span>
                                <p>63 Tỉnh/Thành phố</p>
                            </div>
                        </div>
                    </div>
                    <div class="info info2">
                        <div class="inner">
                            <i class="fa fa-money"></i>
                            <div class="info-cont">
                                <span class="font-ct">Thanh toán </span>
                                <p>Khi nhận hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="info info3">
                        <div class="inner">
                            <i class="fa fa-gift"></i>
                            <div class="info-cont">
                                <span class="font-ct">Nhiều quà tặng</span>
                                <p>hấp dẫn</p>
                            </div>
                        </div>
                    </div>
                    <div class="info info4">
                        <div class="inner">
                            <i class="fa fa-phone-square"></i>
                            <div class="info-cont">
                                <span class="font-ct">Hotline , Zalo</span>
                                <p>0364 199 199</p>
                            </div>
                        </div>
                    </div>
                    <div class="info info5">
                        <div class="inner">
                            <i class="fa fa-users"></i>
                            <div class="info-cont">
                                <span class="font-ct">Cam kết</span>
                                <p>về chất lượng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_i73p  col-style">
                <script>
                    var listdeal1 = [];
                </script>
                <div class="module so-deals-ltr custom_deals_featured so-deals">
                    <h2 class="modtitle font-ct"><span>Today Deals</span></h2>
                    <div class="modcontent">
                        <div id="so_deals_187693153205312020092014" class="so-deal slick-horizontal so-deals-slick deals-slider-preload">
                            <div class="so-deals-slider-loading"></div>
                            <div class="deals-nav"></div>
                            <div class="deals-content">
                                <div class="ds-items-detail">
                                    <?php
                                    if (isset($data['DealsProduct'])) {
                                        foreach ($data['DealsProduct'] as $key => $value) {
                                    ?>
                                            <div class="item">
                                                <div class="product-thumb transition">
                                                    <div class="left-block">
                                                        <div class="image">
                                                            <a href="ProductClient/ProductDetail/<?php echo $value['ID'] ?>" target="_self">
                                                                <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="height: 310px" data-src="<?php echo $value['IMAGE']; ?>" class="lazyload">
                                                            </a>
                                                        </div>
                                                        <div class="box-label">
                                                            <!-- <span class="label-product label-sale">-17%</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <h4><a href="ProductClient/ProductDetail/<?php echo $value['ID'] ?>" target="_self" title="<?php echo $value['NAME']; ?>"><?php echo $value['NAME']; ?></a></h4>


                                                            <p class="des_deal">Mô tả: <?php echo $value['DESCRIPTION']; ?></p>

                                                            <p class="price font-ct">
                                                                <span class="price-new"><?php echo number_format($value['DISCOUNT'], 0, '', ','); ?>đ</span>
                                                                <span class="price-old"><?php echo number_format($value['PRICE'], 0, '', ','); ?>đ</span>
                                                            </p>
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
                            <script type="text/javascript">
                                jQuery(document).ready(function($) {
                                    ;
                                    (function(element) {
                                        var $element = $(element);
                                        setTimeout(function() {
                                            $('.so-deals-slider-loading', $element).remove();
                                            $element.removeClass('deals-slider-preload');
                                            __runDealsSlider();
                                        }, 1000);

                                        function __runDealsSlider() {
                                            var sync1 = $('.ds-items-detail', $element),
                                                sync2 = $('.ds-items', $element);

                                            sync2.slick({
                                                arrows: false,
                                                rtl: false,
                                                autoplay: true,
                                                slidesToShow: 6,
                                                slidesToScroll: 4,
                                                infinite: true,
                                                initialSlide: 0,
                                                speed: 2000,
                                                autoplaySpeed: 1000,
                                                asNavFor: '#so_deals_187693153205312020092014 .ds-items-detail',
                                                pauseOnHover: 1,
                                                dots: false,
                                                centerMode: false,
                                                focusOnSelect: true,
                                                responsive: [{
                                                    breakpoint: 1199,
                                                    settings: {
                                                        slidesToShow: 6,
                                                        slidesToScroll: 4
                                                    }
                                                }, {
                                                    breakpoint: 991,
                                                    settings: {
                                                        slidesToShow: 4,
                                                        slidesToScroll: 4
                                                    }
                                                }, {
                                                    breakpoint: 767,
                                                    settings: {
                                                        slidesToShow: 3,
                                                        slidesToScroll: 4
                                                    }
                                                }, {
                                                    breakpoint: 479,
                                                    settings: {
                                                        slidesToShow: 2,
                                                        slidesToScroll: 4
                                                    }
                                                }, {
                                                    breakpoint: 320,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        slidesToScroll: 4
                                                    }
                                                }]
                                            });
                                            sync1.slick({
                                                rtl: false,
                                                slidesToShow: 1,
                                                slidesToScroll: 1,
                                                autoplay: false,
                                                infinite: true,
                                                arrows: false,
                                                initialSlide: 0,
                                                //fade: true,
                                                speed: 2000,
                                                autoplaySpeed: 1000,
                                                focusOnSelect: true,
                                                pauseOnHover: 1,

                                            });
                                        }
                                    })('#so_deals_187693153205312020092014');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_pvae  col-style">
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
                                                                    <span class="old-price product-price"><?php echo number_format($value['DISCOUNT'], 0, '', ','); ?>đ </span>&nbsp;&nbsp;
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
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_fehm  block block_4">
                <div class="module so-super-category-ltr custom_supper">
                    <div class="modcontent">
                        <div id="so_super_category_149" class="so-sp-cat first-load">
                            <div class="spcat-wrap ">
                                <div class="category-wrap col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                    <div class="category-wrap-cat">
                                        <div class="title-imageslider  sp-cat-title-parent">
                                            <a title="Kit, Cảm biến" href="#" target="_self">
                                                Kit, Cảm biến
                                            </a>
                                        </div>
                                        <div id="cat_slider_5464720701590916814" class="slider">
                                            <div class="cat_slider_inner so_category_type_default">
                                                <?php
                                                foreach ($data['Category_1'] as $key => $value) {
                                                ?>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="cat_slider_title">
                                                                <a href="ProductClient/ProductList/<?php echo $value['ID']; ?>" title="<?php echo $value['META_NAME']; ?>" target="_self">
                                                                    <?php echo $value['META_NAME'] ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="spc-wrap col-lg-10 col-md-9 col-sm-12 col-xs-12">
                                    <div class="spcat-items-container">
                                        <div class="spcat-items  items-category-sales" data-total="161">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>
                                        </div>

                                        <div class="spcat-items  items-category-p_date_added" data-total="161">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>
                                        </div>

                                        <div class="spcat-items  spcat-items-selected spcat-items-loaded items-category-rating" data-total="161">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="ltabs-items-inner owl2-carousel ltabs-slider products-list grid">
                                                    <style>
                                                        .text-product-string {
                                                            display: inline-block;
                                                            max-width: 100%;

                                                            white-space: nowrap;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            /* text-overflow: clip; */
                                                        }
                                                    </style>
                                                    <?php
                                                    foreach ($data['Product_1'] as $key => $value) {
                                                    ?>
                                                        <div class="ltabs-item product-layout itemsRmv">
                                                            <?php
                                                            foreach ($value as $key_1 => $val) {
                                                            ?>
                                                                <div class="item-inner product-thumb product-item-container transition ">
                                                                    <div class="left-block so-quickview">
                                                                        <div class="image product-image-container second_img">
                                                                            <a class="lt-image" data-product='<?php echo $val['ID'] ?>' href="ProductClient/ProductDetail/<?php echo $val['ID'] ?>" target="_self" title="<?php echo $val['NAME'] ?>">
                                                                                <img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $val['IMAGE'] ?>" class="img-l lazyload" alt="<?php echo $val['NAME'] ?>" style="width: 162px">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label">
                                                                        </div>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <div class="caption">
                                                                            <h4>
                                                                                <a href="ProductClient/ProductDetail/<?php echo $val['ID'] ?>" title="<?php echo $val['NAME'] ?>" target="_self" class="text-product-string"><?php echo $val['NAME'] ?></a>
                                                                            </h4>
                                                                            <p class="price">
                                                                                <span class="price-new"><?php echo number_format($val['DISCOUNT'], 0, '', ','); ?>đ</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="button-group">
                                                                            <button class="addToCart" type="button" data-id="<?php echo $val['ID']; ?>" > <span>Thêm vào giỏ</span></button>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                
                                                <script type="text/javascript">
                                                
                                                    jQuery(document).ready(function($) {
                                                        var $tag_id = $('#so_super_category_149'),
                                                            parent_active = $('.spcat-items-selected', $tag_id),
                                                            total_product = parent_active.data('total'),
                                                            tab_active = $('.ltabs-items-inner', parent_active),
                                                            _delay = 1000,
                                                            _duration = 3000,
                                                            _effect = 'none',
                                                            nb_column0 = 6,
                                                            nb_column1 = 5,
                                                            nb_column2 = 4,
                                                            nb_column3 = 3,
                                                            nb_column4 = 2;

                                                        tab_active.owlCarousel2({
                                                            rtl: false,
                                                            nav: 0,
                                                            dots: false,
                                                            startPosition: 1,
                                                            margin: 0,
                                                            loop: true,
                                                            autoplay: false,
                                                            autoplayHoverPause: true,
                                                            autoplayTimeout: 3000,
                                                            autoplaySpeed: 1500,
                                                            mouseDrag: true,
                                                            touchDrag: true,
                                                            navRewind: false,
                                                            navText: ['', ''],
                                                            responsive: {
                                                                0: {
                                                                    items: nb_column4,
                                                                    nav: (total_product / 3) >= nb_column4 ? false : false
                                                                },
                                                                480: {
                                                                    items: nb_column3,
                                                                    nav: (total_product / 3) >= nb_column3 ? false : false
                                                                },
                                                                768: {
                                                                    items: nb_column2,
                                                                    nav: (total_product / 3) >= nb_column2 ? false : false
                                                                },
                                                                992: {
                                                                    items: nb_column1,
                                                                    nav: (total_product / 3) >= nb_column1 ? false : false
                                                                },
                                                                1200: {
                                                                    items: nb_column0,
                                                                    nav: (total_product / 3) >= nb_column0 ? false : false
                                                                }
                                                            }
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="spcat-items  items-category-p_model" data-total="161">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>
                                        </div>
                                        <div class="spcat-items  items-category-pd_name" data-total="161">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                jQuery(document).ready(function($) {
                                    (function(element) {
                                        var type_show = 'slider';
                                        var $element = $(element),
                                            $tab = $('.spcat-tab', $element),
                                            $tab_label = $('.spcat-tab-label', $tab),
                                            $tabs = $('.spcat-tabs', $element),
                                            ajax_url = $tabs.parents('.spcat-tabs-container').attr('data-ajaxurl'),
                                            effect = $tabs.parents('.spcat-tabs-container').attr('data-effect'),
                                            delay = $tabs.parents('.spcat-tabs-container').attr('data-delay'),
                                            duration = $tabs.parents('.spcat-tabs-container').attr('data-duration'),
                                            rl_moduleid = $tabs.parents('.spcat-tabs-container').attr('data-modid'),
                                            $items_content = $('.spcat-items', $element),
                                            $items_inner = $('.spcat-items-inner', $items_content),
                                            $items_first_active = $('.spcat-items-selected', $element),
                                            $load_more = $('.spcat-loadmore', $element),
                                            $btn_loadmore = $('.spcat-loadmore-btn', $load_more),
                                            $select_box = $('.spcat-selectbox', $element),
                                            $id_cate = $('.spcat-tab', $element).attr('data-id-cate'),
                                            $tab_label_select = $('.spcat-tab-selected', $element),
                                            setting = 'a:82:{s:6:"action";s:9:"save_edit";s:4:"name";s:17:"Kit phát triển";s:18:"module_description";a:1:{i:2;a:1:{s:9:"head_name";s:17:"KIT PHÁT TRIỂN";}}s:9:"head_name";s:17:"KIT PHÁT TRIỂN";s:17:"disp_title_module";s:1:"0";s:6:"status";s:1:"1";s:25:"advanced_mod_class_suffix";s:13:"custom_supper";s:16:"item_link_target";s:5:"_self";s:8:"category";s:2:"74";s:14:"category_depth";s:1:"2";s:17:"field_product_tab";a:5:{i:0;s:7:"pd_name";i:1;s:7:"p_model";i:2;s:6:"rating";i:3;s:12:"p_date_added";i:4;s:5:"sales";}s:13:"field_preload";s:6:"rating";s:10:"limitation";s:1:"0";s:16:"product_ordering";s:4:"DESC";s:16:"category_column0";s:1:"5";s:16:"category_column1";s:1:"4";s:16:"category_column2";s:1:"3";s:16:"category_column3";s:1:"2";s:16:"category_column4";s:1:"1";s:24:"category_title_maxlength";s:2:"25";s:26:"display_title_sub_category";s:1:"1";s:22:"display_slide_category";s:1:"1";s:18:"show_category_type";s:1:"0";s:28:"sub_category_title_maxlength";s:2:"25";s:14:"category_width";s:3:"200";s:15:"category_height";s:3:"100";s:25:"category_placeholder_path";s:11:"nophoto.png";s:15:"product_column0";s:1:"6";s:15:"product_column1";s:1:"4";s:15:"product_column2";s:1:"3";s:15:"product_column3";s:1:"2";s:15:"product_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:4:"rows";s:1:"3";s:21:"product_display_title";s:1:"1";s:23:"product_title_maxlength";s:2:"18";s:27:"product_display_description";s:1:"0";s:29:"product_description_maxlength";s:3:"200";s:21:"product_display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"0";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:1:"7";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:13:"product_width";s:3:"196";s:14:"product_height";s:3:"196";s:24:"product_placeholder_path";s:11:"nophoto.png";s:6:"effect";s:4:"none";s:16:"product_duration";s:4:"3000";s:13:"product_delay";s:4:"1000";s:18:"subcategory_center";s:1:"0";s:30:"subcategory_display_navigation";s:1:"1";s:24:"subcategory_display_loop";s:1:"1";s:24:"subcategory_margin_right";s:1:"0";s:19:"subcategory_slideby";s:1:"1";s:21:"subcategory_auto_play";s:1:"0";s:33:"subcategory_auto_interval_timeout";s:4:"1000";s:28:"subcategory_auto_hover_pause";s:1:"1";s:27:"subcategory_auto_play_speed";s:3:"300";s:28:"subcategory_navigation_speed";s:4:"3000";s:26:"subcategory_start_position";s:1:"0";s:22:"subcategory_mouse_drag";s:1:"1";s:22:"subcategory_touch_drag";s:1:"1";s:16:"slider_auto_play";s:1:"0";s:25:"slider_display_navigation";s:1:"0";s:19:"slider_display_loop";s:1:"1";s:17:"slider_mouse_drag";s:1:"1";s:17:"slider_touch_drag";s:1:"1";s:23:"slider_auto_hover_pause";s:1:"1";s:28:"slider_auto_interval_timeout";s:4:"3000";s:22:"slider_auto_play_speed";s:4:"1500";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:3:"149";}',
                                            category_id = $('.sp-cat-title-parent', $element).attr('data-catids');


                                        enableSelectBoxes();

                                        function enableSelectBoxes() {
                                            $tab_wrap = $('.spcat-tabs-wrap', $element);
                                            $tab_label_select.html($('.spcat-tab', $element).filter('.tab-sel').children('.spcat-tab-label').html());
                                            if ($(window).innerWidth() <= 479) {
                                                $tab_wrap.addClass('spcat-selectbox');
                                            } else {
                                                $tab_wrap.removeClass('spcat-selectbox');
                                            }
                                        }

                                        $('span.spcat-tab-selected, span.spcat-tab-arrow', $element).click(function() {
                                            if ($('.spcat-tabs', $element).hasClass('spcat-open')) {
                                                $('.spcat-tabs', $element).removeClass('spcat-open');
                                            } else {
                                                $('.spcat-tabs', $element).addClass('spcat-open');
                                            }
                                        });

                                        $(window).resize(function() {
                                            if ($(window).innerWidth() <= 479) {
                                                $('.spcat-tabs-wrap', $element).addClass('spcat-selectbox');
                                            } else {
                                                $('.spcat-tabs-wrap', $element).removeClass('spcat-selectbox');
                                            }
                                        });

                                        function showAnimateItems(el) {
                                            var $_items = $('.new-spcat-item', el),
                                                nub = 0;
                                            $('.spcat-loadmore-btn', el).fadeOut('fast');
                                            $_items.each(function(i) {
                                                nub++;
                                                switch (effect) {
                                                    case 'none':
                                                        $(this).css({
                                                            'opacity': '1',
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                        break;
                                                    default:
                                                        animatesItems($(this), nub * delay, i, el);
                                                }
                                                if (i == $_items.length - 1) {
                                                    $('.spcat-loadmore-btn', el).fadeIn(delay);
                                                }
                                                $(this).removeClass('new-spcat-item');
                                            });
                                        }

                                        function animatesItems($this, fdelay, i, el) {
                                            var $_items = $('.spcat-item', el);
                                            $this.attr("style",
                                                "-webkit-animation:" + effect + " " + duration + "ms;" +
                                                "-moz-animation:" + effect + " " + duration + "ms;" +
                                                "-o-animation:" + effect + " " + duration + "ms;" +
                                                "-moz-animation-delay:" + fdelay + "ms;" +
                                                "-webkit-animation-delay:" + fdelay + "ms;" +
                                                "-o-animation-delay:" + fdelay + "ms;" +
                                                "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
                                                opacity: 1,
                                                filter: 'alpha(opacity = 100)'
                                            }, {
                                                delay: 100
                                            });
                                            if (i == ($_items.length - 1)) {
                                                $(".spcat-items-inner").addClass("play");
                                            }
                                        }

                                        showAnimateItems($items_first_active);
                                        $tab.on('click.spcat-tab', function() {
                                            var $this = $(this);
                                            if ($this.hasClass('tab-sel')) return false;
                                            if ($this.parents('.spcat-tabs').hasClass('spcat-open')) {
                                                $this.parents('.spcat-tabs').removeClass('spcat-open');
                                            }
                                            $tab.removeClass('tab-sel');
                                            $this.addClass('tab-sel');
                                            var items_active = $this.attr('data-active-content');

                                            var _items_active = $(items_active, $element);
                                            $items_content.removeClass('spcat-items-selected');
                                            _items_active.addClass('spcat-items-selected');
                                            $tab_label_select.html($tab.filter('.tab-sel').children('.spcat-tab-label').html());
                                            var $loading = $('.spcat-loading', _items_active);
                                            var loaded = _items_active.hasClass('spcat-items-loaded');
                                            if (!loaded && !_items_active.hasClass('spcat-process')) {
                                                _items_active.addClass('spcat-process');
                                                var field_order = $this.attr('data-field_order');
                                                $loading.show();
                                                $.ajax({
                                                    type: 'POST',
                                                    url: ajax_url,
                                                    data: {
                                                        spcat_module_id: rl_moduleid,
                                                        is_ajax_super_category: 1,
                                                        ajax_limit_start: 0,
                                                        categoryid: category_id,
                                                        fieldorder: field_order,
                                                        setting: setting,
                                                        ajax_reslisting_start: 0,
                                                        lbmoduleid: '149'
                                                    },
                                                    success: function(data) {
                                                        if (data.items_markup != '') {
                                                            $('.spcat-items-inner', _items_active).html(data.items_markup);
                                                            _items_active.addClass('spcat-items-loaded').removeClass('spcat-process');
                                                            $loading.remove();
                                                            showAnimateItems(_items_active);
                                                            updateStatus(_items_active);
                                                            if (type_show == 'slider') {
                                                                var $tag_id = $('#so_super_category_149'),
                                                                    parent_active = $('.spcat-items-selected', $tag_id),
                                                                    total_product = parent_active.data('total'),
                                                                    tab_active = $('.ltabs-items-inner', parent_active),
                                                                    nb_column0 = 6,
                                                                    nb_column1 = 4,
                                                                    nb_column2 = 3,
                                                                    nb_column3 = 2,
                                                                    nb_column4 = 1;

                                                                tab_active.owlCarousel2({
                                                                    rtl: false,
                                                                    nav: 0,
                                                                    dots: false,
                                                                    margin: 10,
                                                                    loop: true,
                                                                    autoplay: false,
                                                                    autoplayHoverPause: true,
                                                                    autoplayTimeout: 3000,
                                                                    autoplaySpeed: 1500,
                                                                    mouseDrag: true,
                                                                    touchDrag: true,
                                                                    navRewind: true,
                                                                    navText: ['', ''],
                                                                    responsive: {
                                                                        0: {
                                                                            items: nb_column4,
                                                                            nav: (total_product / 3) >= nb_column4 ? 0 : false,
                                                                        },
                                                                        480: {
                                                                            items: nb_column3,
                                                                            nav: (total_product / 3) >= nb_column3 ? 0 : false,
                                                                        },
                                                                        768: {
                                                                            items: nb_column2,
                                                                            nav: (total_product / 3) >= nb_column2 ? 0 : false,
                                                                        },
                                                                        992: {
                                                                            items: nb_column1,
                                                                            nav: (total_product / 3) >= nb_column1 ? 0 : false,
                                                                        },
                                                                        1200: {
                                                                            items: nb_column0,
                                                                            nav: (total_product / 3) >= nb_column0 ? 0 : false,
                                                                        },
                                                                    }
                                                                });
                                                            }
                                                        }
                                                    },
                                                    dataType: 'json'
                                                });

                                            } else {
                                                $('.spcat-item', $items_content).removeAttr('style').addClass('new-spcat-item').css('opacity', 0);
                                                showAnimateItems(_items_active);
                                            }
                                        });

                                        function updateStatus($el) {
                                            $('.spcat-loadmore-btn', $el).removeClass('loading');
                                            var countitem = $('.spcat-item', $el).length;
                                            $('.spcat-image-loading', $el).css({
                                                display: 'none'
                                            });
                                            $('.spcat-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                                            var rl_total = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_total');
                                            var rl_load = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_load');
                                            var rl_allready = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_allready');

                                            if (countitem >= rl_total) {
                                                $('.spcat-loadmore-btn', $el).addClass('loaded');
                                                $('.spcat-image-loading', $el).css({
                                                    display: 'none'
                                                });
                                                $('.spcat-loadmore-btn', $el).attr('data-label', rl_allready);
                                                $('.spcat-loadmore-btn', $el).removeClass('loading');
                                            }
                                        }

                                        $btn_loadmore.on('click.loadmore', function() {
                                            var $this = $(this);
                                            if ($this.hasClass('loaded') || $this.hasClass('loading')) {
                                                return false;
                                            } else {
                                                $this.addClass('loading');
                                                $('.spcat-image-loading', $this).css({
                                                    display: 'inline-block'
                                                });
                                                var rl_start = $this.parent().attr('data-rl_start'),
                                                    rl_moduleid = $this.parent().attr('data-modid'),
                                                    rl_ajaxurl = $this.parent().attr('data-ajaxurl'),
                                                    effect = $this.parent().attr('data-effect'),
                                                    field_order = $this.parent().attr('data-field_order'),
                                                    items_active = $this.parent().attr('data-active-content');
                                                var _items_active = $(items_active, $element);
                                                $.ajax({
                                                    type: 'POST',
                                                    url: rl_ajaxurl,
                                                    data: {
                                                        spcat_module_id: rl_moduleid,
                                                        is_ajax_super_category: 1,
                                                        ajax_reslisting_start: rl_start,
                                                        categoryid: category_id,
                                                        fieldorder: field_order,
                                                        setting: setting,
                                                        load_more: 1,
                                                        lbmoduleid: '149'
                                                    },
                                                    success: function(data) {
                                                        if (data.items_markup != '') {
                                                            $(data.items_markup).insertAfter($('.spcat-item', _items_active).nextAll().last());
                                                            $('.spcat-image-loading', $this).css({
                                                                display: 'none'
                                                            });
                                                            showAnimateItems(_items_active);
                                                            updateStatus(_items_active);
                                                        }
                                                    },
                                                    dataType: 'json'
                                                });
                                            }
                                            return false;
                                        });

                                    })('#so_super_category_149');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_gl8d  block block_5">
                <div class="module so-super-category-ltr custom_supper custom_supper_v2">
                    <div class="modcontent">
                        <div id="so_super_category_148" class="so-sp-cat first-load">
                            <div class="spcat-wrap ">
                                <div class="category-wrap col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                    <div class="category-wrap-cat">
                                        <div class="title-imageslider  sp-cat-title-parent">
                                            <a title="Robot, Mô hình" href="#" target="_self">
                                                Robot, Mô hình
                                            </a>
                                        </div>
                                        <div id="cat_slider_11882515351590916814" class="slider">
                                            <div class="cat_slider_inner so_category_type_default">
                                                <?php
                                                foreach ($data['Category_2'] as $key => $value) {
                                                ?>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="cat_slider_title">
                                                            <a href="ProductClient/ProductList/<?php echo $value['ID']; ?>" title="<?php echo $value['META_NAME']; ?>" target="_self">
                                                                    <?php echo $value['META_NAME'] ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="spc-wrap col-lg-10 col-md-9 col-sm-12 col-xs-12">
                                    <div class="spcat-items-container">
                                        <div class="spcat-items  items-category-p_model" data-total="84">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>
                                        </div>
                                        <div class="spcat-items  items-category-rating" data-total="84">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>
                                        </div>
                                        <div class="spcat-items  spcat-items-selected spcat-items-loaded items-category-pd_name" data-total="84">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="ltabs-items-inner owl2-carousel ltabs-slider products-list grid">
                                                    <?php
                                                    foreach ($data['Product_2'] as $key => $value) {
                                                    ?>
                                                        <div class="ltabs-item product-layout ">
                                                            <?php
                                                            foreach ($value as $key_1 => $val) {
                                                            ?>
                                                                <div class="item-inner product-thumb product-item-container transition ">
                                                                    <div class="left-block so-quickview">
                                                                        <div class="image product-image-container second_img">

                                                                            <a class="lt-image" data-product='<?php echo $val['ID'] ?>' href="ProductClient/ProductDetail/<?php echo $val['ID'] ?>" target="_self" title="<?php echo $val['NAME'] ?>">
                                                                                <img style="height: 162px" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $val['IMAGE'] ?>" class="img-l lazyload" alt="<?php echo $val['NAME'] ?>">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label">
                                                                        </div>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <div class="caption">
                                                                            <h4>
                                                                                <a href="ProductClient/ProductDetail/<?php echo $val['ID'] ?>" title="<?php echo $val['NAME'] ?>" target="_self" class="text-product-string"><?php echo $val['NAME'] ?></a>
                                                                            </h4>
                                                                            <p class="price">
                                                                            <span class="price-new"><?php echo number_format($val['DISCOUNT'], 0, '', ','); ?>đ</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="button-group">
                                                                            <button class="addToCart" data-id='<?php echo $val['ID'] ?>' type="button" > <span>Thêm vào giỏ</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <script type="text/javascript">
                                                    jQuery(document).ready(function($) {
                                                        var $tag_id = $('#so_super_category_148'),
                                                            parent_active = $('.spcat-items-selected', $tag_id),
                                                            total_product = parent_active.data('total'),
                                                            tab_active = $('.ltabs-items-inner', parent_active),
                                                            _delay = 300,
                                                            _duration = 600,
                                                            _effect = 'none',
                                                            nb_column0 = 6,
                                                            nb_column1 = 4,
                                                            nb_column2 = 3,
                                                            nb_column3 = 2,
                                                            nb_column4 = 1;

                                                        tab_active.owlCarousel2({
                                                            rtl: false,
                                                            nav: 0,
                                                            dots: false,
                                                            margin: 0,
                                                            loop: true,
                                                            autoplay: false,
                                                            autoplayHoverPause: true,
                                                            autoplayTimeout: 5000,
                                                            autoplaySpeed: 2000,
                                                            mouseDrag: true,
                                                            touchDrag: true,
                                                            navRewind: true,
                                                            navText: ['', ''],
                                                            responsive: {
                                                                0: {
                                                                    items: nb_column4,
                                                                    nav: (total_product / 3) >= nb_column4 ? false : false
                                                                },
                                                                480: {
                                                                    items: nb_column3,
                                                                    nav: (total_product / 3) >= nb_column3 ? false : false
                                                                },
                                                                768: {
                                                                    items: nb_column2,
                                                                    nav: (total_product / 3) >= nb_column2 ? false : false
                                                                },
                                                                992: {
                                                                    items: nb_column1,
                                                                    nav: (total_product / 3) >= nb_column1 ? false : false
                                                                },
                                                                1200: {
                                                                    items: nb_column0,
                                                                    nav: (total_product / 3) >= nb_column0 ? false : false
                                                                }
                                                            }
                                                        });

                                                        tab_active.on("translate.owl.carousel2", function(e) {
                                                            var $item_active = $(".ltabs-items-inner .owl2-item.active", $tag_id);
                                                            _UngetAnimate($item_active);
                                                        });

                                                        tab_active.on("translated.owl.carousel2", function(e) {
                                                            var $item_active = $(".ltabs-items-inner .owl2-item.active", $tag_id);
                                                            var $item = $(".ltabs-items-inner .owl2-item", $tag_id);
                                                            _UngetAnimate($item);

                                                            if ($item_active.length > 1 && _effect != "none") {
                                                                _getAnimate($item_active);
                                                            } else {
                                                                $item.css({
                                                                    "opacity": 1,
                                                                    "filter": "alpha(opacity = 100)"
                                                                });
                                                            }
                                                        });

                                                        var $item = $(".owl2-item", $tag_id);
                                                        _UngetAnimate($item);
                                                        _getAnimate($item);

                                                        function _getAnimate($el) {
                                                            if (_effect == "none") return;
                                                            tab_active.removeClass("extra-animate");
                                                            $el.each(function(i) {
                                                                var $_el = $(this);
                                                                $(this).css({
                                                                    "-webkit-animation": _effect + " " + _duration + "ms ease both",
                                                                    "-moz-animation": _effect + " " + _duration + "ms ease both",
                                                                    "-o-animation": _effect + " " + _duration + "ms ease both",
                                                                    "animation": _effect + " " + _duration + "ms ease both",
                                                                    "-webkit-animation-delay": +i * _delay + "ms",
                                                                    "-moz-animation-delay": +i * _delay + "ms",
                                                                    "-o-animation-delay": +i * _delay + "ms",
                                                                    "animation-delay": +i * _delay + "ms",
                                                                    "opacity": 1
                                                                }).animate({
                                                                    opacity: 1
                                                                });

                                                                if (i == $el.size() - 1) {
                                                                    tab_active.addClass("extra-animate");
                                                                }
                                                            });
                                                        }

                                                        function _UngetAnimate($el) {
                                                            $el.each(function(i) {
                                                                $(this).css({
                                                                    "animation": "",
                                                                    "-webkit-animation": "",
                                                                    "-moz-animation": "",
                                                                    "-o-animation": "",
                                                                    "opacity": 1
                                                                });
                                                            });
                                                        }
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Items-->
                                </div>
                            </div>
                            <script type="text/javascript">
                                //<![CDATA[
                                jQuery(document).ready(function($) {
                                    (function(element) {
                                        var type_show = 'slider';
                                        var $element = $(element),
                                            $tab = $('.spcat-tab', $element),
                                            $tab_label = $('.spcat-tab-label', $tab),
                                            $tabs = $('.spcat-tabs', $element),
                                            ajax_url = $tabs.parents('.spcat-tabs-container').attr('data-ajaxurl'),
                                            effect = $tabs.parents('.spcat-tabs-container').attr('data-effect'),
                                            delay = $tabs.parents('.spcat-tabs-container').attr('data-delay'),
                                            duration = $tabs.parents('.spcat-tabs-container').attr('data-duration'),
                                            rl_moduleid = $tabs.parents('.spcat-tabs-container').attr('data-modid'),
                                            $items_content = $('.spcat-items', $element),
                                            $items_inner = $('.spcat-items-inner', $items_content),
                                            $items_first_active = $('.spcat-items-selected', $element),
                                            $load_more = $('.spcat-loadmore', $element),
                                            $btn_loadmore = $('.spcat-loadmore-btn', $load_more),
                                            $select_box = $('.spcat-selectbox', $element),
                                            $id_cate = $('.spcat-tab', $element).attr('data-id-cate'),
                                            $tab_label_select = $('.spcat-tab-selected', $element),
                                            setting = 'a:82:{s:6:"action";s:9:"save_edit";s:4:"name";s:17:"ROBOT, MÔ HÌNH ";s:18:"module_description";a:1:{i:2;a:1:{s:9:"head_name";s:16:"ROBOT, MÔ HÌNH";}}s:9:"head_name";s:16:"ROBOT, MÔ HÌNH";s:17:"disp_title_module";s:1:"0";s:6:"status";s:1:"1";s:25:"advanced_mod_class_suffix";s:30:"custom_supper custom_supper_v2";s:16:"item_link_target";s:5:"_self";s:8:"category";s:2:"65";s:14:"category_depth";s:1:"2";s:17:"field_product_tab";a:3:{i:0;s:7:"pd_name";i:1;s:6:"rating";i:2;s:7:"p_model";}s:13:"field_preload";s:7:"pd_name";s:10:"limitation";s:1:"0";s:16:"product_ordering";s:4:"DESC";s:16:"category_column0";s:1:"5";s:16:"category_column1";s:1:"4";s:16:"category_column2";s:1:"3";s:16:"category_column3";s:1:"2";s:16:"category_column4";s:1:"1";s:24:"category_title_maxlength";s:2:"25";s:26:"display_title_sub_category";s:1:"1";s:22:"display_slide_category";s:1:"1";s:18:"show_category_type";s:1:"0";s:28:"sub_category_title_maxlength";s:2:"25";s:14:"category_width";s:3:"200";s:15:"category_height";s:3:"100";s:25:"category_placeholder_path";s:11:"nophoto.png";s:15:"product_column0";s:1:"6";s:15:"product_column1";s:1:"4";s:15:"product_column2";s:1:"3";s:15:"product_column3";s:1:"2";s:15:"product_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:4:"rows";s:1:"3";s:21:"product_display_title";s:1:"1";s:23:"product_title_maxlength";s:2:"18";s:27:"product_display_description";s:1:"0";s:29:"product_description_maxlength";s:3:"200";s:21:"product_display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"0";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:1:"7";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:13:"product_width";s:3:"196";s:14:"product_height";s:3:"196";s:24:"product_placeholder_path";s:11:"nophoto.png";s:6:"effect";s:4:"none";s:16:"product_duration";s:3:"600";s:13:"product_delay";s:3:"300";s:18:"subcategory_center";s:1:"0";s:30:"subcategory_display_navigation";s:1:"1";s:24:"subcategory_display_loop";s:1:"1";s:24:"subcategory_margin_right";s:1:"0";s:19:"subcategory_slideby";s:1:"1";s:21:"subcategory_auto_play";s:1:"0";s:33:"subcategory_auto_interval_timeout";s:3:"300";s:28:"subcategory_auto_hover_pause";s:1:"1";s:27:"subcategory_auto_play_speed";s:3:"300";s:28:"subcategory_navigation_speed";s:4:"3000";s:26:"subcategory_start_position";s:1:"0";s:22:"subcategory_mouse_drag";s:1:"1";s:22:"subcategory_touch_drag";s:1:"1";s:16:"slider_auto_play";s:1:"0";s:25:"slider_display_navigation";s:1:"0";s:19:"slider_display_loop";s:1:"1";s:17:"slider_mouse_drag";s:1:"1";s:17:"slider_touch_drag";s:1:"1";s:23:"slider_auto_hover_pause";s:1:"1";s:28:"slider_auto_interval_timeout";s:4:"5000";s:22:"slider_auto_play_speed";s:4:"2000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:3:"148";}',
                                            category_id = $('.sp-cat-title-parent', $element).attr('data-catids');
                                        enableSelectBoxes();

                                        function enableSelectBoxes() {
                                            $tab_wrap = $('.spcat-tabs-wrap', $element);
                                            $tab_label_select.html($('.spcat-tab', $element).filter('.tab-sel').children('.spcat-tab-label').html());
                                            if ($(window).innerWidth() <= 479) {
                                                $tab_wrap.addClass('spcat-selectbox');
                                            } else {
                                                $tab_wrap.removeClass('spcat-selectbox');
                                            }
                                        }

                                        $('span.spcat-tab-selected, span.spcat-tab-arrow', $element).click(function() {
                                            if ($('.spcat-tabs', $element).hasClass('spcat-open')) {
                                                $('.spcat-tabs', $element).removeClass('spcat-open');
                                            } else {
                                                $('.spcat-tabs', $element).addClass('spcat-open');
                                            }
                                        });

                                        $(window).resize(function() {
                                            if ($(window).innerWidth() <= 479) {
                                                $('.spcat-tabs-wrap', $element).addClass('spcat-selectbox');
                                            } else {
                                                $('.spcat-tabs-wrap', $element).removeClass('spcat-selectbox');
                                            }
                                        });

                                        function showAnimateItems(el) {
                                            var $_items = $('.new-spcat-item', el),
                                                nub = 0;
                                            $('.spcat-loadmore-btn', el).fadeOut('fast');
                                            $_items.each(function(i) {
                                                nub++;
                                                switch (effect) {
                                                    case 'none':
                                                        $(this).css({
                                                            'opacity': '1',
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                        break;
                                                    default:
                                                        animatesItems($(this), nub * delay, i, el);
                                                }
                                                if (i == $_items.length - 1) {
                                                    $('.spcat-loadmore-btn', el).fadeIn(delay);
                                                }
                                                $(this).removeClass('new-spcat-item');
                                            });
                                        }

                                        function animatesItems($this, fdelay, i, el) {
                                            var $_items = $('.spcat-item', el);
                                            $this.attr("style",
                                                "-webkit-animation:" + effect + " " + duration + "ms;" +
                                                "-moz-animation:" + effect + " " + duration + "ms;" +
                                                "-o-animation:" + effect + " " + duration + "ms;" +
                                                "-moz-animation-delay:" + fdelay + "ms;" +
                                                "-webkit-animation-delay:" + fdelay + "ms;" +
                                                "-o-animation-delay:" + fdelay + "ms;" +
                                                "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
                                                opacity: 1,
                                                filter: 'alpha(opacity = 100)'
                                            }, {
                                                delay: 100
                                            });
                                            if (i == ($_items.length - 1)) {
                                                $(".spcat-items-inner").addClass("play");
                                            }
                                        }

                                        showAnimateItems($items_first_active);
                                        $tab.on('click.spcat-tab', function() {
                                            var $this = $(this);
                                            if ($this.hasClass('tab-sel')) return false;
                                            if ($this.parents('.spcat-tabs').hasClass('spcat-open')) {
                                                $this.parents('.spcat-tabs').removeClass('spcat-open');
                                            }
                                            $tab.removeClass('tab-sel');
                                            $this.addClass('tab-sel');
                                            var items_active = $this.attr('data-active-content');

                                            var _items_active = $(items_active, $element);
                                            $items_content.removeClass('spcat-items-selected');
                                            _items_active.addClass('spcat-items-selected');
                                            $tab_label_select.html($tab.filter('.tab-sel').children('.spcat-tab-label').html());
                                            var $loading = $('.spcat-loading', _items_active);
                                            var loaded = _items_active.hasClass('spcat-items-loaded');
                                            if (!loaded && !_items_active.hasClass('spcat-process')) {
                                                _items_active.addClass('spcat-process');
                                                var field_order = $this.attr('data-field_order');
                                                $loading.show();
                                                $.ajax({
                                                    type: 'POST',
                                                    url: ajax_url,
                                                    data: {
                                                        spcat_module_id: rl_moduleid,
                                                        is_ajax_super_category: 1,
                                                        ajax_limit_start: 0,
                                                        categoryid: category_id,
                                                        fieldorder: field_order,
                                                        setting: setting,
                                                        ajax_reslisting_start: 0,
                                                        lbmoduleid: '148'
                                                    },
                                                    success: function(data) {
                                                        if (data.items_markup != '') {
                                                            $('.spcat-items-inner', _items_active).html(data.items_markup);
                                                            _items_active.addClass('spcat-items-loaded').removeClass('spcat-process');
                                                            $loading.remove();
                                                            showAnimateItems(_items_active);
                                                            updateStatus(_items_active);
                                                            if (type_show == 'slider') {
                                                                var $tag_id = $('#so_super_category_148'),
                                                                    parent_active = $('.spcat-items-selected', $tag_id),
                                                                    total_product = parent_active.data('total'),
                                                                    tab_active = $('.ltabs-items-inner', parent_active),
                                                                    nb_column0 = 6,
                                                                    nb_column1 = 4,
                                                                    nb_column2 = 3,
                                                                    nb_column3 = 2,
                                                                    nb_column4 = 1;

                                                                tab_active.owlCarousel2({
                                                                    rtl: false,
                                                                    nav: 0,
                                                                    dots: false,
                                                                    margin: 10,
                                                                    loop: true,
                                                                    autoplay: false,
                                                                    autoplayHoverPause: true,
                                                                    autoplayTimeout: 5000,
                                                                    autoplaySpeed: 2000,
                                                                    mouseDrag: true,
                                                                    touchDrag: true,
                                                                    navRewind: true,
                                                                    navText: ['', ''],
                                                                    responsive: {
                                                                        0: {
                                                                            items: nb_column4,
                                                                            nav: (total_product / 3) >= nb_column4 ? 0 : false,
                                                                        },
                                                                        480: {
                                                                            items: nb_column3,
                                                                            nav: (total_product / 3) >= nb_column3 ? 0 : false,
                                                                        },
                                                                        768: {
                                                                            items: nb_column2,
                                                                            nav: (total_product / 3) >= nb_column2 ? 0 : false,
                                                                        },
                                                                        992: {
                                                                            items: nb_column1,
                                                                            nav: (total_product / 3) >= nb_column1 ? 0 : false,
                                                                        },
                                                                        1200: {
                                                                            items: nb_column0,
                                                                            nav: (total_product / 3) >= nb_column0 ? 0 : false,
                                                                        },
                                                                    }
                                                                });
                                                            }                                                       
                                                        }
                                                    },
                                                    dataType: 'json'
                                                });
                                            } else {
                                                $('.spcat-item', $items_content).removeAttr('style').addClass('new-spcat-item').css('opacity', 0);
                                                showAnimateItems(_items_active);
                                            }
                                        });

                                        function updateStatus($el) {
                                            $('.spcat-loadmore-btn', $el).removeClass('loading');
                                            var countitem = $('.spcat-item', $el).length;
                                            $('.spcat-image-loading', $el).css({
                                                display: 'none'
                                            });
                                            $('.spcat-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                                            var rl_total = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_total');
                                            var rl_load = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_load');
                                            var rl_allready = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_allready');

                                            if (countitem >= rl_total) {
                                                $('.spcat-loadmore-btn', $el).addClass('loaded');
                                                $('.spcat-image-loading', $el).css({
                                                    display: 'none'
                                                });
                                                $('.spcat-loadmore-btn', $el).attr('data-label', rl_allready);
                                                $('.spcat-loadmore-btn', $el).removeClass('loading');
                                            }
                                        }

                                        $btn_loadmore.on('click.loadmore', function() {
                                            var $this = $(this);
                                            if ($this.hasClass('loaded') || $this.hasClass('loading')) {
                                                return false;
                                            } else {
                                                $this.addClass('loading');
                                                $('.spcat-image-loading', $this).css({
                                                    display: 'inline-block'
                                                });
                                                var rl_start = $this.parent().attr('data-rl_start'),
                                                    rl_moduleid = $this.parent().attr('data-modid'),
                                                    rl_ajaxurl = $this.parent().attr('data-ajaxurl'),
                                                    effect = $this.parent().attr('data-effect'),
                                                    field_order = $this.parent().attr('data-field_order'),
                                                    items_active = $this.parent().attr('data-active-content');
                                                var _items_active = $(items_active, $element);
                                                $.ajax({
                                                    type: 'POST',
                                                    url: rl_ajaxurl,
                                                    data: {
                                                        spcat_module_id: rl_moduleid,
                                                        is_ajax_super_category: 1,
                                                        ajax_reslisting_start: rl_start,
                                                        categoryid: category_id,
                                                        fieldorder: field_order,
                                                        setting: setting,
                                                        load_more: 1,
                                                        lbmoduleid: '148'
                                                    },
                                                    success: function(data) {
                                                        if (data.items_markup != '') {
                                                            $(data.items_markup).insertAfter($('.spcat-item', _items_active).nextAll().last());
                                                            $('.spcat-image-loading', $this).css({
                                                                display: 'none'
                                                            });
                                                            showAnimateItems(_items_active);
                                                            updateStatus(_items_active);
                                                        }
                                                      
                                                      
                                                    },
                                                    dataType: 'json'
                                                });
                                            }
                                            return false;
                                        });

                                    })('#so_super_category_148');
                                });
                                //]]>
                            </script>
                        </div>
                    </div>
                    <!--/.modcontent-->
                </div>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_1xfa  block block_6">
                <div class="module so-super-category-ltr custom_supper custom_supper_v3">
                    <div class="modcontent">
                        <div id="so_super_category_150" class="so-sp-cat first-load">
                            <!--<![endif]-->
                            <div class="spcat-wrap ">
                                <div class="category-wrap col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                    <div class="category-wrap-cat">
                                        <div class="title-imageslider  sp-cat-title-parent">
                                            <a title="Thiết bị, Dụng cụ" href="#" target="_self">
                                                Thiết bị, Dụng cụ
                                            </a>
                                        </div>

                                        <div id="cat_slider_4268354121590916814" class="slider">
                                            <div class="cat_slider_inner so_category_type_default">
                                                <?php
                                                foreach ($data['Category_3'] as $key => $value) {
                                                ?>
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="cat_slider_title">
                                                            <a href="ProductClient/ProductList/<?php echo $value['ID']; ?>" title="<?php echo $value['META_NAME']; ?>" target="_self">
                                                                    <?php echo $value['META_NAME'] ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="spc-wrap col-lg-10 col-md-9 col-sm-12 col-xs-12">
                                    <div class="spcat-items-container">
                                        <!--Begin Items-->

                                        <div class="spcat-items  items-category-sales" data-total="85">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>
                                        </div>

                                        <div class="spcat-items  items-category-p_date_added" data-total="85">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>

                                        </div>

                                        <div class="spcat-items  items-category-rating" data-total="85">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="spcat-loading"></div>
                                            </div>

                                        </div>

                                        <div class="spcat-items  spcat-items-selected spcat-items-loaded items-category-p_model" data-total="85">
                                            <div class="spcat-items-inner spcat00-6 spcat01-4 spcat02-3 spcat03-2 spcat04-1 none">
                                                <div class="ltabs-items-inner owl2-carousel ltabs-slider products-list grid">
                                                    <?php
                                                    foreach ($data['Product_3'] as $key => $value) {

                                                    ?>
                                                        <div class="ltabs-item product-layout ">
                                                            <?php foreach ($value as $key_1 => $val) {
                                                            ?>
                                                                <div class="item-inner product-thumb product-item-container transition ">
                                                                    <div class="left-block so-quickview">
                                                                        <div class="image product-image-container second_img">
                                                                            <a class="lt-image" data-product='<?php echo $val['ID'] ?>' href="ProductClient/ProductDetail/<?php echo $val['ID'] ?>" target="_self" title="<?php echo $val['NAME'] ?>">
                                                                                <img style="height: 162px" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $val['IMAGE'] ?>" class="img-l lazyload" alt="<?php echo $val['NAME'] ?>">
                                                                            </a>
                                                                        </div>
                                                                        <div class="box-label">
                                                                        </div>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <div class="caption">
                                                                            <h4>
                                                                                <a href="ProductClient/ProductDetail/<?php echo $val['ID'] ?>" title="<?php echo $val['NAME'] ?>" target="_self" class="text-product-string"><?php echo $val['NAME'] ?></a>
                                                                            </h4>
                                                                            <p class="price">
                                                                                <span class="price-new"><?php echo number_format($val['DISCOUNT'], 0, '', ','); ?>đ</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="button-group">
                                                                            <button class="addToCart" type="button" data-id='<?php echo $val['ID'] ?>'> <span>Thêm vào giỏ</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            } ?>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($) {
                                                            var $tag_id = $('#so_super_category_150'),
                                                                parent_active = $('.spcat-items-selected', $tag_id),
                                                                total_product = parent_active.data('total'),
                                                                tab_active = $('.ltabs-items-inner', parent_active),
                                                                _delay = 300,
                                                                _duration = 600,
                                                                _effect = 'none',
                                                                nb_column0 = 6,
                                                                nb_column1 = 4,
                                                                nb_column2 = 3,
                                                                nb_column3 = 2,
                                                                nb_column4 = 1;

                                                            tab_active.owlCarousel2({
                                                                rtl: false,
                                                                nav: 0,
                                                                dots: false,
                                                                margin: 0,
                                                                loop: true,
                                                                autoplay: false,
                                                                autoplayHoverPause: true,
                                                                autoplayTimeout: 5000,
                                                                autoplaySpeed: 2000,
                                                                mouseDrag: true,
                                                                touchDrag: true,
                                                                navRewind: true,
                                                                navText: ['', ''],
                                                                responsive: {
                                                                    0: {
                                                                        items: nb_column4,
                                                                        nav: (total_product / 3) >= nb_column4 ? false : false
                                                                    },
                                                                    480: {
                                                                        items: nb_column3,
                                                                        nav: (total_product / 3) >= nb_column3 ? false : false
                                                                    },
                                                                    768: {
                                                                        items: nb_column2,
                                                                        nav: (total_product / 3) >= nb_column2 ? false : false
                                                                    },
                                                                    992: {
                                                                        items: nb_column1,
                                                                        nav: (total_product / 3) >= nb_column1 ? false : false
                                                                    },
                                                                    1200: {
                                                                        items: nb_column0,
                                                                        nav: (total_product / 3) >= nb_column0 ? false : false
                                                                    }
                                                                }
                                                            });

                                                            tab_active.on("translate.owl.carousel2", function(e) {
                                                                var $item_active = $(".ltabs-items-inner .owl2-item.active", $tag_id);
                                                                _UngetAnimate($item_active);
                                                            });

                                                            tab_active.on("translated.owl.carousel2", function(e) {
                                                                var $item_active = $(".ltabs-items-inner .owl2-item.active", $tag_id);
                                                                var $item = $(".ltabs-items-inner .owl2-item", $tag_id);
                                                                _UngetAnimate($item);

                                                                if ($item_active.length > 1 && _effect != "none") {
                                                                    _getAnimate($item_active);
                                                                } else {
                                                                    $item.css({
                                                                        "opacity": 1,
                                                                        "filter": "alpha(opacity = 100)"
                                                                    });
                                                                }
                                                            });

                                                            var $item = $(".owl2-item", $tag_id);
                                                            _UngetAnimate($item);
                                                            _getAnimate($item);

                                                            function _getAnimate($el) {
                                                                if (_effect == "none") return;
                                                                tab_active.removeClass("extra-animate");
                                                                $el.each(function(i) {
                                                                    var $_el = $(this);
                                                                    $(this).css({
                                                                        "-webkit-animation": _effect + " " + _duration + "ms ease both",
                                                                        "-moz-animation": _effect + " " + _duration + "ms ease both",
                                                                        "-o-animation": _effect + " " + _duration + "ms ease both",
                                                                        "animation": _effect + " " + _duration + "ms ease both",
                                                                        "-webkit-animation-delay": +i * _delay + "ms",
                                                                        "-moz-animation-delay": +i * _delay + "ms",
                                                                        "-o-animation-delay": +i * _delay + "ms",
                                                                        "animation-delay": +i * _delay + "ms",
                                                                        "opacity": 1
                                                                    }).animate({
                                                                        opacity: 1
                                                                    });

                                                                    if (i == $el.size() - 1) {
                                                                        tab_active.addClass("extra-animate");
                                                                    }
                                                                });
                                                            }

                                                            function _UngetAnimate($el) {
                                                                $el.each(function(i) {
                                                                    $(this).css({
                                                                        "animation": "",
                                                                        "-webkit-animation": "",
                                                                        "-moz-animation": "",
                                                                        "-o-animation": "",
                                                                        "opacity": 1
                                                                    });
                                                                });
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container page-builder-ltr">
            <div class="row row_lw4u  row-style ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_lzr8  block block_10">
                    <div class="module so-latest-blog custom-ourblog clearfix default-nav preset01-3 preset02-3 preset03-2 preset04-2 preset05-2">
                        <h3 class="modtitle"><span>Bài viết tham khảo</span></h3>
                        <div class="modcontent">
                            <div id="so_latest_blog_199_15335489201590916815" class="so-blog-external button-type2 button-type2">
                                <div class="blog-external">
                                    <style>
                                        .text-overflow-string {
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            white-space: nowrap;
                                            width: inherit;
                                        }
                                    </style>
                                    <?php
                                    if (isset($data['ListPost'])) {
                                        foreach ($data['ListPost'] as $key => $value) {
                                    ?>
                                            <div class="media">
                                                <div class="item">
                                                    <div class="content-img">
                                                        <a target="_self">
                                                            <img data-sizes="auto" style="height: 200px" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $value['PATH_IMAGE']; ?>" alt="Các lỗi thường gặp khi lập trình Arduino? Lỗi cài Arduino" class="media-object lazyload" />
                                                        </a>
                                                        <div class="entry-date font-ct">
                                                            <div class="day-time"><?php echo date('d', strtotime($value['CREATE_AT']));     ?></div>
                                                            <div class="month-time"><?php echo date('M', strtotime($value['CREATE_AT']));     ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="content-detail">
                                                        <div class="media-content so-block">
                                                            <h4 class="media-heading font-ct head-item text-overflow-string">
                                                                <a href="PostClient/PostDetail/<?php echo $value['ID'] ?>" title="<?php echo $value['TITLE'] ?>" target="_self"><?php echo $value['TITLE'] ?></a>
                                                            </h4>
                                                            <div class="readmore">
                                                                <a href="PostClient/PostDetail/<?php echo $value['ID'] ?>" target="_self">Chi tiết</a>
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
                            <script type="text/javascript">
                                //<![CDATA[
                                jQuery(document).ready(function($) {

                                    (function(element) {
                                        var $element = $(element),
                                            $extraslider = $(".blog-external", $element),
                                            _delay = 500,
                                            _duration = 800,
                                            _effect = '';

                                        this_item = $extraslider.find('div.media');
                                        this_item.find('div.item:eq(0)').addClass('head-button');
                                        this_item.find('div.item:eq(0) .media-heading').addClass('head-item');
                                        this_item.find('div.item:eq(0) .media-left').addClass('so-block');
                                        this_item.find('div.item:eq(0) .media-content').addClass('so-block');
                                        $extraslider.on("initialized.owl.carousel2", function() {
                                            var $item_active = $(".owl2-item.active", $element);
                                            if ($item_active.length >= 1 && _effect != "none") {
                                                _getAnimate($item_active);
                                            } else {
                                                var $item = $(".owl2-item", $element);
                                                $item.css({
                                                    "opacity": 1,
                                                    "filter": "alpha(opacity = 100)"
                                                });
                                            }

                                            $(".owl2-nav", $element).insertBefore($extraslider);
                                            $(".owl2-controls", $element).insertAfter($extraslider);
                                        });

                                        $extraslider.owlCarousel2({
                                            margin: 30,
                                            slideBy: 1,
                                            autoplay: false,
                                            autoplayHoverPause: false,
                                            autoplayTimeout: 0,
                                            autoplaySpeed: 1000,
                                            startPosition: 1,
                                            mouseDrag: true,
                                            touchDrag: true,
                                            autoWidth: false,
                                            rtl: false,
                                            responsive: {
                                                0: {
                                                    items: 2
                                                },
                                                480: {
                                                    items: 2
                                                },
                                                768: {
                                                    items: 2
                                                },
                                                992: {
                                                    items: 5
                                                },
                                                1200: {
                                                    items: 5
                                                },
                                            },
                                            dotClass: "owl2-dot",
                                            dotsClass: "owl2-dots",
                                            dots: false,
                                            dotsSpeed: 500,
                                            nav: false,
                                            loop: true,
                                            navSpeed: 500,
                                            navText: ["&#139;", "&#155;"],
                                            navClass: ["owl2-prev", "owl2-next"]
                                        });

                                        $extraslider.on("translate.owl.carousel2", function(e) {

                                            var $item_active = $(".owl2-item.active", $element);
                                            _UngetAnimate($item_active);
                                            _getAnimate($item_active);
                                        });

                                        $extraslider.on("translated.owl.carousel2", function(e) {

                                            var $item_active = $(".owl2-item.active", $element);
                                            var $item = $(".owl2-item", $element);

                                            _UngetAnimate($item);

                                            if ($item_active.length > 1 && _effect != "none") {
                                                _getAnimate($item_active);
                                            } else {
                                                $item.css({
                                                    "opacity": 1,
                                                    "filter": "alpha(opacity = 100)"
                                                });
                                            }
                                        });

                                        function _getAnimate($el) {
                                            if (_effect == "none") return;
                                            //if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                            $extraslider.removeClass("extra-animate");
                                            $el.each(function(i) {
                                                var $_el = $(this);
                                                $(this).css({
                                                    "-webkit-animation": _effect + " " + _duration + "ms ease both",
                                                    "-moz-animation": _effect + " " + _duration + "ms ease both",
                                                    "-o-animation": _effect + " " + _duration + "ms ease both",
                                                    "animation": _effect + " " + _duration + "ms ease both",
                                                    "-webkit-animation-delay": +i * _delay + "ms",
                                                    "-moz-animation-delay": +i * _delay + "ms",
                                                    "-o-animation-delay": +i * _delay + "ms",
                                                    "animation-delay": +i * _delay + "ms",
                                                    "opacity": 1
                                                }).animate({
                                                    opacity: 1
                                                });

                                                if (i == $el.size() - 1) {
                                                    $extraslider.addClass("extra-animate");
                                                }
                                            });
                                        }

                                        function _UngetAnimate($el) {
                                            $el.each(function(i) {
                                                $(this).css({
                                                    "animation": "",
                                                    "-webkit-animation": "",
                                                    "-moz-animation": "",
                                                    "-o-animation": "",
                                                    "opacity": 1
                                                });
                                            });
                                        }
                                    })("#so_latest_blog_199_15335489201590916815");
                                });
                                //]]>
                            </script>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_kdqy  block block_11">
                    <div id="content_slider_pw3t" class="yt-content-slider owl2-theme yt-content-slider-style-default arrow-default top-brand" data-transitionin="" data-transitionout="" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="6" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                        <div class="yt-content-slide yt-clearfix yt-content-wrap">
                            <a href="#" title="" target="brank">
                                <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/default/assets/img/logo-brand/atmel_logo2.jpg" alt="title_5ed376cf1f77b2937129771590916815" /></a>
                        </div>
                        <div class="yt-content-slide yt-clearfix yt-content-wrap">
                            <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/default/assets/img/logo-brand/microchip_logo2.png" alt="title_5ed376cf1f7db152137381590916815" /></div>
                        <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/default/assets/img/logo-brand/arduino-logo2.png" alt="title_5ed376cf1f831325187271590916815" /></div>
                        <div class="yt-content-slide yt-clearfix yt-content-wrap">
                            <a href="#" title="" target="brank">
                                <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/default/assets/img/logo-brand/texas_instruments_logo2.png" alt="title_5ed376cf1f88217314187341590916815" /></a>
                        </div>
                        <div class="yt-content-slide yt-clearfix yt-content-wrap">
                            <a href="#" title="" target="brank">
                                <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/default/assets/img/logo-brand/fairchild_logo2.png" alt="title_5ed376cf1f91320731838841590916815" /></a>
                        </div>
                        <div class="yt-content-slide yt-clearfix yt-content-wrap">
                            <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/default/assets/img/logo-brand/national_instrument_logo2.png" alt="title_5ed376cf1f95917509057441590916815" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
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