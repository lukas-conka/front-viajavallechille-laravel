
    
    @extends('layouts.app')

@section('title')

@section('header')

@section('content')
    

      <section style="background-image:url(./imgs/pic/bg-1.jpg);" class="breadcrumbs">
        <div class="container">
            <h2><span>Entre em</span> Contato</h2>
        </div>
      </section>
     <!-- content-->
    <div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <h4 class="title-section mt-30"><span class="font-bold">Contatos</span></h4>
              <div class="cws_divider mb-25 mt-5"></div>
              <ul class="icon">
                <li> <a href="">contato@viajavallechile.com<i class="flaticon-suntour-email"></i></a></li>
                <li> <a href=""> (+56) 94971-2731 <i class="flaticon-suntour-phone"></i></a></li>
                <li> <a href="">Ahumada 11 - Oficina, 309<i class="flaticon-suntour-map"></i></a></li>
                <li> <a href="">Pedro de Valdivia, 1990<i class="flaticon-suntour-map"></i></a></li>
                <li> <a href="">Rosario Sur 68, Las Condes<i class="flaticon-suntour-map"></i></a></li>
              </ul>
              <p class="mt-20">Guests can enjoy a range of massage treatments and beauty therapy at the on-site spa, U Spa. It offers child-minding services, a currency exchange and a reception that is available 24/7. It also has superb facilities for meetings and events. </p>
              <div class="contact-cws-social"><a href="" class="cws-social fa fa-twitter"></a><a href="" class="cws-social fa fa-linkedin"></a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper">
              <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3329.2230082983947!2d-70.65261978513541!3d-33.443496004540805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x9662c5a125d3c623%3A0x4d4bb5f6349562a!2sAhumada+11%2C+Santiago%2C+Regi%C3%B3n+Metropolitana%2C+Chile!3m2!1d-33.4435005!2d-70.65043109999999!4m5!1s0x9662c5a125d3c623%3A0x4d4bb5f6349562a!2sAhumada+11%2C+Santiago%2C+Regi%C3%B3n+Metropolitana%2C+Chile!3m2!1d-33.4435005!2d-70.65043109999999!5e0!3m2!1spt-PT!2sbr!4v1495037124000" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
        <div class="container">
          <h4 class="title-section mb-20"><span class="font-bold">Entre em Contato</span></h4>
          <div class="widget-contact-form pb-0">
            <!-- contact-form-->
            
            <div class="email_server_responce">
            @if (Session::has('status'))
              <div role="alert" class="alert alert-usefull alert-dismissible fade in mb-20">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"></button>Mensagem Enviada com sucesso. Logo responderemos.
              </div>
            @endif
            </div>
            <form action="/enviar-email" method="post">
              <div class="row">
                <div class="col-md-6 clearfix">
                  <div class="input-container">
                    <input type="text" name="name" size="40" placeholder="Nome" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="email"  size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
              </div>
              <div class="input-container">
                <textarea name="message" cols="40" rows="4" placeholder="Comentario" aria-invalid="false" aria-required="true"></textarea>
              </div>
              <button type="submit" class="cws-button alt">ENVIAR</button> 
              {{csrf_field() }}
            </form>
            <!-- /contact-form-->
          </div>
        </div>
      </div>
    </div>

@endsection

@section('footer')

@endsection