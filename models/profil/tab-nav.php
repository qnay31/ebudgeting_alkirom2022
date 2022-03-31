<li class="nav-item">
    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detail</button>
</li>

<?php if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram") { ?>
<li class="nav-item">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah Akun
    </button>
</li>

<?php } else { ?>
<li class="nav-item">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah Profil
    </button>
</li>
<?php } ?>


<li class="nav-item">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Password</button>
</li>