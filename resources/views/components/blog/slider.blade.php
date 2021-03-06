<div class="home_slider_container">
  <div class="owl-carousel owl-theme home_slider">
    
    <!-- Slider Item -->
    <div class="owl-item">
      <div class="home_slider_background" style="background-image:url({{ $image }})"></div>
      <div class="home_slider_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_slider_content">
                <div class="home_slider_item_category trans_200">
                  <a href="{{ $tag_link ?? '' }}" class="trans_200">{{ $tag ?? '' }}</a>
                </div>
                <div class="home_slider_item_title">
                  <a href="post.html">{{ $title }}</a>
                </div>
                <div class="home_slider_item_link">
                  <a href="{{ $cont_read_link ?? '' }}" class="trans_200">Continue Reading
                    <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                      <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Similar Posts -->
      <div class="similar_posts_container">
        <div class="container">
          <div class="row d-flex flex-row align-items-end">

            @yield('similar')

          </div>
        </div>
        
        @yield('slidenext')

      </div>
    </div>

  </div>

  <div class="custom_nav_container home_slider_nav_container">
    <div class="custom_prev custom_prev_home_slider">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
        <polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
      </svg>
    </div>
        <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
      <li class="custom_dot custom_dot_home_slider active"><span></span></li>
      <li class="custom_dot custom_dot_home_slider"><span></span></li>
      <li class="custom_dot custom_dot_home_slider"><span></span></li>
    </ul>
    <div class="custom_next custom_next_home_slider">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
        <polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
      </svg>
    </div>
  </div>

</div>