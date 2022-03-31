<?php

if ($_GET["id_lapGlobal"] == "") {
    if ($id_global == "program") {
        $judulGlobal = "Program Yayasan";
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
    
    } elseif ($id_global == "logistik") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "Logistik Yayasan";
    
    } elseif ($id_global == "aset_yayasan") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "Aset Yayasan";
    
    } elseif ($id_global == "uang_makan") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "Uang Makan";
    
    } elseif ($id_global == "gaji_karyawan") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "gaji karyawan";
    
    } elseif ($id_global == "anggaran_lain") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "biaya lainnya";
    
    } elseif ($id_global == "maintenance") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "maintenance yayasan";
    
    } elseif ($id_global == "operasional_yayasan") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "operasional yayasan";
    
    } else {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "pemasukan media sosial";
    
    }
} else {
    if ($id_global == "program") {
        $judulGlobal = "Program Yayasan";
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
    
    } elseif ($id_global == "logistik") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "Logistik Yayasan";
    
    } elseif ($id_global == "humas") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "Humas Yayasan";
    
    } elseif ($id_global == "aset_yayasan") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "Aset Yayasan";
    
    } elseif ($id_global == "baksos") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "Bakti Sosial Yayasan";
    
    } elseif ($id_global == "gaji") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "gaji karyawan";
    
    } elseif ($id_global == "lainnya") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "biaya lainnya";
    
    } elseif ($id_global == "maintenance") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "maintenance yayasan";
    
    } elseif ($id_global == "operasional_yayasan") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "operasional yayasan";
    
    } elseif ($id_global == "pemasukan") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "pemasukan humas";
    
    } elseif ($id_global == "income_new") {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "pemasukan media sosial";
    
    } else {
        $q  = mysqli_query($conn, "SELECT * FROM data_$id_global ORDER BY `id` ASC");
        $judulGlobal = "cashback yayasan";
    
    }
}


?>
<div class="card-body">
    <h5 class="card-title text-center"><?= strtoupper($judulGlobal) ?></h5>

    <?php if ($id_global == "program") { ?>
    <?php include 'table-detail/program.php' ?>

    <?php } elseif ($id_global == "logistik") { ?>
    <?php include 'table-detail/logistik.php' ?>

    <?php } elseif ($id_global == "humas") { ?>
    <?php include 'table-detail/humas.php' ?>

    <?php } elseif ($id_global == "aset_yayasan") { ?>
    <?php include 'table-detail/aset.php' ?>

    <?php } elseif ($id_global == "uang_makan") { ?>
    <?php include 'table-detail/uang_makan.php' ?>

    <?php } elseif ($id_global == "baksos") { ?>
    <?php include 'table-detail/baksos.php' ?>

    <?php } elseif ($id_global == "gaji_karyawan" || $id_global == "gaji") { ?>
    <?php include 'table-detail/gaji_karyawan.php' ?>

    <?php } elseif ($id_global == "anggaran_lain" || $id_global == "lainnya") { ?>
    <?php include 'table-detail/biaya_lain.php' ?>

    <?php } elseif ($id_global == "maintenance") { ?>
    <?php include 'table-detail/maintenance.php' ?>

    <?php } elseif ($id_global == "operasional_yayasan") { ?>
    <?php include 'table-detail/operasional.php' ?>

    <?php } elseif ($id_global == "pemasukan") { ?>
    <?php include 'table-detail/pemasukanHumas.php' ?>

    <?php } elseif ($id_global == "income" || $id_global == "income_new") { ?>
    <?php include 'table-detail/incomeMedia.php' ?>

    <?php } else { ?>
    <?php include 'table-detail/cashback.php' ?>
    <?php } ?>

</div>