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
                <li class="list-group-item text text-center"><img width="100px" height="130px" src="{{asset('storage/'.$mhs->foto)}}"></li>
                <li class="list-group-item"><b>Nim : </b>{{$mhs->nim}}</li>
                <li class="list-group-item"><b>Nama : </b>{{$mhs->nama}}</li>
                <li class="list-group-item"><b>Jk : </b>{{$mhs->jk}}</li>
                <li class="list-group-item"><b>Tempat_lahir : </b>{{$mhs->tempat_lahir}}</li>
                <li class="list-group-item"><b>Tanggal_lahir : </b>{{$mhs->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$mhs->alamat}}</li>
                <li class="list-group-item"><b>Hp : </b>{{$mhs->hp}}</li>
                <li class="list-group-item"><b>Kelas : </b>{{$mhs->kelas->nama_kelas}}</li>
            </ul>
        </div>
        </div>
    </div>
</section>
    
@endsection

