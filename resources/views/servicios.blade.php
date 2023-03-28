@extends('layouts.app')

@section('servicios', 'Servicios')

@section('content')

<title>Servicios</title>
<link rel="stylesheet" href="assets/footer/fonts/icomoon/style.css"> 
<!-- Style CSS -->
<link rel="stylesheet" href="assets/footer/css/style.css">
<style>
    .menu-admin{
    display: none !important;
}
.img-projects{
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  border-radius: 10px;
  background: #6675df;

  
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  
  letter-spacing: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  text-decoration: none !important;
}

.login100-form-btn:hover {
  background: #333333;
}
</style>
    <div class="img-nosotros mb-0 mb-sm-5">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <p class="text-center text-white txw-600 tx-26">SERVICIOS</p>
                    <p class="text-center text-white txw-400 tx-14">Inicio > Servicios</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">

            <?php
                $conexion=mysqli_connect('localhost','root', '','qr');
                $sql= "Select * from services limit 3";
                $result= mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <div class="col-sm-4 col-12 mb-2 my-3">
                        <img src="<?php echo $mostrar['Imagen'] ?>"class="img-projects w-100" height="200px" alt="cargando..."  data-bs-toggle="collapse" data-bs-target="#id<?php echo $mostrar['id'] ?>" aria-expanded="false">
                          <div class="collapse" id="id<?php echo $mostrar['id'] ?>">
                            <div class="card card-body text-center">
                                <p><b><?php echo $mostrar['Nombre'] ?></b></p>
                                <?php echo $mostrar['Descripccion'] ?>
                                <a class="login100-form-btn my-1 tx-16" href="{{ route('cotizas.create') }}">Cotizar un servicio</a>
                            </div>
                          </div>
                    </div>
                    <?php
                }
                 ?>
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