@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật film
                        </header>
                         <?php
                         use Illuminate\Support\Facades\Session;
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                @foreach($sua_sanpham as $key => $pro)
                                <form role="form" action="{{URL::to('/Cap-Nhat-film/'.$pro->film_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên film</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value="{{$pro->film_ten}}">
                                </div>
                               
                                     
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh film</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">

                                     <input type="hidden" name="tenphoto" value="{{$pro->product_image}}" class="form-control">

                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung films</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="sanpham_content" id="exampleInputPassword1" >{{$pro->film_content}}</textarea>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">thể loại</label>
                                      <select name="theloai" class="form-control input-sm m-bot15">
                                      @foreach($theloai as $key => $theloai_ex)
                                            @if($theloai_ex->theloai_id==$pro->theloai_id)
                                            <option selected value="{{$theloai_ex->theloai_id}}">{{$theloai_ex->theloai_ten}}</option>
                                            @else
                                            <option value="{{$theloai_ex->theloai_id}}">{{$theloai_ex->theloai_ten}}</option>
                                            @endif
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Year</label>
                                      <select name="year" class="form-control input-sm m-bot15">
                                        @foreach($year as $key => $year_ex)
                                             @if($year_ex->year_id==$pro->year_id)
                                            <option selected value="{{$year_ex->year_id}}">{{$year_ex->year_ten}}</option>
                                             @else
                                            <option value="{{$year_ex->year_id}}">{{$year_ex->year_ten}}</option>
                                             @endif
                                        @endforeach
                                            
                                    </select>
                                </div>
                                   <div class="form-group">
                                    <label for="exampleInputPassword1"> Quốc Gia</label>
                                      <select name="quocgia" class="form-control input-sm m-bot15">
                                        @foreach($quocgia as $key => $quocgia_ex)
                                             @if($quocgia_ex->quocgia_id==$pro->quocgia_id)
                                            <option selected value="{{$quocgia_ex->quocgia_id}}">{{$quocgia_ex->quocgia_ten}}</option>
                                             @else
                                            <option value="{{$quocgia_ex->quocgia_id}}">{{$quocgia_ex->quocgia_ten}}</option>
                                             @endif
                                        @endforeach
                                            
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail4">Tác Gỉa</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="tacgia" class="form-control" id="exampleInputEmail4" placeholder="Tên danh mục"  value="{{$pro->film_tacgia}}">
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail4">Diễn Viên</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="dienvien" class="form-control" id="exampleInputEmail4" placeholder="Tên danh mục"  value="{{$pro->film_dienvien}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail4">Time</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="time" class="form-control" id="exampleInputEmail4" placeholder="Tên danh mục" value="{{$pro->time}}">
                                </div>
                                   
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">trailler</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="link" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục"  value="{{$pro->link1}}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">link1</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="link1" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value="{{$pro->link2}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">link2</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="link2" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value="{{$pro->link3}}">
                                </div>
                               
                                <button type="submit" name="Them-San-Pham" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                                  @endforeach
                            </div>
                        </div>
                    </section>

            </div>
@endsection