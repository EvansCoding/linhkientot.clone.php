<style>
    .comp-card {
        -webkit-box-shadow: 3px 3px 3px 3px #ccc;
        /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow: 3px 3px 3px 3px #ccc;
        /* Firefox 3.5 - 3.6 */
        box-shadow: 3px 3px 3px 3px #ccc;
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
            <h2 class="title-content">DASHBOARD</h2>
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
                                    <h3 class="f-w-700 text-c-blue">15,000</h3>
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
                                    <h3 class="f-w-700 text-c-blue">1,500</h3>
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
                                    <h3 class="f-w-700 text-c-blue">1,500,000,000</h3>
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
                                <th scope="col" style="width: 100px; text-align:center">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><span class="badge badge-danger">Chưa xem</span></td>
                                <td style="text-align: center;"> <i class="fas fa-eye bg-c-blue"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><span class="badge badge-danger">Chưa xem</span></td>
                                <td style="text-align: center;"> <i class="fas fa-eye bg-c-blue"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td><span class="badge badge-danger">Chưa xem</span></td>
                                <td style="text-align: center;"> <a onclick="Popup(null)"><i class="fas fa-eye bg-c-blue"></i></a> </td>
                            </tr>
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
                        <div class="form-group col-md-6">
                            <label for="customer"> <strong> Họ và Tên </strong></label>
                            <input type="email" class="form-control" id="customer">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone"> <strong> Số điện thoại </strong></label>
                            <input type="password" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address"> <strong> Địa chỉ</strong></label>
                        <textarea type="text" class="form-control" id="address" placeholder="Cao Lãnh, Đồng Tháp"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="email"> <strong> Email</strong></label>
                        <input type="email" class="form-control" id="email" placeholder="nguyen.ntkiet1999@gmail.com">
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
                                    <th scope="col">Mã sản phẩm</th>
                                    <th scope="col" style=" text-align:center;">Hình ảnh</th>
                                    <th scope="col" style="width: 100px; text-align:center;">Số lượng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td style="text-align: center;">1</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td style="text-align: center;">2</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" id="btn-saveChange" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="public/admin/lib/jquery-3.4.1.min.js" type="text/javascript"></script>
<script>
    function Popup(idItem) {
        var id = idItem;
        $.ajax({
            url: 'ordermanager/show',
            type: 'GET',
            data: {
                id
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                $('#idItem').val(data.id);
                $('#titleCategory').val(data.title);
                $('#valueCategory').val(data.value);
                $("#select_parent option").removeAttr("selected");
                $('#select_parent option[value="' + data.id_parent + '"]').attr('selected', 'selected');
                $('#exampleModalCenter').modal('show');
            },
            error: function(xhr, status) {
                alert(status);
            }
        });

        $('#exampleModalCenter').modal('show');
    }
</script>