<div class="tab-pane fade show active profile-overview" id="profile-overview">

    <h5 class="card-title">Profile Details</h5>

    <div class="row">
        <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
        <div class="col-lg-9 col-md-8"><?= ucwords($nama) ?></div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 label ">UserName</div>
        <div class="col-lg-9 col-md-8"><?= $_SESSION["username"] ?></div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 label">Company</div>
        <div class="col-lg-9 col-md-8">Yayasan Alkirom Amanah</div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 label">Posisi</div>
        <div class="col-lg-9 col-md-8"><?= $_SESSION["posisi"] ?></div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 label">Cabang</div>
        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <div class="col-lg-9 col-md-8">Pusat</div>
        <?php } else { ?>
        <div class="col-lg-9 col-md-8"><?= $_SESSION["cabang"] ?></div>
        <?php } ?>

    </div>
</div>