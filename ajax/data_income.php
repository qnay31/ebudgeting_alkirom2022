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

if ($_SESSION["id_pengurus"] == "admin_web") {
    $where  = "status = 'OK' ORDER BY `id` DESC ";

} else {
    if ($_SESSION["id_periode"] == "") {
        $where  = "status = 'OK' ORDER BY `tanggal_tf` DESC ";
    } else {
        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY `tanggal_tf` DESC ";
    }
}
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
if ($_SESSION["id_pengurus"] == "admin_web") {
    $columns = array(
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'pemegang', 'dt' => 1 ),
        array( 'db' => 'id', 'dt' => 2 ),
        array( 'db' => 'nama_akun',  'dt' => 3 ),
        array( 'db' => 'status',   'dt' => 4 ),
        array(
            'db'        => 'tanggal_tf',
            'dt'        => 5,
            'formatter' => function( $d, $row ) {
                $convert = date( 'd F Y', strtotime($d));
                $bulan   = substr($convert, 2);
                return $bulan;
            }
        ),
        array( 'db' => 'nama_donatur',     'dt' => 6 ),
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
} else {
    $columns = array(
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'pemegang', 'dt' => 1 ),
        array( 
            'db' => 'id_pengurus', 
            'dt' => 2,
            'formatter' => function($d, $row) {
                return  $d == "facebook_depok" ? "Facebook Depok" :( 
                    $d == "facebook_bogor" ? "Facebook Bogor" : "Instagram");
            } ),
        array( 'db' => 'nama_akun',  'dt' => 3 ),
        array( 'db' => 'status',   'dt' => 4 ),
        array( 'db' => 'id','dt' => 5,),
        array( 'db' => 'nama_donatur',     'dt' => 6 ),
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
}

 
// SQL server connection information
$sql_details = array(
    'user' => 'u3268866_ebudgeting',
    'pass' => 'alkirom123',
    'db'   => 'u3268866_ebudgeting',
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