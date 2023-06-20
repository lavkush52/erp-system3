                </div>
            </div>
            <!-- End Page -->   
        <!-- Sidebar-right -->
        <?php sidebar_right() ?>
        <!--/Sidebar-right-->
            
        <!--Modals-->
        <?php modals() ?>
        <!--Modals-->
            
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        <?= powered_by ?>
                        <!-- Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved. -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- JQUERY JS -->
        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="<?= base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- SIDE-MENU JS -->
        <script src="<?= base_url() ?>assets/plugins/sidemenu/sidemenu.js"></script>

        <!-- TypeHead js -->
        <script src="<?= base_url() ?>assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
        <script src="<?= base_url() ?>assets/js/typehead.js"></script>

        <!-- SIDEBAR JS -->
        <script src="<?= base_url() ?>assets/plugins/sidebar/sidebar.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="<?= base_url() ?>assets/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script src="<?= base_url() ?>assets/plugins/p-scroll/pscroll.js"></script>
        <script src="<?= base_url() ?>assets/plugins/p-scroll/pscroll-1.js"></script>

                
        <!-- INTERNAL CHARTJS CHART JS-->
        <script src="<?= base_url() ?>assets/plugins/chart/Chart.bundle.js"></script>
        <script src="<?= base_url() ?>assets/plugins/chart/utils.js"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="<?= base_url() ?>assets/plugins/select2/select2.full.min.js"></script>

        <!-- INTERNAL Data tables js-->
        <script src="<?= base_url() ?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url() ?>assets/plugins/datatable/dataTables.responsive.min.js"></script>

        <!-- INTERNAL Flot JS -->
        <script src="<?= base_url() ?>assets/plugins/flot/jquery.flot.js"></script>
        <script src="<?= base_url() ?>assets/plugins/flot/jquery.flot.fillbetween.js"></script>
        <script src="<?= base_url() ?>assets/plugins/flot/chart.flot.sampledata.js"></script>
        <script src="<?= base_url() ?>assets/plugins/flot/dashboard.sampledata.js"></script>

        <!-- INTERNAL Vector js -->
        <script src="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> 

        <!-- INTERNAL INDEX JS -->
        <script src="<?= base_url() ?>assets/js/index1.js"></script>
        <script src="<?= base_url() ?>assets/plugins/notify/js/notifIt.js"></script>
    
        <!-- Sticky js -->
        <script src="<?= base_url() ?>assets/js/sticky.js"></script>

        <!-- Switcher js -->
        <script src="<?= base_url() ?>assets/switcher/js/switcher.js"></script>

        <!-- CUSTOM JS -->
        <script src="<?= base_url() ?>assets/js/custom.js"></script>

        <!-- Color Theme js -->
        <script src="<?= base_url() ?>assets/js/themeColors.js"></script>
        <script type="text/javascript">
            const baseURL = "<?= base_url('admin') ?>";
            $(document).ready(function(){
                $('.ajax-btn').on("click", function(e){
                    e.preventDefault();
                    let form = $(this).closest("form");
                    let form_id = form.attr('id');
                    formElements = storeArr(form_id);
                    if(checkAbility(formElements, "false", form_id)==true){
                        $(this).attr('disabled',true);
                        let btnID = $(this).attr("id");
                        let formData = new FormData(document.querySelector('#'+form.attr("id")));
                        $.ajax({
                            processData: false,
                            contentType: false,
                            url: baseURL+form.attr("action"),
                            type: 'POST',
                            data: formData,
                            success: (data) => {
                                let obj = $.parseJSON(data);
                                console.log(obj)
                                Notify(obj.status, obj.msg, 'center');
                            },
                            error: (error) => {
                                console.log({ error });
                            },
                        });
                        $(this).attr('disabled',false);
                    }
                })
            })

            function checkAbility(arr, val, form_id)
            {
                let st = false;
                if(arr.includes(val) === false) {
                    $('#'+form_id).removeClass('was-validated');
                    st = true;
                } else {
                    $('#'+form_id).addClass('was-validated');
                    st = false;
                }
                return st;
            }
            function storeArr(form_id)
            {
                var formElements = new Array();
                $('#'+form_id+' input, #'+form_id+' select, #'+form_id+' textarea').each(
                    function(index){
                        var input = $(this);
                        if(input.val()=="" && input.attr('id')!=undefined && input.attr('type')!="file"){
                            formElements.push('false');
                        }else if(input.attr('id')!=undefined && input.attr('type')!="file"){
                            formElements.push('true');
                        }
                    }
                );
                return formElements;
            }

            function Notify(type, msg, position)
            {
                notif({
                    msg: msg,
                    type: type,
                    position: position,
                    height: 40,
                });
            }
        </script>
    </body>
</html>