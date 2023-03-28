
@extends('layouts.app')

@section('home', 'Home')


@section('content')

<title>Inicio</title>


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/footer/fonts/icomoon/style.css"> 
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/footer/css/style.css">
<style>
.profile-card-2 {
    
    margin: 0px;
}



.card-container {
    padding: 100px 0px;
    -webkit-perspective: 1000;
    perspective: 1000;
}
.profile-card-2 {
    max-width: 300px;
    background-color: white;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-position: center;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    border-radius: 10px;
    
}

.profile-card-2 img {
    transition: all linear 0.25s;
    filter: brightness(70%);
}

.profile-card-2 .profile-name {
    position: absolute;
    left: 30px;
    bottom: 60px;
    font-size: 30px;
    color: white;
    text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    
    transition: all linear 0.25s;
    font-weight: 700;
}

.profile-card-2 .profile-icons {
    position: absolute;
    bottom: 30px;
    right: 30px;
    color: transparent;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-username {
    position: absolute;
    bottom: 40px;
    
    color: transparent;
    font-size: 18px;
    font-weight: 400;
    text-align: center !important;
    transition: all linear 0.25s;
    word-break:break-all;
}

.profile-card-2 .profile-icons .fa {
    margin: 5px;
}

.profile-card-2:hover img {
    filter: brightness(30%);
}

.profile-card-2:hover .profile-name {
    bottom: 100px;
    color: white;
}

.profile-card-2:hover .profile-username {
    bottom: 60px;
    color: white;
}

.profile-card-2:hover .profile-icons {
    right: 40px;
}
.btn-warning{
    border: none !important;
}
.menu-admin{
    display: none !important;
}
</style>
<div>
    <div class="img-index">
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 mt-5">
                    <span class="tx-38 txw-600 color-white">PLANIFICANDO LA CONSTRUCCION DE TU HOGAR</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-5 mt-3 tx-16 color-white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-5 mt-3 mb-5">
                    <button class="tx-14 btn btn-warning color-white bg-2">
                        VER MAS
                    </button>
                    <button class="tx-14 py-1 btn color-black bg-white">
                        CONTACTO
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <p class="text-center mt-sm-5 mt-2 tx-22 txw-600">Nuestros Servicios</p>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-12">
            <div class="text-center">Suspendisse vulputate nibh feugiat ex dapibus aliquam. Maecenas eget erat arcu.
                Pellentesque non diam volutpat dolor viverra convallis.</div>
        </div>
    </div>
</div>
<div class="container my-4">
        <div class="row">
            <?php
            $conexion2=mysqli_connect('localhost','root', '','qr');
            $sql2= "Select * from services LIMIT 3";
            $result2= mysqli_query($conexion2,$sql2);
            while($mostrar2=mysqli_fetch_array($result2)){
                ?>
                 <div class="col-12 col-sm-4">
                    <div class="profile-card-2"><img src="<?php echo $mostrar2['Imagen'] ?>" class="w-100" height="200px">
                        <div class="profile-name"><?php echo $mostrar2['Nombre'] ?></div>
                        <div class="profile-username mx-5">Click para ver mas</div>
                    </div>
                </div>
                <?php
            } 
                ?>
           

            
        </div>
</div>
<div class="img-proy">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="text-white mt-5 tx-26 txw-600">PROYECTO RECIENTES</p>
            </div>
            <div class="col-sm-6 col-12 tx-18">
                <p class="text-white text-center color-5">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </div>
        </div>
        <div class="row pb-5">
            <?php
            $conexion=mysqli_connect('localhost','root', '','qr');
            $sql= "Select * from projects LIMIT 9";
            $result= mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
                ?>
                <div class="col-12 col-sm-4 my-1">
                    <a href="{{ route('proyectos.index') }}">
                        <div class="profile-card-2"><img src="<?php echo $mostrar['Imagen'] ?>" class="w-100" height="200px">
                            <div class="profile-name"><?php echo $mostrar['Nombre'] ?></div>
                            <div class="profile-username mx-5">Ver mas proyectos</div>
                        </div>
                    </a>
                </div>
                <?php
            }
             ?>
             <div id="contacto"></div>
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

