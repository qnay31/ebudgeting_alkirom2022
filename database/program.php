<?php
if ($_GET["id_database"] == "database_program") {
    if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") {

        if ($_GET["yatim"] == "binaan") {
            if ($_GET["id_periode"] == "") {
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Yatim Binaan' ORDER BY `tgl_pengajuan` DESC");
                $pProgram = "Global";
                
            } else {
                $periode = $_GET["id_periode"];
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Yatim Binaan' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
    
                $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Yatim Binaan' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
                
                $data = mysqli_fetch_assoc($q2);
                $convert   = convertDateDBtoIndo($data['tgl_pemakaian']);
                $pProgram     = substr($convert, 2, -5);
                // die(var_dump($q));
            }

        } elseif ($_GET["yatim"] == "luarBinaan") {
            if ($_GET["id_periode"] == "") {
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Yatim Luar Binaan' ORDER BY `tgl_pengajuan` DESC");
                $pProgram = "Global";
                
            } else {
                $periode = $_GET["id_periode"];
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Yatim Luar Binaan' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
    
                $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Yatim Luar Binaan' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
                
                $data = mysqli_fetch_assoc($q2);
                $convert   = convertDateDBtoIndo($data['tgl_pemakaian']);
                $pProgram     = substr($convert, 2, -5);
                // die(var_dump($q));
            }

        
        } elseif ($_GET["yatim"] == "santunanBulanan") {
            if ($_GET["id_periode"] == "") {
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Santunan Bulanan' ORDER BY `tgl_pengajuan` DESC");
                $pProgram = "Global";
                
            } else {
                $periode = $_GET["id_periode"];
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Santunan Bulanan' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
    
                $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND yatim = 'Santunan Bulanan' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
                
                $data = mysqli_fetch_assoc($q2);
                $convert   = convertDateDBtoIndo($data['tgl_pemakaian']);
                $pProgram     = substr($convert, 2, -5);
                // die(var_dump($q));
            }

        } elseif ($_GET["yatim"] == "pendidikanYatim") {
            if ($_GET["id_periode"] == "") {
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND program = 'Program Pendidikan Yatim' ORDER BY `tgl_pengajuan` DESC");
                $pProgram = "Global";
                
            } else {
                $periode = $_GET["id_periode"];
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND program = 'Program Pendidikan Yatim' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
    
                $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND program = 'Program Pendidikan Yatim' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
                
                $data = mysqli_fetch_assoc($q2);
                $convert   = convertDateDBtoIndo($data['tgl_pemakaian']);
                $pProgram     = substr($convert, 2, -5);
                // die(var_dump($q));
            }

        } else {
            if ($_GET["id_periode"] == "") {
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND program = 'Program Asrama Yatim' ORDER BY `tgl_pengajuan` DESC");
                $pProgram = "Global";
                
            } else {
                $periode = $_GET["id_periode"];
                $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND program = 'Program Asrama Yatim' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
    
                $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' AND program = 'Program Asrama Yatim' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
                $data = mysqli_fetch_assoc($q2);
                $convert   = convertDateDBtoIndo($data['tgl_pemakaian']);
                $pProgram     = substr($convert, 2, -5);
                // die(var_dump($q));
            }
        }
    
    } else {
        if ($_GET["id_periode"] == "") {
            $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE `cabang` = '$_SESSION[cabang]' AND laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");
            $s = $q->num_rows;
            $pProgram = "Global"; 

        } else {
            $periode = $_GET["id_periode"];
            $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE  `cabang` = '$_SESSION[cabang]' AND laporan = 'Terverifikasi' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");

            $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE  `cabang` = '$_SESSION[cabang]' AND laporan = 'Terverifikasi' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
            
            $data = mysqli_fetch_assoc($q2);
            $convert   = convertDateDBtoIndo($data['tgl_pemakaian']);
            $pProgram     = substr($convert, 2, -5); 
        }
    }
} else {
    if ($_GET["id_periode"] == "") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");
        $pProgram = "Global"; 

    } else {
        $periode = $_GET["id_periode"];
        $q  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE laporan = 'Terverifikasi' AND laporan = 'Terverifikasi' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");

        $q2  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE laporan = 'Terverifikasi' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC");
        
        $data = mysqli_fetch_assoc($q2);
        $convert   = convertDateDBtoIndo($data['tgl_pemakaian']);
        $pProgram     = substr($convert, 2, -5); 
    }
}

// die(var_dump($s));
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>

                <?php if ($_GET["id_database"] == "database_program") { ?>
                <li class="breadcrumb-item active">Program</li>

                <?php } else { ?>
                <li class="breadcrumb-item active">PaudQu El-ZamZam</li>
                <?php } ?>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">

                <?php if ($_GET["id_database"] == "database_program" && $_GET["yatim"] == "") { ?>

                <?php } else { ?>
                <!-- periode -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/sub-periode.php'; ?>
                    </div>
                </div>
                <?php } ?>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/program/sub-program.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->