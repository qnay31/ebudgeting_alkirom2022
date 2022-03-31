    // hide unhide password 
    $(".toggle-password").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    // validasi input
    function validasi_input(form) {

        //validasi dimulai
        if (form.username.value == "") {
            alert("Username Harus Diisi!");
            form.username.focus();
            return (false);
        } else if (form.password.value == "") {
            alert("Password Harus Diisi!");
            form.password.focus();
            return (false);
        }

    }

    // validasi input
    function validasi_input2(form) {
        var minchars = 5;
        //validasi dimulai
        if (form.nama.value == "") {
            alert("Nama Lengkap Harus Diisi!");
            form.nama.focus();
            return (false);

        } else if (form.media.selectedIndex < 1) {
            alert("Media Pilih Salah Satu!");
            form.media.focus();
            return (false);
   
        } else if (form.username.value == "") {
            alert("Username Harus Diisi!");
            form.username.focus();
            return (false);

        } else if (form.username.value.length < minchars) {
            alert("Username Minimal 5 Huruf!");
            form.username.focus();
            return (false);

        } else if (form.password.value == "") {
            alert("Password Harus Diisi!");
            form.password.focus();
            return (false);
            
        } else if (form.password2.value == "") {
            alert(" Konfirmasi Password Harus Diisi!");
            form.password2.focus();
            return (false);
        }

    }

    $(document).ready(function () {

        $('#password-field').keyup(function () {
            var $th = $(this);
            $th.val($th.val().replace(/[^a-zA-Z0-9]/g, function (str) {
                alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
                return '';
            }));
        });

        $('#password-field2').keyup(function () {
            var $th = $(this);
            $th.val($th.val().replace(/[^a-zA-Z0-9]/g, function (str) {
                alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
                return '';
            }));
        });

        $('#alpabet').keyup(function () {
            var $th = $(this);
            $th.val($th.val().replace(/[^a-zA-Z0-9 ]/g, function (str) {
                alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
                return '';
            }));
        });

        $('#alpabet2').keyup(function () {
            var $th = $(this);
            $th.val($th.val().replace(/[^a-zA-Z0-9_-]/g, function (str) {
                alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
                return '';
            }));
        });
    })

    $("#alpabet2").on({
        keydown: function(e) {
          if (e.which === 32)
            return false;
        },
        keyup: function(){
          this.value = this.value.toLowerCase();
        },
        change: function() {
          this.value = this.value.replace(/\s/g, "");
          
        }
      })
    