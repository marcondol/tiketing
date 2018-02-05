<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<?php $this->load->view('header')?>
    <!-- END HEAD -->

    <body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading">
        <!-- remove ks-page-header-fixed to unfix header -->

        <!-- BEGIN HEADER -->
        <?php
    $this->load->view('menu')
?>
            <!-- END HEADER -->

            <div class="ks-page-container">

                <!-- BEGIN DEFAULT SIDEBAR -->
                <?php
                  $this->load->view('sidebar')
               ?>
                <!-- END DEFAULT SIDEBAR -->

                <div class="ks-column ks-page">
                    <div class="ks-page-header">
                        <section class="ks-title">
                            <h3>Daftar Orang Asing</h3>
                        </section>
                    </div>

                    <div class="ks-page-content">
                        <div class="ks-page-content-body ks-content-nav">
                            <div class="ks-nav-body">
                                <div class="ks-nav-body-wrapper">
                                    <div class="container-fluid">
                                        <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-search="true" data-mobile-responsive="true" data-check-on-init="true" data-show-columns="true">
                                            <thead>
                                                <tr>
                                                    <th data-field="niora">Niora &nbsp</th>
                                                    <th data-field="person_nm">Nama &nbsp</th>
                                                    <th data-field="country_nm">Asal Negara &nbsp</th>
                                                    <th data-field="sponsor_nm">Sponsor &nbsp</th>
                                                    <th data-field="start_dttm">Tanggal Terbit &nbsp</th>
                                                    <th data-field="stop_dttm">Tanggal Habis &nbsp</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   <div id="ks-izi-modal-basic"
     class="ks-izi-modal"
     data-iziModal-fullscreen="true"
     data-iziModal-title="Welcome to the iziModal"
     data-iziModal-icon="la la-home"
     data-iziModal-padding="20"
     data-iziModal-autoopen="false"
     data-iziModal-headercolor="#3a529b">
    <div id="isi"></div>
</div>

<?php
    $this->load->view('main_lib');
?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/izi-modal/css/iziModal.min.css"> <!-- Original -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/libs/izi-modal/izi-modal.min.css"> <!-- Original -->
<script src="<?=base_url()?>assets/libs/bootstrap-table/bootstrap-table.min.js"></script>
<script src="<?=base_url()?>assets/libs/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="<?=base_url()?>assets/libs/izi-modal/js/iziModal.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/libs/handlebars/handlebars.js" ></script>
               <script type="application/javascript">
                    (function($) {
                     var template_body;
                     var data = [{'niora':'IM2GAD71413', 'person_nm': '<a href=\'\'  class=\'lnk_det\' id=\'IM2GAD71413\'>COHADE PIERRE ERIC PATRICE</a>', 'country_nm': 'PERANCIS', 'sponsor_nm':'PT. GOOD YEAR INDONESIA', 'start_dttm': '14-NOV-2008', 'stop_dttm' : '13-JAN-2009', 'pob': 'PAKISTAN', 'dob' : '30-APR-1937', 'pasport_no': '213869113', 'city' : 'BOGOR (KABUPATEN)','job': 'MECHANICAL ENGINEERING TECHNICIAN'},
                                 {'niora':'ABHAA18494', 'person_nm': '<a href=\'\' class=\'lnk_det\' id=\'ABHAA18494\'>HAN NING</a>', 'country_nm': 'CHINA', 'sponsor_nm':'PT GOOD YEAR INDONESIA TBK.', 'start_dttm': '', 'stop_dttm' : '', 'pob': 'BARCELONNETE', 'dob' : '23-SEP-1961', 'pasport_no': '07CK32302', 'city' : 'BOGOR (KABUPATEN)','job': 'BISNIS'},
                                 {'niora':'ABGAA10788', 'person_nm': '<a href=\'\' class=\'lnk_det\' id=\'ABGAA10788\'>HAN SHENGQIANG</a>', 'country_nm': 'CHINA', 'sponsor_nm':'PT GOOD YEAR INDONESIA TBK.', 'start_dttm': '08-JUN-2010', 'stop_dttm' : '', 'pob': 'BOGOR', 'dob' : '26-OCT-2008', 'pasport_no': 'G16518863', 'city' : 'BOGOR (KOTA)','job': 'IKUT ORANG TUA'},
                                 {'niora':'ABQAA11824', 'person_nm': '<a href=\'\' class=\'lnk_det\' id=\'ABQAA11824\'>HUA WANG</a>', 'country_nm': 'CHINA', 'sponsor_nm':'PT. GOOD YEAR INDONESIA TBK', 'start_dttm': '03-FEB-2016', 'stop_dttm' : '03-FEB-2016', 'pob': 'SHANDONG', 'dob' : '24-NOV-1973', 'pasport_no': 'G17528385', 'city' : 'BOGOR (KABUPATEN)','job': 'PRODUCTION MANAGER'},
                                 {'niora':'ABHAA18396', 'person_nm': '<a href=\'\' class=\'lnk_det\' id=\'ABHAA18396\'>NING HAN</a>', 'country_nm': 'CHINA', 'sponsor_nm':'PT GOOD YEAR INDONESIA TBK.', 'start_dttm': '15-JUN-2010', 'stop_dttm' : '14-JUL-2010', 'pob': 'LIAONING', 'dob' : '11-MAR-1951', 'pasport_no': 'E36349852', 'city' : 'BOGOR (KABUPATEN)','job': 'NONE'},
                                 {'niora':'ABQAA11831', 'person_nm': '<a href=\'\' class=\'lnk_det\' id=\'ABQAA11831\'>SHIQUAN ZHANG</a>', 'country_nm': 'CHINA', 'sponsor_nm':'PT. GOOD YEAR INDONESIA TBK', 'start_dttm': '03-FEB-2016', 'stop_dttm' : '03-FEB-2016', 'pob': 'BOGOR', 'dob' : '26-OCT-2008', 'pasport_no': 'G16518863', 'city' : 'BOGOR (KABUPATEN)','job': 'IKUT ORANG TUA'},
                                 {'niora':'ABHAA18389', 'person_nm': '<a href=\'\' class=\'lnk_det\' id=\'ABHAA18389\'>XIAO HAN</a>', 'country_nm': 'CHINA', 'sponsor_nm':'PT GOOD YEAR INDONESIA TBK.', 'start_dttm': '11-JUN-2010', 'stop_dttm' : '11-JUN-2010', 'pob': 'LIAONING', 'dob' : '09-JUN-1946', 'pasport_no': 'E36349853', 'city' : 'BOGOR (KABUPATEN)','job': 'NONE'},
                                 {'niora':'ABGAA10771', 'person_nm': '<a href=\'\' class=\'lnk_det\' id=\'ABGAA10771\'>ZHONGXIAN ZHANG</a>', 'country_nm': 'CHINA', 'sponsor_nm':'PT GOOD YEAR INDONESIA TBK.', 'start_dttm': '11-JUL-2010', 'stop_dttm' : '11-JUL-2010', 'pob': 'LIAONING', 'dob' : '23-AUG-2004', 'pasport_no': 'G18432182', 'city' : 'BOGOR (KABUPATEN)','job': 'IKUT ORANG TUA'}
                                 ];


                        $(document).ready(function() {
                           template_body = Handlebars.compile($('#spec_template').html());
                            $('#ks-datatable').bootstrapTable({
                                data: data,
                                icons: {
                                    refresh: 'la la-refresh icon-refresh',
                                    toggle: 'la la-list-alt icon-list-alt',
                                    columns: 'la la-th icon-th',
                                    share: 'la la-download icon-share'
                                }
                            });

                            $(document).on('click','.lnk_det', function(e){
                               e.preventDefault();
                               var that = this;
                               var data_ = data.filter(function(dt){
                                  return dt.niora === that.id;
                               })

                               $('#ks-izi-modal-basic').attr("data-iziModal-title", "Detail Personal");

                              //  $('#ks-izi-modal-basic').attr("data-iziModal-subtitle", JSON.stringify(data_)) ;
                               $('#ks-izi-modal-basic').iziModal();
                               $('#isi').html(template_body(data_[0]));
                               console.log(data_);
                               $('#ks-izi-modal-basic').iziModal('open');
                            });
                        });
                    })(jQuery);
                </script>
                <script id="spec_template" type="text/x-handlebars-template">
                        <table class="table">
                           <tr>
                              <td>Niora </td>
                              <td>:</td>
                              <td>{{niora}}</td>
                           </tr>
                           <tr>
                              <td>Nama Lengkap </td>
                              <td>:</td>
                              <td>{{{person_nm}}}</td>
                           </tr>
                           <tr>
                              <td>No Pasport </td>
                              <td>:</td>
                              <td>{{pasport_no}}</td>
                           </tr>
                           <tr>
                              <td>Kewarganegaraan </td>
                              <td>:</td>
                              <td>{{country_nm}}</td>
                           </tr>
                           <tr>
                              <td>Tempat Lahir </td>
                              <td>:</td>
                              <td>{{pob}}</td>
                           </tr>
                           <tr>
                              <td>Tanggal Lahir </td>
                              <td>:</td>
                              <td>{{dob}}</td>
                           </tr>
                           <tr>
                              <td>Sponsor </td>
                              <td>:</td>
                              <td>{{sponsor_nm}}</td>
                           </tr>
                           <tr>
                              <td>Pekerjaan </td>
                              <td>:</td>
                              <td>{{job}}</td>
                           </tr>
                           <tr>
                              <td>Tanggal Terbit </td>
                              <td>:</td>
                              <td>{{start_dttm}}</td>
                           </tr>
                           <tr>
                              <td>Tanggal Habis </td>
                              <td>:</td>
                              <td>{{stop_dttm}}</td>
                           </tr>
                        </table>
                  </script>


                <div class="ks-mobile-overlay"></div>
                <!-- END SETTINGS BLOCK -->
    </body>

</html>