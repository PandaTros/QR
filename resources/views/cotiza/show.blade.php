@extends('layouts.app')

@section('template_title')
    {{ $cotiza->name ?? 'Show Cotiza' }}
@endsection

@section('content')
<style>
    .menu-user{
    display: none !important;
}
.btn-volver{
    background-color: rgb(241, 63, 63) !important;
}
.btn-msj{
    background-color: rgb(45, 218, 60) !important;
}
</style>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="../assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="../assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/login/css/main.css">
<br><br><br>



    <section class="content container">
        <div class="card text-center">
            <div class="card-header">
              Mensaje de <b>{{ $cotiza->Nombres }}</b>
            </div>
            <div class="card-body">
              <h5 class="card-title">Servicio de {{ $cotiza->Servicio }}</h5>
              <p class="card-text">{{ $cotiza->Mensaje }}</p>
              <div class="alert alert-warning my-2" role="alert">
                {{ $cotiza->Terreno }} cuenta con terreno
              </div>
              <div class="alert alert-info" role="alert">
                Presupuesto de ${{ $cotiza->Presupuesto }}
              </div>
              <div class="row justify-content-center">
                <div class="col-12 col-sm-2">
                    <a class="login100-form-btn btn-msj" href="https://api.whatsapp.com/send?phone={{ $cotiza->Numero }}&text=Hola%20*{{ $cotiza->Nombres }}*%20somos%20la%20empresa%20Q+R,%20te%20contactamos%20para%20dar%20seguimiento%20a%20tu%20servicio%20de%20cotizacion%20de%20{{ $cotiza->Servicio }}%20que%20solicitaste."> Enviar Mensaje</a>
                </div>
                <div class="col-12 col-sm-2">
                    <a class="login100-form-btn" href="mailto:{{ $cotiza->Correo }}?Subject=Servicio de {{ $cotiza->Servicio }} Q+R&body=Hola%20{{ $cotiza->Nombres }}%20te%20contactamos%20de%20la%20empresa%20Q+R,%20para%20dar%20seguimiento%20a%20tu%20servicio%20de%20cotizacion%20de%20{{ $cotiza->Servicio }}%20que%20solicitaste."> Enviar correo</a>
                </div>
                <div class="col-12 col-sm-2">
                    <a class="login100-form-btn btn-volver" href="{{ route('cotizas.index') }}"> Volver</a>
                </div>
                
            </div>
            </div>
            <div class="card-footer text-muted">
              Duracion aproximada {{ $cotiza->Tiempo }}
            </div>
          </div>

    </section>
@endsection
