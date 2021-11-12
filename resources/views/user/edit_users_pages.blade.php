@extends('layout.admin_pages')
@section('title', 'Chỉnh sửa người dùng')

@section('content_admin')

<style>
    .profile-picture-upload {
        display: inline;
    }

    .imagePreview {
        vertical-align: middle;
        width: 64px;
        height: 64px;
        border-radius: 50%;
        margin-right: 8px;
        -webkit-box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
        -moz-box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
        box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
    }

    .hidden {
        position: absolute;
        width: 0px;
        height: 0px;
        left: -999999px;
    }

    .action-button {
        border: 1px solid black;
        background: none;
        padding: 8px;
        cursor: pointer;
        outline: 0;
        border-radius: 6px;
    }

    .action-button.mode-upload {
        color: #004085;
        border-color: #b8daff;
        background-color: #cce5ff;
    }

    .action-button.mode-remove {
        color: #721c24;
        border: 1px solid #f5c6cb;
        background-color: #f8d7da;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Chỉnh sửa người dùng</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('user') }}">Danh sách người dùng</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa người dùng</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <section class="col-12 col-lg-8 offset-lg-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bolder">
                                <i class="fa fa-plus"></i> Chỉnh sửa người dùng
                            </h3>
                            <div class="card-tools"></div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="tag_table_list_user">


                            <form action="{{ url('update-user/'.$edit_users->id) }}" id="FormEditUser" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <div class="col-12 col-lg-6">
                                        <label for="inputSupplierName">Tên người dùng:</label>
                                        <input type="text" class="form-control" id="inputUserName" placeholder="Nhập tên nhà người dùng" name="inputUserName" value="{{ $edit_users->tenhienthi }}">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="inputSupplierPhone">Số điện thoại:</label>
                                        <input type="text" class="form-control" id="inputUserPhone" placeholder="Nhập điện thoại người dùng" name="inputUserPhone" value="{{ $edit_users->sodienthoai }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 col-lg-6">
                                        <label for="uname">Ngày sinh:</label>
                                        <input type="date" class="form-control" id="inputUserBirthday" placeholder="Nhập ngày sinh người dùng" name="inputUserBirthday" value="{{ $edit_users->ngaysinh }}">
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label for="fileInput">Hình ảnh người dùng:</label><br>
                                        <div class="profile-picture-upload">
                                            <img src="" alt="Profile picture preview" class="imagePreview">
                                            <button class="action-button mode-upload" type="button">Tải ảnh</button>
                                            <input type="file" class="hidden" name="fileInput" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <br>
                                        <div class="profile-picture-upload">
                                            <img src="{{ url('public/upload_avatar/'.$edit_users->avatar) }}" alt="preview" class="imagePreview">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 col-lg-3">
                                        <label for="inputDescription">Vai trò:</label>
                                        <select name="inputUserRole" class="form-control">
                                            
                                            @if($edit_users->vaitro === 1)
                                            <option value="1">Người quản trị</option>
                                            <option value="2">Người dùng</option>
                                            @else
                                            <option value="2">Người dùng</option>
                                            <option value="1">Người quản trị</option>
                                            @endif
                                        </select>
                                        <!--<input type="text" class="form-control" id="inputUserRole" placeholder="Nhập vai trò người dùng" value="{{ $edit_users->vaitro }}">-->
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputDescription">Địa chỉ:</label>
                                        <input type="text" class="form-control" id="inputUserLocation" name="inputUserLocation" placeholder="Nhập địa chỉ người dùng" value="{{ $edit_users->diachi }}">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label>Giới tính</label>
                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline">
                                                @if($edit_users->gioitinh != null && $edit_users->gioitinh === 1)
                                                <input name="radio" value="1" id="radio1" type="radio" checked>
                                                <label for="radio1">Nam</label>
                                                @else
                                                <input name="radio" value="1" id="radio1" type="radio">
                                                <label for="radio1">Nam</label>
                                                @endif
                                            </div>
                                            <div class="rdio rdio-primary radio-inline">
                                                @if($edit_users->gioitinh != null && $edit_users->gioitinh === 2)
                                                <input name="radio" value="2" id="radio2" type="radio" checked>
                                                <label for="radio2">Nữ</label>
                                                @else
                                                <input name="radio" value="2" id="radio2" type="radio">
                                                <label for="radio2">Nữ</label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-right mb-0">
                                    <button type="submit" class="btn btn-primary">Lưu mới</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </section>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!--UPLOAD AVATAR REVIEW-->
<script>
    let picturePreview = document.querySelector(".imagePreview");
    let actionButton = document.querySelector(".action-button");
    let fileInput = document.querySelector("input[name='fileInput']");
    let fileReader = new FileReader();

    const DEFAULT_IMAGE_SRC = "https://www.drupal.org/files/profile_default.png";

    actionButton.addEventListener("click", () => {
        if (picturePreview.src !== DEFAULT_IMAGE_SRC) {
            resetImage();
        } else {
            fileInput.click();
        }
    });

    fileInput.addEventListener("change", () => {
        refreshImagePreview();
    });

    function resetImage() {
        setActionButtonMode("upload");
        picturePreview.src = DEFAULT_IMAGE_SRC;
        fileInput.value = "";
    }

    function setActionButtonMode(mode) {
        let modes = {
            upload: function() {
                actionButton.innerText = "Tải ảnh";
                actionButton.classList.remove("mode-remove");
                actionButton.classList.add("mode-upload");
            },
            remove: function() {
                actionButton.innerText = "Xóa ảnh";
                actionButton.classList.remove("mode-upload");
                actionButton.classList.add("mode-remove");
            }
        };
        return modes[mode] ? modes[mode]() : console.error("unknown mode");
    }

    function refreshImagePreview() {
        if (picturePreview.src !== DEFAULT_IMAGE_SRC) {
            picturePreview.src = DEFAULT_IMAGE_SRC;
        } else {
            if (fileInput.files && fileInput.files.length > 0) {
                fileReader.readAsDataURL(fileInput.files[0]);
                fileReader.onload = (e) => {
                    picturePreview.src = e.target.result;
                    setActionButtonMode("remove");
                };
            }
        }
    }
    refreshImagePreview();
</script>
<!--UPLOAD AVATAR REVIEW-->

@endsection