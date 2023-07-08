@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm user
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
                                <form role="form" action="{{URL::to('/Luu-user')}}" method="post">
                                    {{ csrf_field() }}
                               <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text"  name="email" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">pass</label>
                                    <input type="text" name="pass" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">phone</label>
                                    <input type="text"  name="phone" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                                </div>
                               
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm user</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection