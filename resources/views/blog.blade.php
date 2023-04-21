<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
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

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Church Blog</h2>

          <ol>
            <li><a href="index">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
              @foreach($blogs as $blog)
                  <article class="entry">

                      <div class="entry-img">
                          <img src="blog-pictures/{{ $blog->picture_url }}" alt="" class="img-fluid">
                      </div>

                      <h2 class="entry-title">
                          <a href="blog-single">{{ $blog->title }}</a>
                      </h2>

                      <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single">Admin</a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single"><time datetime="2020-01-01">
                                      {{ $blog->created_at }}</time></a></li>

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



{{--            <div class="blog-pagination">--}}
{{--              <ul class="justify-content-center">--}}
{{--                <li><a href="#">1</a></li>--}}
{{--                <li class="active"><a href="#">2</a></li>--}}
{{--                <li><a href="#">3</a></li>--}}
{{--              </ul>--}}
{{--            </div>--}}

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

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach($blogs as $blog)
                      <li><a href="#">{{ $blog->category }}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

{{--              <h3 class="sidebar-title">Recent Posts</h3>--}}
{{--              <div class="sidebar-item recent-posts">--}}
{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">--}}
{{--                  <h4><a href="blog-single">Nihil blanditiis at in nihil autem</a></h4>--}}
{{--                  <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                </div>--}}

{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">--}}
{{--                  <h4><a href="blog-single">Quidem autem et impedit</a></h4>--}}
{{--                  <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                </div>--}}

{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">--}}
{{--                  <h4><a href="blog-single">Id quia et et ut maxime similique occaecati ut</a></h4>--}}
{{--                  <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                </div>--}}

{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">--}}
{{--                  <h4><a href="blog-single">Laborum corporis quo dara net para</a></h4>--}}
{{--                  <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                </div>--}}

{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">--}}
{{--                  <h4><a href="blog-single">Et dolores corrupti quae illo quod dolor</a></h4>--}}
{{--                  <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                </div>--}}

{{--              </div><!-- End sidebar recent posts-->--}}

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                    @foreach($blogs as $blog)
                        <li><a href="#">{{ $blog->category }}</a></li>
                    @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')


</body>

</html>
