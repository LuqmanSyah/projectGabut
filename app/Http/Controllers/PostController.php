<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'deskripsi' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg'
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'images';
        $file->move($tujuan_upload, $nama_file);

        // $data = [
        //     'user_id' => Auth::user()->id,
        //     'nama' => $request->nama,
        //     'deskripsi' => $request->deskripsi,
        //     'gambar' => $nama_file 
        // ];

        Post::create([
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_file 
        ]);

        return redirect(route('profile'));
    }

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('page.edit', compact('post'));
    }
}
