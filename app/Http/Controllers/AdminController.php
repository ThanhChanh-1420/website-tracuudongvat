<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dongvat;
use App\Models\Hinhanh;
use App\Models\Toado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('layout.admin_pages');
        } else {
            return view('layout.login_pages');
        }
    }

    public function home()
    {
        if (Auth::check()) {
            return view('pages.home_admin_pages');
        } else {
            return view('layout.login_pages');
        }
    }

    public function animal()
    {
        if (Auth::check()) {
            $show_animal = Dongvat::paginate(10);
            //$show_animal = DB::table('dongvats')->paginate(15);
            //$response = Dongvat::paginate(10);
            //return response()->json($show_animal,200);
            return view('animal.animal_pages')->with('show_animals', $show_animal);
        } else {
            return view('layout.login_pages');
        }
    }

    //Chỉnh sửa người dùng
    public function edit_animal($id)
    {
        $edit_animals = Dongvat::find($id);

        /*$edit_animals = DB::table('dongvats')
                    ->join('hinhanhs','dongvats.id','=','hinhanhs.dongvat_id')
                    ->join('toados','dongvats.id','=','toados.dongvat_id')
                    ->select('dongvats.*','hinhanhs.*','toados.*')
                    ->where('dongvats.id','=',$id)
                    ->get();*/
        return view('animal.edit_animal_pages')->with('edit_animals', $edit_animals);
    }

    //Hàm xóa động vật
    public function delete_animal(Request $request, $id)
    {
        if ($request->ajax()) {
            $find_animal = Dongvat::find($id);

            //Lay tat ca table hinh anh
            $find_img_animals = DB::table('hinhanhs')->where('hinhanhs.dongvat_id', '=', $id)->get();

            //Lap xoa file theo ten trong csdl
            foreach ($find_img_animals as $find_img_animal) {
                if (file_exists(public_path('uploads_animal/' . $find_img_animal->duongdan))) {
                    unlink(public_path('uploads_animal/' . $find_img_animal->duongdan));
                } else {
                    dd('File does not exists.');
                }
            }
            //Cuoi cung xoa du lieu theo dung id
            DB::table('hinhanhs')->where('hinhanhs.dongvat_id', '=', $id)->delete();
            //Xóa tạo độ có id tương ứng
            DB::table('toados')->where('toados.dongvat_id', '=', $id)->delete();
            //Xoa ID cha cua table
            $find_animal->delete();

            return response()->json(['success' => 'Đã xóa động vật']);
        }
    }

    //Tìm kiếm động vật
    public function search_list_animal(Request $request)
    {
        if ($request->ajax()) {

            $search_text = $request->input_search;

            if ($search_text != '') {
                $show_animals = DB::table('dongvats')
                    ->where('tenkhoahoc', 'LIKE', '%' . $search_text . '%')
                    ->orWhere('tentiengviet', 'LIKE', '%' . $search_text . '%')
                    ->paginate(5);
            } else {
                $show_animals = DB::table('users')->paginate(5);
            }

            return view('animal.list_animal_pages', ['show_animals' => $show_animals])->render();
        }
    }

    //Chỉnh sửa động vật
    public function update_animal(Request $request, $id)
    {
        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ], [
            'imageFile.required' => 'Chưa chọn hình ảnh!!!',
            'imageFile.*.mimes' => 'Loại hình ảnh chưa đúng!!!'
        ]);

        $update_animal = Dongvat::find($id);
        $update_animal->tenkhoahoc = $request->input('inputTenkhoahoc');
        $update_animal->tentiengviet = $request->input('inputTentiengviet');
        $update_animal->tendiaphuong = $request->input('inputTendiaphuong');
        $update_animal->gioi = $request->input('inputGioi');
        $update_animal->nganh = $request->input('inputNganh');
        $update_animal->lop = $request->input('inputLop');
        $update_animal->bo = $request->input('inputBo');
        $update_animal->hinhthai = $request->input('inputHinhthai');
        $update_animal->sinhthai = $request->input('inputSinhthai');
        $update_animal->giatri = $request->input('inputGiatri');
        $update_animal->iucn = $request->input('inputIucn');
        $update_animal->sachdo = $request->input('inputSachdo');
        $update_animal->nghidinh = $request->input('inputNghidinh');
        $update_animal->cities = $request->input('inputCities');
        $update_animal->phanbo = $request->input('inputPhanbo');
        $update_animal->tinhtrang = $request->input('inputTinhtrang');
        $update_animal->sinhcanh = $request->input('inputSinhcanh');
        $update_animal->diadiem = $request->input('inputDiadiem');
        $update_animal->ngaythuthap = $request->input('inputNgaythuthap');
        $update_animal->nguoithuthap = $request->input('inputNguoithuthap');

        if ($request->hasfile('imageFile')) {
            DB::table('hinhanhs')->where('dongvat_id', '=', $id)->delete();
            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads_animal/', $name);
                //$imgData[] = $name;  
                $fileModal = new Hinhanh();
                $fileModal->duongdan = $name;
                $fileModal->dongvat_id = $id;
                $fileModal->save();
            }
        }

        $add_toado = [];
        $add_toado1 = $request->input('inputToado0');
        $add_toado2 = $request->input('inputToado1');
        $add_toado3 = $request->input('inputToado2');
        $add_toado4 = $request->input('inputToado3');
        $add_toado5 = $request->input('inputToado4');

        if ($add_toado1 != null){
            $add_toado[] = $add_toado1;
        }
        if ($add_toado2 != null){
            $add_toado[] = $add_toado2;
        }
        if ($add_toado3 != null){
            $add_toado[] = $add_toado3;
        }
        if ($add_toado4 != null){
            $add_toado[] = $add_toado4;
        }
        if ($add_toado5 != null){
            $add_toado[] = $add_toado5;
        }

        DB::table('toados')->where('dongvat_id','=',$id)->delete();
        foreach ($add_toado as $toado) {
            $add_toado_animal = new Toado();
            $add_toado_animal->toados = $toado;
            $add_toado_animal->dongvat_id = $id;
            $add_toado_animal->save();
        }

        $update_animal->save();

        return redirect('animal')->with('message', 'Đã cập nhật thành công');
    }

    //Thêm động vật CSDL AJAX
    public function post_add_animal(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'inputTentiengviet' => 'required',
                'inputTenkhoahoc' => 'required',
                'inputTendiaphuong' => 'required|unique:dongvats,tendiaphuong',
                'inputTenkhoahoc' => 'required|unique:dongvats,tenkhoahoc',
                'inputTentiengviet' => 'required|unique:dongvats,tentiengviet',
                'inputGioi' => 'required',
                'inputNganh' => 'required',
                'inputLop' => 'required',
                'inputBo' => 'required',
                'inputHo' => 'required',
            ], [
                'inputTentiengviet.required' => 'Chưa nhập tên tiếng Việt',
                'inputTenkhoahoc.required' => 'Chưa nhập tên khoa hoc',
                'inputTendiaphuong.required' => 'Chưa nhập tên địa phương',
                'inputGioi.required' => 'Chưa nhập Giới',
                'inputNganh.required' => 'Chưa nhập Ngành',
                'inputLop.required' => 'Chưa nhập Lớp',
                'inputBo.required' => 'Chưa nhập Bộ ',
                'inputHo.required' => 'Chưa nhập Họ',

                'inputTendiaphuong.unique' => 'Tên địa phương đã tồn tại',
                'inputTenkhoahoc.unique' => 'Tên địa khoa học đã tồn tại',
                'inputTentiengviet' => 'Tên tiếng Việt đã tồn tại'
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->all()]);
            } else {
                $add_animal = new Dongvat();
                $add_animal->tenkhoahoc = $request->input('inputTenkhoahoc');
                $add_animal->tentiengviet = $request->input('inputTentiengviet');
                $add_animal->tendiaphuong = $request->input('inputTendiaphuong');
                $add_animal->gioi = $request->input('inputGioi');
                $add_animal->nganh = $request->input('inputNganh');
                $add_animal->lop = $request->input('inputLop');
                $add_animal->bo = $request->input('inputBo');
                $add_animal->ho = $request->input('inputHo');
                $add_animal->hinhthai = $request->input('inputHinhthai');
                $add_animal->sinhthai = $request->input('inputSinhthai');
                $add_animal->giatri = $request->input('inputGiatri');
                $add_animal->iucn = $request->input('inputIucn');
                $add_animal->sachdo = $request->input('inputSachdo');
                $add_animal->nghidinh = $request->input('inputNghidinh');
                $add_animal->cities = $request->input('inputCities');
                $add_animal->phanbo = $request->input('inputPhanbo');
                $add_animal->tinhtrang = $request->input('inputTinhtrang');
                $add_animal->sinhcanh = $request->input('inputSinhcanh');
                $add_animal->diadiem = $request->input('inputDiadiem');
                $add_animal->ngaythuthap = $request->input('inputNgaythuthap');
                $add_animal->nguoithuthap = $request->input('inputNguoithuthap');
                $add_animal->nguoitao = $request->input('inputNguoitao');

                //Save động vật
                $add_animal->save();

                $add_toado = [];
                $add_toado1 = $request->input('inputToado1');
                $add_toado2 = $request->input('inputToado2');
                $add_toado3 = $request->input('inputToado3');
                $add_toado4 = $request->input('inputToado4');
                $add_toado5 = $request->input('inputToado5');



                // if ($add_toado1 != null || $add_toado2 != null || $add_toado3 != null || $add_toado4 != null || $add_toado5 != null) {
                //     array_push($add_toado, $add_toado1);
                //     array_push($add_toado, $add_toado2);
                //     array_push($add_toado, $add_toado3);
                //     array_push($add_toado, $add_toado4);
                //     array_push($add_toado, $add_toado5);
                // }
                if ($add_toado1 !== null){
                    $add_toado[] = $add_toado1;
                }
                if ($add_toado2 !== null){
                    $add_toado[] = $add_toado2;
                }
                if ($add_toado3 !== null){
                    $add_toado[] = $add_toado3;
                }
                if ($add_toado4 !== null){
                    $add_toado[] = $add_toado4;
                }
                if ($add_toado5 !== null){
                    $add_toado[] = $add_toado5;
                }


                foreach ($add_toado as $toado) {
                    $add_toado_animal = new Toado();
                    $add_toado_animal->toados = $toado;
                    $add_toado_animal->dongvat_id = $add_animal->id;
                    $add_toado_animal->save();
                }

                $request->validate([
                    'imageFile' => 'required',
                    'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
                ]);

                if ($request->hasfile('imageFile')) {
                    foreach ($request->file('imageFile') as $file) {
                        $name = $file->getClientOriginalName();
                        $file->move(public_path() . '/uploads_animal/', $name);
                        //$imgData[] = $name;

                        $fileModal = new Hinhanh();
                        $fileModal->duongdan = $name;
                        $fileModal->dongvat_id = $add_animal->id;
                        $fileModal->save();
                    }

                    /*$fileModal = new Hinhanh();
                    $fileModal->duongdan = json_encode($imgData);
                    $fileModal->dongvat_id = $add_animal->id;


                    $fileModal->save();*/

                    //return back()->with('success', 'File has successfully uploaded!');
                }
                //Save động vật
                //$add_animal->save();

            }
        }

        return response()->json(['success' => 'Đã thêm động vật']);
    }

    public function user()
    {
        if (Auth::check()) {
            $show_users = User::paginate(5);
            //return response()->json($show_users,200);
            return view('user.users_pages', ['show_users' => $show_users])->render();
        } else {
            return view('layout.login_pages');
        }
    }

    //Hàm xóa người dùng
    public function delete_user(Request $request, $id)
    {
        if ($request->ajax()) {
            $find_user = User::find($id);

            if (file_exists(public_path('upload_avatar/' . $find_user->avatar))) {
                unlink(public_path('upload_avatar/' . $find_user->avatar));
            } else {
                dd('File does not exists.');
            }

            $find_user->delete();
            return response()->json(['success' => 'Đã xóa người dùng']);
        }
    }

    //Trang chỉnh sửa người dùng
    public function edit_user($id)
    {
        $edit_users = User::find($id);
        return view('user.edit_users_pages', ['edit_users' => $edit_users]);
    }

    //Chỉnh sửa người dùng
    public function update_user(Request $request, $id)
    {
        $update_user = User::find($id);
        $update_user->tenhienthi = $request->input('inputUserName');
        $update_user->sodienthoai = $request->input('inputUserPhone');
        $update_user->ngaysinh = $request->input('inputUserBirthday');
        $update_user->vaitro = $request->input('inputUserRole');
        $update_user->diachi = $request->input('inputUserLocation');
        $update_user->gioitinh = $request->input('radio');
        if ($request->hasFile('fileInput')) { //Kiểm tra có file không ?
            $file = $request->file('fileInput'); //Lấy all thuộc tính file
            $fileName = time() . '-' . $file->getClientOriginalName(); //Chỉ lấy tên file vd: 16484739-images.png
            $file->move(public_path('upload_avatar'), $fileName); //Tự động tạo folder có tên upload_supplier trong public
            $update_user->avatar = $fileName;
        }
        $update_user->save();

        return redirect('user')->with('message', 'Đã cập nhật thành công');
    }

    //Thêm người dùng CSDL AJAX
    public function post_add_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'inputRoleUser' => 'required',
            'inputFullName' => 'required',
            'inputUserName' => 'required|unique:users,username',
            'inputUserPhone' => 'required|unique:users,sodienthoai',
            'inputUserBirthday' => 'required',
            'inputUserLocation' => 'required',
        ], [
            'inputRoleUser.required' => 'Chưa chọn vai trò người dùng',
            'inputFullName.required' => 'Chưa nhập họ và tên',
            'inputUserName.required' => 'Chưa nhập tên tài khoản',
            'inputUserName.unique' => 'Tên tài khoản đã tồn tại',

            'inputUserPhone.required' => 'Chưa nhập số điện thoại',
            'inputUserPhone.unique' => 'Số điện thoại đã tồn tại',
            'inputUserBirthday.required' => 'Chưa chọn ngày sinh',
            'inputUserLocation.required' => 'Chưa nhập địa chỉ'
        ]);

        $pass = $request->input('inputPassword');
        $phone = $request->input('inputUserPhone');


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        } else {
            $add_user = new User();
            $add_user->vaitro = $request->input('inputRoleUser');
            $add_user->tenhienthi = $request->input('inputFullName');
            $add_user->username = $request->input('inputUserName');
            $add_user->sodienthoai = $phone;
            if ($pass == "") {
                $add_user->password = bcrypt($request->input('inputUserName') . substr($phone, -4));
            } else {
                $add_user->password = bcrypt($pass);
            }
            $add_user->gioitinh = $request->input('inputSex');
            $add_user->ngaysinh = $request->input('inputUserBirthday');
            $add_user->diachi = $request->input('inputUserLocation');
            if ($request->hasFile('fileInput')) {
                $file = $request->file('fileInput');
                $file_name = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('upload_avatar'), $file_name);
                $add_user->avatar = $file_name;
            }
            $add_user->save();

            return response()->json(['success' => 'Đã thêm người dùng']);
        }
    }

    //Tìm kiếm người dùng
    public function search_list_user(Request $request)
    {
        if ($request->ajax()) {

            $search_text = $request->input_search;

            if ($search_text != '') {
                $show_users = DB::table('users')
                    ->where('tenhienthi', 'LIKE', '%' . $search_text . '%')
                    ->orWhere('username', 'LIKE', '%' . $search_text . '%')
                    ->paginate(5);
            } else {
                $show_users = DB::table('users')->paginate(5);
            }

            return view('user.list_user_pages', ['show_users' => $show_users])->render();
        }
    }


    public function profile()
    {
        if (Auth::check()) {
            return view('admin.profile_pages');
        } else {
            return view('layout.login_pages');
        }
    }

    public function change_profile()
    {
        if (Auth::check()) {
            return view('admin.change_profile_pages');
        } else {
            return view('layout.login_pages');
        }
    }

    public function update_profile(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->tenhienthi = $request->get('username');
        $user->ngaysinh = $request->get('birthday');
        $user->sodienthoai = $request->get('phone');
        $user->diachi = $request->get('location');
        $user->gioitinh = $request->get('radio');
        if ($request->hasFile('fileInput')) { //Kiểm tra có file không ?
            $file = $request->file('fileInput'); //Lấy all thuộc tính file
            $fileName = time() . '-' . $file->getClientOriginalName(); //Chỉ lấy tên file vd: 16484739-images.png
            $file->move(public_path('upload_avatar'), $fileName); //Tự động tạo folder có tên upload_supplier trong public
            $user->avatar = $fileName;
        }
        $user->save();

        return redirect('profile')->with('status', 'update successful');
    }

    public function change_password()
    {
        if (Auth::check()) {
            return view('admin.change_password_pages');
        } else {
            return view('layout.login_pages');
        }
    }
    public function update_password(Request $request)
    {
        $id_user = Auth::user()->id;
        $users = DB::table('users')->where('id', $id_user)->get();

        $old_pass = $request->input('inputPasswordOld');
        $new_pass = $request->input('inputPasswordNew');
        $new_pass_confirm = $request->input('inputPasswordComfirmNew');

        $change = User::find($id_user);
        foreach ($users as $val_users) {
            $db_pass = $val_users->password;
            if (password_verify($old_pass, $db_pass)) {
                if ($new_pass == $new_pass_confirm) {
                    $change->password = bcrypt($request->input('inputPasswordComfirmNew'));
                    $change->save();
                    $change_password_user = $request->session()->get('change_password_user');
                    return redirect('login')->with('status', 'change password successful');
                } else {
                    $change_password_user_fail = $request->session()->get('change_password_user_fail');
                    return redirect('profile')->with('status', 'change password fail');
                }
            } else {
                $old_pass_fail = $request->session()->get('old_pass_fail');
                return redirect('profile')->with('status', 'old password fail');
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
