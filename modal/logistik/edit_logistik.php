<!-- Modal -->
<div class="modal fade" id="program_<?= $r["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="form">
                    <form action="" method="post" onsubmit="return validasi_input(this)">
                        <div class="mb-1">
                            <div class="form-text mb-2">
                                Logistik <b>Edit</b>
                            </div>
                            <input type="hidden" name="id" value="<?= $r["id"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="program" value="<?= $r["logistik"] ?>"
                                readonly>
                        </div>

                        <div class="mb-1">
                            <div class="form-text mb-2">
                                Cabang <b>Edit</b>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="<?= $r["cabang"] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Tanggal Pengajuan <b>Edit</b>
                            </div>
                            <input type="date" class="form-control" name="tanggal" value="<?= $r["tgl_pengajuan"] ?>">
                        </div>
                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Deskripsi Logistik <b>Edit</b>
                            </div>
                            <input type="text" class="form-control" name="deskripsi"
                                placeholder="Contoh:logistik konsumtif" id="alpabet"
                                value="<?= ucwords($r["deskripsi"]) ?>" style="text-transform: capitalize;"
                                autocomplete="off">
                        </div>

                        <div id="disabledSelect" class="form-text mb-2">
                            Anggaran <b>Edit</b>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                            <input type="text" class="form-control admin_rp" name="anggaran" id="rupiah" maxlength="11"
                                placeholder="Nominal" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                value="<?= number_format($r["dana_anggaran"],0,"." , ".") ?>">
                        </div>
                        <div class="button">
                            <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
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