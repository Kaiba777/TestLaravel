<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\FormBlogRequest;

class PostController extends Controller
{
     public function racine() 
     {
        
        return view('blog.autre',[
            'posts' => Post::with('tags', 'category')->paginate(10)
        ]);
     }

     public function slug (string $slug, string $id)
     {
        $post = Post::findOrFail($id);

        if($post->slug != $slug){
            return to_route('greeting', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return view('blog.article',[
         'post' => $post
        ]);
     }

     public function edit () {
        return view('blog.creation');
     }

     public function store (FormBlogRequest $request) {
        $post = Post::create($request->validated());
        return redirect()->route('greeting', ['slug' => $post->slug, 'id' => $post->id])->with('success', "L'article a bien été sauvegardé");
     }

     public function update (Post $id)
     {
      return view('blog.modifie',[
         'post' => $id
      ]);
     }

     public function save (Post $post, FormBlogRequest $request)
     {
      $post->update($request->validated());
      return redirect()->route('greeting', ['slug' => $post->slug, 'id' => $post->id])->with('success', "L'article a bien été modifier");
     }
}
