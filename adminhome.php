<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Admin Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/images/favicon.png" />
  <link href="assets/admin/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet" />
  <link href="assets/admin/vendor/chartist/css/chartist.min.css" rel="stylesheet" />
  <link href="assets/admin/css/style.css" rel="stylesheet" />
</head>

<body>
  <!--Preloader start-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!--Preloader end-->

  <!--Main wrapper start-->
  <div id="main-wrapper">
    <!--Nav header start-->
    <div class="nav-header">
      <a href="adminhome.php" class="brand-logo">
        JWPMading
      </a>

      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
    <!--Nav header end-->

    <!--Header start-->
    <div class="header">
      <div class="header-content">
        <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left"></div>

            <ul class="navbar-nav header-right">
              <li class="nav-item dropdown header-profile">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                  <i class="mdi mdi-account"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="logout.php class=" dropdown-item">
                    <i class="icon-key"></i>
                    <span class="ml-2">Logout </span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--Header end ti-comment-alt-->

    <!--Sidebar start-->
    <div class="quixnav">
      <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
          <li class="nav-label first">Main Menu</li>
          <li>
            <a href="adminhome.php"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
          </li>

          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Data Artikel</span></a>
            <ul aria-expanded="false">
              <li><a href="dataartikel.php">Artikel</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!--Sidebar End-->

    <!--Content Body Start-->
    <div class="content-body">
      <div class="container-fluid">
        <div class="row page-titles mx-0">
          <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
              <h4>Hi, welcome back!</h4>
            </div>
          </div>
          <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex"></div>
        </div>

        <?php
        include "koneksi.php";
        $result = mysqli_query($conn, "SELECT COUNT(*) as article_count FROM artikel");
        $row = mysqli_fetch_assoc($result);
        $articleCount = $row['article_count'];
        ?>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                  <i class="ti-layout-grid2 text-pink border-pink"></i>
                </div>
                <div class="stat-content d-inline-block">
                  <div class="stat-text">Artikel</div>
                  <div class="stat-digit"><?php echo $articleCount; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Content Body End-->
      </div>
      <!--Main wrapper end-->

      <!--Scripts-->
      <!-- Required vendors -->
      <script src="assets/admin/vendor/global/global.min.js"></script>
      <script src="assets/admin/js/quixnav-init.js"></script>
      <script src="assets/admin/js/custom.min.js"></script>

      <script src="assets/admin/vendor/chartist/js/chartist.min.js"></script>

      <script src="assets/admin/vendor/moment/moment.min.js"></script>
      <script src="assets/admin/vendor/pg-calendar/js/pignose.calendar.min.js"></script>

      <script src="assets/admin/js/dashboard/dashboard-2.js"></script>
      <!-- Circle progress -->
</body>

</html>