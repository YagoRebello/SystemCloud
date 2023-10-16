<?php
/**
* @author Alexandre Correia
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{asset('site/images/Petcloud_fivicon.png')}}" />


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/js/jquery-ui-1.13.2.custom/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>{{$title}}</title>

    <script src="{{ asset('site/js/jquery.min.js')}}" ></script>
    <script src="{{ asset('site/js/select2.min.js')}}" ></script>
    <script src="{{ asset('site/js/bootstrap.js')}}" ></script>
    <script src="{{ asset('site/js/jquery.mask.min.js')}}" ></script>
    <script src="{{ asset('site/js/jquery.cpfcnpj.js')}}" ></script>
    <script src="{{ asset('site/js/jquery.maskMoney.js')}}" ></script>
    <script src="{{ asset('site/js/app.js')}}" ></script>
    <script src="{{ asset('site/js/jquery-ui-1.13.2.custom/jquery-ui.min.js')}}" ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body{
            font-family: 'Roboto';
            height: 100vh;
            overflow: hidden;
        }

        i{
            font-size: 1.5em;
            color: #33435d;
            transition: font-size 0.3s ease-in-out 100ms,
            color 0.3s ease-in-out 100ms;
        }

        i:hover{
            font-size: 2.0em !important;
            border-radius: 10px;
            padding: 3px;
            color: #960E0E !important;
        }

        button:hover i{
            font-size: 2.0em !important;
            border-radius: 10px;
            padding: 3px;
            color: #960E0E !important;
        }

        a:hover i{
            font-size: 2.0em !important;
            border-radius: 10px;
            padding: 3px;
            color: #960E0E !important;
        }

        #collapseExample{
            height: 94vh;
            float: left;
            position: absolute;
            z-index: 1020;
            text-align: center;
        }
        .collapse-content{
            width: 210px;
        }

        .nav-item:hover{
            color: #960E0E !important;
            border-bottom: 1px solid #960E0E !important;
            border-bottom-right-radius: 40px;
        }

        .container-fluid{
            min-height: 91vh;
        }
        .navbar{
            font-weight: 400;
            color: #33435d;
            height: 6vh;
        }
        .collapse-horizontal{
            font-weight: 400;
            color: #33435d;
            text-align: left !important;
        }

        .nav-link{
            color:#33435d !important;
            font-weight: 400;
        }

        .nav-link:hover, .nav-link:focus > i{
            color: #960E0E !important;
        }

        .fixed-bottom{
            text-align: center;
            height: 3vh;
            font-family: initial;
            color: #33435d;
        }

        li a i{
            padding-right: 5px;
        }

        #page_flash{
            animation: show_slide 1.5s ease forwards;
            position: absolute;
            z-index: 9999;
            width: 40%;
            text-align: center;
            left: 0;
        }

        @keyframes show_slide {
            0%{
                transform: translateX(100%);
            }
            40%{
                transform: translateX(-10%);
            }
            80%{
                transform: translateX(0%);
            }
            100%{
                transform: translateX(-10px);
            }
        }

        .dropdown-menu .dropdown-submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;

        }
        .dropdown-menu .dropdown-submenu-left {
        right: 100%;
        left: auto;
        }
        .dropdown-menu > li:hover > .dropdown-submenu {
        display: block;
        }

        .dropdown-submenu > li:hover> .dropdown-item:hover{
            color: #dbb04a !important;
            border-bottom: 1px solid #dbb04a !important;
            border-bottom-right-radius: 40px;
        }

        .dropdown-item{
            color: #33435d;
        }

        .loading {
            z-index: 20;
            position: absolute;
            top: 0;
            left:-5px;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
        }
        .loading-content {
            position: absolute;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            top: 40%;
            left:35%;
            }

        @media screen and (max-width: 991px){
            .columns{
                height: 600px;
                overflow-y:scroll;
            }
        }

        @media screen and (min-width: 992px){
            .columns{
                -moz-column-count:2; /* Firefox */
                -webkit-column-count:3; /* Safari and Chrome */
                column-count:2;
                max-width: 600px;
                max-height:400px;
            }
        }

        .spinner {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            color: black;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .spin {
            animation: spin 1s linear infinite;
        }

    </style>
    <livewire:styles />
</head>
<body>
    <livewire:scripts />
    @include('layouts.page_templates.auth')
</body>
</html>
<script>
   showLoading();

    $('#page_flash_close').click(function(){
        $('#page_flash').hide();
    });

    $(function(){
        hideLoading();
    });


    function showLoading() {
        $('#loading').show();
    }

    function hideLoading() {
        $('#loading').hide();
    }

   $(function () {
       $('[data-bs-toggle="tooltip"]').tooltip();
   });
</script>
