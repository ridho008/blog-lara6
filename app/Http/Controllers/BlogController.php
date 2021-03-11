<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categori;
class BlogController extends Controller
{
   public function index(Posts $posts)
   {
      $data = $posts->latest()->take(8)->get();
      return view('blog', compact('data'));
   }

   public function content($slug)
   {
      $post = Posts::where('slug', $slug)->get();
      return view('blog.content', compact('post'));
   }

   public function listBlog()
   {
      $data = Posts::latest()->paginate(6);
      return view('blog.list-post', compact('data'));
   }

   public function listCategory(Categori $categori)
   {
      $data = $categori->posts()->paginate(6);
         $title = $categori;
      return view('blog.list-post', compact('data', 'title'));
   }
}
