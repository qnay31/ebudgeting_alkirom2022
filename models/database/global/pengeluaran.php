<?php

if ($_GET["id_lapGlobal"] == "") {
    // program
$q = mysqli_query($conn, "SELECT * FROM 2022_data_program");
$i = 1;
$sql = $q;
while($r = mysqli_fetch_array($sql))
{
    $i++;

    $d_anggaran = $r['anggaran_global'];
    $total_anggaran[$i] = $d_anggaran;

    $hasil_anggaran = array_sum($total_anggaran);

    $d_terpakai = $r['terpakai_global'];
    $total_terpakai[$i] = $d_terpakai;

    $hasil_terpakai = array_sum($total_terpakai);
}

// logistik
$q2 = mysqli_query($conn, "SELECT * FROM 2022_data_logistik");
$sql2 = $q2;
while($r2 = mysqli_fetch_array($sql2))
{
    $i++;   
    $d_anggaran2 = $r2['anggaran_global'];
    $total_anggaran2[$i] = $d_anggaran2;

    $hasil_anggaran2 = array_sum($total_anggaran2);

    $d_terpakai2 = $r2['terpakai_global'];
    $total_terpakai2[$i] = $d_terpakai2;

    $hasil_terpakai2 = array_sum($total_terpakai2);
}

// humas
$q3 = mysqli_query($conn, "SELECT * FROM 2022_data_aset_yayasan");
$sql3 = $q3;
while($r3 = mysqli_fetch_array($sql3))
{
    $i++;   
    $d_anggaran3 = $r3['anggaran_global'];
    $total_anggaran3[$i] = $d_anggaran3;

    $hasil_anggaran3 = array_sum($total_anggaran3);

    $d_terpakai3 = $r3['terpakai_global'];
    $total_terpakai3[$i] = $d_terpakai3;

    $hasil_terpakai3 = array_sum($total_terpakai3);
}

// aset yayasan
$q4 = mysqli_query($conn, "SELECT * FROM 2022_data_uang_makan");
$sql4 = $q4;
while($r4 = mysqli_fetch_array($sql4))
{
    $i++;   
    $d_anggaran4 = $r4['anggaran_global'];
    $total_anggaran4[$i] = $d_anggaran4;

    $hasil_anggaran4 = array_sum($total_anggaran4);

    $d_terpakai4 = $r4['terpakai_global'];
    $total_terpakai4[$i] = $d_terpakai4;

    $hasil_terpakai4 = array_sum($total_terpakai4);
}

$q5 = mysqli_query($conn, "SELECT * FROM 2022_data_gaji_karyawan");
$sql5 = $q5;
while($r5 = mysqli_fetch_array($sql5))
{
    $i++;   
    $d_anggaran5 = $r5['anggaran_global'];
    $total_anggaran5[$i] = $d_anggaran5;

    $hasil_anggaran5 = array_sum($total_anggaran5);

    $d_terpakai5 = $r5['terpakai_global'];
    $total_terpakai5[$i] = $d_terpakai5;

    $hasil_terpakai5 = array_sum($total_terpakai5);
}

$q6 = mysqli_query($conn, "SELECT * FROM 2022_data_anggaran_lain");
$sql6 = $q6;
while($r6 = mysqli_fetch_array($sql6))
{
    $i++; 
    $d_anggaran6 = $r6['anggaran_global'];
    $total_anggaran6[$i] = $d_anggaran6;

    $hasil_anggaran6 = array_sum($total_anggaran6);

    $d_terpakai6 = $r6['terpakai_global'];
    $total_terpakai6[$i] = $d_terpakai6;

    $hasil_terpakai6 = array_sum($total_terpakai6);
}

$q7 = mysqli_query($conn, "SELECT * FROM 2022_data_maintenance");
$sql7 = $q7;
while($r7 = mysqli_fetch_array($sql7))
{
    $i++; 
    $d_anggaran7 = $r7['anggaran_global'];
    $total_anggaran7[$i] = $d_anggaran7;

    $hasil_anggaran7 = array_sum($total_anggaran7);

    $d_terpakai7 = $r7['terpakai_global'];
    $total_terpakai7[$i] = $d_terpakai7;

    $hasil_terpakai7 = array_sum($total_terpakai7);
}

$q8 = mysqli_query($conn, "SELECT * FROM 2022_data_operasional_yayasan");
$sql8 = $q8;
while($r8 = mysqli_fetch_array($sql8))
{
    $i++; 
    $d_anggaran8 = $r8['anggaran_global'];
    $total_anggaran8[$i] = $d_anggaran8;

    $hasil_anggaran8 = array_sum($total_anggaran8);

    $d_terpakai8 = $r8['terpakai_global'];
    $total_terpakai8[$i] = $d_terpakai8;

    $hasil_terpakai8 = array_sum($total_terpakai8);
}

$anggaran_global = $hasil_anggaran+$hasil_anggaran2+$hasil_anggaran3+$hasil_anggaran4+$hasil_anggaran5+$hasil_anggaran6+$hasil_anggaran7+$hasil_anggaran8;

// die(var_dump($hasil_anggaran9));

$terpakai_global = $hasil_terpakai+$hasil_terpakai2+$hasil_terpakai3+$hasil_terpakai4+$hasil_terpakai5+$hasil_terpakai6+$hasil_terpakai7+$hasil_terpakai8;

$cashback_global = $anggaran_global-$terpakai_global;

} else {
    // program
$q = mysqli_query($conn, "SELECT * FROM data_program");
$i = 1;
$sql = $q;
while($r = mysqli_fetch_array($sql))
{
    $i++;

    $d_anggaran = $r['anggaran_global'];
    $total_anggaran[$i] = $d_anggaran;

    $hasil_anggaran = array_sum($total_anggaran);

    $d_terpakai = $r['terpakai_global'];
    $total_terpakai[$i] = $d_terpakai;

    $hasil_terpakai = array_sum($total_terpakai);
}

// logistik
$q2 = mysqli_query($conn, "SELECT * FROM data_logistik");
$sql2 = $q2;
while($r2 = mysqli_fetch_array($sql2))
{
    $i++;   
    $d_anggaran2 = $r2['anggaran_global'];
    $total_anggaran2[$i] = $d_anggaran2;

    $hasil_anggaran2 = array_sum($total_anggaran2);

    $d_terpakai2 = $r2['terpakai_global'];
    $total_terpakai2[$i] = $d_terpakai2;

    $hasil_terpakai2 = array_sum($total_terpakai2);
}

// humas
$q3 = mysqli_query($conn, "SELECT * FROM data_humas");
$sql3 = $q3;
while($r3 = mysqli_fetch_array($sql3))
{
    $i++;   
    $d_anggaran3 = $r3['anggaran_global'];
    $total_anggaran3[$i] = $d_anggaran3;

    $hasil_anggaran3 = array_sum($total_anggaran3);

    $d_terpakai3 = $r3['terpakai_global'];
    $total_terpakai3[$i] = $d_terpakai3;

    $hasil_terpakai3 = array_sum($total_terpakai3);
}

// aset yayasan
$q4 = mysqli_query($conn, "SELECT * FROM data_aset_yayasan");
$sql4 = $q4;
while($r4 = mysqli_fetch_array($sql4))
{
    $i++;   
    $d_anggaran4 = $r4['anggaran_global'];
    $total_anggaran4[$i] = $d_anggaran4;

    $hasil_anggaran4 = array_sum($total_anggaran4);

    $d_terpakai4 = $r4['terpakai_global'];
    $total_terpakai4[$i] = $d_terpakai4;

    $hasil_terpakai4 = array_sum($total_terpakai4);
}

$q5 = mysqli_query($conn, "SELECT * FROM data_baksos");
$sql5 = $q5;
while($r5 = mysqli_fetch_array($sql5))
{
    $i++;   
    $d_anggaran5 = $r5['anggaran_global'];
    $total_anggaran5[$i] = $d_anggaran5;

    $hasil_anggaran5 = array_sum($total_anggaran5);

    $d_terpakai5 = $r5['terpakai_global'];
    $total_terpakai5[$i] = $d_terpakai5;

    $hasil_terpakai5 = array_sum($total_terpakai5);
}

$q6 = mysqli_query($conn, "SELECT * FROM data_gaji");
$sql6 = $q6;
while($r6 = mysqli_fetch_array($sql6))
{
    $i++; 
    $d_anggaran6 = $r6['anggaran_global'];
    $total_anggaran6[$i] = $d_anggaran6;

    $hasil_anggaran6 = array_sum($total_anggaran6);

    $d_terpakai6 = $r6['terpakai_global'];
    $total_terpakai6[$i] = $d_terpakai6;

    $hasil_terpakai6 = array_sum($total_terpakai6);
}

$q7 = mysqli_query($conn, "SELECT * FROM data_lainnya");
$sql7 = $q7;
while($r7 = mysqli_fetch_array($sql7))
{
    $i++; 
    $d_anggaran7 = $r7['anggaran_global'];
    $total_anggaran7[$i] = $d_anggaran7;

    $hasil_anggaran7 = array_sum($total_anggaran7);

    $d_terpakai7 = $r7['terpakai_global'];
    $total_terpakai7[$i] = $d_terpakai7;

    $hasil_terpakai7 = array_sum($total_terpakai7);
}

$q8 = mysqli_query($conn, "SELECT * FROM data_maintenance");
$sql8 = $q8;
while($r8 = mysqli_fetch_array($sql8))
{
    $i++; 
    $d_anggaran8 = $r8['anggaran_global'];
    $total_anggaran8[$i] = $d_anggaran8;

    $hasil_anggaran8 = array_sum($total_anggaran8);

    $d_terpakai8 = $r8['terpakai_global'];
    $total_terpakai8[$i] = $d_terpakai8;

    $hasil_terpakai8 = array_sum($total_terpakai8);
}

$q9 = mysqli_query($conn, "SELECT * FROM data_operasional_yayasan");
$sql9 = $q9;
while($r9 = mysqli_fetch_array($sql9))
{
    $i++;  
    $d_anggaran9 = $r9['anggaran_global'];
    $total_anggaran9[$i] = $d_anggaran9;

    $hasil_anggaran9 = array_sum($total_anggaran9); 

    $d_terpakai9 = $r9['terpakai_global'];
    $total_terpakai9[$i] = $d_terpakai9;

    $hasil_terpakai9 = array_sum($total_terpakai9);
}

$anggaran_global = $hasil_anggaran+$hasil_anggaran2+$hasil_anggaran3+$hasil_anggaran4+$hasil_anggaran5+$hasil_anggaran6+$hasil_anggaran7+$hasil_anggaran8+$hasil_anggaran9;


$terpakai_global = $hasil_terpakai+$hasil_terpakai2+$hasil_terpakai3+$hasil_terpakai4+$hasil_terpakai5+$hasil_terpakai6+$hasil_terpakai7+$hasil_terpakai8+$hasil_terpakai9;
// die(var_dump($hasil_terpakai8));

$cashback_global = $anggaran_global-$terpakai_global;

}

?>
<div class="card-body">
    <h5 class="card-title">PENGELUARAN YAYASAN</h5>
    <div class="row justify-content-start">
        <!-- Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Anggaran <span>| Global</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp. <?= number_format($anggaran_global,0,"." , ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card -->

        <!-- Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Terpakai <span>| Global</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-graph-down"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp. <?= number_format($terpakai_global,0,"." , ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card -->

        <!-- Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Cashback <span>| Global</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp. <?= number_format($cashback_global,0,"." , ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card -->
    </div>
</div>