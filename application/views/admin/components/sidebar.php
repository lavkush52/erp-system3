<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header"> <a class="header-brand1" href="<?= base_url('admin/dashboard') ?>"> <img src="<?= img_url(logo) ?>" class="header-brand-img desktop-logo" alt="logo"> <img src="<?= img_url(logo) ?>" class="header-brand-img toggle-logo" alt="logo"> <img src="<?= img_url(logo) ?>" class="header-brand-img light-logo" alt="logo"> <img src="<?= img_url(logo) ?>" class="header-brand-img light-logo1" alt="logo"> </a> <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <!-- <li class="sub-category">
                    <h3>Main</h3>
                </li> -->
                <li class="slide"> <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?= base_url('admin/dashboard') ?>"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a> </li>
                <!-- <li class="sub-category">
                    <h3>UI Kit</h3>
                </li> -->
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Admin Users</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Admin Users</a></li>
                        <li><a href="add-admin" class="slide-item"> Add Admins</a></li>
                        <li><a href="view-admin" class="slide-item"> View Admin</a></li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Faculty</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu mega-slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Faculty</a></li>
                        <div class="mega-menu">
                            <div class="">
                                <ul>
                                    <li><a href="add-f aculty" class="slide-item"> Add Faculty</a></li>
                                    <li><a href="view-faculty" class="slide-item"> View Faculty</a></li>
                                    <li><a href="deleted-faculty" class="slide-item"> Deleted Faculty</a></li>
                                </ul>
                            </div>
                            <!-- <div class="">
                                <ul>
                                    <li><a href="listgroup.html" class="slide-item"> List Group</a></li>
                                    <li><a href="tags.html" class="slide-item"> Tags</a></li>
                                    <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
                                    <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
                                    <li><a href="typography.html" class="slide-item"> Typography</a></li>
                                    <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
                                    <li><a href="badge.html" class="slide-item"> Badges / Pills</a></li>
                                </ul>
                            </div>
                            <div class="">
                                <ul>
                                    <li><a href="panels.html" class="slide-item"> Panels</a></li>
                                    <li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
                                    <li><a href="offcanvas.html" class="slide-item"> Offcanvas</a></li>
                                    <li><a href="toast.html" class="slide-item"> toast</a></li>
                                    <li><a href="scrollspy.html" class="slide-item"> Scrollspy</a></li>
                                    <li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
                                </ul>
                            </div>
                            <div class="">
                                <ul>
                                    <li><a href="accordion.html" class="slide-item"> Accordions </a></li>
                                    <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                                    <li><a href="modal.html" class="slide-item"> Modal</a></li>
                                    <li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
                                    <li><a href="progress.html" class="slide-item"> Progress</a></li>
                                    <li><a href="carousel.html" class="slide-item"> Carousels</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </ul>
                </li>
                <!-- <li> <a class="side-menu__item has-link" href="landing-page.html" target="_blank"><i class="side-menu__icon fe fe-zap"></i><span class="side-menu__label">Landing Page</span><span class="badge bg-green br-5 side-badge blink-text pb-1">New</span></a> </li> -->
                <!-- <li class="sub-category">
                    <h3>Pre-build Pages</h3>
                </li> -->
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Students</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Students</a></li>
                        <li><a href="add-student" class="slide-item"> Add Students</a></li>
                        <li><a href="view-student" class="slide-item"> View Students</a></li>
                        <li><a href="deleted-student" class="slide-item"> Deleted Students</a></li>
                        <!-- <li><a href="email-compose.html" class="slide-item"> Mail-Compose</a></li>
                        <li><a href="email-inbox.html" class="slide-item"> Mail-Inbox</a></li>
                        <li><a href="email-read.html" class="slide-item"> Mail-Read</a></li>
                        <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                        <li class="sub-slide"> <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Forms</span><i class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="form-elements.html" class="sub-slide-item"> Form Elements</a></li>
                                <li><a href="form-layouts.html" class="sub-slide-item"> Form Layouts</a></li>
                                <li><a href="form-advanced.html" class="sub-slide-item"> Form Advanced</a></li>
                                <li><a href="form-editor.html" class="sub-slide-item"> Form Editor</a></li>
                                <li><a href="form-wizard.html" class="sub-slide-item"> Form Wizard</a></li>
                                <li><a href="form-validation.html" class="sub-slide-item"> Form Validation</a></li>
                                <li><a href="form-input-spinners.html" class="sub-slide-item"> Form Input Spinners</a></li>
                            </ul>
                        </li>
                        <li class="sub-slide"> <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Tables</span><i class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="tables.html" class="sub-slide-item">Default table</a></li>
                                <li><a href="datatable.html" class="sub-slide-item"> Data Tables</a></li>
                                <li><a href="edit-table.html" class="sub-slide-item"> Edit Tables</a></li>
                                <li><a href="extension-tables.html" class="sub-slide-item"> Extension Tables</a></li>
                            </ul>
                        </li>
                        <li class="sub-slide"> <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Extension</span><i class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="about.html" class="sub-slide-item"> About Company</a></li>
                                <li><a href="services.html" class="sub-slide-item"> Services</a></li>
                                <li><a href="faq.html" class="sub-slide-item"> FAQS</a></li>
                                <li><a href="terms.html" class="sub-slide-item"> Terms</a></li>
                                <li><a href="invoice.html" class="sub-slide-item"> Invoice</a></li>
                                <li><a href="pricing.html" class="sub-slide-item"> Pricing Tables</a></li>
                                <li><a href="settings.html" class="sub-slide-item"> Settings</a></li>
                                <li><a href="blog.html" class="sub-slide-item"> Blog</a></li>
                                <li><a href="blog-details.html" class="sub-slide-item"> Blog Details</a></li>
                                <li><a href="blog-post.html" class="sub-slide-item"> Blog Post</a></li>
                                <li><a href="empty.html" class="sub-slide-item"> Empty Page</a></li>
                                <li><a href="construction.html" class="sub-slide-item"> Under Construction</a></li>
                            </ul>
                        </li>
                        <li><a href="switcher-1.html" class="slide-item"> Switcher</a></li> -->
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">Alumni</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Alumni</a></li>
                        <li><a href="add-alumni" class="slide-item"> Add Alumni</a></li>
                        <li><a href="view-alumni" class="slide-item"> View Alumnus</a></li>
                        <li><a href="deleted-alumni" class="slide-item"> Deleted Alumnus</a></li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">Recruiters</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Recruiters</a></li>
                        <li><a href="add-recruiter" class="slide-item"> Add Recruiter</a></li>
                        <li><a href="view-recruiter" class="slide-item"> View Recruiters</a></li>
                        <li><a href="deleted-recruiter" class="slide-item"> Deleted Recruiters</a></li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">Messages</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Messages</a></li>
                        <li><a href="alumni-to-student" class="slide-item"> Alumni to Student</a></li>
                        <li><a href="student-to-alumni" class="slide-item"> Student to Alumni</a></li>
                        <li><a href="recruiter-to-student" class="slide-item"> Recruiter to Student</a></li>
                        <li><a href="student-to-recruiter" class="slide-item"> Student to Recruiter</a></li>
                        <li><a href="recruiter-to-admin" class="slide-item"> Recruiter to Admin</a></li>
                        <li><a href="admin-to-recruiter" class="slide-item"> Admin to Recruiter</a></li>
                        <li><a href="deleted-messages" class="slide-item"> Deleted Messages</a></li>
                    </ul>
                </li>
                <!-- <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">File Manager</span><span class="badge bg-pink side-badge">4</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                        <li><a href="file-manager.html" class="slide-item"> File Manager</a></li>
                        <li><a href="filemanager-list.html" class="slide-item"> File Manager List</a></li>
                        <li><a href="filemanager-details.html" class="slide-item"> File Details</a></li>
                        <li><a href="file-attachments.html" class="slide-item"> File Attachments</a></li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Misc Pages</h3>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Authentication</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                        <li><a href="login.html" class="slide-item"> Login</a></li>
                        <li><a href="register.html" class="slide-item"> Register</a></li>
                        <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                        <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                        <li class="sub-slide"> <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Error Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="error400.html" class="sub-slide-item"> 400</a></li>
                                <li><a href="error401.html" class="sub-slide-item"> 401</a></li>
                                <li><a href="error403.html" class="sub-slide-item"> 403</a></li>
                                <li><a href="error404.html" class="sub-slide-item"> 404</a></li>
                                <li><a href="error500.html" class="sub-slide-item"> 500</a></li>
                                <li><a href="error503.html" class="sub-slide-item"> 503</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"> <i class="side-menu__icon fe fe-cpu"></i> <span class="side-menu__label">Submenu items</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                        <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                        <li class="sub-slide"> <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Submenu-2</span><i class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a></li>
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a></li>
                                <li class="sub-slide2"> <a class="sub-side-menu__item2" href="javascript:void(0)" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Submenu-2.3</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
                                    <ul class="sub-slide-menu2">
                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.1</a></li>
                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.2</a></li>
                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.3</a></li>
                                    </ul>
                                </li>
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a></li>
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>General</h3>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-map-pin"></i><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                        <li><a href="maps1.html" class="slide-item">Leaflet Maps</a></li>
                        <li><a href="maps2.html" class="slide-item">Mapel Maps</a></li>
                        <li><a href="maps.html" class="slide-item">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Charts</span><span class="badge bg-secondary side-badge">6</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                        <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                        <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                        <li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
                        <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                        <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                        <li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
                        <li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
                        <li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
                        <li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-wind"></i><span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                        <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                        <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                        <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                        <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                        <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                        <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                        <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                        <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                        <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                        <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                        <li><a href="icons11.html" class="slide-item">Bootstrap Icons</a></li>
                    </ul>
                </li> -->
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>