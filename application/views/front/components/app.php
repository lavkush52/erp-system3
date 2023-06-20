<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Codeigniter Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="<?= author ?>">
    <meta name="keywords" content=""> <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= img_url(favicon) ?>" /> <!-- TITLE -->
    <title><?= (isset($title) && !empty($title)) ? $title.' - '.site_name : site_name ?></title> <!-- FAVICON -->
    <link id="style" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" /> <!-- STYLE CSS -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/dark-style.css" rel="stylesheet" />
    <!--- FONT-ICONS CSS -->
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" /> <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url() ?>assets/colors/color1.css" /> <!-- INTERNAL Switcher css -->
    <link href="<?= base_url() ?>assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/switcher/demo.css" rel="stylesheet" />
    <style type="text/css">
        .landing-top-header{
            background-image: none;
        }
        .landing-top-header:before{
            background-image: none;
        }
    </style>
</head>

<body class="app ltr landing-page horizontal">
    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3 d-grid gap-2"> <a href="https://codeigniter.spruko.com/sash/" class="btn ripple btn-primary mt-0">View Demo</a> <a href="https://themeforest.net/item/sash-codeigniter-admin-dashboard-template/37935415?s_rank=6" class="btn ripple btn-secondary">Buy Now</a> <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our Portfolio</a> </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>LTR and RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex"> <span class="me-auto">LTR Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked> <label for="myonoffswitch23" class="onoffswitch2-label"></label> </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2"> <span class="me-auto">RTL Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox"> <label for="myonoffswitch24" class="onoffswitch2-label"></label> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex"> <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked> <label for="myonoffswitch1" class="onoffswitch2-label"></label> </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox"> <label for="myonoffswitch2" class="onoffswitch2-label"></label> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4"> <button class="btn btn-danger btn-block" onclick="localStorage.clear();document.querySelector('html').style = ''; resetData() ;" type="button">Reset All </button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Switcher -->
    <!-- GLOBAL-LOADER -->
    <div id="global-loader"> <img src="<?= base_url() ?>assets/images/loader.svg" class="loader-img" alt="Loader"> </div> <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <?php $this->load->view('front/components/header') ?>