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
use App\Models\useradmin;
use Cart;
class yeuthich extends Controller

{   public function AuthLogin(){
	
        $admin_id = Session::get('admin_id');
        if($admin_id){
        return Redirect::to('/chi-tiet-film');
        }else{
        return Redirect::to('dangnhap')->send();
        }
        }
    public function luu_film(Request $request){
    	 $this->AuthLogin();

    	$filmlove = $request->productid_hidden;
    	
    	$data = DB::table('film')->where('film_id',$filmlove)->first(); 
    	
        $url_canonical = $request->url();
        Cart::add('293ad', 'Product 1', 1, 9.99, 550);

        $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
        $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->get();
        $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
      return view('trangchu.yeuthich.yeuthich')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('url_canonical',$url_canonical)->with('data',$data);;
    }

}
