@extends('layout.admin_pages')
@section('title', 'Trang động vật')

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
                    <h1 class="m-0 text-dark">Danh sách động vật</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Animal</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="content-fluid">
            <form id="FormSearch" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nhập tên khoa học hoặc tên tiếng Việt" name="inputSearch" id="inputSearch" onkeyup="searchData(1)">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i> Tìm</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-body" id="tag_table_list_user">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="row">
                    <section class="col-12 col-lg-12">

                        <div class="card-header">
                            <h3 class="card-title font-weight-bolder">
                                <i class="ion ion-clipboard mr-1"></i> Danh Sách động vật
                            </h3>
                            <div class="card-tools">
                                <a class="btn btn-primary btn-xs" href="" role="button" data-toggle="modal" data-target="#modelAddAnimal">
                                    <i class="fa fa-plus"></i> Thêm mới
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                    </section>
                </div>
                @include('animal.list_animal_pages')
            </div>
        </div>
    </section>

    
    <!-- Modal Add Animal-->
    <div class="modal fade" id="modelAddAnimal">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" enctype="multipart/form-data" id="FormAddAnimal">
                <div class="modal-content">
                    <div class="modal-header p-2">
                        <h5 class="modal-title font-weight-bolder">Thêm động vật</h5>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger error-msg" style="display:none;">
                            <ul class="list-group list-group-flush" style="list-style-type: none;"></ul>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label for="">Tên khoa học</label>
                                <input type="text" name="inputTenkhoahoc" id="inputTenkhoahoc" class="form-control" placeholder="Nhập tên khoa học">
                                <small id="inputFullName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="">Tên tiếng Việt</label>
                                <input type="text" name="inputTentiengviet" id="inputTentiengviet" class="form-control" placeholder="Nhập họ tên">
                                <small id="inputFullName_err" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label for="">Tên địa phương</label>
                                <input type="text" name="inputTendiaphuong" id="inputTendiaphuong" class="form-control" placeholder="Nhập tên địa phương">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="">Giới</label>
                                <input type="text" name="inputGioi" id="inputGioi" class="form-control" placeholder="Nhập giới">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="">Ngành</label>
                                <input type="text" name="inputNganh" id="inputNganh" class="form-control" placeholder="Nhập ngành">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-4">
                                <label for="">Lớp</label>
                                <input type="text" name="inputLop" id="inputLop" class="form-control" placeholder="Nhập lớp">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Bộ</label>
                                <input type="text" name="inputBo" id="inputBo" class="form-control" placeholder="Nhập bộ">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Họ</label>
                                <input type="text" name="inputHo" id="inputHo" class="form-control" placeholder="Nhập họ">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label for="inputSupplierName">Đặc điểm hình thái:</label>
                                <textarea class="form-control" id="inputHinhthai" placeholder="Nhập đặc điểm hình thái" name="inputHinhthai" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="inputSupplierName">Đặc điểm sinh thái:</label>
                                <textarea class="form-control" id="inputSinhthai" placeholder="Nhập đặc điểm sinh thái" name="inputSinhthai" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-4">
                                <label for="">Giá trị</label>
                                <input type="text" name="inputGiatri" id="inputGiatri" class="form-control" placeholder="Nhập giá trị">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">IUCN</label>
                                <input type="text" name="inputIucn" id="inputIucn" class="form-control" placeholder="Nhập IUCN">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Sách đỏ</label>
                                <input type="text" name="inputSachdo" id="inputSachdo" class="form-control" placeholder="Nhập sách đỏ">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-4">
                                <label for="">Nghị định</label>
                                <input type="text" name="inputNghidinh" id="inputNghidinh" class="form-control" placeholder="Nhập nghị định">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">CITIES</label>
                                <input type="text" name="inputCities" id="inputCities" class="form-control" placeholder="Nhập CITIES">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Phân bố</label>
                                <input type="text" name="inputPhanbo" id="inputPhanbo" class="form-control" placeholder="Nhập Phanbo">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-2">
                                <label for="">Tình trạng</label>
                                <input type="text" name="inputTinhtrang" id="inputTinhtrang" class="form-control" placeholder="Nhập tình trạng">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Sinh cảnh</label>
                                <input type="text" name="inputSinhcanh" id="inputSinhcanh" class="form-control" placeholder="Nhập sinh cảnh">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="">Địa điểm</label>
                                <input type="text" name="inputdiadiem" id="inputdiadiem" class="form-control" placeholder="Nhập địa điểm">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-4">
                                <label for="">Người thu thập</label>
                                <input type="text" name="inputNguoithuthap" id="inputNguoithuthap" class="form-control" placeholder="Nhập người thu thập">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Ngày thu thập</label>
                                <input type="text" name="inputNgaythuthap" id="inputNgaythuthap" class="form-control" placeholder="Nhập ngày thu thập">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Người tạo</label>
                                <input type="text" name="inputNguoitao" id="inputNguoitao" class="form-control" placeholder="Nhập ngày nguoitao">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-2">
                                <label for="">Tọa độ 1</label>
                                <input type="text" name="inputToado1" id="inputToado1" class="form-control" placeholder="Nhập tọa độ 1">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-2">
                                <label for="">Tọa độ 2</label>
                                <input type="text" name="inputToado2" id="inputToado2" class="form-control" placeholder="Nhập tọa độ 2">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-2">
                                <label for="">Tọa độ 3</label>
                                <input type="text" name="inputToado3" id="inputToado3" class="form-control" placeholder="Nhập tọa độ 3">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-2">
                                <label for="">Tọa độ 4</label>
                                <input type="text" name="inputToado4" id="inputToado4" class="form-control" placeholder="Nhập tọa độ 4">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-2">
                                <label for="">Tọa độ 5</label>
                                <input type="text" name="inputToado5" id="inputToado5" class="form-control" placeholder="Nhập tọa độ 5">
                                <small id="inputUserName_err" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-12">
                                <label for="">Hình ảnh</label><br>
                                <div class="container mt-5" style="margin-top: -1rem!important;">
                                    <div class="user-image mb-3 text-center">
                                        <div id="imgPreview" class="imgPreview"> </div>
                                    </div>
                                    <label for="inputSupplierName">Chọn hình ảnh</label>
                                    <div class="custom-file">
                                        <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                                        <label class="custom-file-label" for="images">Choose image</label>
                                    </div>
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

</div>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    function deleteAnimal(id) {
        let conf = confirm('Bạn có chắc chắn không ?');
        if (conf) {
            $.ajax({
                url: "{{ url('delete-animal') }}" + "/" + id,
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

<!--SEARCH USING AJAX-->
<script>
    function searchData(page) {
        let input_search = $('#inputSearch').val();
        console.log(input_search);

        $.ajax({
            url: "{{ url('search-list-animal') }}",
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                page: page,
                input_search: input_search,
            },
            success: function(data) {
                $('#tag_table_list_user').html(data);
            }
        });
    }
</script>
<!--SEARCH USING AJAX-->


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

<!--RESET ALL INPUT EMPTY-->
<script>
    function reset_text() {
        $('#inputTentiengviet').val('');
        $('#inputTenkhoahoc').val('');
        $('#inputTendiaphuong').val('');
        $('#inputGioi').val('');
        $('#inputNganh').val('');
        $('#inputLop').val('');
        $('#inputBo').val('');
        $('#inputHo').val('');
        $('#inputHinhthai').val('');
        $('#inputSinhthai').val('');
        $('#inputGiatri').val('');
        $('#inputIucn').val('');
        $('#inputsachdo').val('');
        $('#inputNghidinh').val('');
        $('#inputCities').val('');
        $('#inputPhanbo').val('');
        $('#inputTinhtrang').val('');
        $('#inputSinhcanh').val('');
        $('#inputDiadiem').val('');
        $('#inputNgaythuthap').val('');
        $('#inputNguoithuthap').val('');
        $('#inputNguoitao').val('');
        $('#inputToado1').val('');
        $('#inputToado2').val('');
        $('#inputToado3').val('');
        $('#inputToado4').val('');
        $('#inputToado5').val('');

        
    }
</script>
<!--RESET ALL INPUT EMPTY-->




@endsection