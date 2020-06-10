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
                        <th style="width: 30%; min-width: 180px;">Tên danh mục</th>
                        <th style="width: auto;min-width: 100px;">Dữ liệu</th>
                        <th style="width: 10%; min-width: 100px;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    for ($i = 0; $i < count($data['category']); $i++) {
                    ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $data['category'][$i][0]["META_NAME"] ?></td>
                            <td><?php if (isset($data['category'][$i][0]["META_KEY"])) {
                                    echo $data['category'][$i][0]["META_KEY"];
                                } ?></td>
                            <td>
                                <button type="button" class="btn" data-toggle="modal" onclick="Popup(<?php echo $data['category'][$i][0]['ID'] ?>)">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button type="button" class="btn btnDelete" data-id='<?php echo $data['category'][$i][0]["ID"] ?>'>
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <?php
                        for ($j = 0; $j < count($data['category'][$i][1]); $j++) {
                        ?>
                            <tr>
                                <td>_____</td>
                                <td><?php echo $data['category'][$i][1][$j]["META_NAME"] ?></td>
                                <td><?php if (isset($data['category'][$i][1][$j]["META_KEY"])) {
                                        echo $data['category'][$i][1][$j]["META_KEY"];
                                    } ?></td>
                                <td>
                                    <button type="button" class="btn" data-toggle="modal" onclick="Popup(<?php echo $data['category'][$i][1][$j]['ID'] ?>)">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btnDelete" data-id='<?php echo $data['category'][$i][1][$j]["ID"] ?>'>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thông tin thể loại</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:void(0)">
                <div class="modal-body">
                    <div class="form-group">
                        <input id="idItem" type="hidden" name="" value="">
                        <label for="inputAddress">Tên</label>
                        <input type="text" class="form-control" id="titleCategory" placeholder="Nhập tên thể loại" required="required">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Dữ liệu</label>
                        <input type="text" class="form-control" id="valueCategory" placeholder="Nhập dữ liệu thể loại" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Loại loại cha</label>
                        <select id="select_parent" class="custom-select custom-select-md mb-3">
                            <option value="null">Danh mục cha</option>
                            <?php
                            foreach ($data['categoryOfParent'] as $key => $value) {
                            ?>
                                <option value="<?php echo $value['ID']; ?>"><?php echo $value['META_NAME']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
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
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                var id = $(this).data('id');

                $.ajax({
                    url: 'category/delete',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        id
                    },
                    success: function(result) {
                        if (result == '1') {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            location.reload();
                        } else {
                            Swal.fire(
                                'Delete failed!',
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
            url: 'category/show',
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
    }

    $('#btn-saveChange').click(function() {
        var id = $("#idItem").val();
        var title = $('#titleCategory').val();
        var value = $('#valueCategory').val();
        var id_parent = $('#select_parent').val();
        $.ajax({
            url: 'category/store',
            method: 'POST',
            data: {
                id,
                title,
                value,
                id_parent
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