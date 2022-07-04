@extends('dashboard.layouts.main')

@section('container')

<div class="my-3 row">
    <div class="col-lg-10">
        <h5>{{ $post->title }}</h5>
        <a href="/dashboard/posts" class="btn btn-success my-2"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to my posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-3"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
              <button class="btn btn-danger border-0 text-white" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
         </form>
        
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