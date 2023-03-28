@extends('layouts.app')

@section('template_title')
    Cotiza
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
 

<link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-colvis-2.3.4/b-html5-2.3.4/b-print-2.3.4/datatables.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/plugin/font-awesome-4.7.0/css/font-awesome.min.css">
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


<br><br><br>
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-4">Cotizaciones</h2>
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
                <table class="table table-responsive table-light table-striped" id="myTable-cotizas">
                        <thead class="thead">
                            <tr>
                                <th>Nombres</th>
                                <th>Numero</th>
                                <th>Correo</th>
                                <th>Servicio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cotizas as $cotiza)
                                <tr>
                                    <td>{{ $cotiza->Nombres }}</td>
                                    <td>{{ $cotiza->Numero }}</td>
                                    <td>{{ $cotiza->Correo }}</td>
                                    <td>{{ $cotiza->Servicio }}</td>
                                    <td>
                                        <form action="{{ route('cotizas.destroy',$cotiza->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('cotizas.show',$cotiza->id) }}"><i class="fa fa-fw fa-eye"></i> Ver mensaje</a>
                                            
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  
                
                {!! $cotizas->links() !!}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" defer></script>
    
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"defer></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-colvis-2.3.4/b-html5-2.3.4/b-print-2.3.4/datatables.min.js"defer></script>

    

    <script>
      $(document).ready( function () {
        
    $('#myTable-cotizas').DataTable({
        responsive: "true",
        dom:'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Exportar a excel',
                className: 'btn btn-success mx-1'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fa fa-file-pdf-o"></i>',
                titleAttr: 'Exportar a excel',
                className: 'btn btn-danger'
            }
        ]
    });
} );

    </script>
@endsection
