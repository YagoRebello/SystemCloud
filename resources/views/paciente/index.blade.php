@extends("layouts.default", ['title' => 'Paciente'])
@section('content')
    @if (session('status'))
        <x-alert-default/>
    @endif
    <head>
        <style>
            body {
                background-image: url({{ asset('site/images/background.png') }});
                font-family: Roboto, sans-serif;
                background-size: 100vw 100vh; /* Tamanho da viewport */
                background-repeat: no-repeat;
                background-position: center center; /* Centraliza a imagem na viewport */
            }

            /* Estilo personalizado para os cards */
            .custom-card {
                background-color: white;
                border-radius: 5px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                margin: 10px; /* Espaçamento entre os cards */
                padding: 20px;
            }

        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    </head>
    <div class="panel-heading row">
        <div class="col-8">
        </div>
        <div class="col-4">
            <ul class="links">
                <li><a href="{{ route('Pacientes.create') }}"><i class="bi bi-plus-square"></i> Adicionar</a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body row" >
        <form method="GET">
            <div class="form-group row">
                <div class="col-4">
                    <label for="descricao">Descrição</label>
                    <input class="form-control" name="+" type="text" placeholder="Descrição">
                </div>
                <div class="col-8 mt-3 center">
                    <div class="col">
                        <a class="btn btn-surface btn-sm right" href="{{ route('Pacientes.index') }}"><i class="bi bi-eraser-fill"></i> Limpar</a>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-sm right"><i class="bi bi-search"></i> Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr style="color: black">
    <div class="panel-body row">

    </div>
@endsection
