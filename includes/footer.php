

<!-- footer -->
<footer class="footer footer_bg_1" id="fooder" >
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="footer_widget">
            <div class="footer_logo">
              <a href="#">
                <img src="img/logo.png"  alt="">
              </a>
            </div>
            <p>
            Seeking Success<br>
            SPE Suez achieved many awards
            and a great reputation among all other SPE student
            chapters. And still seeking much more success.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer_widget"><br><br><br>
            <h3 class="footer_title">
              <i class="fa fa-map-marker"></i> Address
            </h3>
            <h4 class="info"></h4>
            <p class="infoa">Cairo-Suez Road, Suez, El Salam City, Egypt</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-3">
          <div class="socail_links">
            <ul>
              <li>
                <a href="https://www.facebook.com/SPESuez/">
                <i class="ti-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/spescusc/">
                <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/spesusc/">
                <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/SPESCUSC/">
                <i class="fa fa-youtube-play"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="copy-right_text">
    <div class="container">
      <div class="footer_border"></div><br>

      <div class="row">
        <div class="col-6">
          <h2 class="copy_right">Contact Us</h2><br>
          <p class="copy_right">Call or submit our online form to request<br>
          an estimate or for general<br>
          questions about our services.<br>
          We look forward to serve you!<br><br>
          </p>
          <div class="footer_widget">
            <h3 class="footer_title copy_right">
              <i class="fa fa-phone"></i> Phone
            </h3>
            <p class="copy_right">+2010 6789 2660</p>
          </div><br>
          <div class="footer_widget">
            <h3 class="footer_title copy_right">
            <i class="fa fa-envelope"></i> Email
            </h3>
            <p  class="copy_right"> spe.su.sc@gmail.com </p>
          </div>
        </div>
        <div  class="col-6">
          <form class="contact-form">
            <h2 class="copy_right">Get in Touch</h2><br>
            <input  class="form-control" name="name" placeholder="Name" required /><br>
            <input  class="form-control" name="email" placeholder="Email"required /><br>
            <input  class="form-control" name="phone" placeholder="Phone" /><br>
            <textarea  class="form-control" name="message" placeholder="Please write down your inquiry here." required ></textarea><br>
            <input class="btn" type="submit" onclick="server()" value="Send The Message" /><br>
          </form>
          <div class="success"></div>
        </div>
      </div>

      <br><br>
      <div class="footer_border"></div>
      <div class="row">
        <div class="col-xl-12">
          <p class="copy_right text-center">
          Copyright © 2020 SPE SUEZ UNIVERSITY STUDENT CHAPTER
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer -->

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="157070777656183">
      </div>


  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script>
			function server() {

				  var name       = 	$('input[name=name]').val();
					var email      = 	$('input[name=email]').val();
					var phone     = 	$('input[name=phone]').val();
					var message    = 	$('textarea[name=message]').val();
					
        if(name !== "" && email !== ""  && message !== "" ){
          $.post(
            "contact_process.php?do=insert",
            {
              name:         name,
              phone:       phone,
              email:        email,
              message:      message,

      
            }).done(function(data){
              $(".contact-form input").not('input[type=submit]').val('');
              $(".contact-form textarea").val('');
              $('.success').html(data);
              $('.success div').delay(3000).slideUp();
          });
         // console.log("ttttttttttttt");
        }
			}
		
	
				
				/*************************************** */
				$('form').submit(function(e){
				e.preventDefault();
				});
		</script>
</body>

</html>