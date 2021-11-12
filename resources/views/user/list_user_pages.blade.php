<form action="">
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>TÊN ĐĂNG NHẬP</th>
                <th>TÊN HIỂN THỊ</th>
                <th>QUYỀN NGƯỜI DÙNG</th>
                <th>NGÀY SINH</th>
                <th>GIỚI TÍNH</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>ĐỊA CHỈ</th>
                <th>THỜI GIAN TẠO</th>
                <th colspan="3">THAO TÁC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($show_users as $key => $show_user)
            <tr id="row_{{$show_user->id}}">
                <td data-label="ID">
                    {{ ++$key }}
                </td>
                <td data-label="TÊN ĐĂNG NHẬP">
                    @if ($show_user->username != null)
                    {{ $show_user->username }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="TÊN HIỂN THỊ">
                    @if ($show_user->tenhienthi != null)
                    {{ $show_user->tenhienthi }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="QUYỀN NGƯỜI DÙNG">
                    @if($show_user->vaitro != null && $show_user->vaitro === 1)
                    <b>Người quản trị</b>
                    @else
                    <b>Người dùng</b>
                    @endif
                </td>
                <td data-label="NGÀY SINH">
                    @if ($show_user->ngaysinh != null)
                    {{ $show_user->ngaysinh }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="GIỚI TÍNH">
                    @if($show_user->gioitinh != null && $show_user->gioitinh === 2)
                    Nữ
                    @elseif($show_user->gioitinh != null && $show_user->gioitinh === 1)
                    Nam
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="SỐ ĐIỆN THOẠI">
                    @if ($show_user->sodienthoai != null)
                    {{ $show_user->sodienthoai }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="ĐỊA CHỈ">
                    @if ($show_user->diachi != null)
                    {{ $show_user->diachi }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="THỜI GIAN TẠO">
                    @if ($show_user->created_at != null)
                    {{ $show_user->created_at }}
                    @else
                    <b>...</b>
                    @endif
                </td>
                <td data-label="THAO TÁC">
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="modal" data-placement="top" title="Detail" data-target="#modelInfoDetailUser-{{$show_user->id}}"><i class="fa fa-table"></i></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><a class="btn btn-success btn-xs" id="btn_edit" href="{{ url('edit-user/'.$show_user->id) }}"><i class="fa fa-edit"></i></a></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="deleteUser( <?php echo $show_user->id; ?> )"><i class="fa fa-trash"></i></button>
                        </li>
                    </ul>
                </td>
            </tr>

            <!-- Modal-Info-User-->
            <div class="modal fade" id="modelInfoDetailUser-{{$show_user->id}}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header p-2">
                            <h5 class="modal-title font-weight-bolder">Thông tin người dùng</h5>
                        </div>
                        <div class="modal-body">
                            @php($get_user = DB::table('users')->where('id', $show_user->id)->first())
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Họ tên:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_user->tenhienthi }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Tài khoản:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_user->username }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Điện thoại:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ $get_user->sodienthoai }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Ngày sinh:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    {{ date("d/m/Y", strtotime($get_user->ngaysinh)) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Giới tính:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    @if($get_user->gioitinh != null && $get_user->gioitinh === 2)
                                    Nữ
                                    @elseif($get_user->gioitinh != null && $get_user->gioitinh === 1)
                                    Nam
                                    @else
                                    <b>...</b>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Địa chỉ:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    @if ($get_user->diachi != null)
                                    {{ $get_user->diachi }}
                                    @else
                                    <b>...</b>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <b>Ảnh đại diện:</b>
                                </div>
                                <div class="col-12 col-lg-6">
                                    @if ($get_user->avatar == null )
                                    <img src="{{ asset('public/admin/dist/img/avatar4.png') }}" class="img-circle elevation-2" alt="User-Image" style="width: 50px;height: 50px;">
                                    @else
                                    <div class="container__img-holder">
                                        <img src="{{ asset('public/upload_avatar/'.$get_user->avatar) }}" class="img-circle elevation-2" alt="User-Image" style="width: 50px;height: 50px;">
                                    </div>
                                    <div class="img-popup">
                                        <img src="" alt="Popup Image">
                                        <div class="close-btn">
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                        </div>
                                    </div>
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
        {!! $show_users->links('pagination::bootstrap-4') !!}
    </ul>
</form>