@extends('layouts.app')

@section('title')

@section('header')

@section('content')
    
    <section style="background-image:url(./imgs/pic/bg-1.jpg);" class="breadcrumbs">
        <div class="container">
            <h2><span>Bali Hai</span> Tour</h2>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
<div class="content-body">

    <div class="container page">
        <!-- section portfolio item-->
        <section class="page-section mb-0 pt-0 pb-50">
          <div id="flex-slider" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(-3510px, 0px, 0px);">
             
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/bali1.jpg" alt="" draggable="false"></li>
               <li class="" style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/bali2.jpg" alt="" draggable="false"></li>
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/bali3.jpg" alt="" draggable="false"></li>
     
              <li style="width: 1170px; margin-right: 0px; float: left; display: block;"><img src="./imgs/pic/t/bali4.jpg" alt="" draggable="false"></li>
            
              
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
          <div id="flex-carousel" class="flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
               <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/bali1.jpg"  alt="" draggable="false"></li>
              <li class="" style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/bali2.jpg"  alt="" draggable="false"></li>
             
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/bali3.jpg" alt="" draggable="false"></li>
              <li style="width: 130px; margin-right: 5px; float: left; display: block;"><img src="./imgs/pic/t/bali4.jpg" alt="" draggable="false"></li>
            
             
            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev">
                <a class="flex-prev flex-disabled" href="" tabindex="-1">Previous</a></li>
            <li class="flex-nav-next"><a class="flex-next" href="">Next</a></li></ul></div>
          <h3 class="mb-20 mt-30">Bali Hai - Jantar Show</h3>
          <h4>50.000 CLP</h4>
          <div class="row">
            <div class="col-md-8">
              <p class="mb-15">
           
<p>
    O Jantar Show Bali Hai é um espetáculo oferecido por um dos restaurantes mais solicitados de 
    Santiago do Chile e já conta com 70 anos de tradição sendo o único restaurante Polinésio da América Latina. 
    É um lugar exótico decorado com belíssimas esculturas de madeira que projetam imagens da milenar Ilha de Páscoa. 
    Na parte exterior do Restaurante Bali Hai em Santiago, cinco enormes moais dão as boas vindas aos visitantes e o seu interior 
    foi especialmente preparado para uma grande e imaginária viagem à Polinesia. O restaurante é conhecido por oferecer deliciosos pratos e
     ao mesmo tempo impressionar o público com um excelente show que começa com as danças de La Tirana (norte do Chile), depois a dança mais
      tradicional do Chile, a famosa Cueca, seguido das danças Araucanas que evocam as origens do Chile, a seguir, as danças da Ilha de Chiloé e por 
      último um espetacular 
    contraste de cores e ritmo que representa a cultura Polinésica da famosa Ilha de Páscoa. Não deixe de conhecer o 
    jantar show, sua noite será e inesquecível!
</p>


              <p class="mb-15"> </p>
              <p class="mb-15"></p>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40">
                <ul class="style-1 mb-0">
                  <li>Horario de saida: 19:30</li>
                  <li>Horario de saida: 23:15</li>
                 
                  <li>Entrada</li>
                  <li>Buffet Completo</li>
                  <li>Prato de entrada</li>
                 
                  <li>Prato principal</li>
                  <li>Sobremesa</li>
                  <li>Bebida a vontade ( vinho, suco, água, refrigerante )</li>
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