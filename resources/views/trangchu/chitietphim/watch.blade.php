@extends('giaodien.trangchinh')
@section('trangchu')
 @foreach($watch as $key => $pro)
<section class="section section--first section--bg" >
     <div class="faq" style=" color: black" >
    <div class="container" style="margin: auto;">
        <h1 class="section__title">{{$pro->film_ten}}</h1>
        <div class="row ">
            <div class="col-md-8 ">
                
                <h3></h3>
               
                <h4>
                    <b style="margin-right: 5px;"></b>
                </h4><br>
                <div class="moviedetailinfor">
                    <div class="video-responsive" id="myVideo">
                        {!! $pro->link2 !!}
                        
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
<div class="col-md-4 ">

    <center>
            
            <h1 style="color: white;font-size: 
            30px">Review</h1>
            <hr>
          </center>

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
       
        <h5 class="modal-title" id="exampleModalLongTitle">ten</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color: black">
          <input type="text" class="form__input" placeholder="Title" style="color: white" name="name">
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
           
</div>
</div></div></div>
  </section>
  
	   @endforeach
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
        

      @foreach($filmlienquan1 as $key => $pro)
        
        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
          
          <a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}">
            <div class="card">
            <div class="card__cover">
              
                
              <a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}" >
                               <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" alt=""  width="300" height="300" />
              </a><a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
              <span class="card__rate card__rate--green">7.1</span>
            </div>
            <div class="card__content">
              <a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}" >
                              <h3 class="card__title"><a href="#">{{$pro->film_ten}}</a></h3>
                <span class="card__category">
                <a href="#">{{$pro->time}}</a>
              </span>
              </a>
              
              
            </div>
          </div>
          </a>
          
        </div>
        <!-- end card -->
           
      @endforeach
  <!-- end card -->

        
        <!-- end paginator -->
      </div>
  </section>
    @endsection