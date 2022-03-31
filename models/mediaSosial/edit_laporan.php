<div class="card-body">
    <h5 class="card-title">FORM EDIT LAPORAN HARIAN</h5>
</div>

<div id="form">
    <form action="" method="post" class="user">

        <div class="mb-3">
            <div class="form-text mb-2">
                DATA LAPORAN SEBELUMNYA
            </div>
            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
            <input type="hidden" name="id_unik" value="<?= $unik ?>">
            <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1"><b>Akun</b></span>
                <input type="text" class="form-control" name="akun" value="<?= ucwords($data["nama_akun"]) ?>" readonly>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Tanggal Laporan
            </div>
            <input type="date" class="form-control" name="tanggal" required
                oninvalid="this.setCustomValidity('Tanggal Laporan harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= $data["tgl_laporan"] ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Total Serangan</b></span>
            <input type="text" class="form-control" name="totalSerangan" id="rupiah" maxlength="11"
                placeholder="Total Penyerangan" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah serangan harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= number_format($data["totalSerangan"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Donatur</b></span>
            <input type="text" class="form-control" name="donatur" id="rupiah2" maxlength="11"
                placeholder="Total Donatur" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah donatur harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= number_format($data["donatur"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Respon</b></span>
            <input type="text" class="form-control" name="respon" id="rupiah3" maxlength="11" placeholder="Total Respon"
                onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah respon harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= number_format($data["respon"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Menanyakan Alamat</b></span>
            <input type="text" class="form-control" name="alamat" id="rupiah4" maxlength="11"
                placeholder="Total Nanya Alamat" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah alamat harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= number_format($data["alamat"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Insya Allah</b></span>
            <input type="text" class="form-control" name="insya_allah" id="rupiah5" maxlength="11"
                placeholder="Total Insya Allah" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah insya allah harus diisi')"
                oninput="this.setCustomValidity('')" value="<?= number_format($data["insya_allah"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Minta Norek</b></span>
            <input type="text" class="form-control" name="norek" id="rupiah6" maxlength="11"
                placeholder="Total Minta Norek" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah minta norek harus diisi')"
                oninput="this.setCustomValidity('')" value="<?= number_format($data["minta_norek"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Belum Bisa Bantu</b></span>
            <input type="text" class="form-control" name="bbBantu" id="rupiah7" maxlength="11"
                placeholder="Total Belum Bisa Bantu" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah belum bisa bantu harus diisi')"
                oninput="this.setCustomValidity('')" value="<?= number_format($data["belumbisa_bantu"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Tidak Respon</b></span>
            <input type="text" class="form-control" name="tRespon" id="rupiah8" maxlength="11"
                placeholder="Total Tidak Respon" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah tidak respon harus diisi')"
                oninput="this.setCustomValidity('')" value="<?= number_format($data["tidak_respon"],0,"." , ".") ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Total Income (Rp)</b></span>
            <input type="text" class="form-control" name="income" id="rupiah9" maxlength="11" placeholder="Total Income"
                onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Total income harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= number_format($data["total_income"],0,"." , ".") ?>">
        </div>


        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
        </div>
    </form>
</div>