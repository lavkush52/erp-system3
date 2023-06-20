<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="<?= author ?>">
        
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= img_url(favicon) ?>" />

        <!-- TITLE -->
        <title><?= (isset($title) && !empty($title)) ? $title.' - '.site_name : site_name ?></title>
        
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/css/dark-style.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/css/transparent-style.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/skin-modes.css" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url() ?>assets/colors/color1.css" />
    
        <!-- INTERNAL Switcher css -->
        <link href="<?= base_url() ?>assets/switcher/css/switcher.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/switcher/demo.css" rel="stylesheet" />
        <style type="text/css">
            .sidebar .tab-menu-heading {
                top: 0;
                position: sticky;
                z-index: 99;
            }
            .tabs-menu.border-bottom {
                z-index: 99;
                position: sticky;
                top: 52px;
                background: white;
            }
            .transparent-mode .tabs-menu.border-bottom {
                background: transparent;
            }
            .form-control {
                display: block;
                width: 100%;
                padding: .375rem .75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }
            .form-select {
                /*display: block;
                width: 100%;
                padding: .375rem 2.25rem .375rem .75rem;
                -moz-padding-start: calc(0.75rem - 3px);
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right .75rem center;
                background-size: 16px 12px;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;*/
            }
            #ui_notifIt{
                width: fit-content !important;
                height: auto !important;
                padding: 0px 25px !important;
            }
        </style>
    </head>    
    
    <body class="app sidebar-mini ltr">
            
        <!-- Switcher -->
        <?php switcher() ?>
        <!-- End Switcher -->
        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="<?= base_url() ?>assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- app-Header -->
                <?php app_header() ?>
                <!-- /app-Header -->
                
                <!--APP-SIDEBAR-->
                <?php sidebar() ?>
                <!--/APP-SIDEBAR-->