<nav>
        <ul>
                <li class="{{ setActive('home') }}"><a href="{{route('home')}}">Inicio</a></li>
                <li class="{{ setActive('grupos.index') }}"><a href="{{route('grupos.index')}}">Grupos</a></li>
                <li class="{{ setActive('contact') }}"><a href="{{route('contact')}}">Contacto</a></li>
                <li class="{{ setActive('about') }}"><a href="{{route('about')}}">Nosotros</a></li>
        </ul>
</nav>