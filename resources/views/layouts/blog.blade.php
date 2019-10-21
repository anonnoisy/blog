<!DOCTYPE html>
<html lang="en">
<head>

  {{-- include head meta --}}
  @include('partials.blog.head')
  
</head>
<body>

<div class="super_container">

	<!-- Header -->
  {{-- include nav header component --}}
  @include('components.blog.header')

	<!-- Menu -->
  {{-- include navbar components --}}
  @include('components.blog.navbar')
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
    {{-- include slider component --}}
    @yield('slider')
		
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Blog Section - Don't Miss -->

						@yield('content')

					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>

				<!-- Sidebar -->

				<div class="col-lg-3">
          {{-- include sidebar component --}}
          @include('components.blog.sidebar')
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	
</div>

{{-- include partials javascript --}}
@include('partials.blog.javascript')

</body>
</html>