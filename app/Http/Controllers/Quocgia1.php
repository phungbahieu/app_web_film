<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\quocgia;
session_start();
class Quocgia1 extends Controller

{
   
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('Quanli-admin');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function Them_Quoc_Gia(){
        $this->AuthLogin();
    	return view('admin.quocgia.Them-Quoc-Gia');
    }
      public function Liet_ke_Quoc_Gia(){
        $this->AuthLogin();
    	//$all_brand_product = DB::table('tbl_brand')->get(); //static huong doi tuong
        // $all_brand_product = Brand::all(); 
        $quocgia = quocgia::orderBy('quocgia_id','DESC')->get();
    	$Lietke_quocgia  = view('admin.quocgia.Liet-ke-Quoc-Gia')->with('quocgia',$quocgia);
    	return view('admin_layout')->with('admin.quocgia.Liet-ke-Quoc-Gia', $Lietke_quocgia);


    }

    public function Luu_Quoc_Gia(Request $request){
        $this->AuthLogin();
        $data = $request->all();

        $brand = new quocgia;
        $brand->quocgia_ten = $data['Ten_Thuong_Hieu'];
        $brand->quocgia_status = $data['status_Thuong_Hieu'];
        $brand->save();
       
    	// $data = array();
    	// $data['brand_name'] = $request->brand_product_name;
        // $data['brand_slug'] = $request->brand_slug;
    	// $data['brand_desc'] = $request->brand_product_desc;
    	// $data['brand_status'] = $request->brand_product_status;
    	// DB::table('tbl_brand')->insert($data);
        
    	Session::put('message','Thêm thương hiệu sản phẩm thành công');
    	return Redirect::to('Them-Quoc-Gia');
    }
    public function An_Quoc_Gia($quocgia_id){
       $this->AuthLogin();
        DB::table('quocgia')->where('quocgia_id',$quocgia_id)->update(['quocgia_status'=>0]);
       Session::put('message','Ẩn thương hiệu sản phẩm thành công');
       return Redirect::to('Liet-Ke-Quoc-Gia');

    }
   public function Hien_Quoc_Gia($quocgia_id){
       $this->AuthLogin();
       DB::table('quocgia')->where('quocgia_id',$quocgia_id)->update(['quocgia_status'=>1]);
       Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
     return Redirect::to('Liet-Ke-Quoc-Gia');

   }

   public function Sua_Quoc_Gia($quocgia_id){
      $this->AuthLogin();
       $sua_quoc_gia = quocgia::where('quocgia_id',$quocgia_id)->get();
      $sua_quoc_gia_ex  = view('admin.quocgia.Sua-Quoc-Gia')->with('sua_quoc_gia',$sua_quoc_gia);

      return view('admin_layout')->with('admin.quocgia
      	.Sua-Quoc-Gia', $sua_quoc_gia_ex);
   }
   public function Cap_Nhat_Quoc_Gia(Request $request,$quocgia_id){
       $this->AuthLogin();
       $data = $request->all();
       $brand = quocgia::find($quocgia_id);


       $brand->quocgia_ten = $data['Ten_Thuong_Hieu'];
       $brand->quocgia_status = $data['status_Thuong_Hieu'];
       $brand->save();
       Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
      return Redirect::to('Liet-Ke-Quoc-Gia');
  }
    
   public function Xoa_Quoc_Gia($quocgia_id){
       $this->AuthLogin();
       DB::table('quocgia')->where('quocgia_id',$quocgia_id)->delete();
       Session::put('message','Xóa thương hiệu sản phẩm thành công');
       return Redirect::to('Liet-Ke-Quoc-Gia');
   }
public function film_quocgia(Request $request, $quocgia_id){
         $quangcao = DB::table('quangcao')->where('product_status','1')->orderby('id','desc')->limit(1)->get();
          $url_canonical = $request->url();
         $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
        $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->get();
           $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
             
          $all_product = DB::table('film')->join('quocgia','film.quocgia_id','=','quocgia.quocgia_id')->where('quocgia.quocgia_id',$quocgia_id)->get();
       
        return view('trangchu.quocgia.quocgia')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('all_product',$all_product)->with('url_canonical',$url_canonical)->with('quangcao',$quangcao);;
        
    }
}