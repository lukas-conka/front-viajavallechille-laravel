<html>
    <head>
        <title>@yield('title', 'Viaja Valle Chile - A melhor Agência de Turismo em Santiago Chile')</title>
        
        @section('header')
            
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            

  <link rel="stylesheet" href="./css/reset.css">
    <!--<link rel="stylesheet" href="./Suntour_files/bootstrap.css">-->
    <link rel="stylesheet" href="./css/font-awesome.css">


    <link rel="stylesheet" href="./css/jquery.fancybox.css">
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/flexslider.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/indent.css">
    <link rel="stylesheet" href="./css/settings.css">
    <link rel="stylesheet" href="./css/layers.css">
    <link rel="stylesheet" href="./css/navigation.css">
    

    <link rel="stylesheet" href="./css/styles.css">
  
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        @show
    </head>
    <body>
    
    <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
                <div class="top-left-wrap font-3">
                        <div class="mail-top"><a href="mailto:contato@viajavallechile.com"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>contato@viajavallechile.com</a></div><span>/</span>
                        <div class="tel-top"><a href=""> (+56) 94971-2731</a>
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a>WhatsApp</a>
                </div>
              </div>
           
            </div>
              </div>
            </div>
          </div>

      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">

          <div class="nav-logo-wrap local-scroll">
          <a href="/home" class="logo"><img src="./imgs/logo2.jpeg" height="75" width="85" alt=""><img src="./imgs/logo.jpeg" width="200" alt=""></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav" style="opacity: 1;">
            <ul class="clearlist magic-line-main">
              <!-- Item With Sub-->
              <li class="active-li" id="menu-item-0"><a href="/home" class="mn-has-sub active" style="height: 80px; line-height: 80px;">Home</a>
         
              <span class="button_open"></span></li>
              <!-- End Item With Sub-->
              <li class="slash" id="menu-item-5">/</li>
              <!-- Item With Sub-->
              <li id="menu-item-6"><a href="/tourls" class="mn-has-sub" style="height: 80px; line-height: 80px;">Tourls <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                <!-- Sub-->
                <ul class="mn-sub">
                  <li><a href="/concha-toro">Concha y Toro </a></li>
                  <li><a href="/valparaiso">Valparaiso</a></li>
                  <li><a href="/valle-nevado">Valle Nevado</a></li>
                  <li><a href="/cajon-del-maipo">Cajon del maipo</a></li>
                  <li><a href="/bali-hai">Bali hai</a></li>
                  <li><a href="/isla-negra-pomaire">Isla Negra e Pomaire</a></li>
                </ul>
                <!-- End Sub-->
              <li class="slash">/</li>

              <li class="megamenu" id="menu-item-11">
                  <a href="/transfer" class="mn-has-sub" style="height: 80px; line-height: 80px;">Transfer </i></a>

              <span class="button_open"></span></li>

              <li class="slash" id="menu-item-33">/</li>
   
              <li id="menu-item-34"><a href="/sobre" class="mn-has-sub" style="height: 80px; line-height: 80px;">Sobre Nos</a>

              <span class="button_open"></span></li>
 
              <li class="slash" id="menu-item-39">/</li>
 
              <li id="menu-item-40"><a href="/contato" style="height: 80px; line-height: 80px;">Contato</a></li>
 
      
            <li class="magic-line-main-li" style="width: 70px; left: 0px;" id="menu-item-43"></li></ul>
          <i class="mobile_menu_switcher"></i></div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>
       
            @yield('content')
        
  
    @yield('footer')
    
    
    <section class="page-section pt-90 pb-80 bg-main pattern relative">
        <div class="container">
          <div class="call-out-box clearfix with-icon">
            <div class="row call-out-wrap">
              <div class="col-md-5">
                <h6 class="title-section-top gray font-4">Se inscreva</h6>
                <h2 class="title-section alt-2"><span>Receba</span> Últimas ofertas</h2>
              </div>
              
              <div class="col-md-7">
                @if (Session::has('status'))
              <div role="alert" class="alert alert-usefull alert-dismissible fade in mb-20">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"></button>Mensagem Enviada com sucesso. Logo responderemos.
              </div>
            @endif
                <form action="/enviar-promo" method="post"  novalidate="novalidate">
                  <div class="input-container">
                    <input type="text" placeholder="Digite seu email..." value="" name="email" class="newsletter-field mb-0 form-row">
                    <button type="submit" class="subscribe-submit"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span></button>
                   {{csrf_field() }}
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! call out section-->
    </div>
    <!-- footer-->
    <footer style="background-image: url(&#39;pic/footer/footer-bg.jpg&#39;)" class="footer footer-fixed">
      <div class="container">
        <div class="row pb-100 pb-md-40">
          <!-- widget footer-->
          <div class="col-md-6 col-sm-12 mb-sm-30">
            <div class="logo-soc clearfix">
              <div class="footer-logo"><a href=""><img src="./imgs/logo.jpeg" width="200"  alt=""></a></div>
            </div>
            <p class="color-g2 mt-10"> Valorizando sempre o sonho dos nossos clientes, com um    serviço de qualidade e toda uma assessoria para sua Viagem.</p>
            <!-- social-->
            <div class="social-link dark"><a href="" class="cws-social fa fa-twitter"></a>
            <a href="" class="cws-social fa fa-facebook"></a>
            <a href="" class="cws-social fa fa-google-plus"></a>
            <a href="" class="cws-social fa fa-linkedin"></a></div>
            <!-- ! social-->
          </div>
          <!-- ! widget footer-->
          <!-- widget footer-->
          <!--<div class="col-md-3 col-sm-6 mb-sm-30">
            <div class="widget-footer">
              <h4>Latest Tweets</h4>
              <div class="twitter-footer align-left"><ul class="tweet_list"><li class="tweet_first tweet_odd"><i class="fa fa-twitter twitt"></i><p><a class="link-color" href="http://twitter.com/Creative_WS">@Creative_WS</a> <span class="tweet_text">RT <span class="at">@</span><a href="http://twitter.com/Creative_WS">Creative_WS</a> Children Wordpress Theme - Enjoy!
<a href="http://demo.creaws.com/?theme=happykidswp">demo.creaws.com/?theme=happyki…</a> <a href="https://twitter.com/Creative_WS/status/841188294096502784/photo/1">pic.twitter.com/nxQqfpIVtJ</a></span><br><span class="tweet_time"><a href="http://twitter.com/Creative_WS/status/857147958906810368" title="view tweet on twitter">about 6 days ago</a></span></p></li></ul></div>
            </div>
          </div>-->
          <!-- end widget footer-->
          <!-- widget footer-->
          <div class="col-md-3 col-sm-6">
            <div class="widget-footer"> 
              <h4 style="color:black;">Tag cloud</h4>
              <div class="widget-tags-wrap"><span class="tag">Chile, Viagem, Santiago, Agencia, praia, ilha, neve, valle</span></div>
            </div>
          </div>
          <!-- end widget footer-->
        </div>
      </div>
      <!-- copyright-->
      <div class="copyright"> 
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>© Copyright 2017 <span>Viaja Valle Chile</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
            </div>
            <div class="col-sm-6 text-right"><a href="/home" class="footer-nav">Home</a><a href="/tourls" class="footer-nav">Tourls</a><a href="/transfer" class="footer-nav">Transfer</a><a href="/sobre" class="footer-nav">Sobre nos</a><a href="/contato" class="footer-nav">Contato</a></div>
          </div>
        </div>
      </div>
      <!-- end copyright-->
      <!-- scroll top-->
    </footer>
    
   



    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery-ui.min.js"></script>


    <script type="text/javascript" src="./js/jquery.sticky.js"></script>
    <script type="text/javascript" src="./js/TweenMax.min.js"></script>
    <script type="text/javascript" src="./js/cws_parallax.js"></script>
    <script type="text/javascript" src="./js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="./js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="./js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="./js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="./js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="./js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="./js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="./js/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./js/jquery.form.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>

    <script type="text/javascript" src="./js/cws_YT_bg.js"></script>
    <script type="text/javascript" src="./js/jquery.tweet.js"></script>
    <script type="text/javascript" src="./js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="./js/jquery.flexslider.js"></script>



    <script>
               $('.carousel').carousel();
     </script>
    </body>
</html>