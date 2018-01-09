
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>Hasil Pencarian Hotel</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">

  </head>
  <body>
    <!-- Page-->
      <!-- Page Header-->
      <?php $this->load->view('header/head')?>
      <!-- Page Content-->
      <main class="page-content">
       <section class="section-10 section-md-60">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-md-12">
                <div class="offset-top-10 offset-lg-top-10">
                  <div class="table-responsive">
                    <table class="table table-striped text-left">
                      <thead>
                        <tr>
                          <th class="text-left success">Nama Kota</th>
                          <th class="text-left success">Hotel</th>
                          <th class="text-left success">Alamat</th>
                          <th class="text-left success">Bintang</th>
                          <th class="text-left success">Harga</th>
                          <th class="text-left success">#</th>
                        </tr>
            <?php    foreach($hotel as $dt ){
                        if(isset($dt['result_data'])){
                            foreach ($dt['result_data'] as $value) {
                              ?>
                              <tr>
                                <td><?=$value->cityName?></td>
                                <td><?=$value->name?></td>
                                <td><?=$value->address?></td>
                                <td><?=$value->review_rating->starRating?></td>
                                <td><?=$value->price?></td>
                                <td><button class="btn btn-primary pesan" data-session_id='<?=urlencode(base64_encode('{"session_id":"'.$dt['session_id'].'","hotelId":"'.$value->hotelId.'"}'))?>'>Detail</td>
                            </tr>
                          <?php
                           }
                        }
                     }

                    ?>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
      </main>
      <?php $this->load->view('footer/foot')?>
    <!-- Java script-->
    <script src="<?=base_url()?>/assets/js/core.min.js"></script>
    <script src="<?=base_url()?>/assets/js/script.js"></script>
    <script >

      $(document).on("click",".pesan",function(){
         var data = $(this).data('session_id');
         console.log(data);
         window.location.assign(`<?=base_url()?>hotel/detail/${data}`)
      })

    </script>
  </body>
</html>