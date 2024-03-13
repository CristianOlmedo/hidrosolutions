
<li>
    <p>Bienvenido <b>{{ auth()->user()->first_name}}</b></p>
</li>

<li>
    <a href="{{route('login.destroy')}}">Cerrar sesión</a>
</li>