<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <link rel="icon" type="image/png" href="{{ asset('public/home/icon/icon-title.gif') }}">
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
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            position: relative;
        }

        body {
            font-size: 62.5%;
            background: linear-gradient(#fa4, #f44) #f44 no-repeat;
        }

        .content {
            display: flex;
            flex-flow: column;
            align-items: center;
            background: rgba(0, 0, 0, 0.25);
            width: 40em;
            height: 40em;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 2em;
            border-radius: 1em;
            box-shadow: 0 0 2em rgba(0, 0, 0, 0.5);
            border: 0.1em solid rgba(0, 0, 0, 0.1);
        }

        .title {
            font: 4em Lobster, cursive;
            font-weight: lighter;
            text-shadow: 0 2px 2px rgba(0, 0, 0, 0.25);
            color: #f1f1f1;
        }

        .form {
            display: flex;
            flex-flow: column;
            padding: 1em;
        }

        .formLogin {
            width: 100%;
        }

        .formLogin .groupInput {
            display: flex;
            flex-flow: row-reverse wrap;
            justify-content: center;
            align-items: center;
            margin: 1.5em 0;
        }

        .formLogin .groupInput i {
            flex: 0 auto;
            font-size: 2em;
            position: relative;
            left: 1.6em;
            color: #8c8c8c;
            transition: all 0.5s ease-in;
        }

        .formLogin .groupInput input {
            flex: 1;
            padding: 1.3em 1em 1.3em 3em;
            border: 0.1em solid transparent;
            background: #fff;
            color: #3d3d3d;
            font-size: 1.2em;
            max-width: 20em;
        }

        .formLogin .groupInput input:focus+i {
            color: #2d2d2d;
        }

        .btn {
            display: inline-block;
            padding: 1em 4em;
            border: none;
            margin: 1.5em auto 0 auto;
            font-size: 1.5em;
        }

        .btnLogin {
            background: none;
            border: 1px solid #fa4;
            color: #fa4;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 2em;
            transition: all 0.5s ease-in-out;
        }

        .btnLogin:hover {
            background: #fa4;
            color: #fff;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <div class="content">
        <h1 class="title">Painel Admin</h1>
        <form action="{{ url('post-login') }}" class="form formLogin" method="post" enctype="multipart/form-data">
            @csrf
            <div class="groupInput">
                <input type="text" name="username" placeholder="Username" /><i class="fa fa-fw fa-user"></i>
            </div>
            <div class="groupInput">
                <input type="password" name="password" placeholder="Password" /><i class="fa fa-fw fa-key"></i>
            </div>
            <button class="btn btnLogin" type="submit">Login</button>
        </form>
    </div>
</body>

</html>