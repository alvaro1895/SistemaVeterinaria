<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Producto</title>
    <link rel="stylesheet" href="{{asset('css/tablaservicio.css')}}">
</head>
<body>
    <!-- resources/views/cabeceraAdmin.blade.php -->
@include('cabeceraAdmin')
    <br><br><br><br><br><br><br>
    <form action={{url("/agregarProducto")}} method="post">
        @csrf

        <input type="text" placeholder="Producto" name="producto" required>
        <br>
        <input type="text" placeholder="Descripción" name="descripcion">
        <br>
        <input type="text" placeholder="Precio" name="precio" required>
        <br>
        <input type="text" placeholder="Cantidad" name="cantidad" required>
        <br>
        <input type="date" id="fechaVencProd" name="fechaVencimiento" required>
        <br>
        <input type="text" placeholder="Marca" name="marca" required>
        <br>
        <input type="submit" value="Agregar">
    </form>
    
    <br><br>
    <table border="1">

        <tr>
            <th>nombreProd</th>
            <th>descripcionProd</th>
            <th>precioProd</th>
            <th>cantidadProd</th>
            <th>idMarca</th>
            <th>fechaVencProd</th>

        </tr>

        @foreach ($listaProducto as $productos)
        <tr>
                <td>{{$productos -> nombreProd}}</td>
                <td>{{$productos -> descripcionProd}}</td>
                <td>{{$productos -> precioProd}}</td>
                <td>{{$productos -> cantidadProd}}</td>
                <td>{{$productos -> idMarca}}</td>
                <td>{{$productos -> fechaVencProd}}</td>
                <td>
                    <form action="{{route('eliminarProducto',$productos -> idProd)}}" method="post">
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