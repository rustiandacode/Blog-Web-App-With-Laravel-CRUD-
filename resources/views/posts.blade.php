@extends('layouts.main')

@section('container')

<h2 class="mt-5">New Post</h2>
<div class="card mb-5 mt-3">
    <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h5>
      <p class="card-text">by {{ $posts[0]->user->name }} in {{ $posts[0]->category->name }} | <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
    </div>
</div>

<h2 class="mb-4">Recently Post</h2>

<div class="row mt-2">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4">
        <div class="card mb-3" style="height: 450px;">
            <img src="https://source.unsplash.com/500x300?programming" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
              <p class="card-text">by {{ $post->user->name }} in {{ $post->category->name }} <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
              <p class="card-text" style="height: 70px; overflow: hidden;">{{ $post->excerpt }}</p>
              <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
    </div>
    @endforeach
</div>



@endsection