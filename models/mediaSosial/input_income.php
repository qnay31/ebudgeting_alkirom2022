<div class="card-body">
    <h5 class="card-title">INPUT INCOME</h5>
</div>

<div id="form">
    <div class="button">
        <a class="btn btn-secondary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#modalDaily">
            Tambah Akun Baru<span class="badge badge-danger badge-counter">New</span>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDaily" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Akun Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="forms">
                        <form action="" method="post" enctype="multipart/form-data"
                            onsubmit="return validasi_input3(this)">
                            <div class="mb-3">
                                <div class="form-text mb-2">
                                    Pengurus
                                </div>
                                <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
                                <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
                                <input type="hidden" name="posisi" value="<?= $_SESSION["posisi"] ?>">
                                <input type="text" class="form-control" name="nama" value="<?= $_SESSION["nama"] ?>"
                                    readonly>
                            </div>

                            <div class="mb-3">
                                <div id="disabledSelect" class="form-text mb-2">
                                    Nama Akun
                                </div>
                                <input type="text" class="form-control" name="akunName" placeholder="nama akun"
                                    id="akunName" style="text-transform: capitalize;" autocomplete="off" required
                                    oninvalid="this.setCustomValidity('Nama akun tidak boleh kosong')"
                                    oninput="this.setCustomValidity('')">

                            </div>

                            <div class="button">
                                <input type="submit" name="tambah" class="btn btn-primary w-100" value="Tambah AKun">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="post" class="user">
        <div class="input-group mb-3">
            <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
            <input type="hidden" name="team" value="<?= $team ?>">
            <span class="input-group-text" id="basic-addon1">Akun</span>
            <select class="form-select" name="akun" aria-label="Default select example" required
                oninvalid="this.setCustomValidity('Pilih salah satu akun')" oninput="this.setCustomValidity('')">
                <option selected value="">- Pilih Salah Satu Akun -</option>
                <?php
                while ($data = mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $data['nama_akun'];?>">
                    <?php echo ucwords($data['nama_akun']) ?>
                </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Nama Donatur
            </div>
            <input type="text" class="form-control" name="namaDonatur" placeholder="nama donatur" id="akunName2"
                style="text-transform: capitalize;" autocomplete="off" required
                oninvalid="this.setCustomValidity('Nama donatur harus diisi')" oninput="this.setCustomValidity('')">
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Tanggal Transfer
            </div>
            <input type="date" class="form-control" name="tanggal" required
                oninvalid="this.setCustomValidity('Tanggal Transfer harus diisi')" oninput="this.setCustomValidity('')">
        </div>

        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Jam Transfer
            </div>
            <input type="time" class="form-control" name="jam" required
                oninvalid="this.setCustomValidity('Jam Transfer harus diisi')" oninput="this.setCustomValidity('')">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Via Bank</span>
            <select class="form-select" name="bank" aria-label="Default select example" required
                oninvalid="this.setCustomValidity('Pilih salah satu bank')" oninput="this.setCustomValidity('')">
                <option selected value="">- Pilih Salah Satu Bank -</option>
                <option value="BRI">Bank BRI</option>
                <option value="BNI">Bank BNI</option>
                <option value="Cimb">Bank Cimb</option>
                <option value="BCA">Bank BCA</option>
                <option value="Mandiri">Bank Mandiri</option>
                <option value="Dana">Dana</option>
                <option value="OVO">OVO</option>
                <option value="WU">WU</option>
                <option value="Kitabisa.com">Kitabisa.com</option>
                <option value="Uang Cash">Uang Cash</option>
            </select>
        </div>

        <div class="form-text mb-2">
            Jumlah Transfer
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="transfer" id="rupiah" maxlength="11"
                placeholder="Jumlah Transfer" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Jumlah transfer harus diisi')" oninput="this.setCustomValidity('')">
        </div>
        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Laporkan">
        </div>
    </form>
</div>