<header class="page-header">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap bg-gray-dark">
    <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" class="rd-navbar">
      <div class="rd-navbar-inner">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
          <!-- RD Navbar Toggle-->
          <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
          <!-- RD Navbar Brand-->
          <div class="rd-navbar-brand"><a href="<?=base_url()?>" class="reveal-inline-block brand-name"><img src="<?=base_url()?>/assets/images/logo-white.png" width="166" height="55" alt="" class="img-responsive center-block"></a></div>
        </div>
        <div class="rd-navbar-nav-wrap">
          <!-- RD Navbar Nav-->
          <ul class="rd-navbar-nav">
            <li class="active"><a href="<?=base_url()?>">Home</a></li>
            <li><a href="#">Tentang</a>
              <!-- RD Navbar Dropdown-->
              <ul class="rd-navbar-dropdown">
                <li><a href="<?=base_url()?>page/overview">Tentang Kami</a></li>
                <li><a href="<?=base_url()?>page/testimonials">Testimonial</a></li>
                <li><a href="<?=base_url()?>page/faq">FAQ</a></li>
              </ul>
            </li>
            <li><a href="<?=base_url()?>page/contacts">Kontak</a></li>
            <li><a href="<?=base_url()?>page/login">Login</a></li>
          </ul>
          <!--RD Navbar Search-->
          <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-search" href="#" class="rd-navbar-search-toggle"><span class="fa-search"></span></a>
            <form data-search-live="rd-search-results-live" action="search-results.html" method="GET" class="rd-search">
              <div class="form-group">
                <label for="rd-navbar-search-form-input" class="form-label">Pencarian</label>
                <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest">
              </div>
              <button class="btn fa-search"></button>
              <div id="rd-search-results-live" class="rd-search-results-live"></div>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
        <!-- Swiper-->