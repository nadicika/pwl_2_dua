@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Mahasiswa</h3>
          </div>
          <div class="card-body">
            <button class="btn btn-sm btn-success my-2" onclick="tambahData()" data-toggle="modal" data-target="#modal_mahasiswa">Tambah Data</button>
            <table class="table table-bordered table-striped" id="data_mahasiswa">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>No HP</th>
                  <th style="width: 180px">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php /*
                @if ($mhs->count() > 0)
                  @foreach ($mhs as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->nim}}</td>
                      <td>{{$k->nama}}</td>
                      <td>
                        <img src="{{asset('storage/'.$k->foto)}}" alt=""
                        width="50px" height="70px">
                      </td>
                      <td>{{$k->jk}}</td>
                      <td>{{$k->hp}}</td>
                      <td>{{$k->kelas->nama_kelas}}</td>
                      <td>
                        <div class="">
                          <a href="{{url('/mahasiswa/'. $k->id)}}" class="btn btn-sm btn-info">Show</a>
                          <a href="{{url('/mahasiswa/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                          <form method="POST" action="{{ url('/mahasiswa/'.$k->id ) }}" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                          <a href="{{ url('mahasiswa/khs/'.$k->id) }}" class="btn btn-sm btn-primary">Nilai</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="7" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
                */
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
  <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa">
  @csrf
  <div class="modal-dialog modal-">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="row form-message"></div>
              <div class="form-group required row mb-2">
                  <label class="col-sm-2 control-label col-form-label">NIM</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="" />
                  </div>
              </div>
              <div class="form-group required row mb-2">
                <label class="col-sm-2 control-label col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="" />
                </div>
              </div>
              <div class="form-group required row mb-2">
                <label class="col-sm-2 control-label col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="jk" name="jk" value="" />
                </div>
              </div>
              <div class="form-group required row mb-2">
                <label class="col-sm-2 control-label col-form-label">No. HP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="hp" name="hp" value="" />
                </div>
              </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</form>
</div>

<div class="modal fade" id="modal_show_mahasiswa" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Detail Mahasiswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="form-group row">
                  <label class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="show_nim" readonly>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="show_nama" readonly>
                  </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="show_jk" readonly>
                </div>
            </div>
              <div class="form-group row">
                  <label class="col-sm-2 control-label">No. HP</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="show_hp" readonly>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

@endsection

@push('js')
<script>
  function tambahData() {
        $('#modal_mahasiswa').modal('show');
        $('#modal_mahasiswa .modal-title').html('Tambah Data Mahasiswa');
        $('#modal_mahasiswa #nim').val('');
        $('#modal_mahasiswa #nama').val('');
        $('#modal_mahasiswa #jk').val('');
        $('#modal_mahasiswa #hp').val('');
    }

  function updateData(th){
      $('#modal_mahasiswa').modal('show');
      $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
      $('#modal_mahasiswa #nim').val($(th).data('nim'));
      $('#modal_mahasiswa #nama').val($(th).data('nama'));
      $('#modal_mahasiswa #jk').val($(th).data('jk'));
      $('#modal_mahasiswa #hp').val($(th).data('hp'));
      $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
      $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
  }

  function showData(element) {
        // $(element).attr('href');
        // console.log(element);
        // console.log($(element));
        $.ajax({
            url: '{{  url('mahasiswa') }}'+ '/' + element,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
            
            $('#modal_show_mahasiswa').modal('show');
            
            $('#show_nim').val(data.nim);
            $('#show_nama').val(data.nama);
            $('#show_jk').val(data.jk);
            $('#show_hp').val(data.hp);
            },
            error: function() {
            alert('Error occurred while retrieving data.');
            }
        });
    }

    function deleteData(element) {
        if (!confirm("Are you sure?")) {
            return false;
        }
        // console.log("Melakukan anu");
        $.ajax({
            url: '{{  url('mahasiswa/delete') }}'+ '/' + element,
            method: 'POST',
            dataType: 'json',
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function(data) {
                alert(data.message);
                location.reload();
            },
            error: function() {
                alert('Error occurred while deleting data.');
            }
        });
    }

  $(document).ready(function (){
      var dataMahasiswa = $('#data_mahasiswa').DataTable({
          processing:true,
          serverSide:true,
          ajax:{
              'url': '{{  url('mahasiswa/data') }}',
              'dataType': 'json',
              'type': 'POST',
          },
          columns:[
              {data:'nomor', name:'nomor', searchable:false, sortable:false},
              {data:'nim',name:'nim', sortable: false, searchable: true},
              {data:'nama',name:'nama', sortable: false, searchable: true},
              {data:'jk',name:'jk', sortable: false, searchable: false},
              {data:'hp',name:'hp', sortable: false, searchable: true},
              {data:'id',name:'id', sortable: false, searchable: false,
                  render: function(data, type, row, meta){
                      var btn = `<button data-url="{{ url('/mahasiswa')}}/`+data+`" class="btn btn-xs btn-warning" onclick="updateData(this)" data-id="`+row.id+`" data-nim="`+row.nim+`" data-nama="`+row.nama+`" data-jk="`+row.jk+`" data-hp="`+row.hp+`"><i class="fa fa-edit"></i> Edit</button>` +
                      `<button href="{{ url('/mahasiswa/') }}/`+data+` " onclick="showData(`+data+`)" class="btn btn-xs btn-info"><i class="fa fa-list"></i>Detail</button>` +
                                  `<button class="btn btn-xs btn-danger" onclick="deleteData(`+data+`)"><i class="fa fa-trash"></i>Delete</button>`;
                      return btn;
                  }
              },

          ]
      });

      $('#form_mahasiswa').submit(function(e){
          e.preventDefault();
          $.ajax({
              url: $(this).attr('action'),
              method: "POST",
              data: $(this).serialize(),
              dataType: 'json',
              success:function(data){
                  $('.form-message').html('');
                  if(data.status){
                      $('.form-message').html('<span class="alert alert-success" style="width: 100%">' + data.message + '</span>');
                      $('#form_mahasiswa')[0].reset();
                      dataMahasiswa.ajax.reload();
                      $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                      $('#form_mahasiswa').find('input[name="_method"]').remove();
                  }else{
                      $('.form-message').html('<span class="alert alert-danger" style="width: 100%">' + data.message + '</span>');
                      alert('error');
                  }

                  if(data.modal_close){
                      $('.form-message').html('');
                      $('#modal_mahasiswa').modal('hide');
                  }

              }
          });
      });
  });
</script>
@endpush
