<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::latest()->get();
        return view('pages.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.posts.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'description' => 'required',
        ]);

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('foto', $file_name);
        
        Post::create([
            'id' => $request->id,
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
        ]);

        return redirect('posts')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('pages.post.post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('pages.posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'description' => 'required',
        ]);

        // Jika ada file gambar yang diupload, simpan dan ambil nama file yang disimpan
        if ($request->hasFile('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $file_name = $request->image->getClientOriginalName();
            $image_path = $request->image->storeAs('foto', $file_name);
            $post->image = $image_path;
        }

        // Update data lainnya
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect('posts')->with('success','Post updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/posts')->with('success','Post deleted successfully');
    }
}
