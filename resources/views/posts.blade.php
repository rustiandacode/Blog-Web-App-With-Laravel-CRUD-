@extends('layouts.main')

@section('container')

<h2 class="mt-5">Latest Post</h2>
<div class="card mb-5 mt-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h5>
      <p class="card-text">by <a href="/categories/user/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
    </div>
</div>

<h2 class="mb-4">Recently Post</h2>

<div class="row mt-2">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4">
        <div class="card mb-3" style="height: 500px;">
            <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
              <p class="card-text">by <a href="/categories/user/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
              <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
              <p class="card-text" style="height: 70px; overflow: hidden;">{{ $post->excerpt }}</p>
              <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
    </div>
    @endforeach
</div>



@endsection