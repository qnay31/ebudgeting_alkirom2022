<div class="card-body">
    <h5 class="card-title">LAPORAN HARIAN</h5>
</div>

<div id="form">
    <div class="button">
        <a class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#modalDaily">
            Buat Laporan Baru<span class="badge badge-danger badge-counter">New</span>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDaily" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Laporan Hari Ini</h5>
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
                                <input type="hidden" name="team" value="<?= $team ?>">
                                <input type="text" class="form-control" name="nama" value="<?= $_SESSION["nama"] ?>"
                                    readonly>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Akun</span>
                                <select class="form-select" name="akun" aria-label="Default select example" required
                                    oninvalid="this.setCustomValidity('Pilih salah satu akun')"
                                    oninput="this.setCustomValidity('')" id="akun">
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
                                    Tanggal Laporan
                                </div>
                                <input type="date" class="form-control" name="tanggal" required
                                    oninvalid="this.setCustomValidity('Tanggal Laporan harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <?php if ($_SESSION["id_pengurus"] == "instagram") { ?>
                            <div class="form-group" id="teman"></div>

                            <?php } else { ?>

                            <div class="form-group mb-3 keteranganTeman">
                                <div class="form-text mb-2">
                                    Keterangan Teman
                                </div>
                                <select class="form-select" name="kTeman" aria-label="Default select example" required
                                    oninvalid="this.setCustomValidity('Pilih salah satu keterangan')"
                                    oninput="this.setCustomValidity('')" id="kTeman">
                                    <option selected value="">- Pilih Salah Satu Keterangan -</option>
                                    <option value="Tambah Teman">Tambah Teman</option>
                                    <option value="Hapus Teman">Hapus Teman</option>
                                </select>
                            </div>

                            <div class="input-group" id="keterangan">
                            </div>
                            <?php } ?>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Total Serangan</b></span>
                                <input type="text" class="form-control" name="totalSerangan" id="rupiah" maxlength="11"
                                    placeholder="Total Penyerangan" onkeypress="return hanyaAngka(event)"
                                    autocomplete="off" required
                                    oninvalid="this.setCustomValidity('Jumlah serangan harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Donatur</b></span>
                                <input type="text" class="form-control" name="donatur" id="rupiah2" maxlength="11"
                                    placeholder="Total Donatur" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                    required oninvalid="this.setCustomValidity('Jumlah donatur harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Respon</b></span>
                                <input type="text" class="form-control admin_rp" name="respon" maxlength="11"
                                    placeholder="Total Respon" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                    required oninvalid="this.setCustomValidity('Jumlah respon harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Menanyakan Alamat</b></span>
                                <input type="text" class="form-control admin_rp" name="alamat" maxlength="11"
                                    placeholder="Total Nanya Alamat" onkeypress="return hanyaAngka(event)"
                                    autocomplete="off" required
                                    oninvalid="this.setCustomValidity('Jumlah alamat harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Insya Allah</b></span>
                                <input type="text" class="form-control admin_rp" name="insya_allah" maxlength="11"
                                    placeholder="Total Insya Allah" onkeypress="return hanyaAngka(event)"
                                    autocomplete="off" required
                                    oninvalid="this.setCustomValidity('Jumlah insya allah harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Minta Norek</b></span>
                                <input type="text" class="form-control admin_rp" name="norek" maxlength="11"
                                    placeholder="Total Minta Norek" onkeypress="return hanyaAngka(event)"
                                    autocomplete="off" required
                                    oninvalid="this.setCustomValidity('Jumlah minta norek harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Belum Bisa Bantu</b></span>
                                <input type="text" class="form-control admin_rp" name="bbBantu" maxlength="11"
                                    placeholder="Total Belum Bisa Bantu" onkeypress="return hanyaAngka(event)"
                                    autocomplete="off" required
                                    oninvalid="this.setCustomValidity('Jumlah belum bisa bantu harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Tidak Respon</b></span>
                                <input type="text" class="form-control admin_rp" name="tRespon" maxlength="11"
                                    placeholder="Total Tidak Respon" onkeypress="return hanyaAngka(event)"
                                    autocomplete="off" required
                                    oninvalid="this.setCustomValidity('Jumlah tidak respon harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><b>Total Income (Rp)</b></span>
                                <input type="text" class="form-control admin_rp" name="income" maxlength="11"
                                    placeholder="Total Income" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                    required oninvalid="this.setCustomValidity('Total income harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="button">
                                <input type="submit" name="laporan" class="btn btn-primary w-100" value="Buat Laporan">
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

    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <b style="color: black;">Tabel Harian Akun Media Sosial</b>
                <hr>
            </label>
        </div>

        <table id="tabel-data_lapMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Pengurus</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Akun</th>
                    <th scope="col">Tgl Laporan</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Keterangan</th>
                    <?php if ($_SESSION["id_pengurus"] == "instagram") { ?>
                    <th scope="col">Total Pengikut</th>
                    <th scope="col">Total Mengikuti</th>
                    <th scope="col">Pengikut Terbaru</th>
                    <th scope="col">Mengikuti terbaru</th>

                    <?php } else { ?>
                    <th scope="col">Total Teman</th>
                    <th scope="col">Add Pertemanan</th>
                    <th scope="col">Teman Baru</th>
                    <th scope="col">Hapus Teman</th>
                    <?php } ?>
                    <th scope="col">Total Serangan</th>
                    <th scope="col">Respon</th>
                    <th scope="col">Minta Norek</th>
                    <th scope="col">Tanya Alamat</th>
                    <th scope="col">Insya Allah</th>
                    <th scope="col">Belum Bisa</th>
                    <th scope="col">Tidak Respon</th>
                    <th scope="col">Donatur</th>
                    <th scope="col">Total Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tgl_laporan'], 5,-3);
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['pemegang']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['nama_akun']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_laporanMedia&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Laporan ini mau diedit?!')"><i
                                class="bi bi-pencil-square text-white"></i></a> ||
                        <a class="btn btn-danger"
                            href="../models/mediaSosial/hapus_laporan.php?id_hapus=<?= $r["nama_akun"] ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin Laporan <?= $r[nama_akun] ?> ini mau dihapus?!')"><i
                                class="bi bi-trash text-white"></i></a>
                    </td>
                    <td style="text-align: center;"><?= ucwords($r['keterangan']) ?></td>
                    <td style="text-align: center;"><?= number_format($r['jumlahTeman'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['jumlahAdd'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['temanBaru'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['hapusTeman'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['totalSerangan'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['respon'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['minta_norek'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['alamat'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['insya_allah'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['belumbisa_bantu'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['tidak_respon'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['donatur'],0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($r['total_income'],0,"." , ".") ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php if ($_SESSION["id_pengurus"] == "instagram") { ?>
                <tr style="text-align: center;">
                    <th colspan="9">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>

                <?php } else { ?>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
</div>