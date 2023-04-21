const createFooter = () => {
    let footer = document.querySelector('footer');

footer.innerHTML = `
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our Newsletter to receive nortifications</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="communication">Communicaton</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="clerk">Clerk's Desk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog">Church Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Spiritual Materials</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Programs</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mission</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Projects</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Community Work</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Publishing</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              P. O. Box 227-80108<br>
              Kilifi, Coast Region<br>
              Kenya <br><br>
              <strong>Phone:</strong> +254 (07348) 33675<br>
              <strong>Email:</strong> kilificentralsdachurch@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About KCCSDA</h3>
            <p>Kilifi Central SDA Church is a dynamic and vibrant multi-ethnic church that seeks to bring people to Jesus Christ and membership in God's family, develop them for His service in this world and the world to come. We are home away from home!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KilifiCentralSDAChurch</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
`;
}

createFooter();