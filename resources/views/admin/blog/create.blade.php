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
            action="{{ route('posts.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="title">Title</label>
              <input
                type="text"
                class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}"
                id="title"
                name="title"
                placeholder="Title">
            </div>

            <div class="form-group">
              <label for="sub_title">Sub title</label>
              <input
                type="text"
                class="form-control {{ $errors->has('subtitle') ? 'is-invalid':'' }}"
                id="sub_title"
                name="subtitle"
                placeholder="Sub Title">
            </div>

            <div class="form-group">
              <label for="tag">Tag name</label>
              <select name="tag_id" id="tag" 
                  required class="form-control {{ $errors->has('tag') ? 'is-invalid':'' }}">
                  <option value="">Pilih</option>
                  @foreach ($tags as $tag)
                      <option value="{{ $tag->id }}">{{ ucfirst($tag->name) }}</option>
                  @endforeach
                </select>
              </div>

            <div class="form-group">
              <label for="file">Image upload</label>
              <input type="file" name="image" class="form-control file-upload-info" accept="image/*" placeholder="Upload Image">
            </div>

            <div class="form-group">
              <label for="section_text">Section</label>
              <textarea 
                class="form-control {{ $errors->has('section') ? 'is-invalid':'' }}"
                id="section_text"
                name="section"
                rows="4"></textarea>
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