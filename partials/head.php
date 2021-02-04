<?php
$ret = "SELECT * FROM `system_settings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
    <!DOCTYPE html>
    <html>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $sys->sys_name; ?> | <?php echo $sys->sys_tagline; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../public/css/back_office.css">
        <!-- Select -->
        <link rel="stylesheet" type="text/css" href="../public/plugins/select2/css/select2.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        <link rel="stylesheet" type="text/css" href="../public/plugins/table/datatable/custom_dt_html5.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Sweet Alerts -->
        <script src="../public/plugins/sweetalerts/sweetalert2.min.js"></script>
        <link href="../public/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <!-- Init Swal -->
        <?php if (isset($success)) { ?>
            <script>
                setTimeout(function() {
                        swal(
                            "Success", "<?php echo $success; ?>", "success",
                        );
                    },
                    100);
            </script>

        <?php } ?>

        <?php if (isset($err)) { ?>
            <script>
                setTimeout(function() {
                        swal("Failed", "<?php echo $err; ?>", "error", );
                    },
                    100);
            </script>

        <?php } ?>
        <?php if (isset($info)) { ?>
            <script>
                setTimeout(function() {
                        swal("Success", "<?php echo $info; ?>", "warning");
                    },
                    100);
            </script>

    <?php }
    }
    ?>

    </head>