@extends('layouts.admin')

@section('title', 'Edit Tag')

@section('content')
<div class="content-wrapper">
  <!-- Page Title Header Starts-->
  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">Blog - Tags</h4>
      </div>
    </div>
  </div>
  <!-- Page Title Header Ends-->
  
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <h4 class="card-title">Edit blog tag</h4>
          
          @if (session('error'))
            @alert(['type' => 'error'])
              {!! session('error') !!}
            @endalert
          @endif
          
          <form
            class="forms-sample"
            role="form"
            action="{{ route('tags.update', $tag->id) }}"
            method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
              <label for="title">Tag name</label>
              <input
                type="text"
                class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"
                id="name"
                name="name"
                placeholder="Tag Name"
                value="{{ $tag->name }}">
            </div>

            <div class="form-group">
              <label for="description">Tag description</label>
              <textarea 
                class="form-control {{ $errors->has('description') ? 'is-invalid':'' }}"
                id="description"
                name="description"
                placeholder="Tag Description"
                rows="4"> {{ $tag->description }} </textarea>
            </div>

            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <a class="btn btn-light" href="{{ route('tags.index') }} ">Cancel</a>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection