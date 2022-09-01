<?php
$_SESSION["idTable"]    = $_GET["id_table"];
$_SESSION["idDate"]     = $_GET["id_date"];
$_SESSION["id_periode"] = $_GET["id_periode"];

if ($_SESSION["id_periode"] == true) {
    $qInTeam = mysqli_query($conn, "SELECT * FROM income_media WHERE MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK'");
    $nInTeam = $qInTeam->num_rows;

    $dataTime = $hariIni = date('y-m-d');
    $dataTimeMonth = substr($dataTime, 3, -3);

    $yesterday = $dataTimeMonth - 01;
    $qInTeam2 = mysqli_query($conn, "SELECT * FROM income_media WHERE MONTH(tanggal_tf) = '$yesterday' AND status = 'OK'");
    $nInTeam2 = $qInTeam2->num_rows;
    
} else {
    $qInTeam = mysqli_query($conn, "SELECT * FROM income_media WHERE status = 'OK'");
    $nInTeam = $qInTeam->num_rows;
}

$dInTeam = mysqli_fetch_assoc($qInTeam);
$bInTeam = convertDateDBtoIndo($dInTeam["tanggal_tf"]);
if ($_SESSION["idTable"] == "fbI") {
    $team = "Facebook I";

} elseif ($_SESSION["idTable"] == "fbII") {
    $team = "Facebook II";

} elseif ($_SESSION["idTable"] == "fbIII") {
    $team = "Facebook III";

} elseif ($_SESSION["idTable"] == "fbIV") {
    $team = "Facebook IV";

} elseif ($_SESSION["idTable"] == "igA") {
    $team = "Instagram A";

} elseif ($_SESSION["idTable"] == "igB") {
    $team = "Instagram B";

} else {
    $team = "Instagram C";
}

$inTeamT = substr($bInTeam, 3, -5);
$hariIni = date('y-m-d');
$bulanIni = substr($hariIni, 3, -3);
if ($bulanIni <= $_GET["id_periode"]) {
    $tanggalIni = substr($hariIni, 6);
}


?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Income Team</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/pemasukan/periode.php'; ?>
                    </div>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/pemasukan/sub-incomeTim.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->