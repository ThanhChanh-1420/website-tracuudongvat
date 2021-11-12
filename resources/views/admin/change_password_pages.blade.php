@extends('layout.admin_pages')
@section('title', 'Thay đổi mật khẩu')

@section('content_admin')
<style>
    body {
        margin-top: 20px;
        background: #f8f8f8
    }

    /***** RADIO BUTTON STYLES *****/
    /***** RADIO BUTTON STYLES *****/
    .rdio {
        position: relative;
    }

    .rdio input[type=radio] {
        opacity: 0;
    }

    .rdio label {
        padding-left: 10px;
        cursor: pointer;
        margin-bottom: 7px !important;
    }

    .rdio label:before {
        width: 18px;
        height: 18px;
        position: absolute;
        top: 1px;
        left: 0;
        content: "";
        display: inline-block;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        border: 1px solid #0069d9;
        background: #fff;
    }

    .rdio input[type=radio] {
        margin: 0px;
    }

    .rdio input[type=radio]:disabled+label {
        color: #0069d9;
    }

    .rdio input[type=radio]:disabled+label:before {
        background-color: #0069d9;
    }

    .rdio input[type=radio]:checked+label::after {
        content: "";
        position: absolute;
        top: 5px;
        left: 4px;
        display: inline-block;
        font-size: 11px;
        width: 10px;
        height: 10px;
        background-color: #0069d9;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
    }

    .rdio-default input[type=radio]:checked+label:before {
        border-color: #0069d9;
    }

    .rdio-primary input[type=radio]:checked+label:before {
        border-color: #0069d9;
    }

    .rdio-primary input[type=radio]:checked+label::after {
        background-color: #0069d9;
    }

    .logout a {
        text-decoration: none;
        color: white;
    }

    .logout a:hover {
        color: white;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thay đổi mật khẩu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Change password</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row flex-lg-nowrap">
                        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                            <div class="card p-3">
                                <div class="e-navlist e-navlist--active-bg">
                                    <ul class="nav">
                                        <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                                        <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-crud-users" target="__blank"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
                                        <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="e-profile">
                                                <form action="{{url('update-password')}}" method="post" class="inputs">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 mb-3">
                                                            <div class="row">

                                                                <div class="col-1">
                                                                    <i class="fas fa-lock"></i>
                                                                </div>
                                                                <div class="col-11">
                                                                    <h3>Change Password</h3>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Current Password</label>
                                                                        <input type="password" class="form-control" name="inputPasswordOld" value="" placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>New Password</label>
                                                                        <input type="password" class="form-control" name="inputPasswordNew" value="" placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                        <input type="password" class="form-control" name="inputPasswordComfirmNew" value="" placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 mb-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="px-xl-3 logout">
                                        <button class="btn btn-block btn-secondary">
                                            <i class="fa fa-sign-out"></i>
                                            <a href="#" onclick="document.getElementById('logoutForm').submit();" data-toggle="modal" data-target="#modelLogoutAdmin">Đăng xuất</a>
                                            <form action="logout" method="post" id="logoutForm" hidden>
                                                @csrf
                                            </form>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection