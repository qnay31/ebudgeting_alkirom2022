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
            <input type="hidden" name="id_management" value="<?= $id_management?>">

        </div>
        <div class="input-group">
            <input type="text" class="form-control" name="program" value="<?= $data["kategori"] ?>" readonly>
        </div>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><b>Cabang</b></span>
            <input type="text" class="form-control" value="<?= $data["cabang"] ?>" readonly>
        </div>
        <?php if ($id_management == "aset_yayasan") { ?>
        <?php if ($data["jenis"] == "Pembangunan") { ?>
        <div class="mb-1">
            <input type="hidden" name="id" value="<?= $unik?>">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="<?= $data["jenis"] ?>" readonly>
        </div>
        <?php } else { ?>
        <div class="mb-1">
            <input type="hidden" name="id" value="<?= $unik?>">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="<?= $data["jenis"] ?>" readonly>
        </div>

        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Qty Perencanaan <b>Edit</b>
            </div>
            <input type="text" class="form-control" name="qty" id="rupiah2" maxlength="11" placeholder="qty perencaan"
                onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('qty harus diisi')" oninput="this.setCustomValidity('')"
                value="<?= $data["qty_anggaran"] ?>">
        </div>
        <?php } ?>

        <?php } ?>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Pengajuan <b>Edit</b>
            </div>
            <input type="date" class="form-control" name="tanggal" value="<?= $data["tgl_dibuat"] ?>">
        </div>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Deskripsi <b>Edit</b>
            </div>
            <input type="text" class="form-control" name="deskripsi" placeholder="Contoh: <?= $judul ?>" id="alpabet"
                value="<?= ucwords($data["deskripsi"]) ?>" style="text-transform: capitalize;" autocomplete="off">
        </div>

        <div id="disabledSelect" class="form-text mb-2">
            Anggaran <b>Edit</b>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="anggaran" id="rupiah" maxlength="11" placeholder="Nominal"
                onkeypress="return hanyaAngka(event)" autocomplete="off"
                value="<?= number_format($data["dana_anggaran"],0,"." , ".") ?>">
        </div>
        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
        </div>
    </form>
</div>