@extends('layout')
@section('content')
<style>

.card-text {
        /* the line height must be known */
        line-height: 2.5ex;
    }

    .card-text {
        /* restrict the height to three lines */
        height: calc(2.5ex * 7);

        /* hide the overflow */
        overflow: hidden;
    }
</style>
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
