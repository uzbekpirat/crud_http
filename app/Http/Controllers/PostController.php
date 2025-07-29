<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create($request->all());
        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = Post::all();
        return view('show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $post = Post::findOrFail($id);
    return view('edit', compact('post'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
   $post = Post::findOrFail($id);

    $post->title = $request->input('title');
    $post->description = $request->input('description');
    $post->save();
    
    return redirect()->route('index')->with('success', 'Post muvaffaqiyatli yangilandi.');
    }


 public function patch(string $id)
{
    $post = Post::findOrFail($id);
    return view('patch', compact('post'));
}

public function patch_s(Request $request, string $id)
    {
   $post = Post::findOrFail($id);
    $post->description = $request->input('description');
    $post->save();
    
    return redirect()->route('index')->with('success', 'Post muvaffaqiyatli yangilandi.');
    }
    public function destroy(string $id)
    {
       $post = Post::findOrFail($id);
       $post->delete();
      return redirect()->route('show')->with('success', 'Post muvaffaqiyatli o\'chirildi.');
    }
}
