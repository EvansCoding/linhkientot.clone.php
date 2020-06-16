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
            <h2 class="title-content"><?php echo $title; ?></h2>
        </div>
    </div>
    <div class="row main-content">
        <div class="form-group col-md-12">
            <button type="button" class="btn btn-info btn-add-data" data-toggle="modal" onclick="Popup('null')"><i class="far fa-plus-square" style="margin-right: 5px ;"></i>Thêm</button>
        </div>
        <div class="form-group col-md-12">
            <table id="table" class="table  table-hover" style="width: 100% !important;">
                <thead style="width: 100%">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 30%; min-width: 120px;">Tên</th>
                        <th style="width: 30%;min-width: 100px;">Hình ảnh</th>
                        <th style="width: auto;min-width: 100px;">Chỉ số</th>
                        <th style="width: 10%; min-width: 100px;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    $count = 0;
                    if (isset($data)) {
                        $count = count($data);
                    }

                    for ($i = 0; $i < $count; $i++) {
                    ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $data[$i]["TITLE"]; ?></td>
                            <td>
                                <img src="<?php echo  $data[$i]["PATH_IMAGE"]; ?> " alt="dsaf" width="150px" height="100px">
                            </td>
                            <td><?php echo $data[$i]["SERIAL"]; ?></td>
                            <td>
                                <button type="button" class="btn" data-toggle="modal" onclick="Popup('<?php echo $data[$i]['ID']; ?>')">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button type="button" class="btn btnDelete" data-id='<?php echo $data[$i]["ID"]; ?>'>
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md " role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 700"> Thông tin ảnh bìa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:void(0)">
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-9">
                    <div class="form-group">
                        <input id="idItem" type="hidden" name="" value="">
                        <label for="inputAddress"> <strong> Chủ đề</strong></label>
                        <input type="text" class="form-control" id="titleItem" placeholder="" required="required">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <label for="inputAddress"> <strong> Chỉ số</strong></label>
                        <input type="number" class="form-control" id="serialItem" value="0" required="required">
                    </div>
                    </div>
                </div>
                    <label for="inputImage"> <strong> Đường dẫn</strong></label>
                    <div class="input-group mb-3">
                        <input type="text" id="imageItem" class="form-control" placeholder="" aria-label="Enter for image" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a data-toggle="modal" data-target="#myModal1" class="btn btn-dark " style="color: white"onclick="window.open('filemanager/dialog.php?type=1&amp;popup=1&amp;field_id=imageItem  ','pdwfilebrowser','width=1000,height=650,scrollbars=no,toolbar=no,location=no');" >
                                <i class="fa fa-upload" style="color: white" ></i>
                                Browse
                            </a>
                        </div>
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
    $(document).ready(function(){
        $('#table').DataTable({
            "scrollY": "70vh",
            "scrollX": true,
            "scrollCollapse": true,
            "paging": true,
            "responsive": true,
            "bAutoWidth": true,
            "ordering": false
        });
    });

    $(".btnDelete").click(function() {
        Swal.fire({
            title: 'Chắc chắn xóa?',
            text: "Dữ liệu sẽ không được khôi phục",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Vâng!'
        }).then((result) => {
            if (result.value) {
                var id = $(this).data('id');
                $.ajax({
                    url: 'banner/delete',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        id
                    },
                    success: function(result) {
                        if (result == '1') {
                            Swal.fire(
                                'Đã xóa',
                                'Dữ liệu đã được xóa',
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

    function Popup(idItem) {
        var id = idItem;
        $.ajax({
            url: 'banner/show',
            type: 'GET',
            data: {
                id
            },
            dataType: 'JSON',
            success: function(data) {
                $('#idItem').val(data.id);
                $('#titleItem').val(data.title);
                $('#imageItem').val(data.pathImage);
                $('#serialItem').val(data.serial);
                $('#exampleModalCenter').modal('show');
            },
            error: function(xhr, status) {
                alert(status);
            }
        });
    }

    $('#btn-saveChange').click(function() {
        var id = $("#idItem").val();
        var title = $('#titleItem').val();
        var pathImage = $('#imageItem').val();
        var serial = $('#serialItem').val();
        var data = [id,title,pathImage, serial];
        debugger;
        $.ajax({
            url: 'banner/store',
            method: 'POST',
            data: {
                data
            },
            dataType: 'JSON',
            success: function(data) {
                if (data == "Insert Successfull") {
                    $('#exampleModalCenter').modal('toggle');
                    console.log(data);
                    location.reload();
                } else if (data == "Update Successfull") {
                    $('#exampleModalCenter').modal('toggle');
                    console.log(data);
                    location.reload();
                }
            },
            error: function(xhr, status) {
                alert(status);
            }
        });
    });
</script>