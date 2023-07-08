@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật thể loại
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
                            @foreach($sua_year as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/Cap-Nhat-Year/'.$edit_value->year_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thể loại</label>
                                    <input type="text" value="{{$edit_value->year_ten}}" name="Ten_Thuong_Hieu" class="form-control" id="exampleInputEmail1" >
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="status_Thuong_Hieu" class="form-control input-sm m-bot15">
                                             @if($edit_value->year_status==1)
                                            <option selected value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                             @else
                                            <option value="1">Hiển thị</option>
                                            <option selected value="0">Ẩn</option>
                                            @endif
                                                                                     
                                    </select>
                                </div>
                                <button type="submit" name="Cap_Nhat_Year" class="btn btn-info">Cập nhật thể loại</button>
                                </form>
                            </div>
                            @endforeach 

                           
                        </div>
                    </section>

            </div>
@endsection