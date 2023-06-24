<style>
     #scrollable::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}

#gradiant{
background: linear-gradient(to top,
                #f8f9fa 0%,
                #f8f9fa 15%,
                rgba(81, 190, 249, 0.919)100%,
                rgba(81, 190, 249, 0.919) 100%);

}
    
</style>

<section style="background-color: #f7f6f6;">
    <div class="container mt-3 text-dark p-0 " id="scrollable"
        style="max-height:350px;overflow: scroll;overflow-style:none;">
        <div class="row d-flex justify-content-center w-100">

            <div class="d-flex mb-4 sticky-top"  id="gradiant" style="background-color:rgba(137, 210, 210, 0.919) ;">
                <h4 class="text-dark mt-4 mx-4">Comments</h4>

                <form class="mt-4" action="/comments/{{ $post->id }}" method="post">
                    @csrf
                    {{-- <input type="text" name="text" class="form-control">

                            <input type="submit" clas="btn-sm" value="add"> --}}

                    <div class="input-group input-group mb-3">
                        <input class="input-group-text" type="submit" value="add" id="inputGroup-sizing-sm">
                        <input type="text" autocomplete="off" name="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>
                </form>

            </div>

            @unless (count($comments) == 0)
                @foreach ($comments as $comment)
                    <x-comment-card :comment="$comment" />
                @endforeach
            @else
                no cooemnts
            @endunless






        </div>
    </div>
</section>
