<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin');
        }else{
            return view('layout.login_pages');
        }
    }

    //Login to website
    public function post_login(Request $request){
        $request->validate(array(
            'username'=>'required',
            'password'=>'required|min:6'
        ),[
            'username.required'=>'Tên đăng nhập không được bỏ trống',
            'password.min'=>'Mật khẩu phải ít nhất 6 ký tự'
        ]);
        //return response()->json(['check'=>Hash::make($request->get('password'))],200);
        if (Auth::attempt($request->only(['username','password']))){
             return redirect('home')->with('status','login successful');
         }
         return redirect('login')->with('status','login fail');
    }

    //Gọi đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    //Hàm gọi index
    public function index_pages()
    {
        return view('pages.index_pages');
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
