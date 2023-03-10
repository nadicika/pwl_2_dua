@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Keluarga</h3>
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Status Keluarga</th>
              </tr>
              @foreach ($klg as $id => $k)
                <tr>
                  <td>{{$id}}</td>
                  <td>{{$k->nama}}</td>
                  <td>{{$k->umur}}</td>
                  <td>{{$k->status}}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection

