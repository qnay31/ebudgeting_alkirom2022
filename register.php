<?php 

error_reporting(0);

require "function.php";

if (isset($_POST["daftar"]) ) {

    if(input_pengurus($_POST) > 0 ) {
        echo "<script>
                alert('Buat Akun Sukses, Silahkan Login Kembali');
                document.location.href = 'index.php';
            </script>";

    
    } else {

        echo mysqli_error($conn);

    }

}
$query   = mysqli_query($conn, "SELECT * FROM list_divisi ORDER BY `posisi` ASC ");


$query2   = mysqli_query($conn, "SELECT * FROM list_divisi ORDER BY `posisi` ASC ");
$data2    = mysqli_fetch_assoc($query2);
$posisi   = $data2["posisi"];




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-Daily - Register</title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
                            </div>
                            <form action="" method="post" onsubmit="return validasi_input2(this)" autocomplete="off"
                                class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama"
                                        placeholder="Nama Lengkap" aria-label="Nama Lengkap"
                                        aria-describedby="basic-addon1" id="alpabet"
                                        style="text-transform: capitalize;">
                                </div>

                                <div class="form-group">
                                    <select class="custom-select form-control-select" name="media" id="media">
                                        <option selected disabled>-Pilih Salah Satu Media-</option>
                                        <?php
                                            while ($data = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $data['id_pengurus'];?>">
                                            <?php echo $data['posisi'] ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group disabled" id="bagian">
                                    <input type="text" name="lokasi" class="form-control form-control-user disable"
                                        disabled>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username"
                                        placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"
                                        id="alpabet2" maxlength='32'>
                                </div>
                                <div class="form-group pw">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye-slash toggle-password"
                                        maxlength='20'></span>
                                    <input type="password" class="form-control form-control-user" name="password"
                                        id="password-field" placeholder="Password" aria-label="Password"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="form-group pw">
                                    <span toggle="#password-field2" class="fa fa-fw fa-eye-slash toggle-password"
                                        maxlength='20'></span>
                                    <input type="password" class="form-control form-control-user" name="password2"
                                        id="password-field2" placeholder="Konfirmasi Password" aria-label="Password"
                                        aria-describedby="basic-addon1">

                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="daftar"
                                    value="DAFTAR">
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.php">Sudah Punya Akun? Login!</a>
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

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/validasi_masuk.js"></script>

    <script>
    $("#media").change(function() {
        // variabel dari nilai combo box 
        var media = $("#media").val();
        // console.log(id_kendaraan);
        // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "list_data.php",
            data: "media=" + media,
            success: function(data) {
                $("#bagian").html(data);
                // $("#tanggal").html(data);
            }
        });
    });
    </script>

</body>

</html>