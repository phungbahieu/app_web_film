@extends('giaodien.trangchinh')
@section('trangchu')
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
	<div class="catalog"  >
		<div class="container">



			<h2 class="section__title">Phim Hài</h2>
			@foreach($data as $key => $pro)
			<div class="row">
				<?php
				$content = Cart::content();
				echo "<pre>";
				print_r($content);
				echo "<pre>";
				
				?>
			
				<div class="col-6 col-sm-3 col-md-3 col-xl-2">
					
					
						<div class="card card--big">
						<div class="card">
							
								 <img src="" alt=""  width="200" height="300" />
							<a href="" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
							<span class="card__rate card__rate--green">7.1</span>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"></a></h3>
								<span class="card__category">
								<a href="#"></a>
							</span>
							<span class="card__category">
								
								 
						</div>
						
					</div>
					</a>
					
				</div>
				<!-- end card -->

				
				<!-- end paginator -->
			</div>
			@endforeach
		</div>
		
	</section>
	
	
	 

    @endsection