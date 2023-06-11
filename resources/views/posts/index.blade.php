@extends('layout')
@section('content')

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
