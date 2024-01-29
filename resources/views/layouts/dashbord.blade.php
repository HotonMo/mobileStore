<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="dist/css/bootstrap-iconpicker.min.css"/>

    

    <style>
      *{
        font-family:cairo;
      }
        .ligtpurble{
            background-color: #C3ACD0;
        }

        *{
            color: #674188;
        }
        .purble-bg{
            background-color: #674188;
        }
        .ligtbeige{
            color: #F7EFE5;
        }
        .beige{
            background-color: #FFFBF5;
        }
        
        .secondaryColor{
            color: #674188;
            background-color: #F7EFE5;
        }
        .btn-purble{
            color: #F7EFE5;
            background-color:  #674188;
        }
       
        .btn-purble:hover{
            color: #674188;
            background-color:  #C3ACD0;
        }
        
    
   </style>
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body >
        <div id="app">
          <nav class="navbar navbar-expand-md navbar-light shadow-sm ligtpurble">
            <div class="container">
                <a class="navbar-brand" href="{{ url('main') }}">
                    <img src="../../images/logo.png" alt="logo" class="rounded" width="20%" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    
              <main class="py-0">
                <div class="">
                    <div class="row">
                        <div class="col-sm-2  beige ">
                            <div class="d-flex flex-column align-items-center align-items-sm-start my-2 px-3 pt-2 text-white min-vh-100 ">
                            
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                                    <li class="nav-item">
                                        <a href="{{route('controlpanel')}}" class="nav-link align-middle px-0 my-2 ">
                                          <i class="fa-solid fa-layer-group"></i> <span class="ms-1 d-none d-sm-inline fw-bold">All products</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('add-brand-view')}}" class="nav-link align-middle px-0 my-2">
                                          <i class="fa-regular fa-copyright"></i> <span class="ms-1 d-none d-sm-inline fw-bold"> Add brand</span>
                                        </a>
                                    </li>
                              
                                    <li class="nav-item">
                                      <a href="{{route('add-product-view')}}" class="nav-link align-middle px-0 my-2">
                                        <i class="fa-solid fa-sitemap"></i></i> <span class="ms-1 d-none d-sm-inline fw-bold">Add product</span>
                                      </a>
                                  </li>
                              
                                </ul>
                                <hr>
                              
                            </div>
                        </div>
                        <div class="col-sm-10 mt-3  d-flex justify-content-center">
                            @yield('content')
                        </div>
                    </div>
                   
                </div>
              
              </main>
       
       
       
       
       
       
        </div>
    
       
    
    </body>
    </html>
    