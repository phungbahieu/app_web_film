<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\useradmin;

class user extends Controller
{
	 public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('Quanli-admin');
        }else{
            return Redirect::to('admin')->send();
        }
    }
     public function Them_user(){
        $this->AuthLogin();
    	return view('admin.user.Them-user');
    }
     public function Luu_user(Request $request){
        $this->AuthLogin();
        $data = $request->all();

        $brand = new useradmin;
        $brand->admin_email = $data['email'];
        $brand->admin_password= $data ['pass'];
        $brand->admin_phone= $data['phone'];
        $brand->admin_name= $data['name'];
        $brand->save();
       
    	
        
    	Session::put('message','Thêm thương hiệu sản phẩm thành công');
    	return Redirect::to('Them-user');
    }
   public function Liet_ke_user(){
        $this->AuthLogin();
    	
      $user = useradmin::orderBy('admin_id','DESC')->get();
    	$Lietke_user  = view('admin.user.Liet-ke-user')->with('user',$user);
    	return view('admin_layout')->with('admin.user.Liet-ke-user', $Lietke_user);


    }
     public function Sua_user($user_id){
        $this->AuthLogin();

        $user = useradmin::where('admin_id',$user_id)->get();
        $user_ex  = view('admin.user.Sua-user')->with('user',$user);

        return view('admin_layout')->with('admin.uer.Sua-user', $user_ex);
    }
     public function Cap_Nhat_user(Request $request,$user_id){
        $this->AuthLogin();
       $data = array();
            
           $data['admin_name'] = $request->name;
           $data['admin_password'] = $request->pass;
           $data['admin_name'] = $request->name;
           $data['admin_phone'] = $request->phone;
         
           
   
         
               
           DB::table('tbl_admin')->where('admin_id',$user_id)->update($data);
           Session::put('message','Cập nhật  thành công');
           return Redirect::to('Liet-Ke-user');
    }
     public function Xoa_user($user_id){
        $this->AuthLogin();
        DB::table('tbl_admin')->where('admin_id',$user_id)->delete();
           Session::put('message','Xóa thành công');
           return Redirect::to('Liet-Ke-user');
    }
}
