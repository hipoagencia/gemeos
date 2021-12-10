<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class WebsiteController extends Controller
{
    public function blog(Request $request)
    {
        $categories = Categories::orderBy('name')->get();

        $posts = Post::with(['categories', 'user'])
            ->when(!isNull($request->category), function ($query) {
                $query->where('slug', strip_tags($request->slug));
            })
            ->orderBy('id', 'DESC')->paginate(9);

        return view('web.blog', [
           'categories' => $categories,
           'posts' => $posts
        ]);
    }

    public function post(Request $request)
    {
        $categories = Categories::orderBy('name')->get();

        $post = Post::with(['categories', 'user'])
            ->where('slug', strip_tags($request->slug))->first();

        return view('web.post',[
            'categories' => $categories,
            'post' => $post
        ]);
    }
}
