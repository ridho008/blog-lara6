<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categori;
use App\Tags;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::paginate(10);
        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categori::all();
        $tags = Tags::all();
        return view('admin.posts.create', compact('category', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'categori_id' => 'required',
            'content' => 'required',
            'photo' => 'required',
        ]);

        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $writePath = 'uploads/posts/'.$newPhoto;
        $post = Posts::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'categori_id' => $request->categori_id,
            'users_id' => Auth::id(),
            'content' => $request->content,
            'photo' => $newPhoto,
        ]
        );

        $post->tags()->attach($request->tags);

        $photo->move('uploads/posts/', $newPhoto);

        session()->flash('success', 'Tag was successful!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        $tags = Tags::all();
        $category = Categori::all();
        return view('admin.posts.edit', compact('post', 'tags', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->photoOld);
        $request->validate([
            'title' => 'required',
            'categori_id' => 'required',
            'content' => 'required',
        ]);

        $post = Posts::findorfail($id);
        $writePath = 'uploads/posts/'.$request->photoOld;

        if(!$request->has('photo')) {
            $photoCurrent = $request->photoOld;
        } else {
            $photo = $request->photo;
            $photoCurrent = time().$photo->getClientOriginalName();
            $photo->move('uploads/posts/', $photoCurrent);
            unlink('uploads/posts/'.$request->photoOld);
        }
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'categori_id' => $request->categori_id,
            'content' => $request->content,
            'photo' => $photoCurrent,
        ];

        $post->tags()->sync($request->tags);
        $post->update($data);


        session()->flash('success', 'Post was updated!');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();
        // $posts_tags = DB::table('posts_tags')->where('posts_id', $id);
        // if($post->photo != null) {
        //     unlink('uploads/posts/'.$post->photo);
        // }
        // if($posts_tags) {
        //     DB::table('posts_tags')->where('posts_id', $id)->delete();
        // }
        // $post->delete();

        session()->flash('success', 'Post was deleted!');
        return redirect()->route('post.index');
    }

    public function trashPosts()
    {
        $posts = Posts::onlyTrashed()->paginate(10);
        return view('admin.posts.trash-post', compact('posts'));
    }

    public function restorePost($id)
    {
        $post = Posts::withTrashed()
        ->where('id', $id)
        ->first()
        ->restore();
        session()->flash('success', 'Post was successful restore!');
        return redirect()->route('post.restore-post');
    }

    public function deleteAny($id)
    {
        $postSofDel = Posts::withTrashed()
        ->where('id', $id)
        ->first();
        
        // $post = Posts::find($id);
        $posts_tags = DB::table('posts_tags')->where('posts_id', $id);
        if($postSofDel->photo != null) {
            unlink('uploads/posts/'.$postSofDel->photo);
        }
        if($posts_tags) {
            DB::table('posts_tags')->where('posts_id', $id)->delete();
        }
        // $post->delete();
        $postSofDel->forceDelete();

        session()->flash('success', 'Post was deleted!');
        return redirect()->route('post.index');
    }

    public function fileManager()
    {
        return view('admin.posts.file-manager');
    }
}
