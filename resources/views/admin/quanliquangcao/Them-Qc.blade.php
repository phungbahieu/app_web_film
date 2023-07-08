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
                                <form role="form" action="{{URL::to('/Luu-Qc')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Quảng Cáo</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                               
                                  
                                  <div class="form-group">
                                    <label for="exampleInputEmail3">Hình ảnh </label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail3">
                                </div>
                               
                                 
                                   
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">link</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="link" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_product" class="btn btn-info">Thêm Quảng Cáo</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection