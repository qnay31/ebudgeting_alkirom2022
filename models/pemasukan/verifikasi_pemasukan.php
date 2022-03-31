<div class="card-body">
    <h5 class="card-title">FORM VERIFIKASI</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <b style="color: black;">Tabel Verifikasi Pemasukan Media Sosial</b>
                <a class="btn btn-primary" href="<?= $_SESSION["username"] ?>.php?id_database=database_crossCheck&id_periode=<?= $cToday; ?>"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="CrossCheck Income">
                    <i class="bi bi-eye text-white"></i></a>
                <hr>
            </label>
        </div>

        <table id="tabel-data_verifMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Income</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status Admin</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tgl_pemasukan'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td>Income <?= ucwords($r['gedung']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemasukan'])); ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-success"
                            href="../models/pemasukan/lapor_pemasukan.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Laporan akan dikirim dan sudah yakin ?!')" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Kirim">
                            <i class="bi bi-box-arrow-right text-white"></i></a>
                    </td>
                    <td>Rp. <?= number_format($r['income'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        
        <!-- Non Resi -->
        <div class="text-center pt-3">
            <label for="">
                <b style="color: black;">Tabel Verifikasi Pemasukan Non Resi</b>
                <hr>
            </label>
        </div>
        <table id="tabel-data_verifMedia2" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Income</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status Admin</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $k->fetch_assoc()) {
                    $bln       = substr($r['tgl_pemasukan'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td>Income <?= ucwords($r['gedung']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemasukan'])); ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_pemasukan&incomeId=nonResi&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin pemasukan ini mau diedit?!')">
                            <i class="bi bi-pencil-square text-white"></i></a> ||
                        <a class="btn btn-danger"
                            href="../models/pemasukan/hapus_pemasukan.php?incomeId=nonResi&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin pemasukan ini mau dihapus?!')">
                            <i class="bi bi-trash text-white"></i></a>
                    </td>
                    <td>Rp. <?= number_format($r['income'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>