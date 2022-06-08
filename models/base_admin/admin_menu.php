<?php 

$key_admin = $_GET["id_adminKey"];

if ($key_admin == "akunEbudget") {
    $q  = mysqli_query($conn, "SELECT * FROM akun_pengurus ORDER BY `nama` ASC");
    $admin_judul = "DAFTAR AKUN EBUDGETING";

} elseif ($key_admin == "program" || $key_admin == "logistik") {
    $q  = mysqli_query($conn, "SELECT * FROM 2022_$key_admin ORDER BY `tgl_pengajuan` DESC");
    $j_view     = strtoupper($key_admin);
    $admin_judul = "DATA $j_view";

    if ($key_admin == "program") {
        if (isset($_POST["input"]) ) {
            $link = $_SESSION["username"];
            if(edit_anggaran_program($_POST) > 0 ) {
                echo "<script>
                        alert('Data anggaran Berhasil Diedit');
                        document.location.href = '$link.php?id_adminKey=$key_admin';
                    </script>";
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
        if (isset($_POST["edit_laporan"]) ) {
            $link = $_SESSION["username"];
            if(edit_laporan_program($_POST) > 0 ) {
                echo "<script>
                    alert('Data Laporan Berhasil diubah');
                    document.location.href = '$link.php?id_adminKey=$key_admin';
                </script>";            
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    } else {
        if (isset($_POST["input"]) ) {
            $link = $_SESSION["username"];
            if(edit_anggaran_logistik($_POST) > 0 ) {
                echo "<script>
                        alert('Data anggaran Berhasil Diedit');
                        document.location.href = '$link.php?id_adminKey=$key_admin';
                    </script>";
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
        if (isset($_POST["edit_laporan"]) ) {
            $link = $_SESSION["username"];
            if(edit_laporan_logistik($_POST) > 0 ) {
                echo "<script>
                    alert('Data Laporan Berhasil diubah');
                    document.location.href = '$link.php?id_adminKey=$key_admin';
                </script>";            
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    }

} elseif ($key_admin == "data_akun") {
    $q  = mysqli_query($conn, "SELECT * FROM $key_admin ORDER BY `pemegang` ASC");
    $j_view     = strtoupper($key_admin);
    $admin_judul = "$j_view";
    
    if (isset($_POST["changeName"]) ) {
        $link = $_SESSION["username"];
        if(changeName($_POST) > 0 ) {
            echo "<script>
                alert('Data Berhasil diperbarui');
                document.location.href = '$link.php?id_adminKey=$key_admin';
            </script>";            
        } 
            else {
            echo mysqli_error($conn);
        }
    }

} elseif ($key_admin == "income" || $key_admin == "incometanparesi") {
    $j_view     = strtoupper($key_admin);
    $admin_judul = "DATA $j_view";

} elseif ($key_admin == "income_media") {
    $j_view     = strtoupper($key_admin);
    $admin_judul = "DATA $j_view";

} elseif ($key_admin == "laporan_media") {
    $q  = mysqli_query($conn, "SELECT * FROM $key_admin  ORDER BY `tgl_laporan` DESC");
    $j_view     = strtoupper($key_admin);
    $admin_judul = "DATA $j_view";
    
} elseif ($key_admin == "logActivity") {

} else {
    $q  = mysqli_query($conn, "SELECT * FROM 2022_$key_admin ORDER BY `tgl_dibuat` DESC");
    $j_view     = strtoupper($key_admin);
    $admin_judul = "DATA $j_view";
    
    if (isset($_POST["input"]) ) {
        $link = $_SESSION["username"];
        if(edit_anggaran_management($_POST) > 0 ) {
            echo "<script>
                    alert('Data anggaran Berhasil Diedit');
                    document.location.href = '$link.php?id_adminKey=$key_admin';
                </script>";
        } 
            else {
            echo mysqli_error($conn);
        }
    }

    if (isset($_POST["edit_laporan"]) ) {
        $link = $_SESSION["username"];
        if(edit_laporan_management($_POST) > 0 ) {
            echo "<script>
                    alert('Data Laporan Berhasil diubah');
                    document.location.href = '$link.php?id_adminKey=$key_admin';
                </script>";            
        } 
            else {
            echo mysqli_error($conn);
        }
    }
}

?>
<div class="card-body">
    <h5 class="card-title text-center"><?= $admin_judul ?></h5>
    <div class="table-responsive">
        <?php if ($key_admin == "akunEbudget") { ?>
        <table id="tabel-database_akunEbudget" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Id Pengurus</th>
                    <th scope="col">Nama Pengurus</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Usrname</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= $r['id_pengurus'] ?></td>
                    <td><?= ucwords($r['nama']) ?></td>
                    <td>
                        <?= ucwords($r['cabang']) ?>
                        <?php if ($r["id_pengurus"] == "facebook_depok" || $r["id_pengurus"] == "facebook_bogor" || $r["id_pengurus"] == "instagram") { ?>
                        <a href="../models/base_admin/switchCabang.php?id_unik=<?= $r['id'] ?>">
                            <?php if ($r['cabang'] == "Depok") { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Bogor?!')"></i>

                            <?php } else { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Depok?!')"></i>
                            <?php } ?>
                        </a>
                        <?php } ?>
                    </td>
                    <td><?= $r['username'] ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;">
                        <a href="../models/base_admin/hapus_ebudget.php?id_unik=<?= $r['id'] ?>"><i class="bi bi-trash"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"
                                onclick="return confirm('Yakin data ini mau dihapus?!')"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php } elseif ($key_admin == "program") { ?>
        <table id="tabel-database_laporan" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Program</th>
                    <th scope="col">Dilaporkan</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $a =1;
                while ($r = $q->fetch_assoc()) {
                $convert   = convertDateDBtoIndo($r['tgl_pemakaian']);
                $bulan     = substr($convert, 2);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                $bln       = substr($r['tgl_pengajuan'], 5,-3);
                $bln2       = substr($r['tgl_pemakaian'], 5,-3);
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['program']) ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;">
                        <?= ucwords($r['cabang']) ?>
                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=cabang&id_kategori=program">
                            <?php if ($r['cabang'] == "Depok") { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Bogor?!')"></i>

                            <?php } else { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Depok?!')"></i>
                            <?php } ?>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <?= $bulan ?>
                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td><?= number_format($anggaran) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <?= date('d-m-Y', strtotime($r['tgl_pemakaian'])); ?>
                        <?php } else { ?>
                        -
                        <?php } ?>

                    </td>
                    <td><?= ucwords($r['deskripsi_pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r['laporan'] == "Terverifikasi") { ?>
                        <span class="badge bg-success"><?= $r["laporan"] ?></span>

                        <?php } else { ?>
                        <span class="badge bg-danger"><?= $r["laporan"] ?></span>
                        <?php } ?>

                    </td>
                    <td><?= number_format($terpakai) ?></td>
                    <td>
                        <?php if ($terpakai > 0) { ?>
                        <?= number_format($sisa) ?>

                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <a href="" data-bs-toggle="modal" data-bs-target="#program_<?= $r["id"] ?>"><i
                                class="bi bi-pencil" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Anggaran"></i></a>&nbsp;|

                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#laporan_<?= $r["id"] ?>"><i
                                class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Laporan"></i></a>&nbsp;|

                        <a href="../models/forms/hapus_laporan/hapus_lapProgram.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln2 ?>"
                            onclick="return confirm('Yakin Laporan ini mau dihapus?!')"" data-bs-toggle=" modal"
                            data-bs-target="#hapus_<?= $r["id"] ?>"><i class="bi bi-trash" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hapus Laporan"></i></a>&nbsp;|

                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=laporan&id_kategori=program">
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ubah status laporan?!')"></i>
                        </a>

                        <?php } else { ?>
                        <a href="../models/forms/hapus_pengajuan/hapus_program.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i class="bi bi-trash"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Anggaran"></i></a>
                        <?php } ?>
                    </td>
                </tr>

                <?php include '../modal/program/edit_program.php'; ?>

                <?php if ($r["laporan"] == "Terverifikasi") { ?>

                <?php include '../modal/program/edit_lapProgram.php'; ?>

                <?php } ?>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } elseif ($key_admin == "logistik") { ?>
        <table id="tabel-database_laporan" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Logistik</th>
                    <th scope="col">Dilaporkan</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Resi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($r = $q->fetch_assoc()) {
                $convert   = convertDateDBtoIndo($r['tgl_pemakaian']);
                $bulan     = substr($convert, 2);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['logistik']) ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;">
                        <?= ucwords($r['cabang']) ?>
                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=cabang&id_kategori=logistik">
                            <?php if ($r['cabang'] == "Depok") { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Bogor?!')"></i>

                            <?php } else { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Depok?!')"></i>
                            <?php } ?>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <?= $bulan ?>
                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td><?= number_format($anggaran) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Belum Laporan") { ?>
                        -
                        <?php } else { ?>
                        <?= date('d-m-Y', strtotime($r['tgl_pemakaian'])); ?>
                        <?php } ?>
                    </td>
                    <td><?= ucwords($r['deskripsi_pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r['laporan'] == "Terverifikasi") { ?>
                        <span class="badge bg-success"><?= $r["laporan"] ?></span>

                        <?php } else { ?>
                        <span class="badge bg-danger"><?= $r["laporan"] ?></span>
                        <?php } ?>
                    </td>
                    <td><?= number_format($terpakai) ?></td>
                    <td>
                        <?php if ($terpakai > 0) { ?>
                        <?= number_format($sisa) ?>

                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <a href="" data-bs-toggle="modal" data-bs-target="#program_<?= $r["id"] ?>"><i
                                class="bi bi-pencil" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Anggaran"></i></a>&nbsp;|

                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#laporan_<?= $r["id"] ?>"><i
                                class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Laporan"></i></a>&nbsp;|

                        <a href="../models/forms/hapus_laporan/hapus_lapLogistik.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln2 ?>"
                            onclick="return confirm('Yakin Laporan ini mau dihapus?!')" data-bs-toggle=" modal"
                            data-bs-target="#hapus_<?= $r["id"] ?>"><i class="bi bi-trash" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hapus Laporan"></i></a>&nbsp;|

                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=laporan&id_kategori=logistik">
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ubah status laporan?!')"></i>
                        </a>
                        <?php } else { ?>
                        <a href="../models/forms/hapus_pengajuan/hapus_logistik.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i class="bi bi-trash"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Anggaran"></i></a>
                        <?php } ?>
                    </td>

                    <?php include '../modal/logistik/edit_logistik.php'; ?>

                    <?php if ($r["laporan"] == "Terverifikasi") { ?>

                    <?php include '../modal/logistik/edit_lapLogistik.php'; ?>

                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } elseif ($key_admin == "aset_yayasan") { ?>
        <table id="tabel-database_lapAset" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Dilaporkan</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Qty Rencana</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Qty Pembelian</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Resi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($r = $q->fetch_assoc()) {
                $convert   = convertDateDBtoIndo($r['tgl_laporan']);
                $bulan     = substr($convert, 2);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                $bln    = substr($r['tgl_dibuat'], 5,-3);
                $bln2   = substr($r['tgl_laporan'], 5,-3);
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td><?= ucwords($r['jenis']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;">
                        <?= ucwords($r['cabang']) ?>
                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=cabang&id_kategori=<?= $_GET["id_adminKey"]; ?>">
                            <?php if ($r['cabang'] == "Depok") { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Bogor?!')"></i>

                            <?php } else { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Depok?!')"></i>
                            <?php } ?>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <?= $bulan ?>
                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <?= $r['qty_anggaran'] ?>
                        <?php } ?>
                    </td>
                    <td><?= number_format($anggaran) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Belum Laporan") { ?>
                        -
                        <?php } else { ?>
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?>
                        <?php } ?>
                    </td>
                    <td><?= ucwords($r['pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <?= $r['qty_pembelian'] ?>
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($r['laporan'] == "Terverifikasi") { ?>
                        <span class="badge bg-success"><?= $r["laporan"] ?></span>

                        <?php } else { ?>
                        <span class="badge bg-danger"><?= $r["laporan"] ?></span>
                        <?php } ?>
                    </td>
                    <td><?= number_format($terpakai) ?></td>
                    <td>
                        <?php if ($terpakai > 0) { ?>
                        <?= number_format($sisa) ?>

                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <a href="" data-bs-toggle="modal" data-bs-target="#program_<?= $r["id"] ?>"><i
                                class="bi bi-pencil" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Anggaran"></i></a>&nbsp;|

                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#laporan_<?= $r["id"] ?>"><i
                                class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Laporan"></i></a>&nbsp;|

                        <a href="../models/forms/hapus_laporan/hapus_lapManagement.php?id_dataManagement=<?= $_GET["id_adminKey"]; ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln2 ?>"
                            onclick="return confirm('Yakin Laporan ini mau dihapus?!')" data-bs-toggle=" modal"
                            data-bs-target="#hapus_<?= $r["id"] ?>"><i class="bi bi-trash" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hapus Laporan"></i></a>&nbsp;|

                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=laporan&id_kategori=<?= $_GET["id_adminKey"]; ?>">
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ubah status laporan?!')"></i>
                        </a>
                        <?php } else { ?>
                        <a href="../models/forms/hapus_pengajuan/hapus_management.php?id_dataManagement=<?= $_GET["id_adminKey"]; ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i class="bi bi-trash"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Anggaran"></i></a>
                        <?php } ?>
                    </td>

                    <?php include '../modal/management/edit_management.php'; ?>

                    <?php if ($r["laporan"] == "Terverifikasi") { ?>

                    <?php include '../modal/management/edit_lapManagement.php'; ?>

                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                    <th></th>
                    <th colspan="2">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } elseif ($key_admin == "data_akun") { ?>
        <table id="tabel-database_akunEbudget" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Id Pengurus</th>
                    <th scope="col">Nama Pengurus</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Team</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= $r['id_pengurus'] ?></td>
                    <td><?= ucwords($r['pemegang']) ?></td>
                    <td>
                        <?= ucwords($r['cabang']) ?>
                        <?php if ($r["id_pengurus"] == "facebook_depok" || $r["id_pengurus"] == "facebook_bogor" || $r["id_pengurus"] == "instagram") { ?>
                        <a
                            href="../models/base_admin/switchCabang.php?id_unik=<?= $r['nomor_id'] ?>&idCabang=akunMedia&namaAkun=<?= $r['nama_akun'] ?>">
                            <?php if ($r['cabang'] == "Depok") { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Bogor?!')"></i>

                            <?php } else { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Depok?!')"></i>
                            <?php } ?>
                        </a>
                        <?php } ?>
                    </td>
                    <td><?= $r['nama_akun'] ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td><?= ucwords($r['team']) ?></td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#akun_<?= $r["id"] ?>"><i class="bi bi-pencil"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>&nbsp;|&nbsp;
                        <a href="../models/base_admin/hapus_akunMedia.php?id_unik=<?= $r['id'] ?>"><i
                                class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"
                                onclick="return confirm('Yakin data ini mau dihapus?!')"></i></a>
                    </td>
                </tr>
                <?php include '../modal/mediaSosial/akun.php'; ?>
                <?php } ?>
            </tbody>
        </table>

        <?php } elseif ($key_admin == "income") { ?>
        <table id="tabel-data_adminDatabaseMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Status</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Income</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } elseif ($key_admin == "incometanparesi") { ?>
        <table id="tabel-data_adminDatabaseMedia2" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Status</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Income</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } elseif ($key_admin == "income_media") { ?>
        <table id="tabel-data_databaseIncomeMedia2" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col" class="search">Dipegang Oleh</th>
                    <th scope="col">Menu</th>
                    <th scope="col" class="search">Nama Akun</th>
                    <th scope="col" class="search">Status</th>
                    <th scope="col" class="search">Periode</th>
                    <th scope="col" class="search">Nama Donatur</th>
                    <th scope="col" class="search">Tanggal Transfer</th>
                    <th scope="col" class="search">Bank</th>
                    <th scope="col">Jumlah Income</th>
                </tr>
            </thead>
            <tbody>
                <!-- List Data Menggunakan DataTable -->
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="9">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } elseif ($key_admin == "laporan_media") { ?>
        <table id="tabel-database_lapMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Pengurus</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Akun</th>
                    <th scope="col">Tgl Laporan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Total Serangan</th>
                    <th scope="col">Respon</th>
                    <th scope="col">Minta Norek</th>
                    <th scope="col">Tanya Alamat</th>
                    <th scope="col">Insya Allah</th>
                    <th scope="col">B. Bisa Bantu</th>
                    <th scope="col">Tidak Respon</th>
                    <th scope="col">Donatur</th>
                    <th scope="col">Total Income</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="6">Total</th>
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
            </tfoot>
        </table>

        <?php } elseif ($key_admin == "logActivity") { ?>
        <table id="tabel-adminLog" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">Menu</th>
                    <th scope="col" class="search">Nama</th>
                    <th scope="col" class="search">Posisi</th>
                    <th scope="col">Ip Address</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Pukul</th>
                    <th scope="col">Riwayat</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <?php } else { ?>
        <table id="tabel-database_laporan" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Dilaporkan</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Resi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($r = $q->fetch_assoc()) {
                $convert   = convertDateDBtoIndo($r['tgl_laporan']);
                $bulan     = substr($convert, 2);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                $bln       = substr($r['tgl_dibuat'], 5,-3);
                $bln2      = substr($r['tgl_laporan'], 5,-3);
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;">
                        <?= ucwords($r['cabang']) ?>
                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=cabang&id_kategori=<?= $_GET["id_adminKey"]; ?>">
                            <?php if ($r['cabang'] == "Depok") { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Bogor?!')"></i>

                            <?php } else { ?>
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ganti Cabang ke Depok?!')"></i>
                            <?php } ?>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <?= $bulan ?>
                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td><?= number_format($anggaran) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["laporan"] == "Belum Laporan") { ?>
                        -
                        <?php } else { ?>
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?>
                        <?php } ?>
                    </td>
                    <td><?= ucwords($r['pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r['laporan'] == "Terverifikasi") { ?>
                        <span class="badge bg-success"><?= $r["laporan"] ?></span>

                        <?php } else { ?>
                        <span class="badge bg-danger"><?= $r["laporan"] ?></span>
                        <?php } ?>
                    </td>
                    <td><?= number_format($terpakai) ?></td>
                    <td>
                        <?php if ($terpakai > 0) { ?>
                        <?= number_format($sisa) ?>

                        <?php } else { ?>
                        -
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <a href="" data-bs-toggle="modal" data-bs-target="#program_<?= $r["id"] ?>"><i
                                class="bi bi-pencil" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Anggaran"></i></a>&nbsp;|

                        <?php if ($r["laporan"] == "Terverifikasi") { ?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#laporan_<?= $r["id"] ?>"><i
                                class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Laporan"></i></a>&nbsp;|

                        <a href="../models/forms/hapus_laporan/hapus_lapManagement.php?id_dataManagement=<?= $_GET["id_adminKey"]; ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln2 ?>"
                            onclick="return confirm('Yakin Laporan ini mau dihapus?!')" data-bs-toggle=" modal"
                            data-bs-target="#hapus_<?= $r["id"] ?>"><i class="bi bi-trash" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hapus Laporan"></i></a>&nbsp;|

                        <a
                            href="../models/base_admin/switchLaporan.php?id_unik=<?= $r['id'] ?>&idSwitch=laporan&id_kategori=<?= $_GET["id_adminKey"]; ?>">
                            <i class="bi bi-arrow-left-right" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="ganti" onclick="return confirm('Ubah status laporan?!')"></i>
                        </a>
                        <?php } else { ?>
                        <a href="../models/forms/hapus_pengajuan/hapus_management.php?id_dataManagement=<?= $_GET["id_adminKey"]; ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i class="bi bi-trash"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Anggaran"></i></a>
                        <?php } ?>
                    </td>

                    <?php include '../modal/management/edit_management.php'; ?>

                    <?php if ($r["laporan"] == "Terverifikasi") { ?>

                    <?php include '../modal/management/edit_lapManagement.php'; ?>

                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>

            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <?php } ?>

    </div>
</div>