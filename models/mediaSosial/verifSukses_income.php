<div class="card-body">
    <h5 class="card-title">VERIFIKASI SUKSES</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <b style="color: black;">Tabel Income Sukses</b>
                <hr>
            </label>
        </div>

        <table id="tabel-data_verifIncome" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Nama Donatur</th>
                    <th scope="col">Tanggal Transfer</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Income</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q3->fetch_assoc()) {
                    $bln       = substr($r['tanggal_tf'], 5,-3);
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['pemegang']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['nama_akun']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td><?= ucwords($r['nama_donatur']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tanggal_tf'])); ?> <?= $r["jam_tf"] ?></td>
                    <td style="text-align: center;"><?= ucwords($r['bank']) ?></td>
                    <td>Rp. <?= number_format($r['jumlah_tf'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><input type="button" name="view" value="Lihat Resi"
                            data-id="<?= $r['id']  ?>" class="btn btn-success btn-xs view_data_media">
                    </td>
                    <td style="text-align: center;">
                        <span class="badge bg-success">Terverifikasi</span>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                    <th colspan="2"></th>
                </tr>
            </tfoot>
        </table>


        <!-- Modal -->
        <div id="dataModal_media" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" id="detail_user_media">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>