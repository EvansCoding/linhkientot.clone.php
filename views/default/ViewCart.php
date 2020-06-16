<div class="container" id="container">
    <ul class="breadcrumb qc-breadcrumb">

        <li><a href="#">Trang chủ </a></li>

        <li><a href="#">Giỏ Hàng </a></li>

        <li><a href="#">Đặt hàng </a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12 ">
            <div id="d_quickcheckout">
                <div class="row">
                    <div class="qc-col-1 col-md-4">
                        <div id="" class="qc-step" data-col="1" data-row="1">
                            <div class="">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <span class="icon">
                                                <i class="fa fa-book"></i>
                                            </span>
                                            <span class="text">Thông tin khách hàng</span>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <p class="description"> </p>
                                        <form id="payment_address_form" class="form-horizontal" novalidate="novalidate">
                                            <div id="payment_address_firstname_input" class="text-input form-group  sort-item    required " data-sort="">
                                                <div class="col-xs-5">
                                                    <label class="control-label" for="payment_address_firstname">
                                                        <span class="text" title=""> Họ và tên:</span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-7">
                                                    <input type="text" name="payment_address.firstname" id="payment_firstname" value="" class="form-control   required  firstname" autocomplete="off" placeholder="* Họ và tên" data-rule-minlength="1" data-msg-minlength="Họ và tên phải từ 1 đến 32 kí tự!" data-rule-maxlength="32" data-msg-maxlength="Họ và tên phải từ 1 đến 32 kí tự!">
                                                </div>
                                            </div>
                                            <div id="payment_address_email_input" class="text-input form-group  sort-item   " data-sort="2">
                                                <div class="col-xs-5">
                                                    <label class="control-label" for="payment_address_email">
                                                        <span class="text" title=""> Địa chỉ Email:</span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-7">
                                                    <input type="email" name="payment_address.email" id="payment_email" value="" class="form-control   not-required  email" autocomplete="off" placeholder=" Địa chỉ Email" data-rule-minlength="3" data-msg-minlength="[object Object]" data-rule-maxlength="96" data-msg-maxlength="[object Object]" data-msg-remote="E-Mail không hợp lệ!">
                                                </div>
                                            </div>
                                            <div id="payment_address_telephone_input" class="text-input form-group  sort-item    required " data-sort="4">
                                                <div class="col-xs-5">
                                                    <label class="control-label" for="payment_address_telephone">
                                                        <span class="text" title=""> Số điện thoại:</span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-7">
                                                    <input type="tel" name="payment_address.telephone" id="payment_telephone" value="" class="form-control   required  telephone  " autocomplete="off" data-telephone_countries="" data-telephone_preferred_countries="" placeholder="050 123 45 54" data-rule-minlength="3" data-msg-minlength="Điện thoại phải từ 10 đến 11 kí tự!" data-rule-maxlength="32" data-msg-maxlength="Điện thoại phải từ 10 đến 11 kí tự!" data-msg-telephone="Please enter a valid telephone number">
                                                </div>
                                            </div>

                                            <div id="payment_address_address_1_input" class="text-input form-group  sort-item    required " data-sort="11">
                                                <div class="col-xs-5">
                                                    <label class="control-label" for="payment_address_address_1">
                                                        <span class="text" title=""> Địa chỉ cụ thể:</span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-7">
                                                    <textarea type="text" name="payment_address.address_1" id="payment_address" value="" class="form-control   required  address_1" autocomplete="off" placeholder="* Địa chỉ cụ thể" data-rule-minlength="3" data-msg-minlength="Địa chỉ phải từ 3 đến 128 kí tự!" data-rule-maxlength="128" data-msg-maxlength="Địa chỉ phải từ 3 đến 128 kí tự!"> </textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="qc-col-4 col-md-12">
                                <div id="cart_view" class="qc-step" data-col="4" data-row="0">
                                    <div class="panel panel-default ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <span class="icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </span>
                                                <span class="text">Đơn hàng</span>
                                            </h4>
                                        </div>
                                        <div class="qc-checkout-product panel-body">
                                            <p class="text"> </p>
                                            <table class="table table-bordered qc-cart">
                                                <thead>
                                                    <tr>
                                                        <td class="qc-image ">Sản phẩm:</td>
                                                        <td class="qc-name ">Tên sản phẩm:</td>
                                                        <td class="qc-quantity " style="width: 140px;">Số lượng:</td>
                                                        <td class="qc-price hidden-xs ">Đơn giá:</td>
                                                        <td class="qc-total ">Tổng:</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if (isset($data))
                                                    foreach ($data as $key => $value) {
                                                    ?>
                                                        <tr class="row_id" id="row_id_<?php echo $value[0]['ID']; ?>" data-id="<?php echo $value[0]['ID']; ?>">
                                                        
                                                            <td class="qc-image ">
                                                                <a href="ProductClient/ProductDetail/<?php echo $value[0]['ID']; ?>" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover">
                                                                    <img style="height: 50px" src="<?php echo $value[0]['IMAGE']; ?>" class="img-responsive">
                                                                </a>
                                                            </td>
                                                            <td class="qc-name ">
                                                                <a href="ProductClient/ProductDetail/<?php echo $value[0]['ID']; ?>">
                                                                    <?php echo $value[0]['NAME']; ?>
                                                                </a>
                                                            </td>
                                                            <td class="qc-model hidden-xs hidden"> <?php echo $value[0]['ID']; ?></td>
                                                            <td class="qc-quantity ">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-btn">
                                                                        <!-- <button class="btn btn-primary decrease hidden-xs" data-product="<?php echo $value[0]['ID']; ?>"><i class="fa fa-chevron-down"></i></button> -->
                                                                    </span>
                                                                    <input type="number" class="num" data-type='buynow' name="num[]" value="<?php echo $value[1]; ?>" class="qc-product-qantity form-control text-center" name="cart.1337" data-refresh="2">
                                                                    <span class="input-group-btn">
                                                                        <!-- <button class="btn btn-primary increase hidden-xs" data-product="<?php echo $value[0]['ID']; ?>"><i class="fa fa-chevron-up"></i></button> -->
                                                                        <button class="btn btn-danger delete hidden-xs" onclick="deleteRow('<?php echo $value[0]['ID']; ?>')" data-product="<?php echo $value[0]['ID']; ?>"><i class="fa fa-times"></i></button>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="qc-price hidden-xs " data-price="<?php echo $value[0]['DISCOUNT']; ?>"><?php echo number_format($value[0]['DISCOUNT'], 0, '', ','); ?>đ</td>
                                                            <td id="total_<?php echo $value[0]['ID']; ?>" class="qc-total" data-total="<?php echo $value[0]['ID']; ?>"><?php echo number_format($value[1] * $value[0]['DISCOUNT'], 0, '', ','); ?>đ</td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                <script>
                                                    function deleteRow(id){
                                                        debugger;
                                                        $.ajax({
                                                            url : "CartClient/deleteItem",
                                                            type : "post",
                                                            dataType:"text",
                                                            data : {
                                                            id
                                                        },
                                                        success : function (result){
                                                            if(result != 'error'){
                                                                toastr["success"]("Xóa thành công!");
                                                                $('#row_id_'+id).remove();
                                                                $('.total-shopping-cart .items_cart').html(result);
                                                                countPrice();
                                                            }
                                                            else
                                                            {
                                                                toastr["error"]("Xóa thất bại!");
                                                            }
                                                        }
                                                        });
                                                       
                                                    }
                                                    $(document).ready(function(){
                                                   
                                                        var price = 0;
                                                    $('.prices').each(function(){
                                                        price += parseInt($(this).data('price').replace(/\s/g,''));
                                                    })
                                                    price = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                                                    $('#totalPrice').text(price);
                                                    countPrice();
                                                        countPrice();
                                                    });
                                                    function countPrice(){
                                                        var num = [];
                                                        var price = [];
                                                        var total = [];
                                                        $('.num').each(function() {
                                                            num.push($(this).val());
                                                        });
                                                       
                                                        $(".qc-price").each(function() {
                                                            price.push(parseInt($(this).data('price')));
                                                        });
                                                        $('.qc-total').each(function() {
                                                            total.push($(this).data('total'));
                                                        });
                                                        var sum = 0;
                                                        for (let index = 0; index < num.length; index++) {
                                                            var qc_total = 0;
                                                       
                                                            let result = num[index]*price[index+1];
                                                            qc_total = result.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                                                            $('#total_'+total[index+1]).html(qc_total +"đ");
                                                        }
 
                                                        for (var i = 0; i < num.length ; i++) {
                                                            sum += num[i]*price[i+1];
                                                        }
                                                    
                                                        sum = sum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                                                        $('#totalPrice').html(sum +"đ");
                                                    }

                                                    $('.num').on('change', function(){
                                                        countPrice();
                                                    });

                                                    function orderComplete(){
                                                    
                                                        var firstname = $('#payment_firstname').val();
                                                        var email = $('#payment_email').val();
                                                        var phone = $('#payment_telephone').val();

                                                        var address = $('#payment_address').val();
                                                        var comment = $('#confirm_comment').val();
                                               
                                                        var num = [];
                                                        $('.num').each(function() {
                                                            num.push($(this).val());
                                                        });

                                                        var ids = [];
                                                        $('.row_id').each(function() {
                                                            ids.push($(this).data('id'));
                                                        });
                                                   
                                                        var data = [firstname, email, phone, address,comment,num,ids];
                                                        $.ajax({
                                                            url : "CartClient/orderComplete",
                                                            type : "post",
                                                            dataType:"json",
                                                            data : {
                                                                data
                                                            },
                                                            success : function (result){
                                                               
                                                                if(result == 'error')
                                                                {
                                                                    toastr["error"]("Đặt hàng không thành công!");
                                                                }
                                                                else{
                                                                    toastr["success"]("Đặt hàng thành công!");

                                                                    setTimeout(function(){
                                                                        window.location.href="CartClient/orderFinish";
                                                                    }, 1000); 
                                                                }
                                                            }
                                                        });
                                                    }
                                                </script>
                                                </tbody>
                                            </table>
                                            <div class="form-horizontal">
                                                <div class="form-horizontal qc-totals">
                                                    <div class="row">
                                                        <label class="col-sm-9 col-xs-6 control-label">Tổng cộng</label>
                                                        <div id="totalPrice" class="col-sm-3 col-xs-6 form-control-static text-right">15.200.020.000đ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="confirm_view" class="qc-step" data-col="4" data-row="1">
                                    <div id="confirm_wrap">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form id="confirm_form" class="form-horizontal" novalidate="novalidate">
                                                    <div id="confirm_comment_input" class="text-input form-group  sort-item   " data-sort="                            ">
                                                        <div class="col-xs-12">
                                                            <label class="control-label" for="confirm_comment">
                                                                <span class="text" title=""> Ghi chú đơn hàng của bạn</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <textarea name="confirm.comment" id="confirm_comment" class="form-control validate not-required textarea comment" autocomplete="off" placeholder=" Ghi chú đơn hàng của bạn" data-rule-minlength="1" data-msg-minlength="Please fill in the comment to the order"></textarea>
                                                        </div>
                                                    </div>
                                                    <div id="confirm_agree_input" class="checkbox-input form-group sort-item hidden  " data-sort="1                            ">
                                                    </div>
                                                </form>
                                                <button id="qc_confirm_order" onclick="orderComplete()" class="btn btn-primary btn-lg btn-block ">Đặt hàng</button>
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
</div>