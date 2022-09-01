<div class="tab-pane fade show active profile-overview" id="createTeam">
    <form action="" method="post">
        <div class="input-group mt-3">
            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
            <input type="hidden" name="posisi" value="<?= $_SESSION["posisi"] ?>">
            <span class="input-group-text" id="basic-addon1">Team</span>
            <select class="form-select" name="team" aria-label="Default select example" required
                oninvalid="this.setCustomValidity('Tim tidak boleh kosong')" oninput="this.setCustomValidity('')">
                <option selected value="">- Pilih Salah Satu Team - </option>
                <option value="Facebook Taman">Team Facebook Taman/I</option>
                <option value="Facebook Pusat">Team Facebook Pusat/II</option>
                <option value="Facebook Taman II">Team Facebook Taman II/III</option>
                <option value="Facebook Bojong">Team Facebook Bojong/IV</option>
                <option value="Instagram Taman">Team Instagram A</option>
                <option value="Instagram Bojong">Team Instagram B</option>
                <option value="Instagram Meruyung">Team Instagram C</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <div class="form-text mb-2">
                Daftar Pengurus
            </div>
            <select class="form-select" id="namaPengurus" name="namaList[]" required
                oninvalid="this.setCustomValidity('Daftar tim tidak boleh kosong')" oninput="this.setCustomValidity('')"
                multiple>
                <?php
                    $dataTeam = mysqli_query($conn, "SELECT * FROM income_media WHERE team = '' GROUP BY pemegang ORDER BY `id_pengurus` ASC, pemegang ASC");
                ?>
                <?php
                    while ($data2 = mysqli_fetch_array($dataTeam)) { 
                        $nama = strtolower($data2['pemegang']) ?>
                <option value="<?= $data2['pemegang'];?>">
                    <?= ucwords($nama) ?> - <?php if ($data2['id_pengurus'] == "instagram") { ?>
                    Instagram

                    <?php } else { ?>
                    Facebook
                    <?php } ?>
                </option>

                <?php } ?>
            </select>
        </div>
        <div class="button">
            <input type="submit" name="createListTeam" class="btn btn-primary w-100" value="Buat Tim">
        </div>
    </form>

    <?php
      $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$fbB' OR team = '$fbP' OR team = '$fbT' OR team = '$inP' OR team = '$inT' OR team = '$inM'");
      $nGroup = $qGroup -> num_rows;
    ?>

    <div class="tab-pane fade show active pt-3" id="changeTeam">
        <div class="card-body">
            <?php if ($nGroup > 0) { ?>
            <h5 class="card-title">DATA TEAM MEDIA SOSIAL</h5>
            <div class="table-responsive">
                <table id="tabel-dataTeamMedia" class="table table-bordered">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">Nama Pengurus</th>
                            <th scope="col">Cabang</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Team</th>
                            <?php if ($_SESSION["id_pengurus"] == "kepala_income") { ?>
                            <th scope="col"><input type="checkbox" class="form-check-input check_all" /></th>

                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- server data -->
                    </tbody>
                </table>

                <?php if ($_SESSION["id_pengurus"] == "kepala_income") { ?>
                <div align="left">
                    <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger mb-4">Delete
                        Selected</button>

                    <button type="button" class="btn btn-primary mb-4" onClick="history.go(0);"><i
                            class="bi bi-snow3"></i></button>
                </div>
                <?php } ?>
            </div>
            <?php } else { ?>
            <h5 class="card-title">TIDAK ADA TEAM SAAT INI</h5>
            <?php } ?>
        </div>
    </div>
</div>