<?php
include('../db_files/newTeacher.php');

$db = mysqli_connect('localhost', 'root', '', 'menya');
$select = $db->query("SELECT * FROM class");
$class = $db->query("SELECT * FROM stream");
$lessons = $db->query("SELECT * FROM lesson");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Menya250 | Add New Teacher</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Menya250</a></h1>
       
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="../db_files/admin_logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Add New Teacher</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>New Teacher Information</h2>
            
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
           <img src="../assets/img/Webinar-amico.svg" alt="Image" class="img-fluid">
          </div>

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="new_teacher.php" method="POST" role="form">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Teacher's Names</label>
                  <input type="text" name="newTeacher" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="newUsername" id="username" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" name="phone" id="phone" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <label for="gender">Gender</label>
                  <input type="text" class="form-control" placeholder="Male(M) or Female(F)" name="gender" id="email" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <label for="name">Select Lesson</label>
                    <select class="form-control" name="newLesson" id="sel1" required>
                      <option>Lessons...</option>
                      <?php while ($row = $lessons-> fetch_assoc()) { ?>
                      <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>

                      <?php } ?>
                    </select>
                </div>

                <div class="col-md-6 form-group mt-3">
                  <label for="name">Select Class</label>
                    <select class="form-control" name="newClass" id="sel1" required>
                      <option>Classes...</option>
                      <?php while ($ishuri = $select -> fetch_assoc())  { ?>
                      <option value="<?= $ishuri['classID'] ?>"><?= $ishuri['classID'] ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="col-md-6 form-group mt-3">
                  <label for="name">Select Stream</label>
                    <select class="form-control" name="newStream" id="sel1" required>
                      <option>Streams...</option>
                      <?php while ($level = $class -> fetch_assoc())  { ?>
                      <option value="<?= $level['level'] ?>"><?= $level['level'] ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="col-md-12 form-group mt-3">
                  <label for="name">Password</label>
                  <input type="password" class="form-control" name="newPassword" id="subject" required>
                </div>               

                

                <div class="col-md-12 form-group mt-3">
                  <input type="submit" class="btn btn-primary d-block w-100" name="addTeacher" value="Add New Teacher">
                </div>

              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

    
  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright Menya250. All Rights Reserved</p>
          <div class="credits">
           
            Designed by <a href="#">JDC_Kimirantare</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>