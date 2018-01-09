

<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>Forms</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
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
               
                <?php
                // print_r($pesawat_detail);
                foreach ($pesawat_detail as $value) {

                ?>
                </pre>
                <table class="table table-striped text-left">
                      <tbody>
                        <tr>
                           <td colspan="4"><?=$value->search_info->from.' - '.$value->search_info->to.' '.$value->search_info->depart?></td>
                        </tr>
                        <tr>
                           <td><?=$value->depart_detail->airline_name?></td>
                           <td><?=$value->depart_detail->fno?></td>
                           <td><?=$value->depart_detail->from.' - '.$value->depart_detail->etd ?></td>
                           <td><?=$value->depart_detail->to.' - '.$value->depart_detail->eta?></td>
                        </tr>
                        <?php
                           if($value->depart_detail->type == 'connecting'){
                              foreach ($value->depart_detail->connecting_flight as $item) {
                              ?>
                           <tr>
                              <td></td>
                              <td><?=$item->fno?></td>
                              <td><?=$item->from.' - '.$value->depart_detail->etd ?></td>
                              <td><?=$item->to.' - '.$value->depart_detail->eta?></td>
                           </tr>

                        <?php                           
                              }
                           }
                        ?>
                        <?php
                           
                           foreach ($value->depart_detail->price as $key=>$prices) {
                              if($key != 'comisi'){
                              ?>
                        <tr>
                           <td colspan="3"><?=$key?></td>
                           
                           <td><?=(($key=='total')?$prices:$prices->total)?></td>
                        </tr>
                        <?php   
                              }                        
                           }
                        ?>
                      </tbody>
                 </table>
                  <!-- RD Mailform-->
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="<?=base_url()?>pesawat/order" class="range rd-mailform text-left">
                     <div class="cell-sm-12">
                        <h4>Informasi Pemesan</h4>
                     </div>
                     <div class="cell-sm-6">
                      <div class="form-group">
                        <label for="contact-name" class="form-label form-label-outside">Nama</label>
                        <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control form-control-gray">
                        <input type="hidden" name="session_id" value="<?=$value->session_id?>">
                      </div>
                     </div>
                     <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                      <div class="form-group">
                        <label for="telephone" class="form-label form-label-outside">No Telepon</label>
                        <input id="telephone" type="text" name="telephone" data-constraints="@Required" class="form-control form-control-gray">
                      </div>
                     </div>
                     <div class="cell-sm-6 offset-top-20">
                      <div class="form-group">
                        <label for="contact-email" class="form-label form-label-outside">E-mail</label>
                        <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-control-gray">
                      </div>
                     </div>

                     <?php
                      $n=1;     
                     foreach ($value->depart_detail->price as $key=>$prices) {
                        if($key != 'comisi' && $key != 'total'){
                        ?>
                        <div class="cell-sm-12 offset-top-40">
                           <h5>Penumpang <?=$n?></h5>
                        </div>
                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="pax_type" class="form-label form-label-outside">Pax Type</label>
                           <input id="pax_type" type="text" name="pax_type_<?=$n?>" data-constraints="@Required" value="<?=$key?>" class="form-control form-control-gray">
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="title" class="form-label form-label-outside">Tittle</label>
                           <select id="title" type="text" name="title_<?=$n?>" data-constraints="@Required " >
                              <option value="mr">Tuan</option>
                              <option value="ms">Nyonya</option>
                              <option value="mrs">Nona</option>
                              <option value="chd">Anak</option>
                              <option value="inf">Bayi</option>
                           </select>
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="firs_name" class="form-label form-label-outside">Nama Depan</label>
                           <input id="firs_name" type="text" name="firs_name_<?=$n?>" data-constraints="@Required " class="form-control form-control-gray">
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="last_name" class="form-label form-label-outside">Nama Belakang</label>
                           <input id="last_name" type="text" name="last_name_<?=$n?>" data-constraints="@Required " class="form-control form-control-gray">
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="id_no" class="form-label form-label-outside">No Identitas</label>
                           <input id="id_no" type="text" name="id_no_<?=$n?>" data-constraints="@Required " class="form-control form-control-gray">
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="birthdate" class="form-label form-label-outside">Tanggal Lahir</label>
                           <input id="birthdate" type="text" data-time-picker="dateall" name="birthdate_<?=$n?>" data-constraints="@Required " class="form-control form-control-gray">
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="pasport" class="form-label form-label-outside">No pasport</label>
                           <input id="pasport" type="text" name="pasport_<?=$n?>" data-constraints="@Required " class="form-control form-control-gray">
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="expire_pasport" class="form-label form-label-outside">Expire Pasport</label>
                           <input id="expire_pasport" type="text" data-time-picker="dateall" name="expire_pasport_<?=$n?>" data-constraints="@Required " class="form-control form-control-gray">
                         </div>
                        </div>

                        <div class="cell-sm-6 offset-top-20">
                         <div class="form-group">
                           <label for="country_pasport" class="form-label form-label-outside">Negara Passport</label>
                           <input id="country_pasport" type="text" name="country_pasport_<?=$n?>" data-constraints="@Required " class="form-control form-control-gray">
                         </div>
                        </div>
                        <br>
                        <?php  
                              $n++; 
                              }                        
                           }
                        ?>
                     
                     <div class="cell-md-12 offset-top-20">                      
                      <div class="offset-top-20 text-center text-md-left">
                        <button style="min-width: 140px;" type="submit" class="btn btn-primary btn-sm">Send</button>
                      </div>
                     </div>
                  </form>

                  <?php }
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