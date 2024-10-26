<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">
    <title>Lista Producto</title>
    <link rel="stylesheet" href="{{asset('css/tablaservicio.css')}}">
</head>
<body>
    <!-- Incluye una plantilla externa llamada 'cabeceraAdmin' que probablemente contiene la cabecera o el menú de la página de administración -->
    @include('cabeceraAdmin')

    <!-- Saltos de línea para dar espacio visual en la página -->
    <br><br><br><br><br><br><br>

    <!-- Formulario para agregar un producto, enviando los datos a la URL "/agregarProducto" mediante el método POST -->
    <form action={{url("/agregarProducto")}} method="post">
        <!-- Token de protección contra ataques CSRF (Cross-Site Request Forgery), necesario en Laravel -->
        @csrf

        <!-- Campo de entrada para el nombre del producto, es obligatorio -->
        <input type="text" placeholder="Producto" name="producto" required>
        <br>
        <!-- Campo de entrada para la descripción del producto, es opcional -->
        <input type="text" placeholder="Descripción" name="descripcion">
        <br>
        <!-- Campo de entrada para el precio del producto, es obligatorio -->
        <input type="text" placeholder="Precio" name="precio" required>
        <br>
        <!-- Campo de entrada para la cantidad del producto, es obligatorio -->
        <input type="text" placeholder="Cantidad" name="cantidad" required>
        <br>
        <!-- Campo de selección de fecha para ingresar la fecha de vencimiento del producto, es obligatorio -->
        <input type="date" id="fechaVencProd" name="fechaVencimiento" required>
        <br>
        <!-- Campo de entrada para la marca del producto, es obligatorio -->
        <input type="text" placeholder="Marca" name="marca" required>
        <br>
        <!-- Botón para enviar el formulario y agregar el producto -->
        <input type="submit" value="Agregar">
    </form>

    <br><br>

    <!-- Tabla para mostrar la lista de productos agregados. Cada producto se muestra en una fila separada -->
    <table border="1">
        <tr>
            <!-- Encabezados de las columnas de la tabla, que corresponden a las propiedades del producto -->
            <th>nombreProd</th>
            <th>descripcionProd</th>
            <th>precioProd</th>
            <th>cantidadProd</th>
            <th>idMarca</th>
            <th>fechaVencProd</th>
        </tr>

        <!-- Estructura de Blade para recorrer la lista de productos y mostrar cada uno en una fila -->
        @foreach ($listaProducto as $productos)
        <tr>
            <!-- Muestra el nombre del producto -->
            <td>{{$productos -> nombreProd}}</td>

            <!-- Muestra la descripción del producto -->
            <td>{{$productos -> descripcionProd}}</td>

            <!-- Muestra el precio del producto -->
            <td>{{$productos -> precioProd}}</td>

            <!-- Muestra la cantidad disponible del producto -->
            <td>{{$productos -> cantidadProd}}</td>

            <!-- Muestra el ID de la marca del producto -->
            <td>{{$productos -> idMarca}}</td>

            <!-- Muestra la fecha de vencimiento del producto -->
            <td>{{$productos -> fechaVencProd}}</td>

            <!-- Formulario para eliminar un producto específico -->
            <td>
                <!-- El formulario envía una solicitud DELETE a la ruta 'eliminarProducto', pasando el ID del producto a eliminar -->
                <form action="{{route('eliminarProducto', $productos -> idProd)}}" method="post">
                    <!-- Token de protección CSRF para la seguridad del formulario -->
                    @csrf
                    <!-- Método DELETE para indicar que es una operación de eliminación -->
                    @method('DELETE')
                    <!-- Botón para enviar el formulario y eliminar el producto -->
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
