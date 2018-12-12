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
    <div class="card" style="background-color: #217CA3;">
        <div class="card-header" style="background-color: #E29930;">
            Create Article
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
              </div>
              <div class="form-group mb-4">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10"></textarea>
              </div>
              <div class="custom-file mb-4">
                <input type="file" class="custom-file-input" id="customFile" name="cover">
                <label class="custom-file-label" for="customFile">Upload Cover Image</label>
               </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
