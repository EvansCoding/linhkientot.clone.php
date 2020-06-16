<style>
    .comp-card {
        -webkit-box-shadow: 1px 1px 1px 1px #ccc;
        /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow: 1px 1px 1px 1px #ccc;
        /* Firefox 3.5 - 3.6 */
        box-shadow: 1px 1px 1px 1px #ccc;
    }
</style>

<div id="overlay"></div>
<div class="container-fluid p-3">
    <div class="row">
        <div class="form-group col-md-12">
            <div class="icon-nav" style="margin-top: -14px; margin-left: 0px; ">
                <a id="toggle-sidebar" href="#"> <i class="fas fa-bars" style="font-size: 24px; color: #646464;"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row title">
        <div class="form-group col-md-12">
            <h2 class="title-content">THỐNG KÊ</h2>
        </div>
    </div>
    <div class="row main-content" style="margin-top: 20px">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12 col-xl-4">
                    <div class="card comp-card" style="background-color: #5885EE; border: none">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col" style="color: white">
                                    <h6 class="m-b-25">Tổng sản phẩm</h6>
                                    <h3 class="f-w-700 text-c-blue"><?php echo isset($data['totalProduct']) ? $data['totalProduct'][0][0]: 0 ?></h3>
                                    <p class="m-b-0">_</p>
                                </div>
                                <div class="col-auto" style="color: white">
                                    <i class="fas fa-eye bg-c-blue"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <div class="card comp-card" style="background-color: #4CBBCE; border: none">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col" style="color: white">
                                    <h6 class="m-b-25">Sản phẩm đã bán</h6>
                                    
                                    <h3 class="f-w-700 text-c-blue"><?php echo isset($data['totalOrderProduct']) ? $data['totalOrderProduct'][0][0]: 0 ?></h3>
                                    <p class="m-b-0">_</p>
                                </div>
                                <div class="col-auto" style="color: white">
                                    <i class="fas fa-eye bg-c-blue"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-md-12 col-xl-4">
                    <div class="card comp-card" style="background-color: #47CD94; border: none">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col" style="color: white">
                                    <h6 class="m-b-25">Tổng doanh thu</h6>
                                    <h3 class="f-w-700 text-c-blue"><?php echo isset($data['totalQuantum']) ? number_format($data['totalQuantum'][0][0], 0, '', ',') : 0 ?> VNĐ</h3>
                                    <p class="m-b-0">_</p>
                                </div>
                                <div class="col-auto" style="color: white">
                                    <i class="fas fa-eye bg-c-blue"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <div class="card comp-card">
                <div class="body-card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:100px">#</th>
                                <th scope="col" style="width: 200px">Số điện thoại</th>
                                <th scope="col" style="width: 300px">Họ và Tên</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col" style="width: 200px">Trạng thái</th>
                                <th scope="col" style="width: 100px; text-align:center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($data['products'])) {
                                foreach ($data['products'] as $key => $value) {
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $key + 1 ?></th>
                                        <td><?php echo $value['PHONE'] ?></td>
                                        <td><?php echo $value['CUSTOMER'] ?></td>
                                        <td><?php echo $value['ADDRESS'] ?></td>
                                        <td><span class="badge badge-danger">Chưa xem</span></td>

                                        <td>
                                            <button type="button" class="btn" data-toggle="modal" onclick="Popup('<?php echo $value['ID']; ?>')">
                                                <i class="fas fa-eye bg-c-blue"></i>
                                            </button>
                                            <button type="button" class="btn btnDelete" data-id='<?php echo $value['ID']; ?>'>
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:void(0)">
                <div class="modal-body">

                    <div class="form-row">
                    <input type="hidden" class="form-control" id="idItem">
                        <div class="form-group col-md-6">
                            <label for="customer"> <strong> Họ và Tên </strong></label>
                            <input type="text" class="form-control" id="customer">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone"> <strong> Số điện thoại </strong></label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address"> <strong> Địa chỉ</strong></label>
                        <textarea type="text" class="form-control" id="address" placeholder="Cao Lãnh, Đồng Tháp"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="email"> <strong> Email</strong></label>
                        <input type="text" class="form-control" id="email" placeholder="nguyen.ntkiet1999@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="note"> <strong>Ghi chú</strong> </label>
                        <textarea type="text" class="form-control" id="note" placeholder="Không có gì!"> </textarea>
                    </div>

                    <div class="form-group">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 50px;">#</th>
                                    <th scope="col" style="width: 500px">Tên sản phẩm</th>
                                    <th scope="col" style=" text-align:center;">Hình ảnh</th>
                                    <th scope="col" style="width: 100px; text-align:center;">Số lượng</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTalbe">
                                

                            </tbody>
                            
                   
                        </table>
                        <div class="form-group col-4" style="float: right">
                        <label for="email"> <strong> Tổng tiền </strong></label>
                        <input type="text" class="form-control " id="total" placeholder="" disabled>
                    </div>
                    <div style="clear:both"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" id="btn-saveChange" class="btn btn-primary">Chấp nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="public/admin/lib/jquery-3.4.1.min.js" type="text/javascript"></script>
<script>
    function Popup(idItem) {

        $.ajax({
            url: 'Product/ListOrderProduct',
            type: 'GET',
            data: {
                idItem
            },
            dataType: 'JSON',
            success: function(data) {
                $('#idItem').val(data.id);
                $('#customer').val(data.customer);
                $('#phone').val(data.phone);
                $('#address').val(data.address);
                $('#email').val(data.email);
                $('#note').val(data.note);
                let index = 1;
                $('#bodyTalbe').empty();
                data.product.forEach(element => {

                    $('#bodyTalbe').append('<tr><th scope="row">'+(index++)+'</th><td >'+element[1]+'</td><td style="text-align: center;"> <img style="width: 50px; height: 50px" src="'+element[2]+'" /></td><td style="text-align: center;">'+element[3]+'</td></tr>');
                });
                debugger;
                var total = data.total[0];
                total = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $('#total').val(total +"đ");
                $('#exampleModalCenter').modal('show');
            },
            error: function(xhr, status) {
                alert(status);
            }
        });
    }

    $(document).on('click','#btn-saveChange', function(){
        var id = $('#idItem').val();
        $.ajax({
            url : "Cart/ChangeStatus",
            type : "POST",
            dataType : "JSON",
            data: {
                id
            },
            success : function (result){                                      
                if(result == 'error')
                {
                    toastr["error"]("Đơn hàng lỗi!");
                    $('#exampleModalCenter').modal('toggle');
                }
                else{
                    toastr["success"]("Đã chấp nhận đơn hàng!");
                    $('#exampleModalCenter').modal('toggle');
                    setTimeout(function(){
                        window.location.href="IndexAdmin/dashboard";
                    }, 1000); 
                }
            }
        });
    });

    $(".btnDelete").click(function() {
        Swal.fire({
            title: 'Bạn chắc chứ',
            text: "Dữ liệu sẽ không được khôi phục!",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Vâng'
        }).then((result) => {
            if (result.value) {
                var id = $(this).data('id');

                $.ajax({
                    url: 'cart/delete',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        id
                    },
                    success: function(result) {
                        if (result == '1') {
                            Swal.fire(
                                'Xóa thành công!',
                                'Dữ liệu của bạn đã được xóa!',
                                'success'
                            )
                            location.reload();
                        } else {
                            Swal.fire(
                                'Xóa thất bại!',
                                '',
                                'error'
                            )
                        }
                    }
                })
            }
        });
    });
</script>