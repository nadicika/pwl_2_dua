@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Mata Kuliah</h3>
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Sks</th>
                <th>Jam</th>
              </tr>
              @foreach ($mtk as $id => $k)
                <tr>
                  <td>{{$id}}</td>
                  <td>{{$k->kodeMk}}</td>
                  <td>{{$k->matkul}}</td>
                  <td>{{$k->dosen}}</td>
                  <td>{{$k->sks}}</td>
                  <td>{{$k->jam}}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection

