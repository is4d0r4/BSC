<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <!-- TROCA ESSE CDN PELO ARQUIVO LOCAL!!!! -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  {{-- <link rel="stylesheet" href="css/boostrap.min.css"> --}}
  <link href="{{('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
  <nav>
   <div class="nav-wrapper indigo darken-4"> 
     <div class="container">
       
      
       <a href="#!" class="brand-logo"><i class="large material-icons">layers</i>Base de Conhecimento</a>
       <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down">
         <li><a href="{{route('admin.cursos')}}">Home</a></li>
         @if(Auth::guest())
           <li><a href="{{route('site.login')}}">Login</a></li>
         @else
           <li><a href="{{route ('admin.cronograma.desen') }}">Cronograma</a></li>
           <li><a href="{{route ('admin.documentacao.desen') }}">Documentações</a></li>
           <li><a href="{{route ('admin.links.desen') }}">Links</a></li>
           <li><a href="#">{{Auth::user()->name}}</a></li>
           <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
         @endif
         
       </ul>
       <ul class="side-nav" id="mobile">
         <li><a href="/">Home</a></li>
         @if(Auth::guest())
           <li><a href="{{route('site.login')}}">Login</a></li>
         @else
           <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
           <li><a href="#">{{Auth::user()->name}}</a></li>
           <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
         @endif
       </ul>
     </div>
   </div>
 </nav>
</header>
