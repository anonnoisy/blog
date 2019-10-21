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
          
          @if (session('error'))
            @alert(['type' => 'error'])
              {!! session('error') !!}
            @endalert
          @endif
          
          <form
            class="forms-sample"
            role="form"
            action="{{ route('posts.update', $post->id) }}"
            method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
              <label for="title">Title</label>
              <input
                type="text"
                class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}"
                id="title"
                name="title"
                placeholder="Title"
                value="{{ $post->title }}">
            </div>

            <div class="form-group">
              <label for="sub_title">Sub title</label>
              <input
                type="text"
                class="form-control {{ $errors->has('subtitle') ? 'is-invalid':'' }}"
                id="sub_title"
                name="subtitle"
                placeholder="Sub Title"
                value="{{ $post->subtitle }}">
            </div>

            <div class="form-group">
              <label>Image upload</label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                </span>
              </div>
            </div>

            <div class="form-group">
              <label for="section_text">Section</label>
              <textarea 
                class="form-control {{ $errors->has('section') ? 'is-invalid':'' }}"
                id="section_text"
                name="section"
                rows="4">{{ $post->section }}</textarea>
            </div>

            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <a class="btn btn-light" href="{{ route('posts.index') }} ">Cancel</a>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection