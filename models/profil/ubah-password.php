<div class="tab-pane fade pt-3" id="profile-change-password">
    <!-- Change Password Form -->
    <form action="" method="post" onsubmit="return validasi_ubahpw(this)" name="ubah_pw">
        <div class="row mb-3 pw">
            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password Lama</label>
            <div class="col-md-8 col-lg-9">
                <span toggle="#password-field" class="fa fa-fw fa-eye-slash toggle-password" maxlength='20'></span>
                <input type="password" class="form-control form-control-user" name="password_lama" id="password-field"
                    placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="row mb-3 pw">
            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
            <div class="col-md-8 col-lg-9">
                <span toggle="#password-field2" class="fa fa-fw fa-eye-slash toggle-password" maxlength='20'></span>
                <input type="password" class="form-control form-control-user" name="password_baru" id="password-field2"
                    placeholder="Password Baru (maks. 20 karakter)" aria-label="Password"
                    aria-describedby="basic-addon1" onKeyUp='Hitung()' maxlength='20'>
            </div>
        </div>

        <div class="row mb-3 pw">
            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Konfirmasi Password</label>
            <div class="col-md-8 col-lg-9">
                <span toggle="#password-field3" class="fa fa-fw fa-eye-slash toggle-password" maxlength='20'></span>
                <input type="password" class="form-control form-control-user" name="konfirmasi_password"
                    id="password-field3" placeholder="Konfirmasi Password (maks. 20 karakter)" aria-label="Password"
                    aria-describedby="basic-addon1" onKeyUp='Hitung2()' maxlength='20'>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" name="ubah_password" class="btn btn-primary">Ubah Password</button>
        </div>
    </form><!-- End Change Password Form -->
</div>