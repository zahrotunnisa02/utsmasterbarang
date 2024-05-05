<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Listbarang;
use App\Models\Satuan;

class ListBrgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        // ELOQUENT
        $listbarang = Listbarang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'listbarang' => $listbarang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create List';

        // ELOQUENT
        $satuan = Satuan::all();

        return view('barang.create', compact('pageTitle', 'satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute wajib diisi.',
            'numeric' => 'Isi Attribute dengan angka'
        ];

        $validator = Validator::make($request->only(['nama_barang', 'harga_barang', 'deskripsi_barang', 'satuan_id']), [
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required|exists:satuan,satuan_id,            '
        ], $messages);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput();
            }
        // ELOQUENT
        $listbarang = New listbarang;
        $listbarang->nama_barang = $request->nama_barang;
        $listbarang->harga_barang = $request->harga_barang;
        $listbarang->deskripsi_barang = $request->deskripsi_barang;
        $listbarang->satuan_id = $request->satuan;
        $listbarang->save();
        return redirect('/listbarang');
        // return $validator;
        // return 'validator berhasil';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit List';

        // ELOQUENT
        $satuan = Satuan::all();
        $listbarang = Listbarang::findOrFail($id);
        $satuan = DB::table('satuan')->get();
        return view('barang.edit', compact('pageTitle', 'listbarang', 'satuan'));
        // return $listbarang;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute wajib diisi.',
            'numeric' => 'Isi Attribute dengan angka'
        ];
        $validator = Validator::make($request->only(['nama_barang', 'harga_barang', 'deskripsi_barang', 'satuan_id']), [
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required|exists:satuan,kode_satuan',
        ], $messages);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput();
            }
        // ELOQUENT
        $listbarang = New listbarang;
        $listbarang->nama_barang = $request->nama_barang;
        $listbarang->harga_barang = $request->harga_barang;
        $listbarang->deskripsi_barang = $request->deskripsi_barang;
        $listbarang->satuan_id = $request->satuan;
        $listbarang->save();
        return redirect('/listbarang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        Listbarang::find($id)->delete();
        return redirect('/listbarang');
    }
}
