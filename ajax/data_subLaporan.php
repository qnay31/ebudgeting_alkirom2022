<?php
session_start();
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'laporan_media';
 
// Table's primary key
$primaryKey = 'id';

if ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") {
    if ($_SESSION["username"] == "admin_facebook" || $_SESSION["username"] == "facebook_taman" || $_SESSION["username"] == "facebook_pusat") {
        if ($_SESSION["bulan"] == "") {
            $where = "nomor_id = '$_SESSION[keyAccount]' AND id_pengurus = 'facebook_depok' ORDER BY `tgl_laporan` DESC";
        } else {
            $where = "MONTH(tgl_laporan) = '$_SESSION[bulan]' AND nomor_id = '$_SESSION[keyAccount]' AND id_pengurus = 'facebook_depok' ORDER BY `tgl_laporan` DESC";
        }

    } elseif ($_SESSION["username"] == "instagram_taman" || $_SESSION["username"] == "instagram_bojong" || $_SESSION["username"] == "instagram_meruyung") {
        if ($_SESSION["bulan"] == "") {
            $where = "nomor_id = '$_SESSION[keyAccount]' AND id_pengurus = 'instagram' ORDER BY `tgl_laporan` DESC";
        } else {
            $where = "MONTH(tgl_laporan) = '$_SESSION[bulan]' AND nomor_id = '$_SESSION[keyAccount]' AND id_pengurus = 'instagram' ORDER BY `tgl_laporan` DESC";
        }

    } else {
        if ($_SESSION["bulan"] == "") {
            $where = "nomor_id = '$_SESSION[keyAccount]' AND id_pengurus = '$_SESSION[username]' ORDER BY `tgl_laporan` DESC";

        } else {
            $where = "MONTH(tgl_laporan) = '$_SESSION[bulan]' AND nomor_id = '$_SESSION[keyAccount]' AND id_pengurus = '$_SESSION[username]' ORDER BY `tgl_laporan` DESC";
        }
    }

} elseif ($_SESSION["id_pengurus"] == "ketua_yayasan") {
    if ($_SESSION["bulan"] == "") {
        $where = "nomor_id = '$_SESSION[keyAccount]' ORDER BY `tgl_laporan` DESC";

    } else {
        $where = "MONTH(tgl_laporan) = '$_SESSION[bulan]' AND nomor_id = '$_SESSION[keyAccount]' ORDER BY `tgl_laporan` DESC";
    }
}

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt'   => 0, ),
    array( 'db' => 'pemegang', 'dt' => 1 ),
    array( 'db' => 'posisi', 'dt' => 2 ),
    array( 'db' => 'nama_akun', 'dt' => 3 ),
    array(
        'db'        => 'tgl_laporan',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ), 
    array(
        'db'        => 'tgl_laporan',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            $convert = date( 'd F Y', strtotime($d));
            $bulan   = substr($convert, 2);
            return $bulan;
        }
    ),
    array(
        'db'        => 'totalSerangan',
        'dt'        => 6,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'respon',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'insya_allah',
        'dt'        => 8,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'alamat',
        'dt'        => 9,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'minta_norek',
        'dt'        => 10,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'belumbisa_bantu',
        'dt'        => 11,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'tidak_respon',
        'dt'        => 12,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'donatur',
        'dt'        => 13,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'total_income',
        'dt'        => 14,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'eb_v1',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../ssp.class.php' );
    echo json_encode(
        SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where)
    );