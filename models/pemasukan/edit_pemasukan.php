<div class="card-body">
    <h5 class="card-title">FORM EDIT PENGAJUAN</h5>
</div>

<div id="form">
    <form action="" method="post" onsubmit="return validasi_input(this)">
        <div class="mb-1">
            <div class="form-text mb-2">
                Kategori <b>Edit</b>
            </div>
            <input type="hidden" name="id" value="<?= $unik?>">
            <input type="hidden" name="old_Tgl" value="<?= $data["tgl_pemasukan"]?>">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="kategori" value="<?= $data["kategori"] ?>" readonly>
        </div>

        <div class="form-text mb-2">
            Income
        </div>
        <input type="text" class="form-control" name="gedung" value="<?= $data["gedung"] ?>" readonly>

        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Pemasukan <b>Edit</b>
            </div>
            <input type="date" class="form-control" name="tanggal" value="<?= $data["tgl_pemasukan"] ?>" required
                oninvalid="this.setCustomValidity('Tanggal Tidak Boleh kosong')" oninput="this.setCustomValidity('')">
        </div>

        <div id="disabledSelect" class="form-text mb-2">
            Income <b>Edit</b>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="anggaran" id="rupiah" maxlength="11" placeholder="Nominal"
                onkeypress="return hanyaAngka(event)" autocomplete="off"
                value="<?= number_format($data["income"],0,"." , ".") ?>" required
                oninvalid="this.setCustomValidity('Income Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
        </div>
        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
        </div>
    </form>
</div>