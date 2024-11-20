<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/justica/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:12 GMT -->
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
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>News</h1>
                                <p>Reputation. Respect. Result.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <!-- section begin -->
            <section aria-label="section">
    <div class="container">
        <div class="row">
    @foreach($newsItems as $news)
        <div class="col-lg-4 col-md-6 mb30">
            <div class="bloglist item">
                <div class="post-content">
                    <div class="date-box">
                        <div class="m">{{ $news->created_at->format('d') }}</div>
                        <div class="d">{{ strtoupper($news->created_at->format('M')) }}</div>
                    </div>
                    <div class="post-image">
                        <img alt="" src="{{ asset('images/news/' . $news->image) }}">
                    </div>
                    <div class="post-text">
                        <span class="p-tagline">{{ $news->tagline }}</span>
                        <h4><a href="{{ route('news.show', ['slug' => $news->slug]) }}">{{ $news->title }}</a></h4>
                        <p>{{ $news->excerpt }}</p>
                        <p>{{ Str::words($news->message, 30, '...') }}</p>

                        <span class="p-author">{{ $news->author }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <div class="spacer-single"></div>
    <div class="pagination">
        {{ $newsItems->links() }}
    </div> --}}
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


<!-- Mirrored from www.madebydesignesia.com/themes/justica/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:18 GMT -->
</html>