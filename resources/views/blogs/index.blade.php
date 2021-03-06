@extends('layouts.blog')

@section('title', 'Welcome')

@section('slider')
  @slider([
    'image' => asset('blog/images/home_slider.jpg'),
    'tag' => 'Sport',
    'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?'
  ])
    @section('similar')
      @similar([
        'similar' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most'
      ])
      @endsimilar
    @endsection
    @section('slidenext')
      @slidenext([
        'image' => asset('blog/images/home_slider_next.jpg'),
        'next_title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?'
      ])
      @endslidenext
    @endsection
  @endslider
@endsection

@section('content')
<div class="blog_section">
  <div class="section_panel d-flex flex-row align-items-center justify-content-start">
    <div class="section_title">Don't Miss</div>
    <div class="section_tags ml-auto">
      <ul>
        <li class="active"><a href="category.html">all</a></li>
        <li><a href="category.html">style hunter</a></li>
        <li><a href="category.html">vogue</a></li>
        <li><a href="category.html">health & fitness</a></li>
        <li><a href="category.html">travel</a></li>
      </ul>
    </div>
    <div class="section_panel_more">
      <ul>
        <li>more
          <ul>
            <li><a href="category.html">new look 2018</a></li>
            <li><a href="category.html">street fashion</a></li>
            <li><a href="category.html">business</a></li>
            <li><a href="category.html">recipes</a></li>
            <li><a href="category.html">sport</a></li>
            <li><a href="category.html">celebrities</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="section_content">
    <div class="grid clearfix">

      <!-- Largest Card With Image -->
      @imgcard([
        'type' => 'largest',
        'image' => asset('blog/images/post_1.jpg'),
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?',
        'text' => 'Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...',
        'author' => 'Katy Liu',
        'date' => 'Sep 29, 2017 at 9:48 am'
      ])
      @endimgcard

      <!-- Small Card Without Image -->
      @smcard([
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?',
        'author' => 'Katy Liu',
        'date' => 'Sep 29, 2017 at 9:48 am'
      ])
      @endsmcard

      <!-- Small Card With Background -->
      @smbgcard([
        'image' => asset('blog/images/post_4.jpg'),
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?',
        'author' => 'Katy Liu',
        'date' => 'Sep 29, 2017 at 9:48 am'
      ])
      @endsmbgcard

      <!-- Small Card With Image -->
      @imgcard([
        'type' => 'small',
        'image' => asset('blog/images/post_1.jpg'),
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?',
        // 'text' => 'Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...',
        'author' => 'Katy Liu',
        'date' => 'Sep 29, 2017 at 9:48 am'
      ])
      @endimgcard

      <!-- Small Card With Image -->
      @imgcard([
        'type' => 'small',
        'image' => asset('blog/images/post_1.jpg'),
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?',
        // 'text' => 'Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...',
        'author' => 'Katy Liu',
        'date' => 'Sep 29, 2017 at 9:48 am'
      ])
      @endimgcard

      <!-- Default Card No Image -->
      @defcard([
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most'
      ])
      @enddefcard

      <!-- Default Card No Image -->

      @defcard([
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most'
      ])
      @enddefcard

      <!-- Default Card No Image -->

      @defcard([
        'title' => 'How Did van Gogh’s Turbulent Mind Depict One of the Most'
      ])
      @enddefcard

    </div>
  </div>
</div>

<!-- Blog Section - What's Trending -->

<div class="blog_section">
  <div class="section_panel d-flex flex-row align-items-center justify-content-start">
    <div class="section_title">What's Trending</div>
    <div class="section_tags ml-auto">
      <ul>
        <li class="active"><a href="category.html">all</a></li>
        <li><a href="category.html">style hunter</a></li>
        <li><a href="category.html">vogue</a></li>
        <li><a href="category.html">health & fitness</a></li>
        <li><a href="category.html">travel</a></li>
      </ul>
    </div>
    <div class="section_panel_more">
      <ul>
        <li>more
          <ul>
            <li><a href="category.html">new look 2018</a></li>
            <li><a href="category.html">street fashion</a></li>
            <li><a href="category.html">business</a></li>
            <li><a href="category.html">recipes</a></li>
            <li><a href="category.html">sport</a></li>
            <li><a href="category.html">celebrities</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="section_content">
    <div class="grid clearfix">
      
      <!-- Large Card With Background -->
      <div class="card card_large_with_background grid-item">
        <div class="card_background" style="background-image:url(images/post_8.jpg)"></div>
        <div class="card-body">
          <div class="card-title"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>
      
      <!-- Large Card With Image -->
      <div class="card grid-item card_large_with_image">
        <img class="card-img-top" src="images/post_9.jpg" alt="">
        <div class="card-body">
          <div class="card-title"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <p class="card-text">Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Default Card With Image -->
      <div class="card card_small_with_image grid-item">
        <img class="card-img-top" src="images/post_5.jpg" alt="">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>
      
      <!-- Default Card With Background -->

      <div class="card card_default card_default_with_background grid-item">
        <div class="card_background" style="background-image:url(images/post_6.jpg)"></div>
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
        </div>
      </div>

      <!-- Default Card No Image -->
      <div class="card card_default card_default_no_image grid-item">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
        </div>
      </div>

      <!-- Default Card No Image -->
      <div class="card card_default card_default_no_image grid-item">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
        </div>
      </div>

      <!-- Default Card With Background -->

      <div class="card card_default card_default_with_background grid-item">
        <div class="card_background" style="background-image:url(images/post_7.jpg)"></div>
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
        </div>
      </div>

    </div>
    
  </div>
</div>

<!-- Blog Section - Videos -->

<div class="blog_section">
  <div class="section_panel d-flex flex-row align-items-center justify-content-start">
    <div class="section_title">Most Popular Videos</div>
  </div>
  <div class="section_content">
    <div class="row">
      <div class="col">
        <div class="videos">
          <div class="player_container">
            <div id="P1" class="player" 
                 data-property="{videoURL:'2ScS5kwm7nI',containment:'self',startAt:0,mute:false,autoPlay:false,loop:false,opacity:1}">
            </div>
          </div>
          <div class="playlist">
            <div class="playlist_background"></div>

            <!-- Video -->
            <div class="video_container video_command active" onclick="jQuery('#P1').YTPChangeVideo({videoURL: '2ScS5kwm7nI', mute:false, addRaster:true})">
              <div class="video d-flex flex-row align-items-center justify-content-start">
                <div class="video_image"><div><img src="images/video_1.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                <div class="video_content">
                  <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                  <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                </div>
              </div>
            </div>

            <!-- Video -->
            <div class="video_container video_command" onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'BzMLA8YIgG0', mute:false, addRaster:true})">
              <div class="video d-flex flex-row align-items-center justify-content-start">
                <div class="video_image"><div><img src="images/video_2.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                <div class="video_content">
                  <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                  <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                </div>
              </div>
            </div>

            <!-- Video -->
            <div class="video_container video_command" onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'bpbcSdqvtUQ', mute:false, addRaster:true})">
              <div class="video d-flex flex-row align-items-center justify-content-start">
                <div class="video_image"><div><img src="images/video_3.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                <div class="video_content">
                  <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                  <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                </div>
              </div>
            </div>

            <!-- Video -->
            <div class="video_container video_command" onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'UjYemgbhJF0', mute:false, addRaster:true})">
              <div class="video d-flex flex-row align-items-center justify-content-start">
                <div class="video_image"><div><img src="images/video_4.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                <div class="video_content">
                  <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                  <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Blog Section - Latest -->

<div class="blog_section">
  <div class="section_panel d-flex flex-row align-items-center justify-content-start">
    <div class="section_title">Latest Articles</div>
  </div>
  <div class="section_content">
    <div class="grid clearfix">
      
      <!-- Small Card With Image -->
      <div class="card card_small_with_image grid-item">
        <img class="card-img-top" src="images/post_10.jpg" alt="">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card Without Image -->
      <div class="card card_default card_small_no_image grid-item">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card With Image -->
      <div class="card card_small_with_image grid-item">
        <img class="card-img-top" src="images/post_15.jpg" alt="">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card With Image -->
      <div class="card card_small_with_image grid-item">
        <img class="card-img-top" src="images/post_13.jpg" alt="https://unsplash.com/@jakobowens1">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card With Background -->
      <div class="card card_default card_small_with_background grid-item">
        <div class="card_background" style="background-image:url(images/post_11.jpg)"></div>
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card With Background -->
      <div class="card card_default card_small_with_background grid-item">
        <div class="card_background" style="background-image:url(images/post_16.jpg)"></div>
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card With Image -->
      <div class="card card_small_with_image grid-item">
        <img class="card-img-top" src="images/post_14.jpg" alt="">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card Without Image -->
      <div class="card card_default card_small_no_image grid-item">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Small Card Without Image -->
      <div class="card card_default card_small_no_image grid-item">
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
          <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
        </div>
      </div>

      <!-- Default Card With Background -->
      <div class="card card_default card_default_with_background grid-item">
        <div class="card_background" style="background-image:url(images/post_12.jpg)"></div>
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
        </div>
      </div>

      <!-- Default Card With Background -->
      <div class="card card_default card_default_with_background grid-item">
        <div class="card_background" style="background-image:url(images/post_6.jpg)"></div>
        <div class="card-body">
          <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection
