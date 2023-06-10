{{-- @if (session()->has('message'))
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">

        <div class="fixed-top">
            <div class="row">
                <div class="w-50 mx-auto justify-content-center justify-text-center" style="background-color:crimson;">
                    <p class="" style="color: aliceblue;margin-left:38%">{{ session('message') }}</p>
                </div>
            </div>



        </div>
    </div>

   
@endif --}}
@if(session()->has('message'))
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>

    .flash-message{

    position: fixed; 
    top: 0; 
    left: 40%; 
    padding-top: 0.5rem;
    padding-bottom: 0.4rem; 
    padding-left: 12rem;
    padding-right: 12rem; 
    --transform-translate-x: 20%; 
    color: #ffffff; 
    background-color:rgb(240, 84, 84);
    }
</style>

 {{-- //'message ' is in the controller assigned to the redirecting route

//this is using alpine js to set the appernace time to 3 seconds --}}
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="flash-message">
  <p>
    {{session('message')}}
  </p>
</div>
@endif
