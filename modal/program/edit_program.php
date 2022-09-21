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
                    <form action="" method="post" onsubmit="return validasi_input(this)" class="user">
                        <div class="input-group mb-3">
                            <input type="hidden" name="id" value="<?= $r["id"]  ?>">
                            <input type="hidden" name="link" value="<?= $r["id_pengurus"] ?>">
                            <input type="hidden" name="posisi" value="<?= $r["posisi"] ?>">
                            <span class="input-group-text" id="basic-addon1">Program</span>
                            <select class="form-select" name="program" aria-label="Default select example">
                                <option selected value="<?= $r["program"] ?>"><?= $r["program"] ?>
                                </option>
                                <?php if ($r["yatim"] == "Yatim Binaan" || $r["yatim"] == "Yatim Luar Binaan") { ?>
                                <option value="Program Pendidikan Yatim">Pendidikan Yatim</option>
                                <option value="Program Kesehatan Yatim">Kesehatan Yatim</option>
                                <option value="Program Santunan Yatim">Santunan Yatim</option>
                                <option value="Program Uang Saku Yatim">Uang Saku Yatim</option>
                                <option value="Program Ceria Yatim">Ceria Yatim</option>
                                <option value="Program Belanja Yatim">Belanja Yatim</option>
                                <option value="Program Papan Yatim">Papan Yatim</option>
                                <option value="Program Bakti Sosial">Bakti Sosial</option>
                                <option value="Program Makan Sehat Yatim">Makan Sehat Yatim</option>
                                <option value="Program Sembako Yatim">Sembako Yatim</option>
                                <option value="Program Pesantren Yatim">Pesantren Yatim</option>
                                <option value="Program Kamis Ceria">Kamis Ceria</option>
                                <!--<option value="Zakat Fitrah">Zakat Fitrah</option>-->
                                <option value="Hampers">Hampers</option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Cabang
                            </div>
                            <input type="text" class="form-control" name="cabang" value="<?= $r["cabang"] ?>" readonly>
                        </div>

                        <?php if ($r["yatim"] == "Yatim Binaan" || $r["yatim"] == "Yatim Luar Binaan") { ?>
                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Yatim
                            </div>
                            <select class="form-select" name="yatim" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Pilih salah satu yatim')"
                                oninput="this.setCustomValidity('')">
                                <option selected value="<?= $r["yatim"]; ?>"><?= $r["yatim"]; ?></option>
                                <option value="Yatim Binaan">Binaan</option>
                                <option value="Yatim Luar Binaan">Luar Binaan</option>
                            </select>
                        </div>

                        <?php } elseif ($r["yatim"] == "Santunan Bulanan") { ?>
                        <input type="hidden" name="yatim" value="Santunan Bulanan">

                        <?php } else { ?>
                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Sub Anggaran
                            </div>
                            <select class="form-select" name="yatim" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Pilih salah satu')"
                                oninput="this.setCustomValidity('')">
                                <option selected value="<?= $r["yatim"]; ?>"><?= $r["yatim"]; ?></option>
                                <option value="Uang Saku">Uang Saku</option>
                                <option value="Uang Makan">Uang Makan</option>
                                <option value="Laundry">Laundry</option>
                                <option value="Santunan">Santunan</option>
                            </select>
                        </div>
                        <?php } ?>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Tanggal Pengajuan
                            </div>
                            <input type="date" class="form-control" name="tanggal" value="<?= $r["tgl_pengajuan"] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Perencanaan Program
                            </div>
                            <input type="text" class="form-control" name="deskripsi" placeholder="perencanaan program"
                                id="alpabet" style="text-transform: capitalize;" value="<?= $r["deskripsi"] ?>"
                                autocomplete="off">
                        </div>

                        <div class="form-text mb-2">
                            Rencana Anggaran
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                            <input type="text" class="form-control admin_rp" name="anggaran" maxlength="11"
                                placeholder="Rencana Anggaran" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                value="<?= number_format($r["dana_anggaran"] ,0,"." , ".")?>">
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