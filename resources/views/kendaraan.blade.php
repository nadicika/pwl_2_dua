@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Kendaraan</h3>
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <th>No</th>
                <th>No Polisi</th>
                <th>Merk</th>
                <th>Jenis</th>
                <th>Tahun Pembuatan</th>
                <th>Warna</th>
              </tr>
              @foreach ($kdr as $no => $k)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$k->nopol}}</td>
                  <td>{{$k->merk}}</td>
                  <td>{{$k->jenis}}</td>
                  <td>{{$k->tahun_buat}}</td>
                  <td>{{$k->warna}}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection

