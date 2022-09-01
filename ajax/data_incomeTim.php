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

if ($_SESSION["id_pengurus"] == "manager_instagram") {
    if ($_SESSION["username"] == "instagram_taman") {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            $team = "Instagram Taman";
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    
    } elseif ($_SESSION["username"] == "instagram_bojong") {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            $team = "Instagram Bojong";
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    } elseif ($_SESSION["username"] == "instagram_neruyung") {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            $team = "Instagram Meruyung";
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    
    } else {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            if ($_SESSION["idTable"] == "igA") {
                $team = "Instagram Taman";
    
            } elseif ($_SESSION["idTable"] == "igB") {
                $team = "Instagram Bojong";
    
            } else {
                $team = "Instagram Meruyung";
            }
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    }

} elseif ($_SESSION["id_pengurus"] == "manager_facebook") {
    if ($_SESSION["username"] == "facebook_taman") {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            $team = "Facebook Taman";
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    
    } elseif ($_SESSION["username"] == "facebook_pusat") {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            $team = "Facebook Pusat";
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    } elseif ($_SESSION["username"] == "admin_facebook") {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            $team = "Facebook Taman II";
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    } elseif ($_SESSION["username"] == "facebook_bojong") {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            $team = "Facebook Bojong";
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    
    } else {
        if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
            $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
    
        } else {
            if ($_SESSION["idTable"] == "fbI") {
                $team = "Facebook Taman";
    
            } elseif ($_SESSION["idTable"] == "fbII") {
                $team = "Facebook Pusat";
    
            } elseif ($_SESSION["idTable"] == "fbIII") {
                $team = "Facebook Taman II";
    
            } else {
                $team = "Facebook Bojong";
            }
    
            if ($_SESSION["idTable"] == "") {
                if ($_SESSION["idDate"] == "") {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
    
            } else {
                if ($_SESSION["idDate"] == "") {
                    if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                        $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    } else {
                        $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                    }
                    
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
            }
        }
    }

} else {
    if ($_SESSION["id_periode"] == "" && $_SESSION["idTable"] == "") {
        $where = "status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";

    } else {
        if ($_SESSION["idTable"] == "fbI") {
            $team = "Facebook Taman";

        } elseif ($_SESSION["idTable"] == "fbII") {
            $team = "Facebook Pusat";

        } elseif ($_SESSION["idTable"] == "fbIII") {
            $team = "Facebook Taman II";

        } elseif ($_SESSION["idTable"] == "fbIV") {
            $team = "Facebook Bojong";

        } elseif ($_SESSION["idTable"] == "igA") {
            $team = "Instagram Taman";

        } elseif ($_SESSION["idTable"] == "igB") {
            $team = "Instagram Bojong";

        } else {
            $team = "Instagram Meruyung";
        }

        if ($_SESSION["idTable"] == "") {
            if ($_SESSION["idDate"] == "") {
                $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                
            } else {
                $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
            }

        } else {
            if ($_SESSION["idDate"] == "") {
                if ($_SESSION["idDate"] == "" && $_SESSION["id_periode"] == "") {
                    $where  = "team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                } else {
                    $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
                }
                
            } else {
                $where  = "MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND DAY(tanggal_tf) = '$_SESSION[idDate]' AND team = '$team' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC";
            }
        }
    }
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