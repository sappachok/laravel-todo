<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return Inertia::render(
            'Blogs/index',
            [
                'blogs' => $blogs
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(
            'Blogs/create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required'
        ]);
        Blog::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->slug),
            'content' => $request->content
        ]);
        sleep(1);

        return redirect()->route('blogs.index')->with('message', 'Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return Inertia::render(
            'Blogs/edit',
            [
                'blog' => $blog
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required'
        ]);

        $blog->title = $request->title;
        $blog->slug = \Str::slug($request->slug);
        $blog->content = $request->content;
        $blog->save();
        sleep(1);

        return redirect()->route('blogs.index')->with('message', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        sleep(1);

        return redirect()->route('blogs.index')->with('message', 'Blog Delete Successfully');
    }
}