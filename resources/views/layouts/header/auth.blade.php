<nav class="navbar navbar-expand-lg bg-color">
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: -moz-center;">
        <div style="width: 20%;display:inline-flex;">
            <button class="navbar-toggler" style="display:block;border: none;height: 50px;margin-top: 5px;padding-left: 30px;padding-right: 30px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span><i class="bi bi-list" style="font-size:2em; color:#33435d"></i></span>
            </button>
        </div>
        <div style="width: 60%;text-align: center;">
            <h3>{{$title}}</h3>
        </div>
        <div style="width: 13%;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="justify-content: right;">
                <li class="nav-item dropdown rounded">
                    <a class="nav-link dropdown-toggle" style="color:#960E0E" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->nome}}
                    </a>
                    <ul class="dropdown-menu bg-color" style="color:#960E0E" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-key-fill"></i> Alterar Senha</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" id="logoutForm" action={{route('logout')}}>
                                @csrf
                                <a class="dropdown-item" href="{{route('logout')}}"
                                    onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
                                >
                                    <i class="bi bi-box-arrow-right"></i>Sair
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div style="position: sticky;float: right;z-index: 9998;width: 7%;text-align: right;">
                <img src="{{asset('site/images/logo_preview.png')}}" height="65px" style="border-left: 0.1px solid #960E0E;border-radius: 50%;background-color: white;">
        </div>
    </div>
</nav>
