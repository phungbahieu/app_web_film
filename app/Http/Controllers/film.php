<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use  Illuminate\Support\Facades\File;
use App\Models\useradmin;
use App\Models\danhgia;
use App\Models\comment;


class film extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
        public function Them_film(){
          $this->AuthLogin();
        $theloai = DB::table('theloai')->orderby('theloai_id','desc')->get();
        $year = DB::table('year')->orderby('year_id','desc')->get();
          $quocgia = DB::table('quocgia')->orderby('quocgia_id','desc')->get();
        return view('admin.film.Them-film')->with('theloai', $theloai)->with('year',$year)->with('quocgia',$quocgia);
        }
        public function Luu_film(Request $request){
            $this->AuthLogin();
           $data = array();
           $data['film_ten'] = $request->product_name;
           $data['film_tacgia'] = $request->tacgia;
           $data['film_dienvien'] = $request->dienvien;
           $data['time'] = $request->time;
         
            $data['film_content'] = $request->product_content;
            $data['theloai_id'] = $request->product_cate;
            $data['quocgia_id'] = $request->quocgia;
            $data['year_id'] = $request->product_brand;
            $data['link1'] = $request->link;
            $data['link2'] = $request->link1;
            $data['link3'] = $request->link2;
            $data['product_status'] = $request->product_status;
            $data['product_image'] = $request->film;
            $get_image = $request->file('product_image');
            if($get_image){
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/product',$new_image);
                $data['product_image'] = $new_image;
                DB::table('film')->insert($data);
                Session::put('message','Thêm film thành công');
                return Redirect::to('Them-film');
            }
            else{    
                Session::put('message','khong thanh cong');
                return Redirect::to('Them-film');    
            }
       } 
       public function Liet_Ke_film(){
            $this->AuthLogin();
            $all_product = DB::table('film')->join('theloai','theloai.theloai_id','=','film.theloai_id')->join('year','year.year_id','=','film.year_id')->join('quocgia','quocgia.quocgia_id','=','film.quocgia_id')->orderby('film.film_id','desc')->get();
            $manager_product = view('admin.film.Liet-Ke-film')->with('all_product',$all_product);
            return view('admin_layout')->with('admin.film.Liet-Ke-film', $manager_product);
        }       
        public function An_film($film_id){
            $this->AuthLogin();
            DB::table('film')->where('film_id',$film_id)->update(['product_status'=>0]);
        Session::put('message','Ẩn  thành công');
        return Redirect::to('Liet-Ke-film');
            }
        public function Hien_film($film_id){
            $this->AuthLogin();
        DB::table('film')->where('film_id',$film_id)->update(['product_status'=>1]);
        Session::put('message','Hien  thành công');
        return Redirect::to('Liet-Ke-film');
        }
        public function Sua_film($film_id){
            $this->AuthLogin();
           $theloai = DB::table('theloai')->orderby('theloai_id','desc')->get(); 
           $year = DB::table('year')->orderby('year_id','desc')->get(); 
            $quocgia = DB::table('quocgia')->orderby('quocgia_id','desc')->get(); 
   
           $sua_sanpham = DB::table('film')->where('film_id',$film_id)->get();
   
           $manager_product  = view('admin.film.Sua-film')->with('sua_sanpham',$sua_sanpham)->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia);
   
           return view('admin_layout')->with('admin.film.Sua-film', $manager_product);
       }


       public function Cap_Nhat_film(Request $request,$film_id){
            $this->AuthLogin();


           $data = array();
            
           $data['film_ten'] = $request->product_name;
          
           $data['film_content'] = $request->sanpham_content;
           $data['theloai_id'] = $request->theloai;
           $data['quocgia_id'] = $request->quocgia;
           $data['year_id'] = $request->year;
           $data['link1'] = $request->link;
          $data['link2'] = $request->link1;
                $data['link3'] = $request->link2;
           $data['film_tacgia'] = $request->tacgia;
           $data['film_dienvien'] = $request->dienvien;
           $data['time'] = $request->time;
           $get_image = $request->file('product_image');
            $file_cu = $request->tenphoto; 
   
           if($get_image){
                       $get_name_image = $get_image->getClientOriginalName();
                       if($get_name_image!=$file_cu)
                           {
                        File::delete('public/uploads/product/'.$file_cu);
                           }
                       $name_image = current(explode('.',$get_name_image));
                       $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                       $get_image->move('public/uploads/product',$new_image);
                       $data['product_image'] = $new_image;
                       DB::table('film')->where('film_id',$film_id)->update($data);
                       Session::put('message','Cập nhật film thành công');
                       return Redirect::to('Liet-Ke-film');
         
            }
               
           DB::table('film')->where('film_id',$film_id)->update($data);
           Session::put('message','Cập nhật film thành công');
           return Redirect::to('Liet-Ke-film');
       }
       public function Xoa_film($film_id){
           $this->AuthLogin();
           DB::table('film')->where('film_id',$film_id)->delete();
           Session::put('message','Xóa  thành công');
           return Redirect::to('Liet-Ke-film');
       }
        public function detailfilm( Request  $request ,$film_id){
         
      $user = useradmin::where('admin_id')->get();
       $url_canonical = $request->url();

          $comment = DB::table('com')->where('film_id',$film_id)->get();

          $rating=DB::table('danhgia')->where('film_id',$film_id)->avg('danhgia');
          $rating=round($rating);
          $quangcao = DB::table('quangcao')->where('product_status','1')->orderby('id','desc')->limit(1)->get();
          $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
          $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->get();
          $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
            $details_film = DB::table('film')->join('theloai','theloai.theloai_id','=','film.theloai_id')->join('year','year.year_id','=','film.year_id')->join('quocgia','quocgia.quocgia_id','=','film.quocgia_id')->where('film.film_id',$film_id)->get();
              foreach($details_film as $key => $value){
               
            $film_id=  $value->film_id;
            $theloai_id = $value->theloai_id;
       
            }
           $filmlienquan = DB::table('film')->join('theloai','theloai.theloai_id','=','film.theloai_id')->where('theloai.theloai_id',$theloai_id)->whereNotIn('film.film_id',[$film_id])->limit(6)->get();



         
        
        return view('trangchu.chitietphim.detailfilm')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('details_film',$details_film)->with('url_canonical',$url_canonical)->with('quangcao',$quangcao)->with('rating',$rating)->with('comment',$comment)->with('filmlienquan',$filmlienquan);;
        }
         
        public function watchfilm( Request  $request ,$film_id){
          $comment = DB::table('com')->where('film_id',$film_id)->get();
          $url_canonical = $request->url();
         
        $quangcao = DB::table('quangcao')->where('product_status','1')->orderby('id','desc')->limit(1)->get();
        $theloai = DB::table('theloai')->where('theloai_status','1')->orderby('theloai_id','desc')->get();
        $year= DB::table('year')->where('year_status','1')->orderby('year_id','desc')->get();
         $quocgia= DB::table('quocgia')->where('quocgia_status','1')->orderby('quocgia_id','desc')->get();
            $watch = DB::table('film')->join('theloai','theloai.theloai_id','=','film.theloai_id')->join('year','year.year_id','=','film.year_id')->where('film.film_id',$film_id)->get();
              foreach($watch as $key => $value){
                  $film_id=  $value->film_id;
                
                 $theloai_id = $value->theloai_id;
            }
              $filmlienquan1 = DB::table('film')->join('theloai','theloai.theloai_id','=','film.theloai_id')->where('theloai.theloai_id',$theloai_id)->whereNotIn('film.film_id',[$film_id])->limit(6)->get();
           
        
        return view('trangchu.chitietphim.watch')->with('theloai',$theloai)->with('year',$year)->with('quocgia',$quocgia)->with('watch',$watch)->with('url_canonical',$url_canonical)->with('quangcao',$quangcao)->with('quangcao',$quangcao)->with('filmlienquan1',$filmlienquan1)->with('comment',$comment);;
        }
        public function AuthLogin1(){
  
        $admin_id = Session::get('admin_id');
        if($admin_id){
        return Redirect::to('/chi-tiet-film');
        }else{
        return Redirect::to('dangnhap')->send();
        }
        }
         

        public function comment(Request $request,$id){
         
            
           $comment = new comment;
           $comment->name =$request->name;
            $comment->com =$request->com;
            $comment->film_id =$request->id;
            
             $comment->save();
       
      
        return back();
        }
          
        

        public function Liet_Ke_com(){
            $film = DB::table('film')->where('product_status','1')->orderby('film_id','desc')->get();
            $com = comment::orderBy('com_id','DESC')->get();
            $Lietke_com  = view('admin.quanlicomment.Liet-Ke-comment')->with('Lietke_com',$com)->with('film', $film);
      return view('admin_layout')->with('Lietke_com', $Lietke_com)->with('film', $film);

        }  
         public function Xoa($id){
          
         DB::table('com')->where('com_id',$id)->delete();
           Session::put('message','Xóa  thành công');
           return Redirect::to('Liet-Ke-comment');
       }
        public function rating(Request $request,$id){
         
            
           $rating = new danhgia;
           
            $rating->danhgia =$request->danhgia;
            $rating->film_id =$request->id;
            
            $rating->save();
       
      
        return back();
        }
           public function Liet_Ke_danhgia(){
            $film = DB::table('film')->where('product_status','1')->orderby('film_id','desc')->get();
            $com = danhgia::orderBy('danhgia_id','DESC')->get();
            $Lietke_com  = view('admin.quanlidanhgia.Liet-Ke-danhgia')->with('Lietke_com',$com)->with('film', $film);
      return view('admin_layout')->with('Lietke_com', $Lietke_com)->with('film', $film);

        }  
            public function Xoadanhgia($id){
          
         DB::table('danhgia')->where('danhgia_id',$id)->delete();
           Session::put('message','Xóa  thành công');
           return Redirect::to('Liet-Ke-danhgia');
       }
}
