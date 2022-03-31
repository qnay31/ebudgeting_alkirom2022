<?php
if ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "kepala_cabang") {

    if ($_SESSION["cabang"] == "Depok") {
        if ($_SESSION["username"] == "facebook_pusat") {
            $team = 'Facebook Pusat';

        } elseif ($_SESSION["username"] == "admin_facebook") {
            $team = 'Facebook Taman';
        } else {
            $teamP = 'Facebook Pusat';
            $teamT = 'Facebook Taman';
        }
        
    } else {
        $team = 'Facebook Bogor';
    }
    
} elseif ($_SESSION["id_pengurus"] == "manager_instagram") {
    $teamP = 'Instagram Bojong';
    $teamT = 'Instagram Taman';
    $teamM = 'Instagram Meruyung';

} else {
    $fbP = 'Facebook Pusat';
    $fbT = 'Facebook Taman';
    $fbB = 'Facebook Bogor';
    $inP = 'Instagram Bojong';
    $inT = 'Instagram Taman';
    $inM = 'Instagram Meruyung';
}

if ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "kepala_cabang") {
    if ($_SESSION["cabang"] == "Depok") {
        if ($_SESSION["username"] == "facebook_pusat") {
            $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$team'");

        } elseif ($_SESSION["username"] == "admin_facebook") {
            $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$team'");

        } else {
            $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$teamP' OR team = '$teamT'");
        }
        
    } else {
        $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$team'");
    }
    
    $nGroup = $qGroup -> num_rows;
    
} elseif ($_SESSION["id_pengurus"] == "manager_instagram") {
    if ($_SESSION["username"] == "instagram_taman") {
        $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$teamT'");

    } elseif ($_SESSION["username"] == "instagram_meruyung") {
        $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$teamM'");

    } elseif ($_SESSION["username"] == "instagram_bojong") {
        $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$teamP'");

    } else {
        $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$teamP' OR team = '$teamT' OR team = '$teamM'");
    }
    $nGroup = $qGroup -> num_rows;
    
} else {
    $qGroup = mysqli_query($conn, "SELECT team FROM data_akun WHERE team = '$fbB' OR team = '$fbP' OR team = '$fbT' OR team = '$inP' OR team = '$inT' OR team = '$inM'");
    $nGroup = $qGroup -> num_rows;
}



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