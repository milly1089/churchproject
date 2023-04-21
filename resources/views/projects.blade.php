<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
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
          <h2>Projects</h2>
          <ol>
            <li><a href="communication">Communication</a></li>
            <li>Projects</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">
        <div class="row mt-2">
            @foreach($projects as $project)
                <div class="col-lg-6 ">
                    <div class="card mb-3">
                        <img class="card-img-top" src="project-pictures/{{ $project->project_photo_url }}" alt="Project Image">
                        <div class="card-body">
                        <h5 class="card-title">Project Name : {{ $project->project_name }}</h5>
                        <p class="card-text">Project Description :<br>{{ $project->project_description  }}</p>
                        <p class="card-text"><small class="text-muted">Project Status : {{ $project->project_status }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
      </div>
    </section><!-- End About Section -->

  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')

</body>

</html>