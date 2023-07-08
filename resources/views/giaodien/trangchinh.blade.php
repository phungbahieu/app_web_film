<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.0/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 16:19:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <title>@yield('PHIM LẬU ')</title>
  <base href="{{asset('public/')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       

	<link rel="stylesheet" href="{{asset('public/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/css/jquery.mCustomScrollbar.min.css')}}">
	<script type="text/javascript" src="http://vipprao.wap.sh/holiday_tet/hoa-mai-roi.js"></script>
<script type="text/javascript" src="http://lampro2k.viwap.com/js/Tuyet-roi.js"></script>
	<link rel="stylesheet" href="{{asset('public/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/default-skin.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>


	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('public/icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<meta property="og:url" content="{{$url_canonical}}">
	
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	
</head>

<body class="body" style="background-color: black; margin: auto;">

<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="{{URL::to('/trangchu')}}" class="header__logo">
							<img src="{{asset('public/img/logo2.png')}}" alt="">
						</a>
						<!-- end header logo -->

						
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="{{URL::to('/trangchu')}}" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
									<li><a href="{{URL::to('/trangchu')}}">Home slideshow bg</a></li>
									
								</ul>
							</li>s
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể Loại</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									  @foreach($theloai as $key => $theloai_ex)
                                         <div class="col-sm-10">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{URL::to('/film-theloai/'.$theloai_ex->theloai_id)}}">{{$theloai_ex->theloai_ten}}</a></li>
                                           </ul>
                                    </div>
                                    @endforeach
								</ul>
							</li>
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Năm</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									  @foreach($year as $key => $theloai_ex)
                                         <div class="col-sm-10">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{URL::to('/film-year/'.$theloai_ex->year_id)}}">{{$theloai_ex->year_ten}}</a></li>
                                           </ul>
                                    </div>
                                    @endforeach
								</ul>
							</li>
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quốc Gia</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									  @foreach($quocgia as $key => $quocgia_ex)
                                         <div class="col-sm-10">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{URL::to('/film-quocgia/'.$quocgia_ex->quocgia_id)}}">{{$quocgia_ex->quocgia_ten}}</a></li>
                                           </ul>
                                    </div>
                                    @endforeach
								</ul>
							</li>

							<!-- end dropdown -->

						
							<!-- end dropdown -->
						</ul>
						<div class="header__auth" style="margin: auto; margin-top: 20px" >
                         <form action="{{URL::to('/seach')}}" class="header_search" method="POST" >
                                
                                {{ csrf_field()}}
                                <input class="header__search-input" type="text" placeholder="Search..." name="keywords_submit" id="keywords" style="width: 200px;" >
                               
                                <button type="submit" class="btn btn-light" style="font-size: 15px;color: white">Tìm Kiếm</button>
                                    
                                  <div class="text-center">
                            <ul class="nav pull-center" style="position: relative">
                                <li class="dropdown">
                                    <h1 id="seach_ajax" class="text-black"></h1>
                                        
                                </li>
                            </ul>
                           

                        </div>
 
                               
                            
                            </form>
                           
                        </div>
                         
						<!-- header auth -->

                <div class="col-md-2 text-center">
                @if ($admin_id = Session::get('admin_name'))
                <div>
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <h4> <h4 style="font-size: 14px"><img src="public/img/hi.gif" style="padding-right: 10px;">Chào
                                   {{ $admin_id }}
                                </h4> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu pull-center">
                             
                                <li class="loggedin"><a href="{{URL::to('Dangxuat')}}"><i class="fad fa-sign-out-alt"
                                            style="margin-right:14px; --fa-primary-color: crimson; --fa-secondary-color: black; --fa-secondary-opacity: 1.0;"></i>Phim Yêu Thích</a>
                                </li>
                                <li class="loggedin"><a href="{{URL::to('Dangxuat')}}"><i class="fad fa-sign-out-alt"
                                            style="margin-right:14px; --fa-primary-color: crimson; --fa-secondary-color: black; --fa-secondary-opacity: 1.0;"></i>Hồ Sơ</a>
                                </li>
                                <li class="loggedin"><a href="{{URL::to('Dangxuat')}}"><i class="fad fa-sign-out-alt"
                                            style="margin-right:14px; --fa-primary-color: crimson; --fa-secondary-color: black; --fa-secondary-opacity: 1.0;"></i>Đăng
                                        xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @else
                <div class="dropdown header__lang">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="public/img/hello.gif" style="padding-right: 10px; width: 50px;">User</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang" >
									<li><a href="{{URL::to('login')}}" style="color: white">Đăng Ký</a></li>
									<li><a href="{{URL::to('dangnhap')}}" style="color: white">Đăng Nhập</a></li>
								
								</ul>
							</div>
                @endif


            </div>
                             
							<!-- dropdown -->
							
							<!-- end dropdown -->

							
						</div>
					</div>

				

<!-- //bootstrap-pop-up -->
<!-- nav --></div>

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
		
	</header>
	
	 @foreach($quangcao as $key => $pro) 
	


  @yield('trangchu')
 
		
		
  @extends('giaodien.footer')

  

<div class="dummy-text"> 
 
</div>
<div id="modalimg" class="modalwindow"> 
 <h3>Chương trình khuyến mãi đặc biệt lễ 30/04 & 01/05 <a class="close" style="cursor:pointer">X</a>
 </h3> <a href="{{$pro->quangcao_link}}" target="_blank"><img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" alt="Tạo cửa sổ Popup đơn giản dạng Modal" width="100%" height="250"></a>
</div>
@endforeach	


<script type="text/javascript">
	

function remove_background(film_id)
{
	for( var count=1; count<=5; count++)
	{
		$('#'+film_id+'-'+count+).css('color','#ccc');
	}
}
$(document).on('mouseenter','.rating', function()
 {
 	var  index = $(this).data("index");
 	var film_id = $(this).data('film_id');
 	alert(index);
 	alert(film_id );
 }
	) ; 


</script>
<script>
$(document).ready(function(){

 $('#keywords').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{URL::to('autocomplete-ajax') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#seach_ajax').fadeIn();  
           $('#seach_ajax').html(data);
          }
         });
        }
       else{
       	 $('#seach_ajax').fadeOut();  
       }
    });

    $(document).on('click', '.li_seach', function(){  
        $('#keywords').val($(this).text());  
        $('#seach_ajax').fadeOut();  
    });  

});
</script>


<script type="text/javascript">
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script type="text/javascript">
	$(document).ready(function() {          
$('a[name=modal]').click(function(e) {                  
e.preventDefault();               
var id = $(this).attr('href');                    
var winH = $(window).height();        
var winW = $(window).width();                              
$(id).css('top',  winH/2-$(id).height()/2);        
$(id).css('left', winW/2-$(id).width()/2);
$(id).fadeIn(500);         
});
             
$('.modalwindow .close').click(function (e) {        
        e.preventDefault();
        $('.modalwindow').fadeOut(500);
    });
});
</script>
	<script type="text/javascript">
		$(document).ready(function(){
    var bFLeft = $("#divBannerFloatLeft");
    var bFRight = $("#divBannerFloatRight");
    var left_Positiion = 0;
    var right_Positiion = 0;
    var window_Width = $(window).width();
    var document_Width = 1090;
    if (window_Width < document_Width && jQuery(window).width() < 1280)
    {
        bFLeft.hide();
        bFRight.hide();
    } else
    {
        //Calculate right position for left banner
        right_Positiion = (window_Width - document_Width)/2 + document_Width;
        left_Positiion = (window_Width - document_Width)/2 + document_Width;
        bFLeft.attr("style", "float: left; position: fixed; top: 165px; right:0 " + right_Positiion + "px;");
        bFRight.attr("style", "float: right; position: fixed; top: 165px; left:" + left_Positiion + "px;");
        bFLeft.append("<br style='clear: both;' />");
        bFRight.append("<br style='clear: both;' />");
    }    
});
	</script>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

	<!-- JS -->
	<script src="{{asset('public/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('public/js/jquery.mousewheel.min.js')}}"></script>
	<script src="{{asset('public/js/jquery.mCustomScrollbar.min.js')}}"></script>
	<script src="{{asset('public/js/wNumb.js')}}"></script>
	<script src="{{asset('public/js/nouislider.min.js')}}"></script>
	<script src="{{asset('public/js/jquery.morelines.min.js')}}"></script>
	<script src="{{asset('public/js/plyr.min.js')}}"></script>
	<script src="{{asset('public/js/photoswipe.min.js')}}"></script>
	<script src="{{asset('public/js/photoswipe-ui-default.min.js')}}"></script>
	<script src="{{asset('public/js/main.js')}}"></script>
</body>

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.0/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 16:19:07 GMT -->
</html>