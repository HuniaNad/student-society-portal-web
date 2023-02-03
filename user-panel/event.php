<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Events</title>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#teams">Teams</a></li>
            <li><a href="event.php" class="active">Events</a></li>
            <li><a href="team.php">Our Team</a></li>
            <li><a href="contact.html">Contact</a></li>  
              <li><a class="log-in" data-bs-toggle="modal" data-bs-target="#popup-login">Login</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

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
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div
            class="page-header d-flex align-items-center"
            style="background-image: url('../assets/img/comsats/DSC_0244.jpg')"
            >
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Events</h2>
                    <p>Enjoy our event highlights</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->


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
              <li><a href="index.php#about">About us</a></li>
              <li><a href="index.php#teams">Teams</a></li>
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
