<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdatePhotoController extends Controller
{
    public function update(Request $request, User $photo)
    {
        $request->validate([
            'file' => 'required',
        ]);

        $url = Storage::put('public/posts', $request->file('file'));

        Storage::delete($photo->image->url);
        $photo->image->update([
            'url' => $url
        ]);
        
        return redirect()->route('profiles.index',)->with('succes', 'La Foto de tú perfil se ha cambiado satisfactoriamente');
    }
}
