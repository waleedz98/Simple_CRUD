<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts=Post::all();
        // return $posts;
        return view('posts.index',compact('posts'));
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
    public function store(StorePostRequest $request)
    {
                                    //insert into database by save()//////////
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
// ----------------------------------------------------------------------------

         //insert into database by create()

        //   Post::create(
        //    $request->all() //to select all columns in the table [note->name of input form should equal= name of table column]
        //  );

         Post::create([
            'title'=> $request->title,
            'body'=> $request->body
         ]);

        return redirect()->route('posts')->with('ceated successfully');
        // return response('success');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //

        $posts= Post::onlyTrashed()->get();
        return view('posts.showdelete',compact('posts'));
    }
    

        public function showpost($id)
    {
        //

        $posts= Post::findOrFail($id)->get();
        return view('posts.show',compact('posts'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post, $id)
    {
        //
        $post=Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
//first way update by save()
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
//or
//seconde way to update by update()
        // $post->update([
        //     'title'=>$request->title,
        //     'body'=>$request->body,
        // ]);

//or
//therde way to update by $request->all()
        // $post->update($request->all());

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        // Post::findOrFail($id)->delete();

        //or
        Post::destroy($id);
        // $table = Post::findOrFail($id)->softDeleted('posts');
        

        return redirect()->route('posts');

    }
}
