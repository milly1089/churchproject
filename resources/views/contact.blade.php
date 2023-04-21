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

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->
    
<div class="flex">
 <div class="mymain">
    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="row">
            
        {{-- display success message on a successful action --}}
         @if(Session::has('success'))
         <div style="width:90%; margin-left:30px; margin-right:30px;" class="alert alert-success" role="alert">
         {{ Session::get('success') }}
         </div>
         @endif

         {{-- display error on top of the form --}}
         @if ($errors->any())
         <div style="width:90%; margin-left:30px; margin-right:30px;" class="alert alert-danger" role="alert">
             <ul class="list-group">
                 @foreach ($errors->all() as $error )
                 <li class="list-group-item">
                 {{ $error }}  
                 </li>
                 @endforeach
             </ul>
         </div>
         @endif

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>P. O. Box 227-80108, Kilifi</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>kilificentralsdachurch@gmail.com<br>info@kilificentralsda.co.ke</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+254 (07348) 33675</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="/contact-kilifi-sda" method="post" role="form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3 mb-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-md btn-success">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://maps.google.com/maps?q=seventh%20day%20adventist%20church%20kilifi%20central,%20coastline,%20kilifi,%20kenya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      
      <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=seventh%20day%20adventist%20church%20kilifi%20central,%20coastline,%20kilifi,%20kenya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps on web site</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->
    </section><!-- End Map Section -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-8403fe71-4d29-45c1-9878-f318d15cdd94"></div>
    </div>
     <div class="sidelogo">
          <img src="assets/img/logo.jpg" alt="" class="my_logo img-fluid">
     </div>
 </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')


</body>

</html>