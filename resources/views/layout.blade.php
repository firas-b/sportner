<!doctype html>
<html lang="en">

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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
            $( '#gaming ').load(function() {
                $( body).css("background-color", "yellow");
            });
        </script>
    <header>
        <nav class=" my-nav navbar navbar-light navbar-expand-lg ">
            <div class="container">


                <a class="navbar-brand" href="/"><h4><b><i class="fa-solid fa-s fa-bounce"></i>portner</b></h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/"><b> welecome {{auth()->user()->name }} </b></a>
                            </li>
                            <li  class="nav-item" >
                                <a class="nav-link" href="#"><i  class="fa-solid fa-right-to-bracket"></i> manage
                                    posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/user/logout"><i class="fa-solid fa-user-plus"></i> logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login"><i class="fa-solid fa-right-to-bracket"></i> login</a>
                            </li>
                            <li  style=""class="nav-item">
                                <a class="nav-link" href="/register"><i class="fa-solid fa-user-plus"></i> register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <img src="" alt="">
                <div class="carousel-item active" style="background-image: url('{{ asset('images/back1.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                </div>
                <div class="carousel-item " style="background-image: url('{{ asset('images/back2.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>

                </div>
                
                <div class="carousel-item " id="gaming" style="background-image: url('{{ asset('images/gaming1.png') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                </div>

                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </header>
    <div class="container-fluid  mt-4 my-2 ">
        @yield('content')
    </div>
    <x-flash_message/>


    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <form action="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12 mb-4 mb-md-0">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form5Example25" class="form-control" />
                            <label class="form-label" for="form5Example25">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                        <!-- Submit button -->
                        <a href="/posts/create">create a post</a>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</footer>




        
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>

</html>
