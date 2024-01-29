<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .ligtpurble{
            background-color: #C3ACD0;
        }

        *{
            color: #674188;
        }
        .ligtbeige{
            color: #F7EFE5;
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
</head>
<style>

  .gradient-custom {
    /* fallback for old browsers */
    background: #a18cd1;

    background: linear-gradient(
      45deg,
     #FFFBF5,
      rgba(91, 14, 214, 0.6) 100%
    );
  }
</style>

<div
  class="bg-image"
  style="
    background-image: url('../../images/bg2.jpg');
    height: 100vh ;
  "
>
 

  <div class="mask gradient-custom">
    <div class="d-flex justify-content-center align-items-center h-100">
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 display-3 ">mobileStore</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">The best online devices store</h2>
                        <a class="btn btn-purble" href="{{route('main')}}">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
  </div>
</div>


