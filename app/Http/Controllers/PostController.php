<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function racine() 
     {
        return view('blog.autre',[
            'posts' => Post::paginate(2)
        ]);
     }

     public function slug (string $slug, string $id)
     {
        $post = Post::findOrFail($id);

        if($post->slug != $slug){
            return to_route('greeting', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return $post;
     }
}
