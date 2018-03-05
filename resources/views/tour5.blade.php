@extends('layouts.app')

@section('title')

@section('header')

@section('content')
   <section style="background-image:url(./imgs/pic/bg-1.jpg);" class="breadcrumbs">
        <div class="container">
            <h2><span>Isla Negra e Pomaire</span> Tour</h2>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
<div class="content-body">

    <div class="container page">
        <!-- section portfolio item-->
        <section class="page-section mb-0 pt-0 pb-50">
          <div id="flex-slider" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(-3510px, 0px, 0px);">
             
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla6.jpg" alt="" draggable="false"></li>
               <li class="" style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla2.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla3.jpg" alt="" draggable="false"></li>
     
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla4.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla5.jpg" alt="" draggable="false"></li>
          
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla1.jpg" alt="" draggable="false"></li>
            <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla7.jpg" alt="" draggable="false"></li>
            <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/isla9.jpg" alt="" draggable="false"></li>
              
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
          <div id="flex-carousel" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
               <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla6.jpg"  alt="" draggable="false"></li>
              <li class="" style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla2.jpg"  alt="" draggable="false"></li>
             
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla3.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla4.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla5.jpg" alt="" draggable="false"></li>
           
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla1.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla7.jpg" alt="" draggable="false"></li>
               <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/isla9.jpg" alt="" draggable="false"></li>
            
             
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev">
                <a class="flex-prev flex-disabled" href="" tabindex="-1">Previous</a></li>
            <li class="flex-nav-next"><a class="flex-next" href="">Next</a></li></ul></div>
          <h3 class="mb-20 mt-30">Isla Negra e Pomaire</h3>
          <h4>65.000 CLP</h4>
          <div class="row">
            <div class="col-md-8">
              <p class="mb-15">
           
<p>
  
<h4>Pomaire</h4>
Povoado fora de santiago onde temos o artezanato de barro como parte cultural gastronomico do chile ( paila marina - cumbuca ).

<h4>Isla Negra</h4>
- Passeio pela orla da praia passagem na casa do pablo neruna com uma vista expetacular do pacifico.
</p>


              <p class="mb-15"> </p>
              <p class="mb-15"></p>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40">
                <ul class="style-1 mb-0">
                  <li>Horario de saida: 7:00/7:30</li>
                  <li>Horario de saida: 17:00</li>
                 
                  <li>Não Inclui - Alimentação e Entrada no museo</li>
                  
      
                 
                  
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


