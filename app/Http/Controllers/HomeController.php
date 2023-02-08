<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {

        if (isset(auth()->user()->id)) {

            $posts = Post::all();

            return view('dashboard', compact('posts'));
        }
        else {

            return view('auth.login');
        }
    }

    public function store(Request $request) {

        $request->validate([
            'content' => 'required',
        ]);

        $request['user_id'] = auth()->user()->id;
        $post = Post::create($request->all());

        if ($request->file('file')) {
            
            $url = Storage::put('public/posts', $request->file('file'));

            $post->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('home.index')->with('info', 'Publicación Creada');
    }
}
