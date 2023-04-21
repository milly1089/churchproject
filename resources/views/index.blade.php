<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>
  <!-- ======= Header ======= -->
  <header id="header" class="more_header d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index"><span>SDA CHURCH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/churchlogo.png" alt="" class="img-fluid"></a> -->
      </div>

      @include('layouts.navbar')

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Kilifi Central SDA Church</span></h2>
          <p class="animate__animated animate__fadeInUp">Kilifi Central SDA Church is a dynamic and vibrant multi-ethnic church that seeks to bring people to Jesus Christ and membership in God's family, develop them for His service in this world and the world to come. A home away from home! </p>
          <a href="about" class="btn-get-started animate__animated animate__fadeInUp">Learn More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Ongoing Church mission, programmes and projects</h2>
          <p class="animate__animated animate__fadeInUp">These programs are meant to support the development needs of the church, to call all people to become disciples of Jesus Christ and prepare them for Christ's soon return.</p>
          <a href="communication" class="btn-get-started animate__animated animate__fadeInUp">Learn More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Grow in Christ: Access all our spiritual materils</h2>
          <p class="animate__animated animate__fadeInUp">God's Word guides you in the right direction in life. It lights the way ahead of you so you can see clearly which way to go. Through every season of your life, you can be confident that God is always leading you through His Word.</p>
          <a href="Literature" class="btn-get-started animate__animated animate__fadeInUp">Learn More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

<div class="flex">
 <div class="mymain">
  <main id="main">
    <!-- <div id="right" ><img src="assets/img/logo.jpg" alt="" class="img-fluid"></div> -->
    <div class="bulletin">
      <h2>Download or Read Our Weekly Church Bulletin</h2>
      <h4>(Uploaded every Thursday)</h4>
      <!--<a href="bulletin-files/{{ App\Models\Bulletin::getBulletinURL(); }}" download style="padding:10px; margin-top:20px; margin-bottom:20px;" class="btn btn-primary btn-lg">Download PDF</a>-->
 <!--     <object-->
	<!--data="bulletin-files/{{ App\Models\Bulletin::getBulletinURL(); }}"-->
	<!--type="application/pdf"-->
	<!--width="100%"-->
	<!--height="150%"-->
 <!--    >-->

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Read</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="bulletin-files/{{ App\Models\Bulletin::getBulletinURL(); }}" role="tab" aria-controls="profile" aria-selected="false" target="_SEJ" rel="noreferrer">Download</a>

  </li>

</ul>
<div class="tab-content" id="myTabContent" style="margin-top:20px;">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

     <iframe src="https://docs.google.com/gview?url=https://www.kilificentralsda.co.ke/bulletin-files/{{ App\Models\Bulletin::getBulletinURL(); }}&embedded=true" style="width:130%; height:500px;" frameborder="0">Read</iframe>
  </div>
</div>
      <!--<a href="bulletin-files/{{ App\Models\Bulletin::getBulletinURL(); }}"  style="padding:10px; margin-top:20px; margin-bottom:20px;" class="btn btn-primary btn-lg" target="_SEJ" rel="noreferrer">Read and Download PDF</a>-->
    <!--</object>-->

</div>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
              <!--<div class="slides">-->
              <!--  <div class="entry-img img-fluid" style="max-width:500px">-->
              <!--    <a href="gallery"><img class="mySlides" src="assets/img/gal1.jpg" style="width:100%"></a>-->
              <!--    <a href="gallery"><img class="mySlides" src="assets/img/gal2.jpg" style="width:100%"></a>-->
              <!--    <a href="gallery"><img class="mySlides" src="assets/img/gal4.jpg" style="width:100%"></a>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="flex">
                    <a href="/gallery"><img class="mySlides" src="assets/img/gal2.jpg" style="width:100%"></a>
                      <a href="/gallery"><img class="mySlides" src="assets/img/gal4.jpg" style="width:100%"></a>
              </div>
              <p class="w3-center entry-title" style=" text-align: center; color: skyblue;"><a href="/gallery" class="get-started-btn">Church Gallery</a></p>

            </article>

              @foreach($blogs as $blog)
                  <article class="entry">

                      <div class="entry-img">
                          <img src="blog-pictures/{{ $blog->picture_url }}" alt="" class="img-fluid">
                      </div>

                      <h2 class="entry-title">
                          <a href="blog-single">{{ $blog->title  }}}</a>
                      </h2>

                      <div class="entry-meta">
                          <ul>
                              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single">Admin</a></li>
                              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single"><time datetime="2020-01-01">{{ $blog->created_at }}</time></a></li>
                          </ul>
                      </div>

                      <div class="entry-content">
                          <p>
                              {{ $blog->description }}
                          </p>
                          <div class="read-more">
                              <a href="blog-single/{{ $blog->id }}">Read More</a>
                          </div>
                      </div>

                  </article>
              @endforeach
            <!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <!--<h3 class="sidebar-title">Search</h3>-->
              <!--<div class="sidebar-item search-form">-->
              <!--  <form action="">-->
              <!--    <input type="text">-->
              <!--    <button type="submit"><i class="bi bi-search"></i></button>-->
              <!--  </form>-->
              <!--</div>-->
              <!-- End sidebar search formn-->

              <h3 class="sidebar-title">Popular Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="projects">On-going Projects</a></li>
                  <li><a href="mission">On-going Mission</a></li>
                  <li><a href="announcements">Get announcements</a></li>
                  <li><a href="literature">Literature</a></li>
                  <li><a href="church-videos">Sermons</a></li>
                  <li><a href="church-videos">Music</a></li>
                </ul>
              </div><!-- End sidebar tags-->

{{--              <h3 class="sidebar-title">More to Find</h3>--}}
{{--              <div class="sidebar-item recent-posts">--}}
{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">--}}
{{--                  <h4><a href="church-videos">Stories of transformation</a></h4>--}}
{{--                </div>--}}

{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">--}}
{{--                  <h4><a href="about#4">Testimonies</a></h4>--}}
{{--                </div>--}}

{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">--}}
{{--                  <h4><a href="literature">Church current read and articles</a></h4>--}}
{{--                </div>--}}

{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">--}}
{{--                  <h4><a href="contact">Drop us a bible study request, prayer request, etc</a></h4>--}}
{{--                </div>--}}

{{--              </div><!-- End sidebar recent posts-->--}}

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
 </div>
 <div class="sidelogo">
      <img src="assets/img/logo.jpg" alt="" class="my_logo img-fluid">
 </div>
</div>


  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

@include('layouts.javascript')


</body>

</html>
