<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class ReplyController extends Controller
{
   public function submitMessage(Request $request)
   {
      $request->validate([
         'posts_id' => 'required',
         'name' => 'required',
         'email' => 'required|email',
         'website' => 'required',
         'contents' => 'required',
      ]);

      Reply::create([
         'posts_id' => $request->posts_id,
         'name' => $request->name,
         'email' => $request->email,
         'website' => $request->website,
         'contents' => $request->contents,
      ]);

      session()->flash('success', 'comment sent successfully');
      return redirect()->back();
   }
}
