<div class="card-body">
    <h5 class="card-title">FORM PENGAJUAN</h5>
</div>

<div id="form">
    <form action="" method="post" onsubmit="return validasi_input(this)" class="user">
        <div class="input-group mb-3">
            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
            <span class="input-group-text" id="basic-addon1">Logistik</span>
            <select class="form-select" name="program" aria-label="Default select example" id="logistikGedung">
                <option selected value="">Pilih Salah Satu Logistik Gedung</option>
                <option value="Logistik Gedung Bogor">Logistik Gedung Bogor</option>
                <option value="Logistik Gedung Depok">Logistik Gedung Depok</option>
            </select>
        </div>

        <div class="form-group mb-3" id="cabang">
            <div class="form-text mb-2">
                Cabang
            </div>
            <input type="text" class="form-control" readonly>
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Tanggal Pengajuan
            </div>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Deskripsi Perencanaan
            </div>
            <input type="text" class="form-control" name="deskripsi" placeholder="Contoh: Logistik Konsumtif"
                id="alpabet" style="text-transform: capitalize;" autocomplete="off">
        </div>

        <div id="disabledSelect" class="form-text mb-2">
            Masukan Anggaran Kamu
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="anggaran" id="rupiah" maxlength="11" placeholder="Nominal"
                onkeypress="return hanyaAngka(event)" autocomplete="off">
        </div>
        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ajukan">
        </div>
    </form>
</div>