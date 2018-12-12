@extends('layouts.dashboard')

@section('dashboard')

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br />
@endif
<div class="container justify-content-center">
    <div class="card">
        <div class="card-header">
            Create Article
        </div>
        <div class="card-body">
            <form method="POST" action="{{action('ArticlesController@update', $id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
              </div>
              <div class="form-group mb-4">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{$article->content}}</textarea>
              </div>
              <div class="form-group mb-4">
                <label for="cover">Cover Image</label>
                <input type="file" class="form-control-file" id="cover" name="cover" value="{{ $article->cover }}">
               </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
