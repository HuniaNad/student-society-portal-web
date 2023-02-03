<?php
session_start();
if (!empty($_SESSION['name']) && !empty($_SESSION['image'])  && !empty($_SESSION['id'])) {
?>
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
              <a href="volunteers.php" class="nav-link"
                ><i class="bi-people-fill"></i> <span>Volunteers</span></a
              >
            </li>
            <li>
              <a href="events.php" class="nav-link active"
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

    <!-- Popup Add Event -->
    <div id="popup-add-event" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content addEventDiv">
          <div class="modal-body">
            <span class="text-btn" data-bs-dismiss="modal">Go back </span>

            <form action="connections/add_event.php" method="post" name="add-event" enctype="multipart/form-data">
              <h2 class="mt-2">Add Event</h2>

              <div class="row mt-5 mb-3">
                <input type="file" id="image" name="image" accept=".jpg, .png" class="btn secondary-btn border" />
              </div>

              <div class="row mb-3">
                <input
                  id="event-name"
                  class="form-control"
                  type="text"
                  name="name"
                  title="name"
                  placeholder="Event Name"
                  pattern="[A-Za-z0-9 ]{1,50}"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="date"
                  class="form-control"
                  type="date"
                  name="date"
                  title="date"
                  placeholder="Date"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="time"
                  class="form-control"
                  type="time"
                  name="time"
                  title="time"
                  placeholder="Time"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="speaker"
                  class="form-control"
                  type="text"
                  name="speaker"
                  title="speaker"
                  placeholder="Speaker"
                  pattern="[A-Za-z ]{1,50}"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="venue"
                  class="form-control"
                  type="text"
                  name="venue"
                  title="venue"
                  placeholder="Venue"
                  pattern="[A-Za-z0-9 ]{1,100}"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="description"
                  class="form-control"
                  type="text"
                  name="description"
                  title="description"
                  placeholder="Description"
                  pattern="[A-Za-z0-9 ]{1,200}"
                />
              </div>

              <div class="row my-3 ">
                <label for="status">Display on Notice Board</label>
                <select name="status" id="status" class="bg-light form-select">
                  <option value="show">Show</option>
                  <option value="hide">Hide</option>
                </select>
              </div>

              <div class="container-fluid">
                <div class="row mt-5">
                  <button type="submit" class="col btn text-center">
                    Add Event
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Popup Add Event -->


    <!-- Popup Update Event -->
    <div id="popup-update-event" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content addEventDiv">
          <div class="modal-body">
            <span class="text-btn" data-bs-dismiss="modal">Go back </span>

            <form action="connections/update_event.php" method="post" name="add-event" enctype="multipart/form-data">
              <h2 class="mt-2">Update Event</h2>

              <div class="row mt-5 mb-3">
                <input type="file" id="image" name="image" accept=".jpg, .png" class="btn secondary-btn border" />
              </div>

              <div class="row mb-3">
                <input
                  id="name"
                  class="form-control"
                  type="text"
                  name="name"
                  title="name"
                  placeholder="Event Name"
                  pattern="[A-Za-z0-9 ]{1,50}"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="date"
                  class="form-control"
                  type="date"
                  name="date"
                  title="date"
                  placeholder="Date"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="time"
                  class="form-control"
                  type="time"
                  name="time"
                  title="time"
                  placeholder="Time"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="speaker"
                  class="form-control"
                  type="text"
                  name="speaker"
                  title="speaker"
                  placeholder="Speaker"
                  pattern="[A-Za-z ]{1,50}"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="venue"
                  class="form-control"
                  type="text"
                  name="venue"
                  title="venue"
                  placeholder="Venue"
                  pattern="[A-Za-z0-9 ]{1,100}"
                  required
                />
              </div>
              <div class="row my-3">
                <input
                  id="description"
                  class="form-control"
                  type="text"
                  name="description"
                  title="description"
                  placeholder="Description"
                  pattern="[A-Za-z0-9 ]{1,200}"
                />
              </div>

              <div class="row my-3 ">
                <label for="status">Display on Notice Board</label>
                <select name="status" id="status" class="bg-light form-select">
                  <option value="show">Show</option>
                  <option value="hide">Hide</option>
                </select>
              </div>

              <div class="container-fluid">
                <div class="row mt-5">
                  <input
                      type="hidden"
                      class="bg-light form-control"
                      name="id"
                      placeholder=""
                  />
                  <button type="submit" class="col btn text-center">
                    Update
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Popup Update Event -->

    <main id="main">
      <!-- ======= Add Event Section ======= -->
      <section id="main-section" class="main-section">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Events</h2>
          </div>

          <div class="row g-0">
            <div class="semester-schedule">
              <h2>Semester Schedule</h2>
            </div>
            <div class="col">
                <div class="row g-0">
                  <div class="col">
                      <table id="event_table_id" class="table table-borderless table-hover">
                        <thead>
                          <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Speaker</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                      </table>
                  </div>
                </div>
              <button class="standard-btn btn mb-3" data-bs-toggle="modal" data-bs-target="#popup-add-event">
                Add Event
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- End Add Event Section -->

      <div
        class="container"
        style="width: 100%; background-color: white; height: 50px"
      ></div>

      <!-- Add Notice Section -->
      <section id="main-section" class="main-section">
        <div class="container" data-aos="fade-up">
          <div class="row g-0">
            <div class="semester-schedule">
              <h2>Notice Board</h2>
            </div>

            <div class="col">
              <form
                action="forms/quote.php"
                method="post"
                class="php-email-form"
              >
                <div class="row g-0">
                  <div class="col">
                    
                      <table
                        id="notice_table_id"
                        class="table table-borderless table-hover"
                      >
                        <thead>
                          <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Speaker</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                      </table>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div
        class="container"
        style="width: 100%; background-color: white; height: 50px"
      ></div>
      
      <!-- Add Notice Section -->
      <section id="main-section" class="main-section">
        <div class="container" data-aos="fade-up">
          <div class="row g-0">
            <div class="semester-schedule">
              <h2>Event Highlights</h2>
            </div>

            <form action="connections/upload_eventpicture.php" method="post" enctype="multipart/form-data">
              <div class="pl-sm-4 pl-2">
                  <b><p>Upload Event Highlights:</p></b>
                  
                  <div class="row">
                    <div class="col">
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        placeholder="Event Name"
                        required
                      />
                    </div>
                    <div class="col">
                      <input
                        type="file"
                        name="image"
                        id="image"
                        accept=".png, .jpg"
                        class="btn secondary-btn border"
                        required
                      />
                    </div>
                  </div>
                  <div class="col">
                      <button class="btn standard-btn" type="submit">Upload</button>
                  </div>
                  
              </div>
            </form>



            <div class="container-lg">
            <div class="row gy-4 justify-content-evenly m-2">
                <!-- <?php
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
                ?> -->
                      <!-- Start Card Item -->
                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <form action="connections/delete_eventpicture.php" method="post" enctype="multipart/form-data">
                          <div class="card">
                              <div class="card-img">
                                  <img src="../assets/img/event_highlights/<?php echo $row["image"] ?>" alt="" class="img-fluid"/>
                              </div>

                              <h3><a class="stretched-link fw-bold"><?php echo $row["name"] ?></a></h3>

                              <div class="container d-flex justify-content-end mb-3">
                                <input type="hidden" name="image_name" value="<?php echo $row["image"] ?>">

                                <button type="submit" name="delete_image" value="<?php echo $row["id"] ?>" class="btn delete-btn btn-danger">
                                  <i class="bi-trash" style="color: white; margin-right: 2px"></i>
                                </button>
                              </div>
                          </div>
                        </form>
                      </div>
                      <!-- End Card Item --> 
                <!-- <?php
                        }
                    } else {
                        echo "0 results";
                    }
                ?> -->
            </div>
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