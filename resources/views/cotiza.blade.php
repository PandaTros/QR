@extends('layouts.app')

@section('cotiza', 'Cotiza')

@section('content')

<title>Cotizacion</title>
<style>
    .menu-admin{
    display: none !important;
}

</style>
    <div class="img-nosotros mb-0 mb-sm-5">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <p class="text-center text-white txw-600 tx-26 mb-0">Cotiza tu Proyecto</p>
                    <p class="text-center text-white txw-600 tx-16">Sin compromiso</p>
                    <p class="text-center text-white txw-400 tx-14">Inicio > Servicios</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="text-center tx-26">Cotiza tu proyecto</p>
        <form>
            <div class="form-group">
                <div class="row justify-content-center">
                    <div class=" my-1 col-12 col-sm-4">
                        <label class="txw-600">Nombre</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese su nombre">
                    </div>
                    <div class=" my-1 col-12 col-sm-4">
                        <label class="txw-600">Correo</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese su correo">
                    </div>
                    <div class=" my-1 col-12 col-sm-8">
                        <label class="txw-600">Numero</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese su Numero telefonico">
                    </div>
                    <div class=" my-1 col-12 col-sm-8">
                        <label class="txw-600">Servicio que desea</label>
                        <input type="text" class="form-control" id="" placeholder="Servicio">
                    </div>
                    <div class=" my-1 col-12 col-sm-8">
                        <label class="txw-600">¿Ya dispone de un terreno?</label>
                        <input type="text" class="form-control" id="" placeholder="Especificar">
                    </div>
                    <div class=" my-1 col-12 col-sm-8">
                        <label class="txw-600">¿Cuanto presupuesto dispone?</label>
                        <input type="text" class="form-control" id="" placeholder="Especificar">
                    </div>
                    <div class=" my-1 col-12 col-sm-8">
                        <label class="txw-600">¿En cuanto tiempo desea realizar el trabajo?</label>
                        <input type="text" class="form-control" id="" placeholder="Especificar">
                    </div>
                    <div class=" my-1 col-12 col-sm-8">
                        <label>Mensaje</label>
                        <textarea class="form-control" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-2">
                        <button class="w-100 btn btn-primary" id="btn-cotizacion">Enviar</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

    <div class="container"><br><br>
        <div class="row text-center">
            <div class="col-sm-4 col-12 col-contacto">
                <img src="assets/img/telefono.svg" class="img-contacto" alt="">
                <div class="">
                    <p class="p-contacto">email@example.com</p>
                    <span>+390-211-881</span>
                </div>
            </div>
            <div class="col-sm-4 col-12 col-contacto">
                <img src="assets/img/ubicacion.svg" class="img-contacto-u" alt="">
                <div class="">
                    <p class="p-contacto">Merida, Yucatan</p>
                    <span>Avenida Montejo</span>
                </div>
            </div>
            <div class="col-sm-4 col-12 col-contacto">
                <img src="assets/img/calendario.svg" class="img-contacto mt-3" alt="">
                <div class="">
                    <p class="p-contacto">Lunes a Sabado</p>
                    <span>8:00 - 16:00</span>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div>
        <iframe class="w-100" height="600px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14904.78304176129!2d-89.58502739092268!3d20.944652261247853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567059b52c7847%3A0x61f84f34dded80b1!2sACUAPARQUE!5e0!3m2!1sen!2smx!4v1676742388390!5m2!1sen!2smx"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection