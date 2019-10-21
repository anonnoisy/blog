@extends('layouts.blog')

@section('title', 'Welcome')

@section('header')
  @header([
    'image' => asset('blog/img/home-bg.jpg'),
    'heading' => 'Clean Blog',
    'subheading' => 'A Blog Theme by Start Bootstrap'
  ])
  @endheader
@endsection

@section('content')
<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto">

    @forelse ($posts as $post)
      @postprev([
        'to' => route('blogs.show', $post->id),
        'title' => $post->title,
        'section' => $post->section,
        'author' => 'Start Bootstrap',
        'date' => date('F d, Y', strtotime($post->created_at))
      ])
      @endpostprev

      <hr>
    @empty
      <h1>Tidak ada postingan</h1>
    @endforelse

    <!-- Pager -->
    <div class="clearfix">
      <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
  </div>
</div>
@endsection
