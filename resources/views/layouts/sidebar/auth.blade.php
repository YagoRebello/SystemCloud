<div class="collapse collapse-horizontal bg-color shadow-sm" id="collapseExample" tabindex="-1" aria-labelledby="collapseExample" aria-hidden="true">
    <div style="background-image: url({{asset('site/images/petcloud_logo.png')}});
    background-repeat: repeat-x;
    background-size: auto;
    background-position-x: center;
    background-position-y: bottom;
    background-color: #EFEFF2 !important;
    background-blend-mode: lighten;
    height: 90vh;">
        <div class="collapse-content">
            <div class="body">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link" href="{{route('home')}}"><i class="bi bi-house-fill"></i> Inicio</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/"><i class="bi bi-person-plus-fill"></i>Novo Usuario</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('GruposUsuario.index')}}"><i class="bi bi-people-fill"></i>Grupos Usuario</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('Laudo.index')}}"><i class="bi bi-clipboard2-pulse-fill"></i> Laudo</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('Exames.index')}}"><i class="bi bi-heart-pulse-fill"></i> Exames</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('Pacientes.index')}}"><i class="bi bi-person-heart"></i> Pacientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
