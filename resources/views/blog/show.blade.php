@extends('layouts.app')

@section('content')

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
    <a class="btn btn-outline-info mb-4" href="{{ route('blog.index') }}"><i class="fa fa-hand-o-left fa-1x"></i> Back</a>
    <div class="card mb-3">
        <figure class="figure">
            <img class="card-img-top img-fluid rounded mx-auto d-block" src="{{asset('/cover_images/'.$article->cover)}}" alt="Card image cap" style="width: 100%; height:50rem; object-fit:cover;">
        </figure>
      <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{!! $article->content !!}</p>
        <p class="card-text"><small class="text-muted">{{ date_format($article->created_at,'d M, Y H:i')  }}</small></p>
      </div>
    </div>
</div>

@endsection
