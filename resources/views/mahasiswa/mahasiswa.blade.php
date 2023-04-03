@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Mahasiswa</h3>
          </div>
          <div class="card-body">
            <a href="{{url('mahasiswa/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>No HP</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($mhs->count() > 0)
                  @foreach ($mhs as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->nim}}</td>
                      <td>{{$k->nama}}</td>
                      <td>{{$k->jk}}</td>
                      <td>{{$k->hp}}</td>
                      <td>
                        <a href="{{url('/mahasiswa/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form method="POST" action="{{url('/mahasiswa/'.$k->id)}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="6" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection

