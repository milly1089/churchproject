<!DOCTYPE html>
<html lang="en">

	@include('layouts.header')


<body>
	<!-- ======= Header ======= -->
	<header id="header" class="more_header d-flex align-items-center ">
		<div class="container d-flex justify-content-between align-items-center">

			<div class="logo">
				<h1 class="text-light"><a href="index"><span>KCCSDA</span></a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>


			@include('layouts.navbar')


		</div>
	</header><!-- End Header -->

	<main id="main">

		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Other Resources</h2>
					<ol>
						<li><a href="index">Home</a></li>
						<li>Videos</li>
					</ol>
				</div>

			</div>
		</section>
		
    <div class="flex">
     <div class="mymain">

		<!-- ======= Video Section ======= -->
		<section class="portfolio">
			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-sermons">Church Sermons</li>
							<li data-filter=".filter-songs">Music</li>
							<li data-filter=".filter-testimonies">Members' Testimonies</li>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


					@foreach($videos as $video)
						<div class="col-lg-4 col-md-6 portfolio-wrap filter-{{ $video->category }}">
							<div class="portfolio-item">
								<video width="400" controls>
									<source src="assets/video/{{ $video->video_url }}" type="video/mp4">
											Your browser does not support HTML video.
										</video>
										<p class="v_title p-2 text-white" >{{ substr($video->video_url, 0, strrpos($video->video_url, '.'))  }}</p>
								</div>
							</div>
					@endforeach
				</div>
			</div>
		</section><!-- End Video Section -->
		 </div>
         <div class="sidelogo">
              <img src="assets/img/logo.jpg" alt="" class="my_logo img-fluid">
         </div>
        </div>
		</main>

			<footer></footer>

			<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

			@include('layouts.javascript')


		</body>

		</html>