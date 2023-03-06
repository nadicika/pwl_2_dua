@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Hobi</h3>
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Nama Hobi</th>
              </tr>
              @foreach ($hobi as $id => $k)
                <tr>
                  <td>{{$id}}</td>
                  <td>{{$k->nama}}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection

