<div class="card card_{{ $type }}_with_image grid-item">
  <img class="card-img-top" src="{{ $image }}" alt="https://unsplash.com/@cjtagupa">
  <div class="card-body">
    <div class="card-title">
      <a href="{{ $title_link ?? '' }}">{{ $title }}</a></div>
    <p class="card-text">{{ $text ?? '' }}</p>
    <small class="post_meta"><a href="{{ $author_link ?? '' }}">{{ $author }}</a><span>{{ $date }}</span></small>
  </div>
</div>