@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>
    <div class="table-responsive col-sm-6">
      <a href="/dashboard/categories/create" class="my-2 btn btn-primary"><span data-feather="plus-square" class="align-text-bottom"></span> Create a New Category</a>

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)     
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a class="badge bg-info text-white" href="/dashboard/categories/{{ $category->slug }}">
                <span data-feather="eye"></span>
              </a>
              <a class="badge bg-warning text-white" href="/dashboard/categories/{{ $category->slug }}/edit">
                <span data-feather="edit"></span>
              </a>
              <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button class="badge bg-danger border-0 text-white" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </div> 

@endsection

