<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Halaman Login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/images/favicon.png">
    <link href="assets/admin/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Login</h4>
                                    <?php
                                    include "checklogin.php";
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $username = $_POST["username"];
                                        $password = $_POST["password"];

                                        // Validasi login menggunakan fungsi checkLogin
                                        $loginResult = checkLogin($conn, $username, $password);

                                        if ($loginResult === "success") {
                                            // Menyimpan informasi login ke dalam sesi
                                            $_SESSION['username'] = $username;

                                            header("Location: adminhome.php");
                                            exit();
                                        } else {
                                            echo '<div class="alert alert-danger" role="alert">' . $loginResult . '</div>';
                                        }
                                    }
                                    ?>
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <!-- Required vendors -->
    <script src="assets/admin/vendor/global/global.min.js"></script>
    <script src="assets/admin/js/quixnav-init.js"></script>
    <script src="assets/admin/js/custom.min.js"></script>

</body>

</html>