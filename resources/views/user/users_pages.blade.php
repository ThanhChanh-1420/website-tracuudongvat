@extends('layout.admin_pages')
@section('title', 'Trang người dùng')

@section('content_admin')
<style>
    .container__img-holder {
        max-width: 280px;
        display: inline-block;
        vertical-align: top;
        margin-bottom: 20px;
        margin-left: 16px;
        cursor: pointer;
    }

    .container .container__img-holder:nth-child(3n + 1) {
        margin-left: 0;
    }

    .container__img-holder img {
        width: 100%;
        height: 220px;
        display: block;
    }

    /* Popup Styling */
    .img-popup {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(255, 255, 255, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    .img-popup img {
        max-width: 900px;
        width: 100%;
        opacity: 0;
        transform: translateY(-100px);
        -webkit-transform: translateY(-100px);
        -moz-transform: translateY(-100px);
        -ms-transform: translateY(-100px);
        -o-transform: translateY(-100px);
    }

    .close-btn {
        width: 35px;
        height: 30px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }

    .close-btn .bar {
        height: 4px;
        background: #333;
    }

    .close-btn .bar:nth-child(1) {
        transform: rotate(45deg);
    }

    .close-btn .bar:nth-child(2) {
        transform: translateY(-4px) rotate(-45deg);
    }

    .opened {
        display: flex;
    }

    .opened img {
        animation: animatepopup 1s ease-in-out 0.8s;
        -webkit-animation: animatepopup 0.3s ease-in-out forwards;
    }

    @keyframes animatepopup {
        to {
            opacity: 1;
            transform: translateY(0);
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
        }
    }

    @media screen and (max-width: 880px) {
        .container .container__img-holder:nth-child(3n + 1) {
            margin-left: 16px;
        }
    }

    .list-inline-item .btn_edit a {
        text-decoration: none;
        color: white;
    }

    .list-inline-item .btn_edit a:hover {
        color: white;
    }

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
                    <h1 class="m-0 text-dark">Danh sách người dùng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="content-fluid">
            <form id="FormSearch" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nhập tên đăng nhập hoặc số điện thoại" name="inputSearch" id="inputSearch" onkeyup="searchData(1)">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i> Tìm</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-body" id="tag_table_list_user">
                <div class="row">
                    <section class="col-12 col-lg-12">

                        <div class="card-header">
                            <h3 class="card-title font-weight-bolder">
                                <i class="ion ion-clipboard mr-1"></i> Danh Sách động vật
                            </h3>
                            <div class="card-tools">
                                <a class="btn btn-primary btn-xs" href="#" role="button" data-toggle="modal" data-target="#modelAddUser">
                                    <i class="fa fa-plus"></i> Thêm mới
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                    </section>
                </div>
                @include('user.list_user_pages')
            </div>
        </div>
    </section>

    <!-- Modal Add User-->
    <div class="modal fade" id="modelAddUser">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" enctype="multipart/form-data" id="FormAddUser">
                <div class="modal-content">
                    <div class="modal-header p-2">
                        <h5 class="modal-title font-weight-bolder">Thêm Người Dùng</h5>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger error-msg" style="display:none;">
                            <ul class="list-group list-group-flush" style="list-style-type: none;"></ul>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label for="">Vai trò người dùng</label>
                                <select name="inputRoleUser" id="inputGroupUserID" class="form-control">
                                    <option value="">-- Chọn nhóm --</option>
                                    <option value="1">Người quản trị</option>
                                    <option value="2">Người dùng</option>
                                </select>
                                <small id="inputGroupUserID_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="">Họ tên người dùng</label>
                                <input type="text" name="inputFullName" id="inputFullName" class="form-control" placeholder="Nhập họ tên">
                                <small id="inputFullName_err" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label for="">Tên tài khoản</label>
                                <input type="text" name="inputUserName" id="inputName" class="form-control" placeholder="Nhập tên tài khoản">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Nhập mật khẩu" data-toggle="collapse" data-target="#show_note_pass">
                                <small id="inputPassword_err" class="text-danger"></small>
                                <div id="show_note_pass" class="collapse">
                                    <small class="text-danger">Nếu không nhập, mật khẩu tự tạo (tên tài khoản + 4 số cuối điện thoại)</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-12">
                                <label for="">Số điện thoại</label>
                                <input type="text" name="inputUserPhone" id="inputPhone" class="form-control" placeholder="Nhập Số điện thoại">
                                <small id="inputEmail_err" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label for="">Ngày sinh</label>
                                <input type="date" name="inputUserBirthday" id="inputBirthday" class="form-control">
                                <small id="inputBirthday_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="">Giới tính</label><br>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="inputSex" value="2">Nữ
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="inputSex" value="1">Nam
                                    </label>
                                </div>
                                <small id="inputSex_err" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label for="">Địa chỉ</label>
                                <textarea name="inputUserLocation" id="inputLocation" rows="2" class="form-control"></textarea>
                                <small id="inputAddress_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="">Ảnh đại diện</label><br>
                                <div class="profile-picture-upload">
                                    <img src="" alt="Profile picture preview" class="imagePreview">
                                    <button class="action-button mode-upload" type="button">Tải ảnh</button>
                                    <input type="file" class="hidden" name="fileInput" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer p-2">
                        <button type="button" class="btn btn-info btn-sm" onclick="reset_text()">
                            <i class="fas fa-refresh"></i> Làm mới
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                            <i class="fa fa-times"></i> Đóng
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm" id="submit_btn">
                            <i class="fa fa-floppy-o"></i> Lưu
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Add User-->
</div>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    function deleteUser(id) {
        let conf = confirm('Bạn có chắc chắn không ?');
        if (conf) {
            $.ajax({
                url: "{{ url('delete-user') }}" + "/" + id,
                method: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: id
                },
                success: function(response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: response.success,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    $("tbody #row_" + id).remove();
                }
            });
        }
    }
</script>

<script>
    $(document).ready(function() {
        // required elements
        var imgPopup = $(".img-popup");
        var imgCont = $(".container__img-holder");
        var popupImage = $(".img-popup img");
        var closeBtn = $(".close-btn");

        // handle events
        imgCont.on("click", function() {
            var img_src = $(this).children("img").attr("src");
            imgPopup.children("img").attr("src", img_src);
            imgPopup.addClass("opened");
        });

        $(imgPopup, closeBtn).on("click", function() {
            imgPopup.removeClass("opened");
            imgPopup.children("img").attr("src", "");
        });

        popupImage.on("click", function(e) {
            e.stopPropagation();
        });
    });
</script>

<!--RESET ALL INPUT EMPTY-->
<script>
    function reset_text() {
        $("#inputGroupUserID").val("").change();
        $('#inputFullName').val('');
        $('#inputName').val('');
        $('#inputPhone').val('');
        $('#inputBirthday').val('');
        $('#inputLocation').val('');
        $('#inputPassword').val('');
    }
</script>
<!--RESET ALL INPUT EMPTY-->

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

<!--ADD USER USING AJAX-->
<script>
    $('#FormAddUser').on('submit', (function(e) {

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
            url: "{{ url('post-add-user') }}",
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

<!--SEARCH USING AJAX-->
<script>
        function searchData(page)
        {
            let input_search = $('#inputSearch').val();
            console.log(input_search);

            $.ajax({
                url:"{{ url('search-list-user') }}",
                method:"POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    page:page,
                    input_search:input_search,
                },
                success:function(data)
                {
                    $('#tag_table_list_user').html(data);
                }
            });
        }
    </script>
    <!--SEARCH USING AJAX-->
@endsection