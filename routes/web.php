<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Gọi hàm Login
Route::get('login', [HomeController::class, 'login']);

//Gọi đến hàm xử lý
Route::post('post-login', [HomeController::class, 'post_login']);

//Đăng xuất
Route::post('logout', [HomeController::class, 'logout']);

// Trang Admin
Route::get('admin', [AdminController::class, 'index']);

//Xóa động vật
Route::get('delete-animal/{id}', [AdminController::class, 'delete_animal']);

//Trang chỉnh sửa động vật
Route::get('edit-animal/{id}', [AdminController::class, 'edit_animal']);

//Tìm kiếm động vật
Route::post('search-list-animal', [AdminController::class, 'search_list_animal']);

//Chỉnh sửa động vật
Route::put('update-animal/{id}', [AdminController::class, 'update_animal']);

//Thêm động vật
Route::post('post-add-animal', [AdminController::class, 'post_add_animal']);

//Trang Home
Route::get('home', [AdminController::class, 'home']);

//Trang Động vật
Route::get('animal', [AdminController::class, 'animal']);

//Trang Người dùng
Route::get('user', [AdminController::class, 'user']);

//Xóa người dùng
Route::get('delete-user/{id}', [AdminController::class, 'delete_user']);

//Trang chỉnh sửa người dùng
Route::get('edit-user/{id}', [AdminController::class, 'edit_user']);

 //Chỉnh sửa người dùng
 Route::put('update-user/{id}', [AdminController::class, 'update_user']);

 //Thêm người dùng
 Route::post('post-add-user', [AdminController::class, 'post_add_user']);

 //Tìm kiếm ngươi dùng
 Route::post('search-list-user', [AdminController::class, 'search_list_user']);
 
//Trang Thông tin
Route::get('profile', [AdminController::class, 'profile']);

//Trang thay đổi thông tin
Route::get('changes-profile', [AdminController::class, 'change_profile']);
Route::put('update-profile',[AdminController::class,'update_profile']);

//Trang thay đổi mật khẩu
Route::get('changes-password', [AdminController::class, 'change_password']);
Route::put('update-password',[AdminController::class,'update_password']);

//Trang index
Route::get('index', [HomeController::class, 'index_pages']);