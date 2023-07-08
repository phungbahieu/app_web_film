<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\year;
session_start();
class year1 extends Controller

{
   
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('Quanli-admin');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function Them_Year(){
        $this->AuthLogin();
    	return view('admin.year.Them-Year');
    }
      public function Liet_ke_Year(){
        $this->AuthLogin();
    	//$all_brand_product = DB::table('tbl_brand')->get(); //static huong doi tuong
        // $all_brand_product = Brand::all(); 
        $year = Year::orderBy('year_id','DESC')->get();
    	$Lietke_year  = view('admin.year.Liet-ke-Year')->with('year',$year);
    	return view('admin_layout')->with('admin.year.Liet-ke-Year', $Lietke_year);


    }

    public function Luu_Year(Request $request){
        $this->AuthLogin();
        $data = $request->all();

        $brand = new year;
        $brand->year_ten = $data['Ten_Thuong_Hieu'];
        $brand->year_status = $data['status_Thuong_Hieu'];
        $brand->save();
       
    	// $data = array();
    	// $data['brand_name'] = $request->brand_product_name;
        // $data['brand_slug'] = $request->brand_slug;
    	// $data['brand_desc'] = $request->brand_product_desc;
    	// $data['brand_status'] = $request->brand_product_status;
    	// DB::table('tbl_brand')->insert($data);
        
    	Session::put('message','Thêm thương hiệu sản phẩm thành công');
    	return Redirect::to('Them-Year');
    }
    public function An_Year($year_id){
       $this->AuthLogin();
        DB::table('year')->where('year_id',$year_id)->update(['year_status'=>0]);
       Session::put('message','Ẩn thương hiệu sản phẩm thành công');
       return Redirect::to('Liet-Ke-Year');
    }
   public function Hien_Year($year_id){
       $this->AuthLogin();
       DB::table('year')->where('year_id',$year_id)->update(['year_status'=>1]);

       Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
            return Redirect::to('Liet-Ke-Year');


   }

   public function Sua_Year($year_id){
      $this->AuthLogin();
       $sua_year = year::where('year_id',$year_id)->get();
      $sua_year_ex  = view('admin.year.Sua-Year')->with('sua_year',$sua_year);

      return view('admin_layout')->with('admin.year.Sua-Year', $sua_year_ex);
  }
  public function Cap_Nhat_Year(Request $request,$year_id){
       $this->AuthLogin();
       $data = $request->all();
       $brand = year::find($year_id);
      $brand->year_ten = $data['Ten_Thuong_Hieu'];
       $brand->year_status = $data['status_Thuong_Hieu'];
       $brand->save();
       Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
     return Redirect::to('Liet-Ke-Year');
  }
  public function Xoa_Year($year_id){

      $this->AuthLogin();
            DB::table('year')->where('year_id',$year_id)->delete();

      Session::put('message','Xóa thương hiệu sản phẩm thành công');

      return Redirect::to('Liet-Ke-Year');

}
public function film_year(Request $request, $year_id){
         $quangcao = DB::table('quangcao')->where('product_status','1')->orderby('id','desc')->limit(1)->get();
          $url_canonical = $request->url();
         $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
        $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->get();
           $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
             
          $all_product = DB::table('film')->join('year','film.year_id','=','year.year_id')->where('year.year_id',$year_id)->get();
       
        return view('trangchu.year.year')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('all_product',$all_product)->with('url_canonical',$url_canonical)->with('quangcao',$quangcao);;
        
    }
}