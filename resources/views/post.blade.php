@extends('layouts.main')

@section('container')

<div class="mt-3 row justify-content-center">
    <div class="col-md-8">
        <h5>{{ $post->title }}</h5>
        <p class="card-text">by <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
              <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
              @if($post->image)
              <div style="max-height: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/' .$post->image) }}" class="my-3 card-img-top" alt="{{ $post->category->name }}">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="my-3 card-img-top" alt="{{ $post->category->name }}">
              @endif
        <p class="mt-3 mb-8">{!! $post->body !!}</p>
    </div>
</div>

@endsection 