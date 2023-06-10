@props(['post'])

<style>
    .card-text {
        /* the line height must be known */
        line-height: 2.5ex;
    }

    .card-text {
        /* restrict the height to three lines */
        height: calc(2.5ex * 10);

        /* hide the overflow */
        overflow: hidden;
    }



    .card{
          /* margin-top: 0%;
         margin-bottom: 20px; */

         width: 100%;
 
  background: linear-gradient(
    to top,
    #f8f9fa 0%,
    #f8f9fa 80%,
    rgba(158, 202, 202, 0.919) 90%,
    rgba(158, 202, 202, 0.919) 90%
  );
     
    }
</style>
<div class="col d-flex align-items-stretch my-2 ">
    <div class="card shadow-sm  " style="background-color:#f8f9fa ;width:fit-parent;">
        {{-- <img class="bd-placeholder-img card-img-top img-fluid" width="100%" height="150"
            xmlns="http://www.w3.org/2000/svg" src="{{ asset('images/logo_sportner.png') }}" style="max-height:160px;"
            focusable="false"> --}}


        <div class="card-body">
        
            <div class="row card-title  " style="margin-bottom: 20px;">

                <div class="col">
                    <img  src="{{ $post->users->avatar  ?   asset('storage/'.$post->users->avatar ) : asset('/images/no-image.jpg') }}" width="50" class="rounded-circle ">
                    <b class="ml-2">{{ $post->users->name }}</b>   
                </div>

            </div>
           
            <div class="head" style="margin-bottom: 15px">
                <i class="fa-solid fa-location-dot"></i> {{ $post->location }}  <small class="ml-4">{{$post->created_at}}</small>
            </div>
            <p class="card-text ">{{ $post->message }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group mt-1">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted mt-1">
                    <x-tags :tagscsv="$post->tags" />
                </small>
            </div>

            <!-- for testing -->
            <a href="/posts/{{ $post->id }}/edit">edit</a>

            <form action="/posts/{{ $post->id }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger btn-sm " value="delete" href="#" role="button">

            </form>
            <!--**************************************-->
        </div>
    </div>
</div>
