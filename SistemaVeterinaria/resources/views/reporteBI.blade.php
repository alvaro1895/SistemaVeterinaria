<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
<<<<<<< HEAD
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','REPORTE')

=======
@extends('layouts.administrador')
<!-- definiendo el titulo de la pagina -->
@section('titulo','REPORTE')
>>>>>>> 11334964d3455112497c3e6bcf136a5bf172670d
@push('css')
<link rel="stylesheet" href="{{ asset('css/reporte.css') }}">
@endpush
<!-- seccion donde se pone el contenido de la pagina -->
@section('contenido')
<<<<<<< HEAD

=======
>>>>>>> 11334964d3455112497c3e6bcf136a5bf172670d
    <br><br><br><br>
    <div class="rounded-container">
        <iframe title="Reporte de ventas" width="600" height="486" src="https://app.powerbi.com/view?r=eyJrIjoiYjg5MjU0YjctOGQ1NS00ZTA0LTk0ZjQtYjNlM2QwMjYwMTFiIiwidCI6ImM0YTY2YzM0LTJiYjctNDUxZi04YmUxLWIyYzI2YTQzMDE1OCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
<<<<<<< HEAD

=======
>>>>>>> 11334964d3455112497c3e6bcf136a5bf172670d
@endsection