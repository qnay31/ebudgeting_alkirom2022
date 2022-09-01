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
    if ($_SESSION["username"] == "facebook_taman") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Taman' ORDER BY `tgl_laporan` DESC";
        
    } elseif ($_SESSION["username"] == "admin_facebook") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Taman II' ORDER BY `tgl_laporan` DESC";

    } elseif ($_SESSION["username"] == "facebook_pusat") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Pusat' ORDER BY `tgl_laporan` DESC";

    } elseif ($_SESSION["username"] == "facebook_bojong") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Bojong' ORDER BY `tgl_laporan` DESC";

    } elseif ($_SESSION["username"] == "instagram_taman") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Instagram Taman' ORDER BY `tgl_laporan` DESC";

    } elseif ($_SESSION["username"] == "instagram_bojong") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Instagram Bojong' ORDER BY `tgl_laporan` DESC";

    } elseif ($_SESSION["username"] == "instagram_meruyung") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Instagram Meruyung' ORDER BY `tgl_laporan` DESC";
    
    } else {
        $where = "id_pengurus = '$_SESSION[username]' ORDER BY `tgl_laporan` DESC";
    }

} elseif ($_SESSION["id_pengurus"] == "ketua_yayasan") {
    if ($_SESSION["mediaLaporan"] == "instagram") {
        $where = "id_pengurus = 'instagram' ORDER BY `tgl_laporan` DESC";
        
    } else {
        $where = "id_pengurus = 'facebook_depok' ORDER BY `tgl_laporan` DESC";
    }
    
} elseif ($_SESSION["id_pengurus"] == "admin_web") {
    $where = "id_pengurus NOT LIKE 'A%' ORDER BY `tgl_laporan` DESC";

} elseif ($_SESSION["id_pengurus"] == "kepala_cabang") {
    $where = "id_pengurus = 'facebook_bogor' ORDER BY `tgl_laporan` DESC";
    
} elseif ($_SESSION["id_pengurus"] == "facebook") {
    $where = "pemegang = '$_SESSION[nama]' ORDER BY `tgl_laporan` DESC";
    
} else {
    $bulan      = date("Y-m-d");
    $bln        = substr($bulan, 5,-3);
    if ($_SESSION["media"] == "") {
        $where = "pemegang = '$_SESSION[nama]' AND MONTH(tgl_laporan) = '$bln' ORDER BY `tgl_laporan` DESC";
        
    } else {
        $where = "pemegang = '$_SESSION[nama]' ORDER BY `tgl_laporan` DESC";
    }

}

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt'   => 0, ),
    array( 'db' => 'pemegang', 'dt' => 1 ),
    array( 
        'db'        => 'team', 
        'dt'        => 2,
        'formatter' => function( $d, $row ) {
            return  
            $d == "Facebook Taman" ? "Facebook I" :(
                $d == "Facebook Pusat" ? "Facebook II" : (
                    $d == "Facebook Taman II" ? "Facebook III" : (
                        $d == "Facebook Bojong" ? "Facebook IV" : (
                            $d == "Instagram Taman" ? "Instagram A" : (
                                $d == "Instagram Bojong" ? "Instagram B" : (
                                    $d == "Instagram Meruyung" ? "Instagram C" : "Tidak Dalam Team"
                                        )
                                    )
                                )
                            )
                        )
                    );
                }
            ),
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
        'db'        => 'keterangan', 
        'dt'        => 6,
        'formatter' => function($d, $row) {
            return $d == "" ? "-" : $d;
        }
    ),
    array(
        'db'        => 'jumlahTeman',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return $d > 0 ? number_format($d) : "-";
        }
    ),
    array(
        'db'        => 'jumlahAdd',
        'dt'        => 8,
        'formatter' => function( $d, $row ) {
            return $d > 0 ? number_format($d) : "0";
        }
    ),
    array(
        'db'        => 'temanBaru',
        'dt'        => 9,
        'formatter' => function( $d, $row ) {
            return $d > 0 ? number_format($d) : "0";
        }
    ),
    array(
        'db'        => 'hapusTeman',
        'dt'        => 10,
        'formatter' => function( $d, $row ) {
            return $d < 0 ? number_format($d) : "0";
        }
    ),
    array(
        'db'        => 'totalSerangan',
        'dt'        => 11,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'respon',
        'dt'        => 12,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'alamat',
        'dt'        => 13,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'insya_allah',
        'dt'        => 14,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'minta_norek',
        'dt'        => 15,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'belumbisa_bantu',
        'dt'        => 16,
        'formatter' => function( $d, $row ) {
            return number_format((float)$d);
        }
    ),
    array(
        'db'        => 'tidak_respon',
        'dt'        => 17,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'donatur',
        'dt'        => 18,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'total_income',
        'dt'        => 19,
        'formatter' => function( $d, $row ) {
            return number_format((float)$d);
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