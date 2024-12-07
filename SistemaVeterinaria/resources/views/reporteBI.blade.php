<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','REPORTE')

@push('css')
<link rel="stylesheet" href="{{ asset('css/reporte.css') }}">
@endpush
<!-- seccion donde se pone el contenido de la pagina -->
@section('contenido')

    <br><br><br><br>
    <div class="rounded-container">
        <iframe title="Reporte de ventas" width="600" height="486" src="https://app.powerbi.com/view?r=eyJrIjoiYjg5MjU0YjctOGQ1NS00ZTA0LTk0ZjQtYjNlM2QwMjYwMTFiIiwidCI6ImM0YTY2YzM0LTJiYjctNDUxZi04YmUxLWIyYzI2YTQzMDE1OCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
    </div>

@endsection