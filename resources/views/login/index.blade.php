<?php
/**
 *Ar2Sistemas
 *@autor Yago Rebello
 *@layout Alexandre
 */
?>

<link rel="stylesheet" href="{{asset('site/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<script src="{{ asset('site/js/jquery.min.js')}}" ></script>
<script src="{{ asset('site/js/login/login.js')}}" ></script>

<title>SystemCloud</title>
<head>
    <style>
        .select2-results {
            color: black !important;
        }
        input{
            color: black !important;
        }

        .header{
            padding: 10px;
        }

        body {
        background-image: url({{ asset('site/images/home_background.png') }});
        font-family: Roboto, sans-serif;
        background-size: 100vw 100vh; /* Tamanho da viewport */
        background-repeat: no-repeat;
        background-position: center center; /* Centraliza a imagem na viewport */
        }
        #loginCase{
            max-width: 1000px;
        }

        @media only screen and (max-width: 780px){
            .content{
                display: grid !important;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
{{--<script src="https://www.google.com/recaptcha/enterprise.js?render=6LfK2p8hAAAAAOO2ApPP7sSe0exHtfJIMLg4FpbI"></script>--}}
<!------ Include the above in your HEAD tag ---------->
@if (session()->has('alert'))
    <div class="alert alert-danger" style="text-align: center">
        {{session('alert')}}
    </div>
@endif
<div id="loginCase" class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="card" style="border-radius: 20px;background-color:#f5f5fd;box-shadow: 5px 5px 10px 2px #31567c91;">
            <div class="header">
                <h4 style="text-align: center;"></h4>
            </div>
            <div class="card-body">
                @if(session('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('danger') }}
                    </div>
                @endif
                <form method="post" action="{{route('auth.user')}}">
                    @csrf
                    <input type="hidden" class="hide" id="csrf_token" name="csrf_token" value="C8nPqbqTxzcML7Hw0jLRu41ry5b9a10a0e2bc2">
                    
                    <div class="content" style="display: flex; flex-direction: column; align-items: center;">
                        <div class="logos">
                            <div>
                                <img src="{{asset('site/images/systemcloud.png')}}" height="270px";/>
                            </div>
                        </div>
                        <div class="campos row">
                            <div class="col-11">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Cadastrado" required>
                                    <label for="">Email <i class="fa fa-envelope-open-o" aria-hidden="true"></i></label>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                            <div class="col-11">
                                <div class="form-floating mb-3">
                                    <input  type="password" id="password" class="form-control" name="password" placeholder="Senha" >
                                    <label for="password" id="password">Senha <i class="fa fa-unlock" aria-hidden="true"></i></label>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                            <div class="col-1" style="margin-top:22px ">
                                <div class="form-floating mb-3" >
                                    <a  type="button" id="mostrarSenha" title="Visualizar  Senha"><i id="icon" class="bi bi-eye-slash" style="color:blue;font-size:20px;height:50%"></i> </a>
                                </div>
                            </div>
                            <input type="hidden" name="redirect" value="">
                            <div class="form-group text-center d-flex flex-column">
                                <button id="Btnlogin" class="btn btn-primary btn-lg">Entrar</button>
                                <br>
                                <i class="bi bi-arrow-counterclockwise"></i>
                                <a href="" style="color: #33435d;text-decoration: none;font-size: 16px;padding: 0;font-weight: bold;">Esqueci minha senha</a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <a href="https://ar2sistemas.com.br/"><img src="{{asset('site/images/logo.png')}}" height="100px"; style="position: absolute;left: 0;bottom:0;"/></a>
</div>