@extends('layouts.app')

@section('title')

@section('header')

@section('content')
    
    <!-- ! header page-->
    <div class="content-body">
      <div class="tp-banner-container tp-mouseover" style="overflow: visible;">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./imgs/slide-1.jpg" alt="...">
      <div class="carousel-caption">
        <h3 class="title-banner">SANTIAGO DO CHILE </h3>
        <p>Está localizada na Região Metropolitana de Santiago, no vale central chileno, ao lado da cordilheira dos Andes.</p>
      </div>
    </div>
    <div class="item">
      <img src="./imgs/slide-2.jpg" alt="...">
      <div class="carousel-caption">
       <h3 class="title-banner">CAJON DEL MAIPO </h3>
        <p>O Cajón del Maipo localiza-se na área metropolitana a 100 km de Santiago, aos pés da Cordilheira dos Andes.</p>
      </div>
    </div>
    <div class="item">
      <img src="./imgs/slide-3.jpg" alt="...">
      <div class="carousel-caption">
        <h3 class="title-banner">VALPARAISO </h3>
        <p>Valparaíso é uma comuna da província de Valparaíso, localizada na região de Valparaíso, no Chile. </p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        <div class="tp-loader spinner0" style="display: none;">
            <div class="dot1"></div>
            <div class="dot2"></div>
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
            <div class="tp-bannertimer" style="visibility: hidden; width: 50.2625%; transform: translate3d(0px, 0px, 0px);"></div>
        
        </div>
        <!-- slider info-->
        <div class="slider-info-wrap clearfix">
          <div class="slider-info-content">
            <div class="slider-info-item">
              <div class="info-item-media"><img src="./imgs/slider-info-1.jpeg"  alt="">
                <div class="info-item-text">
                  <div class="info-price font-4"><span>Por pessoa</span>$25.000 CLP</div>
                  <!--<div class="info-temp font-4"><span>local temperature</span> 36° / 96.8°</div>-->
                  <p class="info-text"> Vale da Casa Branca, Valparaiso e Viña del Mar.</p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Vina del Mar e </span> Valparaiso</h3>
                  <div class="price">$25.000 CLP</div><a href="/valparaiso" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="slider-info-item">
              <div class="info-item-media"><img src="./imgs/slider-info-2.jpeg" alt="">
                <div class="info-item-text">
                  <div class="info-price font-4"><span>Por pessoa</span> $36.000 CLP</div>
                 
                  <p class="info-text">Povoado de San José del Maipo, Lago Embalse el yeso, Cachoeiras de desgelo.</p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Santiago</span>  Cajon del Maipo</h3>
                  <div class="price">$36.000 CLP</div><a href="/cajon-del-maipo" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="slider-info-item">
              <div class="info-item-media"><img src="./imgs/slider-info-3.jpg" alt="">
                <div class="info-item-text">
                  <div class="info-price font-4"><span>Por pessoa</span> $65.000 CLP</div>
                  
                  <p class="info-text">Pomaire povoado fora de Santiago e Isla Negra passeio pela orla da praia.
                  </p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Pomaire</span>Isla Negra</h3>
                  <div class="price">$65.000 CLP</div><a href="/isla-negra-pomaire" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="slider-info-item">
              <div class="info-item-media"><img src="./imgs/slider-info-4.jpeg"  alt="">
                <div class="info-item-text">
                  <div class="info-price font-4"><span>Por pessoa</span> $50.000 CLP</div>
                  
                  <p class="info-text">Entrada, buffet completo, prato de entrada, prato principal, sobremesa, bebida a vontade.
                  </p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Jantar show</span> Bali Hai</h3>
                  <div class="price">$50.000 CLP</div><a href="/bali-hai" class="button">Detalhes</a>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
        <!-- ! slider-info-->
      </div>

      <!-- page section-->
      <section class="page-section pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Ofertas Especiais</h6>
              <h2 class="title-section"><span>Os melhores</span> Tours</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p>
                A Viaja Valle Chile abrange todos os passeios turísticos que o Chile pode oferecer. Além do <b>melhor preço</b>, total <b>segurança</b> e <b>confiabilidade</b>, contamos com guias brasileiros ou 
                bilíngues que estarão disponíveis a qualquer momento, para te auxiliar no que for preciso para tornar sua viagem memorável.
              </p>
            </div>
            <div class="col-md-4"><img src="./imgs/promo-1.png"  alt="" class="mt-md-0 mt-minus-70"></div>
          </div>
        </div>
        <div class="features-tours-full-width">
          <div class="features-tours-wrap clearfix">
            <div class="features-tours-item">
              <div class="features-media"><img src="./imgs/1.jpeg"  alt="">
                <div class="features-info-top">
                  <div class="info-price font-4"><span>Por pessoa</span> $25.000 CLP</div>
    
                  <p class="info-text">Vale da Casa Branca, Valparaiso e Viña del Mar.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Vina del Mar</span> Valparaiso</h4><a href="/valparaiso" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="./imgs/2.jpeg"  alt="">
                <div class="features-info-top">
                  <div class="info-price font-4"><span>Por pessoa</span> $36.000 CLP</div>
                 
                  <p class="info-text">Povoado de San José del Maipo, Lago Embalse el yeso, Cachoeiras de desgelo.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Santiago</span> Cajon del Maipo</h4><a href="/cajon-del-maipo" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="./imgs/3.jpeg"  alt="">
                <div class="features-info-top">
                  <div class="info-price font-4"><span>Por pessoa</span> $?</div>
                  
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4"></span> Valle Nevado</h4><a href="/valle-nevado" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="./imgs/4.jpeg"  alt="">
                <div class="features-info-top">
                  <div class="info-price font-4"><span>Por pessoa</span> $50.000 CLP</div>
                 
                  <p class="info-text">Entrada, buffet completo, prato de entrada, prato principal, sobremesa, bebida a vontade.

</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Jantar Show</span> Bali Hai</h4><a href="/bali-hai" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="./imgs/5.jpeg" alt="">
                <div class="features-info-top">
                  <div class="info-price font-4"><span>Por pessoa</span> $?</div>
                  
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Vinicola</span> Concha y Toro</h4><a href="/concha-toro" class="button">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="./imgs/6_1.jpg"  alt="">
                <div class="features-info-top">
                  <div class="info-price font-4"><span>Por pessoa</span> $65.000</div>
                  
                  <p class="info-text">Pomaire povoado fora de Santiago e Isla Negra passeio pela orla da praia.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Pomaire e</span> Isla Negra</h4><a href="/isla-negra-pomaire" class="button">Detalhes</a>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </section>
       <!-- ! counter section-->
      <!-- page section parallax-->
  
      <section class="small-section cws_prlx_section bg-gray-40" id="cws_prlx_section_1077781335492"><img src="./imgs/parallax-1.jpg" alt="" class="cws_prlx_layer" id="cws_prlx_layer_521672144684">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h2 class="title-section-top alt">Sobre</h2>
              <h2 class="title-section alt mb-20">Viaja<span>Valle</span>Chile</h2>
              <p class="color-white">Santiago de Chile oferece as mais variadas opções: a Casa de Pablo Neruda, o romântico refúgio do famoso poeta e sua esposa Matilde, o Museu de Arte Precolombino, onde se encontra a importante coleção de elementos aborígenes e pinturas, o Cerro San Cristobal, onde se pode realizar a visita ao zoológico, ao museu do vinho, e pode subir até o topo no bondinho.
Mais afastado da capital, você encontrará o Valle Nevado, o maior centro de esqui do Chile, o Cerro Santa Lucia, uma das montanhas mais exuberantes de Santiago. A Reserva Natural do Rio Clarillo, que alberga o último bosque de esclerofilos e espécies animais em risco de extinção.</p>
              <div class="cws_divider short mb-30 mt-30"></div>
              <h3 class="font-5 color-white font-medium">Flavio Andrade</h3>
            </div>
            <div class="col-md-7">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/504Zb_YVILY" frameborder="0" allowfullscreen></iframe>
             
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- gallery section-->
      <section class="small-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Boas Lembranças</h6>
              <h2 class="title-section"><span>Galeria de </span> Fotos</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p>Reveja seus momentos pelos olhos da Viaja Valle Chile, no nosso eterno mural de boas lembranças. Bem vindo a nossa grande familia.</p>
            </div>

          </div>
          <div class="row portfolio-grid">
            <!-- portfolio item-->
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="portfolio-item big">
                <!-- portfolio image--><a href="./imgs/pic/3.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/3_580x225.jpeg"  alt=""></div></a>
               
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/2.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/2_285x285.jpeg" alt=""></div></a>
                
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/1.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/1_285x285.jpeg"  alt=""></div></a>
                
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/9.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/9_285x285.jpeg"  alt=""></div></a>
                
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/12.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/12_285x285.jpeg" alt=""></div></a>
               
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/6.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/6_285x285.jpeg" alt=""></div></a>
             
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/7.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/7_285x285.jpeg" alt=""></div></a>
               
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/8.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/8_285x285.jpeg" alt=""></div></a>
               
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="./imgs/pic/7.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/10_285x285.jpeg" alt=""></div></a>
                
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="portfolio-item big">
                <!-- portfolio image--><a href="./imgs/pic/4.jpeg" class="fancy">
                  <div class="portfolio-media"><img src="./imgs/pic/4_585x285.jpeg" alt=""></div></a>
                

              </div>
            </div>
          </div>
        </div>
      </section>
   
    

@endsection

@section('footer')
   




