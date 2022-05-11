<?php
include "function.php";
error_reporting(0);
if (isset($_POST['namaChange'])) {
    $nama   = $_POST["namaChange"];
    $qID    = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE nama = '$nama'");
    $nID    = $qID->num_rows;
    $dID    = mysqli_fetch_assoc($qID);
    
    $qTeam  = mysqli_query($conn, "SELECT * FROM data_akun WHERE nomor_id = '$dID[id]'");
    $dTeam  = mysqli_fetch_array($qTeam);
?>

<?php if ($nID > 0) { ?>
<div class="form-group mb-3">
    <div class="form-text mb-2">
        ID dan tim pengurus
    </div>
    <input type="text" class="form-control" value="<?= $dID["id"]; ?>" readonly="">
    <?php if ($dTeam["team"] == "") { ?>
    <input type="text" class="form-control mt-1" value="Belum Ada Team" readonly="">

    <?php } else { ?>
    <input type="text" class="form-control mt-1" value="Team <?= $dTeam["team"]; ?>" readonly="">
    <?php } ?>
</div>
<?php } ?>


<?php } ?>