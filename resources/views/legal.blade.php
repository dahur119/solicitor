<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/justica/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:21 GMT -->
<head>
    @include('components.head')
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
        @include('components.header')
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
                                <h1>Assess Your Legal Needs</h1>
                                <p>This step helps us align our services with your expectations.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
           
            <section aria-label="section" class="text-light" data-bgcolor="#111111">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center">
                            <h3>Looking for Answers? We’ve Got You Covered!</h3>
                            <form name="needForm" id="need_form" class="form-border" method="POST"action="{{ route('needs.store') }}">
                                @csrf
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" />
                                </div>
                                <select name="category[]" id="category" class="form-control">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="Corporate and Commercial Law">Corporate and Commercial Law</option>
                                    <option value="Expatriate/Immigration Matters">Expatriate/Immigration Matters</option>
                                    <option value="Intellectual Property Law">Intellectual Property Law</option>
                                    <option value="Media, Entertainment And Technology">Media, Entertainment And Technology</option>
                                    <option value="Real Estate And Infrastructure">Real Estate And Infrastructure</option>
                                    <option value="Tax Law">Tax Law</option>
                                    <option value="Sport Law">Sport Law</option>
                                </select>
                                
                                
                         
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
               @include('components.footer')
            </div>
            <div class="subfooter">
                @include('components.sub-footer')
               
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
   
   
    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/need.js"></script>
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
</html>