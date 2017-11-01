<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700,900|Playfair+Display:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/style.css" type="text/css" />
    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/css/dark.css" type="text/css" />

    <!-- Resume Specific Stylesheet -->
    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/demos/resume/resume.css" type="text/css" />
    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/demos/resume/css/fonts.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?= Url::base() ?>/themes/canvas/css/colors.php?color=7B6ED6" type="text/css" />

    <!-- Document Title
    ============================================= -->
    <title>Resume | Canvas</title>

    <style>
        @media (max-width: 767px) {
            #slider:not(.swiper_wrapper) .slider-caption,
            .slider-caption p,
            .slider-caption .button { display: block !important; }
        }
    </style>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header sticky-transparent static-sticky">
            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo font-secondary ls3" style="line-height: 90px;">canvas</a>
                        <a href="index.html" class="retina-logo font-secondary ls3" style="line-height: 90px;">canvas</a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="0">
                            <li class="current"><a href="#" data-href="#wrapper"><i class="icon-line2-home"></i><div>Intro</div></a></li>
                            <li><a href="#" data-href="#section-skills"><i class="icon-line2-star"></i><div>Skills</div></a></li>
                            <li><a href="#" data-href="#section-about"><i class="icon-line2-user"></i><div>About</div></a></li>
                            <li><a href="#" data-href="#section-works"><i class="icon-line2-grid"></i><div>Portfolio</div></a></li>
                            <li><a href="#" data-href="#section-articles"><i class="icon-line2-pencil"></i><div>Articles</div></a></li>
                            <li><a href="#" data-href="#footer"><i class="icon-line2-envelope"></i><div>Contact</div></a></li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

        <section id="slider" class="full-screen force-full-screen clearfix">
            <div class="full-screen force-full-screen blurred-img" style="position: fixed; width: 100%; background: #FFF url('<?= Url::base() ?>/themes/canvas/demos/resume/images/hero-image/1.jpg') no-repeat top center; background-size: cover; background-attachment: fixed;">

                <div class="container clearfix">
                    <div class="slider-caption dark slider-caption-right" style="width: 100%; max-width: 430px;">
                        <h2 class="font-primary ls5" data-animate="fadeIn" style="font-weight: 900; font-size: 80px">Pliff Jenkins</h2>
                        <p class="t300 ls1" style="font-size: 24px; color: #AAA;" data-animate="fadeIn" data-delay="400">Simple Design Methodology.<br>Melbourn, Australia.</p>
                        <a class="font-primary noborder ls1 topmargin-sm inline-block more-link dark" style="font-style: normal;" data-animate="fadeIn" data-delay="800" data-scrollto="#section-works" data-offset="0" href="#"><u>My Works</u> &rarr;</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Content
        ============================================= -->
        <section id="content" class="nobg">

            <div class="content-wrap nobottompadding nobg">

                <div id="section-skills" class="section nomargin page-section dark nobg clearfix" style="padding-bottom: 50px">
                    <div class="container clearfix">
                        <h2 class="font-secondary center bottommargin-lg" style="font-size: 38px; font-weight: 700;">My Experiments.</h2>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-html5" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">HTML5</h3>
                                <p style="color:#AAA;">Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-code" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">Javascripts</h3>
                                <p style="color:#AAA;">Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-picture" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">Photoshop</h3>
                                <p style="color:#AAA;">Optimized code that are completely customizable and deliver unmatched fast performance.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-wordpress" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">Wordpress</h3>
                                <p style="color:#AAA;">Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-layers" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">Joomla</h3>
                                <p style="color:#AAA;">Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line2-pencil" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">Illustrator</h3>
                                <p style="color:#AAA;">Complete control on each &amp; every element that provides endless customization possibilities.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-css3" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">CSS3</h3>
                                <p style="color:#AAA;">Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-subscript" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">PHP</h3>
                                <p style="color:#AAA;">Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-search2" style="color: #DDD"></i></a>
                                </div>
                                <h3 class="t400 ls2" style="color: #FFF">Seo</h3>
                                <p style="color:#AAA;">We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="section-about" class="section page-section nomargin clearfix" style="background: #EEE url('<?= Url::base() ?>/themes/demos/resume/images/sections/1.jpg') no-repeat center center; background-size: cover; padding: 100px 0">
                    <div class="container clearfix">
                        <div class="row clearfix">
                            <div class="col-sm-5 col-sm-offset-7 clearfix">
                                <div class="heading-block">
                                    <h2 class="font-secondary nott ls0" style="font-size: 36px; font-weight: 700;">About Me.</h2>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium reprehenderit inventore beatae velit quae labore sunt in possimus. Mollitia, culpa?</span>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="notopborder"><strong>Name:</strong></td>
                                            <td class="notopborder">SemiColonWeb</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Gender:</strong></td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td>noreply@canvas.com</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone:</strong></td>
                                            <td>+91 111 222 33</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Website:</strong></td>
                                            <td>semicolonweb.com</td>
                                        </tr>
                                        <tr>
                                            <td><strong>DOB:</strong></td>
                                            <td>6th September 1986</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Nationality:</strong></td>
                                            <td>Australian</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="button button-large button-border button-black button-dark noleftmargin"><i class="icon-line-cloud-download"></i> Download CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <div class="video-overlay hidden-lg hidden-md" style="background: rgba(255,255,255,0.9);"></div>
                    </div>
                </div>

                <div class="section nomargin skill-area bgcolor dark clearfix" style="padding: 80px 0;">
                    <div class="container clearfix">
                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-6">
                                <h4>Education</h4>
                                <div class="skill-info">
                                    <span>
                                        School of Graphic Design<br>
                                        Bachelor’s degree<br>
                                        2010 – 2013
                                    </span>
                                    <span>
                                        Forest Lake High School<br>
                                        Degree in Computer Science<br>
                                        2007 – 2010
                                    </span>
                                    <span>
                                        Desert Sands Conservatory<br>
                                        Arts School<br>
                                        2007
                                    </span>
                                </div>
                            </div>

                            <div class="bottommargin hidden-lg hidden-md hidden-sm"></div>

                            <div class="col-md-4 col-sm-6">
                                <h4>Experience</h4>
                                <div class="skill-info">
                                    <span>
                                        2015 - Today<br>
                                        Website Development
                                    </span>
                                    <span>
                                        2015 - 2012<br>
                                        Senior Frontend Developer<br>
                                        Full Time Job
                                    </span>
                                    <span>
                                        2015 - 2012<br>
                                        Graphic Design Company<br>
                                    </span>
                                </div>
                            </div>

                            <div class="bottommargin hidden-lg hidden-md clear"></div>

                            <div class="col-md-4 col-12">
                                <h4>Skills</h4>
                                <ul class="skills">
                                    <li data-percent="80">
                                        <span>Wordpress</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="60">
                                        <span>CSS3</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="90">
                                        <span>HTML5</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="70">
                                        <span>jQuery</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="52">
                                        <span>Php</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="52" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="section-works" class="section page-section nomargin clearfix" style="background: #EEE url('<?= Url::base() ?>/themes/demos/resume/images/sections/2.jpg') no-repeat center right; background-size: cover; padding: 100px 0">
                    <div class="container clearfix">
                        <div class="row clearfix">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="heading-block">
                                    <h2 class="font-secondary nott ls0" style="font-size: 38px; font-weight: 700;">Latest Works.</h2>
                                    <span class="notopmargin">Lorem ipsum dolor sit amet.</span>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <ul class="niche-demos-lists lists-1">
                                            <li class="notopmargin"><a href="demo-restaurant.html"><img src="images/intro/niche/restaurant.jpg" alt="">Restaurant Demo</a></li>
                                            <li><a href="demo-photography.html"><img src="images/intro/niche/photography.jpg" alt="">Photography</a></li>
                                            <li><a href="demo-medical.html"><img src="images/intro/niche/medical.jpg" alt="">Medical</a></li>
                                            <li><a href="demo-spa.html"><img src="images/intro/niche/spa.jpg" alt="">Spa</a></li>
                                            <li><a href="demo-coffee.html"><img src="images/intro/niche/coffee.jpg" alt="">Coffee</a></li>
                                            <li><a href="demo-interior-design.html"><img src="images/intro/niche/interior-design.jpg" alt="">Interior Design</a></li>
                                            <li><a href="demo-barber.html"><img src="images/intro/niche/barber.jpg" alt="">Barber</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="niche-demos-lists lists-2">
                                            <li><a href="demo-travel.html"><img src="images/intro/niche/travel.jpg" alt="">Travel</a></li>
                                            <li><a href="demo-media-agency.html"><img src="images/intro/niche/media-agency.jpg" alt="">Media Agency</a></li>
                                            <li><a href="demo-construction.html"><img src="images/intro/niche/construction.jpg" alt="">Construction</a></li>
                                            <li><a href="demo-writer.html"><img src="images/intro/niche/writer.jpg" alt="">Writer</a></li>
                                            <li><a href="demo-real-estate.html"><img src="images/intro/niche/real-estate/1.jpg" alt="">Real Estate</a></li>
                                            <li><a href="demo-business.html"><img src="images/intro/niche/business.jpg" alt="">Business</a></li>
                                            <li><a href="demo-app-landing.html"><img src="images/intro/niche/app-landing.jpg" alt="">App Landing</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="button button-large button-border button-black button-dark nomargin"><i class="icon-line-stack-2"></i> See More Works</a>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <div class="video-overlay hidden-lg hidden-md" style="background: rgba(255,255,255,0.9);"></div>
                    </div>
                </div>

                <div id="section-articles" class="section page-section nomargin bgcolor clearfix" style="padding: 100px 0">
                    <div class="container clearfix">

                        <div class="dark">
                            <div class="heading-block">
                                <h2 class="font-secondary nott ls0" style="font-size: 38px; font-weight: 700;">Latest Articles.</h2>
                                <span class="notopmargin">Lorem ipsum dolor sit amet.</span>
                            </div>
                        </div>

                        <div id="posts" class="post-grid grid-3 clearfix">

                            <div class="entry nobottomborder nobottompadding clearfix" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.09);">
                                <div class="entry-image nobottommargin">
                                    <a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?= Url::base() ?>/themes/demos/resume/images/blog/1.jpg" alt="Standard Post with Image" style="border-top-left-radius: 4px; border-top-right-radius: 4px;"></a>
                                </div>
                                <div style="background-color: #FFF; padding: 30px;border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
                                    <div class="entry-meta nomargin clearfix">
                                        <a href="#" class="text-muted">March 25th, 2016</a>
                                    </div>
                                    <div class="entry-title clearfix" style="margin-top: 8px;">
                                        <h2><a href="#" style="">You can now listen to headphones.</a></h2>
                                    </div>
                                    <div class="entry-content clearfix" style="margin-top: 13px;">
                                        <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="entry nobottomborder nobottompadding clearfix" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.09);">
                                <div class="entry-image nobottommargin">
                                    <a href="<?= Url::base() ?>/themes/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="demos/resume/images/blog/2.jpg" alt="Standard Post with Image" style="border-top-left-radius: 4px; border-top-right-radius: 4px;"></a>
                                </div>
                                <div style="background-color: #FFF; padding: 30px;border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
                                    <div class="entry-meta nomargin clearfix">
                                        <a href="#" class="text-muted">March 25th, 2016</a>
                                    </div>
                                    <div class="entry-title clearfix" style="margin-top: 8px;">
                                        <h2><a href="#">Collaboratively monetize multifunctional.</a></h2>
                                    </div>
                                    <div class="entry-content clearfix" style="margin-top: 13px;">
                                        <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="entry nobottomborder nobottompadding clearfix" style="box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.09);">
                                <div class="entry-image nobottommargin">
                                    <a href="<?= Url::base() ?>/themes/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="demos/resume/images/blog/3.jpg" alt="Standard Post with Image" style="border-top-left-radius: 4px; border-top-right-radius: 4px;"></a>
                                </div>
                                <div style="background-color: #FFF; padding: 30px;border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
                                    <div class="entry-meta nomargin clearfix">
                                        <a href="#" class="text-muted">March 25th, 2016</a>
                                    </div>
                                    <div class="entry-title clearfix" style="margin-top: 8px;">
                                        <h2><a href="#">Professionally disinter-mediate excellent.</a></h2>
                                    </div>
                                    <div class="entry-content clearfix" style="margin-top: 13px;">
                                        <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="page-section dark noborder nopadding clearfix" style="background-color: #1C1C1C;">

            <div class="container clearfix">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix" style="padding: 80px 0">
                    <div class="col_one_fourth">
                        <div class="footer-logo"><span class="t400 color ls1" style="font-size: 22px; ">SemiColonWeb.</span><br><small class="ls3 uppercase" style="color: rgba(255,255,255,0.2);">&copy; 2017 Reserved.</small></div>
                    </div>
                    <div class="col_three_fourth col_last">
                        <div class="col_one_third">
                            <div class="widget widget_links clearfix">
                                <h4>Contact Us</h4>
                                <div class="footer-content">
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third">
                            <div class="widget clearfix">
                                <h4>Location</h4>
                                <div class="footer-content">
                                    <address>
                                        <strong>Headquarters:</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third col_last">
                            <div class="widget widget_links clearfix">
                                <h4>Social</h4>
                                <a href="#" class="social-icon nobg si-small si-light si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon nobg si-small si-light si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon nobg si-small si-light si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="#" class="social-icon nobg si-small si-light si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="#" class="social-icon nobg si-small si-light si-dribbble">
                                    <i class="icon-dribbble"></i>
                                    <i class="icon-dribbble"></i>
                                </a>

                                <a href="#" class="social-icon nobg si-small si-light si-vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights" style="background-color: #111;">

                <div class="container clearfix">

                    <div class="col_full center nobottommargin">
                        Copyrights &copy; 2017 All Rights Reserved by Canvas Inc.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?= Url::base() ?>themes/canvas/js/jquery.js"></script>
    <script type="text/javascript" src="<?= Url::base() ?>themes/canvas/js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?= Url::base() ?>themes/canvas/js/functions.js"></script>

    <script>
        $(window).scroll(function() {
            var pixs = $(window).scrollTop(),
            pixs = pixs / 70;
            $(".blurred-img").css({"-webkit-filter": "blur("+pixs+"px)","filter": "blur("+pixs+"px)" });
        });
    </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>