<div class="card-body">
    <h5 class="card-title">FORM EDIT PENGAJUAN</h5>
</div>

<div id="form">
    <form action="" method="post" onsubmit="return validasi_input(this)" class="user">
        <div class="input-group mb-3">
            <input type="hidden" name="id" value="<?= $unik?>">
            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
            <input type="hidden" name="posisi" value="<?= $_SESSION["posisi"] ?>">
            <?php if ($_GET["id_dataManagement"] == "program") { ?>
            <span class="input-group-text" id="basic-addon1">Program</span>
            <select class="form-select" name="program" aria-label="Default select example">
                <option selected value="<?= $data["program"] ?>"><?= $data["program"] ?></option>
                <option value="Program Santunan Yatim">Santunan Yatim</option>
                <option value="Program Uang Saku Yatim">Uang Saku Yatim</option>
                <option value="Program Ceria Yatim">Ceria Yatim</option>
                <option value="Program Belanja Yatim">Belanja Yatim</option>
                <option value="Program Papan Yatim">Papan Yatim</option>
                <option value="Program Bakti Sosial">Bakti Sosial</option>
                <option value="Program Makan Sehat Yatim">Makan Sehat Yatim</option>
                <option value="Program Sembako Yatim">Sembako Yatim</option>
                <option value="Program Pesantren Yatim">Pesantren Yatim</option>
                <option value="Gaji Kepala Sekolah">Gaji Kepala Sekolah</option>
                <option value="Gaji Penjemput">Gaji Penjemput</option>
                <option value="Operasional Program">Operasional Program</option>
            </select>
            <?php } else { ?>
            <span class="input-group-text" id="basic-addon1">Kategori</span>
            <input type="text" class="form-control" name="program" value="<?= $judul ?>" readonly>
            <?php } ?>

        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Cabang
            </div>
            <?php if ($_GET["id_dataManagement"] == "program") { ?>
            <select class="form-select" aria-label="Default select example" name="cabang" required
                oninvalid="this.setCustomValidity('Pilih salah satu cabang')" oninput="this.setCustomValidity('')">
                <option selected value="<?= $data["cabang"] ?>"><?= $data["cabang"] ?></option>
                <option value="Bogor">Bogor</option>
                <option value="Depok">Depok</option>
            </select>

            <?php } else { ?>
            <input type="text" class="form-control" name="cabang" value="Depok" readonly>
            <?php } ?>

        </div>

        <?php if ($_GET["id_dataManagement"] == "program") { ?>
        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Yatim
            </div>
            <select class="form-select" aria-label="Default select example" name="yatim" required
                oninvalid="this.setCustomValidity('Pilih salah satu cabang')" oninput="this.setCustomValidity('')">
                <option selected value="<?= $data["yatim"] ?>"><?= $data["yatim"] ?></option>
                <option value="Yatim Binaan">Binaan</option>
                <option value="Yatim Luar Binaan">Luar Binaan</option>
            </select>

        </div>
        <?php } ?>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Tanggal Pengajuan
            </div>
            <input type="date" class="form-control" name="tanggal" value="<?= $data["tgl_pengajuan"] ?>">
        </div>
        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Perencanaan Pengajuan
            </div>
            <?php if ($_GET["id_dataManagement"] == "program") { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="perencanaan program" id="alpabet"
                style="text-transform: capitalize;" value="<?= $data["deskripsi"] ?>" autocomplete="off">
            <?php } else { ?>
            <input type="text" class="form-control" name="deskripsi" placeholder="perencanaan paudqu-elzamzam"
                id="alpabet" style="text-transform: capitalize;" value="<?= $data["deskripsi"] ?>" autocomplete="off">
            <?php } ?>

        </div>

        <div class="form-text mb-2">
            Rencana Anggaran
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="anggaran" id="rupiah" maxlength="11"
                placeholder="Rencana Anggaran" onkeypress="return hanyaAngka(event)" autocomplete="off"
                value="<?= number_format($data["dana_anggaran"] ,0,"." , ".")?>">
        </div>
        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
        </div>
    </form>
</div>