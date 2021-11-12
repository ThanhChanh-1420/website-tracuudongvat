@extends('layout.admin_pages')
@section('title', 'Hồ sơ cá nhân')

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
                    <h1 class="m-0 text-dark">Thông tin cá nhân</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                                                <div class="row">
                                                    <div class="col-12 col-sm-auto mb-3">
                                                        <div class="mx-auto" style="width: 140px;">
                                                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px;">
                                                                <img src="{{ asset('public/upload_avatar/'.Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image" style="height: 140px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ Auth::user()->tenhienthi }}</h4>
                                                            <p class="mb-0">{{ Auth::user()->username }}</p>
                                                            <div class="text-muted"><small>{{ Auth::user()->thoigianthem }}</small></div>

                                                        </div>
                                                        <div class="text-center text-sm-right">
                                                            <span class="badge badge-secondary">administrator</span>
                                                            <div class="text-muted"><small>{{ Auth::user()->thoigianthem }}</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                                </ul>
                                                <div class="tab-content pt-3">
                                                    <div class="tab-pane active">
                                                        <form class="form" novalidate="">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Tên đăng nhập</label>
                                                                                <input class="form-control" type="text" name="name" value="{{ Auth::user()->username }}" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Tên hiển thị</label>
                                                                                <input class="form-control" type="text" name="username" value="{{ Auth::user()->tenhienthi }}" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Số điện thoại</label>
                                                                                <input class="form-control" type="text" value="{{ Auth::user()->sodienthoai }}" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Ngày sinh</label>
                                                                                <input class="form-control" type="text" value="{{ Auth::user()->ngaysinh }}" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Giới tính</label>
                                                                                @if (Auth::user()->gioitinh === 1)
                                                                                <input class="form-control" type="text" value="Nam" readonly>
                                                                                @elseif(Auth::user()->gioitinh === 2)
                                                                                <input class="form-control" type="text" value="Nữ" readonly>
                                                                                @else
                                                                                <b>...</b>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Địa chỉ</label>
                                                                                <input class="form-control" type="text" value="{{ Auth::user()->diachi }}" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
            </div>

        </div>
    </section>
</div>
@endsection