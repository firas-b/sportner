@extends('layout')
@section('content')

  <div class="">
    <form  class=" " action="/posts" method="post">
        @csrf
        <!-- Name input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example1">tags</label>
          <input type="text"   placeholder="tags must be separated by ' , '" id="form4Example1" name="tags" class="form-control" />
        
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example2">location</label>
          <input type="text" id="form4Example2"  name="location"class="form-control" />
          
        </div>
      
        <!-- Message input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example3">Message</label>
          <textarea class="form-control" id="form4Example3" rows="4" name="message"></textarea>
          
        </div>
      
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
          <label class="form-check-label" for="form4Example4">
            Send me a copy of this message
          </label>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
      </form>
  </div>
@endsection
