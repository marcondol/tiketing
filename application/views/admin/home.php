<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<?php $this->load->view('admin/header')?>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

<?php
    $this->load->view('admin/menu')
?>

<div class="ks-page-container ks-dashboard-tabbed-sidebar-fixed-tabs">

<?php
    $this->load->view('admin/sidebar')
?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $this->load->view('admin/main_lib');
?>

<script src="libs/bootstrap-table/bootstrap-table.min.js"></script>
<script src="libs/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script type="application/javascript">
(function ($) {

    $(document).ready(function() {
        $('#ks-datatable').bootstrapTable({
            data: data,
            icons: {
                refresh: 'la la-refresh icon-refresh',
                toggle: 'la la-list-alt icon-list-alt',
                columns: 'la la-th icon-th',
                share: 'la la-download icon-share'
            }
        });
    });
})(jQuery);
</script>

<div class="ks-mobile-overlay"></div>
</body>
</html>