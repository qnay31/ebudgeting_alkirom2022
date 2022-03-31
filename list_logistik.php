<?php
error_reporting(0);
include "function.php";
if (isset($_POST['logistikGedung'])) {
    $kategori = $_POST["logistikGedung"];
?>

<?php if ($kategori == "Logistik Gedung Bogor") { ?>
<div class="form-group mb-3">
    <div class="form-text mb-2">
        Cabang
    </div>
    <input type="text" name="cabang" value="Bogor" class="form-control form-control-user" readonly>
</div>

<?php } else { ?>
<div class="form-group mb-3">
    <div class="form-text mb-2">
        Cabang
    </div>
    <input type="text" name="cabang" value="Depok" class="form-control form-control-user" readonly>
</div>

<?php } ?>


<?php } ?>