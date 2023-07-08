<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\theloai;
use App\Models\year;
use App\Models\film;
use App\Models\quocgia;



session_start();
class theloai1 extends Controller
{





   
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('Quanli-admin');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function Them_The_Loai(){
        $this->AuthLogin();
    	return view('admin.theloai.Them-The-Loai');
    }
    public function Liet_ke_The_Loai(){
        $this->AuthLogin();
    	//$all_brand_product = DB::table('tbl_brand')->get(); //static huong doi tuong
        // $all_brand_product = Brand::all(); 
        $theloai = theloai::orderBy('theloai_id','DESC')->get();
    	$Lietke_theloai  = view('admin.theloai.Liet-ke-The-Loai')->with('theloai',$theloai);
    	return view('admin_layout')->with('admin.theloai.Liet-ke-The-Loai', $Lietke_theloai);


    }
    public function Luu_The_Loai(Request $request){
        $this->AuthLogin();
        $data = $request->all();

        $brand = new theloai;
        $brand->theloai_ten = $data['Ten_Thuong_Hieu'];
        $brand->theloai_status = $data['status_Thuong_Hieu'];
        $brand->save();
       
    	// $data = array();
    	// $data['brand_name'] = $request->brand_product_name;
        // $data['brand_slug'] = $request->brand_slug;
    	// $data['brand_desc'] = $request->brand_product_desc;
    	// $data['brand_status'] = $request->brand_product_status;
    	// DB::table('tbl_brand')->insert($data);
        
    	Session::put('message','Thêm thương hiệu sản phẩm thành công');
    	return Redirect::to('Them-The-Loai');
    }
    public function An_The_Loai($theloai_id){
        $this->AuthLogin();
        DB::table('theloai')->where('theloai_id',$theloai_id)->update(['theloai_status'=>0]);
        Session::put('message','Ẩn thương hiệu sản phẩm thành công');
        return Redirect::to('Liet-Ke-The-Loai');

    }
    public function Hien_The_Loai($theloai_id){
        $this->AuthLogin();
        DB::table('theloai')->where('theloai_id',$theloai_id)->update(['theloai_status'=>1]);
        Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
        return Redirect::to('Liet-Ke-The-Loai');

    }

    
    public function Sua_The_Loai($theloai_id){
        $this->AuthLogin();

        $sua_the_loai = theloai::where('theloai_id',$theloai_id)->get();
        $sua_the_loai_ex  = view('admin.theloai.Sua-The-Loai')->with('sua_the_loai',$sua_the_loai);

        return view('admin_layout')->with('admin.theloai.Sua-The-Loai', $sua_the_loai_ex);
    }

    public function Cap_Nhat_The_Loai(Request $request,$theloai_id){
        $this->AuthLogin();
        $data = $request->all();
        $brand = theloai::find($theloai_id);
        $brand->theloai_ten = $data['Ten_Thuong_Hieu'];
        $brand->theloai_status = $data['status_Thuong_Hieu'];
        $brand->save();
        Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('Liet-Ke-The-Loai');
    }
    public function Xoa_The_Loai($theloai_id){
        $this->AuthLogin();
        DB::table('theloai')->where('theloai_id',$theloai_id)->delete();
        Session::put('message','Xóa thương hiệu sản phẩm thành công');
        return Redirect::to('Liet-Ke-The-Loai');
    }
     public function film_theloai(Request $request, $theloai_id){
         $quangcao = DB::table('quangcao')->where('product_status','1')->orderby('id','desc')->limit(1)->get();
          $url_canonical = $request->url();
         $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
        $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->limit(1)->get();
           $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
             
          $all_product = DB::table('film')->join('theloai','film.theloai_id','=','theloai.theloai_id')->where('theloai.theloai_id',$theloai_id)->get();
       
        return view('trangchu.theloai.theloai')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('all_product',$all_product)->with('url_canonical',$url_canonical)->with('quangcao',$quangcao);;
        
    }


}
