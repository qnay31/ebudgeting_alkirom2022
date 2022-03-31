<div class="modal fade" id="laporan_<?= $r["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="form">
                    <form action="" method="post" onsubmit="return validasi_input2(this)">
                        <div class="mb-3">
                            <div class="form-text mb-2">
                                Data Laporan
                            </div>
                            <input type="hidden" name="id" value="<?= $r["id"] ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><b>Program</b></span>
                            <input type="text" class="form-control" name="program" value="<?= $r["program"] ?>"
                                readonly>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><b>Cabang</b></span>
                            <input type="text" class="form-control" value="<?= $r["cabang"] ?>" readonly>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><b>Tanggal
                                    Laporan</b></span>
                            <input type="text" class="form-control"
                                value="<?= date('d-m-Y', strtotime($r["tgl_pemakaian"]));?>" readonly>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><b>Pemakaian</b></span>
                            <input type="text" class="form-control" value="<?= ucwords($r["deskripsi_pemakaian"]) ?>"
                                readonly>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>Biaya
                                    Terpakai</b></span>
                            <input type="text" class="form-control"
                                value="<?= number_format($r["dana_terpakai"],0,"." , ".") ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Tanggal Pemakaian <b>(EDIT)</b>
                            </div>
                            <input type="date" class="form-control" name="tanggal_laporan"
                                value="<?= $r["tgl_pemakaian"] ?>">
                        </div>
                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Deskripsi Pemakaian <b>(EDIT)</b>
                            </div>
                            <input type="text" class="form-control" name="deskripsi_laporan"
                                placeholder="Contoh: Pemakaian" id="alpabet" value="<?= $r["deskripsi_pemakaian"] ?>"
                                style="text-transform: capitalize;" autocomplete="off">
                        </div>

                        <div id="disabledSelect" class="form-text mb-2">
                            Terpakai <b>(EDIT)</b>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                            <input type="text" class="form-control admin_rp" name="dana_laporan" maxlength="11"
                                placeholder="Nominal" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                value="<?= number_format($r["dana_terpakai"],0,"." , ".") ?>">
                        </div>
                        <div class="button">
                            <input type="submit" name="edit_laporan" class="btn btn-primary w-100" value="Ubah Data">
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