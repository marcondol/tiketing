<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>Sukses Order</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?=base_url()?>/assets/images/icon_mk.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php $this->load->view('header/head')?>
      <!-- Page Content-->
      <main class="page-content">
        <section class="section-60 section-md-top-20">
          <div class="shell">
            <div class="section-top-10 section-md-top-20">
              <h4 class="text-bold text-capitalize">Pemesanan</h4>
              <div class="offset-md-top-30 offset-top-20 range range-xs-center">
                <div class="cell-md-8">
                <!-- <pre> -->
                <?php
                foreach ($kereta_order as $value) {
                  //  print_r($value);
                  if($value->error_no != 0 ||  $value == ""){
                     echo "<h5>Maaf Terjadi Error Mohon coba lagi</h5>";
                     echo $value->error_msg;
                     break;
                  }
                ?>
                  <!-- </pre> -->

                <table class="table table-striped text-left">
                      <tbody>
                        <tr>
                           <td colspan="4"><?=$value->search_info->from.' - '.$value->search_info->to.' '.$value->search_info->depart?></td>
                        </tr>
                        <tr>
                           <td><?=$value->detail_data->depart->schedule->train_name?></td>
                           <td><?=$value->detail_data->depart->schedule->train_no?></td>
                           <td><?=$value->detail_data->depart->schedule->from.' - '.$value->detail_data->depart->schedule->DD.' '.$value->detail_data->depart->schedule->ETD ?></td>
                           <td><?=$value->detail_data->depart->schedule->to.' - '.$value->detail_data->depart->schedule->AD.' '.$value->detail_data->depart->schedule->ETA?></td>
                        </tr>
                        <?php
                        foreach($value->detail_data->depart->seat as $seat){
                        ?>
                        <tr>
                           <td>Gerbong</td>
                           <td><?=$seat->wagon_code.' '.$seat->wagon_no?></td>
                           <td>Kursi</td>
                           <td><?=$seat->seat_row.' '.$seat->seat_col?></td>
                        </tr>
                        <?php
                        }
                        ?>
                     </tbody>
                  </table>
                  <table class="table table-striped text-left">
                     <tbody>
                     <?php
                        foreach($value->passengers as $passenger){
                     ?>
                        <tr>
                           <td>Nama Penumpang</td>
                           <td><?=$passenger->name?></td>
                        </tr>
                        <tr>
                           <td>No Identitas</td>
                           <td><?=$passenger->id_card?></td>
                        </tr>
                        <tr>
                           <td>No Telp</td>
                           <td><?=$passenger->hp?></td>
                        </tr>
                        <tr>
                           <td>Tangal Lahir</td>
                           <td><?=preg_replace("/(\d{1,4})( |-|\/)(\d{1,2})( |-|\/)(\d{1,2})/","$5-$3-$1",$passenger->birthdate)?></td>
                        </tr>

                     <?php
                     }
                     ?>
                     </tbody>
                  </table>
                  <div class="alert alert-success" role="alert">Booking Tiket Sukses dengan nomor <b><?=$value->detail_data->depart->schedule->book_code?></b></div>
                 <?php
                }
                 ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <?php $this->load->view('footer/foot') ?>
    <!-- Java script-->
    <script src="<?=base_url()?>/assets/js/core.min.js"></script>
    <script src="<?=base_url()?>/assets/js/script.js"></script>
  </body>
</html>
