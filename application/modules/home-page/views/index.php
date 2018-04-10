<!DOCTYPE HTML>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>National Shrine of Mary Help of Christians</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url();?>assets/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <!--Font-Awesome-Stylesheets-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-brands.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-brands.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-regular.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-regular.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-solid.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-solid.css">

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">

    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">

            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#faq-page">About Us</a></li>
                    <!--<li><a href="#service-page">System Features</a></li>-->
                    <li><a href="#price-page">Events</a></li>
                    <li><a href="#service-page">News</a></li>
                    <!--<li><a href="#faq-page">FAQ</a></li>-->
                    <li><a href="#contact-page">Contact Us</a></li>
                    <li><a href="<?php echo base_url();?>login/User">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h1 class="text-center">National Shrine of Mary Help of Christians</h1>
                    <p class="hidden-md text-center">“Do not put off till tomorrow the good you can do today. You may not have a tomorrow.” - St. John Bosco</p>
                    <hr class="hidden-md">
                    <div class="w-100"></div>
                    <h3 class="card-header text-center">Mass Schedules</h3>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card-body text-center">
                            <h5 class="card-title bg-primary">Regular Sundays</h5>
                            <p class="card-text">6:00 AM, 7:30 AM, 9:00 AM, 10:30 AM, 12:00 NN, 3:30 PM, 5:00 PM, 6:30 PM, 8:00 PM</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card-body text-center">
                            <h5 class="card-title bg-primary">Monday - Friday</h5>
                            <p class="card-text">6:00 AM, 7:00 AM, 6:30 AM, and 12:00NN (Wednesdays only)</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card-body text-center">
                            <h5 class="card-title bg-primary">Saturday</h5>
                            <p class="card-text">6:00 AM, 7:00 AM, and 6:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 hidden-sm votd">
                    <h3>Verse of the Day</h3>
                    <small><script src="http://www.verse-a-day.com/js/vad.js"></script></small>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->
    <section class="section-padding" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>About Us</h2>
                        <p>Know our vision and mission statement.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                    <h3 class="text-center">Vision</h3>
                    <p class="text-justify">
                        We, the parishioners of Mary Help of Christians Parish, envision ourselves as formed and committed disciples living as Basic Ecclesial Community (BEC's) called to integral evangelization towards building communion among families, journeying with the young and the poor imbued with the Salesian Spirit, with Mary as our Model.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                    <h3 class="text-center">Mission</h3>
                    <p class="text-justify">Thus, we commit ourselves to integral evangelization towards building communion among families by:</p>
                    <ol type="1">
                        <li>Living life holiness through prayer and Liturgy, and effective service to others.</li>
                        <li>Providing Holistic formation programs.</li>
                        <li>Offering comprehensive and sustainable program for the youth, the poor and families.</li>
                        <li>Promoting and organizing BEC's as our way of being Church and experiencing communion.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="price-area overlay section-padding" id="price-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Events</h2>
                        <p>Want to get involved? View our parish events!</p>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="w3-card-4">
                        <img src="<?php echo base_url();?>assets/images/medicalmission.jpg" alt="Norway">
                        <header class="w3-container w3-blue">
                            <h3>Medical Mission</h3>
                        </header>
                        <div class="w3-container w3-center">
                            <p>The annual medical mission will be held on <strong>April 23, 2018</strong> at the Covered Court from 1:30PM to 2:30PM. Bring the necessary documents.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="w3-card-4">
                        <img src="<?php echo base_url();?>assets/images/kumpisalangbayan.jpg" alt="Norway">
                        <header class="w3-container w3-blue">
                            <h3>Kumpisalang Bayan</h3>
                        </header>
                        <div class="w3-container w3-center">
                            <p>Ang kumpisalang bayan ay mangyayari sa ganap na <strong>ika-15 ng Abril, 2018</strong> mula 6:30PM hanggang 7:30PM sa ating parokya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="w3-card-4">
                        <img src="<?php echo base_url();?>assets/images/kasalangbayan.jpg" alt="Norway">
                        <header class="w3-container w3-blue">
                            <h3>Kasalang Bayan</h3>
                        </header>
                        <div class="w3-container w3-center">
                            <p>Ang kasalang bayan ay mangyayari sa ganap ng <strong>ika-20 ng Mayo, 2018</strong> mula 1:30PM hanggang 3:30PM sa ating parokya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>News</h2>
                        <p>Get to know the latest Catholic news inside and outside our parish.</p>
                    </div>
                </div>
            </div>
            <div class="row v-center">
                <div class="col-xs-12 col-sm-8 col-md-5 col-lg-4">
                    <h4 class="text-left">Parish Announcements</h4>
                    <div class="announcement text-justify">
                        Nothing to show.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 hidden-xs hidden-sm">
                    <h4 class="text-left">Facebook Feed</h4>
                    <div class="fb-page" data-href="https://www.facebook.com/pg/MHCNationalShrine/posts/?ref=page_internal" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/pg/MHCNationalShrine/posts/?ref=page_internal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pg/MHCNationalShrine/posts/?ref=page_internal">Mary Help of Christians National Shrine</a></blockquote>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <h4 class="text-left">Catholic Life</h4>
                    <!-- start sw-rss-feed code -->
                    <script type="text/javascript">
                        //<!-- 
                        rssfeed_url = new Array();
                        rssfeed_url[0] = "integratedcatholiclife.org/feed";
                        rssfeed_frame_width = "350";
                        rssfeed_frame_height = "470";
                        rssfeed_scroll = "off";
                        rssfeed_scroll_step = "6";
                        rssfeed_scroll_bar = "on";
                        rssfeed_target = "_blank";
                        rssfeed_font_size = "14";
                        rssfeed_font_face = "Arial";
                        rssfeed_border = "on";
                        rssfeed_css_url = "";
                        rssfeed_title = "on";
                        rssfeed_title_name = "Integrated Catholic Life";
                        rssfeed_title_bgcolor = "#3366ff";
                        rssfeed_title_color = "#fff";
                        rssfeed_title_bgimage = "";
                        rssfeed_footer = "off";
                        rssfeed_footer_name = "rss feed";
                        rssfeed_footer_bgcolor = "#fff";
                        rssfeed_footer_color = "#333";
                        rssfeed_footer_bgimage = "";
                        rssfeed_item_title_length = "50";
                        rssfeed_item_title_color = "#666";
                        rssfeed_item_bgcolor = "#fff";
                        rssfeed_item_bgimage = "";
                        rssfeed_item_border_bottom = "on";
                        rssfeed_item_source_icon = "off";
                        rssfeed_item_date = "on";
                        rssfeed_item_description = "on";
                        rssfeed_item_description_length = "120";
                        rssfeed_item_description_color = "#666";
                        rssfeed_item_description_link_color = "#333";
                        rssfeed_item_description_tag = "on";
                        rssfeed_no_items = "0";
                        rssfeed_cache = "c3014a8be1c3132a79880dcdc9037e80";
                        //-->

                    </script>
                    <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script>
                    <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. -->
                    <div style="text-align:right; width:350px;">powered by <a href="http://www.surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;font-size:10px">Surfing Waves</a></div>
                    <!-- end sw-rss-feed code -->
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact Us</h2>
                            <p>Let's stay connected</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-lg-3">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
<!--
                                <div class="side-icon">
<img src="<?php echo base_url();?>assets/images/location-arrow.png" alt="">
</div>
-->
                                <p><strong>Address: </strong> National Shrine of Mary Help of Christians
                                Better Living Subdivision, Barangay Don Bosco
                                Paranaque City, Metro Manila 
                                Philippines 
                                1711</p>
                            </div>
                        </address>
                    </div>

                    <div class="col-xs-12 col-md-3 col-lg-2">
                        <div class="side-icon-box">
                            <!--
                            <div class="side-icon">
                                <img src="<?php echo base_url();?>assets/images/phone-arrow.png" alt="">
                            </div>
-->
                            <p><strong>Telephone: </strong>
                                <a href="callto:63 (02) 823-9482">63 (02) 823-9482</a> <br />
                                <a href="callto:63 (02) 823-9220">63 (02) 823-9220</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="side-icon-boxes">
                            <div class="side-icon-box">
                                <p class="text-justify"><strong>About: </strong> The center for the propagation of the devotion to the Blessed Virgin Mary. It became a shrine on the representation of the Salesian Community. It is located inside Better Living Subdivision in Barangay Don Bosco, Parañaque City.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-3">
                        <div class="side-icon-boxes">
                            <div class="side-icon-box">
                                <p><strong>Services</strong></p>
                                <div class="list-group">
                                    <a class="list-group-item">Baptism</a>
                                    <a class="list-group-item">First Communion</a>
                                    <a class="list-group-item">First Confirmation</a>
                                    <a class="list-group-item">Weddings</a>
                                    <a class="list-group-item">Funeral Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-lg-3 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="https://www.facebook.com/MHCNationalShrine/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://nsmhcp.weebly.com/index.html" target="_blank"><i class="fas fa-globe"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018 All right resurved. This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Vendor-JS-->
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact-form.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/js/scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>

</html>
