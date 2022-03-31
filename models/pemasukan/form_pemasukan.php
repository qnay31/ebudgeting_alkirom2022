<div class="card-body">
    <h5 class="card-title">FORM PEMASUKAN</h5>

</div>

<div id="form">
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validasi_income(this)">
        <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
        <div class="mb-3">
            <div class="form-text mb-2">
                Kategori Income
            </div>
            <input type="text" name="kategori" class="form-control" value="Media Sosial" readonly>
            <div class="form-text mb-2">
                Income
            </div>
            <input type="text" name="gedung" class="form-control" value="Tanpa Resi" readonly>
        </div>

        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Pemasukan
            </div>
            <input type="date" class="form-control" name="tanggal">
        </div>

        <div id=" disabledSelect" class="form-text mb-2">
            Jumlah Income
        </div>

        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="income" id="rupiah" maxlength="11" placeholder="100.000"
                onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Harap diisi terlebih dahulu')" oninput="this.setCustomValidity('')">
        </div>

        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Laporkan">
        </div>
    </form>
</div>