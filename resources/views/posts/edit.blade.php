@extends('layout')
@section('content')


<form  action="/posts/{{$post->id}}" method="post">
    @csrf
    @method('put')
    <!-- Name input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example1">tags</label>
      <input type="text"  value="{{$post->tags}}" placeholder="tags must be separated by ' , '" id="form4Example1" name="tags" class="form-control" />
     
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example2">location</label>
      <input type="text" id="form4Example2"  value="{{$post->location}}" name="location"class="form-control" />
      
    </div>
  
    <!-- Message input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example3">Message</label>
      <textarea class="form-control" id="form4Example3" rows="4"  value="" name="message"> {{$post->Message}} </textarea>
      
    </div>
  
   
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
  </form>
@endsection
