<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Condition;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();

        return view('barangs.barang', ['barangs' => $barangs]);
    }

    public function create()
    {
        $conditions = Condition::all();
        $types = Type::all();

        return view('barangs.barang-add', ['conditions' => $conditions, 'types' => $types]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'kecacatan' => 'required',
            'image' => 'required',
            'jumlah' => 'required',
            'condition_id' => 'required',
            'type_id' => 'required',
        ]);

        if ($request->file('image')->getSize() > 2048 * 1000) {
            return redirect('/barang')->with('error', 'Image size must be less than 2MB');
        }

        $filename = "";
        if ($request->file('image')) {
            $extension = $request->file('image')->extension();
            $filename = date('Y-m-d-H-i-s') . "." . $extension;
            $request->file('image')->storeAs(
                'public/images',
                $filename
            );
        }

        // dd($filename);

        Barang::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kecacatan' => $request->kecacatan,
            'image' => $filename,
            'jumlah' => $request->jumlah,
            'condition_id' => $request->condition_id,
            'type_id' => $request->type_id,
        ]);

        return redirect('/barang')->with('success', 'Data saved succesfully');
    }

    public function edit($id)
    {
        $barang = Barang::with(['condition', 'type'])->findOrFail($id);
        $conditions = Condition::all();
        $types = Type::all();

        return view('barangs.barang-edit', ['barang' => $barang, 'conditions' => $conditions, 'types' => $types]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'kecacatan' => 'required',
            'image' => 'required',
            'jumlah' => 'required',
            'condition_id' => 'required',
            'type_id' => 'required',
        ]);

        $barang = Barang::findOrFail($id);

        if ($barang->image && file_exists(storage_path('app/public/images/' . $barang->image))) {
            Storage::delete('public/images/' . $barang->image);
        }

        $filename = "";
        if ($request->file('image')) {
            $extension = $request->file('image')->extension();
            $filename = date('Y-m-d-H-i-s') . "." . $extension;
            $request->file('image')->storeAs(
                'public/images',
                $filename
            );
        }

        $barang->update([
            'nama'=> $request->nama,
            'deskripsi' => $request->deskripsi,
            'kecacatan' => $request->kecacatan,
            'image' => $filename,
            'jumlah' => $request->jumlah,
            'condition_id' => $request->condition_id,
            'type_id' => $request->type_id,
        ]);

        return redirect('/barang');
    }

    public function detail($id)
    {
        $barang = Barang::with(['condition', 'type'])->findOrFail($id);

        return view('barangs.barang-detail', ['barang' => $barang]);
    }

    public function delete($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs.barang-delete', ['barang' => $barang]);
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        if ($barang->image && file_exists(storage_path('app/public/images/' . $barang->image))) {
            Storage::delete('public/images/' . $barang->image);
        }

        $barang->delete();

        return redirect('/barang');
    }
}
