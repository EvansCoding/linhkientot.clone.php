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
                        <th style="width: 20%; min-width: 120px;">Tên</th>
                        <th style="width: auto;min-width: 100px;">Hình ảnh</th>
                        <th style="width: auto;min-width: 100px;">Loại sản phẩm</th>
                        <th style="width: auto;min-width: 100px;">Trạng thái</th>
                        <th style="width: auto;min-width: 100px;">Ngày cập nhật</th>
                        <th style="width: 10%; min-width: 100px;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    $count = count($data['product']);
                    for ($i = 0; $i < $count; $i++) {
                    ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $data['product'][$i]["NAME"] ?></td>
                            <td>
                                <img src="<?php echo  $data['product'][$i]["IMAGE"] ; ?> " alt="dsaf" width="150px" height="100px">
                            </td>
                            <td><?php echo $data['product'][$i]["ID_CATEGORY"]; ?></td>
                            <td><?php if ($data['product'][$i]["STATUS"] == "1") {
                                    echo '<span class="badge badge-success">Còn hàng</span>';
                                } else {
                                    echo '<span class="badge badge-danger">Hết hàng</span>';
                                } ?></td>
                            <td><?php echo $data['product'][$i]["UPDATE_AT"]; ?></td>
                            <td>
                                <button type="button" class="btn" data-toggle="modal" onclick="Popup('<?php echo $data['product'][$i]['ID']; ?>')">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button type="button" class="btn btnDelete" data-id='<?php echo $data['product'][$i]["ID"]; ?>'>
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
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 700"> Thông tin sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:void(0)">
                <div class="modal-body">
                <input id="caseItem" type="hidden" name="" value="">
                    <div class="form-row">
                    <div class="form-group col-md-3">
                            <label for="name"> <strong> Mã sản phẩm </strong></label>
                            <input type="text" class="form-control" id="idItem" disabled>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="name"> <strong> Tên sản phẩm </strong></label>
                            <input type="text" class="form-control" id="nameItem">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="price"> <strong> Giá </strong></label>
                            <input type="number" class="form-control" id="priceItem">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="discount"> <strong> Khuyến mãi</strong></label>
                            <input type="number" class="form-control" id="discountItem">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="quantum"> <strong>Số lượng</strong> </label>
                            <input type="number" class="form-control" id="quantumItem">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="quantum"> <strong> Danh mục</strong></label>
                            <select id="select_category" class="custom-select custom-select-md">
                                <?php
                                foreach ($data['category'] as $key => $value) {
                                ?>
                                    <option value="<?php echo $value['ID']; ?>"><?php echo $value['META_NAME']; ?></option>
                                <?php
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="price"> <strong> Mô tả</strong></label>
                            <textarea class="form-control" id="descriptionItem" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-sm-1">
                            <a data-toggle="modal" id="add-btn-imag" data-target="#myModal1" class="btn btn-info " style="color: white; width: 100%">
                                <i class="fas fa-plus-circle"></i>
                            </a>
                        </div>
                        <div class="form-group col-sm-11">
                            <input id="imageItem" type="text" class="form-control" id="discount" onclick="window.open('filemanager/dialog.php?type=1&amp;popup=1&amp;field_id=imageItem  ','pdwfilebrowser','width=1000,height=650,scrollbars=no,toolbar=no,location=no');">
                        </div>
                        <div id="dynamically-btn-add-image" class="col-sm-12" style="padding: 0;margin: 0">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="content"> <strong> Nội dung</strong></label>
                            <textarea class="form-control contentItemClass" id="contentItem" rows="3" style="height: 200px;"></textarea>
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
<script src="public/tinymce/tinymce.min.js" type="text/javascript"> </script>

<script>
$(document).ready(function(){
    window.value=1;
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
                    url: 'product/delete',
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

    function Popup(idItem) {
        var id = idItem;
        $.ajax({
            url: 'product/show',
            type: 'GET',
            data: {
                id
            },
            dataType: 'JSON',
            success: function(data) {
                if(data != null){
                    $("#idItem").prop('disabled', true);
                    $('#caseItem').val(data.id);
                    $('#idItem').val(data.id);
                    $('#nameItem').val(data.name);
                    $('#priceItem').val(data.price);
                    $('#discountItem').val(data.discount);
                    $('#quantumItem').val(data.quantum);
                    $('#categoryItem').val(data.category);
                    $("#select_category option").removeAttr("selected");
                    $('#select_category option[value="' + data.category + '"]').attr('selected', 'selected');
                    $('textarea#descriptionItem').val(data.description);
                    tinyMCE.get('contentItem').setContent(data.content);
                    $('#imageItem').val(data.image);
                
                    if(data.listImage.length >0){
                        for (let index = 0; index < data.listImage.length; index++) {
                            $('#dynamically-btn-add-image').append('<div id="btn-img-' + window.value + '" class="form-row col-sm-12" style="padding: 0;margin: 0"><div class="form-group col-sm-1"><a  class="btn btn-danger btn-remove-image" style="color: white; width: 100%"><i class="far fa-trash-alt"></i></a></div><div class="form-group col-sm-11"><input id=field_' + (window.value) + ' type="text" class="form-control" id="discount" onclick="window.open(\'filemanager/dialog.php?type=1&amp;popup=1&amp;field_id=field_' + (window.value) + '  \',\'pdwfilebrowser\',\'width=1000,height=650,scrollbars=no,toolbar=no,location=no\');"></div></div>');
                            var id = '#field_' + window.value +'';
                            $(id).val(data.listImage[index][1]);
                            window.value++;
                            
                        }
                       
                    }
                }else{
                    $('#caseItem').val('');
                    $("#idItem").prop('disabled', false);
                    $('#idItem').val('');
                    $('#nameItem').val('');
                    $('#priceItem').val(0);
                    $('#discountItem').val(0);
                    $('#quantumItem').val(0);
                   
                    $('#descriptionItem').val('');
                    $('#dynamically-btn-add-image').html('');
                    tinyMCE.get('contentItem').setContent('');
                    $('#imageItem').val('');
                }
                $('#exampleModalCenter').modal('show');
            },
            error: function(xhr, status) {
                alert(status);
            }
        });
    }

    $('#btn-saveChange').click(function() {
        var listImage = [];
        var data = [];
        $("input[id^='field_']").each(function() {
            var pathImage = document.getElementById(this.id).value;
            listImage.push(pathImage);
        });
        if(listImage.length == 0){
            listImage = "";
        }
        debugger;
        data.push($('#idItem').val(), $('#nameItem').val(),$('#priceItem').val(),$('#discountItem').val(), $('#quantumItem').val(),$('textarea#descriptionItem').val(),tinyMCE.get('contentItem').getContent(), $('#imageItem').val(),$('#select_category').val(),listImage);
        let caseItem = $('#caseItem').val();
        $.ajax({
            url: 'product/store',
            method: 'POST',
            data: {
                data,caseItem
            },
            dataType: 'JSON',
            success: function(data) {
                if(data){
                    Swal.fire(
                        'Thành công',
                        '',
                        'success'
                    )
                    location.reload();
                }else{
                    Swal.fire(
                        'Lỗi',
                        '',
                        'error'
                    )
                }
                $('#exampleModalCenter').modal('toggle');

            },
            error: function(xhr, status) {
                alert(status);
            }
        });  

    });
</script>

<script type="text/javascript">
      tinyMCE.init({
        selector: '#contentItem',
        height: 200,
        entity_encoding: "raw",
        relative_urls: false,

        inline_styles: true, image_advtab: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code colorpicker textcolor responsivefilemanager'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | forecolor | backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | link  image fullscreen | responsivefilemanager |',
        external_filemanager_path: "/web-shop/filemanager/",
        external_plugins: { "filemanager": "/web-shop/filemanager/plugin.min.js" },
        filemanager_title: "Responsive File Manager",
        filemanager_access_key: 'f970ce5bc016b5c5ca08e2e39c2cc937&foldr=',

    });
</script>


<script>
    $(document).ready(function() {
        $(document).on('focusin', function(e) {
            if ($(e.target).closest(".mce-window").length) {
                e.stopImmediatePropagation();
            }
        });

        window.value++;
        $('#add-btn-imag').click(function() {
            $('#dynamically-btn-add-image').append('<div id="btn-img-' + window.value + '" class="form-row col-sm-12" style="padding: 0;margin: 0"><div class="form-group col-sm-1"><a  class="btn btn-danger btn-remove-image" style="color: white; width: 100%"><i class="far fa-trash-alt"></i></a></div><div class="form-group col-sm-11"><input id=field_' + (window.value) + ' type="text" class="form-control" id="discount" onclick="window.open(\'filemanager/dialog.php?type=1&amp;popup=1&amp;field_id=field_' + (window.value) + '  \',\'pdwfilebrowser\',\'width=1000,height=650,scrollbars=no,toolbar=no,location=no\');"></div></div>');
            window.value++;

        });

        $(document).on('click', '.btn-remove-image', function() {
            let result = $(this).parent().parent().attr('id');
            $('#' + result).remove();
        });

        $('#table').DataTable({
            "scrollY": "70vh",
            "scrollX": true,
            "scrollCollapse": true,
            "paging": true,
            "responsive": true,
            "bAutoWidth": true,
            "ordering": true
        });
    
    });
</script>

<script>
    $("div[id^='field_']").each(function() {    
        console.log(this.id);
    });
</script>