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
$table = 'income_media';
 
// Table's primary key
$primaryKey = 'id';

if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram" || $_SESSION["id_pengurus"] == "facebook") {
    $where = "nomor_id = '$_SESSION[id]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

} elseif ($_SESSION["id_pengurus"] == "manager_instagram") {
    if ($_SESSION["username"] == "instagram_taman") {
        $where = "id_pengurus = 'instagram' AND team = 'Instagram Taman' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

    } elseif ($_SESSION["username"] == "instagram_bojong") {
        $where = "id_pengurus = 'instagram' AND team = 'Instagram Bojong' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

    } elseif ($_SESSION["username"] == "instagram_meruyung") {
        $where = "id_pengurus = 'instagram' AND team = 'Instagram Meruyung' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

    } else {
        $where = "cabang = '$_SESSION[cabang]' AND id_pengurus = 'instagram' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    }

} elseif ($_SESSION["id_pengurus"] == "manager_facebook") {
    if ($_SESSION["username"] == "facebook_taman") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Taman' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
        
    } elseif ($_SESSION["username"] == "admin_facebook") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Taman II' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

    } elseif ($_SESSION["username"] == "facebook_pusat") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Pusat' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

    } elseif ($_SESSION["username"] == "facebook_bojong") {
        $where = "id_pengurus = 'facebook_depok' AND team = 'Facebook Bojong' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

    } else {
        $where = "cabang = '$_SESSION[cabang]' AND id_pengurus = 'facebook_depok' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    }   

} else {
    $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC"; 
}

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 
        'db'        => 'id', 
        'dt'        => 0,
        'formatter' => function( $d, $row ) {
            $a = 1;
            return $a++;
        }
    ),
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
    array( 'db' => 'nama_akun',  'dt' => 3 ),
    array( 'db' => 'cabang',   'dt' => 4 ),
    array(
        'db'        => 'tanggal_tf',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            $convert = date( 'd F Y', strtotime($d));
            $bulan   = substr($convert, 2);
            return $bulan;
        }
    ),
    array( 'db' => 'nama_donatur', 'dt' => 6 ),
    array(
        'db'        => 'tanggal_tf',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ),   
    array( 'db' => 'bank', 'dt' => 8 ),
    array(
        'db'        => 'jumlah_tf',
        'dt'        => 9,
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
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where )
);