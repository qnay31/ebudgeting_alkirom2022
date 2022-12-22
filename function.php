<?php

date_default_timezone_set('Asia/Jakarta');
$conn = mysqli_connect("localhost", "root", "", "eb_v1");

// ip
function get_client_ip()
{
	$ipaddress = '';
	if (getenv('HTTP_CLIENT_IP'))
		$ipaddress = getenv('HTTP_CLIENT_IP');
	else if (getenv('HTTP_X_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	else if (getenv('HTTP_X_FORWARDED'))
		$ipaddress = getenv('HTTP_X_FORWARDED');
	else if (getenv('HTTP_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	else if (getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
	else if (getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress;
}

function convertDateDBtoIndo($string)
{
	// contoh : 2019-01-30

	$bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

	$tanggal 	= explode("-", $string)[2];
	$bulan 		= explode("-", $string)[1];
	$tahun 		= explode("-", $string)[0];

	return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun;
}

function RemoveSpecialChar($nom_acak)
{

	// Using str_replace() function 
	// to replace the word 
	$res = str_replace(array("#", "."), ' ', $nom_acak);


	// Returning the result 
	return $res;
}

function resizeImage($resourceType,$image_width,$image_height) {
    $resizeWidth = 225;
    $resizeHeight = 225;
    $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
    return $imageLayer;
}

function upload() {
	$file 		= $_FILES['gambar']['name'];
	$ukuran 	= $_FILES['gambar']['size'];
	$error 		= $_FILES['gambar']['error'];
	$tmpName 	= $_FILES['gambar']['tmp_name'];

	$uploadPath = '../img/profil/';

	
	// cek gambat

	if ($error === 4) {
		return false;
	}

	// cek gambar/bukan
	$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $file); 
	$ekstensigambar = strtolower(end($ekstensigambar));

	if (!in_array($ekstensigambar, $ekstensigambarvalid) ) {
		echo "<script>

		alert('yang di upload bukan gambar');

			</script>";
			return false;
		
	}

	// cek ukuran terlalu bessar
	if ($ukuran>10000000) {
		echo "<script>

		alert('ukuran terlalu besar');

			</script>";
			return false;
		
	}

	$sourceProperties = getimagesize($tmpName);
	$uploadImageType = $sourceProperties[2];
	$sourceImageWidth = $sourceProperties[0];
	$sourceImageHeight = $sourceProperties[1];

	// generate nama batu gambar
	$namagambarbaru = uniqid();
	$namagambarbaru .='.';
	$namagambarbaru .= $ekstensigambar;

	switch ($uploadImageType) {
		case IMAGETYPE_JPEG:
			$resourceType = imagecreatefromjpeg($tmpName); 
			$imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
			imagejpeg($imageLayer,$uploadPath."thump_".$namagambarbaru);
			break;

		case IMAGETYPE_JPG:
			$resourceType = imagecreatefromjpg($tmpName); 
			$imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
			imagejpg($imageLayer,$uploadPath."thump_".$namagambarbaru);
			break;

		case IMAGETYPE_PNG:
			$resourceType = imagecreatefrompng($tmpName); 
			$imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
			imagepng($imageLayer,$uploadPath."thump_".$namagambarbaru);
			break;
	}
	
	// die(var_dump($sourceImageHeight));

	 // siap di upload
	move_uploaded_file($tmpName,  $uploadPath . $namagambarbaru);
	

	return $namagambarbaru;

}

function input_pengurus($data)
{
	global $conn;

	$ambil_nama     = htmlspecialchars($data["nama"]);
	$nama     		= ucwords($data["nama"]);
	$id_pengurus    = $data["media"];
	$cabang    		= $data["cabang"];
	$posisi    		= $data["posisi"];
	$username     	= htmlspecialchars($data["username"]);
	$password		= mysqli_real_escape_string($conn, $data["password"]);
	$password2		= mysqli_real_escape_string($conn, $data["password2"]);
	$ip     		= get_client_ip();
	$date   		= date("Y-m-d H:i:s");
	$pukul   		= date("H:i:s");

	// die(var_dump($anggaran));

	// cek nama
	$query = mysqli_query($conn, "SELECT nama FROM akun_pengurus WHERE nama = '$nama' ");

	if (mysqli_fetch_assoc($query)) {

		echo "<script>
			alert('Nama Sudah Terdaftar');
		</script>";

		return false;
	}

	// cek username
	$query2 = mysqli_query($conn, "SELECT username FROM akun_pengurus WHERE username = '$username' ");

	if (mysqli_fetch_assoc($query2)) {

		echo "<script>
			alert('Username Sudah Terdaftar');
		</script>";

		return false;
	}

	// cek password
	if ($password !== $password2) {

		echo "<script>
			alert('Konfirmasi Password Tidak Sama');
		</script>";

		return false;
	}

	// enkripsi Password 

	$passwor_enc = password_hash($password, PASSWORD_DEFAULT);

	// link pengurus
	$halaman    = "<?php include '../homepage.php' ?>";
$link_pengurus = $username . ".php";

$file = fopen("admin/" . $link_pengurus, "w");
echo fwrite($file, $halaman);


// input data ke database
$result = mysqli_query($conn, "INSERT INTO akun_pengurus VALUES('', '$id_pengurus', '$nama', '$cabang', '$username',
'$passwor_enc', 'profil.png', '$posisi')");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$nama', '$posisi', '$ip',
'$date', '$nama Telah Membuat Akun Baru $posisi')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// tambah akun
function tambah_akun($data)
{
global $conn;

$id_pengurus = $data["link"];
$id = htmlspecialchars($data["id"]);
$nama = ucwords($data["nama"]);
$posisi = $data["posisi"];
$cabang = $data["cabang"];
$akunName = htmlspecialchars(mysqli_real_escape_string($conn, $data["akunName"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// die(var_dump($anggaran));

// cek nama
$query = mysqli_query($conn, "SELECT nama_akun FROM data_akun WHERE nama_akun = '$akunName' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Nama Akun Sudah Terdaftar');
</script>";

return false;
}

// input data ke database
$result = mysqli_query($conn, "INSERT INTO data_akun VALUES('', '$id_pengurus', '$id', '$nama', '$akunName',
'$_SESSION[cabang]', '$posisi', '')");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$nama', '$posisi', '$ip',
'$date', '$nama Telah Membuat Akun media sosial dengan nama akun $akunName')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit akun
function edit_akun($data)
{
global $conn;

$id = htmlspecialchars($data["key"]);
$akun = htmlspecialchars(mysqli_real_escape_string($conn, $data["akun"]));
$akunName = htmlspecialchars(mysqli_real_escape_string($conn, $data["akunName"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$query = mysqli_query($conn, "SELECT nama_akun FROM data_akun WHERE nama_akun = '$akunName' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Nama Akun Sudah Terdaftar');
</script>";

return false;
}

// update_target
$update = mysqli_query($conn, "UPDATE `income_media` SET
`nama_akun` ='$akunName'
WHERE nomor_id = '$id' AND nama_akun = '$akun' ");

$update2 = mysqli_query($conn, "UPDATE `laporan_media` SET
`nama_akun` ='$akunName'
WHERE nomor_id = '$id' AND nama_akun = '$akun' ");

$update3 = mysqli_query($conn, "UPDATE `data_akun` SET
`nama_akun` ='$akunName'
WHERE nomor_id = '$id' AND nama_akun = '$akun' ");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengganti nama akunnya')");

// die(var_dump($result));
return mysqli_affected_rows($conn);
}

// input income media sosial
function input_incomeMedia($data)
{
global $conn;

$id = $data["id"];
$link = $data["link"];
$team = $data["team"];
$akun = htmlspecialchars(mysqli_real_escape_string($conn, $data["akun"]));
$namaDonatur = htmlspecialchars(mysqli_real_escape_string($conn, $data["namaDonatur"]));
$tanggal = $data["tanggal"];
$jam = $data["jam"];
$bank = $data["bank"];
$nom_acak = htmlspecialchars($data["transfer"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

if ($link == "facebook") {
$result = mysqli_query($conn, "INSERT INTO income_media VALUES('', 'facebook_depok', '$id', '$_SESSION[nama]',
'$akun', '$_SESSION[cabang]', '$namaDonatur', '$tanggal', '$jam', '$bank', '$income', 'Menunggu Verifikasi', '$team')");

} else {
$result = mysqli_query($conn, "INSERT INTO income_media VALUES('', '$link', '$id', '$_SESSION[nama]',
'$akun', '$_SESSION[cabang]', '$namaDonatur', '$tanggal', '$jam', '$bank', '$income', 'Menunggu Verifikasi', '$team')");

$today = date('d-m-Y', strtotime($tanggal));

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menginput income akun $akun tanggal $today')");
}

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit income media sosial
function edit_incomeMedia($data)
{
global $conn;

$id = htmlspecialchars($data["id_unik"]);
$akun = htmlspecialchars(mysqli_real_escape_string($conn, $data["akun"]));
$namaDonatur = htmlspecialchars(mysqli_real_escape_string($conn, $data["namaDonatur"]));
$oldTanggal = $data["oldTanggal"];
$tanggal = $data["tanggal"];
$jam = $data["jam"];
$bank = $data["bank"];
$nom_acak = htmlspecialchars($data["transfer"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web" || $_SESSION["id_pengurus"] == "kepala_income") {
if ($oldTanggal == $tanggal) {
echo "<script>
alert('Tidak ada data yang diubah');
</script>";

return false;
}
} else {

$today = date('d-m-Y', strtotime($tanggal));
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah income akun $akun pada tanggal $today')");

}

// die(var_dump($program));

// update_target
$update = mysqli_query($conn, "UPDATE `income_media` SET
`nama_donatur` ='$namaDonatur',
`tanggal_tf` ='$tanggal',
`jam_tf`= '$jam',
`bank`= '$bank',
`jumlah_tf` ='$income'
WHERE id = '$id' ");


// die(var_dump($update));
return mysqli_affected_rows($conn);

}

// input laporan media sosial
function laporan_akun($data)
{
global $conn;

$id = $data["id"];
$link = $data["link"];
$team = $data["team"];
$nama = htmlspecialchars($data["nama"]);
$akun = htmlspecialchars(mysqli_real_escape_string($conn, $data["akun"]));
$tanggal = $data["tanggal"];

if ($link == "instagram") {
$t_dataPengikut = htmlspecialchars($data["dataPengikut"]);
$a_dataPengikut = RemoveSpecialChar($t_dataPengikut);
$dataPengikut = str_replace(' ', '', $a_dataPengikut);

$t_dataPengikutBaru = htmlspecialchars($data["dataPengikutBaru"]);
$a_dataPengikutBaru = RemoveSpecialChar($t_dataPengikutBaru);
$dataPengikutBaru = str_replace(' ', '', $a_dataPengikutBaru);

$t_dataMengikuti = htmlspecialchars($data["dataMengikuti"]);
$a_dataMengikuti = RemoveSpecialChar($t_dataMengikuti);
$dataMengikuti = str_replace(' ', '', $a_dataMengikuti);

$t_dataMengikutiBaru = htmlspecialchars($data["dataMengikutiBaru"]);
$a_dataMengikutiBaru = RemoveSpecialChar($t_dataMengikutiBaru);
$dataMengikutiBaru = str_replace(' ', '', $a_dataMengikutiBaru);

} else {
$t_dataTeman = htmlspecialchars($data["dataTeman"]);
$a_dataTeman = RemoveSpecialChar($t_dataTeman);
$dataTeman = str_replace(' ', '', $a_dataTeman);

$t_dataTemanBaru = htmlspecialchars($data["dataTemanBaru"]);
$a_dataTemanBaru = RemoveSpecialChar($t_dataTemanBaru);
$dataTemanBaru = str_replace(' ', '', $a_dataTemanBaru);

$keterangan = htmlspecialchars($data["kTeman"]);

$t_temanAdd = htmlspecialchars($data["temanAdd"]);
$a_temanAdd = RemoveSpecialChar($t_temanAdd);
$temanAdd = str_replace(' ', '', $a_temanAdd);
}

$t_serangan = htmlspecialchars($data["totalSerangan"]);
$a_serangan = RemoveSpecialChar($t_serangan);
$serangan = str_replace(' ', '', $a_serangan);

$t_donatur = htmlspecialchars($data["donatur"]);
$a_donatur = RemoveSpecialChar($t_donatur);
$donatur = str_replace(' ', '', $a_donatur);

$t_respon = htmlspecialchars($data["respon"]);
$a_respon = RemoveSpecialChar($t_respon);
$respon = str_replace(' ', '', $a_respon);

$t_alamat = htmlspecialchars($data["alamat"]);
$a_alamat = RemoveSpecialChar($t_alamat);
$alamat = str_replace(' ', '', $a_alamat);

$t_insya_allah = htmlspecialchars($data["insya_allah"]);
$a_insya_allah = RemoveSpecialChar($t_insya_allah);
$insya_allah = str_replace(' ', '', $a_insya_allah);

$t_bbBantu = htmlspecialchars($data["bbBantu"]);
$a_bbBantu = RemoveSpecialChar($t_bbBantu);
$bbBantu = str_replace(' ', '', $a_bbBantu);

$t_tRespon = htmlspecialchars($data["tRespon"]);
$a_tRespon = RemoveSpecialChar($t_tRespon);
$tRespon = str_replace(' ', '', $a_tRespon);

$t_norek = htmlspecialchars($data["norek"]);
$a_norek = RemoveSpecialChar($t_norek);
$norek = str_replace(' ', '', $a_norek);

$nom_acak = htmlspecialchars($data["income"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);

$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

$query = mysqli_query($conn, "SELECT * FROM laporan_media WHERE tgl_laporan = '$tanggal' AND nama_akun = '$akun' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Akun ini sebelumnya sudah dilaporkan pada tanggal yang dilaporkan');
</script>";

return false;
}

if ($keterangan == "Tambah Teman") {
$temanBaru = $dataTemanBaru - $dataTeman;
$result = mysqli_query($conn, "INSERT INTO laporan_media VALUES('', '$link', '$id', '$_SESSION[posisi]',
'$nama', '$akun', '$tanggal', '$keterangan', '$dataTemanBaru', '$temanAdd', '$temanBaru', '', '$serangan', '$donatur',
'$respon', '$alamat', '$insya_allah', '$norek', '$bbBantu', '$tRespon', '$income', '$team')");

} elseif ($keterangan == "Hapus Teman") {
$hapusTeman = $dataTemanBaru-$dataTeman;
$result = mysqli_query($conn, "INSERT INTO laporan_media VALUES('', '$link', '$id', '$_SESSION[posisi]',
'$nama', '$akun', '$tanggal', '$keterangan', '$dataTemanBaru', '', '', '$hapusTeman', '$serangan', '$donatur',
'$respon', '$alamat', '$insya_allah', '$norek', '$bbBantu', '$tRespon', '$income', '$team')");
// die(var_dump($result));
} else {
if ($link == "instagram") {
$qIg = mysqli_query($conn, "SELECT * FROM laporan_media WHERE nama_akun = '$akun' AND jumlahAdd = '$dataMengikuti'");
$dIg = $qIg->num_rows;

// die(var_dump($dIg));
if ($dIg > 0) {
$pengikutBatu = $dataPengikutBaru - $dataPengikut;
$mengikutiBaru = $dataMengikutiBaru - $dataMengikuti;
$result = mysqli_query($conn, "INSERT INTO laporan_media VALUES('', '$link', '$id', '$_SESSION[posisi]',
'$nama', '$akun', '$tanggal', '', '$dataPengikut', '$dataMengikuti', '$pengikutBatu', '$mengikutiBaru', '$serangan',
'$donatur', '$respon', '$alamat', '$insya_allah', '$norek', '$bbBantu', '$tRespon', '$income', '$team')");

} else {
$result = mysqli_query($conn, "INSERT INTO laporan_media VALUES('', '$link', '$id', '$_SESSION[posisi]',
'$nama', '$akun', '$tanggal', '', '$dataPengikut', '$dataMengikuti', '', '', '$serangan', '$donatur', '$respon',
'$alamat', '$insya_allah', '$norek', '$bbBantu', '$tRespon', '$income', '$team')");
}

} else {
$result = mysqli_query($conn, "INSERT INTO laporan_media VALUES('', '$link', '$id', '$_SESSION[posisi]',
'$nama', '$akun', '$tanggal', '', '$dataTeman', '', '', '', '$serangan', '$donatur', '$respon',
'$alamat', '$insya_allah', '$norek', '$bbBantu', '$tRespon', '$income', '$team')");
}

}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Melaporkan harian akun dari $akun')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit laporan akun
function edit_laporan_akun($data)
{
global $conn;

$id = $data["id_unik"];
$link = $data["link"];
$tanggal = $data["tanggal"];

$t_dataTeman = htmlspecialchars($data["dataTeman"]);
$a_dataTeman = RemoveSpecialChar($t_dataTeman);
$dataTeman = str_replace(' ', '', $a_dataTeman);

$t_dataTemanBaru = htmlspecialchars($data["dataTemanBaru"]);
$a_dataTemanBaru = RemoveSpecialChar($t_dataTemanBaru);
$dataTemanBaru = str_replace(' ', '', $a_dataTemanBaru);

$keterangan = htmlspecialchars($data["kTeman"]);

$t_temanAdd = htmlspecialchars($data["temanAdd"]);
$a_temanAdd = RemoveSpecialChar($t_temanAdd);
$temanAdd = str_replace(' ', '', $a_temanAdd);

$akun = htmlspecialchars(mysqli_real_escape_string($conn, $data["akun"]));
$t_serangan = htmlspecialchars($data["totalSerangan"]);
$a_serangan = RemoveSpecialChar($t_serangan);
$serangan = str_replace(' ', '', $a_serangan);

$t_donatur = htmlspecialchars($data["donatur"]);
$a_donatur = RemoveSpecialChar($t_donatur);
$donatur = str_replace(' ', '', $a_donatur);

$t_respon = htmlspecialchars($data["respon"]);
$a_respon = RemoveSpecialChar($t_respon);
$respon = str_replace(' ', '', $a_respon);

$t_alamat = htmlspecialchars($data["alamat"]);
$a_alamat = RemoveSpecialChar($t_alamat);
$alamat = str_replace(' ', '', $a_alamat);

$t_insya_allah = htmlspecialchars($data["insya_allah"]);
$a_insya_allah = RemoveSpecialChar($t_insya_allah);
$insya_allah = str_replace(' ', '', $a_insya_allah);

$t_bbBantu = htmlspecialchars($data["bbBantu"]);
$a_bbBantu = RemoveSpecialChar($t_bbBantu);
$bbBantu = str_replace(' ', '', $a_bbBantu);

$t_tRespon = htmlspecialchars($data["tRespon"]);
$a_tRespon = RemoveSpecialChar($t_tRespon);
$tRespon = str_replace(' ', '', $a_tRespon);

$t_norek = htmlspecialchars($data["norek"]);
$a_norek = RemoveSpecialChar($t_norek);
$norek = str_replace(' ', '', $a_norek);

$nom_acak = htmlspecialchars($data["income"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);

$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($keterangan == "Tambah Teman") {
$temanBaru = $dataTemanBaru - $dataTeman;
$update = mysqli_query($conn, "UPDATE `laporan_media` SET
`tgl_laporan` ='$tanggal',
`keterangan` ='$keterangan',
`jumlahTeman` ='$dataTemanBaru',
`jumlahAdd` ='$temanAdd',
`temanBaru` ='$temanBaru',
`totalSerangan` ='$serangan',
`donatur`= '$donatur',
`respon` ='$respon',
`alamat` ='$alamat',
`insya_allah`= '$insya_allah',
`minta_norek`= '$norek',
`belumbisa_bantu`= '$bbBantu',
`tidak_respon`= '$tRespon',
`total_income`= '$income'
WHERE id = '$id' ");

} elseif ($keterangan == "Hapus Teman") {
$hapusTeman = $dataTemanBaru-$dataTeman;
$update = mysqli_query($conn, "UPDATE `laporan_media` SET
`tgl_laporan` ='$tanggal',
`jumlahTeman` ='$dataTemanBaru',
`jumlahAdd` ='$temanAdd',
`hapusTeman` ='$hapusTeman',
`totalSerangan` ='$serangan',
`donatur`= '$donatur',
`respon` ='$respon',
`alamat` ='$alamat',
`insya_allah`= '$insya_allah',
`minta_norek`= '$norek',
`belumbisa_bantu`= '$bbBantu',
`tidak_respon`= '$tRespon',
`total_income`= '$income'
WHERE id = '$id' ");

} else {
$update = mysqli_query($conn, "UPDATE `laporan_media` SET
`tgl_laporan` ='$tanggal',
`jumlahTeman` ='$dataTemanBaru',
`totalSerangan` ='$serangan',
`donatur`= '$donatur',
`respon` ='$respon',
`alamat` ='$alamat',
`insya_allah`= '$insya_allah',
`minta_norek`= '$norek',
`belumbisa_bantu`= '$bbBantu',
`tidak_respon`= '$tRespon',
`total_income`= '$income'
WHERE id = '$id' ");
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah laporan harian akun dari $akun')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// anggaran program
function anggaran_program($data)
{
global $conn;

$link = $data["link"];
$cabang = $data["cabang"];
$posisi = $data["posisi"];
$program = htmlspecialchars($data["program"]);
$yatim = htmlspecialchars($data["yatim"]);
$tanggal = $data["tanggal"];
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$posisi', '$ip',
'$date', '$_SESSION[nama] Divisi $program Telah Menginput Anggaran $program dengan perencanaan $deskripsi')");

$result = mysqli_query($conn, "INSERT INTO 2022_program VALUES('', '$link', '$posisi', '$cabang', '$program',
'$tanggal', '$deskripsi', $anggaran, '', '', '', 'Pending', 'Belum Laporan', '$yatim')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit_anggaran program
function edit_anggaran_program($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$posisi = htmlspecialchars($data["posisi"]);
$program = htmlspecialchars($data["program"]);
$yatim = htmlspecialchars($data["yatim"]);
$cabang = htmlspecialchars($data["cabang"]);
$tanggal = htmlspecialchars($data["tanggal"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
$qProgram = mysqli_query($conn, "SELECT * FROM 2022_program WHERE id = '$id'");
$dProgram = mysqli_fetch_assoc($qProgram);
$laporan = $dProgram["laporan"];

if ($laporan == "Terverifikasi") {
mysqli_query($conn, "UPDATE `2022_program` SET
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id' ");
}

} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$posisi', '$ip',
'$date', '$_SESSION[nama] Divisi $posisi Telah Mengubah Anggaran $program')");
}

// die(var_dump($program));

// update_target
$update = mysqli_query($conn, "UPDATE `2022_program` SET
`program` ='$program',
`cabang` ='$cabang',
`tgl_pengajuan` ='$tanggal',
`deskripsi`= '$deskripsi',
`dana_anggaran` ='$anggaran',
`yatim` ='$yatim'
WHERE id = '$id' ");


// die(var_dump($update));
return mysqli_affected_rows($conn);

}

// laporan program
function laporan_program($data)
{
global $conn;

$link = $data["link"];
$id_unik = $data["id_unik"];
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi_laporan = htmlspecialchars($data["deskripsi_laporan"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$terpakai = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

$update = mysqli_query($conn, "UPDATE `2022_program` SET
`tgl_pemakaian` ='$tanggal',
`deskripsi_pemakaian`= '$deskripsi_laporan',
`dana_terpakai` ='$terpakai',
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id_unik' ");
// die(var_dump($update));

$uploadsDir = '../assets/img/laporan/program/';
$allowedFileType = array('jpg', 'png', 'jpeg');

// Velidate if files exist
if (!empty(array_filter($_FILES['gambar']['name']))) {

// Loop through file items
foreach ($_FILES['gambar']['name'] as $id => $val) {
// Get files upload path
$fileName = $_FILES['gambar']['name'][$id];
$ukuran = $_FILES['gambar']['size'][$id];
$tempLocation = $_FILES['gambar']['tmp_name'][$id];
$uploadOk = 1;

$ekstensigambar = explode('.', $fileName);
$ekstensigambar = strtolower(end($ekstensigambar));
if (!in_array($ekstensigambar, $allowedFileType)) {
echo "<script>
alert('yang di upload bukan gambar');
</script>";
return false;
}

// cek ukuran terlalu bessar
if ($ukuran > 100000000) {
echo "<script>
alert('ukuran terlalu besar Max 20MB');
</script>";
return false;
}

// generate nama batu gambar
$namagambarbaru = uniqid();
$namagambarbaru .= '.';
$namagambarbaru .= $ekstensigambar;

$targetFilePath = $uploadsDir . $namagambarbaru;

// Add into MySQL database
// die(var_dump($namagambarbaru));

$move = move_uploaded_file($tempLocation, $targetFilePath);

$result = mysqli_query($conn, "INSERT INTO 2022_galeri_program VALUES('', '$id_unik', '$link', '$program',
'$_SESSION[nama]',
'$namagambarbaru')");
// die(var_dump($result));
}
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Membuat Laporan $program ')");

return mysqli_affected_rows($conn);
}

// edit_laporan program
function edit_laporan_program($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi = htmlspecialchars($data["deskripsi_laporan"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
$qProgram = mysqli_query($conn, "SELECT * FROM 2022_program WHERE id = '$id'");
$dProgram = mysqli_fetch_assoc($qProgram);
$laporan = $dProgram["laporan"];

if ($laporan == "Terverifikasi") {
mysqli_query($conn, "UPDATE `2022_program` SET
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id' ");
}
} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] $_SESSION[posisi] Telah Mengubah Laporan Program $program')");
}

// update_target
$update = mysqli_query($conn, "UPDATE `2022_program` SET
`tgl_pemakaian` ='$tanggal',
`deskripsi_pemakaian`= '$deskripsi',
`dana_terpakai` ='$anggaran'
WHERE id = '$id' ");

// die(var_dump($update));

// die(var_dump($result));
return mysqli_affected_rows($conn);
}

// anggaran paudqu
function anggaran_paudqu($data)
{
global $conn;

$link = $data["link"];
$cabang = $data["cabang"];
$posisi = $data["posisi"];
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal"];
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$posisi', '$ip',
'$date', '$_SESSION[nama] Divisi $program Telah Menginput Anggaran $program dengan perencanaan $deskripsi')");

$result = mysqli_query($conn, "INSERT INTO 2022_paudqu VALUES('', '$link', '$posisi', '$cabang', '$program',
'$tanggal', '$deskripsi', $anggaran, '', '', '', 'Pending', 'Belum Laporan')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit_anggaran paudqu
function edit_anggaran_paudqu($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$posisi = htmlspecialchars($data["posisi"]);
$program = htmlspecialchars($data["program"]);
$cabang = htmlspecialchars($data["cabang"]);
$tanggal = htmlspecialchars($data["tanggal"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$posisi', '$ip',
'$date', '$_SESSION[nama] Divisi $posisi Telah Mengubah Anggaran $program')");
}

// die(var_dump($program));

// update_target
$update = mysqli_query($conn, "UPDATE `2022_paudqu` SET
`program` ='$program',
`cabang` ='$cabang',
`tgl_pengajuan` ='$tanggal',
`deskripsi`= '$deskripsi',
`dana_anggaran` ='$anggaran'
WHERE id = '$id' ");


// die(var_dump($update));
return mysqli_affected_rows($conn);

}

// laporan paudqu
function laporan_paudqu($data)
{
global $conn;

$link = $data["link"];
$id_unik = $data["id_unik"];
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi_laporan = htmlspecialchars($data["deskripsi_laporan"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$terpakai = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

$update = mysqli_query($conn, "UPDATE `2022_paudqu` SET
`tgl_pemakaian` ='$tanggal',
`deskripsi_pemakaian`= '$deskripsi_laporan',
`dana_terpakai` ='$terpakai',
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id_unik' ");
// die(var_dump($update));

$uploadsDir = '../assets/img/laporan/paudqu/';
$allowedFileType = array('jpg', 'png', 'jpeg');

// Velidate if files exist
if (!empty(array_filter($_FILES['gambar']['name']))) {

// Loop through file items
foreach ($_FILES['gambar']['name'] as $id => $val) {
// Get files upload path
$fileName = $_FILES['gambar']['name'][$id];
$ukuran = $_FILES['gambar']['size'][$id];
$tempLocation = $_FILES['gambar']['tmp_name'][$id];
$uploadOk = 1;

$ekstensigambar = explode('.', $fileName);
$ekstensigambar = strtolower(end($ekstensigambar));
if (!in_array($ekstensigambar, $allowedFileType)) {
echo "<script>
alert('yang di upload bukan gambar');
</script>";
return false;
}

// cek ukuran terlalu bessar
if ($ukuran > 100000000) {
echo "<script>
alert('ukuran terlalu besar Max 20MB');
</script>";
return false;
}

// generate nama batu gambar
$namagambarbaru = uniqid();
$namagambarbaru .= '.';
$namagambarbaru .= $ekstensigambar;

$targetFilePath = $uploadsDir . $namagambarbaru;

// Add into MySQL database
// die(var_dump($namagambarbaru));

$move = move_uploaded_file($tempLocation, $targetFilePath);

$result = mysqli_query($conn, "INSERT INTO 2022_galeri_paudqu VALUES('', '$id_unik', '$link', '$program',
'$_SESSION[nama]',
'$namagambarbaru')");
// die(var_dump($result));
}
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Membuat Laporan $program ')");

return mysqli_affected_rows($conn);
}

// edit_laporan paudqu
function edit_laporan_paudqu($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi = htmlspecialchars($data["deskripsi_laporan"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] $_SESSION[posisi] Telah Mengubah Laporan Program $program')");
}

// update_target
$update = mysqli_query($conn, "UPDATE `2022_paudqu` SET
`tgl_pemakaian` ='$tanggal',
`deskripsi_pemakaian`= '$deskripsi',
`dana_terpakai` ='$anggaran'
WHERE id = '$id' ");

// die(var_dump($result));
return mysqli_affected_rows($conn);
}

// anggaran Logistik
function anggaran_logistik($data)
{
global $conn;

$link = $data["link"];
$logistik = htmlspecialchars($data["program"]);
$cabang = htmlspecialchars($data["cabang"]);
$tanggal = $data["tanggal"];
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menginput Anggaran $logistik')");

$result = mysqli_query($conn, "INSERT INTO 2022_logistik VALUES('', '$link', '$_SESSION[posisi]', '$cabang',
'$logistik', '$tanggal', '$deskripsi', '$anggaran', '', '', '', 'Pending', 'Belum Laporan')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit_logistik
function edit_anggaran_logistik($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$logistik = htmlspecialchars($data["program"]);
$tanggal = htmlspecialchars($data["tanggal"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
$qLogistik = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE id = '$id'");
$dLogistik = mysqli_fetch_assoc($qLogistik);
$laporan = $dLogistik["laporan"];

if ($laporan == "Terverifikasi") {
mysqli_query($conn, "UPDATE `2022_logistik` SET
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id' ");
}

} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah Anggaran $logistik')");
}

// update_target
$update = mysqli_query($conn, "UPDATE `2022_logistik` SET
`tgl_pengajuan` ='$tanggal',
`deskripsi`= '$deskripsi',
`dana_anggaran` ='$anggaran'
WHERE id = '$id' ");

// die(var_dump($result));
return mysqli_affected_rows($conn);
}

// laporan logistik
function laporan_logistik($data)
{
global $conn;

$link = $data["link"];
$id_unik = $data["id_unik"];
$deskripsi = htmlspecialchars($data["deskripsi"]);
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi_laporan = htmlspecialchars($data["deskripsi_laporan"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$terpakai = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

$update = mysqli_query($conn, "UPDATE `2022_logistik` SET
`tgl_pemakaian` ='$tanggal',
`deskripsi_pemakaian`= '$deskripsi_laporan',
`dana_terpakai` ='$terpakai',
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id_unik' ");

// die(var_dump($id_hasil));

$uploadsDir = '../assets/img/laporan/logistik/';
$allowedFileType = array('jpg', 'png', 'jpeg');

// Velidate if files exist
if (!empty(array_filter($_FILES['gambar']['name']))) {

// Loop through file items
foreach ($_FILES['gambar']['name'] as $id => $val) {
// Get files upload path
$fileName = $_FILES['gambar']['name'][$id];
$ukuran = $_FILES['gambar']['size'][$id];
$tempLocation = $_FILES['gambar']['tmp_name'][$id];

// die(var_dump($tempLocation));
$ekstensigambar = explode('.', $fileName);
$ekstensigambar = strtolower(end($ekstensigambar));
if (!in_array($ekstensigambar, $allowedFileType)) {
echo "<script>
alert('yang di upload bukan gambar');
</script>";
return false;
}

// cek ukuran terlalu bessar
if ($ukuran > 100000000) {
echo "<script>
alert('ukuran terlalu besar Max 30MB');
</script>";
return false;
}

// generate nama batu gambar
$namagambarbaru = uniqid();
$namagambarbaru .= '.';
$namagambarbaru .= $ekstensigambar;

$targetFilePath = $uploadsDir . $namagambarbaru;

// Add into MySQL database

move_uploaded_file($tempLocation, $targetFilePath);

$result = mysqli_query($conn, "INSERT INTO 2022_galeri_logistik VALUES('', '$id_unik', '$link', '$program',
'$_SESSION[nama]', '$namagambarbaru')");
}
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Membuat Laporan $program dengan pemakaian
$deskripsi_laporan')");

return mysqli_affected_rows($conn);
}

// edit_laporan logistik
function edit_laporan_logistik($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi = htmlspecialchars($data["deskripsi_laporan"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
$qLogistik = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE id = '$id'");
$dLogistik = mysqli_fetch_assoc($qLogistik);
$laporan = $dLogistik["laporan"];

if ($laporan == "Terverifikasi") {
mysqli_query($conn, "UPDATE `2022_logistik` SET
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id' ");
}

} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah Laporan Program $program menjadi
$deskripsi')");
}

// update_target
$update = mysqli_query($conn, "UPDATE `2022_logistik` SET
`tgl_pemakaian` ='$tanggal',
`deskripsi_pemakaian`= '$deskripsi',
`dana_terpakai` ='$anggaran'
WHERE id = '$id' ");

// die(var_dump($update));

// die(var_dump($result));
return mysqli_affected_rows($conn);
}

// anggaran management
function anggaran_management($data)
{
global $conn;

$link = $data["link"];
$id_management = $data["id_management"];
$management = htmlspecialchars($data["program"]);
$jenis = htmlspecialchars($data["jenis"]);
$maintenance = $management .' '. $jenis;
$qty = htmlspecialchars($data["qty"]);
$cabang = htmlspecialchars($data["cabang"]);
$tanggal = $data["tanggal"];
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

if ($management == "Aset Yayasan") {
$result = mysqli_query($conn, "INSERT INTO 2022_$id_management VALUES('', '$link', '$management', '$cabang', '$jenis',
'$_SESSION[posisi]', '$tanggal', '$deskripsi', '$qty', '$anggaran', '', '', '', '', 'Pending', 'Belum Laporan')");

} elseif ($management == "Maintenance") {
$result = mysqli_query($conn, "INSERT INTO 2022_$id_management VALUES('', '$link', '$_SESSION[posisi]',
'$cabang', '$maintenance', '$tanggal', '$deskripsi', '$anggaran', '', '', '', 'Pending', 'Belum Laporan')");

} else {
$result = mysqli_query($conn, "INSERT INTO 2022_$id_management VALUES('', '$link', '$_SESSION[posisi]',
'$cabang', '$management', '$tanggal', '$deskripsi', '$anggaran', '', '', '', 'Pending', 'Belum Laporan')");
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menginput Anggaran $management')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit anggaran management
function edit_anggaran_management($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$id_management = $data["id_management"];
$management = htmlspecialchars($data["program"]);
$jenis = htmlspecialchars($data["jenis"]);
$qty = htmlspecialchars($data["qty"]);
$tanggal = htmlspecialchars($data["tanggal"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$anggaran = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
$qManagement = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE id = '$id'");
$dManagement = mysqli_fetch_assoc($qManagement);
$laporan = $dManagement["laporan"];

if ($laporan == "Terverifikasi") {
mysqli_query($conn, "UPDATE `2022_$id_management` SET
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id' ");
}

} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah Anggaran $management')");
}

// update_target
if ($management == "Aset Yayasan") {
$update = mysqli_query($conn, "UPDATE `2022_$id_management` SET
`tgl_dibuat` ='$tanggal',
`deskripsi`= '$deskripsi',
`qty_anggaran`= '$qty',
`dana_anggaran` ='$anggaran'
WHERE id = '$id' ");

} else {
$update = mysqli_query($conn, "UPDATE `2022_$id_management` SET
`tgl_dibuat` ='$tanggal',
`deskripsi`= '$deskripsi',
`dana_anggaran` ='$anggaran'
WHERE id = '$id' ");
}
// die(var_dump($update));

return mysqli_affected_rows($conn);
}

// laporan management
function laporan_management($data)
{
global $conn;

$link = $data["link"];
$id_unik = $data["id_unik"];
$id_management = $data["id_management"];
$program = htmlspecialchars($data["program"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi_laporan = htmlspecialchars($data["deskripsi_laporan"]);
$qty = htmlspecialchars($data["qty"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$terpakai = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

if ($id_management == "aset_yayasan") {
$update = mysqli_query($conn, "UPDATE `2022_$id_management` SET
`tgl_laporan` ='$tanggal',
`pemakaian`= '$deskripsi_laporan',
`qty_pembelian`= '$qty',
`dana_terpakai` ='$terpakai',
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id_unik' ");

} else {
$update = mysqli_query($conn, "UPDATE `2022_$id_management` SET
`tgl_laporan` ='$tanggal',
`pemakaian`= '$deskripsi_laporan',
`dana_terpakai` ='$terpakai',
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id_unik' ");
}


// die(var_dump($id_hasil));

if ($id_management == "aset_yayasan") {
$uploadsDir = '../assets/img/laporan/aset_yayasan/';

} elseif ($id_management == "uang_makan") {
$uploadsDir = '../assets/img/laporan/uang_makan/';

} elseif ($id_management == "gaji_karyawan") {
$uploadsDir = '../assets/img/laporan/gaji_karyawan/';

} elseif ($id_management == "maintenance") {
$uploadsDir = '../assets/img/laporan/maintenance/';

} elseif ($id_management == "operasional_yayasan") {
$uploadsDir = '../assets/img/laporan/operasional_yayasan/';

} elseif ($id_management == "jasa") {
$uploadsDir = '../assets/img/laporan/jasa/';

} else {
$uploadsDir = '../assets/img/laporan/anggaran_lain/';
}

$allowedFileType = array('jpg', 'png', 'jpeg');

// Velidate if files exist
if (!empty(array_filter($_FILES['gambar']['name']))) {

// Loop through file items
foreach ($_FILES['gambar']['name'] as $id => $val) {
// Get files upload path
$fileName = $_FILES['gambar']['name'][$id];
$ukuran = $_FILES['gambar']['size'][$id];
$tempLocation = $_FILES['gambar']['tmp_name'][$id];

// die(var_dump($tempLocation));
$ekstensigambar = explode('.', $fileName);
$ekstensigambar = strtolower(end($ekstensigambar));
if (!in_array($ekstensigambar, $allowedFileType)) {
echo "<script>
alert('yang di upload bukan gambar');
</script>";
return false;
}

// cek ukuran terlalu bessar
if ($ukuran > 100000000) {
echo "<script>
alert('ukuran terlalu besar Max 30MB');
</script>";
return false;
}

// generate nama batu gambar
$namagambarbaru = uniqid();
$namagambarbaru .= '.';
$namagambarbaru .= $ekstensigambar;

$targetFilePath = $uploadsDir . $namagambarbaru;

// Add into MySQL database

move_uploaded_file($tempLocation, $targetFilePath);

$result = mysqli_query($conn, "INSERT INTO 2022_galeri_$id_management VALUES('', '$id_unik', '$link', '$program',
'$_SESSION[nama]', '$namagambarbaru')");
}

}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Membuat Laporan $program dengan pemakaian
$deskripsi_laporan')");

return mysqli_affected_rows($conn);
}

// edit_laporan management
function edit_laporan_management($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$id_management = $data["id_management"];
$program = htmlspecialchars($data["program"]);
$qty = htmlspecialchars($data["qty"]);
$tanggal = $data["tanggal_laporan"];
$deskripsi = htmlspecialchars($data["deskripsi_laporan"]);
$nom_acak = htmlspecialchars($data["dana_laporan"]);
$anggar = RemoveSpecialChar($nom_acak);
$terpakai = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

if ($_SESSION["id_pengurus"] == "admin_web") {
$qManagement = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE id = '$id'");
$dManagement = mysqli_fetch_assoc($qManagement);
$laporan = $dManagement["laporan"];

if ($laporan == "Terverifikasi") {
mysqli_query($conn, "UPDATE `2022_$id_management` SET
`laporan` ='Menunggu Verifikasi'
WHERE id = '$id' ");
}

} else {
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah Laporan $program menjadi $deskripsi')");
}

// update_target
if ($id_management == "aset_yayasan") {
$update = mysqli_query($conn, "UPDATE `2022_$id_management` SET
`tgl_laporan` ='$tanggal',
`pemakaian`= '$deskripsi',
`qty_pembelian`= '$qty',
`dana_terpakai` ='$terpakai'
WHERE id = '$id' ");

} else {
$update = mysqli_query($conn, "UPDATE `2022_$id_management` SET
`tgl_laporan` ='$tanggal',
`pemakaian`= '$deskripsi',
`dana_terpakai` ='$terpakai'
WHERE id = '$id' ");
}

// die(var_dump($update));
return mysqli_affected_rows($conn);
}

// input pemasukan
function input_pemasukan($data)
{
global $conn;

$link = $data["link"];
$kategori = htmlspecialchars($data["kategori"]);
$gedung = htmlspecialchars($data["gedung"]);
$tanggal = $data["tanggal"];
$nom_acak = htmlspecialchars($data["income"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$newTahun = substr($tanggal,0, 4);

if ($newTahun == 2023) {
echo "<script>
alert('Untuk tahun ini belum tersedia, mohon menunggu update selanjutnya');
</script>";

return false;
}

if ($gedung == "Tanpa Resi") {
$query = mysqli_query($conn, "SELECT tgl_pemasukan FROM 2022_incometanparesi WHERE tgl_pemasukan = '$tanggal' AND gedung
= '$gedung' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Tanggal dari tanpa resi Ini sudah dilaporkan');
</script>";

return false;
}

$result = mysqli_query($conn, "INSERT INTO 2022_incometanparesi VALUES('', '$link', '$kategori', '$_SESSION[posisi]',
'$gedung', '$tanggal', $income, 'Menunggu Verifikasi')");

} else {
$query = mysqli_query($conn, "SELECT tgl_pemasukan FROM 2022_income WHERE tgl_pemasukan = '$tanggal' AND gedung
= '$gedung' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Tanggal dari gedung Ini sudah dilaporkan');
</script>";

return false;
}
$result = mysqli_query($conn, "INSERT INTO 2022_income VALUES('', '$link', '$kategori', '$_SESSION[posisi]',
'$gedung', '$tanggal', $income, 'Menunggu Verifikasi')");
}

// input data ke database
$today = date('d-m-Y', strtotime($tanggal));
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menginput income $kategori $gedung tanggal $today')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit pemasukan
function edit_pemasukan($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$kategori = htmlspecialchars($data["kategori"]);
$jumlah = htmlspecialchars($data["jumlah"]);
$gedung = htmlspecialchars($data["gedung"]);
$old_Tgl = $data["old_Tgl"];
$tanggal = $data["tanggal"];
$lokasi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["anggaran"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah laporan income terbaru')");

// update_target
if ($gedung == "Tanpa Resi") {
if ($tanggal == $old_Tgl) {
} else {
$query = mysqli_query($conn, "SELECT tgl_pemasukan FROM 2022_incometanparesi WHERE tgl_pemasukan = '$tanggal' AND gedung
= '$gedung' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Tanggal dari gedung Ini sudah dilaporkan');
</script>";

return false;
}
}

$update = mysqli_query($conn, "UPDATE `2022_incometanparesi` SET
`gedung` ='$gedung',
`tgl_pemasukan` ='$tanggal',
`income` ='$income'
WHERE id = '$id' ");

} else {
if ($tanggal == $old_Tgl) {
} else {
$query = mysqli_query($conn, "SELECT tgl_pemasukan FROM 2022_income WHERE tgl_pemasukan = '$tanggal' AND gedung
= '$gedung' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Tanggal dari gedung ini sudah dilaporkan');
</script>";

return false;
}
}

$update = mysqli_query($conn, "UPDATE `2022_income` SET
`gedung` ='$gedung',
`tgl_pemasukan` ='$tanggal',
`income` ='$income'
WHERE id = '$id' ");
}

// die(var_dump($update));
return mysqli_affected_rows($conn);

}

// input cashback
function input_cashback($data)
{
global $conn;

$link = $data["link"];
$kategori = htmlspecialchars($data["kategori"]);
$tanggal = $data["tanggal"];
$deskripsi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["income"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$result = mysqli_query($conn, "INSERT INTO 2022_cashback VALUES('', '$link', '$kategori', '$_SESSION[posisi]',
'$tanggal', '$deskripsi', '$income', 'Menunggu Verifikasi')");

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menginput $kategori dengan keterangan $deskripsi')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit cashback
function edit_cashback($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$kategori = htmlspecialchars($data["kategori"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$tanggal = $data["tanggal"];
$lokasi = htmlspecialchars($data["deskripsi"]);
$nom_acak = htmlspecialchars($data["income"]);
$anggar = RemoveSpecialChar($nom_acak);
$income = str_replace(' ', '', $anggar);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah laporan cashbacknya ')");

// update_target

$update = mysqli_query($conn, "UPDATE `2022_cashback` SET
`tgl_cashback` ='$tanggal',
`deskripsi` ='$deskripsi',
`cashback` ='$income'
WHERE id = '$id' ");

// die(var_dump($update));
return mysqli_affected_rows($conn);

}


// input daily report
function daily_report($data)
{
global $conn;

$link = $data["link"];
$divisi = $data["divisi"];
$cabang = $data["cabang"];
$posisi = htmlspecialchars($data["posisi"]);
$tanggal = $data["tanggal"];
$aktivitas = htmlspecialchars($data["aktivitas"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$result = mysqli_query($conn, "INSERT INTO 2022_daily_report VALUES('', '$link', '$_SESSION[nama]', '$posisi',
'$divisi', '$cabang', '$aktivitas', '$tanggal', '$deskripsi')");

$query = mysqli_query($conn, "SELECT * FROM 2022_daily_report ORDER BY id DESC LIMIT 1 ");
$hasil = mysqli_fetch_assoc($query);
$id_hasil = $hasil["id"];

// die(var_dump($id_hasil));

$uploadsDir = '../assets/img/laporan/daily/';
$allowedFileType = array('jpg', 'png', 'jpeg');

// Velidate if files exist
if (!empty(array_filter($_FILES['gambar']['name']))) {

// Loop through file items
foreach ($_FILES['gambar']['name'] as $id => $val) {
// Get files upload path
$fileName = $_FILES['gambar']['name'][$id];
$ukuran = $_FILES['gambar']['size'][$id];
$tempLocation = $_FILES['gambar']['tmp_name'][$id];

// die(var_dump($tempLocation));
$ekstensigambar = explode('.', $fileName);
$ekstensigambar = strtolower(end($ekstensigambar));
if (!in_array($ekstensigambar, $allowedFileType)) {
echo "<script>
alert('yang di upload bukan gambar');
</script>";
return false;
}

// cek ukuran terlalu bessar
if ($ukuran > 100000000) {
echo "<script>
alert('ukuran terlalu besar Max 30MB');
</script>";
return false;
}

// generate nama batu gambar
$namagambarbaru = uniqid();
$namagambarbaru .= '.';
$namagambarbaru .= $ekstensigambar;

$targetFilePath = $uploadsDir . $namagambarbaru;


// Add into MySQL database

move_uploaded_file($tempLocation, $targetFilePath);

$result3 = mysqli_query($conn, "INSERT INTO 2022_galeri_daily VALUES('', '$id_hasil', '$link', '$aktivitas',
'$_SESSION[nama]',
'$namagambarbaru')");
}
}

// input data ke database
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$posisi', '$ip',
'$date', '$_SESSION[nama] Divisi $posisi Telah Menginput Daily Report $posisi dengan aktivitas $deskripsi')");

// die(var_dump($simpan));
return mysqli_affected_rows($conn);

}

// edit_daily
function edit_daily($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$tanggal = $data["tanggal"];
$aktivitas = htmlspecialchars($data["aktivitas"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengubah Daily Report Dari menjadi aktivitas $aktivitas dengan
deskripsi
$deskripsi')");

// update_target
$update = mysqli_query($conn, "UPDATE `2022_daily_report` SET
`aktivitas` ='$aktivitas',
`tgl_aktivitas` ='$tanggal',
`deskripsi` ='$deskripsi'
WHERE id = '$id' ");

// die(var_dump($update));

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit Profil
function edit_profil($data)
{
global $conn;

$id = htmlspecialchars($data["key"]);
$nama = htmlspecialchars($data["nama"]);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

// $fileAwal = "../admin/" . $_SESSION['username'] . ".php";
// $fileBaru = "../admin/" . $username . ".php";

// $nama_baru = rename($fileAwal, $fileBaru);

// die(var_dump($fileBaru));

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengganti nama lengkapnya')");

// update_target
$update = mysqli_query($conn, "UPDATE `akun_pengurus` SET
`nama` ='$nama'
WHERE id = '$id' ");



// die(var_dump($result));
return mysqli_affected_rows($conn);
}

// Change AKun
function changeName($data)
{
global $conn;

$nama = htmlspecialchars(mysqli_real_escape_string($conn, $data["nama"]));
$oldId = htmlspecialchars(mysqli_real_escape_string($conn, $data["oldId"]));
$oldTeam = htmlspecialchars(mysqli_real_escape_string($conn, $data["oldTeam"]));
$namaAkun = htmlspecialchars(mysqli_real_escape_string($conn, $data["namaAkun"]));
$namaChange = htmlspecialchars(mysqli_real_escape_string($conn, $data["namaChange"]));
$changeID = htmlspecialchars(mysqli_real_escape_string($conn, $data["changeID"]));
$team = htmlspecialchars(mysqli_real_escape_string($conn, $data["team"]));

$qAkunName = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id = '$changeID' AND nama = '$namaChange'");
$nAkunName = $qAkunName -> num_rows;

$qTeamAkun = mysqli_query($conn, "SELECT * FROM data_akun WHERE nomor_id = '$changeID' AND pemegang = '$namaChange' AND
team = '$team'");
$nTeamAkun = $qTeamAkun -> num_rows;
// die(var_dump($nAkunName));
if ($nAkunName === 1) {
// update_target
$update = mysqli_query($conn, "UPDATE `income_media` SET
nomor_id = '$changeID',
`pemegang` ='$namaChange',
team = '$team'
WHERE nama_akun = '$namaAkun' ");

$update2 = mysqli_query($conn, "UPDATE `laporan_media` SET
nomor_id = '$changeID',
`pemegang` ='$namaChange',
team = '$team'
WHERE nama_akun = '$namaAkun' ");

$update3 = mysqli_query($conn, "UPDATE `data_akun` SET
nomor_id = '$changeID',
`pemegang` = '$namaChange',
`team` = '$team'
WHERE nama_akun = '$namaAkun' ");

} else {
echo "<script>
alert('ID dan team pengurus yang diinput tidak sesuai');
</script>";

return false;
}

// die(var_dump($update));
return mysqli_affected_rows($conn);
}

// kritik dan saran
function kritikSaran($data)
{
global $conn;

$id = htmlspecialchars(mysqli_real_escape_string($conn, $data["id"]));
$nama = htmlspecialchars(mysqli_real_escape_string($conn, $data["nama"]));
$saran = htmlspecialchars(mysqli_real_escape_string($conn, $data["saran"]));
$date = date("Y-m-d H:i:s");

$query = mysqli_query($conn, "SELECT saran FROM kritiksaran WHERE saran = '$saran' AND nama = '$nama' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Saran sudah ada');
</script>";

return false;
}

$result = mysqli_query($conn, "INSERT INTO kritiksaran VALUES('', '$id', '$nama', '$date', '$saran', '', '')");

return mysqli_affected_rows($conn);

}

// edit saran
function editSaran($data)
{
global $conn;

$id = htmlspecialchars(mysqli_real_escape_string($conn, $data["id"]));
$saran = htmlspecialchars(mysqli_real_escape_string($conn, $data["saran"]));

$result = mysqli_query($conn,
"UPDATE kritiksaran SET
`saran` = '$saran'
WHERE `id` = '$id'");

return mysqli_affected_rows($conn);

}

// balas saran
function balasSaran($data)
{
global $conn;

$id = htmlspecialchars(mysqli_real_escape_string($conn, $data["id"]));
$balasan = htmlspecialchars(mysqli_real_escape_string($conn, $data["balasan"]));
$date = date("Y-m-d H:i:s");

$result = mysqli_query($conn,
"UPDATE kritiksaran SET
`balasan` = '$balasan',
`tgl_balasan` = '$date'
WHERE `id` = '$id'");

return mysqli_affected_rows($conn);

}

function createTeam($data) {
global $conn;

$team = htmlspecialchars(mysqli_real_escape_string($conn, $data["team"]));
$nama = $data["namaList"];

foreach ($nama as $listName) {

$qdataTeam = mysqli_query($conn, "SELECT * FROM data_akun WHERE pemegang = '$listName'");
$dataTeam = mysqli_fetch_assoc($qdataTeam);
$id_pengurus = $dataTeam["id_pengurus"];
$pemegang = $dataTeam["pemegang"];
$posisi = $dataTeam["posisi"];
$dataTeam = $dataTeam["team"];

if ($dataTeam == "") {
} else {
if ($dataTeam !== $team) {
echo "<script>
alert('Data tim sudah ada, harap pilih $dataTeam');
</script>";

return false;
}
}
$result = mysqli_query($conn,
"UPDATE data_akun SET
`team` = '$team'
WHERE `pemegang` = '$listName'");

$result2 = mysqli_query($conn,
"UPDATE income_media SET
`team` = '$team'
WHERE `pemegang` = '$listName'");

$result3 = mysqli_query($conn,
"UPDATE laporan_media SET
`team` = '$team'
WHERE `pemegang` = '$listName'");
}

return mysqli_affected_rows($conn);

}

function createListTeam($data) {
global $conn;

$team = htmlspecialchars(mysqli_real_escape_string($conn, $data["team"]));
$nama = $data["namaList"];

foreach ($nama as $listName) {

$qdataTeam = mysqli_query($conn, "SELECT * FROM data_akun WHERE pemegang = '$listName'");
$dataTeam = mysqli_fetch_assoc($qdataTeam);
$id_pengurus = $dataTeam["id_pengurus"];
$pemegang = $dataTeam["pemegang"];
$dataTeam = $dataTeam["team"];

if ($dataTeam == "") {
} else {
if ($dataTeam !== $team) {
echo "<script>
alert('Data tim sudah ada, harap pilih $dataTeam');
</script>";

return false;
}
}

$result = mysqli_query($conn,
"UPDATE income_media SET
`team` = '$team'
WHERE `pemegang` = '$listName'");

$result2 = mysqli_query($conn,
"UPDATE laporan_media SET
`team` = '$team'
WHERE `pemegang` = '$listName'");
}

return mysqli_affected_rows($conn);

}

// edit_changeSekolah
function edit_changeSekolah($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$sekolah = htmlspecialchars($data["sekolah"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);

// update_target
$update = mysqli_query($conn, "UPDATE `2022_program` SET
`yatim` ='$sekolah'
WHERE id = '$id' AND deskripsi = '$deskripsi' ");

// die(var_dump($update));
return mysqli_affected_rows($conn);

}

?>