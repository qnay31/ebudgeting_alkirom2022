document.addEventListener("DOMContentLoaded", function() {
    var splide = new Splide( '#splide', {
        speed: number = 2000,
        perPage  : 3,
        gap        : '1.4rem',
        breakpoints: {
            765: {
                perPage: 1,
            },
        }
    } );
    
    splide.mount();
});

$('.dropdown-menu.ketua-yayasan').on('click', function (e) {
    e.stopPropagation();
});

$("#management").change(function() {
    // variabel dari nilai combo box 
    var management = $("#management").val();
    // console.log(id_kendaraan);
    // Menggunakan ajax untuk mengirim dan dan menerima data dari server
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../list_management.php",
        data: "management=" + management,
        success: function(data) {
            $("#bagian").html(data);
            // $("#tanggal").html(data);
        }
    });
});

$("#logistikGedung").change(function() {
    // variabel dari nilai combo box 
    var logistikGedung = $("#logistikGedung").val();
    // console.log(id_kendaraan);
    // Menggunakan ajax untuk mengirim dan dan menerima data dari server
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../list_logistik.php",
        data: "logistikGedung=" + logistikGedung,
        success: function(data) {
            $("#cabang").html(data);
            // $("#tanggal").html(data);
        }
    });
});

$(".namaChange").change(function() {
    // variabel dari nilai combo box 
    var id = $(this).data("id")
    var namaChange = $(".name"+ id).val();
    // console.log(id_kendaraan);
    // Menggunakan ajax untuk mengirim dan dan menerima data dari server
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../list_ID.php",
        data: "namaChange=" + namaChange,
        success: function(data) {
            $("#akun_" + id +" "+ ".changeID" + id).html(data);
        }
    });
});

$("#menuProgram").change(function () {
    var menuProgram = $("#menuProgram").val();

    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../list_program.php",
        data: "menuProgram=" + menuProgram,
        success: function (data) {
            $("#listProgram").html(data);
            // $("#tanggal").html(data);
        },
    });
});

$(document).on('change', '.file-input', function() {

    var filesCount = $(this)[0].files.length;

    var textbox = $(this).prev();

    if (filesCount === 1) {
        var fileName = $(this).val().split('\\').pop();
        textbox.text(fileName);
    } else {
        textbox.text(filesCount + ' files selected');
    }



    if (typeof(FileReader) != "undefined") {
        var dvPreview = $("#divImageMediaPreview");
        dvPreview.html("");
        $($(this)[0].files).each(function() {
            var file = $(this);
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = $("<img />");
                img.attr("style", "width: 100%; padding: 10px");
                img.attr("src", e.target.result);
                dvPreview.append(img);
            }
            reader.readAsDataURL(file[0]);
        });
    } else {
        alert("This browser does not support HTML5 FileReader.");
    }
});

$(document).ready(function() {

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function() {
        readURL(this);
    });

    $(".upload-button").on('click', function() {
        $(".file-upload").click();
    });
});

$(".toggle-password").click(function () {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// validasi program, logistik, humas, edit
function validasi_input(form) {

    //validasi dimulai
    if (form.program.value == "") {
        alert("Pilihan ini tidak boleh kosong!");
        form.program.focus();
        return (false);

    } else if (form.tanggal.value == "") {
        alert("Tanggal Pengajuan Harus Diisi!");
        form.tanggal.focus();
        return (false);
    } else if (form.deskripsi.value == "") {
        alert("Perencanaan Harus Diisi!");
        form.deskripsi.focus();
        return (false);
    } else if (form.anggaran.value == "") {
        alert("Alokasi Dana Harus Diisi!");
        form.anggaran.focus();
        return (false);
    }
}

// validasi laporan program, logistik, humas, edit
function validasi_input2(form) {

    //validasi dimulai
    if (form.tanggal_laporan.value == "") {
        alert("Tanggal Laporan Harus Diisi!");
        form.tanggal_laporan.focus();
        return (false);
    } else if (form.deskripsi_laporan.value == "") {
        alert("Deskripsi Laporan Harus Diisi!");
        form.deskripsi_laporan.focus();
        return (false);
    } else if (form.dana_laporan.value == "") {
        alert("Pemakaian Dana Harus Diisi!");
        form.dana_laporan.focus();
        return (false);
    }
}

// validasi daily
function validasi_input3(form) {
    var minchars = 5;
    //validasi dimulai
    if (form.tanggal.value == "") {
        alert("Tanggal Aktivitas Harus Diisi!");
        form.tanggal.focus();
        return (false);
    } else if (form.aktivitas.value == "") {
        alert("Aktivitas Harus Diisi!");
        form.aktivitas.focus();
        return (false);
    } else if (form.aktivitas.value.length < minchars) {
        alert("Aktivitas Minimal 5 Huruf!");
        form.aktivitas.focus();
        return (false);
    } else if (form.deskripsi.value == "") {
        alert("Deskripsi Harus Diisi!");
        form.deskripsi.focus();
        return (false);
    }
}

// validasi input
function validasi_user(form) {
    var minchars = 5;
    //validasi dimulai
    if (form.username.value == "") {
        alert("Username TIdak Boleh Kosong!");
        form.username.focus();
        return (false);
    } else if (form.username.value.length < minchars) {
        alert("Username Minimal 5 Karakter!");
        form.username.focus();
        return (false);
    }
}

function validasi_ubahpw(form) {
    var minchars = 5;
    //validasi dimulai
    if (form.password_lama.value == "") {
        alert("Password Lama Harus Diisi!");
        form.password_lama.focus();
        return (false);
    } else if (form.password_baru.value == "") {
        alert("Password Baru Harus Diisi!");
        form.password_baru.focus();
        return (false);
    } else if (form.password_baru.value.length < minchars) {
        alert("Password Baru Minimal 5 Huruf!");
        form.password_baru.focus();
        return (false);
    } else if (form.konfirmasi_password.value == "") {
        alert("Konfirmasi Password Harus Diisi!");
        form.konfirmasi_password.focus();
        return (false);
    }

}

// validasi profil
function validasi_profil(form) {
    //validasi dimulai
    if (form.nama.value == "") {
        alert("Nama TIdak Boleh Kosong!");
        form.nama.focus();
        return (false);
    } else if (form.username.value == "") {
        alert("Username Tidak Boleh Kosong!");
        form.username.focus();
        return (false);
    }
}

// validasi pemasukan
function validasi_income(form) {
    //validasi dimulai
    if (form.tanggal.value == "") {
        alert("Tanggal Harus Diisi!");
        form.tanggal.focus();
        return (false);
    } else if (form.lokasi.value == "") {
        alert("Lokasi Pengambilan Harus Diisi!");
        form.lokasi.focus();
        return (false);
    } else if (form.jumlah.value == "") {
        alert("Jumlah Pengambilan Harus Diisi!");
        form.jumlah.focus();
        return (false);
    } else if (form.income.value == "") {
        alert("Income Harus Diisi!");
        form.income.focus();
        return (false);
    }
}

// validasi huruf dan angka
$(document).ready(function () {

    $('#alpabet').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9 /,-.& )(]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#alpabet2').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9 /,-.& )(]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#alpabet3').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9_-]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

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

    $('#password-field3').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#alpabet_user').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9_-]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });
})

$("#alpabet_user").on({
    keydown: function (e) {
        if (e.which === 32)
            return false;
    },
    keyup: function () {
        this.value = this.value.toLowerCase();
    },
    change: function () {
        this.value = this.value.replace(/\s/g, "");

    }
})

// no hp

function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : e.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
    return true;
}

// rupiah
var rupiah = document.getElementById('rupiah');
rupiah.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah2 = document.getElementById('rupiah2');
rupiah2.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah2.value = formatRupiah2(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah2(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah3 = document.getElementById('rupiah3');
rupiah3.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah3.value = formatRupiah3(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah3(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah4 = document.getElementById('rupiah4');
rupiah4.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah4.value = formatRupiah4(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah4(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah5 = document.getElementById('rupiah5');
rupiah5.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah5.value = formatRupiah5(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah5(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah6 = document.getElementById('rupiah6');
rupiah6.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah6.value = formatRupiah6(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah6(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah7 = document.getElementById('rupiah7');
rupiah7.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah7.value = formatRupiah7(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah7(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah8 = document.getElementById('rupiah8');
rupiah8.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah8.value = formatRupiah8(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah8(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}

var rupiah9 = document.getElementById('rupiah9');
rupiah9.addEventListener('keyup', function () {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah9.value = formatRupiah9(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah9(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}