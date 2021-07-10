<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id' => auth()->user()->id,
            'description' => $request->description,
            'image' => $request->post_pic,
            'attachment' => $request->post_file,

        ]);
    }
}
