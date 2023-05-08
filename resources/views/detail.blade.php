@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Detail Mahasiswa</h3>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nim : </b>{{$Mahasiswa->nim}}</li>
                <li class="list-group-item"><b>Nama : </b>{{$Mahasiswa->nama}}</li>
                <li class="list-group-item"><b>Jk : </b>{{$Mahasiswa->jk}}</li>
                <li class="list-group-item"><b>Tempat_lahir : </b>{{$Mahasiswa->tempat_lahir}}</li>
                <li class="list-group-item"><b>Tanggal_lahir : </b>{{$Mahasiswa->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$Mahasiswa->alamat}}</li>
                <li class="list-group-item"><b>Hp : </b>{{$Mahasiswa->hp}}</li>
                <li class="list-group-item"><b>Kelas : </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
            </ul>
        </div>
        </div>
    </div>
</section>
    
@endsection

