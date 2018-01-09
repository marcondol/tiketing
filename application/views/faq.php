
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>FAQ page</title>
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
                    <h5>Pertanyaan dan Jawaban</h5>
                    <h1 class="offset-top-20 text-ubold">F A Q</h1>
                    <ol class="breadcrumb">
                      <li><a href="../">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li>Halaman FAQ
                      </li>
                    </ol>
                  </div>
                </div>
              </section>
        <section class="section-80 section-md-120 bg-image-02">
          <div class="shell shell-wide text-lg-left">
            <div class="range">
              <div class="cell-md-7 cell-lg-5 cell-lg-preffix-6 cell-md-preffix-5">
                <h2 class="text-ubold">Pertanyaan yang Sering Diajukan</h2>
                <hr class="divider divider-md-left divider-primary divider-80">
                <!-- Responsive-tabs-->
                <div data-type="accordion" class="offset-top-50 offset-lg-top-90 responsive-tabs responsive responsive-tabs-classic">
                  <ul class="resp-tabs-list tabs-1 text-center tabs-group-default">
                    <li>Bagaimana cara memilih penerbangan satu arah?</li>
                    <li>Dapatkah saya melakukan pemesanan tiket baik untuk penerbangan domestik maupun internasional?</li>
                    <li>Mengapa saya tidak dapat menemukan penerbangan untuk maskapai penerbangan tertentu yang saya minati?</li>
                    <li>Bagaimana saya bisa memastikan bahwa reservasi saya telah selesai dengan sukses?</li>
                    <li>Apakah saya harus mengkonfirmasi waktu keberangkatan penerbangan saya?</li>
                  </ul>
                  <div class="resp-tabs-container text-sm-left tabs-group-default">
                    <div>
                      <p>Dengan menggunakan mesin pencari penerbangan Anda memiliki dua pilihan: baik perjalanan sederhana (One way) atau dengan return (round trip). Round trip adalah pilihan default. Jika Anda tertarik dengan perjalanan satu arah Anda harus memilih tombol masing-masing.</p>
                    </div>
                    <div>
                      <p>Ya, Anda dapat memilih penerbangan dari bandara mana pun ke mana pun di dunia ini.</p>
                    </div>
                    <div>
                      <p>Dengan menggunakan mesin pencari kami, Anda bisa melakukan pemesanan tiket untuk sebagian besar maskapai penerbangan di dunia. Namun Anda tidak bisa memesan tiket penerbangan charter, penerbangan dioperasikan oleh maskapai penerbangan berbiaya rendah tertentu dan juga oleh perusahaan yang tidak memiliki perwakilan di Yunani.</p>
                    </div>
                    <div>
                      <p>Setelah menyelesaikan prosedur pemesanan di halaman web kami, halaman kesuksesan akan ditampilkan di layar Anda dan sebuah e-mail berisi e-ticket dan informasi terkait akan dikirimkan kepada Anda dalam waktu 24 jam sejak Anda membayar Reservasi Anda (biasanya ini memakan waktu beberapa menit).</p>
                    </div>
                    <div>
                      <p>Jika Anda ingin mengkonfirmasi waktu keberangkatan penerbangan Anda, kami sarankan Anda menghubungi maskapai atau bandara agar mendapat informasi yang akurat. Kami akan berusaha semaksimal mungkin untuk memberi tahu Anda jika ada perubahan pada penerbangan Anda. Namun demikian, jika terjadi kondisi cuaca buruk, kami sangat menyarankan agar Anda menghubungi langsung maskapai atau bandara.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		
		<!--
        <section class="section-80 section-lg-120 bg-gray-lighter">
          <div class="shell shell-wide">
            <div class="range range-xs-center">
              <div class="cell-md-8 cell-lg-6">
                <h2 class="text-ubold">Some of Your Questions</h2>
                <hr class="divider divider-primary divider-80">
                <div class="text-md-left offs-top-60">
                  <ul class="list-marked">
                    <li><a href="#q1" data-custom-scroll-to="q1" class="text-info-dr">Can I make changes to my reservation after I have purchased it?</a></li>
                    <li><a href="#q2" data-custom-scroll-to="q2" class="text-info-dr">I noticed some flights are operated by other airlines and have a 24-hour hold. What does this mean?</a></li>
                    <li><a href="#q3" data-custom-scroll-to="q3" class="text-info-dr">Does the number of passengers I choose limit my lowest fare flight choices?</a></li>
                    <li><a href="#q4" data-custom-scroll-to="q4" class="text-info-dr">Can I book flights for multiple-stop itineraries online?</a></li>
                    <li><a href="#q5" data-custom-scroll-to="q5" class="text-info-dr">I received a promotional offer to be redeemed online. How can I redeem it?</a></li>
                  </ul>
                  <dl class="list-terms-variant-1 offset-top-60">
                    <dt id="q1" class="h5">Can I make changes to my reservation after I have purchased it?</dt>
                    <dd>
                      <p>Using the flights search engine you have two options: either simple journey (One way) or with return (Round trip). Round trip is the default option. If you are interested in a one way journey you will have to select the respective button.</p>
                    </dd>
                    <dt id="q2" class="h5">I noticed some flights are operated by other airlines and have a 24-hour hold. What does this mean?</dt>
                    <dd>
                      <p>Flights operated by certain partners require a 24-hour hold so we can ensure that your preferred flight and seat are processed with that partner. Once we receive confirmation of your itinerary from the partner airline, we will notify you via email.</p>
                    </dd>
                    <dt id="q3" class="h5">Does the number of passengers I choose limit my lowest fare flight choices?</dt>
                    <dd>
                      <p>Yes. Based on the number of travelers in your group, the lowest fare may not be available on a particular flight due to seat availability.</p>
                    </dd>
                    <dt id="q4" class="h5">Can I book flights for multiple-stop itineraries online?</dt>
                    <dd>
                      <p>Yes, you can purchase tickets for one-way or multiple-destination travel by selecting “One way” or “Multi-city” at the top of the flight search box on the home page.</p>
                    </dd>
                    <dt id="q5" class="h5">I received a promotional offer to be redeemed online. How can I redeem it?</dt>
                    <dd>
                      <p>If you have an offer code, you can select “All Search Options” on the home page and then enter it in the field at the bottom of the page. If you are redeeming a gift certificate or electronic travel certificate, it can be redeemed in the Payment section during the flight booking process.</p>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </section>
		-->
      </main>
      <!-- Page Footer-->
      <?php $this->load->view('footer/foot')?>
    <!-- Java script-->
    <script src="<?=base_url()?>assets/js/core.min.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>