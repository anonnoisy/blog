<div class="card card_default card_small_with_background grid-item">
  <div class="card_background" style="background-image:url({{ $image }})"></div>
  <div class="card-body">
    <div class="card-title card-title-small"><a href="{{ $title_link ?? '' }}">{{ $title }}</a></div>
    <small class="post_meta"><a href="{{ $author_link ?? '' }}">{{ $author }}</a><span>{{ $date }}</span></small>
  </div>
</div>