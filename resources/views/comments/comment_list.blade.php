<style>
    #scrollable {
        ::-webkit-scrollbar {
            width: 15px;
        }

        ::-webkit-scrollbar-track {
            background-color: blue;
        }

        ::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.2);
        }
    }
</style>

<section style="background-color: #f7f6f6;">
    <div class="container mt-3 text-dark" id="scrollable" style="max-height:350px;overflow: scroll;">
        <div class="row d-flex justify-content-center w-100">
            <div class="col-md-12 col-lg-10 col-xl-8  ">
                <div class="d-flex mb-4 sticky-top" style="background-color:blueviolet;">
                    <h4 class="text-dark mt-4 mr-4">Comments</h4>

                    <form class="mt-4" action="/comments/{{ $post->id }}" method="post">
                        @csrf
                        {{-- <input type="text" name="text" class="form-control">

                            <input type="submit" clas="btn-sm" value="add"> --}}

                        <div class="input-group input-group mb-3">
                            <input class="input-group-text" type="submit" value="add" id="inputGroup-sizing-sm">
                            <input type="text" name="text" class="form-control" aria-label="Sizing example input"
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
    </div>
</section>
