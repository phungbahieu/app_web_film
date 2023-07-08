@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê Phim
    </div>
  
    <div class="table-responsive">
                      <?php

                            use Illuminate\Support\Facades\Session;
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>film_id </th>
           
            <th>Đánh Gía</th>
            
           
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($Lietke_com as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            
            
           <td>{{ $pro->film_id}}</td>
            
            <td>{{ $pro->danhgia}}</td>
            


           
            <td>
              
              <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/Xoa-danhgia/'.$pro->danhgia_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection