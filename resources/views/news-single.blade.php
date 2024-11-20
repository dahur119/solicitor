<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/justica/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:18 GMT -->
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
        {{-- @include("components.layout") --}}
        @include('components.header')
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-white">
                <img src="{{ asset('images/background/subheader.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>{{ $newsItem->title }}</h1>
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
                        <div class="col-md-8">
                            <div class="blog-read">
                                <img alt="{{ $newsItem->title }}" src="{{ asset('images/news/' . $newsItem->image) }}" class="img-fullwidth">
                                <div class="post-text">
                                    <h2>{{ $newsItem->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ $newsItem->created_at->format('F d, Y') }}</span>
                                        <span class="post-author">{{ $newsItem->author }}</span>
                                    </div>
                                    
                                    {!! $newsItem->message !!}
                                </div>
                                @auth
                    <div class="col-md-4">
                        <a href="{{ route('news.edit', ['slug' => $newsItem->slug]) }}" class="btn btn-warning">Edit Button</a>
                    </div>
                    @endauth

                           
                            </div>

                            <div class="spacer-single"></div>
                            <div id="blog-comment">
                                <h4>Comments ({{ $comments->count() }})</h4>
                                <div class="spacer-half"></div>
                                <ol>
                                    @foreach ($comments as $comment)
                                        <li>
                                            <div class="avatar">
                                                <img src="images/misc/avatar.png" alt="" />
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">{{ $comment->name }}</span>
                                                <span class="c_date id-color">{{ $comment->created_at->format('d M Y') }}</span>
                                                <span class="c_reply"><a href="#">Reply</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">{{ $comment->content }}</div>
                                        </li>
                                    @endforeach
                                </ol>
                                <div class="spacer-single"></div>
                                <div id="comment-form-wrapper">
                                    <h4>Leave a Comment</h4>
                                    <div class="comment_form_holder">
                                        <form id="contact_form" method="POST" action="{{ route('comments.store', $newsItem->slug) }}">
                                            @csrf
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required />
                                            <label>Email <span class="req">*</span></label>
                                            <input type="email" name="email" id="email" class="form-control" required />
                                            <div id="error_email" class="error">Please check your email</div>
                                            <label>Message <span class="req">*</span></label>
                                            <textarea cols="10" rows="10" name="content" id="message" class="form-control" required></textarea>
                                            <div id="error_message" class="error">Please check your message</div>
                                            <p id="btnsubmit">
                                                <input type="submit" id="send" value="Send" class="btn btn-custom" />
                                            </p>
                                        </form>
                                        
                                    </div>
                                  

                                
                                </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        
                        
                        <div id="sidebar" class="col-md-4">
                            <div class="widget widget-post">
                                <h4>Recent Posts</h4>
                                <div class="small-border"></div>
                                <ul>
                                    @foreach($recentPosts as $post)
                                        <li>
                                            <span class="date">{{ $post->created_at->format('d M') }}</span>
                                            <a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
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
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/enquire.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jarallax.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>
</body>


<!-- Mirrored from www.madebydesignesia.com/themes/justica/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:29:21 GMT -->
</html>