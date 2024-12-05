<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());

        return to_route('posts.index')
            ->with('status', 'Post created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view(
            'posts.show',
            ['post' => $post]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SavePostRequest $request, Post $post)
    {
        $post->updateOrFail($request->validated());

        return to_route(
            'posts.show',
            $post
        )->with('status', __('¡Post updated successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')
            ->with('status', 'Post Deleted!');
    }

    public function create()
    {
        return view(
            'posts.create',
            ['post' => new Post()]
        );
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view(
            'posts.edit',
            ['post' => $post]
        );
    }
}
