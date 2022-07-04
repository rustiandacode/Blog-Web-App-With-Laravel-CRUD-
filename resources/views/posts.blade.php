@extends('layouts.main')

@section('container')

  <h1 class="text-center">{{ $title }}</h1>
  <div class="row justify-content-center mt-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('user'))
          <input type="hidden" name="user" value="{{ request('user') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}" >
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="card mb-5 mt-3">
      @if($posts[0]->image)
      <div style="max-height: 350px; overflow:hidden;">
          <img src="{{ asset('storage/' .$posts[0]->image) }}" class="my-3 card-img-top" alt="{{ $posts[0]->category->name }}"> 
      </div>
      @else
      <img src="https://source.unsplash.com/1200x600?{{ $posts[0]->category->name }}" class="my-3 card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif
        <div class="card-body">
          <h5 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h5>
          <p class="card-text">by <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>

    <div class="row mt-2">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card mb-3" style="height: 500px;">
              @if($post->image)
              <div style="max-height: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/' .$post->image) }}" class="my-3 card-img-top" alt="{{ $post->category->name }}">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="my-3 card-img-top" alt="{{ $post->category->name }}">
              @endif
                <div class="card-body">
                  <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                  <p class="card-text">by <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                  <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text" style="height: 70px; overflow: hidden;">{{ $post->excerpt }}</p>
                  <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
      
  @else
      <p class="text-center fs-4 mt-3">Post Not Found</p>
  @endif

  <div class="d-flex justify-content-center mt-5">
    {{ $posts->links(); }}
  </div>
    
@endsection