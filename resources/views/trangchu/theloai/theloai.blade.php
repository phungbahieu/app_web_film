@extends('giaodien.trangchinh')
@section('trangchu')

	
    <section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="catalog" style="margin-bottom: : 100px">
		<div class="container">
          <center>
          	 <center>
            
            <h1 style="color: white;font-size: 
            30px">Phim Mới</h1>
            <hr>
          </center>

          	
          </center>


		
			
			<div class="row">	<!-- card -->
			
				<!-- end card -->

				<!-- card -->
				

			@foreach($all_product as $key => $pro)
				
				<div class="col-6 col-sm-4 col-md-3 col-xl-2">
					
					<a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}">
							<div class="card">
						<div class="card__cover">
							
								
							<a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}" >
							 <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" alt=""  width="180" height="270" />
							</a>
							<a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							
						</div>
						<div class="card__content">
							<a href="{{URL::to('/chi-tiet-film/'.$pro->film_id)}}" >
															<h3 class="card__title"><a href="#">{{$pro->film_ten}}</a></h3>
								<span class="card__category">
								<a href="#">{{$pro->time}}</a>
							</span>
						
							
							
						</div>
					</div>
					</a>
					
				</div>
           
			@endforeach
	<!-- end card -->

				
				<!-- end paginator -->
			</div>
	</section>
    @endsection