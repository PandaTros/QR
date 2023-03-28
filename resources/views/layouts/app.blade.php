<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/plugin/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<style>
   /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.navbar {
    transition: all 0.4s;
}

.navbar .nav-link {
    color: #fff;
}

.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #fff;
    text-decoration: none;
}

.navbar .navbar-brand {
    color: #fff;
}


/* Change navbar styling on scroll */
.navbar.active {
    background: #fff;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.active .nav-link {
    color: #555;
}

.navbar.active .nav-link:hover,
.navbar.active .nav-link:focus {
    color: #555;
    text-decoration: none;
}

.navbar.active .navbar-brand {
    color: #555;
}


/* Change navbar styling on small viewports */
@media (max-width: 991.98px) {
    .navbar {
        background: #fff;
    }

    .navbar .navbar-brand, .navbar .nav-link {
        color: #555;
    }
}
.img-top{
    height: 40px;
}
</style>
<body>
    
    <header class="container menu-user">
        <nav class="navbar navbar-expand-lg fixed-top mb-2">
            <div class="container">
            <a href="{{ route('home.index') }}" class="navbar-brand text-uppercase font-weight-bold">
                <img src="assets/img/users/qr.png" alt="logo" class="img-top">
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
    <header class="menu-admin">
        <nav class="navbar navbar-expand-lg fixed-top bg-1">
            <div class="container">
              <a class="navbar-brand" href="#">Q+R</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('projects.index') }}">Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('services.index') }}">Servicios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('questions.index') }}">Preguntas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('cotizas.index') }}">Cotizaciones</a>
                  </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                <a class="nav-link" aria-current="page" href="{{ route('login.destroy') }}">Cerrar Sesion</a>
                </ul>
                
              </div>
            </div>
          </nav>
    </header>
                    
    
    

    @yield('content')
   
</body>

<script src="../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
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
</html>