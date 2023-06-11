@extends('layout')
@section('content')



{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
   $('nav .navbar-nav li a').children().css({color: "white"});
});
</script> --}}
@php
    $user=auth()->user();
@endphp
    <div class="row  mx-2" style=" background-color :white; ">

        <div class=" col d-flex justify-content-center p-0" style="margin-top:80px">
            <div class="card mb-3 mx-2 " style="background-color:black; width:80% ;border-radius: 30px;">
                <div class="row g-0">
                    <div class="col-md-3 d-flex justify-content-center py-1 " style="max-height:400px">
                        <img src="{{asset('storage/' .$user->avatar)}}" class="img-fluid   translate-middle mx-auto w-75" style="max-height: 300px;border-radius: 50% 20% / 10% 40%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row row-cols-md-2 row-cols-sm-1 row-cols-1  d-felx justify-content-center">
                                <div class="  col text-white ">
                                    <h5>{{$user->name}}</h5><br>
                                    <p><i class=" fas fa-light fa-envelope"></i> email : {{$user->email}}</p>
                                    <p><i class="fa-solid fa-phone"></i> phone : {{$user->phone}}</p>
                                    <p><i class="fa-solid fa-location"></i> location : {{$user->city}}</p>

                                </div>
                                <div class="col  mt-2 text-white  d-block justify-content-center">
                                    <h5>  <i class=" fas fa-duotone fa-chart-simple"></i> some stats </h5><br>
                                    <p> <i class="  fa-solid  fa-message"></i> Posts : {{count($user->posts)}}</p>
                                    <p> <i class="fa-solid fa-message"></i> comments : 0  </p> 


                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-container>
        @include('partials._search')
        <x-row>
        
            @unless (count($posts)==0)
            @foreach ($posts as $post)
            <x-post-card :post="$post"/>
        
            @endforeach
            @else
            <div class="alert alert-danger" role="alert">
               No posts 
              </div>
            @endunless
          
        </x-row> 
        
        
        <div class="d-flex ">
            {!! $posts->links() !!}
        </div>
     </x-container>



@endsection
