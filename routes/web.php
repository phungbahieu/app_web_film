<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\film;
use App\Http\Controllers\theloai1;
use App\Http\Controllers\Quocgia1;
use App\Http\Controllers\year1;
use App\Http\Controllers\user;
use App\Http\Controllers\yeuthich;
use App\Http\Controllers\quangcao;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/product',[HomeController::class,'product']);
Route::get('/admin',[AdminController::class,'index']);
Route::get('/Quanliadmin',[AdminController::class,'QuanliAdmin']);
Route::post('/Quanli',[AdminController::class,'DangNhap']);
Route::get('/Dangxuat-admin ',[AdminController::class,'Dangxuat']);
Route::get('getHint/{q}', 'HomeController@getHint');
//trangchu
Route::get('/trangchu', [HomeController::class, 'index']);
Route::get('/muclucfilm', [HomeController::class, 'muclucfilm']);
Route::get('/getHint/{q}', [HomeController::class, 'getHint']);

Route::post('/seach', [HomeController::class, 'seach']);
Route::post('/fitter', [HomeController::class, 'fitter']);

Route::get('/Profile', [HomeController::class, 'Profile']);
Route::get('/Forgotpassword', [HomeController::class, 'Forgotpassword']);
Route::get('/login', [HomeController::class, 'login']);
Route::post('/Luu-login',[HomeController::class, 'luu_login']);
Route::get('/dangnhap', [HomeController::class, 'dangnhap']);
Route::get('/dangnhap1', [HomeController::class, 'dangnhap1']);
 Route::get('/Dangxuat ',[HomeController::class,'Dangxuat']);
Route::get('/film-theloai/{theloai_id}',[theloai1::class,'film_theloai']);


Route::post('/autocomplete-ajax', [HomeController::class,'fetch']);








//theloai
Route::get('/Them-The-Loai',[theloai1::class,'Them_The_Loai']);
Route::post('/Luu-The-Loai',[theloai1::class,'Luu_The_Loai']);
Route::get('/Liet-Ke-The-Loai',[theloai1::class,'Liet_Ke_The_Loai']);

Route::get('/An-The-Loai/{theloai_id}',[theloai1::class,'An_The_Loai']);
Route::get('/Hien-The-Loai/{theloai_id}',[theloai1::class,'Hien_The_Loai']);

Route::get('/Sua-The-Loai/{theloai_id}',[theloai1::class,'Sua_The_Loai']);
Route::post('/Cap-Nhat-The-Loai/{theloai_id}',[theloai1::class,'Cap_Nhat_The_Loai']);
Route::get('/Xoa-The-Loai/{theloai_id}',[theloai1::class,'Xoa_The_Loai']);

//theloai_home
Route::get('/film-theloai/{theloai_id}',[theloai1::class,'film_theloai']);
//quocgia_home
Route::get('/film-quocgia/{quocgia_id}',[Quocgia1::class,'film_quocgia']);
//year_home
Route::get('/film-year/{year_id}',[year1::class,'film_year']);
//quoc gia



Route::get('/Them-Quoc-Gia',[Quocgia1::class,'Them_Quoc_Gia']);
Route::post('/Luu-Quoc-Gia',[Quocgia1::class,'Luu_Quoc_Gia']);
Route::get('/Liet-Ke-Quoc-Gia',[Quocgia1::class,'Liet_Ke_Quoc_Gia']);
Route::get('/An-Quoc-Gia/{quocgia_id}',[Quocgia1::class,'An_Quoc_Gia']);
Route::get('/Hien-Quoc-Gia/{quocgia_id}',[Quocgia1::class,'Hien_Quoc_Gia']);

Route::get('/Sua-Quoc-Gia/{quocgia_id}',[Quocgia1::class,'Sua_Quoc_Gia']);
Route::post('/Cap-Nhat-Quoc-Gia/{quocgia_id}',[Quocgia1::class,'Cap_Nhat_Quoc_Gia']);
Route::get('/Xoa-Quoc-Gia/{quocgia_id}',[Quocgia1::class,'Xoa_Quoc_Gia']);
//year
Route::get('/Them-Year',[year1::class,'Them_Year']);
Route::post('/Luu-Year',[year1::class,'Luu_Year']);
Route::get('/Liet-Ke-Year',[year1::class,'Liet_Ke_Year']);
Route::get('/An-Year/{year_id}',[year1::class,'An_Year']);
Route::get('/Hien-Year/{year_id}',[year1::class,'Hien_Year']);

Route::get('/Sua-Year/{year_id}',[year1::class,'Sua_Year']);
Route::post('/Cap-Nhat-Year/{year_id}',[year1::class,'Cap_Nhat_Year']);
Route::get('/Xoa-Year/{year_id}',[year1::class,'Xoa_Year']);


//film
Route::get('/Them-film',[film::class,'Them_film']);
Route::post('/Luu-film',[film::class,'Luu_film']);
Route::get('/Liet-Ke-film',[film::class,'Liet_Ke_film']);
Route::get('/An-film/{film_id}',[film::class,'An_film']);
Route::get('/Hien-film/{film_id}',[film::class,'Hien_film']);
Route::get('/Sua-film/{film_id}',[film::class,'Sua_film']);
Route::post('/Cap-Nhat-film/{film_id}',[film::class,'Cap_Nhat_film']);
Route::get('/Xoa-film/{film_id}',[film::class,'Xoa_film']);
Route::get('/chi-tiet-film/{film_id}',[film::class,'detailfilm']);
Route::post('/chi-tiet-film/{id}',[film::class,'comment']);
Route::post('/chi-tiet-film/{id}',[film::class,'rating']);

Route::get('/Liet-Ke-comment',[film::class,'Liet_Ke_com']);
Route::get('/Liet-Ke-danhgia',[film::class,'Liet_Ke_danhgia']);
Route::get('/Xoa-com/{id}',[film::class,'Xoa']);
Route::get('/Xoa-danhgia/{id}',[film::class,'Xoadanhgia']);

Route::get('/watch/{film_id}',[film::class,'watchfilm']);
Route::post('/watch/{id}',[film::class,'comment']);

//yeuthich

Route::post('/yeuthich',[yeuthich::class,'luu_film']);

Route::get('/Show-Gio-Hang',[yeuthich::class,'Show_Gio_Hang']);
//user
Route::get('/Them-user',[user::class,'Them_user']);
Route::post('/Luu-user',[user::class,'Luu_user']);

Route::get('/Liet-Ke-user',[user::class,'Liet_Ke_user']);
Route::get('/Sua-user/{user_id}',[user::class,'Sua_user']);
Route::post('/Cap-Nhat-user/{user_id}',[user::class,'Cap_Nhat_user']);
Route::get('/Xoa-user/{user_id}',[user::class,'Xoa_user']);


//quảng cáo
Route::get('/Them-Quang-Cao',[quangcao::class,'Them_Qc']);
Route::post('/Luu-Qc',[quangcao::class,'Luu_Qc']);
Route::get('/Liet-Ke-quangcao',[quangcao::class,'Liet_Ke_quangcao']);
Route::get('/Xoa-quangcao/{quangcao_id}',[quangcao::class,'Xoa_quangcao']);