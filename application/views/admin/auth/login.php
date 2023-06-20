<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Admin Login to Dashboard">
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
    </head>
    
    <body class="app sidebar-mini ltr login-img">

        <!-- BACKGROUND-IMAGE -->
        <div class="">
            <!-- GLOABAL LOADER -->
            <div id="global-loader">
                <img src="<?= base_url() ?>assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>
            <!-- /GLOABAL LOADER -->

            <!-- PAGE -->
            <div class="page">

                <div class="">
                    <!-- <div class="dropdown float-end custom-layout">
                        <div class="demo-icon nav-link icon mt-4">
                            <i class="fe fe-settings fa-spin text_primary"></i>
                        </div>
                    </div> -->
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="<?= base_url() ?>"><img src="<?= img_url(logo) ?>" class="header-brand-img" alt=""></a>
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" method="post" action="admin-auth">
                            <span class="login100-form-title pb-5">
                                Login
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <!-- <ul class="nav panel-tabs">
                                            <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a></li>
                                            <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">Mobile</a></li>
                                        </ul> -->
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <?php if(Alert('message')): ?>
                                                <div class="alert alert-danger py-2" role="alert">
                                                    <?= Alert('message')?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="wrap-input100 mb-0 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <?= csrf_field() ?>
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="email" placeholder="Email" name="email" value="<?= $mail ?><?= set_value('email') ?>">
                                            </div>
                                            <?= form_error('email') ?>
                                            <div class="wrap-input100 mb-0 mt-2 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="password" value="<?= $pass ?><?= set_value('password') ?>">
                                            </div>
                                            <?= form_error('password') ?>
                                            <div class="row pt-2">
                                                <div class="col-12 col-md-6 text-start">
                                                    <input type="checkbox" name="remember" <?= $checked ?> value="<?= $box ?>" id="remember">
                                                    <label for="remember"> Remember Me </label>
                                                </div>
                                                <div class="col-12 col-md-6 text-end">
                                                    <p class="mb-0"><a href="<?= base_url('admin/forgot-password') ?>" class="text-primary ms-1">Forgot Password?</a></p>
                                                </div>
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button type="submit" class="login100-form-btn btn-primary">
                                                    Login
                                                </button>
                                            </div>
                                            <label class="login-social-icon"><span>Login with Social</span></label>
                                            <div class="d-flex justify-content-center">
                                                <a href="javascript:void(0)">
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-google"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login text-center">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <span>+91</span>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0">
                                            </div>
                                            <div id="login-otp" class="justify-content-around mb-5">
                                                <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                            </div>
                                            <span>Note : Login with registered mobile number to generate OTP.</span>
                                            <div class="container-login100-form-btn ">
                                                <a href="javascript:void(0)" class="login100-form-btn btn-primary" id="generate-otp">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
    
    
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

        
       <!-- SHOW PASSWORD JS -->
       <script src="<?= base_url() ?>assets/js/show-password.min.js"></script> 
       
       <!-- GENERATE OTP JS -->
       <script src="<?= base_url() ?>assets/js/generate-otp.js"></script>
    
        <!-- Color Theme js -->
        <script src="<?= base_url() ?>assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="<?= base_url() ?>assets/js/custom.js"></script>

    </body>
    <script>
        $("body").on('click','#remember',function(){
            let isChecked = $(this).is(':checked');
            if(isChecked==true){
                $(this).val(1);
            }else{
                $(this).val(0);
            }
        });
    </script>
</html>   