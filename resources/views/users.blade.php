@extends('layouts.main')

@section('container')
<div class="row">
    <h2 class="mt-4 mb-4">{{ $title }}</h2>
    @foreach ($users as $user)
    <div class="col-md-4">
        <div class="card" style="width:350px;">
            <img src="https://source.unsplash.com/500x300?profile" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $user->name }}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/users/{{ $user->username }}" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

