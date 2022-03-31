<div class="card-body">
    <h5 class="card-title">DAILY REPORT</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for=""><b style="color: black;">Tabel Daily Report <?= $_SESSION["posisi"] ?></b>
                <hr>
            </label>
        </div>
        <table id="tabel-data_daily" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Aktivitas</th>
                    <th scope="col">Tgl Aktivitas</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Pengaturan</th>
                    <th scope="col">Dokumentasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tgl_aktivitas'], 5,-3);
                    $convert   = convertDateDBtoIndo($r['tgl_aktivitas']);

                    $convert2   = convertDateDBtoIndo($r['tgl_aktivitas']);
                    $bulan     = substr($convert2, 2);
                    ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['nama']) ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;"><?= $bulan ?></td>
                    <td><?= ucwords($r['aktivitas']) ?></td>
                    <td style="text-align: center;">
                        <?= $convert ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <?php if($r['posisi'] == $_SESSION['posisi']){ ?>
                    <td style=" text-align: center;"><a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_daily=edit_daily&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin Daily ini mau diedit?!')">Edit</a> || <a
                            class="btn btn-danger"
                            href="../models/daily/hapus_daily/hapus_daily.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Anda Yakin Mau Menghapus Daily ini ?')">Hapus</a>
                    </td>
                    <?php } else { ?>
                    <td style=" text-align: center;" class="disabled">-
                    </td>
                    <?php } ?>
                    <td style="text-align: center;"><input type="button" name="view" value="Lihat"
                            data-id="<?= $r['id']  ?>" data-name="<?= $r['id_pengurus'] ?>"
                            class="btn btn-primary btn-xs view_data_daily">
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Modal -->
        <div id="dataModal_daily" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Dokumentasi</h4>
                    </div>
                    <div class="modal-body" id="detail_user_daily">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>