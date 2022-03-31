<div class="card-body">
    <h5 class="card-title">CHECK INCOME</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <b style="color: black;">Tabel Check Income Media Sosial</b>
                <hr>
            </label>
        </div>

        <table id="tabel-data_verifIncomeMedia" class="table table-bordered">
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
                    <th scope="col">Akun</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tanggal_tf'], 5,-3);
                    $today    = date("Y-m-d");
                    $bToday   = substr($today, 5,-3);
                    $cToday   = convertDateDBtoIndo($r['tanggal_tf']);
                    $bulanan  = substr($cToday, 3, -5);
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
                    <td style=" text-align: center;">
                        <?php if ($bln == $bToday) { ?>
                        <a class="btn btn-success"
                            href="../verif/laporan/checkIncome.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Income akan dikonfirmasi dan sudah valid??!')"><i
                                class="bi bi-check-circle text-white"></i></a>

                        <?php } else { ?>
                        <a class="btn btn-primary" href="" data-bs-toggle="modal"
                            data-bs-target="#income_<?= $r["id"] ?>"><i class="bi bi-pin-angle text-white"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Cek Data"></i></a>
                        <?php } ?> ||
                        <a class="btn btn-danger"
                            href="../verif/laporan/batalIncome.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Income akan dibatalkan karena tidak sesuai dan dihapus??!')"><i class="bi bi-x-circle text-white"></i></a>

                    </td>
                    <td style="text-align: center;">
                        <?php if ($r["id_pengurus"] == "instagram") { ?>
                        Instagram
                        <?php } else { ?>
                        Facebook
                        <?php } ?>

                    </td>
                </tr>
                
                <?php if ($bln !== $bToday) { ?>
                <?php include '../modal/mediaSosial/cekIncome.php' ?>
                <?php } ?>

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

    </div>
</div>