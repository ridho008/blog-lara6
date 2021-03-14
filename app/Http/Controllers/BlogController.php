<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Posts;
use App\Categori;
use App\Tags;
class BlogController extends Controller
{
   public function index(Posts $posts)
   {
      $data = $posts->latest()->take(8)->get();
      return view('blog', compact('data'));
   }

   public function content($slug)
   {
      // $post = Posts::where('slug', $slug)->get();
      $post = Posts::where('slug', $slug)->get();
      // dd($post);
      
      // dd($archives);
      // dd($users);
      // $tags = Tags::where('posts_id', $post->id)->get();
      return view('blog.content', compact('post', 'tags'));
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

   public function search(Request $request)
   {
      $search = $request->keyword;
      $data = Posts::where('title', 'like' , '%'.$search.'%')->paginate(6);
      return view('blog.search-post', compact('data', 'search'));
   }

   public function tags(Tags $tags)
   {
      $data = $tags->posts()->paginate(6);
      $title = $tags;
      return view('blog.list-post', compact('data', 'title'));
   }

   // public function archive($month, $year)
   // {

   // }
}
