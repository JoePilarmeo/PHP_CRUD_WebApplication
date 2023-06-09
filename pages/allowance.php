<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/lg.png">
  <title>
    Scholar Sphere System
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../pages/dashboard.php" target="_blank">
        <img src="../assets/img/lg.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Scholar Sphere System</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/members.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">people</i>
            </div>
            <span class="nav-link-text ms-1">Members</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/grades-page.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Grades</span>
          </a>
        </li>



        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/reqs-page.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Requirements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/allowance-page.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Allowance</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to
          pro</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <h5>Allowance</h5>

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>

            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <?php
    require_once('config/config.php');
    require_once('config/db.php');

    if (isset($_GET['memberID'])) {
      $memberID = $_GET['memberID'];
    }

    if (isset($_POST['year'])) {
      $year = $_POST['year'];
    } else {
      $year = '';
    }

    if (isset($_POST['sem'])) {
      $sem = $_POST['sem'];
    } else {
      $sem = '';
    }

    $query_member = "SELECT * FROM members WHERE members.memberID = $memberID";
    $result_member = mysqli_query($conn, $query_member);
    $member = mysqli_fetch_assoc($result_member);

    // Query the database based on the selected status
    $query = "SELECT * FROM allowances";
if ($year && !$sem) {
    $query .= " WHERE allowances.yearlevel = '$year'";
}
if ($sem && !$year) {
    $query .= " WHERE allowances.semester = '$sem'";
}
if ($year && $sem){
    $query .= " WHERE allowances.yearlevel = '$year' AND allowances.semester = '$sem'";
}
$query .= " ORDER BY CASE
                WHEN allowances.yearlevel = '1st Year' THEN 1
                WHEN allowances.yearlevel = '2nd Year' THEN 2
                WHEN allowances.yearlevel = '3rd Year' THEN 3
                WHEN allowances.yearlevel = '4th Year' THEN 4
            END ASC,
            CASE
                WHEN allowances.semester = '1st Sem' THEN 1
                WHEN allowances.semester = '2nd Sem' THEN 2
            END ASC,
            CASE
                WHEN allowances.month = '1st Month' THEN 1
                WHEN allowances.month = '2nd Month' THEN 2
                WHEN allowances.month = '3rd Month' THEN 3
                WHEN allowances.month = '4th Month' THEN 4
                WHEN allowances.month = '5th Month' THEN 5
            END ASC,
            allowances.allowanceID";
    $result = mysqli_query($conn, $query);

    //check if there is any rows  
    if (mysqli_num_rows($result) > 0) {
      // to fetch all the rows
      $allowances = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
      $allowances = [];
    }

    mysqli_close($conn);


    ?>



    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">


          <div class="col-md-12 mb-lg-0 mb-4">
            <div class="card mt-4" style="width: 750px">
              <div class="card-header pb-2 p-3" style="background-image: url('../assets/img/bg.png');background-size: cover">
                <div class="row">
                  <div class="col-6 align-items-center">

                    <div class="col-6 text-end" style="position: absolute; margin-left: 340px">
                      <a class="btn bg-gradient-dark mb-0" href="../pages/allowance-add.php?memberID=<?php echo $member['memberID']; ?>"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Allowance</a>
                    </div>

                    <?php if (!empty($member) && ($member['memberID'] == $memberID)) : ?>
                      <h5 class="mb-0" style="color:white">
                        <?php echo $member['firstname'] . ' ' . $member['midinitial'] . ' ' . $member['lastname']; ?>
                      </h5>
                      <p class="mb-0 font-weight-normal text-m" style="color: white">
                        <?php echo $member['program']; ?>
                        <?php echo $member['yearlevel']; ?>
                      </p>
                    <?php endif ?>
                  </div>
                </div>
                <br>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?memberID=' . $memberID; ?>">
                  <input type="hidden" name="memberID" value="<?php echo $memberID; ?>">
                  <label for="status" class="  font-weight-bolder " style="margin-left:15px; color: white">Year
                    level:</label>
                  <select name="year">

                    <option value="" class=" text-m ">All Year Level</option>
                    <option value="1st Year" <?php if ($year == "1st Year")
                                                echo "selected"; ?> class=" text-secondary text-m ">1st Year</option>
                    <option value="2nd Year" <?php if ($year == "2nd Year")
                                                echo "selected"; ?> class=" text-secondary text-m ">2nd Year</option>
                    <option value="3rd Year" <?php if ($year == "3rd Year")
                                                echo "selected"; ?> class=" text-secondary text-m ">3rd Year</option>
                    <option value="4th Year" <?php if ($year == "4th Year")
                                                echo "selected"; ?> class=" text-secondary text-m ">4th Year</option>
                  </select>
                  <label for="status" class=" font-weight-bolder " style="margin-left: 20px; color: white">Semester:</label>
                  <select name="sem">
                    <option value="">All Semester</option>
                    <option value="1st Sem" <?php if ($sem == "1st Sem")
                                              echo "selected"; ?> class=" text-secondary text-m ">1st Sem</option>
                    <option value="2nd Sem" <?php if ($sem == "2nd Sem")
                                              echo "selected"; ?> class=" text-secondary text-m">2nd Sem</option>
                  </select>
                  <button class="btn bg-gradient-dark mb-0" style="padding:4px 8px; margin-left: 15px;" type="submit">Go</button>
                </form>
              </div>
              <style>
                .header-year,
                .header-sem {
                  width: 100px;
                }

                select {
                  padding: 2px 4px;
                  border: 0px;
                  border-radius: 4px;
                  background-color: #f9d6e2;
                  color: black;
                  text-align: center;
                }

                #stat select {
                  -webkit-appearance: none;
                  -moz-appearance: none;
                  appearance: none;
                  background-repeat: no-repeat;
                  padding: 2px 4px;
                  border: 0px;
                  border-radius: 6px;
                  background-color: #fd75a4;
                  color: black;
                  font-weight: bold;
                  box-shadow: 0 2px 4px rgba(0, 0, 0.0, 0.1);
                  transition: transform 0.1s ease;
                  text-align: center;

                }

                select[name=stat]:hover {
                  transform: scale(1.02);
                }
              </style>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-xs font-weight-bolder  header-year">Year Level </th>
                    <th class="text-center text-uppercase  text-xs font-weight-bolder  header-sem" style="padding-left:85px">Semester</th>
                    <th style="padding-left:100px" class="text-uppercase text-secondary text-xs font-weight-bolder "> Months</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder ">Date Recieve</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder "></th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder "></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($allowances as $allowance) : ?>

                    <?php if ($allowance['memberID'] == $memberID) : ?>

                      <tr>
                        <td>
                          <h5 class="d-flex align-items-center font-weight-bold text-sm" style="padding-left: 20px">
                            <?php echo $allowance['yearlevel']; ?>
                          </h5>
                        </td>
                        <td>
                          <h5 class="d-flex align-items-center font-weight-bold text-sm" style="padding-left: 80px">
                            <?php echo $allowance['semester']; ?>
                          </h5>
                        </td>
                        <td style="padding-left:90px">
                          <h6 class="mb-0 text-sm">
                            <?php echo $allowance['month']; ?>
                          </h6>
                        </td>
                        <td class="align-middle text-center">

                          <?php echo "<b>" . $allowance['date_received'] . "</b>"; ?>
                        </td>
                        <form id="myForm" method="POST" action="allowance-edit.php">
                          <input type="hidden" name="memberID" value="<?php echo $allowance['memberID']; ?>">
                          <input type="hidden" name="allowanceID" value="<?php echo $allowance['allowanceID']; ?>">
                        </form>
                        <td class="align-middle">
                          <a href="allowance-edit.php?memberID=<?php echo $allowance['memberID']; ?>&allowanceID=<?php echo $allowance['allowanceID']; ?>" name="edit" class="font-weight-bold text-xs" style="color: rgb(0, 116, 44);">
                            Edit
                          </a>
                        </td>
                        <td class="align-middle">
                          <a href="allowance-delete.php?memberID=<?php echo $allowance['memberID']; ?>&allowanceID=<?php echo $allowance['allowanceID']; ?>">
                          <button name="delete" class="btn btn-link font-weight-bold text-s p-0 border-0 bg-transparent" style="text-transform: capitalize; margin-top: 20px;">
                            Delete &nbsp;
                          </button> </a>
                        </td>
                      </tr>
                    <?php else : ?>
                    <?php continue;
                    endif; ?>
                    </form>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <!--   Core JS Files   -->
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>