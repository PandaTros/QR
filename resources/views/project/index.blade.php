@extends('layouts.app')

@section('')
    
@endsection

@section('content')
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
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
<style>
    .card-outline{
        border-radius: 10% !important;
    }
    .card-outline:hover{
        transform: scale(102%);
        transition: .1s ease-in;
    }
    .menu-user{
        display: none !important;
    }
    .img-card{
        height: 250px;
        border-top-left-radius: 10%;
        border-top-right-radius: 10%;
    }
    .menu-user{
    display: none !important;
}
</style>
    <div class="container">
        <br>
            <div class="row justify-content-center my-5">
                <div class="col-12 col-sm-6">
                    <a href="{{ route('projects.create') }}" class="login100-form-btn"  data-placement="left">
                        Nuevo proyecto
                    </a>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="row">
                <div class="col-12">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span>{{ $message }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                </div>
               </div>
               @endif


<div class="row text-center">
    @foreach ($projects as $project)
    <div class="col-12 col-sm-4 my-3">
        <div class="card card-outline">
            <img src="{{ $project->Imagen }}" class="w-100 img-card" alt="{{ $project->Imagen }}">
            <div class="card-body">
              <h5 class="card-title">{{ $project->Nombre }}</h5>
              <p class="card-text">{{ $project->Descripcion }}</p>
              <form action="{{ route('projects.destroy',$project->id) }}" class="text-center py-3" method="POST">
                <a class="btn btn-sm btn-primary " href="{{ route('projects.show',$project->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                <a class="btn btn-sm btn-success" href="{{ route('projects.edit',$project->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
            </form>
            </div>
          </div>
    </div>
  @endforeach    
</div>
</div>
    
@endsection
