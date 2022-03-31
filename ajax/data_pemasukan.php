<?php
session_start();
require '../function.php';
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
if ($_SESSION["id_income"] == "") {
    $table = '2022_income';

} else {
    $table = '2022_incometanparesi';
}

// Table's primary key
$primaryKey = 'id';

if (
    $_SESSION["id_pengurus"] == "ketua_yayasan" || 
    $_SESSION["id_pengurus"] == "kepala_income" || 
    $_SESSION["id_pengurus"] == "management_keuangan"
    ) {

if ($_SESSION["periode"] == "") {
    if ($_SESSION["idMedia"] == "fbDepok") {
        $gedung = 'Facebook Depok';

    } elseif ($_SESSION["idMedia"] == "fbBogor") {
        $gedung = 'Facebook Bogor';

    } elseif ($_SESSION["idMedia"] == "nonResi") {
        $gedung = 'Tanpa Resi   ';
    } else {
        $gedung = 'Instagram';
    }
    if ($_SESSION["idMedia"] == "") {
        $where  = "status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
    } else {
        $where  = "gedung = '$gedung' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
    }
    

} else {
    if ($_SESSION["idMedia"] == "fbDepok") {
        $gedung = 'Facebook Depok';

    } elseif ($_SESSION["idMedia"] == "fbBogor") {
        $gedung = 'Facebook Bogor';

    } else {
        $gedung = 'Instagram';
    }
    if ($_SESSION["idMedia"] == "mediaGlobal" || $_SESSION["idMedia"] == "nonResi") {
        $where  = "MONTH(tgl_pemasukan) = '$_SESSION[periode]' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
        
    } else {
        $where  = "gedung = '$gedung' AND MONTH(tgl_pemasukan) = '$_SESSION[periode]' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
    }
}


} elseif ($_SESSION["id_pengurus"] == "manager_instagram") {

    if ($_SESSION["periode"] == "") {
        $where  = "gedung = 'Instagram' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
    } else {
        if ($_SESSION["idMedia"] == "") {
            $where  = "gedung = 'Instagram' AND MONTH(tgl_pemasukan) = '$_SESSION[periode]' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
            
        } else {
            if ($_SESSION["idMedia"] == "fbDepok") {
                $gedung = 'Facebook Depok';
        
            } elseif ($_SESSION["idMedia"] == "fbBogor") {
                $gedung = 'Facebook Bogor';
        
            } else {
                $gedung = 'Instagram';
            }
            $where  = "gedung = '$gedung' AND MONTH(tgl_pemasukan) = '$_SESSION[periode]' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
        }
        
    }
    

} else {
    if ($_SESSION["cabang"] == "Depok") {
        $gedung = 'Facebook Depok';
    } else {
        $gedung = 'Facebook Bogor';
    }
    
    if ($_SESSION["periode"] == "") {
        $where  = "gedung = '$gedung' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
    } else {
        if ($_SESSION["idMedia"] == "") {
            $where  = "gedung = '$gedung' AND MONTH(tgl_pemasukan) = '$_SESSION[periode]' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
        } else {
            if ($_SESSION["idMedia"] == "fbDepok") {
                $gedung = 'Facebook Depok';
        
            } elseif ($_SESSION["idMedia"] == "fbBogor") {
                $gedung = 'Facebook Bogor';
        
            } else {
                $gedung = 'Instagram';
            }
            $where  = "gedung = '$gedung' AND MONTH(tgl_pemasukan) = '$_SESSION[periode]' AND status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC";
        }
        
    }
    
    
}
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 
        'db'        => 'kategori', 
        'dt'        => 1,
        'formatter' => function($d, $row) {
            return "Income "."$d";
        }),
    array( 'db' => 'posisi', 'dt' => 2 ),
    array( 
        'db'        => 'gedung',  
        'dt'        => 3,
        'formatter' => function($d, $row) {
            return "Income "."$d";
        } ),
    array(
        'db'        => 'tgl_pemasukan',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            $convert = date( 'd F Y', strtotime($d));
            $bulan   = substr($convert, 2);
            return $bulan;
        }
    ),
    array(
        'db'        => 'tgl_pemasukan',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ),   
    array( 'db' => 'status', 'dt' => 6 ),
    array(
        'db'        => 'income',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    )
);
 
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