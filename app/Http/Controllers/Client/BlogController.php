<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest('id')->paginate(10);
        return view('client.blogs.index', compact('blogs'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
         return view('client.blogs.show', compact('blog'));
    }


}
