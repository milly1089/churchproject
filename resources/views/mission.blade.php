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
          <h2>Missions</h2>
          <ol>
            <li><a href="communication">Communication</a></li>
            <li>Missions</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">
        <div class="row mt-2">
            <table class="table">
                <thead style="background-color:rgb(30,67,86); color:white;">
                  <tr>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($missions as $mission)
                        <tr>
                            <td>{{  $mission->mission_start_date }}</td>
                            <td>{{  $mission->mission_end_date }}</td>
                            <td style="max-width:400px;">{{  $mission->mission_description }}</td>
                        </tr>  
                    @endforeach
                </tbody>
              </table>
          </div>
      </div>
    </section><!-- End About Section -->

  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')

</body>

</html>