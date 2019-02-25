<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <link rel="shortcut icon" href="{{ asset('img/shortcut.png') }}" alt="Fiscalía General del Estado de Veracruz">
      <link href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

      <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.css') }}">
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">
      <link rel="stylesheet" type="text/css" href="{{asset ('css/font-neosans.css')}}">
      <script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>

      <title>FGE-Finanzas </title>
      <div class="header"></div>
      <div class="pl-0 pl-xl-1 navbar navbar-expand-lg border-bottom text-light">
         <p class="navbar-brand h5 d-none d-sm-none d-xl-block">Finanzas</p>
         <em class="ml-auto d-sm-none d-none d-xl-block">fiscaliaveracruz.gob.mx</em>
         <p class="navbar-brand h5  d-sm-block d-xl-none" style="font-size: 65%">Finanzas</p>
         <em class="ml-auto d-sm-block d-xl-none" style="font-size: 65%">fiscaliaveracruz.gob.mx</em>
      </div>
      <style type="text/css">
         input[id=email1]{
            text-transform: lowercase;
         }
      </style>
   </head>
   <body class="hold-transition login-page">
      <div class="loginbox mt-5 card text-white bg-dark col-md-4" id="loginbox">
         <!-- logo -->
         <div class="card-header logo-loginfge arriba rounded-top">
            <a id="login-logo" ><img style="height: 100px" src="{{ asset('img/logo-fge-svg.svg') }}" alt=""></a>
         </div>
         <div class="card-body login-card-body rounded-bottom">
            <form method="POST" action="{{ route('login') }}" >
               @csrf
               <div class="row">
                  <div class="col-5 form-group"> 
                     <input id="email1" type="text" placeholder="Usuario" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email1" value="" required autofocus autocomplete="off">
                     
                  </div>
                  <div class="col-7 form-group">
                     <p style="color: #fff" class="pt-2">@fiscaliaveracruz.gob.mx</p>
                  </div>
                  <input type="hidden" value="" id="email" name="email">
               </div>
               <div class="row"> 
                  <div class="col-12">                      
                     <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="password" required autocomplete="off">
                  </div>
               </div>
               <div class="row text-center">
                  <div class="col-12">
                     <hr class="bg-secondary">
                     <button type="submit" class="btn btn-primary btn-block btn-lg">
                        {{('Entrar') }}
                     </button>
                     <div class="pt-1">
                        <center>
                           @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                 <strong >{{ $errors->first('email') }}</strong>
                              </span>
                           @endif
                           @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                 <strong>{{ $errors->first('password') }}</strong>
                              </span>
                           @endif 
                        </center>
                     </div>
                  </div>
               </div>
            </form>
         </div>     
      </div>
      <footer class="fixed-bottom border-top">
         <div clas="navbar navbar-expand-lg border-top text-light">
            <small class="text-muted">
               <em>
                  2019© Fiscalía General del Estado de Veracruz, DCIIT.
               </em>
            </small>
         </div>
      </footer>
      
      <script>
         $('#email1').keyup(function() {
            if(document.getElementById("email1")!=null)
               var usuario=document.getElementById("email1").value;
            else
               console.log(usuario);
            var email=usuario+'@fiscaliaveracruz.gob.mx';  
            $("#email").val(email);
         });
      </script>
      <script type="text/javascript">
         $(".reveal").on('click',function() {
            var $pwd = $(".pwd");
            if ($pwd.attr('type') === 'password') {
               $pwd.attr('type', 'text');
            } else {
               $pwd.attr('type', 'password');
            }
         });
      </script>
      <script>
         $("#email1").focusout(function() {
            $(this).val($(this).val().toLocaleLowerCase());
         });
      </script>
      <script>
         function showPass() {
            var x = document.getElementById("password");
            if (x.type === "password") {
               x.type = "text";
            } else {
               x.type = "password";
            }
         }
      </script>
   </body>
</html>
