<?php 
session_start();

include("navbar.php");

 ?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/carousel.png");

  /* Full height */
  height: 60%; 

  /* Center and scale the image nicely */
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}

.fa {
  padding: 20px;
  font-size: 30px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.active-cyan-3 input[type=text] {
  border: 1px solid #4dd0e1;
  box-shadow: 0 0 0 1px #4dd0e1;
}
</style>

<div class="bg"></div><br>
<div class="container active-cyan-4 mb-4 inline">
	<form method="POST" action="search-property.php">
  <input class="form-control" type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search">
  </form>
</div>
<br><br>
<?php 

include("property-list.php");

 ?>
 <br><br>

 <div>

<br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br>
<link rel="stylesheet" href="style.css" />
 <!--about us-->
<section id="aboutus-section">
  <div class="px-4 py-5 text-center" style="background-color: #e3f2fd;">
    <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="85" height="80">
    <h3 class="display-5 fw-bold"><b>ABOUT US</b></h3>
    <div class="px-4 py-5 text-center" style="background-color: #e3f2fd;">
      <p class="mb-4" style="text-shadow: 0px 0px 1px #e3f2fd;">Welcome to RentalsHub where keys meet dreams! 🏠🔑

We're your compass in the rental universe, connecting tenants with their perfect homes and landlords with eager eyes on their properties. Whether you're browsing listings or showcasing your space, we've got you covered. Let's unlock a new chapter in renting together! 😊🌟</p>
    </div>
  </div>
</section>

<!--END OF about US SECTION-->

<!--CONTACT US SECTION-->
<section id="contactus-section" style="background-color: #white;">
  <div class="container">
    <h2 class="fw-bold pt-md-5" style="color: #337AB7;"><b>CONTACT US</b></h2>
    <p class="lead fw-bold text-white">Have questions or ready to get started? Reach out to us!</p>
    <div class="row">
      <div class="col-md-6 mb-4">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label text-white">Name</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label text-white">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text" style="color: #337AB7;">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label text-white">Message</label>
            <textarea class="form-control" id="message" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn fw-bold" style="background-color: #337AB7;">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!--END OF CONTACT US SECTION-->
<br><br><br><br><br><br>

<footer class="footer-section" style="background-color: #e3f2fd;">
  <div class="container">
      <div class="footer-cta pt-4 pb-4">
          <div class="row">
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fas fa-map-marker-alt" style="color: #006b5d;"></i>
                      <div class="cta-text">
                          <h4>Find us</h4>
                          <span>12, Abba Adamu Road, Kenya</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fas fa-phone" style="color: #006b5d;"></i>
                      <div class="cta-text">
                          <h4>Call us</h4>
                          <span>(+254)712345678</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="far fa-envelope-open" style="color: #006b5d;"></i>
                      <div class="cta-text">
                          <h4>Mail us</h4>
                          <span>contactus@gmail.com</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <br><br>
      <div class="footer-content py-5" style="background-color: #f5f9fd;">
          <div class="row">
              <div class="col-xl-4 col-lg-4 mb-50">
                  <div class="footer-widget">
                      <div class="footer-logo">
                          <a href="#"><img src="images/logo.png" class="img-fluid" alt="logo" style="height: 110px; width: 120px;"></a>
                      </div>
                      <div class="footer-text">
                          <p class="text-muted">
                          Unlock Your Next Home with RentalsHub where keys meet dreams! 🏠🔑

We're your compass in the rental universe, connecting tenants with their perfect homes and landlords with eager eyes on their properties. Whether you're browsing listings or showcasing your space, we've got you covered. Let's unlock a new chapter in renting together! 😊🌟

Ready to find your perfect space or showcase your property? Dive into RentalsHub today! 🏠🔑
                          </p>
                      </div>
                      <div class="footer-social-icon">
                          <span class="fw-bold">Follow us</span>
                          <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                          <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                          <a href="#"><i class="fab fa-whatsapp whatsapp-bg"></i></a>
                          <a href="#"><i class="fab fa-instagram instagram-bg"></i></a>
                          <a href="#"><i class="fab fa-youtube youtube-bg"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="footer-widget">
                      <div class="footer-widget-heading">
                          <h3>Useful Links</h3>
                      </div>
                      <ul>
                          <li><a href="#index.php">Home</a></li>
                          <li><a href="#aboutus-section">About us</a></li>
                          <li><a href="#contactus-section">Contact us</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                  <div class="footer-widget">
                      <div class="footer-widget-heading">
                          <h3>Subscribe</h3>
                      </div>
                      <div class="footer-text mb-25">
                          <p class="text-muted">
                              Don’t miss to subscribe to our new feeds, kindly fill the
                              form below.
                          </p>
                      </div>
                      <div class="subscribe-form">
  <form action="#">
    <input type="text" placeholder="Email Address" required>
    <button type="submit"><i class="fab fa-telegram-plane"></i></button>
  </form>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="copyright-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 text-center text-lg-left"> <br> <br
        <div class="copyright-text">
          <p>
            Copyright &copy; 2024, All Right Reserved
            <a href="#">Rentalhub</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f2d086de1d.js" crossorigin="anonymous"></script>
</footer>



<footer class="text-center text-lg-start" style="background-color: #337AB7; color: white;">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->

</footer>

