@extends('layout.admin_pages')
@section('title', 'Chỉnh sửa động vật')

@section('content_admin')

<style>
    /* Image gallery stlyling */
    .container {
        max-width: 900px;
        margin: 80px auto 0;
        text-align: center;
    }

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

    .container {
        max-width: 500px;
    }

    dl,
    ol,
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .imgPreview img {
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Chỉnh sửa động vật</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('animal') }}">Danh sách động vật</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa động vật</li>
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
                                <i class="fa fa-plus"></i> Chỉnh sửa động vật
                            </h3>
                            <div class="card-tools"></div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            @if(count($errors) > 0 )
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <ul class="p-0 m-0" style="list-style: none;">
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ url('update-animal/'.$edit_animals->id) }}" id="FormEditUser" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <div class="col-12 col-lg-6">
                                        <label for="inputSupplierName">Tên khoa học:</label>
                                        <input type="text" class="form-control" id="inputTenkhoahoc" placeholder="Nhập tên khoa học" name="inputTenkhoahoc" value="{{ $edit_animals->tenkhoahoc }}">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="inputSupplierName">Tên tiếng việt:</label>
                                        <input type="text" class="form-control" id="inputTentiengviet" placeholder="Nhập tên tiếng việt" name="inputTentiengviet" value="{{ $edit_animals->tentiengviet }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-6">
                                        <label for="inputSupplierName">Tên địa phương:</label>
                                        <input type="text" class="form-control" id="inputTendiaphuong" placeholder="Nhập tên địa phương" name="inputTendiaphuong" value="{{ $edit_animals->tendiaphuong }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Giới:</label>
                                        <input type="text" class="form-control" id="inputGioi" placeholder="Nhập tên Giới" name="inputGioi" value="{{ $edit_animals->gioi }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Ngành:</label>
                                        <input type="text" class="form-control" id="inputNganh" placeholder="Nhập tên Ngành" name="inputNganh" value="{{ $edit_animals->nganh }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Lớp:</label>
                                        <input type="text" class="form-control" id="inputLop" placeholder="Nhập tên Lớp" name="inputLop" value="{{ $edit_animals->lop }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Bộ:</label>
                                        <input type="text" class="form-control" id="inputBo" placeholder="Nhập tên Bo" name="inputBo" value="{{ $edit_animals->bo }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Giá trị:</label>
                                        <input type="text" class="form-control" id="inputGiatri" placeholder="Nhập giá trị" name="inputGiatri" value="{{ $edit_animals->giatri }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">IUCN:</label>
                                        <input type="text" class="form-control" id="inputIucn" placeholder="Nhập IUCN" name="inputIucn" value="{{ $edit_animals->iucn }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-6">
                                        <label for="inputSupplierName">Đặc điểm hình thái:</label>
                                        <textarea class="form-control" id="inputHinhthai" placeholder="Nhập đặc điểm hình thái" name="inputHinhthai" rows="4" class="form-control">{{ $edit_animals->hinhthai }}</textarea>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="inputSupplierName">Đặc điểm sinh thái:</label>
                                        <textarea class="form-control" id="inputSinhthai" placeholder="Nhập đặc điểm sinh thái" name="inputSinhthai" rows="4" class="form-control"> {{ $edit_animals->sinhthai }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Sách đỏ:</label>
                                        <input type="text" class="form-control" id="inputSachdo" placeholder="Nhập sách đỏ" name="inputSachdo" value="{{ $edit_animals->sachdo }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Nghị định:</label>
                                        <input type="text" class="form-control" id="inputNghidinh" placeholder="Nhập tên nghị định" name="inputNghidinh" value="{{ $edit_animals->nghidinh }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">CITIES:</label>
                                        <input type="text" class="form-control" id="inputCities" placeholder="Nhập Cities" name="inputCities" value="{{ $edit_animals->cities }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Phân bố:</label>
                                        <input type="text" class="form-control" id="inputPhanbo" placeholder="Nhập địa điểm phân bố" name="inputPhanbo" value="{{ $edit_animals->phanbo }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Tình trạng:</label>
                                        <input type="text" class="form-control" id="inputTinhtrang" placeholder="Nhập tình trạng" name="inputTinhtrang" value="{{ $edit_animals->tinhtrang }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Sinh cảnh:</label>
                                        <input type="text" class="form-control" id="inputSinhcanh" placeholder="Nhập sinh cảnh" name="inputSinhcanh" value="{{ $edit_animals->sinhcanh }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Địa điểm:</label>
                                        <input type="text" class="form-control" id="inputDiadiem" placeholder="Nhập địa điểm" name="inputDiadiem" value="{{ $edit_animals->diadiem }}">
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label for="inputSupplierName">Người thu thập:</label>
                                        <input type="text" class="form-control" id="inputNguoithuthap" placeholder="Nhập người thu thập" name="inputNguoithuthap" value="{{ $edit_animals->nguoithuthap }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-3">
                                        <label for="uname">Ngày thu thập:</label>
                                        <input type="date" class="form-control" id="inputNgaythuthap" placeholder="Nhập ngày thu thập" name="inputNgaythuthap" value="{{ $edit_animals->ngaythuthap }}">
                                    </div>

                                    <div class="col-12 col-lg-5">
                                        <div class="container mt-5" style="margin-top: -1rem!important;">
                                                <div class="user-image mb-3 text-center">
                                                    <div class="imgPreview"> </div>
                                                </div>
                                                <label for="inputSupplierName">Chọn hình ảnh</label>
                                                <div class="custom-file">
                                                    <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                                                    <label class="custom-file-label" for="images">Choose image</label>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">

                                        @php($img_animals = DB::table('hinhanhs')->where('hinhanhs.dongvat_id', '=', $edit_animals->id)->get())

                                        @foreach ($img_animals as $img_animal)
                                        <div class="container__img-holder">
                                            <img src="{{ asset('public/uploads_animal/'.$img_animal->duongdan) }}" class="img-circle elevation-2" alt="User-Image" style="width: 50px;height: 50px;">
                                        </div>

                                        <div class="img-popup">
                                            <img src="" alt="Popup Image">
                                            <div class="close-btn">
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                                @php($toado_animals = DB::table('toados')->where('toados.dongvat_id','=', $edit_animals->id)->get())
                                @php($count_animals = DB::table('toados')->where('toados.dongvat_id','=', $edit_animals->id)->count())
                                <div class="row">
                                    @foreach($toado_animals as $stt => $toado_animal)
                                                <div class="col-12 col-lg-2">
                                                    <label for="inputSupplierName">Tọa độ {{$stt++}}:</label>
                                                    <input type="text" class="form-control" placeholder="Nhập tọa độ" name="inputToado{{$stt-1}}" value="{{ $toado_animal->toados}}">
                                                </div>
                                    @endforeach
                                    @for ($i = $count_animals; $i < 5 ; $i++)
                                        <div class="col-12 col-lg-2">
                                            <label for="inputSupplierName">Tọa độ {{$i}}:</label>
                                            <input type="text" class="form-control" placeholder="Nhập tọa độ" name="inputToado{{$i}}" value="">
                                        </div>
                                    @endfor     
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
    </section>
    <!-- /.content -->

</div>


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

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
    });
</script>
@endsection