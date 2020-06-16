<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="2KSoftware.vn">
    <title>Quản lý Linhkientot.vn</title>
    <base href="/web-shop/">
    <link rel="shortcut icon " href="public/Admin/assets/img/icon/icons8_google_cloud_platform.ico">
    <link rel="stylesheet" href="public/admin/lib/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="public/admin/lib/jquery.mCustomScrollbar.min.css">
    <!--Bootstrap Tags Input-->
    <!--source: https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/-->
    <link rel="stylesheet" href="public/admin/lib/bootstrap-tagsinput.css">

    <!--Sweetalert2-->
    <link rel="stylesheet" href="public/admin/lib/sweetalert2.min.css">

    <!--DataTables-->
    <link rel="stylesheet" href="public/admin/lib/datatables.min.css">

    <!--Main Styles-->
    <link rel="stylesheet" href="public/admin/assets/css/styles.css">
    <link rel="stylesheet" href="public/default/vender/javascript/toastr/toastr.min.css">


</head>

<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled border-radius-on">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand-->
                <div class="sidebar-item sidebar-brand">
                    <a href="#"> Linhkientot.vn</a>
                </div>
                <!-- sidebar-header-->
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="public/admin/assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name"> <?php echo $_SESSION['admin']['NICKNAME'] ?>
                            <strong>Coding</strong>
                        </span>
                        <span class="user-role"> <?php echo $_SESSION['admin']['USERNAME'] ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!--sidebar-menu-->
                <div class="sidebar-item sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>CỬA HÀNG</span>
                        </li>
                        <li>
                            <a href="/web-shop/indexadmin/dashboard">
                                <i class="fa fa-tachometer-alt"></i>
                                <span class="menu-text">Thống kê</span>
                                <span class="badge badge-pill badge-success">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="/web-shop/cart">
                                <i class="fa fa-cart-arrow-down"></i>
                                <span class="menu-text">Quản lý đơn hàng</span>
                            </a>
                        </li>

                        <li>
                            <a href="/web-shop/category">
                                <i class="fa fa-folder-open"></i>
                                <span class="menu-text">Loại sản phẩm</span>
                            </a>
                        </li>
                        <li>
                            <a href="/web-shop/product">
                                <i class="fas fa-gifts"></i>
                                <span class="menu-text">Sản phẩm</span>
                            </a>
                        </li>
                        <li class="header-menu">
                            <span>NỘI DUNG </span>
                        </li>
                        <li>
                            <a href="/web-shop/banner">
                                <i class="fa fa-image"></i>
                                <span class="menu-text">Ảnh bìa</span>
                            </a>
                        </li>
                        <li>
                            <a href="/web-shop/post">
                                <i class="fab fa-blogger"></i>
                                <span class="menu-text">Bài viết/ tin tức</span>
                            </a>
                        </li>

                        <li class="header-menu">
                            <span>HỆ THỐNG </span> </li>
                        <li>
                            <a href="/web-shop/member">
                                <i class="fas fa-users-cog"></i>
                                <span class="menu-text">Nhân viên</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--sidebar-footer-->
            <div class="sidebar-footer">
                <div>
                    <a onclick="logout()">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
                <div class="pinned-footer">
                    <a href="#">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                </div>
            </div>
        </nav>

        <main class="page-content pt-2">
            <?php echo $content; ?>
        </main>
    </div>
       <!-- using online scripts -->
    <script src="public/admin/lib/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="public/default/vender/javascript/toastr/toastr.min.js"></script>
    <script src="public/admin/lib/popper.min.js" type="text/javascript"></script>
    <script src="public/admin/lib/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/admin/lib/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>

    <!-------------------Bootstrap Tagsinput------------------------------>
    <script src="public/admin/lib/bootstrap-tagsinput.js" type="text/javascript"></script>
    <!-- <script src="/lib/bootstrap-tagsinput-angular.js" type="text/javascript"></script> -->

    <!--Sweetalert2-->
    <script src="public/admin/lib/sweetalert2.min.js" type="text/javascript"></script>

    <!--DataTables-->
    <script src="public/admin/lib/datatables.min.js" type="text/javascript"></script>
    <!--main js-->
    <script src="public/admin/assets/js/main.js"></script>
    <script>
        function logout() {
            $.ajax({
                url: 'indexadmin/logout',
                type: 'post',
                dataType: 'text',
                data: {

                },
                success: function(result) {
                    location.replace('http://localhost:8080/web-shop/indexadmin');
                }
            })
        }
    </script>
</body>

</html>