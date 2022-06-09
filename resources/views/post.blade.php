@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-8">
        <h5>{{ $post->title }}</h5>
        <p>by Adzeni <small>{{ $post->created_at->diffForHumans() }}</small></p>
        <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top" alt="...">
        <p class="mt-3 mb-8">{!! $post->body !!}</p>
    </div>
</div>

@endsection