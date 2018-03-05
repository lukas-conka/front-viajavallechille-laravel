@extends('layouts.app')

@section('title')

@section('header')

@section('content')
    
 <section style="background-image:url(./imgs/pic/bg-1.jpg);" class="breadcrumbs">
        <div class="container">
            <h2><span>Cajon del Maipo</span> Tour</h2>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
<div class="content-body">

    <div class="container page">
        <!-- section portfolio item-->
        <section class="page-section mb-0 pt-0 pb-50">
          <div id="flex-slider" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(-3510px, 0px, 0px);">
              <li class="" style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/cajon1.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/cajon2.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/cajon3.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;" class="flex-active-slide"><img src="./imgs/pic/t/cajon4.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/cajon5.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/cajon6.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/cajon7.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/cajon8.jpg" alt="" draggable="false"></li>

              
              
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
          <div id="flex-carousel" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
             <!-- <li class="" style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon1.jpeg"  alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon2.jpeg"  alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon3.jpeg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;" class="flex-active-slide"><img src="./imgs/pic/t/cajon4.jpeg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon5.jpeg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon6.jpeg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon7.jpeg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon8.jpeg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon9.jpeg" alt="" draggable="false"></li>
-->
 <li class="" style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon1.jpg"  alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon2.jpg"  alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon3.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;" class="flex-active-slide"><img src="./imgs/pic/t/cajon4.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon5.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon6.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon7.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/cajon8.jpg" alt="" draggable="false"></li>

            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="">Next</a></li></ul></div>
          <h3 class="mb-20 mt-30">Valle del Cajon del Maipo - Embalso el Yeso</h3>
          <h4>36.000 CLP</h4>
          <div class="row">
            <div class="col-md-8">
              <p class="mb-15">Localizado no valle del Cajon del Maipo o lago Embalse, el yeso fica sendo uma das maiores maravilhas da regiao metropolitana do Chile, acima dos 2500 metros de altitude
               adentro da Cordilheira de los Andes, onde nos fornece um ambiente e sensacao inacreditavel.</p>
              <p class="mb-15"> </p>
              <p class="mb-15"></p>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40">
                <ul class="style-1 mb-0">
                  <li>Horario de saida: 7:00</li>
                  <li>Horario de regresso: 17:00</li>
                 
                  <li>Retirada no hotel</li>
                  <li>Degustacao de vinhos e frios</li>
                  
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-- ! section portfolio item-->
        <div class="cws_divider"></div>

@include('maistourls')

@endsection

@section('footer')