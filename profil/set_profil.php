<?php
if (isset($_POST["edit_profil"]) ) {
    $link = $_SESSION["username"];
    if(edit_profil($_POST) > 0 ) {
        echo "<script>
                alert('Profil Berhasil Diperbarui');
                document.location.href = '$link.php?id_profil=myProfil';
            </script>";
            
    } 
        else {
        echo mysqli_error($conn);
    }


}

if (isset($_POST["edit_akunMedia"]) ) {
    $link = $_SESSION["username"];
    if(edit_akun($_POST) > 0 ) {
        echo "<script>
                alert('Akun Berhasil Diperbarui');
                document.location.href = '$link.php?id_profil=myProfil';
            </script>";
            
    } 
        else {
        echo mysqli_error($conn);
    }


}

if(isset($_POST['ubah_password']) ){
    $ip = get_client_ip();
    $date = date("Y-m-d H:i:s");
    //membuat variabel untuk menyimpan data inputan yang di isikan di form
    $password_lama      = $_POST['password_lama'];
    $password_baru      = $_POST['password_baru'];
    $konfirmasi_password  = $_POST['konfirmasi_password'];
    
    //cek dahulu ke database dengan query SELECT
    //kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
    //encrypt -> md5($password_lama)

    $password_lama2  = password_verify($password_lama, $_SESSION["password"]);
    // die(var_dump($password_lama2));

    if($password_lama2 === TRUE){

        if($password_baru === $konfirmasi_password){

        $password_baru  = password_hash($password_baru, PASSWORD_DEFAULT);
          $id_user    = $_SESSION['id']; //ini dari session saat login
          // die(var_dump($password_lama));

        $update     = $conn->query("UPDATE akun_pengurus SET password ='$password_baru' WHERE id ='$id_user'");
        if($update){
            //kondisi jika proses query UPDATE berhasil
            echo "<script>
                    alert('Password Sudah Berhasil Diperbarui');
                </script>";

        $result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
                '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah kata sandinya')");
            
        }         
        }else{
      //kondisi jika password lama tidak cocok dengan data yang ada di database
    echo "<script>
            alert('Konfirmasi Password Tidak Sama');
            </script>";
    }
    }else{
      //kondisi jika password lama tidak cocok dengan data yang ada di database
    echo "<script>
            alert('Password Lama Yang Kamu Masukkan Salah');
            </script>";
    }
}

?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Profil</h1>
        <nav>
            <ol class="breadcrumb">
                <?php if ($_SESSION["posisi"] == "Logistik Gedung Management" || $_SESSION["posisi"] == "Logistik Gedung Taman" || $_SESSION["posisi"] == "Kepala Income") { ?>
                <?php if ($id_management == "") { ?>
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <?php } else { ?>
                <li class="breadcrumb-item"><a
                        href="<?= $_SESSION["username"] ?>.php?id_management=<?= $id_management ?>">Dashboard</a></li>
                <?php } ?>
                <?php } elseif ($_SESSION["posisi"] == "Kepala Logistik") { ?>
                <?php if ($id_kepLogistik == "") { ?>
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <?php } else { ?>
                <li class="breadcrumb-item"><a
                        href="<?= $_SESSION["username"] ?>.php?id_kepLogistik=<?= $id_kepLogistik ?>">Dashboard</a></li>
                <?php } ?>
                <?php } else { ?>
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <?php } ?>

                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="../assets/img/icons/<?= $profil ?>" alt="Profile" class="rounded-circle">
                        <h2><?= ucwords($nama) ?></h2>
                        <h3><?= $_SESSION["posisi"] ?> <?= $_SESSION["cabang"] ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <?php include '../models/profil/tab-nav.php'; ?>
                        </ul>

                        <div class="tab-content pt-2">
                            <?php include '../models/profil/overview.php' ?>

                            <?php include '../models/profil/edit-profil.php'; ?>

                            <?php include '../models/profil/ubah-password.php'; ?>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>