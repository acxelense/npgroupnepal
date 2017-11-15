<div class="main">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Contact</li>
      </ul>
      <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12">
          <h1>Contact Us</h1>
          <div class="content-page">
            <div class="row">
              <div class="col-md-12">
                <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>
              </div>
              <div class="col-md-9 col-sm-9">
                <h2>Contact Form</h2>
                <p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                  lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod
                  tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

                <!-- BEGIN FORM-->
                <form action="mail.php" method="post" role="form" name="contact" id="contact">
                  <div class="form-group">
                    <label for="contacts-name">Name</label>
                    <input type="text" class="form-control" id="contacts-name">
                  </div>
                  <div class="form-group">
                    <label for="contacts-email">Email</label>
                    <input type="email" class="form-control" id="contacts-email">
                  </div>
                  <div class="form-group">
                    <label for="contacts-message">Message</label>
                    <textarea class="form-control" rows="5" id="contacts-message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary" onclick="contact()"><i class="icon-ok"></i> Send</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>
                <!-- END FORM-->
              </div>

              <div class="col-md-3 col-sm-3 sidebar2">
                <h2>Our Contacts</h2>
                <address class="margin-bottom-40">
                  Padsari, Rupandehi, Nepal<br> Mobile: 9857020361, 9802620361<br> Phone: +977-71-521467, 527514<br> Fax:
                  +977-71-527240
                </address>
                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:info@metronic.com">pulses_nepal@yahoo.co.in</a><br>
                  <a href="mailto:info@metronic.com">info@npgroupnepal.com</a>
                </address>
                <ul class="social-icons margin-bottom-40">
                  <li>
                    <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                  </li>
                  <li>
                    <a href="javascript:;" data-original-title="github" class="github"></a>
                  </li>
                  <li>
                    <a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a>
                  </li>
                  <li>
                    <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                  </li>
                  <li>
                    <a href="javascript:;" data-original-title="rss" class="rss"></a>
                  </li>
                </ul>

                <!--<h2 class="padding-top-30">About Us</h2>
                <p>Sediam nonummy nibh euismod tation ullamcorper suscipit</p>
                <ul class="list-unstyled">
                  <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
                  <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                  <li><i class="fa fa-check"></i> Deserunt fpicia</li>
                </ul>-->
              </div>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
    </div>
  </div>


  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
  <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
  <!-- pop up -->
  <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
  <script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
  <script src="assets/pages/scripts/contact-us.js" type="text/javascript"></script>

  <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
  <script type="text/javascript">
    function contact() {
         jQuery.ajax({
            type: 'POST',
            url: 'mail.php',
            data: $("#contact").serialize(),
            dataType: "json",
            success: function(result) {
               if (result.errorMsg) {
                  new PNotify({
                     title: 'Error',
                     text: result.errorMsg,
                     type: 'error',
                     styling: 'bootstrap3'
                  });
               } else {
                  new PNotify({
                     title: 'Sucess',
                     text: result.successMsg,
                     type: 'success',
                     styling: 'bootstrap3'
                  });
               }
            }
         });

      }
      
    jQuery(document).ready(function () {
      Layout.init();
      Layout.initUniform();
      ContactUs.init();
      Layout.initTwitter();
    });

     
  </script>
  <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>