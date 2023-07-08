@extends('giaodien.trangchinh')
@section('trangchu')

 @foreach($details_film as $key => $pro)
  
    <section class="section section--details section--bg" data-bg="img/section/details.jpg">
    <!-- details content -->
    <div class="container">
      <div class="row">
        <!-- title -->
        <div class="col-12">
          <h1 class="section__title">{{$pro->film_ten}}</h1>
        </div>
        <!-- end title -->

        <!-- content -->
        <div class="col-12 col-lg-6">
          <div class="card card--details">
            <div class="row">
              <!-- card cover -->
              <div class="col-12 col-sm-5 col-lg-6 col-xl-5">
                <div class="card__cover">
                  <center> <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" alt=""  width="250" height="400" /></center>
                  <span class="card__rate card__rate--green">{{$rating}} sao</span>
                </div>
              </div>
              <!-- end card cover -->

              <!-- card content -->
              <div class="col-12 col-sm-7 col-lg-6 col-xl-7">
                <div class="card__content">
                  <ul class="card__meta">
                    <li><span>Director:</span> {{$pro->film_tacgia}}</li>
                    <li><span>Cast:</span>{{$pro->film_dienvien}} </li>
                   
                    <li><span>Release year:</span> {{$pro->year_ten}}</li>
                    <li><span>Running time:</span> {{$pro->time}}</li>
                    <li><span>Country:</span> <a href="#">{{$pro->quocgia_ten}}</a></li>
                  </ul>
                  <div class="card__description">
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                  </div>
                  <ul><form method="post">
  {{ csrf_field() }}
   <div class="form-group">
      
      <label for="quantity" style="color: white;font-size: 15px">Đánh Gía:</label>
  <input type="number"  name="danhgia" min="1" max="5"style="color: black;font-size: 20px">
  <input type="submit"style="color: black;font-size: 20px">
    </div>
  </form></ul>
                                    <span><a href="{{URL::to('/watch/'.$pro->film_id)}}" class="btn btn-success btn-lg btn-block successbtn">Xem ngay</a></span><<br><br>
                                  
                </div>
              </div>
              <!-- end card content -->
            </div>
          </div>
        </div>
        <!-- end content -->

        <!-- player -->
        <div class="col-12 col-lg-6">

        <div class="moviedetailinfor">
                    <div class="video-responsive" id="myVideo">
                        {!! $pro->link1 !!}
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <button class="switch btn btn-info infobtn"><i class="fas fa-lightbulb"></i> <b>Tắt
                                        đèn</b></button>
                            </div>
                        </div>
                        
                        </div>
               </div>
        </div>
        <!-- end player -->
      </div>
    </div>
    <!-- end details content -->
  </section>
  @endforeach  
    <hr>
  <div class="container">
<div class="row">
    <div class="col-sm-6">
        <center><h1 style="color: white">Review</h1></center>
      
                   <div class="col-md-12 text">


@foreach($comment as $key => $pro)


                    <ul class="comments__list">
                      
                      <li class="comments__item">
                        <div class="comments__autor">
                         
                          <span class="comments__name">{{$pro->name}}</span>
                          <span class="comments__time">02.08.2018, 15:24</span>
                        </div>
                        <p class="comments__text">{{$pro->com}}</p>
                        <div class="comments__actions">
                          <div class="comments__rate">
                            <button type="button"><i class="icon ion-md-thumbs-up"></i>74</button>

                            <button type="button">13<i class="icon ion-md-thumbs-down"></i></button>
                          </div>
                          
                          <button type="button"><i class="icon ion-ios-share-alt"></i>Reply</button>
                          <button type="button"><i class="icon ion-ios-quote"></i>Quote</button>
                        </div>
                      </li>
                    </ul>
                    @endforeach
                                  <div class="col-md-12 text-center">
                @if ($admin_id = Session::get('admin_name'))
              
           
           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Review
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: black">
  <div class="modal-dialog modal-dialog-centered" role="document">
 <form method="post">
  {{ csrf_field() }}
    <div class="modal-content">
      <div class="modal-header">
       
        <h5 class="modal-title" id="exampleModalLongTitle">Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color: black">
          <input type="text" class="form__input" placeholder="Name" style="color: white" name="name">
          <textarea class="form__textarea" placeholder="Review" style="color: white" name="com"></textarea>
                                           
           <button type="submit" class="form__btn">Send</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>
          
                @else
                
                <a href="{{URL::to('/dangnhap')}}" style="font-size: 20px"> <img src="public/img/hello.gif" style="padding-right: 10px; width: 50px;">Đăng Nhập Để Review</a>

               
              
                @endif


            </div>
                             
              <!-- dropdown -->
              
              <!-- end dropdown -->

              
            </div>

                             
              <!-- dropdown -->
              
              <!-- end dropdown -->

              
            </div>
         
    <div class="col-sm-6">
        <center><h1 style="color: white">Bình Luận</h1></center>
       <<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=863334584434038&autoLogAppEvents=1" nonce="W3O9PP9d" style="color: white"></script>
 <div class="fb-comments" data-href="{{ $url_canonical}}" data-width="" data-numposts="10" style="color: white"></div>
    </div>
</div>
  </div>
 
   
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
    <div class="catalog" style="margin-bottom: : 100px">
    <div class="container">
          <center>
            
            <h1 style="color: white;font-size: 
            30px">Phim Cùng Thể Loại</h1>
            <hr>
          </center>


    
      
      <div class="row"> <!-- card -->
      
        <!-- end card -->

        <!-- card -->
        

      @foreach($filmlienquan as $key => $pro)
          <div class="col-6 col-sm-4 col-md-3 col-xl-2">
              <div class="card">
                 
                <div class="card__cover">
                                <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" alt=""  width="200" height="300" />

                  <a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}" class="card__play">
                    <i class="icon ion-ios-play"></i>
                  </a>
                 
                </div>
                <div class="card__content">
                  <h3 class="card__title"><a href="#">{{$pro->film_ten}}</a></h3>
                  <span class="card__category">
                    <a href="#">{{$pro->time}}</a>
                   
                  </span>
                </div>
             
              </div>
            </div>
     
        <!-- end card -->
           
           
      @endforeach
  <!-- end card -->

        
        <!-- end paginator -->
      </div>
  </section>
    @endsection