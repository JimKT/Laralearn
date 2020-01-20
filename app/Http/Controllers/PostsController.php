<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller {
    public function show($slug) {

        $post = \DB::table('posts')->where('slug', $slug)->first();

        // Dump and Die
        // dd($post);

        // Data store - Basically an array
        // $posts = [
        //     'my-first-post' => 'Hello, this is my first blog post!',
        //     'my-second-post' => 'Hello, this is my second blog post!'
        // ];

        // if(! array_key_exists($post, $posts)) {
        //     abort(404, 'Sorry, that post was not found.');
        // }

        // Return a view, and match the post against the array
        return view('post', [
            'post' => $post
        ]);
    }
}
