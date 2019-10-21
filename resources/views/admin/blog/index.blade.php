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
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bordered table</h4>
          <p class="card-description">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-fw">
              <i class="mdi mdi-star-outline"></i> Add new post
            </a>

            @if (session('success'))
              @alert(['type' => 'success'])
                {!! session('success') !!}
              @endalert
            @endif

          </p>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Image </th>
                <th> Title </th>
                <th> Tag </th>
                <th> Date </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @forelse ($posts as $post)

              @php
                $image = Storage::url($post->image);
              @endphp

              <tr>
                <td> {{ $no++ }} </td>
                <td class="text-center">
                  <img src="{{ asset($image) }}" alt="Image Blog">
                </td>
                <td> {{ $post->title }} </td>
                <td> {{ $post->tag->name }} </td>
                <td> {{ $post->created_at }} </td>
                <td>
                  <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-icons btn-primary">
                    <i class="mdi mdi-eye"></i>
                  </a>
                  <a href="{{ route('posts.edit', $post->id ) }}" class="btn btn-icons btn-warning">
                    <i class="mdi mdi-pencil-outline"></i>
                  </a>
                  <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-icons btn-danger">
                        <i class="mdi mdi-delete-empty"></i>
                      </button>
                  </form>
                </td>
              </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center">Belum ada postingan</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection