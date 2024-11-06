<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {
        $blog = Blog::orderBy('created_at', 'DESC')->paginate(10);
        return view('blog.blog', ['blog' => $blog]);
    }

    public function blog_page($slug) {
        $page = Blog::where('slug', $slug)->first();

        if($page == null) abort('404');

        return view('blog.blog-page', ['page' => $page]);
    }
}
