<!doctype html>
    <html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Default')| Financiero</title>
        <link rel="icon" href="{{ asset('img/iconofge.jpg') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <link href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset ('css/font-neosans.css')}}">
        

        @yield('css')
    </head>

    <body class="hold-transition sidebar-mini sidebar-collapse">
        <!--<div class="loader"></div>-->
        <div class="wrapper">
            <!-- Navbar -->
            @include('template.menus.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('template.menus.sidebar')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">@yield('title')</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: black"><i class=" nav-icon fa fa-home"></i> Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        @yield('title')
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                                @yield('content')
                                {{-- @include('layouts.modal_gral') --}}
            <div class="modal fade " id="logoutmodal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
                <div class="modal-content rounded col-md-12 px-0">
                  <div class="modal-header justify-content-center bg-dark"><h4> <i class="fa fa-power-off"></i><strong> Salir</strong></h4></div>
                  <div class="modal-body text-center bg-dark">
                    <h5><i class="fas fa-sign-out-alt"></i> ¿Está seguro que desea cerrar sesión?</h5>
                  </div>
                  <div class="modal-footer bg-dark">
                    <a class="btn btn-secondary col " data-dismiss="modal" >Cancelar</a>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-secondary col">Salir</a>
                  </div>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </div>
            </div>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- @include('admin.modals.foto-perfil') --}}
            </div>
        </div>
        <!-- SCRIPTS -->
        <script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>
        
        <script src="{{ asset('plugins/Bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/Bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/Font_awesome/js/all.js') }}"></script>

        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

        <script type="text/javascript">

            $(function (){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });

            $("body").on('change', '.mayuscula', function(field){
                $(this).val($(this).val().toUpperCase());
            });

            $("body").on('keypress', '.soloNumeros', function(event){
                var key = window.event.keyCode;
                if (key < 48 || key > 57) {
                    return false;
                }
            });

            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('form-control');
                    
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('focusout', function(event) {
                            //console.log( $(form).attr("name") );
                            if( $(form).val() == '' ){
                                $( '#'+$(form).attr("id") ).removeClass('is-valid');
                                $( '#'+$(form).attr("id") ).addClass('is-invalid');
                                $( '#error_'+$(form).attr("id") ).show();
                            }else{
                                $( '#'+$(form).attr("id") ).removeClass('is-invalid');
                                $( '#'+$(form).attr("id") ).addClass('is-valid');
                                $( '#error_'+$(form).attr("id") ).hide();
                            }
                        }, false);
                    });
                }, false);
            })();
        </script>
        <!-- loader -->
        
        @yield('scripts')
        @include('template.menus.footer')

        @stack('scripts')
        <!--<script type="text/javascript">
            $(window).on('load', function(){
                $(".loader").fadeOut("slow");
            });
            $(document).ready(function() {
                @stack('docready-js')
            });
        </script>--> <!-- loader -->
    </body>
</html>
