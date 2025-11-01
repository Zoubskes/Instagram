<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $request->validate([
            'image' => ['required'],
            'caption' => ['required'],
        ]);

        if (!$request->hasFile('image')) {
            return back()->withErrors(['image' => 'Upload een afbeelding.']);
        }

        $path = $request->file('image')->store('images', 'public');

        $post = Post::create([
            'user_id' => Auth::id(),
            'caption' => $request->caption,
            'image' => $path,
        ]);

        return redirect('/');
    }
}
