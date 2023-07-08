@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm thể loại
                        </header>
                         <?php
                         use Illuminate\Support\Facades\Session;
                            $message = Session::get('message');
                            if($message){
                               
                               
                                echo ' <center>
                                            <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <strong>Success!</strong> '.$message.'
                                            </div>
                                       </center>';
                              Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/Luu-Year')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thể loại</label>
                                    <input type="text" name="Ten_Thuong_Hieu" class="form-control" id="exampleInputEmail1" placeholder="Tên Thương Hiệu">
                                </div>
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="status_Thuong_Hieu" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm thể loại</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection