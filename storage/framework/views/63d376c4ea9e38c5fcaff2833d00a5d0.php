<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/justica/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:12 GMT -->
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
    <?php $__currentLoopData = $newsItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 mb30">
            <div class="bloglist item">
                <div class="post-content">
                    <div class="date-box">
                        <div class="m"><?php echo e($news->created_at->format('d')); ?></div>
                        <div class="d"><?php echo e(strtoupper($news->created_at->format('M'))); ?></div>
                    </div>
                    <div class="post-image">
                        <img alt="" src="<?php echo e(asset('images/news/' . $news->image)); ?>">
                    </div>
                    <div class="post-text">
                        <span class="p-tagline"><?php echo e($news->tagline); ?></span>
                        <h4><a href="<?php echo e(route('news.show', ['slug' => $news->slug])); ?>"><?php echo e($news->title); ?></a></h4>
                        <p><?php echo e($news->excerpt); ?></p>
                        <p><?php echo e(Str::words($news->message, 30, '...')); ?></p>

                        <span class="p-author"><?php echo e($news->author); ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
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
</html><?php /**PATH C:\laragon\www\solicitor\resources\views/news.blade.php ENDPATH**/ ?>