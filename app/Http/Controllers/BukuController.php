<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Gallery;
use Image;

class BukuController extends Controller
{
    public function index() {
        $data_buku = Buku::all();

        return view('buku.index', compact('data_buku'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        $buku = new Buku;

        $buku->judul        = $request->judul;
        $buku->penulis      = $request->penulis;
        $buku->harga        = $request->harga;
        $buku->tgl_terbit   = $request->tgl_terbit;

        $buku->save();
        return redirect('/buku');
    }

    public function destroy( $id ) {
        $buku = Buku::find($id);

        $buku->delete();
        return redirect('/buku');
    }

    public function edit( $id ) {
        $buku = Buku::find($id);

        return view('buku.edit', compact('buku'));
    }

    public function update( Request $request, string $id ) {
        $buku = Buku::find($id);

        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $fileName = time().'_'.$request->thumbnail->getClientOriginalName();
        $filePath = $request->file('thumbnail')->storeAs('uploads', $fileName, 'public');

        Image::make(storage_path().'/app/public/uploads/'.$fileName)
            ->fit(240,320)
            ->save();

        $buku->update([
            'judul'     => $request->judul,
            'penulis'   => $request->penulis,
            'harga'     => $request->harga,
            'tgl_terbit'=> $request->tgl_terbit,
            'filename'  => $fileName,
            'filepath'  => '/storage/' . $filePath
        ]);

        if ($request->file('gallery')) {
            foreach($request->file('gallery') as $key => $file) {
                $fileName = time().'_'.$file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');

                $gallery = Gallery::create([
                    'nama_galeri'   => $fileName,
                    'path'          => '/storage/' . $filePath,
                    'foto'          => $fileName,
                    'buku_id'       => $id
                ]);
            }
        }

        return redirect('/buku')->with('pesan', 'Perubahan Data Buku Berhasil di Simpan');
    }
}
