<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswas;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use App\Models\KelasModel;
use App\Models\NilaiKhsModel;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.mahasiswa');
    }

    public function data()
    {
        $data = MahasiswaModel::selectRaw('id, nim, nama, jk, hp');

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa',['kelas'=>$kelas]) 
                ->with('url_form',url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $rule = [
             'nim' => 'required|string|max:10|unique:mahasiswas,nim',
             'nama' => 'required|string|max:50',
             'hp' => 'required|digits_between:6,15',
             'jk' => 'required|in:L,P',
         ];
 
         $validator = Validator::make($request->all(), $rule);
         if($validator->fails()){
             return response()->json([
                 'status' => false,
                 'modal_close' => false,
                 'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                 'data' => $validator->errors()
             ]);
         }
 
         $mhs = MahasiswaModel::create($request->all());
         return response()->json([
             'status' => ($mhs),
             'modal_close' => false,
             'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
             'data' => null
         ]);
     }


    public function storeOld(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim',
            'nama' =>'required|string|max:50',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required|digits_between:6,15',
            'kelas_id'=>'required'
        ]);

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);
        //$data = MahasiswaModel::create($request->except(['_token']));

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

     public function show($id)
     {
         $mahasiswa = MahasiswaModel::find($id);
 
         if ($mahasiswa) {
             return response()->json($mahasiswa);
 
         } else {
             return response()->json(['error' => 'Data not found'], 404);
         }
     }

    public function showOld($id)
    {
        //$mahasiswa = MahasiswaModel::where('id',$id)->get();
        //return view('detail', ['Mahasiswa' => $mahasiswa[0]]);

        $mhs = MahasiswaModel::find($id);
        return view('detail')
            ->with('mhs', $mhs);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa')
                ->with('mhs', $mahasiswa)
                ->with('kelas', $kelas)
                ->with('url_form', url('/mahasiswa/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
     {
         $rule = [
             'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
             'nama' => 'required|string|max:50',
             'jk' => 'required|in:L,P',
             'hp' => 'required|digits_between:6,15',
         ];
 
         $validator = Validator::make($request->all(), $rule);
         if($validator->fails()){
             return response()->json([
                 'status' => false,
                 'modal_close' => false,
                 'message' => 'Data gagal diedit. ' .$validator->errors()->first(),
                 'data' => $validator->errors()
             ]);
         }
 
         $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));
 
         return response()->json([
             'status' => ($mhs),
             'modal_close' => $mhs,
             'message' => ($mhs)? 'Data berhasil diedit' : 'Data gagal diedit',
             'data' => null
         ]);
     } 

    public function updateOld(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,'.$id,
            'nama' =>'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required|digits_between:6,15',
            'kelas_id' => 'required',
        ]);

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

     public function destroy($id){
        $mhs = MahasiswaModel::where('id', $id)->delete();
        return response()->json([
            'status' => ($mhs),
            'message' => ($mhs)? 'Data berhasil dihapus' : 'Data gagal dihapus',
            'data' => null
        ]);
    }

    public function destroyOld($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
            ->with('succes', 'Mahasiswa Berhasil Dihapus');
    }

    public function cetak_pdf($id){
        $mhs = MahasiswaModel::find($id);
        $khs = NilaiKhsModel::where('mhs_id', $id)->get();
        $pdf = PDF::loadView('mahasiswa.cetak_pdf', ['mhs' => $mhs, 'khs' => $khs]);
        return $pdf->stream();
    }
}
