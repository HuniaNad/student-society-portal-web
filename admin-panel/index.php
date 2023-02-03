<?php
session_start();
if (!empty($_SESSION['name']) && !empty($_SESSION['image'])  && !empty($_SESSION['id'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Admin - Home</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/newLogo.png" rel="icon" />
    <link href="../assets/img/newLogo.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/boxicons/css/boxicons.min.css"
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
    <link
      href="../assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="../assets/css/admin-portal.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">
        <div class="profile">
          <img
            src="../assets/img/uploads/<?php echo $_SESSION['image']; ?>"
            alt=""
            class="img-fluid rounded-circle"
          />
          <h1 class="text-light"><?php echo $_SESSION['name']; ?></h1>
          <div>
            <form action="../logout.php">
				<button type="submit" class="btn logout text-btn">Logout</button>
			</form>
          </div>
        </div>

        <nav id="navbar" class="nav-menu navbar flex-grow-1">
          <ul>
            <li>
              <a href="index.php" class="nav-link active"
                ><i class="bi bi-house"></i> <span>Home</span></a
              >
            </li>
            <li>
              <a href="excom.php" class="nav-link"
                ><i class="bi-person-check"></i> <span>Excom</span></a
              >
            </li>
            <li>
              <a href="volunteers.php" class="nav-link"
                ><i class="bi-people-fill"></i> <span>Volunteers</span></a
              >
            </li>
            <li>
              <a href="events.php" class="nav-link"
                ><i class="bi-calendar-event"></i> <span>Events</span></a
              >
            </li>
            <li>
              <a href="profile.php" class="nav-link"
                ><i class="bi-person-fill"></i> <span>Profile</span></a
              >
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section
      id="hero"
      class="d-flex flex-column justify-content-center align-items-center"
    >
      <div class="hero-container" data-aos="fade-in">
        <a class="logo d-flex align-items-center">
          <img src="../assets/img/newLogo.png" alt="" />
        </a>
        <div class="row gy-4 d-flex justify-content-between mt-5">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <h2 data-aos="fade-up">Student Society Name</h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Student Society provides students with the opportunity to be
              mentored by inspiring professionals of different fields. We will
              not only help you find and nurture your interests, but also help
              you showcase your progress. At Student Society we celebrate the
              freedom of art and strive to create a place where ideas become
              reality.
            </p>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
              <div class="col-lg-4 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="278"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Events</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-4 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="13"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Students</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-4 col">
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

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img
              src="../assets/img/hero-icon.png"
              class="img-fluid mb-3 mb-lg-0"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Featured Services Section ======= -->

      <!-- End Featured Services Section -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about pt-0 mb-10">
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
              <h3 style="font-size: 32px; padding-bottom: 20px; position: relative; font-weight: 700; font-family: var(--font-secondary); color: var(--color-primary);">About Us</h3>
              <p class="fw-bold" style="display: inline">Student Society</p>
              <p style="display: inline">
                - Student Society Tagline <br /><br />
              </p>

              <p class="description pr-5">
                Student Society provides students with the opportunity to be
                mentored by inspiring professionals of different fields. We will
                not only help you find and nurture your interests, but also help
                you showcase your progress. At Student Society we celebrate the
                freedom of art and strive to create a place where ideas become
                reality.
                <br />
                <br />
                Student Society provides students with the opportunity to be
                mentored by inspiring professionals of different fields. We will
                not only help you find and nurture your interests, but also help
                you showcase your progress. At Student Society we celebrate the
                freedom of art and strive to create a place where ideas become
                reality.
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
      <!-- End About Section -->
    </main>
    <!-- End #main -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/typed.js/typed.min.js"></script>
    <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/admin-portal.js"></script>
  </body>
</html>
<?php
} else {
	header("Location: http://localhost/Student_Society/user-panel/index.php");
}
?>