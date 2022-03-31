<div class="card-body">
    <h5 class="card-title">FORM EDIT PENGAJUAN</h5>
</div>

<div id="form">
    <form action="" method="post" onsubmit="return validasi_input(this)">
        <div class="mb-1">
            <div class="form-text mb-2">
                Logistik <b>Edit</b>
            </div>
            <input type="hidden" name="id" value="<?= $unik?>">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="program" value="<?= $data["logistik"] ?>" readonly>
        </div>

        <div class="mb-1">
            <div class="form-text mb-2">
                Cabang <b>Edit</b>
            </div>
            <input type="hidden" name="id" value="<?= $unik?>">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="<?= $data["cabang"] ?>" readonly>
        </div>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Pengajuan <b>Edit</b>
            </div>
            <input type="date" class="form-control" name="tanggal" value="<?= $data["tgl_pengajuan"] ?>">
        </div>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Deskripsi Logistik <b>Edit</b>
            </div>
            <input type="text" class="form-control" name="deskripsi" placeholder="Contoh:logistik konsumtif"
                id="alpabet" value="<?= ucwords($data["deskripsi"]) ?>" style="text-transform: capitalize;"
                autocomplete="off">
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