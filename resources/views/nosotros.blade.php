@extends('layouts.app')

@section('nosotros', 'Nosotros')

@section('content')

<title>Nosotros</title>
<link rel="stylesheet" href="assets/footer/fonts/icomoon/style.css"> 
<!-- Style CSS -->
<link rel="stylesheet" href="assets/footer/css/style.css">
<style>
    .menu-admin{
    display: none !important;
}

</style>
     <div class="img-nosotros mb-0 mb-sm-5">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <p class="text-center text-white txw-600 tx-26">NOSOTROS</p>
                    <p class="text-center text-white txw-400 tx-14">Inicio     >    Nosotros</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 mt-5 order-2 order-sm-1">
                <img src="assets/img/users/nosotros.jpg" class="w-100" alt="">
            </div>
            <div class="col-12 col-sm-6 col-sm-6 mt-5 order-1 order-sm-2">
                <p class="tx-20 text-center text-sm-left">¿QUIENES SOMOS?</p>
                <div class="line-nostros my-1 d-none d-sm-block"></div>
                <p class="text-center text-sm-left">Vivamus sodales ligula ut ultricies hendrerit. Cras eget orci sollicitudin, rutrum nulla a, accumsan turpis. Aenean nec sem et ante lobortis venenatis eget sed mi. Proin iaculis in lorem accumsan maximus. Ut ante magna, fulle interdum eu mauris quis, scelerisque sagittis risus.
                    Etiam efficitur nibh sed diam ullamcorper iaculis. Sed vel ege od nec elit pulvinar cursus. Praesent consectetur commodo purus, id porttitor lorem accumsan sed. Suspendisse potenti. Sed sodales lacinia urna, in dapibus ex elementum in. Integer finibus pretium felis sed accumsan sed diam ullamcorper iaculis egetter. Etiam efficitur nibh sed diam ullamcorper iaculis. Sed vel ege od nec elit pulvinar cursus. Praesent consectetur commodo purus, id porttitor lorem accumsan sed. Suspendisse potenti. Sed sodales lacinia urna, in dapibus ex elementum in. Integer finibus pretium felis sed accumsan sed diam ullamcorper iaculis eget malesuada.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 mt-5 order-2">
                <img src="assets/img/users/nosotros-2.jpg" class="w-100" alt="">
            </div>
            <div class="col-12 col-sm-6 col-sm-6 mt-5 order-1">
                <p class="tx-20 text-center text-sm-left">¿QUE HACEMOS?</p>
                <div class="line-nostros my-1 d-none d-sm-block"></div>
                <p class="text-center text-sm-left">Vivamus sodales ligula ut ultricies hendrerit. Cras eget orci sollicitudin, rutrum nulla a, accumsan turpis. Aenean nec sem et ante lobortis venenatis eget sed mi. Proin iaculis in lorem accumsan maximus. Ut ante magna, fulle interdum eu mauris.</p>
                <li class="text-center text-sm-left"> Sed sodales lacinia urna, in dapibus ex elementum in. Integer finibus pretium felis sed accumsan sed diam ullamcorper iaculis eget malesuada. </li>
                <li class="text-center text-sm-left"> Sed sodales lacinia urna, in dapibus ex elementum in. Integer finibus pretium felis sed accumsan sed diam ullamcorper iaculis eget malesuada. </li>
                <li class="text-center text-sm-left"> Sed sodales lacinia urna, in dapibus ex elementum in. Integer finibus pretium felis sed accumsan sed diam ullamcorper iaculis eget malesuada. </li>
            </div>
        </div>
    </div>
    <div class="container mt-0 mt-sm-5">
        <div class="row">
            <div class="col-12 col-sm-4">
                <p class="tx-20 text-center">MISION</p>
                <p class="text-center">Vivamus sodales ligula ut ultricies hendrerit. Cras eget orci sollicitudin, rutrum nulla a, accumsan turpis. Aenean nec sem et ante lobortis venenatis eget sed mi. Proin iaculis in lorem accumsan maximus. Ut ante magna, fulle interdum eu mauris.</p>
            </div>
            <div class="col-12 col-sm-4">
                <p class="tx-20 text-center">VISION</p>
                <p class="text-center">Vivamus sodales ligula ut ultricies hendrerit. Cras eget orci sollicitudin, rutrum nulla a, accumsan turpis. Aenean nec sem et ante lobortis venenatis eget sed mi. Proin iaculis in lorem accumsan maximus. Ut ante magna, fulle interdum eu mauris.</p>
            </div>
            <div class="col-12 col-sm-4">
                <p class="tx-20 text-center">VALORES</p>
                <p class="text-center">Vivamus sodales ligula ut ultricies hendrerit. Cras eget orci sollicitudin, rutrum nulla a, accumsan turpis. Aenean nec sem et ante lobortis venenatis eget sed mi. Proin iaculis in lorem accumsan maximus. Ut ante magna, fulle interdum eu mauris.</p>
            </div>
        </div>
    </div>
<div class="container d-none d-sm-block">
    <div class="row my-3 justify-content-end">
        <div class="col-12 col-sm-4 text-center">
            <i class="fa fa-phone color-2 tx--fa-38" aria-hidden="true"></i>
            <p class="mb-0">qmasr@hotmail.com</p>
            <span>999 576 7177</span>
        </div>
        <div class="col-12 col-sm-4 text-center">
            <i class="fa fa-map-marker color-2 tx--fa-38" aria-hidden="true"></i>
            <p class="mb-0">Bojorquez. Merida</p>
            <span>C 59 #668 A x 98 y 100</span>
        </div>
        <div class="col-12 col-sm-4 text-center">
            <i class="fa fa-calendar color-2 tx--fa-38" aria-hidden="true"></i>
            <p class="mb-0">Lunes a Sabado</p>
            <span>8:00 - 19:00</span>
        </div>
    </div>
</div>
<div>
    <div>
        <iframe class="w-100" height="600px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10537.405084083135!2d-89.64935935377706!3d20.971172210747454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5673be6e999be9%3A0x8e94f0455b727a85!2sCalle%2059%20668%2C%20Boj%C3%B3rquez%2C%2097230%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1sen!2smx!4v1678075444886!5m2!1sen!2smx"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<footer class="footer-20192">
    <div class="site-section">
      <div class="container">

        <div class="cta d-block d-md-flex align-items-center px-5">
          <div>
            <h2 class="mb-0">¿Listo para tu proyecto?</h2>
            <h3 class="text-dark">¡Cotiza ahora!</h3>
          </div>
          <div class="mx-auto">
            <a href="{{ route('cotizas.create') }}" class="btn btn-dark rounded-0 py-3 px-5">Cotiza ahora</a>
          </div>
        </div>
        <div class="row">

          <div class="col-sm">
            
          </div>
          <div class="col-sm">
            <h3>Clientes</h3>
            <ul class="list-unstyled links">
              <li><a href="{{ route('servicios.index') }}">Servicios</a></li>
              <li><a href="#">Preguntas</a></li>
            </ul>
          </div>
          <div class="col-sm">
            <h3>Compania</h3>
            <ul class="list-unstyled links">
              <li><a href="{{ route('nosotros.index') }}">Acerca de nosotros</a></li>
              <li><a href="{{ route('cotizas.create') }}">Cotizaciones</a></li>
              <li><a id="idcontacto">Contacto</a></li>
            </ul>
          </div>
          <div class="col-sm">
            <h3>Mas informacion</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Terminos &amp; Condiciones</a></li>
              <li><a href="#">Politicas de privacidad</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Siguenos en nuestras redes</h3>
            <ul class="list-unstyled social">
              <li><a href="https://www.facebook.com/QmasRDisenoYConstruccion" target="blank"><span class="icon-facebook"></span></a></li>
              <li><a href="https://www.instagram.com/qrdisenoyconstruccion/?igshid=YmMyMTA2M2Y%3D&__coig_restricted=1" target="blank"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-medium"></span></a></li>
              <li><a href="#"><span class="icon-paper-plane"></span></a></li>
              <!--
                <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-medium"></span></a></li>
              <li><a href="#"><span class="icon-paper-plane"></span></a></li>
            -->
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <script src="../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script>
      $("#idcontacto").click(function() {
      $('html, body').animate({
          scrollTop: $("#contacto").offset().top
      }, 200);
});
  </script>

@endsection
