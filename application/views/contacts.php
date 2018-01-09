
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>Contacts</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?=base_url()?>assets/images/icon_mk.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
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
              <section class="bg-image-06">
                <div class="breadcrumb-wrapper">
                  <div class="shell context-dark section-30 section-lg-top-120">
                    <h5>Hubungi atau Kunjungi Kami</h5>
                    <h1 class="offset-top-20 text-ubold">Kontak</h1>
                    <ol class="breadcrumb">
                      <li><a href="../page">Home</a></li>
                      <li>Kontak
                      </li>
                    </ol>
                  </div>
                </div>
              </section>
        <section>
          <div class="shell"></div>
        </section>
        <section class="section-top-80 section-md-top-0">
          <div class="shell shell-wide text-md-left">
            <div class="range">
              <div class="cell-md-7 cell-lg-5 section-md-80 section-lg-120">
                <h2 class="text-ubold">Berhubungan</h2>
                <hr class="divider divider-md-left divider-primary divider-80">
                <p class="offset-top-20 offset-md-top-40">Anda bisa menghubungi kami dengan cara apapun yang sesuai untuk Anda. Kami tersedia 24/7 melalui fax atau email. Anda juga bisa menggunakan formulir kontak cepat di bawah atau mengunjungi kantor kami secara pribadi. Kami akan dengan senang hati menjawab pertanyaan Anda.</p>
                <!-- RD Mailform-->
                <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="offset-top-30 range rd-mailform text-left">
                  <div class="cell-sm-6">
                    <div class="form-group">
                      <label for="contact-name" class="form-label form-label-outside">Nama depan</label>
                      <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control form-control-gray">
                    </div>
                  </div>
                  <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                    <div class="form-group">
                      <label for="contact-surname" class="form-label form-label-outside">Nama belakang</label>
                      <input id="contact-surname" type="text" name="surname" data-constraints="@Required" class="form-control form-control-gray">
                    </div>
                  </div>
                  <div class="cell-sm-6 offset-top-20">
                    <div class="form-group">
                      <label for="contact-email" class="form-label form-label-outside">E-mail</label>
                      <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-control-gray">
                    </div>
                  </div>
                  <div class="cell-sm-6 offset-top-20">
                    <div class="form-group">
                      <label for="contact-phone" class="form-label form-label-outside">Nomor Telpon</label>
                      <input id="contact-phone" type="text" name="phone" data-constraints="@Required @Integer" class="form-control form-control-gray">
                    </div>
                  </div>
                  <div class="cell-md-12 offset-top-20">
                    <div class="form-group">
                      <label for="contact-message" class="form-label form-label-outside">Pesan anda</label>
                      <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control form-control-gray"></textarea>
                    </div>
                    <div class="offset-top-20 text-center text-md-left">
                      <button style="min-width: 140px;" type="submit" class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-envelope-o"></span><span>Kirim Pesan</span></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="cell-xl-2 cell-lg-3 cell-md-4 cell-xl-preffix-1 section-md-80 section-lg-120">
                <div class="range text-left">
                  <div class="cell-md-12 cell-xs-6">
                    <h5 class="text-bold hr-title">Telpon Kantor</h5>
                    <div class="media">
                      <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-phone"></span></div>
                      <div class="media-body">
                        <div><a href="callto:#" class="text-gray">022 735 11 888,</a></div>
                        <div><a href="callto:#" class="text-gray">081324285652 (WA)</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-12 cell-xs-6 offset-top-40 offset-xs-top-0 offset-md-top-60">
                    <h5 class="text-bold hr-title">E-mail</h5>
                    <div class="media">
                      <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-email-outline"></span></div>
                      <div class="media-body">
                        <div><a href="mailto:#" class="text-gray">info@misterklik.com</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-12 cell-xs-6 offset-top-40 offset-md-top-60">
                    <h5 class="text-bold hr-title">Alamat</h5>
                    <div class="media">
                      <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-map-marker"></span></div>
                      <div class="media-body">
                        <div><a href="#" class="text-gray">Jl. Karapitan No. 1 KOTA BANDUNG - JAWA BARAT</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-12 cell-xs-6 offset-top-40 offset-md-top-60">
                    <h5 class="text-bold hr-title">Jam Buka Kantor</h5>
                    <div class="media">
                      <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-calendar-clock"></span></div>
                      <div class="media-body">
                        <div>Senin–Jumat 8:00am–6:00pm<br>Sabtu 10:00am–4:00pm<br>MInggu Tutup</div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-12 offset-top-40 offset-md-top-60">
                    <h5 class="text-bold hr-title">Socials</h5>
                    <ul class="list-inline offset-top-24">
                      <li><a href="#" class="icon text-gray icon-xxs fa-facebook"></a></li>
                      <li><a href="#" class="icon text-gray icon-xxs fa-twitter"></a></li>
                      <li><a href="#" class="icon text-gray icon-xxs fa-pinterest-p"></a></li>
                      <li><a href="#" class="icon text-gray icon-xxs fa-vimeo"></a></li>
                      <li><a href="#" class="icon text-gray icon-xxs fa-google-plus"></a></li>
                      <li><a href="#" class="icon text-gray icon-xxs fa-rss"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="cell-lg-3 cell-lg-preffix-1 rd-google-map-abs offset-top-40 offset-md-top-0">
                <!-- RD Google Map-->
                <div data-zoom="12" data-x="107.6157959" data-y="-6.9238491" class="rd-google-map rd-google-map__model">
                  <ul class="map_locations">
                    <li data-y="-6.9238491" data-x="107.6157959">
                      <p>Jl. Karapitan No. 1 KOTA BANDUNG - JAWA BARAT</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <?php $this->load->view('footer/foot')?>
    <!-- Java script-->
    <script src="<?=base_url()?>assets/js/core.min.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>