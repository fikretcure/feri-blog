<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::auth()->latest('id')->paginate(10);
        return view('panel.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('panel.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        Blog::create($request->validated() + ['user_id' => Auth::id()]);
        return redirect()->route('panel.blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::auth()->findOrFail($id);

        $categories = Category::all();
        return view('panel.blogs.show', ['blog' => $blog, 'categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $blog = Blog::auth()->findOrFail($id);
        $blog->update($request->validated());
        return redirect()->back()->with('success', 'Blog güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('panel.blogs.index')->with('success', 'Blog silindi.');
    }
}
