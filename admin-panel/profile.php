<?php
session_start();
if (!empty($_SESSION['name']) && !empty($_SESSION['image'])  && !empty($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Account Setting</title>
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
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Template Main CSS File -->
    <link href="../assets/css/account-setting.css" rel="stylesheet" />

    <!-- JQuery Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Datatable Files -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css"
    />
    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"
    ></script>
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">
        <div class="profile">
          <div>
            <img
              src="../assets/img/uploads/<?php echo $_SESSION['image']; ?>"
              alt=""
              class="img-fluid"
            />
          </div>
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
              <a href="index.php" class="nav-link"
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
              <a href="profile.php" class="nav-link active"
                ><i class="bi-person-fill"></i> <span>Profile</span></a
              >
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Forgot Password Pop-up Section ======= -->
    <div id="popup-resetpass" class="modal modal-lg fade"style="z-index: 9998; margin-left: 150px;">
      <div class="modal-dialog modal-dialog-centered">
		  <div class="modal-content forgotpassDiv">
			<div class="modal-body">
			  <span
				class="text-btn"
				data-bs-dismiss="modal"
				>Go back
			  </span>

			  <form action="connections/reset_password.php" method="post">
				<h2 class="mt-2">Reset Password</h2>
				<div class="row mt-5 mb-3">
				  <input
					id="password"
					class="form-control"
					type="password"
					name="password"
					title="Password"
					placeholder="Password"
					required
				  />
				</div>

				<div class="row my-3">
				  <input
					id="conf-password"
					class="form-control"
					type="password"
					name="conf_password"
					title="Confirm Password"
					placeholder="Confirm Password"
					oninput="check(this)"
					required
				  />
				</div>

				<div class="container">
				  <div class="row mt-5">
					<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" />
					<button type="submit"id="reset-btn" class="col btn text-center">
					  Reset
					</button>
				  </div>
				</div>
			  </form>
			</div>
		  </div>
		</div>
    </div>

    <main id="main">
      <section id="main-section" class="main-section">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Account Setting</h2>
          </div>
          <div class="wrapper bg-white mt-sm-5">
            <h4 class="pb-4 border-bottom">Account settings</h4>
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
            
            $sql = "SELECT * FROM executive WHERE id=".$_SESSION['id'];
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              $row = $result->fetch_assoc();
            ?>
            <form action="connections/update_profile_data.php" method="post" enctype="multipart/form-data">
              <div class="d-flex align-items-start py-3 border-bottom">
                <img
                src="../assets/img/uploads/<?php echo $row['image']; ?>"
                alt=""
                class="img-fluid img"
                />
                <div class="pl-sm-4 pl-2" id="img-section">
                  <b>Profile Photo</b>

                  <p>Accepted file type .jpg/.png.</p>
                  <input
                    type="file"
                    name="profilePhoto"
                    id=""
                    accept=".png, .jpg"
                    class="btn button border"
                  />
                </div>
              </div>
              <div class="d-flex flex-row-reverse">
                <button type="button"style="margin: 20px" class="btn button border"  data-bs-toggle="modal" data-bs-target="#popup-resetpass" >
                <b>Reset Password</b>
                </button>
              </div>
              <div class="py-2">
                <div class="row py-2">
                <div class="col-md-6">
                  <label for="name">Full Name</label>
                  <input
                  type="text"
                  class="bg-light form-control"
                  placeholder="Fatima Tuzzahra"
                  pattern="[A-Za-z ]{1,50}"
                  name="name"
                  id="name"
                  value="<?php echo $row['name']; ?>"
                  />
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                  <label for="RegNo">Registration Number</label>
                  <input
                  type="text"
                  class="bg-light form-control"
                  placeholder="FA20-BCS-019"
                  pattern="[A-Za-z0-9]{10)"
                  name="regNo"
                  id="regNo"
                  value="<?php echo $row['registration_no']; ?>"
                  />
                </div>
                </div>
                <div class="row py-2">
                <div class="col-md-6">
                  <label for="email">Email Address</label>
                  <input
                  type="email"
                  class="bg-light form-control"
                  placeholder="steve_@email.com"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                  name="email"
                  id="email"
                  value="<?php echo $row['email']; ?>"
                  />
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                  <label for="phone">Phone Number</label>
                  <input
                  type="tel"
                  class="bg-light form-control"
                  placeholder="+923022602551"
                  name="phone"
                  id="phone"
                  value="<?php echo $row['contact']; ?>"
                  />
                </div>
                </div>
                <div class="row py-2">
                <div class="col-md-6">
                  <label for="position">Position</label>
                  <input
                            readonly
                            type="text"
                            class="bg-light form-control"
                            name="role"
                            placeholder="+923022602551"
                  value="<?php echo $row['role']; ?>"
                          />
                </div>
                </div>
                <div class="py-3 pb-4 border-bottom">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <button class="btn standard-btn mr-3">Save Changes</button>
                </div>
              </form>			   
				<?php
				} else {
					echo "0 results";
				}
				?>
            </div>
          </div>
        </div>
      </section>
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