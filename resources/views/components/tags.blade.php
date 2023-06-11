@props(['tagscsv'])

@php
    $tags=explode(',',$tagscsv);
@endphp



    @foreach ($tags as $tag)
   
    <a  style=" font-style: italic; color:black;" href="/?tag={{$tag}}">#{{$tag}}</a>
    
    @endforeach
   
   