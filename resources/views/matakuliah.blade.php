@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Mata Kuliah</h3>
          </div>
          <div class="card-body">
            <a href="{{url('matakuliah/create')}}"class="btn btn-sm btn-success my-2">Tambah Data</a>
            <table class="table">
              <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>Sks</th>
                <th>Jam</th>
                <th>Semester</th>
                <th>Action</th>
              </tr>
              @if ($mtk->count() > 0)
                @foreach ($mtk as $i => $k)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$k->nama_matkul}}</td>
                    <td>{{$k->sks}}</td>
                    <td>{{$k->jam}}</td>
                    <td>{{$k->semester}}</td>
                    <td>
                      <a href="{{ url('/matakuliah/'.$k->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                          <form method="POST" action="{{ url('/matakuliah/'.$k->id ) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                    </td>
                  </tr>
                @endforeach
                @else
                <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
              @endif
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection

