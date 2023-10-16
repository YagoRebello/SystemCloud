<?php
/**
 * @author Yago Rebello
 **/

?>
@extends("layouts.default",['title' => 'Cadastrar Paciente'])
@section('content')
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
                <li><a href="{{route('Pacientes.index')}}"><i class="bi bi-card-list"></i>Listagem</a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body row">
        <form method="POST" action="{{route('Pacientes.store')}}">
            @csrf
            <div class="">
                <div class="col-4">
                    <label for="titulo">Descrição</label>
                    <input id='descricao' name='descricao' class='form-control' type='text' placeholder="Descrição">
                </div>
            </div>
            <hr>
            <div class="">
                <button class="btn btn-primary right">Gravar</button>
            </div>
        </form>
    </div>
@endsection
