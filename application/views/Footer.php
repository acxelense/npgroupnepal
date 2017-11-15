
  <!-- BEGIN PRE-FOOTER -->
  <div class="pre-footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN BOTTOM ABOUT BLOCK -->
        <div class="col-md-4 col-sm-6 pre-footer-col">
          <h2>About us</h2>
          <p style="text-align: justify;">The NP Group was founded by Mr. Narayan Prasad Agrawal on 1998. Our main objective is to provide employment and
            strengthen Nepal's economy. Now the group operates 7 companies. These companies work in different areas like
            pulses, plastic, hardware, bio gas, trading and real state. </p>
        </div>
        <!-- END BOTTOM ABOUT BLOCK -->


        <!-- BEGIN BOTTOM CONTACTS -->
        <div class="col-md-4 col-sm-6 pre-footer-col">
          <h2>Our Contacts</h2>
          <address class="margin-bottom-40">
            Padsari, Rupandehi, Nepal<br> Mobile: 9857020361, 9802620361<br> Phone: +977-71-521467, 527514<br> Fax: +977-71-527240<br>            Email:
            <a href="mailto:info@metronic.com">pulses_nepal@yahoo.co.in</a><br> Email: <a href="mailto:info@metronic.com">info@npgroupnepal.com</a>
          </address>
        </div>
        <!-- END BOTTOM CONTACTS -->

        <!-- BEGIN TWITTER BLOCK -->
        <div class="col-md-4 col-sm-6 pre-footer-col">
          <h2 class="margin-bottom-0">Our Companies</h2>
          <ul class="no-b-m">
            <li><a href="ssmdm.html">Shree Shyam Modern Dal Mill Pvt. Ltd.</a></li>
            <li><a href="ssmdm.html">Shree Shyam Polymers</a></li>
            <li><a href="ssmdm.html">Lumbini Polymers</a></li>
            <li><a href="ssmdm.html">Naman Exim Pvt. Ltd.</a></li>
            <li><a href="ssmdm.html">Avani Annapurna Traders Pvt. Ltd.</a></li>
            <li><a href="ssmdm.html">Avani Ananta Pvt. Ltd.</a></li>
            <li><a href="ssmdm.html">Envipower Energy & Fertilizers Pvt. Ltd.</a></li>
          </ul>
        </div>
        <!-- END TWITTER BLOCK -->
      </div>
    </div>
  </div>
  <!-- END PRE-FOOTER -->

  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN COPYRIGHT -->
        <div class="col-md-8 col-sm-4 padding-top-10">
          Copyright © 2017 <a href="http://npgroupnepal.com">NP GROUP</a>. ALL Rights Reserved | Developed by: <a href="http://www.acxelense.com/">Acxelense Technologies Pvt. Ltd.</a>
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN PAYMENTS -->
        <div class="col-md-4 col-sm-4">
          <ul class="social-footer list-unstyled list-inline pull-right">
            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
            <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
            <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
        <!-- END PAYMENTS -->
        <!-- BEGIN POWERED -->
        <!--<div class="col-md-4 col-sm-4 padding-top-10">
          Developed by: <a href="http://www.acxelense.com/">Acxelense Technologies Pvt. Ltd.</a>
        </div>-->
        <!-- END POWERED -->
      </div>
    </div>
  </div>
  <!-- END FOOTER -->

  <!-- Load javascripts at bottom, this will reduce page load time -->
  <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
  <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
  <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->

  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
  <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
  <!-- pop up -->
  <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
  <!-- slider for products -->

  <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
  <script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
  <script src="assets\plugins\owl.carousel\owl.carousel.js" type="text/javascript"></script>

  
  
  <script type="text/javascript">
    jQuery(document).ready(function () {
      Layout.init();
      Layout.initOWL();
      Layout.initTwitter();
      Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
      Layout.initNavScrolling();
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
      });
      var block = false;
      $(".client-item").mouseenter(function () {
        if (!block) {
          block = true;
          owl.trigger('stop.owl.autoplay')
          block = false;
        }
      });
      $(".client-item").mouseleave(function () {
        if (!block) {
          block = true;
          owl.trigger('play.owl.autoplay', [2000])
          block = false;
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      var owl = $('.c-carousel');
      owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
      });
      var block = false;
      $(".client-item").mouseenter(function () {
        if (!block) {
          block = true;
          owl.trigger('stop.owl.autoplay')
          block = false;
        }
      });
      $(".client-item").mouseleave(function () {
        if (!block) {
          block = true;
          owl.trigger('play.owl.autoplay', [3000])
          block = false;
        }
      });
    });
  </script>
  <!-- END PAGE LEVEL JAVASCRIPTS -->
