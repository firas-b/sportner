<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    return view ('posts.index',[

        'posts'=>Post::latest()->filter(request(['tag','search']))->paginate(8),
    ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFeilds=$request->validate([

            'tags'=>'required',
            'message'=>'required',
            'location'=>'required',
        ]);


         $formFeilds['user_id']=auth()->id();

        Post::create($formFeilds);
             return redirect('/')->with('message','Post created successfully');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return view('posts.show',[

            'post'=>Post::findorfail($id)->get(),
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit',[

            'post'=>Post::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formFeilds=$request->validate([

            'tags'=>'required',
            'message'=>'required',
            'location'=>'required',
        ]);

        $post=Post::find($id);

        $post->update($formFeilds);
        return redirect('/')->with('message','post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $post= post::find($id);
       $post->delete();
        return redirect('/')->with('message','post deleted successfully');
    }
}
