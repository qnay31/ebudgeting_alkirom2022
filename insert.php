<?php
//Include file koneksi ke database
include "function.php";
$sekolah = mysqli_real_escape_string($conn, $_POST["schollName"]);

$newsekolah = strtolower($sekolah);
// validasi

$query = mysqli_query($conn, "SELECT * FROM asal_sekolah WHERE nama_sekolah = '$newsekolah' ");
$num = $query->num_rows;

if($num === 1 ) {
    echo "1";
    
} else {
    echo "0";

    $sql ="INSERT INTO asal_sekolah VALUES ('', '$sekolah')";
    $hasil = mysqli_query($conn,$sql);
    }

?>