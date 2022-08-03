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
    </select>
</div>

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