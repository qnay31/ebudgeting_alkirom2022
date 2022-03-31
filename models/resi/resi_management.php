<?php  
require '../../function.php';
error_reporting(0);

if(isset($_POST["data_id"])){
	$data_id = $_POST["data_id"];
	$data_management   = $_POST["data_management"];
	$output = "";
	$q = mysqli_query($conn, "SELECT * FROM 2022_galeri_$data_management WHERE nomor_id = '$data_id'");

    $query = mysqli_query($conn, "SELECT * FROM 2022_$data_management WHERE id = '$data_id' ");
    $hasil = mysqli_fetch_assoc($query);
    if ($hasil["id_pengurus"] == "kepala_logistik") {
        $deskripsi = $hasil["deskripsi_pemakaian"];
    } else {
        $deskripsi = $hasil["pemakaian"];
    }
    
    $new_desk   = ucwords($deskripsi);
    
    // die(var_dump($deskripsi));
    $output .= '
    <div class="table-responsive">  
        <div class="owl-carousel owl-theme">'; 
	$output .= 
    $i = "Bukti Resi $new_desk";
    $sql = $q;
    while($data = mysqli_fetch_array($sql))
    {
        $output .= ' 
        <div class="item">  
        <img src="../assets/img/laporan/'.$data_management.'/'.$data["dokumentasi"].' " alt="">
        </div> 
        ';    
    } 
    $output .= "
	</div>
    </div>";  

    echo $output;  
    }

?>

<script>
$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
})
</script>