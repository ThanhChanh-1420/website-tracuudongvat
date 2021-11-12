@extends('layout.admin_pages')
@section('title', 'Thay đổi thông tin')

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

    /*Images */
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
                    <h1 class="m-0 text-dark">Thay đổi thông tin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Change profile</li>
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
                                                <form action="{{url('update-profile')}}" method="post" class="inputs" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-12 col-sm-auto mb-3">
                                                            <div class="mx-auto" style="width: 140px;">
                                                                <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px;">
                                                                    <img src="{{ asset('public/upload_avatar/'.Auth::user()->avatar) }} " class="img-circle elevation-2" alt="User Image" style="height: 140px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ Auth::user()->tenhienthi }}</h4>
                                                                <p class="mb-0">{{ Auth::user()->username }}</p>
                                                                <div class="text-muted"><small>{{ Auth::user()->thoigianthem }}</small></div>
                                                                <div class="mt-2">
                                                                    <label for="fileInput">Chọn ảnh thay đổi:</label><br>
                                                                    <div class="profile-picture-upload">
                                                                        <img src="" alt="Profile picture preview" class="imagePreview">
                                                                        <button class="action-button mode-upload" type="button">Tải ảnh</button>
                                                                        <input type="file" class="hidden" name="fileInput" />
                                                                    </div>
                                                                    <!--<button class="btn btn-primary" type="button">
                                                                    <i class="fa fa-fw fa-camera"></i>
                                                                    <span>Change Photo</span>
                                                                </button> -->
                                                                </div>
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
                                                                                <input class="form-control" type="text" name="username" value="{{ Auth::user()->tenhienthi }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Số điện thoại</label>
                                                                                <input class="form-control" type="text" name="phone" value="{{ Auth::user()->sodienthoai }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Ngày sinh</label>
                                                                                <input class="form-control" type="date" name="birthday" value="{{ Auth::user()->ngaysinh }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Giới tính</label>
                                                                                <div class="radiobuttons">
                                                                                    <div class="rdio rdio-primary radio-inline">
                                                                                        @if(Auth::user()->gioitinh != null && Auth::user()->gioitinh === 1)
                                                                                        <input name="radio" value="1" id="radio1" type="radio" checked>
                                                                                        <label for="radio1">Nam</label>
                                                                                        @else
                                                                                        <input name="radio" value="1" id="radio1" type="radio">
                                                                                        <label for="radio1">Nam</label>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="rdio rdio-primary radio-inline">
                                                                                        @if(Auth::user()->gioitinh != null && Auth::user()->gioitinh === 2)
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
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Địa chỉ</label>
                                                                                <input class="form-control" name="location" type="text" placeholder="Cần thơ" value="{{ Auth::user()->diachi }}">
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


                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 mb-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="px-xl-3">
                                                <button class="btn btn-block btn-secondary">
                                                    <i class="fa fa-sign-out"></i>
                                                    <span>Logout</span>
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
<!--UPLOAD AVATAR REVIEW-->
<script>
    let picturePreview = document.querySelector(".imagePreview");
    let actionButton = document.querySelector(".action-button");
    let fileInput = document.querySelector("input[name='fileInput']");
    let fileReader = new FileReader();

    const DEFAULT_IMAGE_SRC = "https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png";

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

<!--ADD SUPPLIER USING AJAX-->
<script>
    $('.FormAddSupplier').on('submit', (function(e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();

        let formdata = new FormData(this);
        formdata.append('inputDescription', CKEDITOR.instances['inputDescription'].getData());

        function set_time_hidden(input) {
            setTimeout(function() {
                input.hide();
            }, 5000);
        }

        $.ajax({
            type: 'POST',
            url: "{{ url('post-add-supplier')}}",
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log('Thành công: ' + response.data);

                if ($.isEmptyObject(response.error)) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: response.success,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    //Sau khi thông báo thành công chuyển trang list supplier
                    setTimeout(function() {
                        location.href = "{{ url('manage-supplier') }}";
                    }, 2000);
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
<!--ADD SUPPLIER USING AJAX-->
@endsection