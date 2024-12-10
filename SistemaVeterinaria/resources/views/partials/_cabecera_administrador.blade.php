{{-- Cabecera del administrador --}}
<nav>
    <div class="nav-header">
            <!-- Botón para mostrar el menú -->
            <button class="nav-toggle">
                <i class="fas fa-bars"></i> <!-- Icono de menú -->
            </button>

        <img class="log" src="\img\logo2.png" alt="logoempresa" usemap="#log">
        <map name="log">
            <area shape="circle" coords="1253,132,1321" href="..\html\gatonegro.html" alt="">
        </map>

        <label class="logo">
            <a style="color:yellow" class="gatonegro" href="..\html\gatonegro.html">Gato Negro - Administrador</a>
        </label>

    </div>

    <ul class="nav-menu">
          
        <!-- 
        {{-- <li><a class="active" href="{{ route('reporte') }}">Reporte</a></li>   --}}
        <li><a class="active" href="..\html\TablaUsuario.html">Gestión Usuarios</a></li>
        <li><a class="active" href="..\html\TablaServicio.html">Gestión Servicios</a></li>
        <li><a class="active" href="..\html\TablaProductos.html">Gestión Productos</a></li>
        <li><a class="active" href="..\html\TablaUsuario.html">Gestión Reserva</a></li> 
        -->
        
        <li><a class="active" href="{{ route('panelAdmin') }}">Panel de Administrador</a></li>  
        <li><a class="active" href="{{route('cerrarSesion')}}">Cerrar Admin → </a></li>
        

        <div class="nav-header">
            <img class="log" src="\img\puerta.png" alt="logoempresa" usemap="#login">
            <map name="login">
                <area shape="circle" coords="1253,132,1321" href="{{route('cerrarSesion')}}" alt="">
            </map>
        </div>
    </ul>
</nav>
