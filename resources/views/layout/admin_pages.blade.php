<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('https://img.favpng.com/23/19/22/animals-icon-woof-woof-icon-dog-icon-png-favpng-qYRWzpkHmgVLvV2yLnAdzCaRW.jpg') }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <style>
        /*MENU-DROPDOWN*/
        .dropbtn {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            margin-top: 3px;
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            right: 1vmax;
            top: 40px;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 150px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 8px 10px;
            text-decoration: none;
            display: block;
            border-radius: 5px;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /*MENU-DROPDOWN*/

        .user-img {
            width: 2.5vmax;
            height: 2.5vmax;
        }
    </style>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ url('public/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('home') }}" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <a class="dropbtn" href="#" role="button" style="padding-top: 4px;color:#1a202c;">
                            @if (Auth::check())
                            @if (Auth::user()->avatar == null)
                            <img src="{{ asset('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2 user-img" alt="User-Image" style="width: 2.5vmax;height: 2.5vmax;">
                            @else
                            <img src="{{ asset('public/upload_avatar/'.Auth::user()->avatar) }}" class="img-circle elevation-2 user-img" alt="User-Image" style="width: 2.5vmax;height: 2.5vmax;">
                            @endif
                            <span class="font-weight-bolder">{{ Auth::user()->username }}</span>
                            @endif

                        </a>
                        <div class="dropdown-content">
                            <a href="#" onclick="document.getElementById('logoutForm').submit();" data-toggle="modal" data-target="#modelLogoutAdmin"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                            <form action="logout" method="post" id="logoutForm" hidden>
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('home') }}" class="brand-link">
                <img src="https://img.favpng.com/23/19/22/animals-icon-woof-woof-icon-dog-icon-png-favpng-qYRWzpkHmgVLvV2yLnAdzCaRW.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light" style="margin-top:7px;">Tra cứu động vật</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('public/upload_avatar/'.Auth::user()->avatar) }}" class="img-circle elevation-2 user-img" alt="User Image" style="width: 2.5vmax;height: 2.5vmax; margin-top:7px;">
                    </div>
                    <div class="info">
                        <a href="{{ url('profile') }}" class="d-block" style="margin-top:18px;">{{ Auth::user()->tenhienthi }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{ url('home') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('animal') }}" class="nav-link">
                                <i class="fas fa-paw"></i>
                                <p>
                                    Animal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('user') }}" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-user"></i>
                                <p>
                                    Admin
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('profile') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('changes-profile') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Change Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('changes-password') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Change Password</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->

        @yield('content_admin')
        <!--/. container-fluid -->

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="">AdminLTE.io</a>.</strong>
        Tra cứu động vật.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('public/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('public/admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('public/admin/plugins/sparklines/sparkline.js') }}"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{ asset('') }}public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- daterangepicker -->
    <script src="{{ asset('public/admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/admin/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('public/admin/dist/js/demo.js') }}"></script>



    <!--ADD Animal USING AJAX-->
    <script>
        $('#FormAddAnimal').on('submit', (function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();

            let formData = new FormData(this);

            function set_time_hidden(input) {
                setTimeout(function() {
                    input.hide();
                }, 5000);
            }

            $.ajax({
                type: 'POST',
                url: "{{ url('post-add-animal') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log('Thành công: ' + response.success);

                    if ($.isEmptyObject(response.error)) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: response.success,
                            showConfirmButton: false,
                            timer: 3000
                        });
                        reset_text();
                    } else {
                        printErrorMsg(response.error);
                        set_time_hidden($('.error-msg'));
                    }
                }
            });

            function printErrorMsg(msg) {
                $('.error-msg').find('ul').html('');
                $('.error-msg').css('display', 'block');
                $.each(msg, function(key, value) {
                    $(".error-msg").find("ul").append('<li>' + '- ' + value + '</li>');
                });
            }

        }));
    </script>
    <!--ADD USER USING AJAX-->
</body>

</html>