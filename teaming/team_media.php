<?php

if (isset($_POST["createTeam"]) ) {
    $link = $_SESSION["username"];
    if(createTeam($_POST) > 0 ) {
        echo "<script>
                alert('Tim Berhasil dibuat');
                document.location.href = '$link.php?idTeam=teamMedia';
            </script>";
            
    } 
        else {
        echo mysqli_error($conn);
    }


}

if (isset($_POST["createListTeam"]) ) {
    $link = $_SESSION["username"];
    if(createListTeam($_POST) > 0 ) {
        echo "<script>
                alert('Tim Berhasil dibuat');
                document.location.href = '$link.php?idTeam=listMedia';
            </script>";
            
    } 
        else {
        echo mysqli_error($conn);
    }


}

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Team Media</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Team Media</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/team/createNewTeam.php'; ?>
                    </div>
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->