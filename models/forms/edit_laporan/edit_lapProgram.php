<div class="card-body">
    <h5 class="card-title">FORM EDIT LAPORAN</h5>
</div>

<div id="form">
    <form action="" method="post" onsubmit="return validasi_input2(this)">
        <div class="mb-3">
            <div class="form-text mb-2">
                Data Laporan
            </div>
            <input type="hidden" name="id" value="<?= $id ?>">
        </div>
        <div class="input-group">
            <?php if ($_GET["id_dataManagement"] == "program") { ?>
            <span class="input-group-text" id="basic-addon1"><b>Program</b></span>
            <?php } else { ?>
            <span class="input-group-text" id="basic-addon1"><b>Kategori</b></span>
            <?php } ?>
            
            <input type="text" class="form-control" name="program" value="<?= $data["program"] ?>" readonly>
        </div>

        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><b>Cabang</b></span>
            <input type="text" class="form-control" value="<?= $data["cabang"] ?>" readonly>
        </div>

        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><b>Tanggal Laporan</b></span>
            <input type="text" class="form-control" value="<?= date('d-m-Y', strtotime($data["tgl_pemakaian"]));?>"
                readonly>
        </div>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><b>Pemakaian</b></span>
            <input type="text" class="form-control" value="<?= ucwords($data["deskripsi_pemakaian"]) ?>" readonly>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Biaya Terpakai</b></span>
            <input type="text" class="form-control" value="<?= number_format($data["dana_terpakai"],0,"." , ".") ?>"
                readonly>
        </div>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Pemakaian <b>(EDIT)</b>
            </div>
            <input type="date" class="form-control" name="tanggal_laporan" value="<?= $data["tgl_pemakaian"] ?>">
        </div>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Deskripsi Pemakaian <b>(EDIT)</b>
            </div>
            <input type="text" class="form-control" name="deskripsi_laporan" placeholder="Contoh: Pemakaian"
                id="alpabet" value="<?= $data["deskripsi_pemakaian"] ?>" style="text-transform: capitalize;"
                autocomplete="off">
        </div>

        <div id="disabledSelect" class="form-text mb-2">
            Terpakai <b>(EDIT)</b>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="dana_laporan" id="rupiah" maxlength="11" placeholder="Nominal"
                onkeypress="return hanyaAngka(event)" autocomplete="off"
                value="<?= number_format($data["dana_terpakai"],0,"." , ".") ?>">
        </div>
        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
        </div>
    </form>
</div>