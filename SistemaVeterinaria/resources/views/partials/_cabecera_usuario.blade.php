{{-- cabecera para el usuario-cliente --}}
<nav>
    <div class="nav-header">
            <!-- Botón para mostrar el menú -->
        <button class="nav-toggle">
            <i class="fas fa-bars"></i> <!-- Icono de menú -->
        </button>

        <img class="log" src="\img\logo2.png" alt="logoempresa" usemap="#log">
        <map name="log">
            <area shape="circle" coords="1253,132,1321" href="{{ route('inicio') }}" alt="">
        </map>
        
        <label class="logo">
            <a style="color:yellow" class="gatonegro" href="{{ route('inicio') }}">Gato Negro</a>
        </label>
        
    </div>

    <ul class="nav-menu">
        <li><a class="active" href="{{ route('inicio') }}">Inicio</a></li>
        <li><a class="active" href="{{ route('sobrenosotros') }}">Nosotros</a></li>
        <li><a class="active" href="{{ route('servicios') }}">Servicios</a></li>
        <li><a class="active" href="{{ route('productos') }}">Productos</a></li>
        <li><a class="active" href="{{ route('block') }}">Blog</a></li>
        <li><a class="active" href="{{ route('contactanos') }}">Inicio Sesión</a></li>

        <div class="nav-header">
            <img class="log" src="\img\login.png" alt="logoempresa" usemap="#login">
            <map name="login">
                <area shape="circle" coords="1253,132,1321" href="{{route('cerrarSesion')}}" alt="">
            </map>
        </div>
    </ul>
</nav>

