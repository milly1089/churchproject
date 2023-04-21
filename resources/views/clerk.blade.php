<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Church Clerk - Kilifi Central SDA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<style>
  .center{
    width: auto;
    margin: auto;
  }
</style>
</head>

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
  
<div class="flex">
 <div class="mymain">
  <!-- ======= Contact Section ======= -->
  <section class="contact">
    <div class="container" >

      <div class="row" style="margin-top:50px;">
         
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
             
        <div class="col-md-6 p-2">
            <div class="info-box">
              <h3 style="color:rgb(30,67,86)">Transfer Membership To Kilifi Central SDA</h3>
              <p>Send us an email indicating the church you are transfering your membership from, and indicate the Tel. No. of your Pr./Elder/Clerk. Also state your area of interest in church service</p>
            </div>
          </div>
            <div class="col-md-6 p-2">
              <div class="info-box">
                <h3 style="color:rgb(30,67,86)">Transfer Membership From Kilifi Central SDA</h3>
                <p>Send us an email indicating the church you are transfering your membership to, and indicate the Tel. No. of its Pr./Elder/Clerk. If possible state the reason for seeking transfer</p>
              </div>
            </div>

          </div>

          <div class="col-lg-6 center">
            <form action='/contact-kilifi-sda-clerk' method="post" role="form">
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
              <div class="text-center"><button class="btn btn-md btn-success" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
     </div>
         <div class="sidelogo">
              <img src="assets/img/logo.jpg" alt="" class="my_logo img-fluid">
         </div>
    </div>
    <!-- ======= Footer ======= -->
    <footer></footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('layouts.javascript')


  </body>

  </html>