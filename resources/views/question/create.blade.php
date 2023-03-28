@extends('layouts.app')

@section('template_title')
    Create Question
@endsection

@section('content')
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/plugin/font-awesome-4.7.0/css/font-awesome.min.css">

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
<style>
    .menu-user{
    display: none !important;
}
</style>
<br><br><br>
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">

                @includeif('partials.errors')
                <h2 class="text-center my-3">Nuevo Pregunta</h2>
                <form method="POST" action="{{ route('questions.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('question.form')

                        </form>
               
            </div>
        </div>
    </section>
@endsection
