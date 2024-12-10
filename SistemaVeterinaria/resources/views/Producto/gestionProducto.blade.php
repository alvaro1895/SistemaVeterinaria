@extends('layouts.administrador')

@section('titulo', 'Gestion de Productos')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/gestionProductos.css') }}">
@endpush

@section('contenido')
    <!-- Saltos de línea para dar espacio visual en la página -->
    <br><br><br><br><br><br><br>

    <!-- Formulario para agregar un producto, enviando los datos a la URL "/agregarProducto" mediante el método POST -->
    <div class="form-container2">
        <h2>GESTIÓN DE PRODUCTOS</h2>
        <form action={{route('gestionProducto.agregar')}} method="post" enctype="multipart/form-data">
            <!-- Token de protección contra ataques CSRF (Cross-Site Request Forgery), necesario en Laravel -->
            @csrf
            
                <label for="nombreProducto" class="label-diseño">Nombre del Producto:</label>           
                <input type="text"  name="nombreProducto" placeholder="Producto" required>
            
        
            
                <label for="descripcionProducto" class="label-diseño">Descripción del Producto:</label>
                <input type="text"  name="descripcionProducto" placeholder="Descripción" required>
                  
                <label for="precioProducto" class="label-diseño">Precio:</label>
                <input type="number"  name="precioProducto" placeholder="Precio" required>
               
                <label for="cantidadProducto" class="label-diseño">Cantidad:</label>
                <input type="number"  name="cantidadProducto" placeholder="Cantidad" required>
                  
                <label for="imagenProducto" class="label-diseño">Imagen del Producto:</label>
                <input type="file"  name="imagenProducto" required>
            
            <!-- Botón para enviar el formulario y agregar el producto -->
            <input type="submit" class="btn-agregar" value="Agregar">
        </form>
    </div>
    <br><br>
<div class="form-container">
    <!-- Tabla para mostrar la lista de productos agregados. Cada producto se muestra en una fila separada -->
    <table border="1">
        <tr>
            <!-- Encabezados de las columnas de la tabla, que corresponden a las propiedades del producto -->
            <th>Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>RutaImagen</th>
            <th>Imagen</th>
            <th>Acción</th>
        </tr>

        <!-- Estructura de Blade para recorrer la lista de productos y mostrar cada uno en una fila -->
        @foreach ($productos as $productos)
        <tr>
            <!-- Muestra el nombre del producto -->
            <td>{{$productos->nombreProducto}}</td>

            <!-- Muestra la descripción del producto -->
            <td>{{$productos->descripcionProducto}}</td>

            <!-- Muestra el precio del producto -->
            <td>{{$productos->precioProducto}}</td>

            <!-- Muestra la cantidad disponible del producto -->
            <td>{{$productos->cantidadProducto}}</td>

            <!-- Muestra ruta de la imagen del producto -->
            <td>{{$productos->imagenProducto}}</td>

            <!-- Muestra la imagen del producto -->
            {{-- <td><img src="{{ asset($producto->imagenProducto) }}" alt="Imagen del producto"></td> --}}
            <td><img src="{{$productos->imagenProducto}}" alt="Imagen del producto">

            <td>
                <button
                    type="button"
                    class="edit-btn"
                    onclick="openModal(this)"
                    data-id="{{ $productos->idProducto }}"
                    data-nombre="{{ $productos->nombreProducto }}"
                    data-descripcion="{{ $productos->descripcionProducto }}"
                    data-precio="{{ $productos->precioProducto }}"
                    data-cantidad="{{ $productos->cantidadProducto }}"
                    data-imagen="{{ $productos->imagenProducto }}">
                    Editar
                </button>
                <form action="{{ route('gestionProducto.eliminar', $productos->idProducto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">Eliminar</button>
                </form>
            </td>
        </tr> 
        @endforeach
    </table>
</div>
    <div id="editarModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Editar Producto</h2>
            <form id="formEditarProducto" action="{{ route('gestionProducto.editar', $productos->idProducto)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- @if ($productos)
                    <input type="hidden" name="idProducto" id="idProducto" value="{{$productos->idProducto}}">
                @else
                    <p>No se encontró el producto</p><br>                  
                @endif --}}
                    <input type="hidden" name="idProducto" id="idProducto" value="">
                                
                <div>
                    <label for="nombreProducto" class="label-diseño">Producto:</label>
                    <input type="text" id="nombreProducto" name="nombreProducto" required>
                </div>
                
                <div>
                    <label for="descripcionProducto" class="label-diseño">Descripción:</label>
                    <input type="text" id="descripcionProducto" name="descripcionProducto" required>
                </div>
                
                <div>
                    <label for="precioProducto" class="label-diseño">Precio:</label>
                    <input type="number" id="precioProducto" name="precioProducto" step="0.01" required>
                </div>
                
                <div>
                    <label for="cantidadProducto" class="label-diseño">Cantidad:</label>
                    <input type="number" id="cantidadProducto" name="cantidadProducto" required>
                </div>
                
                <div>
                    <label for="imagenProducto" class="label-diseño">Imagen:</label>
                    <input type="text" id="imagenProducto" name="imagenProducto" required>
                </div>
    
                <button type="submit" class="submit-button">Actualizar</button>
            </form>
        </div>
    </div>
    @endsection

    @push('javascript')
    <script>
        function openModal(button) {
            // Obtener los datos del producto desde los atributos del botón
            const id = button.getAttribute('data-id');
            const nombre = button.getAttribute('data-nombre');
            const descripcion = button.getAttribute('data-descripcion');
            const precio = button.getAttribute('data-precio');
            const cantidad = button.getAttribute('data-cantidad');
            const imagen = button.getAttribute('data-imagen');
    
            // Rellenar los campos del formulario dentro del modal
            document.getElementById('idProducto').value = id;
            document.getElementById('nombreProducto').value = nombre;
            document.getElementById('descripcionProducto').value = descripcion;
            document.getElementById('precioProducto').value = precio;
            document.getElementById('cantidadProducto').value = cantidad;
            document.getElementById('imagenProducto').value = imagen;
    
            // Actualizar la acción del formulario con el ID del producto
            const form = document.getElementById('formEditarProducto');
            form.action = `{{ route('gestionProducto.editar', ':id') }}`.replace(':id', id);
    
            // Mostrar el modal
            document.getElementById('editarModal').style.display = 'block';
        }
    
        function closeModal() {
            // Ocultar el modal
            document.getElementById('editarModal').style.display = 'none';
        }
    
        // Cerrar el modal al hacer clic fuera de él
        window.onclick = function (event) {
            const modal = document.getElementById('editarModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        };
    </script>
    @endpush
    