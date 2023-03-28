@extends('layouts.app')

@section('template_title')
    Create Cotiza
@endsection

@section('content')

<!--============================= Ruta de estilos =======================================================-->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/plugin/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/footer/fonts/icomoon/style.css"> 
<!-- Style CSS -->
<link rel="stylesheet" href="../assets/footer/css/style.css">
<style>
    .menu-admin{
    display: none !important;
}
.menu-user{
    display: none !important;
}
</style>
<!--================================= End ruta de estilos =================================================-->
<title>Cotiza</title>
<header class="container">
    <nav class="navbar navbar-expand-lg fixed-top mb-2">
        <div class="container">
        <a href="{{ route('home.index') }}" class="navbar-brand text-uppercase font-weight-bold">
            <img src="../assets/img/users/qr.png" alt="logo" class="img-top">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('home.index') }}" class="nav-link text-uppercase font-weight-bold">Inicio</a></li>
                    <li class="nav-item"><a href="{{ route('nosotros.index') }}" class="nav-link text-uppercase font-weight-bold">Nosotros</a></li>
                    <li class="nav-item"><a href="{{ route('proyectos.index') }}" class="nav-link text-uppercase font-weight-bold">Proyectos</a></li>
                    <li class="nav-item"><a href="{{ route('servicios.index') }}" class="nav-link text-uppercase font-weight-bold">Servicios</a></li>
                    <li class="nav-item"><a href="{{ route('preguntas.index') }}" class="nav-link text-uppercase font-weight-bold">Preguntas</a></li>
                    <li class="nav-item"><a href="{{ route('cotizas.create') }}" class="nav-link text-uppercase font-weight-bold">Cotiza tu proyecto</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>
                @includeif('partials.errors')

                    <div>
                        <form method="POST" action="{{ route('cotizas.store') }}">
                            @csrf

                            @include('cotiza.form')

                        </form>
                    </div>

@endsection
