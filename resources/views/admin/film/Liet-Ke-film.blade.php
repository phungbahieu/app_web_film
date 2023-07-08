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
            <th>Tên Phim</th>
           
            <th>Giá</th>
            <th>Hình phim</th>
            <th>Thể Loại</th>
            <th>Year</th>
             <th>Quốc Gia</th>
              <th>Tác Gỉa</th>
               <th>Diễn Viên</th>
                <th>Time</th>
                 <th>Trailler</th>
                  <th>Link1</th>
                   <th>Link2</th>
                  
                   <th>Conten FILM</th>
            
            <th>Hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $pro->film_ten}}</td>
            
            <td><img src="public/uploads/product/{{ $pro->product_image}}" height="100" width="100"></td>
            <td>{{ $pro->theloai_ten }}</td>
            <td>{{ $pro->year_ten }}</td>
            <td>{{ $pro->quocgia_ten }}</td>
              <td>{{ $pro->film_tacgia}}</td>
              <td>{{ $pro->film_dienvien }}</td>
              <td>{{ $pro->time }}</td>
              <td>{{ $pro->link1 }}</td>
              <td>{{ $pro->link2 }}</td>
              <td>{{ $pro->link3 }}</td>
              
              <td>{{ $pro->film_content }}</td>



            <td><span class="text-ellipsis">
              <?php
               if($pro->product_status==1){
                ?>
                <a href="{{URL::to('/An-film/'.$pro->film_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                 }else{
                ?>  
                 <a href="{{URL::to('/Hien-film/'.$pro->film_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
               }
              ?>
            </span></td>
            <td>
              <a href="{{URL::to('/Sua-film/'.$pro->film_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/Xoa-film/'.$pro->film_id)}}" class="active styling-edit" ui-toggle-class="">
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