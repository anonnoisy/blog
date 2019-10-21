@extends('layouts.admin')

@section('title', 'Tags')

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
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List tags</h4>
          <p class="card-description">
            <a href="{{ route('tags.create') }}" class="btn btn-primary btn-fw">
              <i class="mdi mdi-star-outline"></i> Add new tag
            </a>

            @if (session('success'))
              @alert(['type' => session('type') ])
                {!! session('success') !!}
              @endalert
            @endif

          </p>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Tag name </th>
                <th> Tag description </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @forelse ($tags as $tag)

              <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $tag->name }} </td>
                <td> 
                  @if ($tag->description == null)
                    - Tidak ada deskripsi
                  @else
                    {{ $tag->description }}
                  @endif
                </td>
                <td>
                  <a href="{{ route('tags.edit', $tag->id ) }}" class="btn btn-icons btn-warning">
                    <i class="mdi mdi-pencil-outline"></i>
                  </a>
                  <form class="d-inline" action="{{ route('tags.destroy', $tag->id) }}" method="POST">
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
                  <td colspan="6" class="text-center">Belum ada tags</td>
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