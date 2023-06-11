@extends('layout')
@section('content')
@php
    use Illuminate\Support\Facades\View;
@endphp
<x-container>
<div class="row  ">


    <div class="col-lg-6">
        <x-post-card :post="$post"/>
    </div>

    <div class="col-lg-6">
     @include('comments.comment_list',[
    'comments'=>$post->comments,
     ])
    </div>





</div>
</x-container>
    
@endsection