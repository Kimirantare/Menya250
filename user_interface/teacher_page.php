<?php
//include('../db_admin/teacher_rest.php');
session_start();
include('../db_files/notes.php');
$db = mysqli_connect('localhost', 'root', '', 'menya');
$teach_username = $_SESSION['teacher'];
$mwarimu = $db->query("SELECT * FROM teachers WHERE username='$teach_username'");
$true = $mwarimu->fetch_assoc();


$amasomo = $db->query("SELECT * FROM lesson");
$ishuri = $db->query("SELECT * FROM class");
$stream = $true['stream'];
$classes = $true['class'];
$umunyeshuri = $db->query("SELECT * FROM students WHERE class= '$classes' AND stream= '$stream'");
$num = $umunyeshuri->num_rows;

?>


<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Menya250 | Teacher's Page</title>
    
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
          <a href="new_lesson_content.php">
            <i class="bx bx-book-add"></i>
            <span class="links_name">Add Lesson Content</span>
          </a>
        </li>
        <li data-aos="fade-right" data-aos-delay="100">
          <a href="new_quiz.php">
            <i class="bx bx-book"></i>
            <span class="links_name">Add New Quiz</span>
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
          <span class="admin_name"><strong>Tr. <?= $true['names']?></strong></span>
          
        </div>
      </nav>
      <!-- end of admin navigation bar-->
      
<!-- basic information area -->
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="right-side">
              <div class="box-topic">All Students</div>
              <div class="number"><?= $num ?></div>
            </div>
            <i class="bx bx-group cart"></i>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="right-side">
              <div class="box-topic">Lesson Materials</div>
              <div class="number">#</div>
            </div>
            <i class="bx bxs-book cart two"></i>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="right-side">
              <div class="box-topic">Lesson</div>
              <br>
              <div class="number"><h5><?= $true['lesson'] ?></h5></div>
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
            <div class="title">Users Comments</div>
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

      <!-- accordions -->

        <button onclick="myFunction('Demo1')" class="container w3-btn w3-block w3-card-2 w3-white w3-round-large w3-text-black w3-left-align w3-sh" 
        style="font-size: 2rem;size: 4rem; height:5rem; width: 97%; border: white; margin-left: 20px;">Students Info</button>

          <div id="Demo1" class="w3-container w3-hide w3-accordion-content w3-animate-zoom"><br>

          <input class="w3-input w3-border w3-round-large w3-padding" type="text" placeholder="Search for student..." 
          id="FilterStudent" onkeyup="adminFilter()"><br>
                      <table class="w3-table" id="pupilTables">
                <tr>
                  <th>#</th>
                  <th>Pupil's Names</th>
                  <th>Gender</th>
                  <th>Info</th>
                  <th>Action</th>
                </tr>
                <?php while ($show = $umunyeshuri->fetch_assoc()) {
                            ?>
                <tr>
                  <td><?= $show['id'] ?></td>
                  <td><?= $show['names'] ?></td>
                  <td><?= $show['gender'] ?></td>
                  <td>Info</td>
                  <td><a class="w3-btn w3-blue w3-round-large w3-hover-green"
                                          href="#">Action</a></td>
                </tr>
                <?php } ?>
            </table>
</div><br><br>

       
      <!-- end of accordions -->
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

      //script for filtering student list
      function adminFilter() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("FilterStudent");
        filter = input.value.toUpperCase();
        table = document.getElementById("studentTables");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }//end of script to filter admin list

      

      //chart script

      const xValues = ["Italy", "France", "Spain", "USA", "Argentina", "Rwanda"];
      const yValues = [55, 49, 44, 24, 50, 80];
      const barColors = ["red", "green","blue","black","brown", "orange"];

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
            text: "Top 6 Students Perfomance report"
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
