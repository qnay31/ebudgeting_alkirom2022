<?php
error_reporting(0);
include "function.php";
if (isset($_POST['menuProgram'])) {
    $program = $_POST["menuProgram"];
?>

<?php if ($program == "Program Asrama Yatim") { ?>
<div class="form-group mb-3">
    <div class="form-text mb-2">
        Sub Anggaran
    </div>
    <select class="form-select" name="yatim" aria-label="Default select example" required
        oninvalid="this.setCustomValidity('Pilih salah satu')" oninput="this.setCustomValidity('')">
        <option selected value="">Pilih Salah Satu</option>
        <option value="Uang Saku">Uang Saku</option>
        <option value="Uang Makan">Uang Makan</option>
        <option value="Laundry">Laundry</option>
        <option value="Santunan">Santunan</option>
        <option value="Tabungan Yatim">Tabungan Yatim</option>
    </select>
</div>

<?php } elseif ($program == "Program Pendidikan Yatim") { ?>
<!-- Button trigger modal -->
<div class="button mb-2">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSekolah">
        Tambah Sekolah
    </button> <span style="font-size: 13px;">(<b>Jika Belum Tersedia</b>)</span>
</div>
<div class="form-group mb-3" id="tampil">
    <select class="form-select" name="yatim" aria-label="Default select example" required
        oninvalid="this.setCustomValidity('Pilih salah satu sekolah')" oninput="this.setCustomValidity('')">
        <option selected value="">Pilih Salah Satu Sekolah</option>
        <?php
        $query  = mysqli_query($conn, "SELECT * FROM asal_sekolah ORDER BY `nama_sekolah` ASC");

        ?>
        <?php
            while ($data = mysqli_fetch_array($query)) { ?>
        <option value="<?= $data['nama_sekolah'];?>">
            <?= ucwords($data['nama_sekolah']) ?>
        </option>

        <?php } ?>
    </select>
</div>

<?php } elseif ($program == "Program Santunan Bulanan") { ?>
<input type="hidden" name="yatim" value="Santunan Bulanan">

<?php } else { ?>
<div class="form-group mb-3">
    <div class="form-text mb-2">
        Yatim
    </div>
    <select class="form-select" name="yatim" aria-label="Default select example" required
        oninvalid="this.setCustomValidity('Pilih salah satu yatim')" oninput="this.setCustomValidity('')">
        <option selected value="">Pilih Salah Satu Yatim</option>
        <option value="Yatim Binaan">Binaan</option>
        <option value="Yatim Luar Binaan">Luar Binaan</option>
    </select>
</div>

<?php } ?>


<?php } ?>