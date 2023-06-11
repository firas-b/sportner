<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Album example · Bootstrap</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/Sportner official logo.png')}}">
    <!--fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
   
    <!--links for css and js-->
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script src="{{ asset('js/nav.js') }}"></script>
    <!-- tailwind for paginatoion-->
<style>





     nav .navbar-nav li a,navbar-brand{
  color: rgb(5, 5, 5) !important;
  }  
</style>

</head>


<body>

  
    <header>
        <nav class=" my-nav navbar navbar-light navbar-expand-lg ">
            <div class="container">


                <a class="navbar-brand" href="/"><h4 ><b ><i class="fa-solid fa-s fa-bounce"></i>portner</b></h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a   class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/"><b id=" " > welecome {{auth()->user()->name }} </b></a>
                            </li>
                            <li  class="nav-item" >
                                <a class="nav-link"   id=" "  href="/posts_manage"> <i class="fa-solid fa-gear"></i>  manage posts
                                   </a>
                            </li>
                            <li class="nav-item">
                                <a   id=" " class="nav-link" href="/user/logout"><i  id=" "  class="fa-solid fa-user-plus"></i> logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a  id=" " class="nav-link" href="/login"><i class="fa-solid fa-right-to-bracket"></i> login</a>
                            </li>
                            <li  style=""class="nav-item">
                                <a  id=" " class="nav-link" href="/register"><i class="fa-solid fa-user-plus"></i> register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        @php
            $uri=\Request::route()->getName()
        @endphp

        @if(\Request::route()->getName()!= 'manage') 
            @include('partials.caroussel') 
         @endif
    </header>

   
   
  
        @yield('content')
    






    <x-flash_message/>


    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>
