@extends('layouts.admin')

@section('title', 'Blog Posts')

@section('content')
<div class="content-wrapper">
  <!-- Page Title Header Starts-->
  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">Blog</h4>
      </div>
    </div>
  </div>
  <!-- Page Title Header Ends-->
  
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <h4 class="card-title">Create new blog post</h4>
          
          <img src="{{ asset($image) }}" alt="Image" width="200" class="mb-4">
          <h2> {{ $post->title }} </h2>
          <h4> {{ $post->subtitle }} </h4>
          <p class="pt-2"> Created at {{ $post->created_at }} </p>
          <h6> {{ $post->section }} </h6>

          <hr>

          <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-fw">
            <i class="mdi mdi-pencil-outline"></i> Edit
          </a>
          <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-fw">
              <i class="mdi mdi-delete-empty"></i> Delete
            </button>
          </form>
          <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-fw">
            <i class="mdi mdi-keyboard-return"></i> Back
          </a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection