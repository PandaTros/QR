@extends('layouts.app')

@section('login', 'Login')

@section('content')

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->

</head>
<style>
  .wrap-login100{
    background-image: url('assets/login/images/bg-01.jpg');
    background-repeat: no-repeat;
    background-size: contain;
  }
  .menu-user{
    display: none !important;
  }
  .menu-admin{
    display: none !important;
  }
</style>
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      
      <form method="POST" action="" class="login100-form validate-form">
      <div class="row justify-content-center">
        <div class="col-sm-6 col-8">
          <img src="assets/img/users/qr.png" class="w-100" alt="">
        </div>
      </div>
        @csrf
        <span class="login100-form-title p-b-43">
          Inicia Sesion para continuar
        </span>
        @error('message')  
            <div class="row justify-content-center">
             <div class="col-12">
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ $message }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
             </div>
            </div>
          @enderror
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" id="email" name="email" placeholder="Correo">
          <span class="focus-input100"></span>
        </div>
        
        <div class="wrap-input100 validate-input" data-validate="Password is required">
          <input class="input100" type="password" id="password" name="password" placeholder="Contraseña">
          <span class="focus-input100"></span>
        </div>
        <div class="flex-sb-m w-full p-t-3 p-b-32">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Recordar
            </label>
          </div>
          <div>
            <a href="{{ route('register.index') }}" class="txt1">
              Crear cuenta
            </a>
          </div>
        </div>
        <div class="container-login100-form-btn">
          <button type="submit" class="login100-form-btn">
            Acceder
          </button>
        </div>
        <div class="text-center p-t-46 p-b-20">
          <span class="txt2">
            Visita nuestras redes sociales
          </span>
        </div>

        <div class="login100-form-social flex-c-m">
          <a href="https://www.facebook.com/QmasRDisenoYConstruccion" target="blank" class="login100-form-social-item flex-c-m bg1 m-r-5">
            <i class="fa fa-facebook-f" aria-hidden="true"></i>
          </a>
          <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </div>
      </form>
      @endsection
      <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
      </div>
    </div>
  </div>
</div>
  
    
   
  















<!--===============================================================================================-->
<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets/login/js/main.js"></script>





































