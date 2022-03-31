<!-- Modal -->
<div class="modal fade akun_media" id="income_<?= $r["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cek Income</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalIncome">
                <div class="detailIncome">
                    <div class="box-warning">
                        <span>*Perhatian! Income ini tidak sesuai pada bulan ini, harap dicek ulang/konfirmasi kembali
                            kepada
                            tim media</span>
                    </div>
                    <div class="detailListName pt-2">
                        <span>Nama : <?= ucwords($r["pemegang"]); ?></span>
                        <br>
                        <span>Akun : <?= ucwords($r["nama_akun"]); ?></span>
                        <br>
                        <span>Nama Donatur : <?= ucwords($r["nama_donatur"]); ?></span>
                        <br>
                        <span>Tanggal Transfer : <?= date('d-m-Y', strtotime($r['tanggal_tf'])); ?> </span>
                        <br>
                        <span>Transfer : <?= number_format($r['jumlah_tf'],0,"." , ".") ?> Via <?= $r["bank"]; ?></span>
                    </div>
                    <div class="box-warning mt-2">
                        <span>*Periode income ini : <b><?= $bulanan; ?></b></span>
                    </div>

                    <div class="button-option pt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="button-confirm">
                                    <a class="btn btn-success"
                                        href="../verif/laporan/checkIncome.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                                        onclick="return confirm('Income dikonfirmasi dan akan dimasukan dalam periode <?= $bulanan ?>??!')"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Konfirmasi"><i
                                            class="bi bi-check-circle text-white"></i></a>
                                </div>
                                <span class="detail-info">(<b>Klik jika income benar</b>)</span>
                            </div>
                            <div class="col-md-6">
                                <div class="button-edit">
                                    <a class="btn btn-warning showIncome" href="#" data-id="<?= $r["id"]; ?>"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Tanggal"><i
                                            class="bi bi-pencil text-white"></i></a>
                                </div>
                                <span class="detail-info">(<b>Jika salah, ubah disini</b>)</span>
                            </div>
                        </div>
                    </div>

                    <div class="incomeEdit<?= $r["id"]; ?> modalIncome" style="display: none; padding-top: 1.3em"
                        id="incomeM">
                        <form action="" method="post">
                            <input type="hidden" name="id_unik" value="<?= $r["id"] ?>">
                            <input type="hidden" name="namaDonatur" value="<?= $r["nama_donatur"] ?>">
                            <input type="hidden" name="oldTanggal" value="<?= $r["tanggal_tf"] ?>">
                            <input type="hidden" name="jam" value="<?= $r["jam_tf"] ?>">
                            <input type="hidden" name="bank" value="<?= $r["bank"] ?>">
                            <input type="hidden" name="transfer"
                                value="<?= number_format($r['jumlah_tf'],0,"." , ".") ?>">
                            <div class="form-group mb-3">
                                <div class="form-text mb-2">
                                    Ubah Tanggal Transfer
                                </div>
                                <input type="date" class="form-control" name="tanggal" required
                                    oninvalid="this.setCustomValidity('Tanggal Transfer harus diisi')"
                                    oninput="this.setCustomValidity('')" value="<?= $r["tanggal_tf"]; ?>">
                            </div>
                            <div class="button">
                                <input type="submit" name="editIncome" class="btn btn-primary w-100" value="Ubah Data">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>