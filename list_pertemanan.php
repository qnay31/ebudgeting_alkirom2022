<?php
session_start();
error_reporting(0);
include "function.php";
if (isset($_POST['akun'])) {
    $akun = $_POST["akun"];
    $query      = mysqli_query($conn, "SELECT * FROM laporan_media WHERE nama_akun = '$akun' ORDER BY tgl_laporan DESC");
    $data       = mysqli_fetch_assoc($query);
    $teman      = $data["jumlahTeman"];
    $mengikuti  = $data["jumlahAdd"]
?>

<?php if ($_SESSION["id_pengurus"] == "instagram") { ?>
<?php if ($akun == "") { ?>

<?php } else { ?>
<?php if ($mengikuti == "") { ?>
<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Pengikut Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataPengikut" maxlength="11" placeholder="Total pengikut"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah pengikut harus diisi')" oninput="this.setCustomValidity('')">
</div>

<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Mengikuti Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataMengikuti" maxlength="11" placeholder="Total mengikuti"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah mengikut harus diisi')" oninput="this.setCustomValidity('')">
</div>

<script>
$(".keteranganTeman").hide();
$(".keteranganTeman select").prop('disabled', true);
</script>

<?php } else { ?>
<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Pengikut Sebelumnya</b></span>
    <input type="text" class="form-control admin_rp" name="dataPengikut" value="<?= $teman; ?>" readonly>
</div>

<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Pengikut Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataPengikutBaru" maxlength="11" placeholder="Total Pengikut"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah pengikut harus diisi')" oninput="this.setCustomValidity('')">
</div>

<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Mengikuti Sebelumnya</b></span>
    <input type="text" class="form-control admin_rp" name="dataMengikuti" value="<?= $mengikuti; ?>" readonly>
</div>

<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Mengikuti Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataMengikutiBaru" maxlength="11"
        placeholder="Total Mengikuti" onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah mengikuti harus diisi')" oninput="this.setCustomValidity('')">
</div>

<script>
$(".keteranganTeman").show();
$(".keteranganTeman select").prop('disabled', false);
</script>
<?php } ?>
<?php } ?>

<?php } else { ?>
<?php if ($akun == "") { ?>

<?php } else { ?>
<?php if ($teman == "") { ?>
<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Teman Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataTeman" maxlength="11" placeholder="Total Teman"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah Teman harus diisi')" oninput="this.setCustomValidity('')">
</div>

<script>
$(".keteranganTeman").hide();
$(".keteranganTeman select").prop('disabled', true);
</script>

<?php } else { ?>
<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Teman Sebelumnya</b></span>
    <input type="text" class="form-control admin_rp" name="dataTeman" value="<?= $teman; ?>" readonly>
</div>

<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Teman Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataTemanBaru" maxlength="11" placeholder="Total Teman"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah Teman harus diisi')" oninput="this.setCustomValidity('')">
</div>
<script>
$(".keteranganTeman").show();
$(".keteranganTeman select").prop('disabled', false);
</script>
<?php } ?>
<?php } ?>
<?php } ?>


<?php } ?>