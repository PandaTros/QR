@extends('layouts.app')

@section('')
    Update Service
@endsection

@section('content')
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="../../assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="../../assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../assets/login/css/util.css">
        <link rel="stylesheet" type="text/css" href="../../assets/login/css/main.css">
    <!--===============================================================================================-->
<style>
    .menu-user{
    display: none !important;
}
</style>
<br><br><br>
    <section class="content container">
       
           <div class="row justify-content-center">
            <div class="col-12 col-sm-6">

                @includeif('partials.errors')
                <h2 class="text-center">Actualizar datos</h2>
                
                   
                <form method="POST" action="{{ route('services.update', $service->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('service.form')

                </form>
                
            </div>
           </div>
       
    </section>
    <script src="../../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="../../assets/js/bootstrap.bundle.js"></script>
    <script>
        $(function () {
        $(window).on('scroll', function () {
            if ( $(window).scrollTop() > 10 ) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
    
    </script>
@endsection
