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
        <div class="form-group col-md-12"> <button type="button" class="btn btn-info btn-add-data" data-toggle="modal" onclick="Popup('null')"><i class="far fa-plus-square" style="margin-right: 5px ;"></i>Thêm</button> </div>
        <div class="form-group col-md-12">
            <table id="table" class="table  table-hover" style="width: 100% !important;">
                <thead style="width: 100%">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 30%; min-width: 180px;">Nickname</th>
                        <th style="width: auto;min-width: 100px;">Username</th>
                        <th style="width: auto;min-width: 100px;">Image</th>
                        <th style="width: 10%; min-width: 100px;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    for ($i = 0; $i < count($data); $i++) {
                    ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $data[$i]["NICKNAME"] ?></td>
                            <td><?php echo $data[$i]["USERNAME"] ?></td>
                            <td>
                                <img src="<?php echo $data[$i]["THUMBNAIL"] ?>" style="width:200p; height: 100px" />
                            </td>
                            <td>
                                <button type="button" class="btn" data-toggle="modal" onclick="Popup(<?php echo $data[$i]['ID'] ?>)">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button type="button" class="btn btnDelete" data-id='<?php echo $data[$i]['ID'] ?>'>
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
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Info Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:void(0)">
                <div class="modal-body">
                    <div class="form-group">
                        <input id="idMember" type="hidden" name="" value="">
                        <label for="inputAddress">Nickname</label>
                        <input type="text" class="form-control" id="nickname" placeholder="Enter to nickname" required="required">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter to username" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter to email" required="required"/> 
                    </div>
                    <div class="form-group">
                       <label for="">Password</label> 
                       <input type="password" class="form-control" id="password" placeholder="Enter to password" required="required">
                    </div>
                    <div class="form-group">
                    <label for="">Image</label> 
                  <div class="input-group mb-3">
                          
                        <input type="text" id="thumbnail" class="form-control" placeholder="Enter for image" aria-label="Enter for image" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a data-toggle="modal" data-target="#myModal1" class="btn btn-dark " style="color: white" onclick="window.open('filemanager/dialog.php?type=1&amp;popup=1&amp;field_id=thumbnail  ','pdwfilebrowser','width=1000,height=650,scrollbars=no,toolbar=no,location=no');">
                                <i class="fa fa-upload" style="color: white"></i>
                                Browse
                            </a>
                        </div>
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
                    url: 'member/delete',
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
            url: 'member/show',
            type: 'GET',
            data: {
                id
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                $('#idMember').val(data.id);
                $('#nickname').val(data.nickname);
                $('#username').val(data.username);
                $('#password').val(data.password);
               $('#email').val(data.email); 
               $('#thumbnail').val(data.thumbnail);
                $('#exampleModalCenter').modal('show');
            },
            error: function(xhr, status) {
                alert(status);
            }
        });
    }

    $('#btn-saveChange').click(function() {
        var id = $("#idMember").val();
        var nickname = $('#nickname').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var email = $('#email').val();
        var thumbnail = $('#thumbnail').val();
        var data = [id,nickname,username,password,email,thumbnail];
        $.ajax({
            url: 'member/store',
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