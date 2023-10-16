<?php
/**
 * @author Alexandre Correia
 */
?>
@extends("layouts.default",['title' => 'Erro - Informações'])
@section('content')
    <style>
        #page_flash{
            top: 150px !important;
            left: 35% !important;
            height: 500px !important;
            display: flex;
            flex-direction: column;
            font-size: 20px;

        }
        #page_flash i{
            font-size: 70px !important;
        }
        #page_flash a i{
            font-size: 15px !important;
        }

        .wrapper{
            background-color: black;
        }
    </style>
    @if (session('status'))
        <x-alert-default/>
    @endif
@endsection
