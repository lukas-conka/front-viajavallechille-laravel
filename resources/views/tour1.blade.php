@extends('layouts.app')

@section('title')

@section('header')

@section('content')
    
 <section style="background-image:url(./imgs/pic/bg-1.jpg);" class="breadcrumbs">
        <div class="container">
            <h2><span>Concha y Toro</span> Tour</h2>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
<div class="content-body">

    <div class="container page">
        <!-- section portfolio item-->
        <section class="page-section mb-0 pt-0 pb-50">
          <div id="flex-slider" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(-3510px, 0px, 0px);">
             
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha2.jpg" alt="" draggable="false"></li>
               <li class="" style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha1.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha3.jpg" alt="" draggable="false"></li>
     
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha4.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha5.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha6.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha7.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/concha8.jpg" alt="" draggable="false"></li>
              
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
          <div id="flex-carousel" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
               <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha2.jpg"  alt="" draggable="false"></li>
              <li class="" style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha1.jpg"  alt="" draggable="false"></li>
             
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha3.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha4.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha5.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha6.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha7.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/concha8.jpg" alt="" draggable="false"></li>
             
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev">
                <a class="flex-prev flex-disabled" href="" tabindex="-1">Previous</a></li>
            <li class="flex-nav-next"><a class="flex-next" href="">Next</a></li></ul></div>
          <h4 class="mb-20 mt-30">Vinícola Concha y Toro</h4>
          <h3> 28.000 CLP</h3>
          <div class="row">
            <div class="col-md-8">
              <p class="mb-15">
                  A vinícola Concha y Toro está situada no Valle del Maipo, mais precisamente na zona rural de Pirque, a uma hora de Santiago. 
                  Concha y Toro é um dos passeios mais tradicionais em Santiago e a vinícola é uma das mais conhecidas do Chile. 
                  O tour começa pelo bosque e jardins da propriedade até chegar na antiga casa de verão da família Concha y Toro onde será abordado um 
                  pouco sobre o cultivo, tipos de uva, armazenamento e produção dos vinhos. </p><p>Durante o trajeto será contada um pouco 
                  sobre a história da família e da vinícola, que foi fundada por Don Melchor Concha y Toro em 1883. 
                  Os turistas terão acesso à parte subterrânea onde ficam as barricas de carvalho para armazenamento dos vinhos e aí então será contada a famosa lenda do Casillero del Diablo que mesmo sendo o vinho mais simples feito por eles, 
                  é o vino mais famoso da vinícola.
              </p>
              <p class="mb-15"> </p>
              <p class="mb-15"></p>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40">
                <ul class="style-1 mb-0">
                  <li>Horario de saida manhã: 9:00</li>
                  <li>Horario de saida tarde: 14:00</li>
                  <li>Horario de regresso manhã: 14:00</li>
                  <li>Horario de regresso manhã: 18:00</li>
                  <li>Entrada</li>
                  <li>Transporte com guias</li>
                  <li>Tour pela vinicola</li>
                 
                  <li>Degustação</li>
                  <li>Taça de cortesia</li>
                  
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