<div class="card-body">
    <h5 class="card-title">FORM PENGAJUAN</h5>
</div>

<div id="form">
    <form action="" method="post" onsubmit="return validasi_input(this)" class="user">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01"><b>Kategori</b></label>
            </div>
            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
            <input type="hidden" name="id_management" value="<?= $id_management ?>">

            <input type="text" class="form-control" name="program" value="<?= $judul ?>" readonly>
        </div>
        <?php if ($id_management == "aset_yayasan") { ?>
        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Jenis Aset
            </div>
            <select class="form-select" aria-label="Default select example" name="jenis" required
                oninvalid="this.setCustomValidity('Pilih salah satu aset')" oninput="this.setCustomValidity('')"
                id="management">
                <option selected value="">Pilih Salah Satu Aset</option>
                <option value="Pembelian Barang">Pembelian Barang</option>
                <option value="Pembangunan">Pembangunan</option>
            </select>
        </div>

        <div class="input-group disabled" id="bagian">
        </div>

        <?php } elseif ($id_management == "maintenance") { ?>
        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Jenis Maintenance
            </div>
            <select class="form-select" aria-label="Default select example" name="jenis" required
                oninvalid="this.setCustomValidity('Pilih salah satu maintenance')" oninput="this.setCustomValidity('')">
                <option selected value="">Pilih Salah Satu Maintenance</option>
                <option value="Gedung">Maintenance Gedung</option>
                <option value="Aset">Maintenance Aset</option>
            </select>
        </div>
        <?php } ?>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Cabang
            </div>
            <input type="text" class="form-control" name="cabang" value="Depok" readonly>
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
            <?php if ($id_management == "aset_yayasan") { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="pembelian Aset/bangungan" id="alpabet"
                style="text-transform: capitalize;" autocomplete="off">

            <?php } elseif ($id_management == "gaji_karyawan") { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="Gaji Bulanan Karyawan" id="alpabet"
                style="text-transform: capitalize;" autocomplete="off">

            <?php } elseif ($id_management == "uang_makan") { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="uang makan karyawan" id="alpabet"
                style="text-transform: capitalize;" autocomplete="off">

            <?php } elseif ($id_management == "maintenance") { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="perbaikan gedung dan lainnya"
                id="alpabet" style="text-transform: capitalize;" autocomplete="off">

            <?php } elseif ($id_management == "operasional_yayasan") { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="operasional mobil dan lainnya"
                id="alpabet" style="text-transform: capitalize;" autocomplete="off">

            <?php } elseif ($id_management == "jasa") { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="jasa supir dan lainnya" id="alpabet"
                style="text-transform: capitalize;" autocomplete="off">

            <?php } else { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="biaya lain lain" id="alpabet"
                style="text-transform: capitalize;" autocomplete="off">
            <?php } ?>

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