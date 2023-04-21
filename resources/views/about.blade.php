<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="more_header d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index"><span>SDA CHURCH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      @include('layouts.navbar')<!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->
    
<div class="flex">
 <div class="mymain">

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/hero.jpg" class="img-fluid" alt="">
            <figcaption class="fst-italic">Photo: Current Church Structure</figcaption>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Our Story</h3>
            <p>
              Kilifi Central SDA Church is a dynamic and vibrant multi-ethnic church that seeks to bring people to Jesus Christ and membership in God's family, develop them for His service in this world and the world to come. We are a church with a rich heritage.
            </p>
            <a href="churchinfo"><i class="bi bi-arrow-right heritage"></i> Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="430" data-purecounter-duration="1" class="purecounter"></span>
            <p>Church Members</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
            <p>Sabbath Schools</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p>On-going Projects</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    
    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/beliefs.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Beliefs</a></h5>
                <p class="card-text">Seventh-day Adventists accept the Bible as their only creed and hold certain fundamental beliefs to be the teaching of the Holy Scriptures. These beliefs, as set forth here, constitute the church’s understanding and expression of the teaching of Scripture.</p>
                <div class="read-more"><a href="about2.html#1"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/mission.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                <p class="card-text">Make disciples of Jesus Christ who live as His loving witnesses and proclaim to all people the everlasting gospel of the Three Angels’ Messages in preparation for His soon return (Matt 28:18-20, Acts 1:8, Rev 14:6-12).</p>
                <div class="read-more"><a href="about2.html#2"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/vision.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Vision</a></h5>
                <p class="card-text">In harmony with Bible revelation, Seventh-day Adventists see as the climax of God’s plan the restoration of all His creation to full harmony with His perfect will and righteousness.</p>
                <!-- <div class="read-more"><a href="about2.html"><i class="bi bi-arrow-right"></i> Read More</a></div> -->
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/identity.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Method</a></h5>
                <p class="card-text">Guided by the Bible and the Holy Spirit, Seventh-day Adventists pursue this mission through Christ-like living, communicating, discipling, teaching, healing, and serving.</p>
                <!-- <div class="read-more"><a href="about2.html"><i class="bi bi-arrow-right" ></i> Read More</a></div> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section id="4" class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Testimonies</h2>
          <p>“Only God can turn mess into a message, a test into a testimony, a trial into a triumph, a victim into a victory.”</p>
        </div>

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">

            @foreach($testimonies as $testimony)
              <div class="testimonial-item swiper-slide">
                <img style="border-radius:100%; border:2px solid rgb(40,50,60)" src="testimony-pictures/{{ $testimony->picture_url }}" width="80" height="80" alt="">
                <h3>{{ $testimony->first_name.' '.$testimony->last_name }}</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $testimony->testimony_description }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->
</div>
 <div class="sidelogo">
      <img src="assets/img/logo.jpg" alt="" class="my_logo img-fluid">
 </div>
</div>
  </main><!-- End #main -->

  <!-- ======= Features Section ======= -->
    <section class="features hide">
      <div class="container" id="5">

        <div class="section-title">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')

</body>

</html>