<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Ebudgeting Alkirom Amanah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php if ($_GET["id_profil"] == "logActivity" || $_GET["id_adminKey"] == "logActivity") { ?>
    <meta http-equiv="refresh" content="300" />
    <?php } ?>

    <!-- share -->
    <meta property="og:url" content="https://edaily.alkiromamanah.com/" />
    <meta property="og:type" content="Ebudgeting" />
    <meta property="og:title" content="Ebudgeting Alkirom Amanah" />
    <meta property="og:description" content='Situs resmi ebudgeting Yayasan Alkirom Amanah'>
    <meta property="og:image" content='../assets/img/icons/logo_favicon.png' />
    <meta property="og:image:type" content="image/jpg">

    <meta property="og:image:width" content="300" />

    <!-- Favicons -->
    <link href="../assets/img/icons/logo_favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
    <?php if (
    $_SESSION["id_pengurus"] == "ketua_yayasan" ||
    $_SESSION["id_pengurus"] == "management_keuangan" ||
    $_SESSION["id_pengurus"] == "kepala_pengajuan"
    ) { ?>
    <!-- splide -->
    <link rel="stylesheet" href="../assets/css/splide.min.css">
    <link rel="stylesheet" href="../assets/css/themes/splide-skyblue.min.css">
    <?php } ?>

    <!-- fontawesome -->
    <?php if ($_GET["id_profil"] == "myProfil") { ?>
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <?php } ?>

    <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
    <?php } else { ?>
    <!-- owl corousel -->
    <link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.min.css">
    <?php } ?>

    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap5.min.css" />

    <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
    <?php } else { ?>
    <!-- rowGroup -->
    <link href="https://cdn.datatables.net/rowgroup/1.0.2/css/rowGroup.dataTables.min.css" rel="stylesheet"
        type="text/css" />

    <!-- searchPane -->
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css">
    <?php } ?>
    
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
    
    <?php if ($_SESSION["id_pengurus"] == "kepala_income") { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css">
    <?php } ?>

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css?v=<?= filemtime('../assets/css/style.css'); ?>" rel="stylesheet">
    <link href="../assets/css/responsive.css?v=<?= filemtime('../assets/css/responsive.css'); ?>" rel="stylesheet">
</head>