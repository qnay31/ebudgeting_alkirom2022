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
$table = 'data_akun';
 
// Table's primary key
$primaryKey = 'id';

if ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "kepala_cabang") {
    if ($_SESSION["cabang"] == "Depok") {
        if ($_SESSION["username"] == "facebook_pusat") {
            $where  = "id_pengurus LIKE 'facebook_depok%' AND team LIKE 'Facebook Pusat' GROUP BY nomor_id ORDER BY `team` DESC, pemegang ASC ";

        } elseif ($_SESSION["username"] == "admin_facebook") {
            $where  = "id_pengurus LIKE 'facebook_depok%' AND team LIKE 'Facebook Taman' GROUP BY nomor_id ORDER BY `team` DESC, pemegang ASC ";

        } else {
            $where  = "id_pengurus LIKE 'facebook_depok%' AND team NOT LIKE '' GROUP BY nomor_id ORDER BY `team` ASC, pemegang ASC ";
        }

    } else {
        $where  = "id_pengurus LIKE 'facebook_bogor%' AND team NOT LIKE '' GROUP BY nomor_id ORDER BY `team` DESC, pemegang ASC ";
    }
    
} elseif ($_SESSION["id_pengurus"] == "manager_instagram") {
    if ($_SESSION["username"] == "instagram_taman") {
        $where  = "id_pengurus LIKE 'instagram%' AND team LIKE 'Instagram Taman' GROUP BY nomor_id ORDER BY `team` ASC, pemegang ASC ";

    } elseif ($_SESSION["username"] == "instagram_meruyung") {
        $where  = "id_pengurus LIKE 'instagram%' AND team LIKE 'Instagram Meruyung' GROUP BY nomor_id ORDER BY `team` ASC, pemegang ASC ";

    } elseif ($_SESSION["username"] == "instagram_bojong") {
        $where  = "id_pengurus LIKE 'instagram%' AND team LIKE 'Instagram Bojong' GROUP BY nomor_id ORDER BY `team` ASC, pemegang ASC ";

    } else {
        $where  = "id_pengurus LIKE 'instagram%' AND team NOT LIKE '' GROUP BY nomor_id ORDER BY `team` ASC, pemegang ASC ";
    }
    
} else {
    $where  = "team NOT LIKE '' GROUP BY nomor_id ORDER BY `team` ASC, pemegang ASC ";
    
}

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
if ($_SESSION["id_pengurus"] == "kepala_income") {
    $columns = array(
        array(
            'db' => 'nomor_id',
            'dt' => 'DT_RowId',
            'formatter' => function( $d, $row ) {
                // Technically a DOM id cannot start with an integer, so we prefix
                // a string. This can also be useful if you have multiple tables
                // to ensure that the id is unique with a different prefix
                return $d;
            }
        ),
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'pemegang', 'dt' => 1 ),
        array( 'db' => 'cabang',  'dt' => 2 ),
        array( 'db' => 'posisi',  'dt' => 3 ),
        array( 'db' => 'team', 'dt' => 4 ),
        array( 'db' => 'nomor_id', 'dt' => 5 ),
    );

} else {
    $columns = array(
        array(
            'db' => 'nomor_id',
            'dt' => 'DT_RowId',
            'formatter' => function( $d, $row ) {
                // Technically a DOM id cannot start with an integer, so we prefix
                // a string. This can also be useful if you have multiple tables
                // to ensure that the id is unique with a different prefix
                return $d;
            }
        ),
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'pemegang', 'dt' => 1 ),
        array( 'db' => 'cabang',  'dt' => 2 ),
        array( 'db' => 'posisi',  'dt' => 3 ),
        array( 'db' => 'team','dt' => 4)
    );
}

 
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