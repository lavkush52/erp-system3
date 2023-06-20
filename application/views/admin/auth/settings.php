<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

        
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title"><?= $title ?></h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <form class="card needs-validation" id="setting-form" action="/update-setting" novalidate>
                        <div class="card-header">
                            <h3 class="card-title">Edit <?= $title ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group has-validation">
                                        <?= csrf_field() ?>
                                        <label for="site-name" class="form-label">Site Name</label>
                                        <input type="hidden" class="form-control" value="<?= $id ?>" name="id">
                                        <input type="text" class="form-control" required value="<?= $name ?>" name="site-name" id="site-name" placeholder="Site Name">
                                        <div class="invalid-feedback">
                                            Please enter site name.
                                          </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group has-validation">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" required value="<?= $email ?>" name="email" id="email" placeholder="Email">
                                        <div class="invalid-feedback">
                                            Please enter valid email.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="support-mail" class="form-label">Support Email</label>
                                        <input type="email" name="support-mail" required value="<?= $semail ?>" class="form-control" id="support-mail" placeholder="Support Email">
                                        <div class="invalid-feedback">
                                            Please enter valid support email.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="mobile" class="form-label">Contact Number</label>
                                        <input type="text" name="mobile" required value="<?= $mobile ?>" class="form-control" id="mobile" placeholder="Contact number">
                                        <div class="invalid-feedback">
                                            Please enter valid contact number.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="support-mobile" class="form-label">Support Contact</label>
                                        <input type="text" class="form-control" required value="<?= $scontact ?>" name="support-mobile" id="support-mobile" placeholder="Support contact">
                                        <div class="invalid-feedback">
                                            Please enter valid support contact number.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="copyright" class="form-label">Copyright text</label>
                                        <input type="text" class="form-control" required value="<?= $copyright ?>" name="copyright" id="copyright" placeholder="Copyright text">
                                        <div class="invalid-feedback">
                                            Please enter copyright text.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input type="hidden" class="form-control" value="<?= $logo ?>" name="old-logo">
                                        <input type="file" class="form-control" name="logo" id="logo" placeholder="Logo">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="favicon" class="form-label">Favicon</label>
                                        <input type="hidden" class="form-control" value="<?= $fav ?>" name="old-favicon">
                                        <input type="file" class="form-control" name="favicon" id="favicon" placeholder="Favicon">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="site-status" class="form-label">Site Status</label>
                                        <select class="form-select" required id="site-status" name="site-status">
                                            <option value="Active" <?= !empty($status) && $status == "Active" ? 'selected' : ""; ?>>Active</option>
                                            <option value="Inactive" <?= !empty($status) && $status == "Inactive" ? 'selected' : ""; ?>>Inactive</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please choose a site status.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address</label>
                                        <input class="form-control" id="address" required value="<?= $address ?>" name="address" placeholder="Address">
                                        <div class="invalid-feedback">
                                            Please enter address.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="button" class="btn btn-success ajax-btn my-1">Save</button>
                            <a href="javascript:void(0)" class="btn btn-danger my-1">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->


        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>