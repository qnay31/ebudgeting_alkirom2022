<div class="form-group mb-3">
    <select class="form-select" name="yatim" aria-label="Default select example" required
        oninvalid="this.setCustomValidity('Pilih salah satu sekolah')" oninput="this.setCustomValidity('')">
        <option selected value="">Pilih Salah Satu Sekolah</option>

        <?php
        include "function.php";
        $sql="SELECT * FROM asal_sekolah order by nama_sekolah desc";
        $hasil=mysqli_query($conn,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
        $no++;
        ?>
        <option value="<?= $data['nama_sekolah']; ?>"><?= ucwords($data['nama_sekolah']); ?></option>
        <?php } ?>
    </select>
</div>