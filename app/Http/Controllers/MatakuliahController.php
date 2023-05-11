<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MataKuliahModel::all();
        return view('matakuliah')
                ->with('mtk', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_matkul')
            ->with('url_form', url('/matakuliah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $matkul = MataKuliahModel::find($id);
        return view('create_matkul')
            ->with('matakuliah', $matkul)
            ->with('url_form', url('/matakuliah/'.$id));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MataKuliahModel::where('id', $id)->delete();
        return redirect('matakuliah')
            ->with('Success', 'Mata Kuliah Berhasil Dihapus');
    }
}
