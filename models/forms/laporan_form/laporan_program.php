<div class="card-body">
    <h5 class="card-title">FORM LAPORAN</h5>
    <?php if($id_unik == $id && $data["status"] == "OK"){ ?>
    <div id="form">
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return validasi_input2(this)">
            <div class="mb-3">
                <div class="form-text mb-2">
                    Data Anggaran
                </div>
                <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
                <input type="hidden" name="id_unik" value="<?= $id ?>">

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Dari</b></span>
                    <input type="text" class="form-control" name="program" value="<?= $data["program"] ?>" readonly>
                </div>

                <?php if ($_GET["id_dataManagement"] == "program") { ?>
                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Kategori</b></span>
                    <input type="text" class="form-control" name="yatim" value="<?= $data["yatim"] ?>" readonly>
                </div>
                <?php } ?>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Cabang</b></span>
                    <input type="text" class="form-control" value="<?= $data["cabang"] ?>" readonly>
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Tgl diajukan</b></span>
                    <input type="text" class="form-control"
                        value="<?= date('d-m-Y', strtotime($data["tgl_pengajuan"])); ?>" readonly>
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Rencana</b></span>
                    <input type="text" class="form-control" name="deskripsi" value="<?= ucwords($data["deskripsi"]) ?>"
                        readonly>
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Dana anggaran</b></span>
                    <input type="text" class="form-control"
                        value="Rp. <?= number_format($data["dana_anggaran"],0,"." , ".") ?>" readonly>
                </div>
            </div>
            <div class="mb-3">
                <div id="disabledSelect" class="form-text mb-2">
                    Tanggal Laporan
                </div>
                <input type="date" class="form-control" name="tanggal_laporan">
            </div>
            <div class="mb-3">
                <div id="disabledSelect" class="form-text mb-2">
                    Deskripsi Pemakaian
                </div>
                <input type="text" class="form-control" name="deskripsi_laporan" placeholder="rincian pemakaian"
                    id="alpabet" style="text-transform: capitalize;" autocomplete="off">
                <!-- <div id="drag-drop-area"></div> -->
            </div>

            <div id="disabledSelect" class="form-text mb-2">
                Dana Terpakai
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                <input type="text" class="form-control" name="dana_laporan" id="rupiah" maxlength="11"
                    placeholder="Nominal" onkeypress="return hanyaAngka(event)" autocomplete="off">
            </div>

            <div id="disabledSelect" class="form-text mb-2">
                Lampirkan Bukti
            </div>

            <div class="file-drop-area">
                <span class="choose-file-button">Pilih Gambar</span>
                <span class="file-message">or drag and drop files here</span>
                <input type="file" name="gambar[]" class="file-input" accept=".jpg,.jpeg,.png" multiple required
                    oninvalid="this.setCustomValidity('Lampirkan Foto')" oninput="this.setCustomValidity('')">
            </div>
            <div id="divImageMediaPreview"> </div>

            <div class="button">
                <input type="submit" name="input_program" class="btn btn-primary w-100" value="Laporkan">
            </div>
        </form>
    </div>
    <?php } else { ?>
    <div class="table-responsive">
        <div class="text-center">
            <?php if ($_GET["id_dataManagement"] == "program") { ?>
            <label for=""><b style="color: black;">Tabel Laporan Program</b>
                <hr>
            </label>

            <?php } else { ?>
            <label for=""><b style="color: black;">Tabel Laporan <?= $judul ?></b>
                <hr>
            </label>
            <?php } ?>

        </div>
        <table id="tabel-data_laporan" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <?php if ($_GET["id_dataManagement"] == "program") { ?>
                    <th scope="col">Program</th>
                    <th scope="col">Kategori</th>
                    <?php } else { ?>
                    <th scope="col">Kategori</th>
                    <th scope="col">Diajukan Oleh</th>
                    <?php } ?>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Resi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($r = $q2->fetch_assoc()) {
                $bln       = substr($r['tgl_pemakaian'], 5,-3);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['program']) ?></td>
                    <?php if ($_GET["id_dataManagement"] == "program") { ?>
                    <td style="text-align: center;"><?= ucwords($r['yatim']) ?></td>

                    <?php } else { ?>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <?php } ?>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td>Rp. <?= number_format($anggaran,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemakaian'])); ?></td>
                    <td><?= ucwords($r['deskripsi_pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($_GET["id_dataManagement"] == "paudqu") { ?>
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_laporan&id_dataManagement=paudqu&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin laporan ini mau diedit?!')"><i
                                class="bi bi-pencil text-white"></i></a> ||
                        <a class="btn btn-danger"
                            href="../models/forms/hapus_laporan/hapus_lapPaudqu.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i
                                class="bi bi-trash text-white"></i></a>

                        <?php } else { ?>
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_laporan&id_dataManagement=program&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin laporan ini mau diedit?!')"><i
                                class="bi bi-pencil text-white"></i></a> ||
                        <a class="btn btn-danger"
                            href="../models/forms/hapus_laporan/hapus_lapProgram.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i
                                class="bi bi-trash text-white"></i></a>
                        <?php } ?>

                    </td>
                    <td>Rp. <?= number_format($terpakai,0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($sisa,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?php if ($_GET["id_dataManagement"] == "paudqu") { ?>
                        <input type="button" name="view" value="Lihat" data-id="<?= $r['id']  ?>"
                            class="btn btn-success btn-xs view_data_paudqu">

                        <?php } else { ?>
                        <input type="button" name="view" value="Lihat" data-id="<?= $r['id']  ?>"
                            class="btn btn-success btn-xs view_data_program">
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="5">Total</th>
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <!-- Modal -->
        <?php if ($_GET["id_dataManagement"] == "paudqu") { ?>
        <div id="dataModal_paudqu" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bukti Kwitansi</h4>
                    </div>
                    <div class="modal-body" id="detail_user_paudqu">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <?php } else { ?>
        <div id="dataModal_program" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bukti Kwitansi</h4>
                    </div>
                    <div class="modal-body" id="detail_user_program">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>