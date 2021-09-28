<?php include "includes/header.php"; ?>
    
        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
                <h3>contact us</h3>
            </div>
            <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="POST" id="contactForm" >
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" value="Send" class="button button-contactForm boxed-btn">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <p>Call or submit our online form to request an estimate or for general questions 
                            about our   services. We look forward to serving you!
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

    <!-- footer -->
   
<?php include "includes/footer.php"; ?>