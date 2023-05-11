<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = MataKuliahModel::all();
        return view('matakuliah')
                ->with('mtk', $data);
    }

    public function create()
    {
        return view('create_matkul')
            ->with('url_form', url('/matakuliah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:30',
            'sks' => 'required|integer',
            'jam' => 'required|integer',
            'sks' => 'required|string|max:25'
        ]);

        MataKuliahModel::create($request->all());
        return redirect('matakuliah')
            ->with('success', 'Mata Kuliah Berhasil Ditambahkan');
    }

    public function show(MataKuliahModel $matkul)
    {
        //
    }

    public function edit($id)
    {
        $matkul = MataKuliahModel::find($id);
        return view('create_matkul')
            ->with('matakuliah', $matkul)
            ->with('url_form', url('/matakuliah/'.$id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:30',
            'sks' => 'required|integer',
            'jam' => 'required|integer',
            'sks' => 'required|string|max:25'
        ]);
      
        $data = MataKuliahModel::where('id', $id)->update($request->except('_token', '_method'));
        return redirect('matakuliah')
            ->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        MataKuliahModel::where('id', $id)->delete();
        return redirect('matakuliah')
            ->with('Success', 'Mata Kuliah Berhasil Dihapus');
    }

}
