<form action="">
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th style="width:5%;">ID</th>
                <th style="width:35%;">TÊN KHOA HỌC</th>
                <th style="width:25%;">TÊN TIẾNG VIỆT</th>
                <th style="width:25%;">TÊN ĐỊA PHƯƠNG</th>
                <th colspan="3" style="width:10%;">THAO TÁC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($show_animals as $key => $show_animal)
            <tr id="row_{{$show_animal->id}}">
                <td>
                    {{ ++$key }}
                </td>
                <td data-label="TÊN KHOA HỌC">
                    @if ($show_animal->tenkhoahoc != null)
                    {{ $show_animal->tenkhoahoc }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="TÊN TIẾNG VIỆT">
                    @if ($show_animal->tentiengviet != null)
                    {{ $show_animal->tentiengviet }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="TÊN ĐỊA PHƯƠNG">
                    @if ($show_animal->tendiaphuong != null)
                    {{ $show_animal->tendiaphuong }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="THAO TÁC">
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="modal" data-placement="top" title="Detail" data-target="#modelInfoDetailUser-{{$show_animal->id}}"><i class="fa fa-table"></i></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><a class="btn btn-success btn-xs" id="btn_edit" href="{{ url('edit-animal/'.$show_animal->id) }}"><i class="fa fa-edit"></i></a></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="deleteAnimal( <?php echo $show_animal->id; ?> )"><i class="fa fa-trash"></i></button>
                        </li>
                    </ul>
                </td>
            </tr>
            <!-- Modal-Info-User-->
            <div class="modal fade" id="modelInfoDetailUser-{{$show_animal->id}}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header p-2">
                            <h5 class="modal-title font-weight-bolder">Thông tin dộng vật</h5>
                        </div>
                        <div class="modal-body">
                            @php($get_animal = DB::table('dongvats')->where('dongvats.id', $show_animal->id)->first())
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Tên khoa học:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_animal->tenkhoahoc }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Tên tiếng Việt:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_animal->tentiengviet }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Tên địa phương:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_animal->tendiaphuong }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Giới:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_animal->gioi }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Ngành:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_animal->nganh }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Lớp:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_animal->lop }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Bộ:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_animal->bo }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Ảnh đại diện:</b>
                                </div>
                                @php($img_animals = DB::table('hinhanhs')->where('hinhanhs.dongvat_id', '=', $show_animal->id)->get())
                                <div class="col-12 col-lg-6">
                                    @if ($get_animal->duongdan == null )
                                    <img src="{{ asset('public/admin/dist/img/avatar4.png') }}" class="img-circle elevation-2" alt="User-Image" style="width: 50px;height: 50px;">
                                    @else
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
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-2">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal-Info-User-->
            @endforeach
        </tbody>
    </table>
    <ul class="pagination justify-content-center pagination-sm mt-2 p-0 mb-1">
        {!! $show_animals->links('pagination::bootstrap-4') !!}
    </ul>
</form>