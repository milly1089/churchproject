<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>
  <main>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
      <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
          <h1 class="text-light"><a href="index"><span>KCCSDA</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        
        @include('layouts.navbar')<!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <main id="main">

      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>More about Kilifi Central SDA</h2>
            <ol>
              <li><a href="about">About</a></li>
              <li>Our Story</li>
            </ol>
          </div>

        </div>
      </section>
      <!-- ======= Features Section ======= -->
      <section class="features">
        <div class="container" id="5">

          <div class="section-title">
            <h2>Church Heritage</h2>
            <p>Kilifi central church started as a Sabbath school of Takaungu church at Kilifi primary school.
              It was organized as a church in the year 1982 February with a total of 25 members by Pastor Reuben Kamundi.
            </p>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5">
              <img src="assets/img/image1.jpg" class="img-fluid" alt="">
              <figcaption class="fst-italic">Fig 1: Planted by Islams who stayed there, still standing </figcaption>
            </div>
            <div class="col-md-7 pt-4">
              <p>
               The elders and pastor then were:
             </p>
             <ul>
              <li><i class="bi bi-check"></i> Eld. Ben Katana</li>
              <li><i class="bi bi-check"></i> Eld. Samuel Mmbere</li>
              <li><i class="bi bi-check"></i> Eld. John Ziro</li>
              <li><i class="bi bi-check"></i> Pr. Ishmael K. Mangi</li>
            </ul>
          </div>
        </div>
        <div><p>After fellowshipping at Kilifi primary school for 4 years, leaders looked for an alternative place (plot). In 1986, the congregation moved there and started worshiping in a makeshift shelter. Opposite was a cashew nut tree that provided shade for worshipers who were increasing in number every Sabbath.
          In 1988 there were disputes on the plot. Another church (denomination) claimed ownership of the plot. The contention was solved by physical planer by then who said he was the one who allocated the plot to Adventists.
        </p></div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/image2.jpg" class="img-fluid" alt="">
            <figcaption class="fst-italic">Fig 2: The alter in makuti church, still standing</figcaption>
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <p>
              There were Islam who had grabbed a parcel but the few members by then bought them a plot and allocated them.
              Due to rapid increase of membership, the leadership started working on building a permanent structure in 2001. Members (including the District Commissioner(D.C) who was a member) joined hands and worked together and made sure the building was completed and roofed. From 2002 up to date, the church has progressed.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Sabbath Schools</h3>
            <ul>
              <li><i class="bi bi-check"></i> Kibarani (started as Chando Sabbath school)---currently organized church</li>
              <li><i class="bi bi-check"></i> Ganze---currently organized churche</li>
              <li><i class="bi bi-check"></i> Migumo Miri---currently organized churche</li>
              <li><i class="bi bi-check"></i> Fumbini---currently organized churche</li>
              <li><i class="bi bi-check"></i> Kilifi East(2011)---currently organized churche</li>
              <li><i class="bi bi-check"></i> Mnarani(2015)---currently organized churche</li>
              <li><i class="bi bi-check"></i> Great Hope(collapsed) </li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <h3>Church Pastors since inception</h3>
            <ul>
              <li>1. Pr. Ishmael K. Mangi</li>
              <li>2. Pr. Josiah Mwaringa</li>
              <li>3. Pr. Enosh Kitsao………2009</li>
              <li>4. Pr.  Bartholomew </li>
              <li>5. Pr. Mwachala</li>
              <li>6  Pr. Renson Nzaka……1991-</li>
              <li>7. Pr. Ngari</li>
              <li>8. Pr. Stephen Apola</li>
            </ul>
          </div>
          <div class="col-md-7">
            <ul>
              <li>9. Pr. Rashid Atulo Begga</li>
              <li>10. Pr. Jeremiah Jefwa</li>
              <li>11. Pr. Rossen Akilimali</li>
              <li>12. Pr. Samson Tsuwi….2006</li>
              <li>13. Pr. Enosh Kitsao</li>
              <li>14. Pr. Christopher Ziro Nyanje</li>
              <li>15. Pr. Joshua Kazungu Kagwirira</li>
              <li>16. Pr. Vincent Gitea</li>
              <li>17. Pr. Renson Nzaka ….2020</li>
            </ul>
          </div>
        </div>
        <div><p>
              Kilifi Central Church is the District/Station central meeting point /
              Headquarters for Kilifi Station which was organized on 31st January 2015

            </p>
            <p class="fst-italic">
              Current membership………430
            </p>

            <h3> Infrastructures</h3>
            <p>1. A primary school(Kilifi Central Academy)</p>
            <p>2. FIRST special needs camps(2016) at Pwani school for the Deaf</p>
          </div>

      </div>
    </section><!-- End Features Section -->

  </main>
  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')


</body>

</html>