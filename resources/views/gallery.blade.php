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
          <h2>Our Church Gallery</h2>
          <ol>
            <li><a href="index">Home</a></li>
            <li>Our Gallery</li>
          </ol>
        </div>

      </div>
    </section>
    
<div class="flex">
 <div class="mymain">
    <!-- ======= Gallery Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-2019">2019</li>
              <li data-filter=".filter-2018">2018</li>
              <li data-filter=".filter-2019">2019</li>
              <li data-filter=".filter-2020">2020</li>
              <li data-filter=".filter-2021">2021</li>
              <li data-filter=".filter-2022">2022</li>
              <li data-filter=".filter-2023">2023</li>
              <li data-filter=".filter-2024">2024</li>
              <li data-filter=".filter-2025">2025</li>


            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          
          @foreach($galleryimages as $galleryimage)

            <div class="col-lg-4 col-md-6 portfolio-wrap filter-{{ $galleryimage->year }}">
              <div class="portfolio-item">
                <img src="assets/img/{{ $galleryimage->picture_url }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div>
                    <a href="assets/img/{{ $galleryimage->picture_url }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
          @endforeach
          
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2020">
            <div class="portfolio-item">
              <img src="assets/img/gal1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/gal1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2022">
            <div class="portfolio-item">
              <img src="assets/img/gal2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/gal2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2021">
            <div class="portfolio-item">
              <img src="assets/img/gal3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/gal3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2020">
            <div class="portfolio-item">
              <img src="assets/img/gal4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/gal4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2022">
            <div class="portfolio-item">
              <img src="assets/img/gal5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/gal5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2021">
            <div class="portfolio-item">
              <img src="assets/img/gal6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/gal6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2021">
            <div class="portfolio-item">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/about.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-2020">
            <div class="portfolio-item">
              <img src="assets/img/gal2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div>
                  <a href="assets/img/gal2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Photo Name"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->
    </div>
    <div class="sidelogo">
        <img src="assets/img/logo.jpg" alt="" class="img-fluid">
    </div>
</div>

  </main>
  </div>
    <div class="sidelogo">
        <img src="assets/img/logo.jpg" alt="" class="my_logo img-fluid">
    </div>
</div>

  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')


</body>

</html>