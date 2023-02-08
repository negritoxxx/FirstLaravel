<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(auth()->user()->id)) {

            $id_user = auth()->user()->id;

            $posts = Post::Where('user_id', $id_user)->latest('id')->get();
            $user = User::Where('id', $id_user)->get();

            $user = $user[0];

            return view('profile', compact('posts', 'user'));
        }
        else {

            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $profile)
    {
        $this->authorize('author', $profile);

        return view('profileEdit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $profile)
    {
        $this->authorize('author', $profile);

        $request->validate([
            'content' => 'required',
        ]);

        $request['user_id'] = auth()->user()->id;
        $profile->update($request->all());

        if ($request->file('file')) {
            
            $url = Storage::put('public/posts', $request->file('file'));

            if ($profile->image) {

                Storage::delete($profile->image->url);
                $profile->image->update([
                    'url' => $url
                ]);
            }
            else {
                
                $profile->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('profiles.edit', $profile)->with('info', 'El Post se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $profile)
    {
        $this->authorize('author', $profile);
        
        if ($profile->image) {
            
            Storage::delete($profile->image->url);
        }

        $profile->delete();

        
        return redirect()->route('profiles.index',)->with('info', 'El Post se eliminó con éxito');
    }
}
