@extends('layouts.app')

@section('title')

@section('header')

@section('content')
    
    <section style="background-image:url(./imgs/pic/bg-1.jpg);" class="breadcrumbs">
        <div class="container">
            <h2><span>Valle Nevado</span> Tour</h2>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
<div class="content-body">

    <div class="container page">
        <!-- section portfolio item-->
        <section class="page-section mb-0 pt-0 pb-50">
          <div id="flex-slider" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(-3510px, 0px, 0px);">
             
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/valle3.jpg" alt="" draggable="false"></li>
               <li class="" style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/valle2.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/valle1.jpg" alt="" draggable="false"></li>
     
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/valle4.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/valle5.jpg" alt="" draggable="false"></li>
          
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/valle7.jpg" alt="" draggable="false"></li>
            <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/valle8.jpg" alt="" draggable="false"></li>
              
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
          <div id="flex-carousel" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
               <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/valle3.jpg"  alt="" draggable="false"></li>
              <li class="" style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/valle2.jpg"  alt="" draggable="false"></li>
             
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/valle1.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/valle4.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/valle5.jpg" alt="" draggable="false"></li>
           
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/valle7.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/valle8.jpg" alt="" draggable="false"></li>
            
             
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev">
                <a class="flex-prev flex-disabled" href="" tabindex="-1">Previous</a></li>
            <li class="flex-nav-next"><a class="flex-next" href="">Next</a></li></ul></div>
          <h4 class="mb-20 mt-30">Valle Nevado</h4>
          <div class="row">
            <div class="col-md-8">
              <p class="mb-15">
           
<p>
   Para chegar à estação Valle Nevado percorremos 60 curvas em meio das montanhas branquinhas da neve. Já em Valle Nevado, 
   fizemos uma visita de 2 horas para apreciar toda a beleza dos Andes. A próxima parada 
   é no parque de neve Farellones. Lá, além de ski, há mais atrações, como ski bunda, teleférico, elevador panorâmico, etc. 
</p>
<p>Recomendamos:</p>
<p>- Protetor solar</p>
<p>- Oculos de Sol</p>
<p>- Luvas</p>
<p>- Calça</p>


              <p class="mb-15"> </p>
              <p class="mb-15"></p>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40">
                <ul class="style-1 mb-0">
                    <li>Horario de saida: 7:00</li>
                  <li>Horario de saida: 16:00</li>
                  <li>Transporte com Guia de Hotel para Hotel</li>
                  <li>Passagem Valle Nevado</li>
                  <li>Passagem FARELLONES</li>
                  <li>Não inclui: alimentação e as Roupas e equipamento.</li>
                  
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