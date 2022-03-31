<?php
error_reporting(0);
include "function.php";
if (isset($_POST['management'])) {
    $divisi = $_POST["management"];
?>

<?php if ($divisi == "Pembelian Barang") { ?>
<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><b>Qty</b></span>
    <input type="text" class="form-control" name="qty" id="rupiah2" maxlength="11" placeholder="qty perencaan"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('qty harus diisi')" oninput="this.setCustomValidity('')">
    <span class="input-group-text" id="basic-addon1"><b>Pcs</b></span>
</div>

<script>
var rupiah2 = document.getElementById('rupiah2');
rupiah2.addEventListener('keyup', function() {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah2.value = formatRupiah2(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah2(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}
</script>
<?php } else { ?>
<input type="hidden" class="form-control" name="qty">
<?php } ?>


<?php } ?>