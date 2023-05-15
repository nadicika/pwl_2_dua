@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Article</h3>
            <br>
        </div>
        <div class="card-body">
            <form action="{{url('/articles/'.$article->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}">
                </div>
                <div class="form-group">
                    <label>Feature Image</label>
                    <input type="file" class="form-control" required="required" name="image" value="{{$article->featured_image}}"></br>
                    <img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary">Simpan</button>
                </div>
          </form>
        </div>
    </div>
</section>
@endsection