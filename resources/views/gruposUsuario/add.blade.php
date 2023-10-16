<?php
/**
 * @author Yago Rebello
 **/

?>
@extends("layouts.default",['title' => 'Adicionar Grupo de Usuario'])
@section('content')

    <div class="panel-heading row">
        <div class="col-8">

        </div>
        <div class="col-4">
            <ul class="links">
                <li><a href="{{route('GruposUsuario.index')}}"><i class="bi bi-card-list"></i>Listagem</a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body row">
        <form method="POST" action="{{route('GruposUsuario.store')}}">
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
