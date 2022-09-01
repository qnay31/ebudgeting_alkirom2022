<div class="card-body income-tim">
    <h5 class="card-title">DATABASE INCOME TEAM
        <br>
        <span class="detail-box">
            <span class="kotak bg-secondary"></span>
            <span class="text-box">Kemarin</span>
            <span class="kotak bg-hariIni"></span>
            <span class="text-box">Hari Ini</span>
            <span class="kotak bg-danger"></span>
            <span class="text-box">Bulan Ini</span>
            <br>
            <span class="kotak bg-success"></span>
            <span class="text-box">Tahun Ini</span>
            <span class="kotak bg-arrow-right"><i class="bi bi-arrow-right"></i></span>
            <span class="text-box">Lihat Detail</span>
        </span>
    </h5>
    <?php
        // fb taman/I
        $kemarin = $tanggalIni - 1;
        // die(var_dump($kemarin));
        $qftKemarin   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$kemarin' AND status = 'OK'");

        while ($iftKemarin = mysqli_fetch_array($qftKemarin)) {
            $i++;
            $incftKemarin      = $iftKemarin["jumlah_tf"];
            $totftKemarin[$i]  = $incftKemarin;
            $hiftKemarin       = array_sum($totftKemarin);

        }

        $qftHari   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$tanggalIni' AND status = 'OK'");

        while ($iftHari = mysqli_fetch_array($qftHari)) {
            $i++;
            $incftHari      = $iftHari["jumlah_tf"];
            $totftHari[$i]  = $incftHari;
            $hiftHari       = array_sum($totftHari);

        }

        $qftBulan   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND status = 'OK'");

        while ($iftBulan = mysqli_fetch_array($qftBulan)) {
            $i++;
            $incftBulan      = $iftBulan["jumlah_tf"];
            $totftBulan[$i]  = $incftBulan;
            $hiftBulan       = array_sum($totftBulan);

        }

        $qft   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman' AND status = 'OK'");

        while ($ift = mysqli_fetch_array($qft)) {
            $i++;
            $incft      = $ift["jumlah_tf"];
            $totft[$i]  = $incft;
            $hift       = array_sum($totft);

        }

        // fb pusat/II
        $qfpKemarin   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Pusat' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$kemarin' AND status = 'OK'");

        while ($ifpKemarin = mysqli_fetch_array($qfpKemarin)) {
            $i++;
            $incfpKemarin      = $ifpKemarin["jumlah_tf"];
            $totfpKemarin[$i]  = $incfpKemarin;
            $hifpKemarin       = array_sum($totfpKemarin);

        }

        $qfpHari   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Pusat' AND MONTH(tanggal_tf)= '$_GET[id_periode]' AND DAY(tanggal_tf) = '$tanggalIni' AND status = 'OK'");

        while ($iftpHari = mysqli_fetch_array($qfpHari)) {
            $i++;
            $incfpHari      = $iftpHari["jumlah_tf"];
            $totfpHari[$i]  = $incfpHari;
            $hifpHari       = array_sum($totfpHari);

        }

        $qfpBulan   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Pusat' AND MONTH(tanggal_tf)= '$_GET[id_periode]' AND status = 'OK'");

        while ($ifpBulan = mysqli_fetch_array($qfpBulan)) {
            $i++;
            $incfpBulan      = $ifpBulan["jumlah_tf"];
            $totfpBulan[$i]  = $incfpBulan;
            $hifpBulan       = array_sum($totfpBulan);

        }

        $qfp   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Pusat' AND status = 'OK'");

        while ($ifp = mysqli_fetch_array($qfp)) {
            $i++;
            $incfp      = $ifp["jumlah_tf"];
            $totfp[$i]  = $incfp;
            $hifp       = array_sum($totfp);

        }

        // fb taman2/III
        $qft2Kemarin   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman II' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$kemarin' AND status = 'OK'");

        while ($ift2Kemarin = mysqli_fetch_array($qft2Kemarin)) {
            $i++;
            $incft2Kemarin      = $ift2Kemarin["jumlah_tf"];
            $totft2Kemarin[$i]  = $incft2Kemarin;
            $hift2Kemarin       = array_sum($totft2Kemarin);

        }

        $qft2Hari   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman II' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$tanggalIni' AND status = 'OK'");

        while ($iftt2Hari = mysqli_fetch_array($qft2Hari)) {
            $i++;
            $incft2Hari      = $iftt2Hari["jumlah_tf"];
            $totft2Hari[$i]  = $incft2Hari;
            $hift2Hari       = array_sum($totft2Hari);

        }

        $qft2Bulan   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman II' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND status = 'OK'");

        while ($ift2Bulan = mysqli_fetch_array($qft2Bulan)) {
            $i++;
            $incft2Bulan      = $ift2Bulan["jumlah_tf"];
            $totft2Bulan[$i]  = $incft2Bulan;
            $hift2Bulan       = array_sum($totft2Bulan);

        }

        $qft2   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Taman II' AND status = 'OK'");

        while ($ift2 = mysqli_fetch_array($qft2)) {
            $i++;
            $incft2      = $ift2["jumlah_tf"];
            $totft2[$i]  = $incft2;
            $hift2       = array_sum($totft2);

        }

        // fb bojong/IV
        $qfbKemarin   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Bojong' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$kemarin' AND status = 'OK'");

        while ($ifbKemarin = mysqli_fetch_array($qfbKemarin)) {
            $i++;
            $incfbKemarin      = $ifbKemarin["jumlah_tf"];
            $totfbKemarin[$i]  = $incfbKemarin;
            $hifbKemarin       = array_sum($totfbKemarin);

        }

        $qfbHari   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Bojong' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$tanggalIni' AND status = 'OK'");

        while ($iftbHari = mysqli_fetch_array($qfbHari)) {
            $i++;
            $incfbHari      = $iftbHari["jumlah_tf"];
            $totfbHari[$i]  = $incfbHari;
            $hifbHari       = array_sum($totfbHari);

        }

        $qfbBulan   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Bojong' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND status = 'OK'");

        while ($ifbBulan = mysqli_fetch_array($qfbBulan)) {
            $i++;
            $incfbBulan      = $ifbBulan["jumlah_tf"];
            $totfbBulan[$i]  = $incfbBulan;
            $hifbBulan       = array_sum($totfbBulan);

        }

        $qfb   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Facebook Bojong' AND status = 'OK'");

        while ($ifb = mysqli_fetch_array($qfb)) {
            $i++;
            $incfb      = $ifb["jumlah_tf"];
            $totfb[$i]  = $incfb;
            $hifb       = array_sum($totfb);

        }

        // instagram A
        $qiAKemarin   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Taman' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$kemarin' AND status = 'OK'");

        while ($iiAKemarin = mysqli_fetch_array($qiAKemarin)) {
            $i++;
            $inciAKemarin      = $iiAKemarin["jumlah_tf"];
            $totiAKemarin[$i]  = $inciAKemarin;
            $hiiAKemarin       = array_sum($totiAKemarin);

        }

        $qiAHari   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Taman' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$tanggalIni' AND status = 'OK'");

        while ($ifiAHari = mysqli_fetch_array($qiAHari)) {
            $i++;
            $inciAHari      = $ifiAHari["jumlah_tf"];
            $totiAHari[$i]  = $inciAHari;
            $hiiAHari       = array_sum($totiAHari);

        }

        $qiABulan   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Taman' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND status = 'OK'");

        while ($iiABulan = mysqli_fetch_array($qiABulan)) {
            $i++;
            $inciABulan      = $iiABulan["jumlah_tf"];
            $totiABulan[$i]  = $inciABulan;
            $hiiABulan       = array_sum($totiABulan);

        }

        $qiA   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Taman' AND status = 'OK'");

        while ($iiA = mysqli_fetch_array($qiA)) {
            $i++;
            $inciA      = $iiA["jumlah_tf"];
            $totiA[$i]  = $inciA;
            $hiiA       = array_sum($totiA);

        }

        // instagram B
        $qiBKemarin   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Bojong' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$kemarin' AND status = 'OK'");

        while ($iiBKemarin = mysqli_fetch_array($qiBKemarin)) {
            $i++;
            $inciBKemarin      = $iiBKemarin["jumlah_tf"];
            $totiBKemarin[$i]  = $inciBKemarin;
            $hiiBKemarin       = array_sum($totiBKemarin);

        }

        $qiBHari   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Bojong' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$tanggalIni' AND status = 'OK'");

        while ($ifiBHari = mysqli_fetch_array($qiBHari)) {
            $i++;
            $inciBHari      = $ifiBHari["jumlah_tf"];
            $totiBHari[$i]  = $inciBHari;
            $hiiBHari       = array_sum($totiBHari);

        }

        $qiBBulan   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Bojong' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND status = 'OK'");

        while ($iiBBulan = mysqli_fetch_array($qiBBulan)) {
            $i++;
            $inciBBulan      = $iiBBulan["jumlah_tf"];
            $totiBBulan[$i]  = $inciBBulan;
            $hiiBBulan       = array_sum($totiBBulan);

        }

        $qiB   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Bojong' AND status = 'OK'");

        while ($iiB = mysqli_fetch_array($qiB)) {
            $i++;
            $inciB      = $iiB["jumlah_tf"];
            $totiB[$i]  = $inciB;
            $hiiB       = array_sum($totiB);

        }

        // instagram C
        $qiCKemarin   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Meruyung' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$kemarin' AND status = 'OK'");

        while ($iiCKemarin = mysqli_fetch_array($qiCKemarin)) {
            $i++;
            $inciCKemarin      = $iiCKemarin["jumlah_tf"];
            $totiCKemarin[$i]  = $inciCKemarin;
            $hiiCKemarin       = array_sum($totiCKemarin);

        }

        $qiCHari   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Meruyung' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$tanggalIni' AND status = 'OK'");

        while ($ifiCHari = mysqli_fetch_array($qiCHari)) {
            $i++;
            $inciCHari      = $ifiCHari["jumlah_tf"];
            $totiCHari[$i]  = $inciCHari;
            $hiiCHari       = array_sum($totiCHari);

        }

        $qiCBulan   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Meruyung' AND MONTH(tanggal_tf)= '$_SESSION[id_periode]' AND status = 'OK'");

        while ($iiCBulan = mysqli_fetch_array($qiCBulan)) {
            $i++;
            $inciCBulan      = $iiCBulan["jumlah_tf"];
            $totiCBulan[$i]  = $inciCBulan;
            $hiiCBulan       = array_sum($totiCBulan);

        }

        $qiC   = mysqli_query($conn, "SELECT * FROM income_media WHERE team = 'Instagram Meruyung' AND status = 'OK'");

        while ($iiC = mysqli_fetch_array($qiC)) {
            $i++;
            $inciC      = $iiC["jumlah_tf"];
            $totiC[$i]  = $inciC;
            $hiiC       = array_sum($totiC);
        }
    ?>

    <?php if ($nInTeam2 > 0 && $_GET['id_table'] == "") { ?>
    <div class="row">
        <!-- Card -->
        <?php if ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") { ?>
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook I <span>(Renal)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary">Rp.
                                <?= number_format($hiftKemarin, 0, ".", "."); ?>
                                <?php if ($hiftKemarin > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Kemarin">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>

                            <h6>Rp.
                                <?= number_format($hiftHari, 0, ".", "."); ?>
                                <?php if ($hiftHari > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>
                            <h6 class="text-danger">
                                Rp.
                                <?= number_format($hiftBulan, 0, ".", ".") ?>
                                <?php if ($hiftBulan > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Bulan Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>
                            <h6 class="text-success">Rp.
                                <?= number_format($hift, 0,"." , "."); ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Tahun Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook II <span>(Nani)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary">Rp.
                                <?= number_format($hifpKemarin, 0, ".", "."); ?>
                                <?php if ($hifpKemarin > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_pusat") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Kemarin">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>

                            <h6>Rp.
                                <?= number_format($hifpHari, 0, ".", "."); ?>
                                <?php if ($hifpHari > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_pusat") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger">
                                Rp.
                                <?= number_format($hifpBulan, 0, ".", ".") ?>
                                <?php if ($hifpBulan > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_pusat") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Bulan Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success">Rp.
                                <?= number_format($hifp, 0,"." , "."); ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_pusat") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Tahun Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook III <span>(Rizka)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary">Rp.
                                <?= number_format($hift2Kemarin, 0, ".", "."); ?>
                                <?php if ($hift2Kemarin > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "admin_facebook") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Kemarin">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>

                            <h6>Rp.
                                <?= number_format($hift2Hari, 0, ".", "."); ?>
                                <?php if ($hift2Hari > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "admin_facebook") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger">
                                Rp.
                                <?= number_format($hift2Bulan, 0, ".", ".") ?>
                                <?php if ($hift2Bulan > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "admin_facebook") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Bulan Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success">Rp.
                                <?= number_format($hift2, 0,"." , "."); ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "admin_facebook") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Tahun Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xxl-3 col-md-3">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook IV <span>(Dwi)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary">Rp.
                                <?= number_format($hifbKemarin, 0, ".", "."); ?>
                                <?php if ($hifbKemarin > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Kemarin">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>

                            <h6>Rp.
                                <?= number_format($hifbHari, 0, ".", "."); ?>
                                <?php if ($hifbHari > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger">
                                Rp.
                                <?= number_format($hifbBulan, 0, ".", ".") ?>
                                <?php if ($hifbBulan > 0) { ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Bulan Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success">Rp.
                                <?= number_format($hifb, 0,"." , "."); ?>
                                <?php if ($_SESSION["username"] == "facebook_depok" || $_SESSION["username"] == "facebook_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Tahun Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="col-xxl-6 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Instagram A <span>(Idham)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary">Rp.
                                <?= number_format($hiiAKemarin, 0, ".", "."); ?>
                                <?php if ($hiiAKemarin > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Kemarin">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>

                            <h6>Rp.
                                <?= number_format($hiiAHari, 0, ".", "."); ?>
                                <?php if ($hiiAHari > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger">
                                Rp.
                                <?= number_format($hiiABulan, 0, ".", ".") ?>
                                <?php if ($hiiABulan > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Bulan Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success">Rp.
                                <?= number_format($hiiA, 0,"." , "."); ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_taman") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Tahun Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Instagram B <span>(Fahmi)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary">Rp.
                                <?= number_format($hiiBKemarin, 0, ".", "."); ?>
                                <?php if ($hiiBKemarin > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Kemarin">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>

                            <h6>Rp.
                                <?= number_format($hiiBHari, 0, ".", "."); ?>
                                <?php if ($hiiBHari > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger">
                                Rp.
                                <?= number_format($hiiBBulan, 0, ".", ".") ?>
                                <?php if ($hiiBBulan > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Bulan Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success">Rp.
                                <?= number_format($hiiB, 0,"." , "."); ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_bojong") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Tahun Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Instagram C <span>(Aldi)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary">Rp.
                                <?= number_format($hiiCKemarin, 0, ".", "."); ?>
                                <?php if ($hiiCKemarin > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_meruyung") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Kemarin">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>

                                <?php } ?>
                            </h6>

                            <h6>Rp.
                                <?= number_format($hiiCHari, 0, ".", "."); ?>
                                <?php if ($hiiCHari > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_meruyung") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger">
                                Rp.
                                <?= number_format($hiiCBulan, 0, ".", ".") ?>
                                <?php if ($hiiCBulan > 0) { ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_meruyung") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Bulan Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success">Rp.
                                <?= number_format($hiiC, 0,"." , "."); ?>
                                <?php if ($_SESSION["username"] == "instagram" || $_SESSION["username"] == "instagram_meruyung") { ?>
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Tahun Ini">
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <?php } else { ?>
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook I <span>(Renal)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Kemarin">Rp.
                                <?= number_format($hiftKemarin, 0, ".", "."); ?>
                                <?php if ($hiftKemarin > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>

                                <?php } ?>
                            </h6>

                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                <?= number_format($hiftHari, 0, ".", "."); ?>
                                <?php if ($hiftHari > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Bulan Ini">
                                Rp.
                                <?= number_format($hiftBulan, 0, ".", ".") ?>
                                <?php if ($hiftBulan > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Tahun Ini">Rp.
                                <?= number_format($hift, 0,"." , "."); ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbI"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook II <span>(Nani)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Kemarin">Rp.
                                <?= number_format($hifpKemarin, 0, ".", "."); ?>
                                <?php if ($hifpKemarin > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>

                                <?php } ?>
                            </h6>

                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                <?= number_format($hifpHari, 0, ".", "."); ?>
                                <?php if ($hifpHari > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Bulan Ini">
                                Rp.
                                <?= number_format($hifpBulan, 0, ".", ".") ?>
                                <?php if ($hifpBulan > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Tahun Ini">Rp.
                                <?= number_format($hifp, 0,"." , "."); ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook III <span>(Rizka)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Kemarin">Rp.
                                <?= number_format($hift2Kemarin, 0, ".", "."); ?>
                                <?php if ($hift2Kemarin > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>

                                <?php } ?>
                            </h6>

                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                <?= number_format($hift2Hari, 0, ".", "."); ?>
                                <?php if ($hift2Hari > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Bulan Ini">
                                Rp.
                                <?= number_format($hift2Bulan, 0, ".", ".") ?>
                                <?php if ($hift2Bulan > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Tahun Ini">Rp.
                                <?= number_format($hift2, 0,"." , "."); ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbIII"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xxl-3 col-md-3">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Facebook IV <span>(Dwi)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Kemarin">Rp.
                                <?= number_format($hifbKemarin, 0, ".", "."); ?>
                                <?php if ($hifbKemarin > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>

                                <?php } ?>
                            </h6>

                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                <?= number_format($hifbHari, 0, ".", "."); ?>
                                <?php if ($hifbHari > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Bulan Ini">
                                Rp.
                                <?= number_format($hifbBulan, 0, ".", ".") ?>
                                <?php if ($hifbBulan > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Tahun Ini">Rp.
                                <?= number_format($hifb, 0,"." , "."); ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbIV"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="col-xxl-6 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Instagram A <span>(Idham)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Kemarin">Rp.
                                <?= number_format($hiiAKemarin, 0, ".", "."); ?>
                                <?php if ($hiiAKemarin > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>

                                <?php } ?>
                            </h6>

                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                <?= number_format($hiiAHari, 0, ".", "."); ?>
                                <?php if ($hiiAHari > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Bulan Ini">
                                Rp.
                                <?= number_format($hiiABulan, 0, ".", ".") ?>
                                <?php if ($hiiABulan > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Tahun Ini">Rp.
                                <?= number_format($hiiA, 0,"." , "."); ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igA"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Instagram B <span>(Fahmi)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Kemarin">Rp.
                                <?= number_format($hiiBKemarin, 0, ".", "."); ?>
                                <?php if ($hiiBKemarin > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>

                                <?php } ?>
                            </h6>

                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                <?= number_format($hiiBHari, 0, ".", "."); ?>
                                <?php if ($hiiBHari > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Bulan Ini">
                                Rp.
                                <?= number_format($hiiBBulan, 0, ".", ".") ?>
                                <?php if ($hiiBBulan > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Tahun Ini">Rp.
                                <?= number_format($hiiB, 0,"." , "."); ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igB"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Instagram C <span>(Aldi)</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Kemarin">Rp.
                                <?= number_format($hiiCKemarin, 0, ".", "."); ?>
                                <?php if ($hiiCKemarin > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>

                                <?php } ?>
                            </h6>

                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                <?= number_format($hiiCHari, 0, ".", "."); ?>
                                <?php if ($hiiCHari > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Bulan Ini">
                                Rp.
                                <?= number_format($hiiCBulan, 0, ".", ".") ?>
                                <?php if ($hiiCBulan > 0) { ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                                <?php } ?>
                            </h6>
                            <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Lihat Tahun Ini">Rp.
                                <?= number_format($hiiC, 0,"." , "."); ?>
                                <span>
                                    <a
                                        href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igC"><i
                                            class="bi bi-arrow-right"></i></a>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <?php } ?>
        <!-- End Card -->
    </div>

    <?php } else { ?>
    <div class="table-responsive">
        <?php if ($_SESSION["id_periode"] == "") { ?>
        <h5 class="card-title text-center">Team <?= $team; ?> 2022</h5>

        <?php } else { ?>
        <?php if ($nInTeam > 0 && $tanggalIni == $_GET["id_date"]) { ?>
        <h5 class="card-title text-center">Team <?= $team; ?> <?= $tanggalIni; ?> <?= $inTeamT; ?></h5>

        <?php } elseif ($nInTeam > 0 && $kemarin == $tanggalIni - 1) { ?>
        <h5 class="card-title text-center">Team <?= $team; ?> <?= $kemarin; ?> <?= $inTeamT; ?></h5>

        <?php } elseif ($nInTeam > 0) { ?>
        <h5 class="card-title text-center">Team <?= $team; ?> <?= $inTeamT; ?></h5>

        <?php } else { ?>
        <h5 class="card-title text-center">Tidak ada data</h5>
        <?php } ?>
        <?php } ?>

        <?php if ($nInTeam > 0) { ?>
        <div class="row">
            <!-- Card -->
            <?php if ($_SESSION["idTable"] == "fbI") { ?>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $bulanIni; ?>"
                                class="btn-back"><i class="bi bi-arrow-left-short"></i> Kembali</a>&ensp;
                            Facebook I <span>(Renal)</span>
                        </h5>

                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <?php if ($hiftKemarin > 0) { ?>
                                <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Kemarin">Rp.
                                    <?= number_format($hiftKemarin, 0, ".", "."); ?>
                                    <?php if ($hiftKemarin > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbI"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiftHari > 0) { ?>
                                <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                    <?= number_format($hiftHari, 0, ".", "."); ?>
                                    <?php if ($hiftHari > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbI"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiftBulan > 0) { ?>
                                <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Bulan Ini">
                                    Rp.
                                    <?= number_format($hiftBulan, 0, ".", ".") ?>
                                    <?php if ($hiftBulan > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbI"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Tahun Ini">Rp.
                                    <?= number_format($hift, 0,"." , "."); ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbI"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } elseif ($_SESSION["idTable"] == "fbII") { ?>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $bulanIni; ?>"
                                class="btn-back"><i class="bi bi-arrow-left-short"></i> Kembali</a>&ensp;
                            Facebook II <span>(Nani)</span>
                        </h5>

                        <div class="d-flex align-items-center">
                            <div class="ps-3">

                                <?php if ($hifpKemarin > 0) { ?>
                                <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Kemarin">Rp.
                                    <?= number_format($hifpKemarin, 0, ".", "."); ?>
                                    <?php if ($hifpKemarin > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>

                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hifpHari > 0) { ?>
                                <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                    <?= number_format($hifpHari, 0, ".", "."); ?>
                                    <?php if ($hifpHari > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ( $hifpBulan > 0) { ?>
                                <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Bulan Ini">
                                    Rp.
                                    <?= number_format($hifpBulan, 0, ".", ".") ?>
                                    <?php if ($hifpBulan > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>

                                <?php } ?>
                                <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Tahun Ini">Rp.
                                    <?= number_format($hifp, 0,"." , "."); ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } elseif ($_SESSION["idTable"] == "fbIII") { ?>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $bulanIni; ?>"
                                class="btn-back"><i class="bi bi-arrow-left-short"></i> Kembali</a>&ensp;
                            Facebook III <span>(Rizka)</span>
                        </h5>

                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <?php if ($hift2Kemarin > 0) { ?>
                                <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Kemarin">Rp.
                                    <?= number_format($hift2Kemarin, 0, ".", "."); ?>
                                    <?php if ($hift2Kemarin > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbIII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hift2Hari > 0) { ?>
                                <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                    <?= number_format($hift2Hari, 0, ".", "."); ?>
                                    <?php if ($hift2Hari > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbIII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hift2Bulan > 0) { ?>
                                <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Bulan Ini">
                                    Rp.
                                    <?= number_format($hift2Bulan, 0, ".", ".") ?>
                                    <?php if ($hift2Bulan > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbIII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>

                                <?php } ?>
                                <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Tahun Ini">Rp.
                                    <?= number_format($hift2, 0,"." , "."); ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbIII"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } elseif ($_SESSION["idTable"] == "fbIV") { ?>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $bulanIni; ?>"
                                class="btn-back"><i class="bi bi-arrow-left-short"></i> Kembali</a>&ensp;
                            Facebook IV <span>(Dwi)</span>
                        </h5>

                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <?php if ($hifbKemarin > 0) { ?>
                                <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Kemarin">Rp.
                                    <?= number_format($hifbKemarin, 0, ".", "."); ?>
                                    <?php if ($hifbKemarin > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=fbIV"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>

                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hifbHari > 0) { ?>
                                <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                    <?= number_format($hifbHari, 0, ".", "."); ?>
                                    <?php if ($hifbHari > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=fbIV"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hifbBulan > 0) { ?>
                                <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Bulan Ini">
                                    Rp.
                                    <?= number_format($hifbBulan, 0, ".", ".") ?>
                                    <?php if ($hifbBulan > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=fbIV"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>
                                <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Tahun Ini">Rp.
                                    <?= number_format($hifb, 0,"." , "."); ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=fbIV"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } elseif ($_SESSION["idTable"] == "igA") { ?>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $bulanIni; ?>"
                                class="btn-back"><i class="bi bi-arrow-left-short"></i> Kembali</a>&ensp;
                            Instagram A <span>(Idham)</span>
                        </h5>

                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <?php if ($hiiAKemarin > 0) { ?>
                                <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Kemarin">Rp.
                                    <?= number_format($hiiAKemarin, 0, ".", "."); ?>
                                    <?php if ($hiiAKemarin > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igA"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>

                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiiAHari > 0) { ?>
                                <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                    <?= number_format($hiiAHari, 0, ".", "."); ?>
                                    <?php if ($hiiAHari > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igA"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiiABulan > 0) { ?>
                                <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Bulan Ini">
                                    Rp.
                                    <?= number_format($hiiABulan, 0, ".", ".") ?>
                                    <?php if ($hiiABulan > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igA"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Tahun Ini">Rp.
                                    <?= number_format($hiiA, 0,"." , "."); ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igA"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } elseif ($_SESSION["idTable"] == "igB") { ?>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $bulanIni; ?>"
                                class="btn-back"><i class="bi bi-arrow-left-short"></i> Kembali</a>&ensp;
                            Instagram B <span>(Fahmi)</span>
                        </h5>

                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <?php if ($hiiBKemarin > 0) { ?>
                                <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Kemarin">Rp.
                                    <?= number_format($hiiBKemarin, 0, ".", "."); ?>
                                    <?php if ($hiiBKemarin > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igB"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>

                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiiBHari > 0) { ?>
                                <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                    <?= number_format($hiiBHari, 0, ".", "."); ?>
                                    <?php if ($hiiBHari > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igB"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiiBBulan > 0) { ?>
                                <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Bulan Ini">
                                    Rp.
                                    <?= number_format($hiiBBulan, 0, ".", ".") ?>
                                    <?php if ($hiiBBulan > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igB"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Tahun Ini">Rp.
                                    <?= number_format($hiiB, 0,"." , "."); ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igB"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } else { ?>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $bulanIni; ?>"
                                class="btn-back"><i class="bi bi-arrow-left-short"></i> Kembali</a>&ensp;
                            Instagram C <span>(Aldi)</span>
                        </h5>

                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <?php if ($hiiCKemarin > 0) { ?>
                                <h6 class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Kemarin">Rp.
                                    <?= number_format($hiiCKemarin, 0, ".", "."); ?>
                                    <?php if ($hiiCKemarin > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $kemarin; ?>&id_table=igC"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>

                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiiCHari > 0) { ?>
                                <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Lihat Hari Ini">Rp.
                                    <?= number_format($hiiCHari, 0, ".", "."); ?>
                                    <?php if ($hiiCHari > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_date=<?= $tanggalIni; ?>&id_table=igC"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <?php if ($hiiCBulan > 0) { ?>
                                <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Bulan Ini">
                                    Rp.
                                    <?= number_format($hiiCBulan, 0, ".", ".") ?>
                                    <?php if ($hiiCBulan > 0) { ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_periode=<?= $_SESSION['id_periode']; ?>&id_table=igC"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                    <?php } ?>
                                </h6>
                                <?php } ?>

                                <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Lihat Tahun Ini">Rp.
                                    <?= number_format($hiiC, 0,"." , "."); ?>
                                    <span>
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_database=database_incomeTim&id_table=igC"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <!-- End Card -->
        </div>

        <table id="tabel-data_databaseTimIncome" class="table table-bordered table-income">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dipegang Oleh</th>
                    <th scope="col">Team</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Nama Donatur</th>
                    <th scope="col">Tanggal Transfer</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Jumlah Income</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="9">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <?php } ?>
    </div>
    <?php } ?>
</div>