<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use  Illuminate\Support\Facades\File;
class quangcao extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
        public function Them_Qc(){
          $this->AuthLogin();
        
        return view('admin.quanliquangcao.Them-Qc');
        }
        public function Luu_Qc(Request $request){
            $this->AuthLogin();
           
           $data = array();
           $data['quangcao_ten'] = $request->product_name;
           
           $data['quangcao_link'] = $request->link;
           $data['product_status'] = $request->product_status;
           $data['product_image'] = $request->film;
           $get_image = $request->file('product_image');
        
        
            if($get_image){
                $get_name_image = $get_image->getClientOriginalName();
                
                $name_image = current(explode('.',$get_name_image));
                $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/product',$new_image);
                $data['product_image'] = $new_image;
                DB::table('quangcao')->insert($data);
                Session::put('message','Thêm quang cao thành công');
                return Redirect::to('Them-Quang-Cao');
            }
            else{    
                Session::put('message','khong thanh cong');
                return Redirect::to('Them-Quang-Cao'); 
                
            }
            
           
       } 
      }
