<?php
$query  = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus LIKE 'facebook%' OR id_pengurus LIKE 'instagram%' ORDER BY `posisi` ASC, nama ASC");

?>
<!-- Modal -->
<div class="modal fade akun_media" id="akun_<?= $r["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="form">
                    <form action="" method="post" onsubmit="return validasi_input(this)" class="user">
                        <div class="input-group mb-3">
                            <input type="hidden" name="id" value="<?= $r["id"]  ?>">
                            <input type="hidden" name="link" value="<?= $r["id_pengurus"] ?>">
                            <input type="hidden" name="posisi" value="<?= $r["posisi"] ?>">
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Nama
                            </div>
                            <input type="text" class="form-control" name="nama" value="<?= $r["pemegang"] ?>" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Posisi
                            </div>
                            <input type="text" class="form-control" value="<?= $r["posisi"] ?>" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Nama Akun
                            </div>
                            <input type="text" class="form-control" name="namaAkun" value="<?= $r["nama_akun"] ?>"
                                readonly>
                            <input type="hidden" class="form-control" name="oldId" value="<?= $r["nomor_id"] ?>"
                                readonly>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Change Name
                            </div>
                            <select class="form-select namaChange name<?= $r["id"]  ?>" data-id="<?= $r["id"]  ?>"
                                name="namaChange" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Pilih salah satu Nama')"
                                oninput="this.setCustomValidity('')">
                                <option selected value="">- Pilih Salah Satu Nama -</option>
                                <?php
                                while ($data = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $data['nama'];?>">
                                    <?= ucwords($data['nama']) ?> (<?= $data['posisi']; ?>)
                                </option>

                                <?php } ?>
                            </select>
                        </div>

                        <div class="changeID<?= $r["id"]  ?> mID"></div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Change ID
                            </div>
                            <input type="text" class="form-control admin_rp" name="changeID"
                                placeholder="Isi ID pengurus" required
                                oninvalid="this.setCustomValidity('ID pengurus tidak boleh kosong')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Team</span>
                            <select class="form-select" name="team" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Tim tidak boleh kosong')"
                                oninput="this.setCustomValidity('')">
                                <option selected value="">- Pilih Salah Satu Team - </option>
                                <option value="Facebook Pusat">Team Facebook Pusat</option>
                                <option value="Facebook Taman">Team Facebook Taman</option>
                                <option value="Instagram Bojong">Team Instagram Bojong</option>
                                <option value="Instagram Taman">Team Instagram Taman</option>
                                <option value="Instagram Meruyung">Team Instagram Meruyung</option>
                                <option value="Facebook Bogor">Team Facebook Bogor</option>
                            </select>
                        </div>

                        <div class=" button">
                            <input type="submit" name="changeName" class="btn btn-primary w-100" value="Ubah Data">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>