<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index"><span>SDA Church</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar"></nav>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index">Home</a></li>
            <li><a href="blog">Blog</a></li>
            <li>{{ $blog->title }}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

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
                          <!--<div class="read-more">-->
                          <!--    <a href="blog-single/{{ $blog->id }}">Read More</a>-->
                          <!--</div>-->
                      </div>

              </article>

{{--            <div class="blog-author d-flex align-items-center">--}}
{{--              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">--}}
{{--              <div>--}}
{{--                <h4>Jane Smith</h4>--}}
{{--                <div class="social-links">--}}
{{--                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>--}}
{{--                  <a href="https://facebook.com/kilifi central"><i class="bi bi-facebook"></i></a>--}}
{{--                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>--}}
{{--                </div>--}}
{{--                <p>--}}
{{--                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.--}}
{{--                </p>--}}
{{--              </div>--}}
{{--            </div><!-- End blog author bio -->--}}

            <div class="blog-comments">

              <!-- <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                      Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                  </div>
                </div>
              </div> --><!-- End comment #1 -->

              <!-- <div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                  </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">01 Jan, 2020</time>
                      <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div> --><!-- End comment reply #2-->

                <!-- </div> --><!-- End comment reply #1-->

              <!-- </div> --><!-- End comment #2-->

              <!-- <div id="comment-3" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                      Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                    </p>
                  </div>
                </div>

              </div> --><!-- End comment #3 -->

              <!-- <div id="comment-4" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                    </p>
                  </div>
                </div>

              </div> --><!-- End comment #4 -->

{{--              <div class="reply-form">--}}
{{--                <h4>Leave a Reply</h4>--}}
{{--                <p>Your email address will not be published. Required fields are marked * </p>--}}
{{--                <form action="">--}}
{{--                  <div class="row">--}}
{{--                    <div class="col-md-6 form-group">--}}
{{--                      <input name="name" type="text" class="form-control" placeholder="Your Name*">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 form-group">--}}
{{--                      <input name="email" type="text" class="form-control" placeholder="Your Email*">--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="row">--}}
{{--                    <div class="col form-group">--}}
{{--                      <input name="website" type="text" class="form-control" placeholder="Your Website">--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="row">--}}
{{--                    <div class="col form-group">--}}
{{--                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <button type="submit" class="btn btn-primary">Post Comment</button>--}}

{{--                </form>--}}

{{--              </div>--}}

            </div><!-- End blog comments -->

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
                    <ul>
                        @foreach($blogs as $blog)
                            <li><a href="#">{{ $blog->category }}</a></li>
                        @endforeach
                    </ul>
                </ul>
              </div><!-- End sidebar categories-->

{{--              <h3 class="sidebar-title">Recent Posts</h3>--}}
{{--              <div class="sidebar-item recent-posts">--}}
{{--                <div class="post-item clearfix">--}}
{{--                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">--}}
{{--                  <h4><a href="blog-singl">Nihil blanditiis at in nihil autem</a></h4>--}}
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
                    <ul>
                        @foreach($blogs as $blog)
                            <li><a href="#">{{ $blog->category }}</a></li>
                        @endforeach
                    </ul>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('layouts.javascript')


</body>

</html>
