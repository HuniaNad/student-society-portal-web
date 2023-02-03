<?php
session_start();
if (!empty($_SESSION['name']) && !empty($_SESSION['image'])  && !empty($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Excom</title>
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
    <link href="../assets/css/admin-portal.css" rel="stylesheet"/>

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
              <a href="index.php" class="nav-link"
                ><i class="bi bi-house"></i> <span>Home</span></a
              >
            </li>
            <li>
              <a href="excom.php" class="nav-link active"
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
    
    <!-- Popup for Update Excom Information -->
    <div id="popup-update-excom" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content updateExcomDiv">
          <div class="modal-body">
            <span class="text-btn" data-bs-dismiss="modal">Go back</span>
            <form action="connections/update_excom_data.php" method="post" name="update-excom" enctype="multipart/form-data">
              <div class="py-2">
                <div class="col pt-md-0 pt-3">
                    <label for="role">Position</label>
                    <input
                      readonly
                      type="text"
                      class="bg-light form-control"
                      name="role"
                      placeholder="+923022602551"
                    />
                </div>

                <div class="row py-2">
                  <div class="col">
                    <label for="name">Full Name</label>
                    <input
                      type="text"
                      class="bg-light form-control"
                      name="name"
                      placeholder="Fatima Tuzzahra"
                      pattern="[A-Za-z ]{1,50}"
                    />
                  </div>
                  <div class="col pt-md-0 pt-3">
                    <label for="regNo">Registration Number</label>
                    <input
                      type="text"
                      class="bg-light form-control"
                      name="regNo"
                      placeholder="FA20-BCS-019"
                      pattern="[A-Za-z0-9]{4}-[A-Za-z]{3}-[0-9]{3}"
                    />
                  </div>
                </div>
                <div class="row py-2">
                  <div class="col">
                    <label for="email">Email Address</label>
                    <input
                      type="email"
                      class="bg-light form-control"
                      name="email"
                      placeholder="steve_@email.com"
                    />
                  </div>
                  <div class="col pt-md-0 pt-3">
                    <label for="phone">Phone Number</label>
                    <input
                      type="tel"
                      class="bg-light form-control"
                      name="phone"
                      placeholder="+923022602551"
                    />
                  </div>
                </div>

                <div class="col pt-md-0 pt-3">
                    <label for="image">Profile Picture</label>
                    <input
                      type="file"
                      class="bg-light form-control"
                      name="image"
                      accept=".png, .jpg"
                      
                    />
                </div>

                <div class="py-3 pb-4 border-bottom">
                  <input
                    type="hidden"
                    class="bg-light form-control"
                    name="id"
                    placeholder=""
                  />
                  <button id="excom-change-btn" class="btn btn-primary mr-3">Save Changes</button>
                  <button type="reset" class="btn border button" data-bs-dismiss="modal">Cancel</button>
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
            <h2>Excom Members</h2>
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

                    $sql = "SELECT * FROM executive WHERE role IN ('President', 'Vice-President', 'HR')";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                ?>
                            <!-- Start Card Item -->
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="text-center" style="color: white; background-color: #f37557; margin-top: 10px;">
                                        <h3><?php echo $row["role"] ?></h3>
                                    </div>

                                    <div class="card-img">
                                        <img src="../assets/img/uploads/<?php echo $row["image"] ?>" alt="" class="img-fluid"/>
                                    </div>

                                    <h3 class="text-center"><a class="stretched-link"><?php echo $row["name"] ?></a></h3>

                                    <div class="container d-flex justify-content-center mb-3">
                                        <button id="get_excom_data" class="btn update-excom-btn" type="button" value="<?php echo $row["id"] ?>"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#popup-update-excom">Update</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card Item --> 
                <?php
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </div>
          </div>
        </div>
      </section>

      <section id="main-section" class="main-section">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Team Leads</h2>
          </div>


          <div class="container-lg">
            <div class="row gy-4 justify-content-evenly m-2">
            <?php
                $sql = "SELECT * FROM executive WHERE role IN ('Media Lead', 'Content Lead', 'Graphics Lead')";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
            ?>
                        <!-- Start Card Item -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="text-center" style="color: white; background-color: #f37557; margin-top: 10px;">
                                    <h3><?php echo $row["role"] ?></h3>
                                </div>

                                <div class="card-img">
                                    <img src="../assets/img/uploads/<?php echo $row["image"] ?>" alt="" class="img-fluid"/>
                                </div>

                                <h3 class="text-center"><a class="stretched-link"><?php echo $row["name"] ?></a></h3>

                                <div class="container d-flex justify-content-center mb-3">
                                    <button id="get_excom_data" class="btn update-excom-btn" type="button" value="<?php echo $row["id"] ?>" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#popup-update-excom">Update</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Card Item --> 
            <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
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