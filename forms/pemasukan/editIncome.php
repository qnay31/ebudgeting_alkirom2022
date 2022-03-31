<?php
$unik     = $_GET["id_unik"];

$q3  = mysqli_query($conn, "SELECT * FROM income_media WHERE id = '$unik'");
$data   = mysqli_fetch_assoc($q3);

if ($_SESSION["id_pengurus"] == "admin_web") {
    if (isset($_POST["input"]) ) {
        $link = $_SESSION["username"];
        if(edit_incomeMedia($_POST) > 0 ) {
                echo "<script>
                        alert('Data Income Berhasil Diedit');
                        document.location.href = '$link.php?id_adminKey=income_media';
                    </script>";
            } 
                else {
                echo mysqli_error($conn);
            }
        }
} else {
    if (isset($_POST["input"]) ) {
        $link = $_SESSION["username"];
        if(edit_incomeMedia($_POST) > 0 ) {
                echo "<script>
                        alert('Data Income Berhasil Diedit');
                        document.location.href = '$link.php?id_database=database_crossCheck';
                    </script>";
            } 
                else {
                echo mysqli_error($conn);
            }
        }
}

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Edit CrossCheck Income</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">CrossCheck</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/base_admin/edit_income.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->