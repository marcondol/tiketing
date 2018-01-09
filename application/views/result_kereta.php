
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>FAQ page</title>
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
                          <th class="text-left success">Kereta</th>
                          <th class="text-left success">Jurusan</th>
                          <th class="text-left success">Pergi</th>
                          <th class="text-left success">Tiba</th>
                          <th class="text-left success">Kelas</th>
                          <th class="text-left success">Harga</th>
                          <th class="text-left success">#</th>
                        </tr>
            <?php   foreach($kereta as $item){
                        if(isset($item['schedule']->depart)){
                            foreach ($item['schedule']->depart as $value) {
                              $tmp_class = (array)$value->Availability;
                              foreach ($tmp_class as $class_val) {
                              ?>
                              <tr>
                                <td><?=$value->train_name?></td>
                                <td><?=$value->from_st_name.' - '.$value->to_st_name?></td>
                                <td><?=$value->DD.' '.$value->ETD?></td>
                                <td><?=$value->AD.' '.$value->ETA?></td>
                                <td><?=$class_val->class.' - '.$class_val->sub_class?></td>
                                <td><?=$class_val->adult_price?></td>
                                <td><button class="btn btn-primary pesan" data-session_id='<?=urlencode(base64_encode('{"session_id":"'.$item['session_id'].'","train_no":"'.$value->train_no.'","train_name":"'.$value->train_name.'","train_class":"'.$class_val->sub_class.'"}'))?>'>Pesan</td>
                            </tr>
                          <?php
                              }
                              }
                        }
                    }?>
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
    <script type="text/javascript">
    $(document).on("click",".pesan",function(){
         var data = $(this).data('session_id');
         window.location.assign(`<?=base_url()?>kereta/form_pesan/${data}`)
      })

    </script>
  </body>
</html>