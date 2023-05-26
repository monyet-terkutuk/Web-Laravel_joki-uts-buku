<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::orderBy('id', 'desc')->paginate(7);
        return view('buku.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'genre' => 'required',
            'penerbit' => 'required',
            'tgl_terbit' => 'required',
        ]);


        Buku::create($validate);
        return redirect('/buku')->with('success', 'Berhasil menambahkan list buku baru!!');
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
        $data = Buku::where('id',$id)->first();
        return view('buku.edit')->with('data',$data);
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
        $validate = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'genre' => 'required',
            'penerbit' => 'required',
            'tgl_terbit' => 'required',
        ]);


        Buku::where('id', $id)->update($validate);
        return redirect('/buku')->with('success', 'Berhasil mengubah list buku !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id', $id)->delete();
        return redirect('/buku')->with('success', 'Berhasil hapus data buku!!');
    }
}
