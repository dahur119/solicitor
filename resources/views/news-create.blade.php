<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/justica/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:21 GMT -->
<head>
    @include('components.head')
</head>


<body>
    <div id="wrapper">
        <div id="topbar" class="text-white bg-color">
            
        </div>
        <!-- header begin -->
        @include('components.dashboardHead')
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
          
            <!-- section close -->
        
          
    </section>

    
    <section aria-label="section" class="text-light" data-bgcolor="#111111">
       
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center">
                    <h3>Create News</h3>
                    <form name="contactForm" id="contact_form" class="form-border" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="field-set">
                            <input type="text" name="title" id="title" class="form-control" placeholder="News Title" required />
                        </div>
                        <div class="field-set">
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug (unique)" required />
                        </div>
                        <div class="field-set">
                            <input type="text" name="author" id="author" class="form-control" placeholder="Author Name" required />
                        </div>
                        <div class="field-set">
                            <input type="text" name="tagline" id="tagline" class="form-control" placeholder="Tagline" required />
                        </div>
                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <div class="field-set">
                            <input type="file" name="image" id="image" class="form-control" required />
                        </div>
                        <div class="spacer-half"></div>
                        <div id="submit">
                            <input type="submit" id="send_message" value="Add News" class="btn btn-custom" />
                        </div>
                        <div id="mail_success" class="success">Your message has been sent successfully.</div>
                        <div id="mail_fail" class="error">Sorry, error occurred while sending your message.</div>
                    </form>

                    <div class="mt-4">
                        <!-- This button redirects to the edit page, you need to replace 'news_id' with the actual news ID you want to edit -->
                       
                        <div class="mt-4">
                            
                        </div>
                        

                    </div>

                    
                </div>
                <div class="col-lg-4">
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


    