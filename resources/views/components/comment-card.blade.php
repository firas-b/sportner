
@props(['comment'])

<div class="card mb-3 mx-2 ml-2 py-0">
    <div class="card-body">
        <div class="d-flex flex-start">
            <img class="rounded-circle shadow-1-strong me-3"
                src="{{ $comment->users->avatar ? asset('storage/' . $comment->users->avatar) : asset('/images/no-image.jpg') }}" alt="avatar"
                width="40" height="40" />
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="text-primary fw-bold mb-0">
                        
                      
                        <span class="text-dark  mx-2 ms-2"><span class="text-primary">{{$comment->users->name}}</span><br>
                            <span class="text-black mx-4"> {{$comment->text}}</span>
                        </span>
                    </div>
                    <p class="mb-0">a days ago</p>
                </div>
               
            </div>
        </div>
    </div>
</div>