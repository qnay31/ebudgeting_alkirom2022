<?php
error_reporting(0);
include "function.php";
if (isset($_POST['media'])) {
    $kategori = $_POST["media"];
?>

<?php if ($kategori == "facebook_bogor") { ?>

<input type="text" name="cabang" value="Bogor" class="form-control form-control-user" readonly>
<input type="hidden" name="posisi" value="Facebook Bogor" class="form-control form-control-user" readonly>

<?php } elseif ($kategori == "facebook_depok") { ?>
<input type="text" name="cabang" value="Depok" class="form-control form-control-user" readonly>
<input type="hidden" name="posisi" value="Facebook Depok" class="form-control form-control-user" readonly>

<?php } else { ?>
<input type="text" name="cabang" value="Depok" class="form-control form-control-user" readonly>
<input type="hidden" name="posisi" value="Instagram" class="form-control form-control-user" readonly>

<?php } ?>


<?php } ?>