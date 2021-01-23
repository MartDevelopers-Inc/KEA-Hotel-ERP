<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>KEA HOTEL Experience Life, Live The Moment</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="author" content="MartDevelopers Inc" />
    <meta name="description" content="Kea Hotel ERP — KEA -Hotel-ERP is a software solution tool developed for Hotel management and designed for hoteliers to manage their operations in an effective way" />

    <!-- Twitter data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@martmbithi">
    <meta name="twitter:title" content="KEA Hotel ERP">
    <meta name="twitter:description" content="Kea Hotel ERP — KEA -Hotel-ERP is a software solution tool developed for Hotel management and designed for hoteliers to manage their operations in an effective way" />
    <meta name="twitter:image" content="assets/images/social.html">

    <!-- Open Graph data -->
    <meta property="og:title" content="KEA Hotel ERP" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://github.com/MartDevelopers-Inc/KEA-Hotel-ERP" />
    <meta property="og:image" content="assets/images/social.html" />
    <meta property="og:description" content="Kea Hotel ERP — KEA -Hotel-ERP is a software solution tool developed for Hotel management and designed for hoteliers to manage their operations in an effective way" />
    <meta property="og:site_name" content="KEA Hotel ERP" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/android-chrome-512x512.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico" type="image/png">

    <!-- Styles -->
    <script src="staff/admin/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="staff/admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="staff/admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/demo/style-demo.css" />
    <!-- Swal Js -->
    <script src="staff/admin/plugins/sweetalerts/sweetalert2.min.js"></script>

    <?php if (isset($success)) { ?>
        <!--This code for injecting success alert-->
        <script>
            setTimeout(function() {
                    swal({
                        title: 'Success',
                        text: "<?php echo $success; ?>",
                        type: 'success',
                        padding: '2em'
                    })
                },
                100);
        </script>

    <?php } ?>
    

</head>