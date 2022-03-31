<div class="card-body">
    <h5 class="card-title">FORM EDIT INCOME</h5>
</div>

<div id="form">
    <form action="" method="post" class="user">

        <div class="mb-3">
            <div class="form-text mb-2">
                DATA INCOME SEBELUMNYA
            </div>
            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
            <input type="hidden" name="id_unik" value="<?= $unik ?>">
            <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1"><b>Akun</b></span>
                <input type="text" class="form-control" name="akun" value="<?= ucwords($data["nama_akun"]) ?>" readonly>
            </div>

            <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1"><b>Cabang</b></span>
                <input type="text" class="form-control" value="<?= $data["cabang"] ?>" readonly>
            </div>

            <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1"><b>Nama Donatur</b></span>
                <input type="text" class="form-control" value="<?= ucwords($data["nama_donatur"]) ?>" readonly>
            </div>

            <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1"><b>Tanggal Transfer</b></span>
                <input type="text" class="form-control"
                    value="<?= date('d-m-Y', strtotime($data["tanggal_tf"])); ?> <?= $data["jam_tf"] ?>" readonly>
            </div>

            <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1"><b>Via Bank</b></span>
                <input type="text" class="form-control" value="<?= ucwords($data["bank"]) ?>" readonly>
            </div>

            <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1"><b>Jumlah Transfer</b></span>
                <input type="text" class="form-control" value="Rp. <?= number_format($data["jumlah_tf"],0,"." , ".") ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Nama Donatur
            </div>
            <input type="text" class="form-control" name="namaDonatur" placeholder="nama donatur" id="akunName2"
                style="text-transform: capitalize;" autocomplete="off" required
                oninvalid="this.setCustomValidity('Nama donatur harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= ucwords($data["nama_donatur"]) ?>">
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Tanggal Transfer
            </div>
            <input type="hidden" name="oldTanggal" value="<?= $data["tanggal_tf"]; ?>">
            <input type="date" class="form-control" name="tanggal" required
                oninvalid="this.setCustomValidity('Tanggal Transfer harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= $data["tanggal_tf"]; ?>">
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Jam Transfer
            </div>
            <input type="time" class="form-control" name="jam" required
                oninvalid="this.setCustomValidity('Jam Transfer harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= $data["jam_tf"] ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Via Bank</span>
            <select class="form-select" name="bank" aria-label="Default select example" required
                oninvalid="this.setCustomValidity('Pilih salah satu bank')" oninput="this.setCustomValidity('')">
                <option selected value="<?= ucwords($data["bank"]) ?>">Bank <?= ucwords($data["bank"]) ?></option>
                <option value="BRI">Bank BRI</option>
                <option value="BNI">Bank BNI</option>
                <option value="Cimb">Bank Cimb</option>
                <option value="BCA">Bank BCA</option>
                <option value="Mandiri">Bank Mandiri</option>
                <option value="Dana">Dana</option>
                <option value="OVO">OVO</option>
                <option value="Kitabisa.com">Kitabisa.com</option>
            </select>
        </div>

        <div class="form-text mb-2">
            Jumlah Transfer
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="transfer" id="rupiah" maxlength="11"
                placeholder="jumlah transfer" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah transfer harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= number_format($data["jumlah_tf"],0,"." , ".") ?>">
        </div>
        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
        </div>
    </form>
</div>