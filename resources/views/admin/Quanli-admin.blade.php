@extends('admin_layout')
@section('admin_content')
 
           

<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small>Welcome John Doe</small>
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Dashboard</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>
            <div id="page-inner">

                <!-- /. ROW  -->
    
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                               
                                <small>{{ count($film) }}</small>
                             
                        </div>
                        <div class="icon">
                         <i class="fa fa-film fa-5x blue" aria-hidden="true"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                           <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                
                                <small>Thể  Loại:{{ count($theloai) }}</small>
                             
                        </div>
                        <div class="icon">
                           <i class="fa fa-shopping-cart fa-5x blue"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                           <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                
                                <small>Comments:{{ count($comment) }}</small>
                             
                        </div>
                        <div class="icon">
                           <i class="fa fa-comments fa-5x green"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                           <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <small>Đánh giá:{{ count($danhgia) }}</small>
                             
                        </div>
                        <div class="icon">
                          <i class="fa fa-star fa-5x gree" aria-hidden="true"></i>

                        </div>
         
                        </div>
                        </div>
                    </div>
                   
                </div>
                 <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                               
                                <small>user:{{ count($user) }}</small>
                             
                        </div>
                        <div class="icon">
                         <i class="fa fa-user fa-5x blue" aria-hidden="true"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                           <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                
                                <small>Thể  Loại:{{ count($theloai) }}</small>
                             
                        </div>
                        <div class="icon">
                           <i class="fa fa-shopping-cart fa-5x blue"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                           <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                
                                <small>Comments:{{ count($comment) }}</small>
                             
                        </div>
                        <div class="icon">
                           <i class="fa fa-comments fa-5x green"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                           <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <small>Đánh giá:{{ count($danhgia) }}</small>
                             
                        </div>
                        <div class="icon">
                          <i class="fa fa-star fa-5x gree" aria-hidden="true"></i>

                        </div>
         
                        </div>
                        </div>
                    </div>
                   
                </div>
                     <div class="row">
                        <div class="col-sm-6 col-xs-12">  
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Line Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="line-chart" class="chart" width="942" height="470" style="width: 471px; height: 235px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Bar Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="bar-chart" class="chart" width="942" height="470" style="width: 471px; height: 235px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Profit</h4>
                        <div class="easypiechart" id="easypiechart-blue" data-percent="82"><span class="percent">82%</span>
                        <canvas height="110" width="110"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Sales</h4>
                        <div class="easypiechart" id="easypiechart-orange" data-percent="55"><span class="percent">55%</span>
                        <canvas height="110" width="110"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Customers</h4>
                        <div class="easypiechart" id="easypiechart-teal" data-percent="84"><span class="percent">84%</span>
                        <canvas height="110" width="110"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>No. of Visits</h4>
                        <div class="easypiechart" id="easypiechart-red" data-percent="46"><span class="percent">46%</span>
                        <canvas height="110" width="110"></canvas></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
            
        
                <div class="row">
                <div class="col-md-5">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart" style="position: relative;"><svg height="347" version="1.1" width="370" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125" y="313.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,313.5H345" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="241.375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,241.375H345" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="169.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,169.25H345" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="97.12500000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.250000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,97.12500000000003H345" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,25H345" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="224.99607235761223" y="326" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2020</tspan></text><path fill="none" stroke="#1abc9c" d="M45.03125,183.675C52.526361839403066,149.41562500000003,67.5165855182092,53.850000000000044,75.01169735761226,46.637500000000045C82.50680919701533,39.42500000000005,97.49703287582146,121.47335413816693,104.99214471522453,125.97500000000002C112.50779110761226,130.4889791381669,127.53908389238774,70.96365424076609,135.05473028477547,82.70000000000002C142.54984212417855,94.40427924076609,157.54006580298466,203.509375,165.03517764238774,219.7375C172.5302894817908,235.965625,187.52051316059692,223.34375,195.01562499999997,212.525C202.51073683940302,201.70625,217.50096051820918,152.09441261969903,224.99607235761223,133.1875C232.51171874999997,114.22878761969903,247.54301153477545,53.840133378933,255.05865792716318,61.06250000000003C262.55376976656623,68.265133378933,277.5439934453724,187.28124999999997,285.0391052847755,190.8875C292.53421712417855,194.49374999999998,307.5244408029846,109.746875,315.0195526423877,89.91250000000002C322.51466448179076,70.078125,337.50488816059686,46.63750000000003,344.99999999999994,32.212500000000034" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#808080" d="M45.03125,241.375C52.526361839403066,199.903125,67.5165855182092,93.51875000000001,75.01169735761226,75.48750000000001C82.50680919701533,57.45625000000001,97.49703287582146,98.92565834473326,104.99214471522453,97.12500000000003C112.50779110761226,95.31940834473328,127.53908389238774,48.42335841313272,135.05473028477547,61.06250000000003C142.54984212417855,73.66710841313272,157.54006580298466,182.77343750000003,165.03517764238774,198.10000000000002C172.5302894817908,213.42656250000002,187.52051316059692,187.28125,195.01562499999997,183.675C202.51073683940302,180.06875,217.50096051820918,180.95427924076606,224.99607235761223,169.25C232.51171874999997,157.51365424076607,247.54301153477545,86.3013166894665,255.05865792716318,89.91250000000002C262.55376976656623,93.51381668946651,277.5439934453724,196.29687500000003,285.0391052847755,198.10000000000002C292.53421712417855,199.90312500000002,307.5244408029846,118.76249999999999,315.0195526423877,104.3375C322.51466448179076,89.9125,337.50488816059686,88.10937500000001,344.99999999999994,82.70000000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.03125" cy="183.675" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="75.01169735761226" cy="46.637500000000045" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="104.99214471522453" cy="125.97500000000002" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="135.05473028477547" cy="82.70000000000002" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="165.03517764238774" cy="219.7375" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="195.01562499999997" cy="212.525" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="224.99607235761223" cy="133.1875" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.05865792716318" cy="61.06250000000003" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="285.0391052847755" cy="190.8875" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="315.0195526423877" cy="89.91250000000002" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="344.99999999999994" cy="32.212500000000034" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="45.03125" cy="241.375" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="75.01169735761226" cy="75.48750000000001" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="104.99214471522453" cy="97.12500000000003" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="135.05473028477547" cy="61.06250000000003" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="165.03517764238774" cy="198.10000000000002" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="195.01562499999997" cy="183.675" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="224.99607235761223" cy="169.25" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.05865792716318" cy="89.91250000000002" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="285.0391052847755" cy="198.10000000000002" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="315.0195526423877" cy="104.3375" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="344.99999999999994" cy="82.70000000000002" r="4" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 201.459px; top: 70px; display: none;"><div class="morris-hover-row-label">2021</div><div class="morris-hover-point" style="color: gray">
  Total Income:
  155
</div><div class="morris-hover-point" style="color: #1abc9c">
  Total Outcome:
  175
</div></div></div>
                        </div>                      
                    </div>   
                    </div>      
                    
                        <div class="col-md-7">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart" style="position: relative;"><svg height="347" version="1.1" width="542" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.25px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125" y="313.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,313.5H517" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="241.375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,241.375H517" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="169.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,169.25H517" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="97.12500000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.250000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,97.12500000000003H517" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,25H517" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="483.28794642857144" y="326" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="348.43973214285717" y="326" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="213.59151785714286" y="326" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="78.74330357142857" y="326" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><rect x="53.45926339285714" y="25" width="23.784040178571427" height="288.5" r="0" rx="0" ry="0" fill="#22a7f0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="80.24330357142857" y="53.85000000000002" width="23.784040178571427" height="259.65" r="0" rx="0" ry="0" fill="#1abc9c" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="120.88337053571428" y="97.12500000000003" width="23.784040178571427" height="216.37499999999997" r="0" rx="0" ry="0" fill="#22a7f0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="147.6674107142857" y="125.97500000000002" width="23.784040178571427" height="187.52499999999998" r="0" rx="0" ry="0" fill="#1abc9c" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="188.30747767857142" y="169.25" width="23.784040178571427" height="144.25" r="0" rx="0" ry="0" fill="#22a7f0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="215.09151785714283" y="198.10000000000002" width="23.784040178571427" height="115.39999999999998" r="0" rx="0" ry="0" fill="#1abc9c" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="255.73158482142856" y="97.12500000000003" width="23.784040178571427" height="216.37499999999997" r="0" rx="0" ry="0" fill="#22a7f0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="282.515625" y="125.97500000000002" width="23.784040178571427" height="187.52499999999998" r="0" rx="0" ry="0" fill="#1abc9c" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="323.1556919642857" y="169.25" width="23.784040178571427" height="144.25" r="0" rx="0" ry="0" fill="#22a7f0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="349.93973214285717" y="198.10000000000002" width="23.784040178571427" height="115.39999999999998" r="0" rx="0" ry="0" fill="#1abc9c" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="390.57979910714283" y="97.12500000000003" width="23.784040178571427" height="216.37499999999997" r="0" rx="0" ry="0" fill="#22a7f0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="417.3638392857143" y="125.97500000000002" width="23.784040178571427" height="187.52499999999998" r="0" rx="0" ry="0" fill="#1abc9c" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="458.00390625" y="25" width="23.784040178571427" height="288.5" r="0" rx="0" ry="0" fill="#22a7f0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="484.78794642857144" y="53.85000000000002" width="23.784040178571427" height="259.65" r="0" rx="0" ry="0" fill="#1abc9c" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                            </div>
                        
                    </div>  
                    </div>
                    
                </div> 
             
                
                
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">                            
                            <div class="panel-heading">
                            Area Chart
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart" style="position: relative;"><svg height="347" version="1.1" width="715" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.21875" y="313.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,313.5H690" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="241.375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,241.375H690" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="169.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,169.25H690" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="97.12499999999997" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.249999999999972" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,97.12499999999997H690" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,25H690" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="573.9626366950182" y="326" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="295.3202840218712" y="326" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><path fill="#74bbe2" stroke="none" d="M61.71875,262.40665C79.27703523693803,257.1174833333333,114.3936057108141,246.14126041666665,131.95189094775213,241.24998333333332C149.51017618469015,236.35870624999998,184.62674665856622,229.9723659380692,202.18503189550424,223.27643333333333C219.5524662059538,216.6532826047359,254.28733482685297,189.9499148480663,271.65476913730254,187.97365C288.8313525212636,186.0191023480663,323.1845192891859,206.1158351190476,340.361102673147,207.55318333333332C357.91938791008505,209.02247261904762,393.0359583839611,198.62170416666663,410.59424362089914,199.60019999999997C428.1525288578372,200.5786958333333,463.2690993317132,232.7506892531876,480.82738456865127,215.38115C498.1948188791008,198.20041008652095,532.9296875,69.78000833333333,550.2971218104495,61.39908333333332C567.6645561208991,53.01815833333332,602.3994247417983,136.04505571493624,619.7668590522478,148.33374999999998C637.3251442891858,160.7574848816029,672.441714763062,157.2700375,690,160.2488L690,313.5L61.71875,313.5Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#22a7f0" d="M61.71875,262.40665C79.27703523693803,257.1174833333333,114.3936057108141,246.14126041666665,131.95189094775213,241.24998333333332C149.51017618469015,236.35870624999998,184.62674665856622,229.9723659380692,202.18503189550424,223.27643333333333C219.5524662059538,216.6532826047359,254.28733482685297,189.9499148480663,271.65476913730254,187.97365C288.8313525212636,186.0191023480663,323.1845192891859,206.1158351190476,340.361102673147,207.55318333333332C357.91938791008505,209.02247261904762,393.0359583839611,198.62170416666663,410.59424362089914,199.60019999999997C428.1525288578372,200.5786958333333,463.2690993317132,232.7506892531876,480.82738456865127,215.38115C498.1948188791008,198.20041008652095,532.9296875,69.78000833333333,550.2971218104495,61.39908333333332C567.6645561208991,53.01815833333332,602.3994247417983,136.04505571493624,619.7668590522478,148.33374999999998C637.3251442891858,160.7574848816029,672.441714763062,157.2700375,690,160.2488" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="262.40665" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="131.95189094775213" cy="241.24998333333332" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="202.18503189550424" cy="223.27643333333333" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="271.65476913730254" cy="187.97365" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="340.361102673147" cy="207.55318333333332" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="410.59424362089914" cy="199.60019999999997" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="480.82738456865127" cy="215.38115" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="550.2971218104495" cy="61.39908333333332" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="619.7668590522478" cy="148.33374999999998" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="690" cy="160.2488" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#40caaf" stroke="none" d="M61.71875,287.86196666666666C79.27703523693803,282.07754166666666,114.3936057108141,269.7910479166667,131.95189094775213,264.72426666666667C149.51017618469015,259.65748541666665,184.62674665856622,250.09794726775957,202.18503189550424,247.32771666666667C219.5524662059538,244.58759726775958,254.28733482685297,244.91054624769797,271.65476913730254,242.68286666666665C288.8313525212636,240.4796670810313,323.1845192891859,232.69408255494506,340.361102673147,229.6042C357.91938791008505,226.44565338827837,393.0359583839611,217.55812291666666,410.59424362089914,217.68914999999998C428.1525288578372,217.8201770833333,463.2690993317132,244.04065591985426,480.82738456865127,230.65241666666665C498.1948188791008,217.4097017531876,532.9296875,119.01734166666664,550.2971218104495,111.16533333333331C567.6645561208991,103.31332499999998,602.3994247417983,159.59327702641164,619.7668590522478,167.83634999999998C637.3251442891858,176.1700061930783,672.441714763062,175.063275,690,177.47225L690,313.5L61.71875,313.5Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#1abc9c" d="M61.71875,287.86196666666666C79.27703523693803,282.07754166666666,114.3936057108141,269.7910479166667,131.95189094775213,264.72426666666667C149.51017618469015,259.65748541666665,184.62674665856622,250.09794726775957,202.18503189550424,247.32771666666667C219.5524662059538,244.58759726775958,254.28733482685297,244.91054624769797,271.65476913730254,242.68286666666665C288.8313525212636,240.4796670810313,323.1845192891859,232.69408255494506,340.361102673147,229.6042C357.91938791008505,226.44565338827837,393.0359583839611,217.55812291666666,410.59424362089914,217.68914999999998C428.1525288578372,217.8201770833333,463.2690993317132,244.04065591985426,480.82738456865127,230.65241666666665C498.1948188791008,217.4097017531876,532.9296875,119.01734166666664,550.2971218104495,111.16533333333331C567.6645561208991,103.31332499999998,602.3994247417983,159.59327702641164,619.7668590522478,167.83634999999998C637.3251442891858,176.1700061930783,672.441714763062,175.063275,690,177.47225" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="287.86196666666666" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="131.95189094775213" cy="264.72426666666667" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="202.18503189550424" cy="247.32771666666667" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="271.65476913730254" cy="242.68286666666665" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="340.361102673147" cy="229.6042" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="410.59424362089914" cy="217.68914999999998" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="480.82738456865127" cy="230.65241666666665" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="550.2971218104495" cy="111.16533333333331" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="619.7668590522478" cy="167.83634999999998" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="690" cy="177.47225" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#74bbe2" stroke="none" d="M61.71875,287.86196666666666C79.27703523693803,287.5927,114.3936057108141,289.48477916666667,131.95189094775213,286.7849C149.51017618469015,284.0850208333333,184.62674665856622,267.4582902550091,202.18503189550424,266.2629333333333C219.5524662059538,265.08056942167576,254.28733482685297,279.5681761049724,271.65476913730254,277.2740166666667C288.8313525212636,275.00506777163906,323.1845192891859,250.27292651098898,340.361102673147,248.01049999999998C357.91938791008505,245.6977973443223,393.0359583839611,256.58135416666664,410.59424362089914,258.9735C428.1525288578372,261.36564583333336,463.2690993317132,278.5126223132969,480.82738456865127,267.1476666666667C498.1948188791008,255.90624314663026,532.9296875,175.60060625,550.2971218104495,168.54798333333332C567.6645561208991,161.49536041666664,602.3994247417983,202.78727106102002,619.7668590522478,210.7266833333333C637.3251442891858,218.75334189435335,672.441714763062,226.9908708333333,690,232.41226666666665L690,313.5L61.71875,313.5Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#22a7f0" d="M61.71875,287.86196666666666C79.27703523693803,287.5927,114.3936057108141,289.48477916666667,131.95189094775213,286.7849C149.51017618469015,284.0850208333333,184.62674665856622,267.4582902550091,202.18503189550424,266.2629333333333C219.5524662059538,265.08056942167576,254.28733482685297,279.5681761049724,271.65476913730254,277.2740166666667C288.8313525212636,275.00506777163906,323.1845192891859,250.27292651098898,340.361102673147,248.01049999999998C357.91938791008505,245.6977973443223,393.0359583839611,256.58135416666664,410.59424362089914,258.9735C428.1525288578372,261.36564583333336,463.2690993317132,278.5126223132969,480.82738456865127,267.1476666666667C498.1948188791008,255.90624314663026,532.9296875,175.60060625,550.2971218104495,168.54798333333332C567.6645561208991,161.49536041666664,602.3994247417983,202.78727106102002,619.7668590522478,210.7266833333333C637.3251442891858,218.75334189435335,672.441714763062,226.9908708333333,690,232.41226666666665" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="287.86196666666666" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="131.95189094775213" cy="286.7849" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="202.18503189550424" cy="266.2629333333333" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="271.65476913730254" cy="277.2740166666667" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="340.361102673147" cy="248.01049999999998" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="410.59424362089914" cy="258.9735" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="480.82738456865127" cy="267.1476666666667" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="550.2971218104495" cy="168.54798333333332" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="619.7668590522478" cy="210.7266833333333" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="690" cy="232.41226666666665" r="2" fill="#ffffff" stroke="#000000" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donut Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"><svg height="347" version="1.1" width="197" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.25px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#22a7f0" d="M98.5,235A59,59,0,0,0,154.51938223367281,194.51563701733383" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#22a7f0" stroke="#ffffff" d="M98.5,238A62,62,0,0,0,157.36782539809684,195.45711008601182L177.78166807646915,202.20433374487075A83.5,83.5,0,0,1,98.5,259.5Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#1abc9c" d="M154.51938223367281,194.51563701733383A59,59,0,0,0,45.60632301148199,149.86077784947838" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#1abc9c" stroke="#ffffff" d="M157.36782539809684,195.45711008601182A62,62,0,0,0,42.91681401206582,148.53166485877387L19.159484517222992,136.79116677421757A88.5,88.5,0,0,1,182.52907335050924,203.77345552600073Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#a8e9dc" d="M45.60632301148199,149.86077784947838A59,59,0,0,0,98.48146460364867,234.99999708846673" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#a8e9dc" stroke="#ffffff" d="M42.91681401206582,148.53166485877387A62,62,0,0,0,98.48052212586809,237.99999694042265L98.47376770177397,259.49999587944023A83.5,83.5,0,0,1,23.64199951624994,139.00635509205836Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="98.5" y="166" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(0.9215,0,0,0.9215,7.7347,13.8597)" stroke-width="1.085216572504708"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="98.5" y="186" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(1.2688,0,0,1.2688,-26.4785,-47.9167)" stroke-width="0.788135593220339"><tspan dy="4.75" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                <div class="col-md-12">
                
                    </div>      
                </div>  
                <!-- /. ROW  -->

       
                
                
                
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tasks Panel
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge">7 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">16 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">36 minutes ago</span>
                                        <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1.23 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Responsive Table Example
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>User Name</th>
                                                <th>Email ID.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>John15482</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Kimsila</td>
                                                <td>Marriye</td>
                                                <td>Kim1425</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Rossye</td>
                                                <td>Nermal</td>
                                                <td>Rossy1245</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Richard</td>
                                                <td>Orieal</td>
                                                <td>Rich5685</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Jacob</td>
                                                <td>Hielsar</td>
                                                <td>Jac4587</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Wrapel</td>
                                                <td>Dere</td>
                                                <td>Wrap4585</td>
                                                <td>name@site.com</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
            
        
                <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p>
                
        
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        
@endsection