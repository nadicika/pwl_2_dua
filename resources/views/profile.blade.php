@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Profil Mahasiswa</h3>
          </div>
          <div class="card-body">
            Nama Lengkap : {!! $name !!} <br>
            Nama Panggilan : {!! $nama !!} <br>
            NIM : {!! $nim !!} <br>
            Kelas : {!! $kelas !!} <br>
            No. Absen : {!! $absen !!} <br>
            Program Studi : {!! $prodi !!} <br>
            Jurusan : {!! $jurusan !!} <br>
            Universitas : {!! $univ !!} <br>
          </div>
        </div>
    </div>
</section>
    
@endsection

