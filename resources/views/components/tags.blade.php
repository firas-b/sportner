@props(['tagscsv'])

@php
    $tags=explode(',',$tagscsv);
@endphp



    @foreach ($tags as $tag)
   
    <a class="tag" id="tag "href="/?tag={{$tag}}">{{$tag}}</a>
    
    @endforeach
   
   