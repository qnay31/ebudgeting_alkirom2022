<?php

$id     = $_GET["id_unik"];
$unik   = $_GET["id_p"];

if ($_GET["id_dataManagement"] == "program") {
    if (isset($_POST["input"]) ) {
    $link = $_SESSION["username"];
    if(edit_laporan_program($_POST) > 0 ) {
        echo "<script>
                alert('Data Laporan Berhasil diubah');
                document.location.href = '$link.php?id_forms=forms_laporan&id_dataManagement=program';
            </script>";            
        } 
            else {
            echo mysqli_error($conn);
        }
    }

    $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Belum Laporan' ORDER BY `tgl_pengajuan` DESC");
    $s = $q->num_rows;
    
    $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' ORDER BY `tgl_pengajuan` DESC");
    $s2 = $q2->num_rows;

    $q3  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' AND id = '$id' AND MONTH(tgl_pemakaian) = '$unik' ORDER BY `tgl_pengajuan` DESC");
    $data       = mysqli_fetch_assoc($q3);
    $id_unik    = $data["id"];
    
} elseif ($_GET["id_dataManagement"] == "logistik") {
    if (isset($_POST["input"]) ) {
        $link = $_SESSION["username"];
        if(edit_laporan_logistik($_POST) > 0 ) {
            echo "<script>
                    alert('Data Laporan Berhasil diubah');
                    document.location.href = '$link.php?id_forms=forms_laporan&id_dataManagement=logistik';
                </script>";            
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
        $q  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Belum Laporan' ORDER BY `tgl_pengajuan` DESC");
        $s = $q->num_rows;
        
        $q2  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' ORDER BY `tgl_pengajuan` DESC");
        $s2 = $q2->num_rows;
    
        $q3  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' AND id = '$id' AND MONTH(tgl_pemakaian) = '$unik' ORDER BY `tgl_pengajuan` DESC");
        $data       = mysqli_fetch_assoc($q3);
        $id_unik    = $data["id"];
        
} elseif ($_GET["id_dataManagement"] == "paudqu") {
    if (isset($_POST["input"]) ) {
        $link = $_SESSION["username"];
        if(edit_laporan_paudqu($_POST) > 0 ) {
            echo "<script>
                    alert('Data Laporan Berhasil diubah');
                    document.location.href = '$link.php?id_forms=forms_laporan&id_dataManagement=paudqu';
                </script>";            
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
        $q  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Belum Laporan' ORDER BY `tgl_pengajuan` DESC");
        $s = $q->num_rows;
        
        $q2  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' ORDER BY `tgl_pengajuan` DESC");
        $s2 = $q2->num_rows;
    
        $q3  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' AND id = '$id' AND MONTH(tgl_pemakaian) = '$unik' ORDER BY `tgl_pengajuan` DESC");
        $data       = mysqli_fetch_assoc($q3);
        $id_unik    = $data["id"];

} else {
    if (isset($_POST["input"]) ) {
        $link = $_SESSION["username"];
        if(edit_laporan_management($_POST) > 0 ) {
            echo "<script>
                    alert('Data Laporan Berhasil diubah');
                    document.location.href = '$link.php?id_forms=forms_laporan&id_dataManagement=$id_management';
                </script>";            
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
        $q  = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Belum Laporan' ORDER BY `tgl_dibuat` DESC");
            $s = $q->num_rows;
            
            $q2  = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' ORDER BY `tgl_dibuat` DESC");
            $s2 = $q2->num_rows;
        
            $q3  = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND laporan = 'Menunggu Verifikasi' AND id = '$id' AND MONTH(tgl_laporan) = '$unik' ORDER BY `tgl_dibuat` DESC");
            $data       = mysqli_fetch_assoc($q3);
            $id_unik    = $data["id"];
            
    }
    

// die(var_dump($s));
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Pengajuan & Laporan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php?id_forms=daftar_pengajuan">Daftar
                        Pengajuan</a></li>
                <?php if ($_GET["id_dataManagement"] == "program") { ?>
                <li class="breadcrumb-item active">Pengajuan Program</li>

                <?php } elseif ($_GET["id_dataManagement"] == "logistik") { ?>
                <li class="breadcrumb-item active">Pengajuan Logistik</li>

                <?php } else { ?>
                <li class="breadcrumb-item active">Pengajuan <?= $judul ?></li>
                <?php } ?>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="row">
                    <?php include '../models/forms/pengajuan_models/laporan-nav.php'; ?>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php if ($_GET["id_dataManagement"] == "program" || $_GET["id_dataManagement"] == "paudqu") { ?>
                        <?php include '../models/forms/edit_laporan/edit_lapProgram.php'; ?>

                        <?php } elseif ($_GET["id_dataManagement"] == "logistik") { ?>
                        <?php include '../models/forms/edit_laporan/edit_lapLogistik.php'; ?>

                        <?php } else { ?>
                        <?php include '../models/forms/edit_laporan/edit_lapManagement.php'; ?>
                        <?php } ?>

                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->