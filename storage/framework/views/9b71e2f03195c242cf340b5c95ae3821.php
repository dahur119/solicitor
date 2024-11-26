<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/justica/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:21 GMT -->
<head>
    <?php echo $__env->make('components.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>


<body>
    <div id="wrapper">
        <div id="topbar" class="text-white bg-color">
            <div class="container">
                <div class="topbar-left sm-hide">
                    <span class="topbar-widget tb-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </span>
                </div>
                <div class="topbar-right">
                    <div class="topbar-right">
                        <span class="topbar-widget"><a href="#">Privacy policy</a></span>
                        <span class="topbar-widget"><a href="#">Request Quote</a></span>
                        <span class="topbar-widget"><a href="#">FAQ</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- header begin -->
        <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-white">
                <img src="images/background/subheader2.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Contact Us</h1>
                                <p>Reputation. Respect. Result.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <section aria-label="section">
                <div class="container">
                    <div class="row">
                      
                      
                        <div class="col-md-4">
                            <img src="images/misc/p3.jpg" alt="" class="img-fluid mb30">
                            <h3>NIGERIA Office</h3>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>The Waterside, 5 Admiralty Road, Off Admiralty Way Lekki Phase 1, Lagos.</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>09132314117</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">info@acaciasolicitors.com, law@acaciasolicitors.com</a></span>

                            </address>
                        </div>
                    </div>
                </div>
            </section>
            <section aria-label="section" class="text-light" data-bgcolor="#111111">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center">
                            <h3>Do you have any question?</h3>
                            <form name="contactForm" id="contact_form" class="form-border" method="POST"action="<?php echo e(route('contact.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" />

                                </div>
                                <div class="field-set">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                <div class="spacer-half"></div>
                                <div id="submit">
                                    <input type="submit" id="send_message" value="Submit Form" class="btn btn-custom" />
                                </div>
                                <div id="mail_success" class="success">Your message has been sent successfully.</div>
                                <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>
            </section>
            <section class="jarallax text-light">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                            <div class="de_count ultra-big s2 border-light text-center">
                                <h3 class="timer" data-to="10" data-speed="1000">10</h3>
                                <span class="id-color">Years of Experience</span>
                            </div>
                        </div>
                        <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                            <span class="p-title">About Us</span><br>
                            <h2>Justica is Your Best Partner for Legal Solutions</h2>
                        </div>
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                            <p>
                                We are truly a client-focused Law Firm. Our professional legal services are tailored to support our Clients’ investments cutting across real estate and infrastructure, public private partnership, projects financing, private equity, expatriate employment and immigration, telecommunication, media and technology, advisory on various commercial transactions, corporate restructuring, business planning, registration of trademark, patent and design, intellectual property rights’ protection and enforcement in West Africa.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
               <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="subfooter">
                <?php echo $__env->make('components.sub-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               
            </div>
        </footer>
        <!-- footer close -->
        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div id="selector">
        <div id="demo-rtl" class="sc-opt">
            <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
        </div>
        <div class="sc-opt sc-mt">
            <div class="sc-icon"><i class="fa fa-eyedropper"></i></div>
            <span class="opt tc1" data-color="scheme-01"></span>
            <span class="opt tc2" data-color="scheme-02"></span>
            <span class="opt tc3" data-color="scheme-03"></span>
            <span class="opt tc4" data-color="scheme-04"></span>
            <span class="opt tc5" data-color="scheme-05"></span>
            <span class="opt tc6" data-color="scheme-06"></span>
            <span class="opt tc7" data-color="scheme-07"></span>
        </div>
    </div>
   
    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/jarallax.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/designesia.js"></script>
</body>


<!-- Mirrored from www.madebydesignesia.com/themes/justica/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:25 GMT -->
</html><?php /**PATH C:\laragon\www\solicitor\resources\views/contact.blade.php ENDPATH**/ ?>