<?php
//include('../db_files/stud_rest.php');
session_start();
$db = mysqli_connect('localhost', 'root', '', 'menya');
$stud_username = $_SESSION['student'];
$umwana = $db->query("SELECT * FROM students WHERE username='$stud_username'");
$true = $umwana->fetch_assoc();
?>

<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Menya250 | Student's Page</title>
    
     <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/w3.css">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!--------------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="../assets/js/Chart.js"></script>
  </head>
  <body style="font-family: poppins;">
   
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">Menya250</span>
      </div>
      <ul class="nav-links">
        <li data-aos="fade-right" data-aos-delay="100">
          <a href="#" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li data-aos="fade-right" data-aos-delay="100">
          <a href="#">
            <i class="bx bx-game"></i>
            <span class="links_name">Play Games</span>
          </a>
        </li>
        <li data-aos="fade-right" data-aos-delay="100">
          <a href="../db_files/admin_logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
        
        
        <li class="log_out" data-aos="fade-right" data-aos-delay="100">
          <a href="../db_files/admin_logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>



    <section class="home-section">

      <!-- admin navigation bar-->
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <img src="../assets/img/avatar3.png" alt="" />
          <span class="admin_name"><strong><?= $true['names']?></strong></span>
          
        </div>
      </nav>
      <!-- end of admin navigation bar-->
      
<!-- basic information area -->
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="right-side">
              <div class="box-topic">Position</div>
              <div class="number">#</div>
            </div>
            <i class="bx bx-award cart"></i>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="right-side">
              <div class="box-topic">Marks</div>
              <div class="number">#</div>
            </div>
            <i class="bx bxs-book cart two"></i>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="right-side">
              <div class="box-topic">All Quizes</div>
              <div class="number">#</div>
            </div>
            <i class="bx bx-list-check cart three"></i>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="right-side">
              <div class="box-topic">Class</div>
              <div class="number"><?= $true['class']?> <?= $true['stream']?></div>
            </div>
            <i class="bx bxs-landmark cart four"></i>
          </div>
        </div>
    <!-- end of basic information area -->

    <!--statistical and message area -->
        <div class="sales-boxes">
    <!-- chart area -->
          <div class="recent-sales box">
            <div class="title">Statistics</div>
            <div class="sales-details">
              <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
    <!--end of chart area -->
    <!-- user comments area -->
          <div class="top-sales box">
            <div class="title">Quizes/Exercises</div>
            <ul class="top-sales-details">
              <li>
                <a href="#">
                  <img src="images/scarves.jpg" alt="" />
                  <span class="product">Hermes Silk Scarves.</span>
                </a>
                <span class="price">$2312</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/blueBag.jpg" alt="" />
                  <span class="product">Succi Ladies Bag</span>
                </a>
                <span class="price">$1456</span>
              </li>
              <li>
                <a href="#">
                  <img src="images/bag.jpg" alt="" />
                  <span class="product">Gucci Womens's Bags</span>
                </a>
                <span class="price">$2345</span>
              </li>
            </ul>
          </div>
      <!-- end of user commnents area-->
        </div>
      </div><br>

    </section>

    <script>
      //sidebar script
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
      //end of sidebar script

      //script for accordion

      function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }
      //end of accordion script

     

      

      //chart script

      const xValues = ["Maths", "Science", "Social Studies", "English", "Kinyarwanda"];
      const yValues = [55, 49, 44, 24, 50];
      const barColors = ["red", "green","blue","black","brown"];

      new Chart("myChart", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          legend: {display: false},
          title: {
            display: true,
            text: "All Lesson's Perfomance report"
          }
        }
      });

// end of chart script
    </script>

      <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  </body>
</html>
