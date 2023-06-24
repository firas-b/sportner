@props(['post'])

<style>
    

    #card {
        /* margin-top: 0%;
         margin-bottom: 20px; */
        border-radius: 10px;
        width: 100%;
        background: linear-gradient(to top,
                #f8f9fa 0%,
                #f8f9fa 80%,
                rgba(81, 190, 249, 0.919) 90%,
                rgba(81, 190, 249, 0.919) 90%);
    }


    #link {
        display: block;
        width: 100px;
        height: 40px;
    }



    #button-solid {
    border: none;
    }
    #button-solid:focus {
        border: none;
        outline: none;
    }
</style>



<div class="col d-flex align-items-stretch my-2 p-1 ">
    <div id="card"class="card shadow-sm  " style="background-color:#f8f9fa ;width:fit-parent;">
        {{-- <img class="bd-placeholder-img card-img-top img-fluid" width="100%" height="150"
            xmlns="http://www.w3.org/2000/svg" src="{{ asset('images/logo_sportner.png') }}" style="max-height:160px;"
            focusable="false"> --}}


        <div class="card-body">

            <div class="row card-title  " style="margin-bottom: 20px;">

                <div class="col position-relative">
                    <div class="row">
                        <div class="col-10">
                            <img src="{{ $post->users->avatar ? asset('storage/'.$post->users->avatar) :asset('/images/no-image.jpg')}}"
                                width="50" class="rounded-circle ml-2">
                            <b class="ml-2" style="color:white">{{ $post->users->name }}</b>
                        </div>
                        <div class="col-2 postion-relative">
                            @if (auth()->id() == $post->user_id)
                                <div class="dropdown dropstart" style="transform: translate(80%); ">
                                    <i id="link" class="fas fa-ellipsis-vertical" data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <ul class="dropdown-menu fluid" style="">
                                        <li>
                                            <span class="dropdown-item">
                                                <a class="ml-1" href="/posts/{{ $post->id }}/edit"><i
                                                    class="fas fa-edit"></i> Edit post</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="dropdown-item">
                                                <form action="/posts/{{ $post->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button id ="button-solid"type="submit"><i class="fas fa-trash"></i></button> Delete post
                        
                        
                                                </form>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>

            </div>

            <div class="head" style="margin-bottom: 15px">
                <i class="fa-solid fa-location-dot"></i> {{ $post->location }} <small
                    class="ml-4">{{ $post->created_at }}</small>
            </div>
            <p class="card-text ">{{ $post->message }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group mt-1 btn-group-sm">
                    <a href="/posts/{{ $post->id }}" ><i
                            class="fas fa-eye"></i></a>      

                            <a href="{{$post->users->facebook}}" ><i class="fa-brands fa-facebook" style="margin-left: 15px "></i></a>
                            <a href="https://wa.me/+216{{$post->users->phone}}" ><i class="fa-brands fa-whatsapp" style="margin-left: 15px "></i></a>
                </div>
                <small class="text-muted mt-1">
                    <x-tags :tagscsv="$post->tags" />
                </small>
            </div>


        </div>
    </div>
</div>
