@extends('layouts.main')

@section('container')

<div class="mt-3 row justify-content-center">
    <div class="col-md-8">
        <h5>{{ $post->title }}</h5>
        <p class="card-text">by <a href="/categories/user/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
              <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        <img src="https://source.unsplash.com/1200x600?programming" class="card-img-top" alt="...">
        <p class="mt-3 mb-8">{!! $post->body !!}</p>
    </div>
</div>

@endsection