@extends('layouts.app')

@section('')
    {{ $project->name ?? 'Show Project' }}
@endsection

@section('content')
<style>
    .menu-user{
    display: none !important;
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
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">
                <a class="login100-form-btn" href="{{ route('projects.index') }}"> Volver</a>
            </div>
        </div>

        <div class="row justify-content-center my-2">
            <div class="col-12 col-sm-6 text-center">
                <div class="card" >
                    <img src="{{ $project->Imagen }}" class="w-100" alt="{{ $project->Imagen }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $project->Nombre }}</h5>
                      <p class="card-text">{{ $project->Descripcion }}</p>
                      <strong><p class="card-text">{{ $project->Duracion }}</p></strong>
                      <p class="card-text">Proyecto para {{ $project->Cliente }}</p>
                    </div>
                  </div>
            </div>
        </div>
    </section>
@endsection
