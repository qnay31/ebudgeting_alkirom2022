<?php 
session_start();
error_reporting(0);
require 'function.php';

if (isset($_COOKIE["login"])) {
    $username = $_COOKIE["login"];
    
    $qLogin = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username'");
    if (mysqli_num_rows($qLogin) === 1) {
        $data = mysqli_fetch_assoc($qLogin);
        // die(var_dump($data));
        $_SESSION["halaman_utama"]      = true ;
        $_SESSION["id"]           = $data["id"];
		$_SESSION["id_pengurus"]  = $data["id_pengurus"];
        $_SESSION["nama"]         = $data["nama"];
        $_SESSION["cabang"]       = $data["cabang"];
        $_SESSION["username"]     = $data["username"];
        $_SESSION["profil"]       = $data["profil"];
        $_SESSION["password"]     = $data["password"];
        $_SESSION["posisi"]       = $data["posisi"];

        header("Location: admin/$_SESSION[username].php");
    } else {
        header("Location: https://edaily.alkiromamanah.com/");
    }
    exit;
}

if (isset($_SESSION["halaman_utama"])) {
    header("Location: admin/$_SESSION[username].php");
    exit;
}

$date   = date("Y-m-d H:i:s");
$ip     = get_client_ip();

  if (isset($_POST["login"]) ) {

    $username    = $_POST ["username"];
    $password = $_POST ["password"];

    $result = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username' " );
//cek username database
        // die(var_dump($username));
        if (mysqli_num_rows($result) === 1 ) {


          // cek password database

        $row = mysqli_fetch_assoc($result);
    // die(var_dump($row));

        
        if (password_verify($password, $row["password"]) ) {

          // set session

            if($row['username'] == "$username"){
        $_SESSION["halaman_utama"]      = true ;
        
		// buat session login dan username ADMIN
		$_SESSION["id"]           = $row["id"];
		$_SESSION["id_pengurus"]  = $row["id_pengurus"];
        $_SESSION["nama"]         = $row["nama"];
        $_SESSION["cabang"]       = $row["cabang"];
        $_SESSION["username"]     = $row["username"];
        $_SESSION["profil"]       = $row["profil"];
        $_SESSION["password"]     = $row["password"];
        $_SESSION["posisi"]       = $row["posisi"];

        setcookie('idUser', $_SESSION['id_pengurus'], time() + (10 * 365 * 24 * 60 * 60) );
        setcookie('login', $_SESSION['username'], time() + (10 * 365 * 24 * 60 * 60) );
        // die(var_dump($data));

        mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Telah Login Halaman $_SESSION[posisi]')");
		header("Location: admin/$_SESSION[username].php");
 
        }


          exit; 
        }


    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Ebudgeting Alkirom Amanah" name="keywords">
    <!-- share -->
    <meta property="og:url" content="https://edaily.alkiromamanah.com/" />
    <meta property="og:type" content="Ebudgeting" />
    <meta property="og:title" content="Ebudgeting Alkirom Amanah" />
    <meta property="og:description" content='Situs resmi ebudgeting Yayasan Alkirom Amanah'>
    <meta property="og:image"
        content='https://accurate.id/wp-content/uploads/2021/02/accurate.id-E-budgeting-adalah-tujuan-kelebihan-dan-kekurangannya.png' />
    <meta property="og:image:type" content="image/jpg">

    <title>eBudgeting - Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- icon -->
    <link href="assets/img/icons/logo_favicon.png" rel="icon">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css?version=<?= filemtime('assets/css/sb-admin-2.min.css'); ?>"
        rel="stylesheet">

</head>
<?php 
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
}
?>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 box-white">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="" method="post" onsubmit="return validasi_input(this)" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username"
                                                placeholder="Username" aria-label="Email/Telepon"
                                                aria-describedby="basic-addon1" id="alpabet2">
                                        </div>
                                        <div class="form-group pw">
                                            <span toggle="#password-field"
                                                class="fa fa-fw fa-eye-slash toggle-password"></span>
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="password-field" placeholder="Password"
                                                aria-label="Password" aria-describedby="basic-addon1">

                                        </div>
                                        <?php if (isset ($error) ) : ?>
                                        <p style="color: red; font-style: italic;">Username/Password salah!</p>
                                        <?php endif ?>
                                        <input type="submit" name="login" class="btn btn-success btn-user btn-block"
                                            value="MASUK">
                                        <div class="text-right">
                                            <a class="small" href="forget-password.php">Lupa Sandi</a>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Buat Akun Baru!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>&copy; Copyright <b>Ebudgeting Alkirom Amanah 2022.</b> All Rights Reserved</span>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>

        </div>


    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/validasi_masuk.js"></script>


</body>

</html>