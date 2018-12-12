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

<div class="container">
    <h2>ARTICLES</h2>
    <table class="table table-hover table-bordered text-white" style="background-color: #32384D;">
        <thead style="background-color: #E29930;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Cover Image</th>
                <th scope="col" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse($articles->slice(0, 2) as $article) --}}
            @forelse($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td><a href="{{route('blog.show', $article['id'])}}">{{ $article->title }}</a></td>
                <td>{!! str_limit($article->content, 150) !!}</td>
                <td>
                    <img src="{{asset('/cover_images/'.$article['cover'])}}" style="width: 100px; height: 100px">
                </td>
                <td><a href="{{route('blog.show', $article['id'])}}" class="btn btn-outline-info">View</a></td>
                <td><a href="{{action('ArticlesController@edit', $article['id'])}}" class="btn btn-outline-warning">Edit</a></td>
                <td>
    	            <form action="{{action('ArticlesController@destroy', $article['id'])}}" method="post">
        	            @csrf
        	            <input name="_method" type="hidden" value="DELETE">
        	            <button class="btn btn-outline-danger" type="submit">Delete</button>
    	            </form>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">
                <p>No articles found! <a href="{{ route ('blog.create') }}">Click here</a> to create one. </p>
            </div>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
