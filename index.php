<?php
$msg = ' ';

if (isset($_POST['send']) && !empty($_POST['email'])) {


    $from = 'From: ' . $_POST['name'] . ' <' . $_POST['email'] . '>' . "\r\n";
    // $from .= 'Cc: medicsbd <information@medicsbd.com>' . "\r\n";
    $sent_to = "yaminalam27@gmail.com"; // sender
    $subject = "From Protfulio Website ";
    $message = "Name : " . $_POST['name'] . " \n" . "Email : " . $_POST['email'] . "\n " . "Message : " . $_POST['message'];



    // send mail
    mail($sent_to, $subject, $message, "$from");
    $msg = 'Send Message Successfully !';
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="google-site-verification" content="Yf2_jISnI6Ad_fypsRLXvZwNAaWkPnSGapSbcR5yjRo" />

        <title>Yamin's Portfulio</title>
        <meta name="description" content="The Spice Lounge" />
        <meta name="keywords" content="The Spice Lounge" />
        <meta name="author" content="The Spice Lounge" />

        <!-- Loading Google Web fonts-->
        <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

        <!--General CSS-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="assets/css/simple-line-icons.css"/>
        <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" />

        <!--Menu-->
        <link rel="stylesheet" href="assets/css/bootstrap-menu.css" type="text/css">
        <link rel="stylesheet" href="assets/css/slicknav.css">

        <!-- Bootstrap Light Box-->
<!--        <link rel="stylesheet" href="assets/css/ekko-lightbox.css" type="text/css">
        <link rel="stylesheet" href="assets/css/ekko-lightbox-dark-skin.css">-->

        <!--Optional CSS Starts-->

        <!--Vegas Slider-->
        <link rel="stylesheet" href="assets/css/vegas-styles.css">
        <!--Vegas Slider Ends-->

        <!--Gallery Cycle Slider-->
        <link rel="stylesheet" href="assets/css/cycleslider.css">
        <!--Gallery Cycle Slider End-->

        <!--Gallery SuperSized Slider-->
        <link rel="stylesheet" href="assets/css/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="assets/css/supersized.shutter.css" type="text/css" media="screen" />
        <!--Gallery SuperSized Slider End-->

        <!--Gallery Filer-->
        <link type="text/css" rel="stylesheet" href="assets/css/portfolio.css"/>
        <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" />
        <!--Gallery Filer End-->

        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/horizontal-scroll-section.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

        <!--Vegas Style And Color-->
        <link rel="stylesheet" href="assets/css/vegas-slider.css" type="text/css" >
        <link rel="stylesheet" href="assets/css/colors/vegas-slider-color.css" id="color" type="text/css" />
        <!--Vegas Style And Color-->


        <link rel="shortcut icon" href="assets/images/title.ico" />
        <link rel="apple-touch-icon" href="assets/images/apple_touch_icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple_touch_icon_72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple_touch_icon_114x114.png" />

        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

    </head>
    <body>

        <!--PRELOADER STARTS-->
        <section id="jSplash">
            <div class="spinner">
                <div class="cube cube0"></div>
                <div class="cube cube1"></div>
                <div class="cube cube2"></div>
                <div class="cube cube3"></div>
                <div class="cube cube4"></div>
                <div class="cube cube5"></div>
                <div class="cube cube6"></div>
                <div class="cube cube7"></div>
                <div class="cube cube8"></div>
                <div class="cube cube9"></div>
                <div class="cube cube10"></div>
                <div class="cube cube11"></div>
                <div class="cube cube12"></div>
                <div class="cube cube13"></div>
                <div class="cube cube14"></div>
                <div class="cube cube15"></div>
            </div>
        </section>
        <!--PRELOADER ENDS-->

        <!--Used For Mobile Resolution-->
        <div id="menutop">
            <div class="container"></div>
        </div>
        <!--Used For Mobile Resolution-->



        <!--Wrapper
        =============================-->
        <div id="wrapper">
            <div id="mask">

                <!--Header
                =============================-->
                <header id="sub-menu" class="header">
                    <!-- Menu Sections -->
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="menu clearfix">
                                <a class="navbar-brand nav-link" href="#home"><span class="input-box accura-colored accura-bordered ">Yamin</span>Alam Sarker</a>
                                <div class="collapse navbar-collapse js-navbar-collapse">
                                    <ul id="sub-nav" class="nav navbar-nav vertical-middle navbar-right">
                                        <li><a href="#home" class="nav-link">Home</a></li>
                                        <li><a href="#about" class="nav-link">About Me</a></li>
                                        <li><a href="#skills3" class="nav-link">Skills
                                            </a>
                                        </li>
                                        <li><a href="#resume" class="nav-link">Resume</a></li>
                                        <li class="nav-link">
                                            <a href="#portfolio" class="nav-link">
                                                Portfolio
                                            </a>

                                        </li>
                                       <li><a href="#team" class="nav-link">My Team</a></li>
                                        <li><a href="#contact" class="nav-link">Contact</a></li>
                                    </ul>
                                </div><!-- /.nav-collapse -->
                            </div>
                        </div>
                    </nav>
                    <!-- Menu Sections -->

                </header>
                <!-- // Header
                =============================-->



                <!--Home Page
                =============================-->
                <div id="home" class="wrapper-section homebg" >
                    <div class="pattern_bg"></div>
                    <div class="clearfix">

                        <!-- Mainheader -->
                        <div class="mainheaderslide" id="slide">
                            <!--  Menu section for main page -->
                            <div id="main-menu" class="header">
                                <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-center hide-element">
                                    <div class="container">
                                        <div class="menu clearfix">
                                            <a class="navbar-brand nav-link" href="#home" style="font-family: 'Roboto Slap';">My<span class="input-box label light_square">Protfolio</span></a>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul id="home_scroll" class="nav navbar-nav vertical-middle navbar-right">
                                                    <li><a href="#home" class="nav-link"><small class="selected1">Home</small></a></li>
                                                    <li><a href="#about" class="nav-link">About Me</a></li>
                                                    <li><a href="#skills3" class="nav-link">Skills   </a></li>
                                                    <li><a href="#resume" class="nav-link">Resume</a></li>
                                                    <li class="nav-link">
                                                        <a href="#portfolio" class="nav-link">
                                                            Portfolio
                                                        </a>

                                                    </li>
                                                    <li><a href="#team" class="nav-link">My Team</a></li>
                                                    <li><a href="#contact" class="nav-link">Contact</a></li>
                                                </ul>
                                            </div><!-- /.nav-collapse -->
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!--  Menu section for main page -->
                        </div>
                        <!-- // Mainheader -->

                        <!--Home Top Content-->
                        <div class="header-details">
                            <div class="container">
                                <div class="row">
                                    <div class="clearfix header_icons">
                                        <div class="col-sm-6 hidden-xs">
                                            <div class="accura-header-block accura-hidden-2xs">
                                                <ul class="list-unstyled list-inline accura-social-icons accura-stacked accura-jump accura-bordered accura-big accura-colored-bg clearFix">
                                                    <!--Social Icon 1-->
                                                    <li id="1" class="hide-element">
                                                        <a href="https://www.facebook.com/yaminalam.sarker" target="_blank" class="accura-social-icon-facebook circle">
                                                            <i class="fa fa-facebook"></i>                            </a>                        </li>
                                                    <!--Social Icon 1-->

                                                    <!--Social Icon 2-->
                                                    <li id="2" class="hide-element">
                                                        <a href="https://twitter.com/yaminalam465" target="_blank" class="accura-social-icon-twitter circle">
                                                            <i class="fa fa-twitter"></i>                            </a>                        </li>
                                                    <!-- // Social Icon 2-->

                                                    <!--Social Icon 3-->
                                                    <li id="3" class="hide-element">
                                                        <a href="https://plus.google.com/u/0/+Yaminalam/posts" target="_blank" class="accura-social-icon-gplus circle">
                                                            <i class="fa fa-google-plus"></i>                            </a>                        </li>
                                                    <!-- // Social Icon 3-->

                                                    <!--Social Icon4-->
                                                    <li id="4" class="hide-element">
                                                        <a href="https://github.com/yamin27" target="_blank" class="accura-social-icon-youtube circle">
                                                            <i class="fa fa-github"></i>                            </a>                        </li>
                                                    <!-- // Social Icon 4-->

                                                    <!--Social Icon 5-->
                                                    <li id="5" class="hide-element">
                                                        <a href="https://www.linkedin.com/in/yamin-alam-sarker-57a2178a?trk=nav_responsive_tab_profile" target="_blank" class="accura-social-icon-linkedin circle">
                                                            <i class="fa fa-linkedin"></i>                            </a>                        </li>
                                                    <!-- // Social Icon 5-->

                                                    <!--Social Icon 6-->
                                                    <li id="6" class="hide-element">
                                                        <a href="https://github.com/yamin27" target="_blank" class="accura-social-icon-git circle">
                                                            <i class="fa fa-facebook"></i>                            </a>                        </li>
                                                    <!--Social Icon 6-->

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="home_address hide-element">
                                                <a href="mailto:yaminalam27@gmail.com">
                                                    <i class="fa fa-fw fa-envelope"></i> yaminalam27@gmail.com
                                                </a>
                                            </div>
                                            <div class="call hide-element">
                                                <i class="fa fa-fw fa-phone"></i> +880 1751300314
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // Home Top Content-->

                        <!--Home Content-->
                        <div id="home-fullWidth" class="vegas-fullwidth hide-element">
                            <!--Navigation-->
                            <div>
                                <ul class="slider-controls">
                                    <li><a id="vegas-next" class="s-next" href="#"></a></li>
                                    <li><a id="vegas-prev" class="s-prev" href="#"></a></li>
                                </ul>
                            </div>
                            <!-- // Navigation-->

                            <div class="main-title">
                                <div class="welcome">I'm <span>Yamin</span></div>
                                <ul>
                                    <li class="sliding_title" style="font-family: Roboto-slap; font-weight: 500px;">Software Engineer</li>
                                    <li style="font-family: Roboto-slap; font-weight: 500px;">Web Developer &amp; Designer </li>
                                    <li style="font-family: Roboto-slap; font-weight: 500px;">Internet Consultant</li>
                                </ul>
                            </div>
                        </div>
                        <!--Home Content-->
                    </div>
                </div>
                <!-- // Home Page
                =============================-->

                <!-- About
                =============================-->

                <div id="about" class="wrapper-section">
                    <div class="content">
                        <div class="contentscroll-mobile">
                            <div class="content-overlay content-overlay-three-fourth content-overlay-left">
                                <!-- LEFT SIDE IMAGE -->
                                <!--Remove or Update Left image here -->

                                <!--<div class="fit-image about-image"></div>-->

                                <!-- LEFT SIDE IMAGE -->
                            </div>

                            <div class="content-overlay content-bg-color content-overlay-three-fourth content-overlay-right">
                                <div class="content-inner">
                                    <div class="contentscroll">
                                        <section>
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="heading">
                                                    <h1>About Me</h1>
                                                    <p class="lead">Experienced Web Developer with a demonstrated history of working in the financial services industry. Skilled in PHP, Laravel Framework, Bootstrap, Public Speaking, CodeIgniter, and English. Strong engineering professional with a Bachelor’s Degree focused in Software Engineering from Daffodil International University.  </p>
<!--                                                    <p class="lead"> I'm a passionate <b>Web-Designer</b> and <b>Back-End Developer</b> creating modern, responsive design and dynamic website for Web </p>-->
                                                </div>
                                                <!-- Heading -->

                                                <div class="row">
                                                    <!--Left Section-->
                                                    <div class="col-lg-6 marbot30">
                                                        <h3 class="marbot15">Web Developer and Web Designer</h3>
                                                        <p class="marbot30">I'm a passionate <b>Web-Designer</b> and <b>Back-End Developer</b> creating modern, responsive design and dynamic website for Web.</p>
                                                        <p> I have <b>2+ years</b> of experience of <b>project management</b> and <b>3+ years</b> of <b> Web Design</b> and <b>Web Development</b> experience in PHP and PHP laravel Framework. </p>
                                                    </div>
                                                    <!--Left Section-->

                                                    <!--Right Section-->
                                                    <div class="col-lg-6 marbot30">
                                                        <h3 class="marbot15">Personal Info <i class="fa fa-user heading-icons"></i></h3>
                                                        <div class="personal-info">
                                                            <!--Info 1-->
                                                            <dl class="dl-horizontal">
                                                                <dt><span class="input-box label label-default">Name </span></dt>
                                                                <dd><p>Yamin Alam Sarker</p></dd>
                                                            </dl>
                                                            <!-- // Info 1-->

                                                            <!--Info 2-->
                                                            <dl class="dl-horizontal">
                                                                <dt><span class="input-box label label-default">DOB </span></dt>
                                                                <dd><p>22-March-1994</p></dd>
                                                            </dl>
                                                            <!-- // Info 2-->

                                                            <!--Info 3-->
                                                            <dl class="dl-horizontal">
                                                                <dt><span class="input-box label label-default">Address </span></dt>
                                                                <dd><p>Mirpur-12, Dhaka</p></dd>
                                                            </dl>
                                                            <!-- // Info 3-->

                                                            <!--Info 4-->
                                                            <dl class="dl-horizontal">
                                                                <dt><span class="input-box label label-default">Phone </span></dt>
                                                                <dd><p><a href="#">+880 1751 300314</a></p></dd>
                                                            </dl>
                                                            <!-- // Info 4-->

                                                            <!--Info 5-->
                                                            <dl class="dl-horizontal">
                                                                <dt><span class="input-box label label-default">E-mail </span></dt>
                                                                <dd><p><a href="#">yaminalam27@gmail.com</a></p></dd>
                                                            </dl>
                                                            <!-- // Info 5-->
                                                        </div>
                                                    </div>
                                                    <!--Right Section-->
                                                </div>
                                                <!--Buttons-->
                                                <div class="clearfix btn-group">
                                                    <a href="#contact" class="btn btn-3 btn-3e nav-link"><i class="fa fa-user"></i>Hire Me</a>
                                                    <a href="YaminAlamSarker.pdf" class="btn btn-3 btn-3e link" target="_blank"><i class="fa fa-download down_icon"></i>Download Resume</a>                                </div>
                                                <!--Buttons-->
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // About
                =============================-->


                <!-- Skills

                =============================-->

                <!-- Skills
                =============================-->
                <div id="skills3" class="wrapper-section">
                    <div class="content">
                        <div class="contentscroll-mobile">
                            <div class="content-overlay content-overlay-three-fourth content-overlay-left">
                                <!-- LEFT SIDE IMAGE -->
                                <!--Remove or Update Left image here -->

                                <!--<div class="fit-image about-image"></div>-->

                                <!-- LEFT SIDE IMAGE -->
                            </div>

                            <div class="content-overlay content-bg-color content-overlay-three-fourth content-overlay-right">
                                <div class="content-inner">
                                    <div class="contentscroll">
                                        <section class="section-bottom50">
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="heading">
                                                    <h1 class="heading-separator-line element-from-right">My Skills </h1>
                                                    <p class="lead padding0">In my experience the following are skills key to a good UI/UX Designer.  </p>
                                                </div>
                                                <!-- Heading -->
                                                <div class="marbot50">
                                                    <div class="heading">
                                                        <h2>Programming Skills <i class="fa fa-file-code-o heading-icons"></i></h2>
                                                    </div>
                                                    <div class="clearfix">
                                                        <ul class="progress_bars list-unstyled marbot30">

                                                            <li>
                                                                <h4>PHP</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="90"></span>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <h4>Laravel Framework</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="70"></span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <h4>SQL</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="85"></span>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <h4>Bootstrap</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="80"></span>
                                                                </div>
                                                            </li>
                                                            <!--Progress 1-->
                                                            <li>
                                                                <h4>HTMl 5</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="90"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 1-->

                                                            <!--Progress 2-->
                                                            <li>
                                                                <h4>CSS</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="75"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 2-->

                                                            <!--Progress 3-->
                                                            <li>
                                                                <h4>JQUERY</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="60"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 3-->

                                                            <!--Progress 4-->

                                                            <!-- // Progress 4-->

                                                            <!--Progress 5-->
                                                            <li>
                                                                <h4>WORD PRESS</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="40"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 5-->

                                                            <li>
                                                                <h4>Python</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="35"></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="heading">
                                                        <h2>Graphic Skills <i class="fa fa-paint-brush heading-icons"></i></h2>
                                                    </div>
                                                    <div class="clearfix">
                                                        <ul class="progress_bars list-unstyled marbot30">
                                                            <!--Progress 6-->
                                                            <li>
                                                                <h4>Photoshop</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="60"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 6-->
                                                            <li>
                                                                <h4>3D Max</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="50"></span>
                                                                </div>
                                                            </li>

                                                            <!--Progress 7-->
                                                            <li>
                                                                <h4>Illustrator</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="30"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 7-->

                                                            <!--Progress 8-->
                                                            <li>
                                                                <h4>Gimp</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="40"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 8-->

                                                            <!--Progress 9-->
                                                            <li>
                                                                <h4>InkSpace</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="50"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 9-->
                                                            <li>
                                                                <h4>3D Max</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="50"></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><br>
                                                <div class="clearfix">
                                                    <div class="heading">
                                                        <h2>Office Skills <i class="fa fa-opencart heading-icons"></i></h2>
                                                    </div>
                                                    <div class="clearfix">
                                                        <ul class="progress_bars list-unstyled marbot30">
                                                            <!--Progress 6-->
                                                            <li>
                                                                <h4>MS Word</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="90"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 6-->
                                                            <li>
                                                                <h4>Libre Office</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="70"></span>
                                                                </div>
                                                            </li>

                                                            <!--Progress 7-->
                                                            <li>
                                                                <h4>Power Point</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="80"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 7-->

                                                            <!--Progress 8-->
                                                            <li>
                                                                <h4>MS Excel</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="60"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 8-->


                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="heading">
                                                        <h2>Language Skills <i class="fa fa-language heading-icons"></i></h2>
                                                    </div>
                                                    <div class="clearfix">
                                                        <ul class="progress_bars list-styled marbot30">
                                                            <!--Progress 6-->
                                                            <li>
                                                                <h4>Bangla</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="90"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 6-->
                                                            <li>
                                                                <h4>English</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="70"></span>
                                                                </div>
                                                            </li>

                                                            <!--Progress 7-->
                                                            <li>
                                                                <h4>Arabic</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="40"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 7-->

                                                            <!--Progress 8-->
                                                            <li>
                                                                <h4>Hindi</h4>
                                                                <div class="bar-wrap">
                                                                    <span data-width="60"></span>
                                                                </div>
                                                            </li>
                                                            <!-- // Progress 8-->


                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // Skills
                =============================-->

                <!-- Resume
                =============================-->
                <div id="resume" class="wrapper-section">
                    <div class="content">
                        <div class="contentscroll-mobile">
                            <div class="content-overlay content-overlay-three-fourth content-overlay-left">
                                <!-- LEFT SIDE IMAGE -->
                                <!--Remove or Update Left image here -->

                                <!--<div class="fit-image about-image"></div>-->

                                <!-- LEFT SIDE IMAGE -->
                            </div>

                            <div class="content-overlay content-bg-color content-overlay-three-fourth content-overlay-right">
                                <div class="content-inner">
                                    <div class="contentscroll">
                                        <section class="section-bottom30">
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="heading">
                                                    <h1>Resume</h1>
                                                    <p class="lead padding0">Professional web development and specializes in developing clean, effective and smart websites.
                                                    </p>
                                                </div>
                                                <!-- Heading -->

                                                <div class="clearfix marbot50">
                                                    <div class="heading">
                                                        <h2>Professional Experience</h2>
                                                    </div>
                                                    <ul class="cbp_tmtimeline">
                                                        <!--Time-Line 1-->

                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>May 17</span> <span>to Present</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-book resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Software Engineer</h5>
                                                                    <p class="small"> at DURBIN LABS LIMITED</p>
                                                                </div>
                                                                <!--<p>Specilaise in 80% in Interactive and web projects and 30% in the print projects for clients In mauris urna, cursus eget. </p>-->
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Oct 16</span> <span>Apr 17</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-book resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Web Developer</h5>
                                                                    <p class="small"> at FINANZAS CONSULTING SERVICE LIMITED</p>
                                                                </div>
                                                                <!--<p>Specilaise in 80% in Interactive and web projects and 30% in the print projects for clients In mauris urna, cursus eget. </p>-->
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 1-->

                                                        <!--Time-Line 2-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>Jan 15</span> <span>to Present</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                                                            <div class="cbp_tmlabel element-from-left">
                                                                <i class="fa fa-book resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Project Manager</h5>
                                                                    <p class="small "> at SYNET IT </p>
                                                                </div>
                                                                <ul class="list-unstyled award-list">
                                                                    <!--<li>Nunc in </li>-->
                                                                    <!--<li>Donec eget nunc pulvinar tortor sollicitudin consectetur id eget eros</li>-->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 2-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>Feb 16</span> <span>to Apr 16</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                                                            <div class="cbp_tmlabel element-from-left">
                                                                <i class="fa fa-book resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Web Designer</h5>
                                                                    <p class="small "> at DESIGN CURVE  </p>
                                                                </div>
                                                                <ul class="list-unstyled award-list">
                                                                    <!--<li>Nunc in </li>-->
                                                                    <!--<li>Donec eget nunc pulvinar tortor sollicitudin consectetur id eget eros</li>-->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>May 16</span> <span>to Jun 16</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                                                            <div class="cbp_tmlabel element-from-left">
                                                                <i class="fa fa-book resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Web Designer</h5>
                                                                    <p class="small "> at ORIENTAL COUTURE LIMITED</p>
                                                                </div>
                                                                <ul class="list-unstyled award-list">
                                                                    <!--<li>Nunc in </li>-->
                                                                    <!--<li>Donec eget nunc pulvinar tortor sollicitudin consectetur id eget eros</li>-->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="clearfix">
                                                    <div class="heading">
                                                        <h2>Education & Certifications</h2>
                                                    </div>
                                                    <ul class="cbp_tmtimeline">
                                                        <!--Time-Line 3-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Jan 13</span> <span>to Present</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>B.Sc in Software Engineering</h5>
                                                                    <p class="small "> at DAFFODIL INTERNATIONAL UNIVERSITY </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 3-->

                                                        <!--Time-Line 4-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>2009</span> <span>2011</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Higher Secondary School Certificate</h5>
                                                                    <p class="small"> at KARENT HAT COLLEGE, DINAJPUR</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 4-->

                                                        <!--Time-Line 5-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>2003</span> <span>2009</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Secondary School Certificate</h5>
                                                                    <p class="small text-uppercase"> at DARUL FALAH FAZIL MADRASHA, DINAJPUR
                                                                    </p>
                                                                </div>
                                                                <!--<p>We're done with you. Go back to the golf course and work on your putz.</p>-->
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 5-->
                                                    </ul>
                                                </div>

                                                <div class="clearfix">
                                                    <div class="heading">
                                                        <h2>Training Experience </h2>
                                                    </div>
                                                    <ul class="cbp_tmtimeline">
                                                        <!--Time-Line 3-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Apr 15</span> <span>Jul 15</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Basic PHP Course</h5>
                                                                    <p class="small text-uppercase"> at Basis Institute of Technology & Management</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 3-->

                                                        <!--Time-Line 4-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>Jul 15</span> <span>Aug 15</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Advanced PHP Course</h5>
                                                                    <p class="small text-uppercase"> at Daffodil International University</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 4-->

                                                        <!--Time-Line 5-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>Dec 14</span> <span>Feb 15</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Ethical Hacking Training</h5>
                                                                    <p class="small text-uppercase"> at Daffodil International University
                                                                    </p>
                                                                </div>
                                                                <!--<p>We're done with you. Go back to the golf course and work on your putz.</p>-->
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>Apr 15</span> <span>Apr 15</span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Robot Control Training Training</h5>
                                                                    <p class="small text-uppercase"> at Daffodil International University
                                                                    </p>
                                                                </div>
                                                                <!--<p>We're done with you. Go back to the golf course and work on your putz.</p>-->
                                                            </div>
                                                        </li>
                                                        <!-- // Time-Line 5-->
                                                    </ul>
                                                </div>

                                                <div class="clearfix">
                                                    <div class="heading">
                                                        <h2>Participation Experience </h2>
                                                    </div>
                                                    <ul class="cbp_tmtimeline">
                                                        <!--Time-Line 3-->
                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Apr 2016</span> <span></span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>National Hackathon</h5>
                                                                    <p class="small">Role: <b>Team Leader</b></p>
                                                                    <p class="small text-uppercase">Organized By: <b>ICT Division, Bangladesh</b> </p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Dec 2014</span> <span></span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>National Hackathon</h5>
                                                                    <p class="small">Role: <b>Software Developer</b></p>
                                                                    <p class="small text-uppercase">Organized By: <b>ICT Division, Bangladesh</b> </p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Jun 2015</span> <span></span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>ICT-EXPO</h5>
                                                                    <p class="small">Role: <b>Project Manager</b></p>
                                                                    <p class="small text-uppercase">Organized By: <b>ICT Division, Bangladesh</b> </p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Dec 2014</span> <span></span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>Project Fair</h5>
                                                                    <p class="small">Role: <b>Software Developer</b></p>
                                                                    <p class="small text-uppercase">Organized By: <b>Human Resource Development Institute (DIU)</b> </p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Sep 2014</span> <span></span></time>
                                                            <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                                                            <div class="cbp_tmlabel element-from-right">
                                                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                                                <div class="clearfix marbot30">
                                                                    <h5>E-Commerce Fair</h5>
                                                                    <p class="small">Role: <b>Volunteer</b></p>
                                                                    <p class="small text-uppercase">Organized By: <b>Ministry of Information & Communication Technology</b> </p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // Resume
                =============================-->

                <!-- Portfolio
                =============================-->

                <div id="portfolio" class="wrapper-section">
                    <div class="content">
                        <div class="contentscroll-mobile">
                            <div class="content-overlay content-bg-color content-overlay-fullwidth">
                                <div class="content-inner">
                                    <div class="contentscroll">
                                        <section class="clearfix section-bottom0">
                                            <div class="container">
                                                <div class="heading text-center padlefrig10">
                                                    <h1 class="heading-separator element-from-right"> My Work</h1>
                                                </div>
                                                <!-- Portfolio Filters -->
                                                <ul class="filters">
                                                    <li class="filter-01 active" data-filter="all">View All</li>
                                                    <li class="filter-01" data-filter=".design">Design</li>
                                                    <li class="filter-01" data-filter=".development">Development</li>
                                                    <li class="filter-01" data-filter=".contribute">contribute</li>
                                                </ul>
                                                <!-- End Portfolio Filters -->
                                            </div>

                                            <!-- Portfolio Grid -->
                                            <ul id="filter-01" class="list-unstyled portfolio-grid portfolio-grid-filter">


                                                <li class="mix all design mix_all" >
                                                    <img src="assets/img/portfulio/spade.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/spade.png" title="Spade Digital" data-rel="prettyPhoto[gallery1]" >
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://spadedigital.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <li class="mix all design  mix_all" >
                                                    <img src="assets/img/portfulio/kn.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/kn.png" title="KN-Harbour Limited" data-rel="prettyPhoto[gallery1]" >
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://kn-harbour.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                                <li class="mix all design  mix_all" >
                                                    <img src="assets/img/portfulio/hsl.jpg" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/hsl.jpg" title="HSL BD" data-rel="prettyPhoto[gallery1]" >
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://hsl-bd.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                                <li class="mix all design  mix_all" >
                                                    <img src="assets/img/portfulio/aryan.jpg" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/aryan.jpg" title="Aryan Bangladesh Limited" data-rel="prettyPhoto[gallery1]" >
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://aryanbd.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                                <li class="mix all design mix_all" >
                                                    <img src="assets/img/portfulio/adroit.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/Screenshot from 2017-03-15 17-57-43.png" title="Adroit International School" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://adroitschoolbd.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                                <!-- Portfolio Item 1 -->
                                                <li class="mix all design mix_all" >
                                                    <img src="assets/img/portfulio/design.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/design.png" title="design-curve.com" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://design-curve.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 1 -->

                                                <!-- Portfolio Item 2 -->
                                                <li class="mix all design mix_all" >
                                                    <img src="assets/img/portfulio/pecpte.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/pecpte.png" title=" Pecpte Bangladesh" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://pecpte.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 2 -->

                                                <!-- Portfolio Item 3 -->
                                                <li class="mix all design  mix_all">
                                                    <img src="assets/img/portfulio/oriental.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/oriental.png" title="Oriental Couture Limited" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                       <div class="port-caption"><a href="http://oriental-couture.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 3 -->

                                                <!-- Portfolio Item 4 -->
                                                <li class="mix all design design mix_all">
                                                    <img src="assets/img/portfulio/amaj.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/amaj.png" title="Amaj Uddin Portfolio" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://amajuddin.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                                <li class="mix all design mix_all">
                                                    <img src="assets/img/portfulio/nasim.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/nasim.png" title="Md. Nasim Info" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="http://mdnasim.info/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 4 -->

                                                <!-- Portfolio Item 5 -->
                                                <li class="mix all development contribute mix_all">
                                                    <img src="assets/img/portfulio/b.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/b.png" title="Boro Hor School & College" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="#" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 5 -->

                                                <!-- Portfolio Item 6 -->
                                                <li class="mix all development contribute mix_all">
                                                    <img src="assets/img/portfulio/bir.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/bir.png" title="Birgaon Madrasha" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                       <div class="port-caption"><a href="#" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 6 -->

                                                <!-- Portfolio Item 7 -->
                                                <li class="mix all development contribute mix_all">
                                                    <img src="assets/img/portfulio/dfam.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/dfam.png" title="Darul Falah Fazil Madrasha" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="#" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 7 -->

                                                <!-- Portfolio Item 8 -->
                                                <li class="mix all development contribute mix_all">
                                                    <img src="assets/img/portfulio/khalshi.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/khalshi.png" title="Khalshi Adarsha High School" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="#" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>
                                                <!-- // Portfolio Item 8 -->
                                                <li class="mix all development contribute mix_all">
                                                    <img src="assets/img/portfulio/mannan.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/mannan.png" title="Abdul Mannan Bhuiyan College" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                       <div class="port-caption"><a href="http://abdulmannanbhuiyancollege.edu.bd" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                                <li class="mix all development contribute mix_all">
                                                    <img src="assets/img/portfulio/tarash.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/tarash.png" title="Tarash Women College" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                        <div class="port-caption"><a href="#" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                                <li class="mix all design mix_all">
                                                    <img src="assets/img/portfulio/agro.png" class="img-responsive" alt="" />
                                                    <a href="assets/img/portfulio/agro.png" title="Agro Sky Lab" data-rel="prettyPhoto[gallery1]" class="viewDetail lightbox info">
                                                        <div class="project-overlay"></div>
                                                       <div class="port-caption"><a href="http://www.agroskylab.com/" target="_blank" style="color: #fff; font-family: Roboto;">Visit Site ->></a></div>
                                                    </a>
                                                </li>

                                            </ul>
                                            <!-- End Portfolio Grid -->

                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Pages
                =============================-->

                <!-- Team
                =============================-->
                <div id="team" class="wrapper-section">
                    <div class="content">
                        <div class="contentscroll-mobile">
                            <div class="content-overlay content-overlay-three-fourth content-overlay-left">
                                <!-- LEFT SIDE IMAGE -->
                                <!--Remove or Update Left image here -->

                                <!--<div class="fit-image about-image"></div>-->

                                <!-- LEFT SIDE IMAGE -->
                            </div>

                            <div class="content-overlay content-bg-color content-overlay-three-fourth content-overlay-right">
                                <div class="content-inner">
                                    <div class="contentscroll">
                                        <section class="section-bottom30">
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="heading">
                                                    <h1 class="heading-separator-line element-from-right">My Team</h1>
                                                    <p class="lead padding0">My group member, who are engaged with me since 2013 in IT related work</p>
                                                </div>
                                                <!-- Heading -->

                                                <div class="row">
                                                    <!--Team 1-->
                                                    <div class="team clearfix marbot30">
                                                        <div class="col-lg-3">
                                                            <div class="image-hover-icons img-circle center-block marbot15 transition5s">
                                                                <img src="assets/img/farhan.jpg" width="330" height="330" class="img-responsive" alt="">
                                                                <div class="overlay-icons transition5s">
                                                                    <a href="https://www.facebook.com/farhanswe?fref=ts" target="_blank"><i class="fa fa-facebook transition5s"></i></a>
                                                                    <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter transition5s"></i></a>
                                                                    <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram transition5s"></i></a>                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="panel panel-body">
                                                                <h3 class="marbot0">Farhan Tanvir Koushik</h3>
                                                                <p class="lead marbot15"><small>Senior Programmer </small></p>
<!--                                                                <p>
                                                                    I am a GUI designer, specializing in user experience for web-based applications and websites with <span class="bold">11 years of experience </span>. voluptate velit esse cillum dolore eu fugiat.
                                                                </p>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Team 1-->

                                                    <!--Team 2-->
                                                    <div class="team clearfix marbot30">
                                                        <div class="col-lg-3">
                                                            <div class="image-hover-icons img-circle center-block marbot15 transition5s">
                                                                <img src="assets/img/nasim.jpg" width="330" height="330" class="img-responsive" alt="">
                                                                <div class="overlay-icons transition5s">
                                                                    <a href="https://www.facebook.com/mdnasim.info?fref=ts" target="_blank"><i class="fa fa-facebook transition5s"></i></a>
                                                                    <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter transition5s"></i></a>
                                                                    <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram transition5s"></i></a>                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="panel panel-body">
                                                                <h3 class="marbot0">Md Nasim</h3>
                                                                <p class="lead marbot15"><small> Software Tester </small></p>
                                                                           </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Team 2-->

                                                    <!--Team 3-->
                                                    <div class="team clearfix marbot30">
                                                        <div class="col-lg-3">
                                                            <div class="image-hover-icons img-circle center-block marbot15 transition5s">
                                                                <img src="assets/img/shakib.jpg" width="330" height="330" class="img-responsive" alt="">
                                                                <div class="overlay-icons transition5s">
                                                                    <a href="https://www.facebook.com/SHUVO.DUNIA?fref=ts" target="_blank"><i class="fa fa-facebook transition5s"></i></a>
                                                                    <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter transition5s"></i></a>
                                                                    <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram transition5s"></i></a>                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="panel panel-body">
                                                                <h3 class="marbot0">Nazmus Shakib</h3>
                                                                <p class="lead marbot15"><small> Programmer </small></h4>
<!--                                                                <p>
                                                                    Duis aute irure dolor in reprehenderit in <span class="bold">WWW Awarded WP Developer </span>esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.
                                                                </p>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Team 3-->

                                                    <!--Team 4-->
                                                    <div class="team clearfix marbot30">
                                                        <div class="col-lg-3">
                                                            <div class="image-hover-icons img-circle center-block marbot15 transition5s">
                                                                <img src="assets/img/kamrul.jpg" width="330" height="330" class="img-responsive" alt="">
                                                                <div class="overlay-icons transition5s">
                                                                    <a href="https://www.facebook.com/profile.php?id=100000101024472&fref=ts" target="_blank"><i class="fa fa-facebook transition5s"></i></a>
                                                                    <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter transition5s"></i></a>
                                                                    <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram transition5s"></i></a>                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="panel panel-body">
                                                                <h3 class="marbot0">Kamrul Islam</h3>
                                                                <p class="lead marbot15"><small> Seo Expart </small></h4>
<!--                                                                <p>
                                                                    Duis aute irure dolor in <span class="bold">reprehenderit in voluptate velit</span> esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.
                                                                </p>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Team 4-->
                                                </div>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // Team
                =============================-->

                <!-- // Pages
                =============================-->

                <!-- Contact
                =============================-->
                <div id="contact" class="wrapper-section">
                    <div class="content">
                        <div class="contentscroll-mobile">
                            <!--                            <div class="content-overlay content-overlay-halfwidth content-overlay-left">
                                                            <div id="map_canvas" class="fullBg fit-image"></div>
                                                        </div> -->

                            <div class="content-overlay content-bg-color content-overlay-three-fourth content-overlay-right">
                                <div class="content-inner content-inner-padtop0">
                                    <div class="contentscroll">
                                        <section>
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="heading">
                                                    <h1 class="heading-separator-line element-from-right">Contact Us</h1>
                                                    <p class="lead padding0">For general questions you can call or mail me. If you’re considering hiring me, click button below.<span class="fw-bold"> Thank you! </span>  </p>
                                                </div>
                                                <!-- Heading -->

                                                <div class="clearfix marbot30">
                                                    <ul class="list-unstyled address">
                                                        <li class="contact-map-marker">
                                                            #60, Dolphin Goli,
                                                            Kalabagan, Dhaka-1205
                                                        </li>
                                                        <li class="contact-phone">+ 880 1751300314</li>
                                                        <li class="contact-envelope"><a href="mailto:yaminalam27@gmail.com.com">yaminalam27@gmail.com</a></li>
                                                    </ul>
                                                </div>

                                                <div class="clearfix marbot30">
                                                    <div class="header_icons accura-header-block accura-hidden-2xs social_top">
                                                        <ul class="list-unstyled list-inline accura-social-icons accura-stacked accura-jump accura-bordered accura-md accura-colored-bg clearFix">
                                                            <!--Social Icon 1-->
                                                            <li>
                                                                <a href="https://www.facebook.com/yaminalam.sarker" target="_blank" class="accura-social-icon-facebook circle-dark">
                                                                    <i class="fa fa-facebook"></i>                                        </a>                                    </li>
                                                            <!-- // Social Icon 1-->

                                                            <!--Social Icon 2-->
                                                            <li>
                                                                <a href="https://twitter.com/yaminalam465" target="_blank" class="accura-social-icon-twitter circle-dark">
                                                                    <i class="fa fa-twitter"></i>                                        </a>                                    </li>
                                                            <!-- // Social Icon 2-->

                                                            <!--Social Icon 3-->
                                                            <li>
                                                                <a href="https://plus.google.com/u/0/+Yaminalam" target="_blank" class="accura-social-icon-gplus circle-dark">
                                                                    <i class="fa fa-google-plus"></i>                                        </a>                                    </li>
                                                            <!-- // Social Icon 3-->

                                                            <!--Social Icon4-->
                                                            <li>
                                                                <a href="https://www.youtube.com/channel/UCGxncXf9ussq2SGbHLgebIQ" target="_blank" class="accura-social-icon-youtube circle-dark">
                                                                    <i class="fa fa-youtube"></i>                                        </a>                                    </li>
                                                            <!-- // Social Icon 4-->

                                                            <!--Social Icon 5-->
                                                            <li>
                                                                <a href="https://www.linkedin.com/in/yamin-alam-sarker-57a2178a?trk=nav_responsive_tab_profile_pic" target="_blank" class="accura-social-icon-linkedin circle-dark">
                                                                    <i class="fa fa-linkedin"></i>                                        </a>                                    </li>
                                                            <!-- // Social Icon 5-->
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--Button-->
                                                <a class="btn btn-3 btn-3e nav-link" href="#contactform">Feel Free to Message</a>
                                                <!-- // Button-->

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // Contact
                =============================-->

                <!-- Contact Form
                =============================-->
                <div id="contactform" class="wrapper-section">
                    <div class="content">
                        <div class="contentscroll-mobile">
                            <div class="content-overlay content-overlay-halfwidth content-overlay-left">
                                <!-- LEFT SIDE IMAGE -->
                                <!--Remove or Update Left image here -->

                                <!--<div class="fit-image about-image"></div>-->

                                <!-- LEFT SIDE IMAGE -->
                            </div>

                            <div class="content-overlay content-bg-color content-overlay-three-fourth content-overlay-right">
                                <div class="content-inner">
                                    <div class="contentscroll">
                                        <section>
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="heading">
                                                    <h1 class="heading-separator-line element-from-right">Request A Quote</h1>
                                                    <p class="lead padding0">If you’re considering hiring me or would like a free project price quote, please fill the form below Thank you!  </p>
                                                </div>
                                                <!-- Heading -->

                                                <div id="contactforms">
                                                    <!--Form Starts-->
                                                    <form id="contact_form" class="cont_form " action="#" method="post">
                                                        <div class="clearfix cont_form">
                                                            <h3 class="marbot20">Enter Your Contact Details</h3>
                                                            <!--Input 1-->
                                                            <input type="text" name="name" required placeholder="* Name : "
                                                                   onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Name :'" />
                                                            <!--Input 1-->

                                                            <!--Input 2-->
                                                            <input type="text" name="email"  required
                                                                   placeholder="* Email : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Email :'" />
                                                            <!-- // Input 2-->

                                                            <!--Input 3-->
<!--                                                            <input type="text" name="phone" class="validate['required','phone']  textbox1"
                                                                   placeholder="* Phone : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Phone :'" />
                                                             // Input 3-->

                                                            <!--Input 4-->
                                                            <textarea name="message" required
                                                                      placeholder="* Message : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Message :'"></textarea>
                                                            <!-- // Input 4-->

                                                            <!--Button-->
                                                            <button id="" type="submit" name="send" class="btn btn-3 btn-3e" value="">Submit</button>
                                                            <!-- // Button-->
                                                        </div>
                                                    </form>
                                                    <!--Form Ends-->
                                                </div>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // Contact Form
                =============================-->


                <!-- Footer
                =============================-->

                <div id="footer" class="footer">
                    <div class="copyright">Copyrights &copy; <span>Yamin Alam</span> 2016.</div>
                </div>

                <!-- // Footer Ends
                =============================-->



                <!--Special Menu
                =============================-->
                <div id="specialmenu" class="spmenu-bottom-right">
                    <div class="spcontainer">

                        <div class="spmenu-tags spmenu-tags1">
                            <a href="#contactform"  class="spmenu nav-link hide-element">
                                <span class="center-spmenu">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="sptext"><small>available'</small>freelance</span>                
                                </span>
                            </a>
                        </div>

<!--                        <div class="spmenu-tags spmenu-tags2">
                            <a href="http://vimeo.com/85330977" data-remote="http://player.vimeo.com/video/85330977" data-toggle="lightbox" data-width="800" class="spmenu hide-element">
                                <span class="center-spmenu">
                                    <i class="fa fa-video-camera"></i>
                                    <span class="sptext">Videos</span>
                                </span>
                            </a>
                        </div>-->

                        <div class="spmenu-tags spmenu-tags3">
                            <a href="YaminAlamSarker.pdf"  target="_blank" class="spmenu link hide-element">
                                <span class="center-spmenu">
                                    <i class="fa fa-download"></i>
                                    <span class="sptext"><small>Resume</small>Download</span>                
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- // Special Menu
                =============================-->


            </div>
        </div>
        <!-- // Wrapper =============================-->


        <!--java script-->

        <!-- Preloader Starts -->
        <script type="text/javascript" src="assets/js/jpreloader.min.js"></script>
        <!-- Preloader Starts -->

        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="assets/js/appear.js"></script>


        <!-- Slick Navigation -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.min.js"></script>
        <!-- Slick Navigation -->

        <!-- Nice Scroll-->
        <script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>


        <!-- include retina js -->
        <script type="text/javascript" src="assets/js/retina-1.3.0.min.js"></script>
        <!-- include retina js -->

        <!-- Bootstrap Light Box-->
        <!--<script type="text/javascript" src="assets/js/ekko-lightbox.min.js"></script>-->
        <!-- Bootstrap Light Box-->

        <!-- Vegas Slider Starts-->
        <script type="text/javascript" src="assets/js/jquery.vegas.js"></script>
        <!-- Vegas Slider Ends-->

        <!-- Cycle Slider Sldier -->
        <script type="text/javascript" src="assets/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="assets/js/jquery.cycle2.caption2.js"></script>
        <!-- Cycle Slider Sldier Ends-->

        <!--SuperSized Gallery-->
        <script type="text/javascript" src="assets/js/supersized.3.2.7.min.js"></script>
        <script type="text/javascript" src="assets/js/supersized.shutter.min.js"></script>
        <!--SuperSized Gallery End-->

        <!-- Filter Gallery And PrettyPhoto-->
        <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
        <!-- Filter Gallery And PrettyPhoto End-->

        <!-- Skills Progress Bar Starts-->
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <!-- Skills Progress Bar Ends-->


        <!-- Fit Text Starts-->
        <script type="text/javascript" src="assets/js/jquery.fittext.js"></script>
        <script type="text/javascript">
                                                                          $("#home_title").fitText(1.1, {minFontSize: '24px', maxFontSize: '75px'});
        </script>
        <!-- Fit Text Ends-->

        <!-- Place Holder Scripts Starts-->
        <script type="text/javascript" src="assets/js/jquery.placeholder.min.js"></script>
        <!-- Place Holder Scripts Ends-->

        <!-- Jquery Transit Starts-->
        <script type="text/javascript" src="assets/js/jquery.transit.js"></script>
        <!-- Jquery Transit  Starts-->

        <!-- Custom Scripts Starts-->
        <script type="text/javascript" src="assets/js/custom-general.js"></script>
        <script type="text/javascript" src="assets/js/custom-google-map.js"></script>
        <script type="text/javascript" src="assets/js/custom-vegas-slider.js"></script>
        <!-- Custom Scripts Ends-->




        <!--IE9 Hack Code For Gradient Color-->

        <!--[if gte IE 9]>
          <style type="text/css">
            .pattern_bg {
               filter: none;
            }
          </style>
        <![endif]-->

    </body>

</html>