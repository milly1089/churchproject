<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="more_header d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index"><span>SDA Church</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      
      @include('layouts.navbar')


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Communication</h2>
          <ol>
            <li><a href="index">Home</a></li>
            <li class="mylink1 hide"><a href="communication">Communication</a></li>
            <li class="mylink2 hide">Details</a></li>
          </ol>
        </div>

      </div>
<div class="flex">
 <div class="mymain">
      </section><!-- End Our Services Section -->
      <div class="bulletin" style="margin-top:40px;">
        <h2>Download Our Weekly Church Bulletin</h2>
        <h4>(Uploaded every Thursday)</h4>
        <a href="bulletin-files/{{ App\Models\Bulletin::getBulletinURL(); }}" download style="padding:10px; margin-top:20px; margin-bottom:20px;" class="btn btn-primary btn-lg"><span>Download PDF</span></a>  
      </div>
      <!-- ======= Services Section ======= -->
      <section class="services general">
        <div class="container">

          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch announce" data-aos="fade-up">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Announcements</a></h4>
                <p class="description">Most recent updates of what is going on in the church, and other important church communication</p>
                <a href="/church-announcements" class="get-started-btn announce">Learn More</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch project" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">On-going Projects</a></h4>
                <p class="description">Find out current projects undertaken by various departments and donate to support them</p>
                <a href="/church-projects" class="get-started-btn project">Learn More</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mission" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">On-going Missions</a></h4>
                <p class="description">Kilifi Central SDA church is a mission church. Find out the current on-going and future missions</p>
                <a href="/church-missions" class="get-started-btn mission">Learn More</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch programme" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Weekly Programmes</a></h4>
                <p class="description">Learn about weekly church programmes organised to nurture and prepare God's children for His work and soon return</p>
                <a href="/church-weekly-programme" class="get-started-btn programme">Learn More</a>
              </div>
            </div>

          </div>

        </div>
      </section>
      </div>
    <div class="sidelogo">
      <img src="assets/img/logo.jpg" alt="" class="my_logo img-fluid">
    </div>
 </div>
    </main>


    <!-- ======= Footer ======= -->
    <footer></footer>

     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      @include('layouts.javascript')


  </body>

  </html>