<?php
session_start();
if (!empty($_SESSION['name']) && !empty($_SESSION['image'])  && !empty($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Volunteers</title>
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
    <link href="../assets/css/admin-portal.css" rel="stylesheet" />

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
              <a href="excom.php" class="nav-link"
                ><i class="bi-person-check"></i> <span>Excom</span></a
              >
            </li>
            <li>
              <a href="volunteers.php" class="nav-link active"
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

    <!-- Popup for Pending Application Response -->
    <div id="popup-view-response" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content viewResponseDiv">
          <div class="modal-body">
            <span class="text-btn" data-bs-dismiss="modal">Go back </span>

            <form action="connections/update_volunteer_data.php" method="post" name="view-response">
              <h2 class="mt-2">Volunteer Application</h2>
              <div class="row mt-5 mb-3">
                <label for="name">Full Name</label>
                <input
                  readonly
                  id="name"
                  class="form-control"
                  type="text"
                  name="name"
                  title="name"
                  placeholder="Fatima Tuzzahra"
                />
              </div>
              <div class="row my-3">
                <label for="regNo">Registration Number</label>
                <input
                  readonly
                  id="regNo"
                  class="form-control"
                  type="text"
                  name="regNo"
                  title="regNo"
                  placeholder="FA20-BCS-019"
                  pattern="[A-Za-z0-9]{4}-[A-Za-z]{3}-[0-9]{3}"
                />
              </div>
              <div class="row my-3">
                <label for="email">Email Address</label>
                <input
                  readonly
                  id="email"
                  class="form-control"
                  type="email"
                  name="email"
                  title="email"
                  placeholder="fatima.z0773@gmail.com"
                />
              </div>
              <div class="row my-3">
                <label for="contact">Contact Number</label>
                <input
                  readonly
                  id="contact"
                  class="form-control"
                  type="tel"
                  name="contact"
                  title="contact"
                  placeholder="+923022602551"
                />
              </div>

              <div class="row my-3">
                <label for="team"
                  >Please Select a Team</label
                >
                <input
                readonly
                  id="team"
                  class="form-control"
                  type="text"
                  name="team"
                  title="team"
                  placeholder="Team"
                />
              </div>
              <div class="row my-3">
                <label for="pastExperience"
                  >Why do you think you will be a good fit here?
                </label>
                <textarea
                  readonly
                  id="pastExperience"
                  class="scrollabletextbox form-control"
                  type="text"
                  name="pastExperience"
                  title="pastExperience"
                  placeholder="required"
                ></textarea>
              </div>

              <div class="container-fluid">
                <div class="row mt-5">
                <input
                    type="hidden"
                    class="bg-light form-control"
                    name="id"
                    placeholder=""
                  />
                  <button name="submit" value="accept" type="submit" class="col btn text-center m-2">
                    Accept
                  </button>
                  <button name="submit" value="reject" style="background: red; border-color: red" type="submit" class="col btn text-center m-2">
                    Reject
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Popup for Updating Volunteer Data -->
    <div id="popup-view-volunteer" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content viewResponseDiv">
          <div class="modal-body">
            <span class="text-btn" data-bs-dismiss="modal">Go back </span>

            <form action="connections/update_volunteer_data.php" method="post" name="view-response">
              <h2 class="mt-2">Volunteer Application</h2>
              <div class="row mt-5 mb-3">
                <label for="name">Full Name</label>
                <input
                  id="name"
                  class="form-control"
                  type="text"
                  name="name"
                  title="name"
                  placeholder="Fatima Tuzzahra"
                  pattern="[A-Za-z ]{1,50}"
                />
              </div>
              <div class="row my-3">
                <label for="regNo">Registration Number</label>
                <input
                  id="regNo"
                  class="form-control"
                  type="text"
                  name="regNo"
                  title="regNo"
                  placeholder="FA20-BCS-019"
                  pattern="[A-Za-z0-9]{4}-[A-Za-z]{3}-[0-9]{3}"
                />
              </div>
              <div class="row my-3">
                <label for="email">Email Address</label>
                <input
                  id="email"
                  class="form-control"
                  type="email"
                  name="email"
                  title="email"
                  placeholder="fatima.z0773@gmail.com"
                />
              </div>
              <div class="row my-3">
                <label for="contact">Contact Number</label>
                <input
                  id="contact"
                  class="form-control"
                  type="tel"
                  name="contact"
                  title="contact"
                  placeholder="+923022602551"
                />
              </div>

              <div class="row my-3">
                <label for="team">Please select the team that you want to join</label>
                <select name="team" id="team" class="bg-light form-select">
                  <option value="Media">Media</option>
                  <option value="Content">Content</option>
                  <option value="Graphics">Graphics</option>
                </select>
              </div>
              <div class="row my-3">
                <label for="pastExperience"
                  >Why do you think you will be a good fit here
                </label>
                <textarea
                  readonly
                  id="pastExperience"
                  class="scrollabletextbox form-control"
                  type="text"
                  name="pastExperience"
                  title="pastExperience"
                  placeholder="required"
                ></textarea>
              </div>

              <div class="container-fluid">
                <div class="row mt-5">
                  <input
                    type="hidden"
                    class="bg-light form-control"
                    name="id"
                    placeholder=""
                  />
                  <button name="submit" value="update" type="submit" class="col btn text-center m-2">
                    Update
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <main id="main">
      <!-- ======= Application Section ======= -->
      <section id="main-section" class="main-section">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Pending Applications</h2>
          </div>

          <div class="row g-0">
            <div class="col">
            
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
              <div id="carl1" class="carousel-inner">
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

                $sql = "SELECT * FROM volunteer WHERE pending=1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
            ?>

              

                <div class="carousel-item" data-interval="10000">
                  <form action="#" method="" class="php-email-form">
                    <div class="container col-12 d-flex justify-content-center">
                      <div class="col-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                          <div style="width: 100%; color: #35b276; padding: 20px">
                            <h3>NAME: <?php echo $row["name"] ?></h3>
                          </div>
                          <div style="padding: 20px">
                            <p>Registration Number: <?php echo $row["registration_no"] ?></p>
                            <p>Team: <?php echo $row["team"] ?></p>
                            <div class="text-center" style="margin-top: 20px">
                              <button type="button" class="standard-btn btn update-response-btn" value="<?php echo $row["id"] ?>"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#popup-view-response">
                                See Full Response
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <?php
                      }
                    } else {
                ?>
                <div class="carousel-item" data-interval="10000">
                  <div class="card col-6 container">

                    <div style="width: 100%; color: #35b276; padding: 20px" class="text-center">
                      <h3>No pending application!</h3>
                    </div>
                  </div>
                </div>
                <?php
                      
                  }
                  $conn->close();
                ?>
              </div>


              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </button>
            </div>

            
                
              
            </div>
          </div>
        </div>
      </section>
      <!-- End Application Section -->

      <!-- ======= Volunteer Data Section ======= -->
      <section id="main-section" class="main-section">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Volunteer Data</h2>
          </div>

          <div class="row g-0">
            <div class="col">
              
              <table id="volunteer_table_id" class="table table-borderless table-hover">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Registration Number</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Team</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>      

            </div>
          </div>
        </div>
      </section>
      <!-- End Volunteer Data Section -->
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