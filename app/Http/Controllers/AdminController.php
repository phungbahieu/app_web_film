<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\theloai;
use App\Models\quocgia;
use App\Models\year;
use App\Models\film;
use App\Models\useradmin;
use App\Models\danhgia;
use App\Models\comment;
class AdminController extends Controller
{
    //
    public function index(){

     


        return view('admin_login');
    }
    public function QuanliAdmin(){
        $this->AuthLogin();
 $danhgia =  danhgia::all();
$comment =  comment::all();
        $theloai =theloai::all();
        $quocgia =quocgia::all();
        $year =year::all();
       $film=film::all();
       $user = useradmin::all();

        return view('admin.Quanli-admin',compact( 'theloai','quocgia','year','film','comment','danhgia','user'));
    }
    
    public function DangNhap(Request $request){

$comment = comment::all();
         $theloai =theloai::all();
        $quocgia =quocgia::all();
        $year =year::all();
       $film=film::all();
       $danhgia =  danhgia::all();
      $user = useradmin::all();
        $admin_email = $request->admin_email;
      $admin_password = $request->admin_password;
      $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where ('admin_password',$admin_password)->first();
      if($result){
          Session::put('admin_name',$result->admin_name);
          Session::put('admin_id',$result->admin_id);
          return view('admin.Quanli-admin',compact( 'theloai','quocgia','year','film','comment','danhgia','user'));
         
      }else{
          Session::put('message','Có thể bạn đã nhập sai mật khẩu hoạc tài khoản E-mail.Hãy nhập lại!');
          return Redirect::to('/admin');
      }
      return view('admin.dashboard');

      
    }
    public function Dangxuat(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');

    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
        return Redirect::to('dashboard');
        }else{
        return Redirect::to('admin')->send();
        }
        }
}
