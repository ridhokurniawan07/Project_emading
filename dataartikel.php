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
  <title>Data Artikel</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/images/favicon.png" />
  <!-- Datatable -->
  <link href="assets/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
  <!-- Custom Stylesheet -->
  <link href="assets/admin/css/style.css" rel="stylesheet" />
  <link href="assets/admin/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
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
                  <a href="logout.php" class="dropdown-item">
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
              <span class="ml-1">Data Artikel</span>
            </div>
          </div>
          <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Table</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Artikel</a>
              </li>
            </ol>
          </div>
        </div>
        <!-- row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Artikel</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="display" style="min-width: 845px">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Tambah Artikel</button>
                    <!-- Modal -->
                    <div class="modal fade" id="basicModal">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Tambah Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                          </div>
                          <form action="prosestambahartikel.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                              <label>Judul:</label>
                              <div class="form-group">
                                <input type="text" name="judul" placeholder="Judul" class="form-control">
                              </div>
                              <label>Penerbit:</label>
                              <div class="form-group">
                                <input type="text" name="penerbit" placeholder="Penerbit" class="form-control">
                              </div>
                              <label>Isi:</label>
                              <div class="form-group">
                                <textarea name="isi" placeholder="Isi" class="form-control"></textarea>
                              </div>
                              <label>Tanggal:</label>
                              <div class="form-group">
                                <input type="date" name="tanggal" placeholder="tanggal" class="form-control">
                              </div>
                              <label>Unggah Gambar:</label>
                              <div class="form-group">
                                <input type="file" name="gambar" class="form-control-file">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="status" value="draft" class="btn btn-secondary">Draft</button>
                              <button type="submit" name="status" value="publish" class="btn btn-primary">Publish</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <br><br>
                    <thead>
                      <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Penerbit</th>
                        <th>Isi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "koneksi.php";
                      $result = mysqli_query($conn, "SELECT * FROM artikel");
                      while ($data = mysqli_fetch_array($result)) {
                      ?>
                        <tr>
                          <td><img src='assets/admin/images/artikel/<?php echo $data["gambar"]; ?>' width="100" height="100"></td>
                          <td><?php echo $data['judul']; ?></td>
                          <td><?php echo $data['penerbit']; ?></td>
                          <td><?php echo ($data['isi']); ?></td>
                          <td><?php echo date_format(date_create($data["tanggal"]), 'd/m/Y'); ?></td>
                          <td><?php echo $data['status']; ?></td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-success mr-2" data-toggle="modal" data-target="#editModal<?php echo $data['id_artikel']; ?>"><i class="fa fa-edit"></i>Edit</button>
                              <button class="btn btn-danger" onclick="confirmDelete(<?php echo $data['id_artikel']; ?>)"><i class="fa fa-trash"></i>Hapus</button>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <?php
                  include "koneksi.php";

                  $result = mysqli_query($conn, "SELECT * FROM artikel");
                  while ($data = mysqli_fetch_array($result)) {
                  ?>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal<?php echo $data['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="proseseditartikel.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                              <!-- Isi modal edit dengan nilai-nilai dari artikel -->
                              <label>Judul:</label>
                              <div class="form-group">
                                <input type="text" name="judul" value="<?php echo $data['judul']; ?>" class="form-control">
                              </div>
                              <label>Penerbit:</label>
                              <div class="form-group">
                                <input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>" class="form-control">
                              </div>
                              <label>Isi:</label>
                              <div class="form-group">
                                <textarea name="isi" class="form-control"><?php echo $data['isi']; ?></textarea>
                              </div>
                              <label>Tanggal:</label>
                              <div class="form-group">
                                <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" class="form-control">
                              </div>
                              <label>Unggah Gambar:</label>
                              <div class="form-group">
                                <?php
                                $gambar = $data['gambar']; // Ganti dengan kolom yang sesuai pada tabel film
                                echo "<img src='assets/admin/images/artikel/{$gambar}' alt='Gambar' class='mb-1' style='max-width: 100px;'>";
                                ?>
                                <input type="file" name="gambar" class="form-control-file">
                              </div>
                              <input type="hidden" name="id_artikel" value="<?php echo $data['id_artikel']; ?>">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="status" value="draft" class="btn btn-secondary">Draft</button>
                              <button type="submit" name="status" value="publish" class="btn btn-primary">Publish</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
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

  <!-- Datatable -->
  <script src="assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/admin/js/plugins-init/datatables.init.js"></script>

  <script src="assets/admin/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="assets/admin/js/plugins-init/sweetalert.init.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    <?php
    if (isset($_GET['success'])) {
      echo 'Swal.fire({
            icon: "success",
            title: "Artikel berhasil ditambahkan!",
            showConfirmButton: true,
            willClose: () => {
              window.location.href = "dataartikel.php"; 
            }
          });';
    }
    ?>
  </script>

  <script>
    <?php
    if (isset($_GET['update'])) {
      echo 'Swal.fire({
          icon: "success",
          title: "Artikel berhasil diperbarui!",
          showConfirmButton: true,
          willClose: () => {
            window.location.href = "dataartikel.php"; 
          }
        });';
    }
    ?>
  </script>

  <script>
    function confirmDelete(articleId) {
      Swal.fire({
        title: 'Konfirmasi Hapus',
        text: 'Anda yakin ingin menghapus artikel ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          // Jika pengguna mengklik "Ya, Hapus", 
          window.location.href = 'prosesdeleteartikel.php?id_artikel=' + articleId;
        }
      });
    }
  </script>

</body>

</html>