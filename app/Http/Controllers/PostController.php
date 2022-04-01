<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostVisit;
use App\Events\PostVisited;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate();
        $postsVisited = PostVisit::select('post_id')->selectRaw('count(post_id) as visits')
            ->whereDate('created_at', '>=', now()->subWeek())
            ->with('post:id,title')
            ->groupBy('post_id')
            ->orderBy('visits', 'DESC')
            ->limit(1);

        return view('posts.index', compact('posts', 'postsVisited'));
    }

    public function create(): View
    {
        return view('posts.create');
    }


    public function store(StorePostRequest $request): RedirectResponse
    {
        Post::create($request->validated());
        return redirect()->route('posts.index');
    }


    public function show(Post $post, Request $request): View
    {
        $ip = $request->ip();
        $userAgent = $request->userAgent();

        PostVisited::dispatch($post, $request->ip(), $request->userAgent());

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
