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
use App\Models\danhgia;


class HomeController extends Controller
{
    //
    
   
    public function index(Request $request){

         $url_canonical = $request->url();
           $quangcao = DB::table('quangcao')->where('product_status','1')->orderby('id','desc')->limit(1)->get();
         
      
        $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
        $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->get();
        $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
        $film = DB::table('film')->where('product_status','1')->orwhere('film_id','desc')->limit(20)->get();
        foreach ($film as $key => $pro) {
           $film_id=  $pro->film_id;
            $rating=DB::table('danhgia')->where('film_id',$film_id)->avg('danhgia');
        
        }
        $rating=DB::table('danhgia')->where('film_id',$film_id)->avg('danhgia');
        $rating=round($rating);
        $randommovie = film::inRandomOrder()->limit(6)->get();
       
        return view('trangchu.home')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('film',$film)->with('url_canonical',$url_canonical)->with('quangcao',$quangcao)->with('randommovie',$randommovie)->with('rating',$rating);;
    
    }
   
        
    
    public function Goifilm(){
        return view('trangchu.Goifilm');
        
    }
    public function seach(Request $request){
        $quangcao = DB::table('quangcao')->where('product_status','1')->orderby('id','desc')->limit(1)->get();
        $url_canonical = $request->url();
        $keywords= $request->keywords_submit;
        $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
        $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->get();
        $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
        $seach_by = DB::table('film')->where('film_ten','like','%'.$keywords.'%')->get();
        return view('trangchu.seach')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('seach_by',$seach_by)->with('url_canonical',$url_canonical)->with('quangcao',$quangcao);;  
    }

    public function fetch(Request $request)
    {
      $keywords= $request->keywords_submit;
     if($request->get('query'))
     {
      $query = $request->get('query');
      $seach_by = DB::table('film')
        ->where('film_ten', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($seach_by as $row)
      {
       $output .= '
       <li class="li_seach"><a  >'.$row->film_ten.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }




    public function Profile(){
        return view('trangchu.Profile');
        
    }
    public function Forgotpassword(){
        return view('trangchu.Forgotpassword');
        
    }
    
     public function login(){
        return view('auth.singin');
        
    }
     public function Luu_login(Request $request){
       
        $data = $request->all();

        $brand = new useradmin;
        $brand->admin_email = $data['email'];
        $brand->admin_password= $data ['pass'];
        $brand->admin_phone= $data['phone'];
        $brand->admin_name= $data['name'];
        $brand->save();

        Session::put('message','Thêm thương hiệu sản phẩm thành công');
        return Redirect::to('login');
    }
     public function dangnhap(Request $request){

      return view('auth.singup');

      
    }
     public function dangnhap1(Request $request){


        
       
      
        $admin_email = $request->admin_email;
      $admin_password = $request->admin_password;
      $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where ('admin_password',$admin_password)->first();
      if($result){
          Session::put('admin_name',$result->admin_name);
          Session::put('admin_id',$result->admin_id);
           return Redirect::to('trangchu');
         
      }else{
          Session::put('message','Có thể bạn đã nhập sai mật khẩu hoạc tài khoản E-mail.Hãy nhập lại!');
          return Redirect::to('/dangnhap');
      }
      return view('trangchu');

}
  public function Dangxuat(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/trangchu');

    }
     public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
        return Redirect::to('muclucfilm');
        }else{
        return Redirect::to('dangnhap')->send();
        }
        }
}
