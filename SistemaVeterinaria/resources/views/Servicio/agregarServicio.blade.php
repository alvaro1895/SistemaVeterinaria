<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Servicios</title>
    <link rel="stylesheet" href="{{asset('css/tablaservicio.css')}}">
    
</head>
<body>

<!-- resources/views/cabecera.blade.php -->
@include('cabeceraAdmin')

    <br><br><br><br><br><br><br><br>

    <form action={{url("/agregarServicio")}} method="post">
        @csrf

        <input type="text" placeholder="Servicio" name="servicio" required>
        <br>
        <input type="text" placeholder="Descripción" name="descripcion">
        <br>
        <input type="text" placeholder="Precio" name="precio" required>
        <br>
        <input type="submit" value="Agregar">
    </form>

    <table class="" border="1" >
        <tr>
            <th>Nombre del Servicio</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Accion</th>
        </tr>

        @foreach ($listaServicios as $servicios)
            <tr>
                <td>{{$servicios -> nombreServ}}</td>
                <td>{{$servicios -> descripcionServ}}</td>
                <td>{{$servicios -> precioServ}}</td>
                <td>
                    <form action="{{route('eliminarServicio',$servicios -> idServ)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>    
        @endforeach
        
        
    </table>

</body>
</html>