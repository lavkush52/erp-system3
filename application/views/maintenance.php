<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="<?= author ?>">
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= img_url(favicon) ?>" />
        <!-- TITLE -->
        <title><?= (isset($title) && !empty($title)) ? $title : site_name ?></title>
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
        <style type="text/css">
            .cursor-none{
                cursor: default;
            }
        </style>
    </head>
    
    <body class="app sidebar-mini ltr login-img">
        <!-- BACKGROUND-IMAGE -->
        <div class="">
            <!-- PAGE -->
            <div class="page">
                <div class="">
                    <!-- PAGE-CONTENT OPEN -->
                    <div class="page-content error-page error2 text-white">
                        <div class="container text-center">
                            <div class="error-template">
                                <h1 class="display-3 mb-2"><?= $title ?></h1>
                                <div class="demo-icon nav-link icon justify-content-center text-white cursor-none">
                                    <i class="fe fe-settings fa-spin  text_primary"></i>
                                </div>
                                <!-- <div class="text-center">
                                    <a class="btn btn-secondary mt-5 mb-5" href="<?= historyURL ?>">
                                        <i class="fa fa-long-arrow-left"></i> <?= historyBtn ?>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- PAGE-CONTENT OPEN CLOSED -->
                </div>
            </div>
            <!-- END PAGE -->
        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->
        <!-- JQUERY JS -->
        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="<?= base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Color Theme js -->
        <script src="<?= base_url() ?>assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="<?= base_url() ?>assets/js/custom.js"></script>

    </body>

</html>   