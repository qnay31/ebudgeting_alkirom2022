<?php

$unik     = $_GET["id_unik"];

$q3  = mysqli_query($conn, "SELECT * FROM income_media WHERE id = '$unik'");
$data   = mysqli_fetch_assoc($q3);

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

?>

<section class="section dashboard">
    <div class="row">
        <!-- Left side columns pengajuan-->
        <div class="col-lg-12" id="form-pengajuan">
            <!-- Laporan  -->
            <div class="col-12">
                <div class="card">
                    <?php include 'edit_income.php'; ?>
                </div>
            </div><!-- End Laporan  -->
        </div><!-- End Left side columns -->
    </div>
</section>