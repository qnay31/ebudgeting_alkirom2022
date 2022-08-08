<?php 
error_reporting(0);
require 'function.php';

    if (isset($_POST["forgetPassword"])) {
        $username   = $_POST["username"];
        $searchquery= mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username'");
        $datasearch = mysqli_fetch_assoc($searchquery);

        if ($datasearch['id_pengurus'] == "instagram") {
            $result     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username' AND id_pengurus = 'instagram'");
            
        } else {
            $result     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username' AND id_pengurus = 'facebook_depok'");
        }
        
        $nums       = mysqli_num_rows($result) === 1;
        $data       = mysqli_fetch_assoc($result);
    
        $error = true;
    }
    
    if(isset($_POST['newPassword']) ){
        $ip = get_client_ip();
        $date = date("Y-m-d H:i:s");
        $keyGenerate = $_POST["keyGenerate"];
        $password_baru      = $_POST['password_baru'];
        $konfirmasi_password  = $_POST['konfirmasi_password'];

        $password_lama  = password_verify($password_baru, $keyGenerate);

        $queryData  = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE password = '$keyGenerate'");
        $resultData = mysqli_fetch_assoc($queryData);

        if ($password_baru !== $konfirmasi_password) {

            echo "<script>
                alert('Konfirmasi Password Tidak Sama');
            </script>";

            $username   = $_POST["username"];
            $searchquery= mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username'");
            $datasearch = mysqli_fetch_assoc($searchquery);

            if ($datasearch['id_pengurus'] == "instagram") {
                $result     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username' AND id_pengurus = 'instagram'");
                
            } else {
                $result     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username' AND id_pengurus = 'facebook_depok'");
            }
            
            $nums       = mysqli_num_rows($result) === 1;
            $data       = mysqli_fetch_assoc($result);

        } elseif ($password_lama === true) {
            echo "<script>
                alert('Sandi tidak bisa sama dengan sandi saat ini!');
            </script>";

            $username   = $_POST["username"];
            $searchquery= mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username'");
            $datasearch = mysqli_fetch_assoc($searchquery);

            if ($datasearch['id_pengurus'] == "instagram") {
                $result     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username' AND id_pengurus = 'instagram'");
                
            } else {
                $result     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$username' AND id_pengurus = 'facebook_depok'");
            }
            
            $nums       = mysqli_num_rows($result) === 1;
            $data       = mysqli_fetch_assoc($result);
            
        } else {
            $newPassword = password_hash($password_baru, PASSWORD_DEFAULT);

            $update = mysqli_query($conn, "UPDATE akun_pengurus SET password = '$newPassword' WHERE id = '$resultData[id]'");
            
            if($update == true){
                //kondisi jika proses query UPDATE berhasil
                echo "<script>
                        alert('Password baru berhasil, silahkan login kembali!');
                        document.location.href = 'index.php';
                    </script>";

                mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$resultData[nama]', '$resultData[posisi]', '$ip',
                '$date', '$resultData[nama] Divisi $resultData[posisi] Telah lupa password dan Mengubah kata sandinya')");
            }
        }
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

    <title>eBudgeting - Lupa Sandi</title>

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

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 box-white">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Lupa Sandi</h1>
                                    </div>
                                    <form action="" method="post" class="user">
                                        <?php if ($nums == true) { ?>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                aria-describedby="basic-addon1" value="<?= $data["nama"]; ?>" readonly>
                                            <input type="hidden" name="username" value="<?= $data["username"]; ?>">
                                        </div>

                                        <div class="form-group pw">
                                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash toggle-password"
                                                maxlength='20'></span>
                                            <input type="hidden" name="keyGenerate" value="<?= $data["password"]; ?>">
                                            <input type="password" class="form-control form-control-user"
                                                name="password_baru" id="password-field" placeholder="Password Baru"
                                                aria-label="Password" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="form-group pw">
                                            <span toggle="#password-field2"
                                                class="fa fa-fw fa-eye-slash toggle-password" maxlength='20'></span>
                                            <input type="password" class="form-control form-control-user"
                                                name="konfirmasi_password" id="password-field2"
                                                placeholder="Konfirmasi Password" aria-label="Password"
                                                aria-describedby="basic-addon1">

                                        </div>

                                        <input type="submit" name="newPassword"
                                            class="btn btn-success btn-user btn-block" value="Ubah Password">

                                        <?php } else { ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username"
                                                placeholder="Username" aria-label="Email/Telepon" autocomplete="off"
                                                aria-describedby="basic-addon1" id="alpabet2" required
                                                oninvalid="this.setCustomValidity('Harap masukan username')"
                                                oninput="this.setCustomValidity('')">
                                        </div>

                                        <input type="submit" name="forgetPassword"
                                            class="btn btn-success btn-user btn-block" value="Cek Username">

                                        <?php if (isset ($error) ) : ?>
                                        <p style="color: red; font-style: italic;">Username tidak ditemukan!
                                        </p>
                                        <?php endif ?>

                                        <?php } ?>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index.php">Sudah punya akun? login disini!</a>
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