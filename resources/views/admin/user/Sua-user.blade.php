@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật user
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
                            @foreach($user as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/Cap-Nhat-user/'.$edit_value->admin_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{$edit_value->admin_email}}" name="email" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">pass</label>
                                    <input type="text" value="{{$edit_value->admin_password }}" name="pass" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">phone</label>
                                    <input type="text" value="{{$edit_value->admin_phone}}" name="phone" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" value="{{$edit_value->admin_name}}" name="name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 

                               
                               
                                <button type="submit" name="Cap_Nhat_user" class="btn btn-info">Cập nhật user</button>
                                </form>
                            </div>
                            @endforeach 

                           
                        </div>
                    </section>

            </div>
@endsection