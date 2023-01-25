<?php

function begin($title = '')
{
    echo '<!DOCTYPE html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.app1('appname').' | '.$title.' </title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="yolkassets/upload/'.app1('favicon').'" type="image/png">

        <!-- Styles -->
        <link rel="stylesheet" href="front/css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
        <link rel="stylesheet" href="front/css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->
        <link rel="stylesheet" href="front/css/icons.css" type="text/css" /><!-- Font Awesome -->
        <link rel="stylesheet" href="front/css/select2.min.css" type="text/css" /><!-- Select2 -->
        <link rel="stylesheet" href="front/css/perfect-scrollbar.css" /><!-- Scroll Bar -->
        <link rel="stylesheet" href="front/css/style.css" type="text/css" /><!-- Style -->
        <link rel="stylesheet" href="front/css/responsive.css" type="text/css" /><!-- Responsive -->
        <link rel="stylesheet" href="front/css/colors/color.css" type="text/css" /><!-- Color -->
        <link rel="stylesheet" href="front/layerslider/css/layerslider.css" type="text/css"><!-- Layer Slider -->
    
    </head>';
}

//theme 2 functions *****************************************
// ************************************************************
function begin2($title = '')
{
    echo '<!DOCTYPE html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.app1('appname').' | '.$title.' </title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="yolkassets/upload/'.app1('favicon').'" type="image/png">

        <!-- Styles -->
        <link rel="stylesheet" href="front2/assets/css/vendor.css">
        <link rel="stylesheet" href="front2/assets/css/style.css">
        <link rel="stylesheet" href="front2/assets/css/responsive.css">
        <meta property="og:image" content="yolkassets/upload/'.app1('applogo').'">
        <meta property="twitter:image" content="yolkassets/upload/'.app1('applogo').'">

    
    </head>';
}

function topnav2()
{
    echo '<!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->

    <!-- navbar start -->
    <header class="navbar-area">
        <div class="navbar-top">
            <div class="logo d-none d-lg-block">
            <!-- logo white-->
                <a class="main-logo" href="home"><img src="yolkassets/upload/'.app1('applogo').'" alt="img" style=" width:150px;height:70px;margin-left:150px;"></a>
            </div>
            <div class="nav-phone-wrap">
                <i class="fas fa-phone-alt"></i>
                '.app1('appcontact').'
            </div>
            <div class="container p-lg-0">
                <div class="row">
                    <div class="col-lg-10 col-md-9 text-md-start text-center">
                        <ul class="topbar-left">
                            <li><svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 0C7.0625 0 8.0625 0.28125 9 0.8125C9.90625 1.375 10.625 2.09375 11.1875 3C11.7188 3.9375 12 4.9375 12 6C12 6.625 11.9062 7.15625 11.7812 7.625C11.625 8.125 11.3438 8.71875 10.9375 9.4375C10.625 9.9375 10.0312 10.9375 9.125 12.375L7.28125 15.2812C7.09375 15.5938 6.8125 15.8125 6.5 15.9375C6.15625 16.0625 5.8125 16.0625 5.5 15.9375C5.15625 15.8125 4.90625 15.5938 4.71875 15.2812L2.875 12.375C1.9375 10.9375 1.34375 9.96875 1.0625 9.46875C0.625 8.71875 0.34375 8.125 0.21875 7.625C0.0625 7.15625 0 6.625 0 6C0 4.9375 0.25 3.9375 0.8125 3C1.34375 2.09375 2.0625 1.375 3 0.8125C3.90625 0.28125 4.90625 0 6 0ZM6 14.5L7.96875 11.375C8.78125 10.0625 9.34375 9.15625 9.625 8.71875C9.96875 8.09375 10.1875 7.625 10.3125 7.25C10.4375 6.90625 10.5 6.5 10.5 6C10.5 5.1875 10.2812 4.4375 9.875 3.75C9.46875 3.0625 8.9375 2.53125 8.25 2.125C7.5625 1.71875 6.8125 1.5 6 1.5C5.1875 1.5 4.4375 1.71875 3.75 2.125C3.0625 2.53125 2.5 3.0625 2.09375 3.75C1.6875 4.4375 1.5 5.1875 1.5 6C1.5 6.5 1.53125 6.90625 1.65625 7.28125C1.78125 7.65625 2.03125 8.125 2.40625 8.75C2.65625 9.1875 3.1875 10.0938 4.03125 11.4062C4.8125 12.6562 5.46875 13.6875 6 14.5ZM3.5 6C3.5 6.6875 3.71875 7.28125 4.21875 7.78125C4.71875 8.28125 5.3125 8.5 6 8.5C6.6875 8.5 7.25 8.28125 7.75 7.78125C8.25 7.28125 8.5 6.6875 8.5 6C8.5 5.3125 8.25 4.75 7.75 4.25C7.25 3.75 6.6875 3.5 6 3.5C5.3125 3.5 4.71875 3.75 4.21875 4.25C3.71875 4.75 3.5 5.3125 3.5 6Z" fill="#FA4318"/>
                                </svg>
                                '.app1('appaddress').'</li>
                            <li><i class="far fa-clock"></i>Mon - Sat: 8 am - 5 pm, Sunday: CLOSED</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <ul class="topbar-right social-area text-md-end text-center">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-area-1 navbar-area navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#transpro_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                 <!--logo black -->
                    <a href="home"><img src="yolkassets/upload/'.app1('applogo').'" alt="img"></a>
                </div>
                <div class="nav-left-part">
                      
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search-bar-btn" href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9062 14.6562C15.9688 14.7188 16 14.8125 16 14.9062C16 15.0312 15.9688 15.125 15.9062 15.1875L15.1875 15.875C15.0938 15.9688 15 16 14.9062 16C14.7812 16 14.7188 15.9688 14.6562 15.875L10.8438 12.0938C10.7812 12.0312 10.75 11.9375 10.75 11.8438V11.4062C10.1562 11.9062 9.5 12.3125 8.78125 12.5938C8.03125 12.875 7.28125 13 6.5 13C5.3125 13 4.21875 12.7188 3.21875 12.125C2.21875 11.5625 1.4375 10.7812 0.875 9.78125C0.28125 8.78125 0 7.6875 0 6.5C0 5.3125 0.28125 4.25 0.875 3.25C1.4375 2.25 2.21875 1.46875 3.21875 0.875C4.21875 0.3125 5.3125 0 6.5 0C7.6875 0 8.75 0.3125 9.75 0.875C10.75 1.46875 11.5312 2.25 12.125 3.25C12.6875 4.25 13 5.3125 13 6.5C13 7.3125 12.8438 8.0625 12.5625 8.78125C12.2812 9.53125 11.9062 10.1875 11.4062 10.75H11.8438C11.9375 10.75 12.0312 10.7812 12.0938 10.8438L15.9062 14.6562ZM6.5 11.5C7.375 11.5 8.21875 11.2812 9 10.8438C9.75 10.4062 10.375 9.78125 10.8125 9C11.25 8.25 11.5 7.40625 11.5 6.5C11.5 5.625 11.25 4.78125 10.8125 4C10.375 3.25 9.75 2.625 9 2.1875C8.21875 1.75 7.375 1.5 6.5 1.5C5.59375 1.5 4.75 1.75 4 2.1875C3.21875 2.625 2.59375 3.25 2.15625 4C1.71875 4.78125 1.5 5.625 1.5 6.5C1.5 7.40625 1.71875 8.25 2.15625 9C2.59375 9.78125 3.21875 10.4062 4 10.8438C4.75 11.2812 5.59375 11.5 6.5 11.5Z" fill="#080C24"/>
                        </svg>                            
                    </a>
                    <a class="btn btn-base" href="contact"><span>
                      </span> Get A Quote
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="transpro_main_menu">
                    <ul class="navbar-nav menu-open">
                        
                        
                        <li><a href="home">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="track">Track</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="search-bar-btn" href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9062 14.6562C15.9688 14.7188 16 14.8125 16 14.9062C16 15.0312 15.9688 15.125 15.9062 15.1875L15.1875 15.875C15.0938 15.9688 15 16 14.9062 16C14.7812 16 14.7188 15.9688 14.6562 15.875L10.8438 12.0938C10.7812 12.0312 10.75 11.9375 10.75 11.8438V11.4062C10.1562 11.9062 9.5 12.3125 8.78125 12.5938C8.03125 12.875 7.28125 13 6.5 13C5.3125 13 4.21875 12.7188 3.21875 12.125C2.21875 11.5625 1.4375 10.7812 0.875 9.78125C0.28125 8.78125 0 7.6875 0 6.5C0 5.3125 0.28125 4.25 0.875 3.25C1.4375 2.25 2.21875 1.46875 3.21875 0.875C4.21875 0.3125 5.3125 0 6.5 0C7.6875 0 8.75 0.3125 9.75 0.875C10.75 1.46875 11.5312 2.25 12.125 3.25C12.6875 4.25 13 5.3125 13 6.5C13 7.3125 12.8438 8.0625 12.5625 8.78125C12.2812 9.53125 11.9062 10.1875 11.4062 10.75H11.8438C11.9375 10.75 12.0312 10.7812 12.0938 10.8438L15.9062 14.6562ZM6.5 11.5C7.375 11.5 8.21875 11.2812 9 10.8438C9.75 10.4062 10.375 9.78125 10.8125 9C11.25 8.25 11.5 7.40625 11.5 6.5C11.5 5.625 11.25 4.78125 10.8125 4C10.375 3.25 9.75 2.625 9 2.1875C8.21875 1.75 7.375 1.5 6.5 1.5C5.59375 1.5 4.75 1.75 4 2.1875C3.21875 2.625 2.59375 3.25 2.15625 4C1.71875 4.78125 1.5 5.625 1.5 6.5C1.5 7.40625 1.71875 8.25 2.15625 9C2.59375 9.78125 3.21875 10.4062 4 10.8438C4.75 11.2812 5.59375 11.5 6.5 11.5Z" fill="#080C24"/>
                        </svg>                            
                    </a>
                    <a class="btn btn-base" href="track"><span>
                      </span>Track Item
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar end -->';
}

function foot2()
{
    echo '<!-- footer area start -->
    <footer class="footer-area">
        <div class="footer-top" style="background-image: url(front2/assets/img/footer/bg.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-top">
                            <div class="icon">
                                <img src="front2/assets/img/icon/map-marker.png" alt="img">
                            </div>
                            <div class="details">
                                <h6>OFFICE ADDRESS:</h6>
                                <p>'.app1('appaddress').'</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-top">
                            <div class="icon">
                                <img src="front2/assets/img/icon/phone.png" alt="img">
                            </div>
                            <div class="details">
                                <h6>CONTACT US:</h6>
                                <p>'.app1('appemail').'</p>
                                <p>'.app1('appcontact').'</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-top after-none">
                            <div class="icon">
                                <img src="front2/assets/img/icon/clock.png" alt="img">
                            </div>
                            <div class="details">
                                <h6>WORKING HOURS:</h6>
                                <p>Weekdays - Mon-Fri:  8am-21pm</p>
                                <p>Weekend - Sta & Sun:  Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="widget widget_about">
                        <div class="thumb">
                            <img src="yolkassets/upload/'.app1('applogo').'" alt="img">
                        </div>
                        <div class="details">
                            <p>'.substr(app1('appabout'), 0, 50).'...</p>
                            <ul class="social-media style-border">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">USEFULL LINKS</h4>
                        <ul>
                            <li><a href="about"><i class="fa fa-arrow-right"></i> About Us</a></li>
                            <li><a href="services"><i class="fa fa-arrow-right"></i> Services</a></li>
                           
                            
                            <li><a href="contact"><i class="fa fa-arrow-right"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">OUR SERVICES</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-arrow-right"></i> Air Freight</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right"></i> Ocean Freight</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right"></i> Railway Freight</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right"></i> Warehousing</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right"></i> Distribution</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="widget widget_subscribe">
                        <h4 class="widget-title">SUBSCRIBE NOW</h4>
                        <p>Continually evolve worldwide vortals rather than process centric human capital. Subscribe for our latest news & articles.
                            and send message.</p>
                        <div class="single-subscribe-inner">
                            <input type="text" placeholder="Email Address">
                            <a class="btn btn-base" href="#"><i class="fa fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </footer>
    <!-- footer area end -->

    <!-- footer-bottom area start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="copyright-area">
                        <p>© Copyright 2022  By <a href="#">'.app1('appname').'</a>, All right reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end text-center">
                    <ul>
                        <li>
                            <a href="#">Terms & Condition</a>
                        </li>
                        <li><a href="#">Privacy & Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="front2/assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="front2/assets/js/main.js"></script>
</body>
</html>';
}

// end of theme 2 functions *****************************************
// ********************************************************************
function topnav()
{
    echo '<header class="fancy-header stick">
    <div class="top-sec">
        <div class="top-bar">
            <div class="container">
                <span class="cargo-time"><i class="fa fa-clock-o"></i>Working Time : 08:00AM - 9:00PM</span>
                <div class="connect-us">
                    <ul class="social-btn">
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-twitter"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-reddit"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="extra-links">
                    <a itemprop="url" href="front/contact" title="">Support</a>   /   <a itemprop="url" href="front/#" title="" class="popup2">Track Item</a>
                </div>
            </div>
        </div>
    </div><!-- Top Sec -->
    <div class="logo-menu-sec">
        <div class="logo-menu">
            <div class="logo">
                <a itemprop="url" href="home" title=""><img itemprop="image" src="yolkassets/upload/'.app1('applogo').'" alt="" /></a>
            </div>
            <div class="quick-contact">
                <ul>
                    <li>
                        <img src="front/images/resource/phone.png" alt="" />
                        <span>'.app1('appcontact').'</span>
                        <p></p>
                    </li>
                    <li>
                        <img src="front/images/resource/sms.png" alt="" />
                        <span>'.app1('appemail').'</span>
                        <p>Have Any Question?</p>
                    </li>
                    <li>
                        <a href="#" title="" itemprop="url" class="theme-btn popup2">Track Item</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="menu-curve">
            <ul>
                <li class=""><a itemprop="url" href="home" title="">HOME</a>

                </li>
                <li class=""><a itemprop="url" href="about" title="">ABOUT</a>

                </li>
                <li class=""><a itemprop="url" href="services" title="">SERVICES</a>

                </li>

                <!--<li class=""><a itemprop="url" href="gallery" title="">GALLERY</a>-->

                </li>

                <li><a itemprop="url" href="contact" title="">CONTACT</a></li>
            </ul>
        </nav>
    </div><!-- Logo Menu Sec -->
</header>

<div class="responsive-header">
    <span class="top-sec-btn"><i class="fa fa-angle-double-down"></i></span>
    <div class="responsive-top-sec">
        <div class="responsive-top-bar top-bar">
            <div class="container">
                <span class="cargo-time">Opening Time :<i>08:00AM - 9:00PM</i></span>
                <div class="connect-us">
                    <ul class="social-btn">
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Responsive Top Bar -->
        <div class="responsive-quick-contact">
            <div class="container">
                <div class="quick-contact">
                    <ul>
                        <li>
                            <img src="front/images/resource/phone.png" alt="" />
                            <span>'.app1('appcontact').'</span>
                            <p></p>
                        </li>
                        <li>
                            <img src="front/images/resource/sms.png" alt="" />
                            <span>'.app1('appemail').'</span>
                            <p>Have Any Question?</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- Responsive Quick Contact -->
    </div>
    <div class="responsive-nav">
        <div class="container">
            <div class="responsive-logo">
                <div class="logo">
                    <a itemprop="url" href="front/home" title=""><img itemprop="image" src="yolkassets/upload/'.app1('applogo').'" alt="" /></a>
                </div>
            </div>
            <span class="responsive-btn"><i class="fa fa-list"></i></span>
            <div class="responsive-menu">
                <span class="close-btn"><i class="fa fa-close"></i></span>
                <ul class="responsive-popup-btns">
                    <li><i class="fa fa-user"></i><a itemprop="url" href="front/#" title="" class="popup1">Sign In</a></li>
                    <li><i class="fa fa-paper-plane"></i><a itemprop="url" href="front/#" title="" class="popup2">REQUEST A RATE</a></li>
                </ul>
                <ul>
                    <li class=""><a itemprop="url" href="home" title="">HOME</a>

                    </li>
                    <li class=""><a itemprop="url" href="about" title="">ABOUT</a>

                    </li>
                    <li class=""><a itemprop="url" href="services" title="">SERVICES</a>

                    </li>

                    <li class=""><a itemprop="url" href="gallery" title="">GALLERY</a>

                    </li>

                    <li><a itemprop="url" href="contact" title="">CONTACT</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div>
    </div>
</div><!--Responsive header-->';
}

function foot()
{
    echo '<footer>
    <section class="block">
        <div class="parallax dark" data-velocity="-.2"
             style="background: rgba(0, 0, 0, 0) url(front/images/parallax2.jpg) no-repeat 50% 0;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 column">
                            <div class="widget">
                                <div class="about-widget">
                                    <div class="logo">
                                        <a itemprop="url" href="home" title=""><img itemprop="image"
                                                                                         src="yolkassets/upload/'.app1('applogo').'" alt="
                                                                                         alt=""/></a>
                                    </div>
                                    <p itemprop="description"></p>
                                    <ul class="social-btn">
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <Div class="row">
                                <div class="col-md-12 column">
                                    <div class="widget">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                            <h3>USEFUL LINKS</h3>
                                        </div>
                                        <div class="links-widget">
                                            <ul>
                                                <li><a itemprop="url" href="about" title="">About Us</a></li>
                                                <li><a itemprop="url" href="services" title="">Services</a></li>
                                                <li><a itemprop="url" href="gallery" title="">Gallery</a>
                                                </li>
                                                <li><a itemprop="url" href="contact"
                                                       title="">Contact</a></li>
                                                <li><a itemprop="url" href="track" title="">Track Shipment</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- Widget -->
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5 column">
                            <div class="widget blue1">
                                <div class="heading2">
                                    <span>FAST AND SAFE</span>
                                    <h3>Track Shipment</h3>
                                </div>
                                <div class="subscription-form">
                                    <p itemprop="description"></p>
                                    <form action="track" method="get">
                                        <input type="text" name="tracking" required placeholder="Enter Tracking Number"/>
                                        <button type="submit" title=""  class="theme-btn"
                                           ><i class="fa fa-paper-plane"></i>TRACK NOW</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bottom-line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 column">
                    <span>&copy; '.date('Y').'  <a itemprop="url" title="" href="front/home">'.app1('appname').'</a> - All Rights Reserved</span>
                </div>
                <div class="col-md-6 column">
                    <ul>
                        <li><a itemprop="url" href="front/home" title="">HOME</a></li>
                        <li><a itemprop="url" href="front/services" title="">SERVICES</a></li>
                        <li><a itemprop="url" href="front/gallery" title="">GALLERY</a></li>
                        <li><a itemprop="url" href="front/contact" title="">CONTACT</a></li>
                        <li><a itemprop="url" href="front/about" title="">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blank"></div>
</footer>';
}

function scripts()
{
    echo '<script type="text/javascript" src="front/js/modernizr-2.0.6.js"></script><!-- Modernizr -->
    <script type="text/javascript" src="front/js/jquery-2.2.2.js"></script><!-- jQuery -->
    <script type="text/javascript" src="front/js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="front/js/scrolltopcontrol.js"></script><!-- Scroll To Top -->
    <script type="text/javascript" src="front/js/jquery.scrolly.js"></script><!-- Scrolly -->
    <script type="text/javascript" src="front/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="front/js/icheck.js"></script><!-- iCheck -->
    <script type="text/javascript" src="front/js/select2.full.js"></script><!-- Select2 -->
    <script type="text/javascript" src="front/js/perfect-scrollbar.js"></script><!-- Scroll Bar -->
    <script type="text/javascript" src="front/js/perfect-scrollbar.jquery.js"></script><!-- Scroll Bar -->
    
    <!-- External libraries: jQuery & GreenSock -->
    <script src="front/layerslider/js/greensock.js" type="text/javascript"></script>
    <!-- LayerSlider script files -->
    <script src="front/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="front/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script src="front/js/script.js"></script>';
}

function app1($data)
{
    $d = fetchall('settings');

    return $d[0][$data];
}

function app($data)
{
    $d = fetchall('settings');

    echo $d[0][$data];
}
