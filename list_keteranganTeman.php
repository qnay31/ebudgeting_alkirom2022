<?php
error_reporting(0);
include "function.php";
if (isset($_POST['kTeman'])) {
    $kTeman = $_POST["kTeman"];
?>

<?php if ($kTeman == "Tambah Teman") { ?>
<div class="input-group mb-3 keteranganTeman">
    <span class="input-group-text" id="basic-addon1"><b>Jumlah Add Pertemanan</b></span>
    <input type="text" class="form-control admin_rp" name="temanAdd" maxlength="11" placeholder="Total Add Pertemanan"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah add pertemanan harus diisi')" oninput="this.setCustomValidity('')">
</div>
<?php } else { ?>

<?php } ?>


<?php } ?>