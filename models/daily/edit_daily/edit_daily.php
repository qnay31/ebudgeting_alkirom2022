<div class="card-body">
    <h5 class="card-title">FORM EDIT DAILY REPORT</h5>
</div>
<div id="form">
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validasi_input3(this)">
        <div class="form-text mb-2">
            Data Daily Report
        </div>
        <div class="input-group">
            <input type="hidden" name="id" value="<?= $unik ?>">
            <span class="input-group-text" id="basic-addon1">Nama Daily</span>
            <input type="text" class="form-control" name="posisi" value="<?= $_SESSION["posisi"] ?>" readonly>
        </div>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Aktivitas</span>
            <input type="text" class="form-control" value="<?= ucwords($data["aktivitas"]) ?>" readonly>
        </div>

        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Tanggal Aktivitas</span>
            <input type="text" class="form-control" value="<?= date('d-m-Y', strtotime($data["tgl_aktivitas"]));?>"
                readonly>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Deskripsi Aktivitas</span>
            <input type="text" class="form-control" value="<?= ucwords($data["deskripsi"]) ?>" readonly>
        </div>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Aktivitas
            </div>
            <input type="date" class="form-control" name="tanggal" value="<?= $data["tgl_aktivitas"] ?>">
        </div>

        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Aktivitas
            </div>
            <?php if ($_SESSION["id_pengurus"] == "kepala_humas" || $_SESSION["id_pengurus"] == "humas") { ?>
            <select class="form-select" aria-label="Default select example" name="aktivitas">
                <option selected value="<?= ucwords($data["aktivitas"]) ?>"><?= ucwords($data["aktivitas"]) ?></option>
                <option value="Distribusi Kotak Amal">Distribusi Kotak Amal</option>
                <option value="Pengambilan Kotak Amal">Pengambilan Kotak Amal
                </option>
                <option value="Distribusi Celengan">Distribusi Celengan</option>
                <option value="Pengambilan Celengan">Pengambilan Celengan</option>
                <?php if ($_SESSION["id_pengurus"] == "kepala_humas") { ?>
                <option value="Laporan Keuangan">Laporan Keuangan</option>
                <?php } ?>
            </select>
            <?php } else { ?>
            <input type="text" class="form-control" name="aktivitas" placeholder="nama aktivitas"
                value="<?= $data["aktivitas"] ?>" id="alpabet" style="text-transform: capitalize;" autocomplete="off">
            <?php } ?>

        </div>

        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Deskripsi Aktivitas
            </div>
            <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi aktivitas"
                value="<?= $data["deskripsi"] ?>" id="alpabet2" style="text-transform: capitalize;" autocomplete="off">
        </div>

        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
        </div>
    </form>
</div>