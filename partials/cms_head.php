<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $sys->sys_name; ?> | <?php echo $sys->sys_tagline; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $sys->sys_name; ?>  <?php echo $sys->sys_tagline; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/cms_assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="public/cms_assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="public/cms_assets/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="public/cms_assets/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="public/cms_assets/plugins/OwlCarousel2-2.3.4/animate.css">
    <link href="public/cms_assets/plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="public/cms_assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="public/cms_assets/styles/responsive.css">
    <!-- Sweet Alerts -->
    <script src="public/plugins/sweetalerts/sweetalert2.min.js"></script>
    <link href="public/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
    ?>
</head>