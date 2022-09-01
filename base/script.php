<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/js/jquery-3.4.1.min.js"></script>

<?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
<?php } else { ?>
<!-- canvas images -->
<script src="https://apps.sistemit.com/tutorial/html2canvas/jquery.min.js"></script>
<script src="https://apps.sistemit.com/tutorial/html2canvas/html2canvas.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<?php 
    if (
    $_SESSION["id_pengurus"] == "manager_facebook" || 
    $_SESSION["id_pengurus"] == "manager_instagram" || 
    $_SESSION["id_pengurus"] == "facebook_depok" || 
    $_SESSION["id_pengurus"] == "facebook_bogor" || 
    $_SESSION["id_pengurus"] == "instagram" ||
    $_GET["idTeam"] == "teamMedia" || 
    $_GET["idTeam"] == "changeMedia" || 
    $_GET["idTeam"] == "listMedia" ||
    $_GET["id_database"] == "database_harianMedia" ||
    $_GET["id_database"] == "database_incomeTim"
    ) { ?>

<?php } else { ?>
<!-- chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/chart.js?v=<?= filemtime('../assets/js/chart.js'); ?>"></script>
<?php } ?>

<?php } ?>


<!-- datatable -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
<?php } else { ?>
<!-- file export -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>
<!-- rowGroup -->
<script src="https://cdn.datatables.net/rowgroup/1.0.2/js/dataTables.rowGroup.min.js"></script>

<!-- searchPane -->
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/searchPanes.bootstrap5.min.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

<!-- owl corosel -->
<script src="../owlcarousel/owl.carousel.js"></script>
<?php } ?>

<?php if (
    $_SESSION["id_pengurus"] == "ketua_yayasan" ||
    $_SESSION["id_pengurus"] == "management_keuangan" ||
    $_SESSION["id_pengurus"] == "kepala_pengajuan"
    ) { ?>
<!-- splide -->
<script src="../assets/js/splide.js"></script>
<?php } ?>
<script src="../assets/js/sweetalert2.min.js"></script>

<?php if ($_SESSION["id_pengurus"] == "kepala_income") { ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

<?php } ?>

<!-- Template Main JS File -->
<script src="../assets/js/jquery.mask.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/sub-main.js?v=<?= filemtime('../assets/js/sub-main.js'); ?>"></script>
<script src="../assets/js/table.js?v=<?= filemtime('../assets/js/table.js'); ?>"></script>