<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Homepage</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/newLogo.png" rel="icon" />
    <link href="../assets/img/newLogo.png" rel="newLogo" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet" />

    <!-- JQuery Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <img src="../assets/img/newLogo.png" alt="" />
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#teams">Teams</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="team.php">Our Team</a></li>
            <li><a href="contact.html">Contact</a></li>  
              <li><a class="log-in" data-bs-toggle="modal" data-bs-target="#popup-login">Login</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <h2 data-aos="fade-up">Student Society Name</h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Student Society provides students with the opportunity to be mentored by
                inspiring professionals of different fields. We will not only
                help you find and nurture your interests, but also help you
                showcase your progress. At Student Society we celebrate the freedom of art
                and strive to create a place where ideas become reality.
            </p>

            <button
              data-bs-toggle="modal"
              data-bs-target="#popup-track-order"
              type="submit"
              class="btn btn-primary-setup"
              style="width: 150px"
              
            >
            <a href="volunteer-register-form.html">Register</a>
            </button>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="521"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Events</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="1453"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Students</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="3"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Teams</p>
                </div>
              </div>
              <!-- End Stats Item -->
            </div>
          </div>
          <div
            class="col-lg-5 order-1 order-lg-2 home-transp"
            data-aos="zoom-out"
          >
            <img
              src="../assets/img/hero-icon.png"
              class="img-fluid float-right mb-3 mb-lg-0"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= Login Pop-up Section ======= -->
    <div id="popup-login" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content loginDiv">
            <div class="modal-body">
              <span class="text-btn"
                data-bs-dismiss="modal">Go back
              </span>

              <form action="../login.php" method="post">
                <h2 class="mt-2">Log In</h2>
                <div class="row mt-5 mb-3">
                  <input id="email" class="form-control" type="email" name="email" title="email" placeholder="Email" required/>
                </div>
                <div class=" row my-3">
                  <input id="password" class="form-control" type="password" name="password" title="Password" placeholder="Password" required/>
                </div>

                <span class="text-btn forgotPass" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#popup-forgotpass">Forgot Password?</span>

                <div class="container-fluid">
                  <div class="row mt-5">
                    <button type="submit" name="login" class="col btn text-center">Log in</button>
                  </div>
                </div> 
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- ======= Forgot Password Pop-up Section ======= -->
      <div id="popup-forgotpass" class="modal modal-lg fade">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content forgotpassDiv">
            <div class="modal-body">
              <span
                class="text-btn"
                data-bs-dismiss="modal"
                data-bs-toggle="modal"
                data-bs-target="#popup-login"
                >Go back
              </span>
  
              <form action="" name="forgot-password">
                <h2 class="mt-2">Forgot Password</h2>
                <div class="row mt-5 mb-3">
                  <input
                    id="email"
                    class="form-control"
                    type="email"
                    name="emp-id"
                    title="Email"
                    placeholder="Email"
                    required
                  />
                </div>
  
                <div class="row my-3">
                  <input
                    id="regNo"
                    class="form-control"
                    type="regNo"
                    name="text"
                    title="regNo"
                    placeholder="Registration Number"
                    pattern="[A-Za-z0-9]{4}-[A-Za-z]{3}-[0-9]{3}"
                    required
                  />
                </div>
  
                <div class="container">
                  <div class="row mt-5">
                    <button type="button" class="col btn text-center">
                      Send Code
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <main id="main">
      <section id="notice-board" class="notice-board">
        <div class="container" data-aos="fade-up">
          <div>
            <div class="section-header">
              <span>Notice Board</span>
              <h2>Notice Board</h2>
            </div>

            <div class="container-lg">
            <div class="row gy-4 justify-content-evenly m-2">

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "student_society_portal";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM event WHERE hide=0";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
            ?>

            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="notice-board">
                <div class="notice-board-img">
                  <img
                    src="../assets/img/events/<?php echo $row["image"] ?>"
                    alt=""
                    class="img-fluid"
                    style="height: 290px; width: -webkit-fill-available;"
                  />
                </div>
                <h3><?php echo $row["name"] ?></h3>
                <h4>Time: <?php echo $row["time"] ?></h4>
                <h4>Venue: <?php echo $row["venue"] ?></h4>
                <p><?php echo $row["description"] ?></p>
              </div>
            </div>
            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
            </div>
              </div>
            
          </div>
        </div>
      </section>

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about pt-0">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div
              class="col-lg-6 position-relative align-self-start order-lg-last order-first"
            >
              <img
                src="../assets/img/comsats/libraryRight.jpg"
                class="img-fluid"
                alt="Picture of Junaid Zaidi Library [front]"
              />
            </div>
            <div class="col-lg-6 content order-last order-lg-first">
              <h3>About Us</h3>
              <p class="fw-bold" style="display: inline">Student Society</p>
              <p style="display: inline">
                - Student Society Tagline <br /><br />
              </p>

              <p class="description pr-5">
                Student Society provides students with the opportunity to be mentored by
                inspiring professionals of different fields. We will not only
                help you find and nurture your interests, but also help you
                showcase your progress. At Student Society we celebrate the freedom of art
                and strive to create a place where ideas become reality.
                <br />
                <br />
                Student Society provides students with the opportunity to be mentored by
                inspiring professionals of different fields. We will not only
                help you find and nurture your interests, but also help you
                showcase your progress. At Student Society we celebrate the freedom of art
                and strive to create a place where ideas become reality.
                <br />
                <br />
                We are a building a team of creatives in the fields of music,
                drama, literature and filmmaking. Stronger together, we will be
                covering all events happening in CUI so Sign Up Now to stay
                updated with the latest. Have a look at Our Teams
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Teams Section ======= -->
      <section id="teams" class="services pt-0">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Our Teams</span>
            <h2>Our Teams</h2>
          </div>

          <!-- Start Card Item -->
          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="../assets/img/Teams/content.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a class="stretched-link"
                    >Content Writing</a
                  >
                </h3>
                <p>
                   The team is responsible for creating engaging and informative written content that represents and promotes the organization. They work closely with the media team to ensure that all written content is cohesive and aligned with the organization's mission and message.
                </p>
              </div>
            </div>
            <!-- End Card Item -->

            <!-- Start Card Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="../assets/img/Teams/media.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a class="stretched-link"
                    >Media</a
                  >
                </h3>
                <p>
                The team captures and creates visual stories, memories and moments of the organization through photographs and videos. They work closely with the media team to create cohesive and aligned visual content that represents and promotes the organization.
                </p>
              </div>
            </div>
            <!-- End Card Item -->
            
            <!-- Start Card Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="../assets/img/Teams/graphic.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a class="stretched-link"
                    >Graphic Designing</a
                  >
                </h3>
                <p>
                The team is responsible for creating visually appealing designs, layouts and graphics that align with the organization's mission, values and message. They are skilled in using design software and tools to create a cohesive visual brand identity for the organization.
                </p>
              </div>
            </div>
            <!-- End Card Item -->

            
          </div>
        </div>
      </section>
      <!-- End Teams Section -->

      <!-- Event Highlights -->
      <section id="event" class="services pt-0">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Event Highlights</span>
            <h2>Event Highlights</h2>
          </div>
          <div
            id="slideshow"
            class="carousel slide container event-highlights"
            data-bs-ride="carousel" 
          >

            <!-- Carousel -->
            <div id="carl2" class="carousel-inner">

              <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "student_society_portal";

                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = "SELECT * FROM event_highlights";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
              ?>

              <div class="carousel-item">
                <img src="../assets/img/event_highlights/<?php echo $row["image"] ?>" class="d-block w-100"/>
                <div class="carousel-caption d-none d-md-block">
                  <h5><?php echo $row["name"] ?></h5>
                </div>
              </div>

              <?php
                    }
                  } else {
              ?>

              <div class="carousel-item">
                <img src="../assets/img/events/nothing_to_display.png" class="d-block w-100"/>
              </div>

              <?php 
                }
                $conn->close();
              ?>

              
            </div>

            <!-- Left and right controls -->
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#slideshow"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#slideshow"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
          </div>
        </div>
      </section>

      <!-- ======= Explore More Events ======= -->
      <section id="explore-events" class="explore-events">
        <div class="container" data-aos="zoom-out">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h3>Like what you see? Explore our Events!</h3>
              <p>
               Register and become a part of our Society. blah blah blah
              </p>
              <a class="cta-btn" href="event.php">All Events</a>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End Explore More Events ======= -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a class="logo d-flex align-items-center">
              <span>Find Us</span>
            </a>
            <div class="social-links d-flex mt-4">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#about">About us</a></li>
              <li><a href="#teams">Teams</a></li>
              <li><a href="event.php">Events</a></li>
              <li><a href="team.php">Our Team</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br />
              <strong>Email:</strong> student_society@services.com<br />
            </p>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Student Society</span></strong
          >. All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    
    <!-- Chatbot JS File -->
    <script src="../assets/js/chatbot.js"></script>
  </body>
</html>
