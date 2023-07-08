@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm Phim
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
                                <form role="form" action="{{URL::to('/Luu-film')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên film</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                               
                               
                                     
                                  <div class="form-group">
                                    <label for="exampleInputEmail3">Hình ảnh film</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail3">
                                </div>
                               
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung film</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_content"  id="editor4" placeholder="Nội dung sản phẩm"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor4' );
                                    </script>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">thể loại</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($theloai as $key => $cate)
                                            <option value="{{$cate->theloai_id}}">{{$cate->theloai_ten}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">year</label>
                                      <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($year as $key => $brand)
                                            <option value="{{$brand->year_id}}">{{$brand->year_ten}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">quocgia</label>
                                      <select name="quocgia" class="form-control input-sm m-bot15">
                                        @foreach($quocgia as $key => $brand)
                                            <option value="{{$brand->quocgia_id}}">{{$brand->quocgia_ten}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail4"> Đạo Diễn</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="tacgia" class="form-control" id="exampleInputEmail4" placeholder="Tên danh mục">
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail4">Diễn Viên</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="dienvien" class="form-control" id="exampleInputEmail4" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail4">Time</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="time" class="form-control" id="exampleInputEmail4" placeholder="Tên danh mục">
                                </div>
                                   
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Trailler</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="link" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">link1</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="link1" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">link2</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="link2" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection