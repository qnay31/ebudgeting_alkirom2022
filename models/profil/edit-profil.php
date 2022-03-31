<div class="tab-pane fade profile-edit pt-3" id="profile-edit">

    <?php if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram") { ?>
    <?php
    $query   = mysqli_query($conn, "SELECT * FROM data_akun WHERE nomor_id = '$_SESSION[id]' ORDER BY `nama_akun` ASC ");

    ?>

    <!-- Profile Edit Form -->
    <form action="" method="post" onsubmit="return validasi_profil(this)">
        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Akun</label>
            <div class="col-md-8 col-lg-9">
                <input type="hidden" name="key" value="<?= $_SESSION["id"] ?>">
                <select class="form-select" name="akun" aria-label="Default select example" required
                    oninvalid="this.setCustomValidity('Pilih salah satu akun')" oninput="this.setCustomValidity('')"
                    id="akunM">
                    <option selected value="">- Pilih Salah Satu Akun Yang Ingin Diubah Namanya -</option>
                    <?php
                        while ($data = mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['nama_akun'];?>">
                        <?php echo ucwords($data['nama_akun']) ?>
                    </option>

                    <?php } ?>
                </select>

            </div>
        </div>

        <div class="row mb-3">
            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Diganti Menjadi</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" name="akunName" placeholder="nama akun baru" id="akunName"
                    style="text-transform: capitalize;" autocomplete="off" required
                    oninvalid="this.setCustomValidity('Nama akun baru tidak boleh kosong')"
                    oninput="this.setCustomValidity('')">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" name="edit_akunMedia" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form><!-- End Profile Edit Form -->


    <?php } else { ?>
    <!-- Profile Edit Form -->
    <form action="" method="post" onsubmit="return validasi_profil(this)">
        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
            <div class="col-md-8 col-lg-9">
                <input type="hidden" name="key" value="<?= $_SESSION["id"] ?>">
                <input name="nama" type="text" class="form-control" value="<?= $nama ?>" id="alpabet"
                    style="text-transform: capitalize;">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Username</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" value="<?= $_SESSION["username"] ?>" id="alpabet_user" readonly>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" name="edit_profil" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form><!-- End Profile Edit Form -->
    <?php } ?>
</div>