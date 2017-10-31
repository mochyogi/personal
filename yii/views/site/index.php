<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\Analytics;
use app\components\JavaScriptPacker;

$id_username = "u".uniqid();
$id_password = "p".uniqid();
$id_form = "f".uniqid();
$id_forgot_form = "ff".uniqid();
$c = $this->context->id;
$a = $this->context->action->id;
$bu = Url::base();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta charset="utf-8">
    <?php if (in_array($_SERVER['HTTP_HOST'], ['nexwaveindonesia.com'])): ?>
    <meta http-equiv="refresh" content="0; url=http://ptnw.net/" />
    <?php endif; ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <noscript>
        <meta http-equiv="refresh" content="0; url=<?= Url::to(['security/noscript']) ?>" />
    </noscript>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//s4.histats.com">
    <link rel="dns-prefetch" href="//s10.histats.com">
    <link rel="dns-prefetch" href="//e.dtscout.com">
    <link rel="dns-prefetch" href="//n-cdn.areyouahuman.com">
    <link rel="dns-prefetch" href="//t.dtscdn.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">

    <meta name="author" content="NexWave Semarang - Back Office Team">
    <meta name="keywords" content="access, achievement, analysis, approx, april, area, assesment, audit, band, bandung, barat, benchmarking, building, built, capacity, cell, choose, commissioning, competing, conference, connexio, copyrights, core, coverage, data, dual, early, engineering, establishing, expert, forgot, frequency, global, gold, hello, huawei, improvement, incorporated, indonesia, indoor, intuitiveness, jakarta, januari, kpis, link, login, management, masterclass, medal, mind, module, monitoring, network, networks, nexwave, office, omni, optimisation, outdoor, partner, passion, password, pekanbaru, performance, phone, piece, planning, port, power, presented, products, project, radio, raya, recommendations, rectifier, room, sang, sector, selatan, semarang, senior, solution, solutions, statistics, strategic, supply, tebet, telkomsel, test, training, transmission, tuning, username, want, wifi, winhap, work, world">
    <meta name="description" content="Next Generation Mobility Solutions &amp; Services">

    <?php if (in_array($_SERVER['HTTP_HOST'], ['ptnw.net', 'nexwaveindonesia.com'])): ?>
    <meta name="robots" content="index, follow">
    <?php else: ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <link rel="shortcut icon" href="<?= Url::base() ?>/images/favicon.gif" type="image/gif">
    <link rel="icon" href="<?= Url::base() ?>/images/favicon.gif" type="image/gif">

    <!-- Stylesheets
    ============================================= -->
    <link href="<?= (strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5))=='https') ? "https://" : "http://" ?>fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/style.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/dark.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/font-icons.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/magnific-popup.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/css/responsive.min.css" type="text/css">
    
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/css/settings.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/css/layers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/css/navigation.min.css">
    
    <style>

    .revo-slider-emphasis-text {
        font-size: 64px;
        font-weight: 700;
        letter-spacing: -1px;
        font-family: 'Raleway', sans-serif;
        padding: 15px 20px;
        border-top: 2px solid #FFF;
        border-bottom: 2px solid #FFF;
    }

    .revo-slider-desc-text {
        font-size: 20px;
        font-family: 'Lato', sans-serif;
        width: 650px;
        text-align: center;
        line-height: 1.5;
    }

    .revo-slider-caps-text {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 3px;
        font-family: 'Raleway', sans-serif;
    }

    .tp-video-play-button { display: none !important; }

    .tp-caption { white-space: nowrap; }
    <?php ob_end_flush(); ?>

    </style>

    <?php $this->head() ?>

    <title>Personal</title>
    <!-- <script src='https://www.google.com/recaptcha/api.js?onload=recaptchacallback&render=explicit'></script> -->
</head>

<body class="stretched">
    <?php $this->beginBody() ?>
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header" data-sticky-class="not-dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="<?= Url::base() ?>" class="standard-logo" data-dark-logo="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/logo_header.png"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/logo_header2.png" alt="Nexwave Logo"></a>
                        <a href="<?= Url::base() ?>" class="retina-logo" data-dark-logo="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/logo-dark@2x.png"><img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li>
                                <a href="<?= Url::to(['site/index#aboutsection']) ?>" data-scrollto="#aboutsection"><div>Tentang</div></a>
                            </li>
                            <li>
                                <?= Html::a('Klien',['client']) ?>
                            </li>
                            <li>
                                <?= Html::a('Gallery',['gallery']) ?>
                            </li>
                            <li>
                                <?= Html::a('Blog',['blog/index']) ?>
                            </li>
                            <li>
                                <a href="<?= Url::to(['vacancy/index']) ?>"><div>Karir</div></a>
                            </li>
                            <li>
                                <a href="#loginsection" data-scrollto="#loginsection"><div>Login</div></a>
                                <!-- <li><a href="<?= Url::base() ?>"><div>Home</div></a></li> -->
                            </li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

        <section id="slider" class="slider-parallax revslider-wrap clearfix">
            <div class="slider-parallax-inner">
                <!--
                #################################
                    - THEMEPUNCH BANNER -
                #################################
                -->
                <div class="tp-banner-container rev_slider_wrapper fullscreen-container">
                    <div class="tp-banner" >
                        <ul>    <!-- SLIDE  -->
                                <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/slider/rev/main/s3-thumb.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Welcome to PT Nexwave">
                                <!-- MAIN IMAGE -->
                                <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/kantor_nw_semarang1.jpg"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="120" data-scaleend="100" data-bgpositionend="left bottom">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                                data-x="0"
                                data-y="150"
                                data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-speed="800"
                                data-start="1500"
                                data-easing="easeOutQuad"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222;">Semarang Office Building</div>

                                
                                <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                                data-x="-3"
                                data-y="180"
                                data-customin="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="1700"
                                data-easing="easeOutCubic"
                                data-splitin="chars"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;"><span>PT NexWave</span></div>                               

                            </li>   
                            <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/slider/rev/main/s3-thumb.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Welcome to PT Nexwave">
                                <!-- MAIN IMAGE -->
                                <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/kantor_nw_semarang4.jpg"  alt="kenburns6"  data-bgposition="right bottom" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right top">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                                data-x="0"
                                data-y="150"
                                data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-speed="800"
                                data-start="1500"
                                data-easing="easeOutQuad"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222;">Semarang Office Building</div>

                                
                                <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                                data-x="-3"
                                data-y="180"
                                data-customin="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="1700"
                                data-easing="easeOutCubic"
                                data-splitin="chars"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;"><span>PT Nexwave</span></div>                               

                            </li>   
                            <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/slider/rev/main/s3-thumb.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Welcome to PT Nexwave">
                                <!-- MAIN IMAGE -->
                                <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/kantor_nw_semarang3.jpg"  alt="kenburns6"  data-bgposition="left bottom" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right top">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                                data-x="0"
                                data-y="150"
                                data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-speed="800"
                                data-start="1500"
                                data-easing="easeOutQuad"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #DCDCDC;">Semarang Office Building</div>

                                
                                <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                                data-x="-3"
                                data-y="180"
                                data-customin="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="1700"
                                data-easing="easeOutCubic"
                                data-splitin="chars"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #DCDCDC; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;"><span>PT NexWave</span></div>                                

                            </li>                       
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap" style="padding-bottom: 0px">

                <div class="container clearfix" id='aboutsection'>

                    <div class="divcenter center clearfix" style="max-width: 900px;">
                        <img class="bottommargin" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/logo_header2.png" alt="">
                        <h1><span>NexWave</span>Technologies.</h1>
                        <h4>PT <span>NexWave</span> adalah salah satu subkontraktor telekomunikasi terbesar di Indonesia. PT <span>NexWave</span> merupakan salah satu dari anak perusahaan TeleChoice International Limited yang berdiri di Singapore pada tanggal 28 April 1998. PT <span>NexWave</span> Indonesia hadir sejak 2004, dan hingga kini PT <span>NexWave</span> sudah bekerja sama dengan operator telekomunikasi di Indonesia, Singapore, Philipines, Malaysia. Operator Indonesia yang sudah bekerja sama dengan PT <span>NexWave</span> diantaranya Telkomsel, XL, Indosat, HCPT (Three), Axis, Smartfren.</h4>
                    </div>

                    <div class="line"></div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-phone2"></i></a>
                            </div>
                            <h3>Radio Network Planning & Optimisation</h3>
                            <p>
                                <ul>
                                    <li>Propagation Model Tuning</li>
                                    <li>Radio Network Planning</li>
                                    <li>Network Optimisation</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-eye"></i></a>
                            </div>
                            <h3>Network Benchmarking / Audit</h3>
                            <p>
                                <ul>
                                    <li>Analysis of OMC statistics</li>
                                    <li>Analysis of outdoor and indoor test data</li>
                                    <li>Establishing network performance KPIs</li>
                                    <li>Benchmarking KPIs against competing networks</li>
                                    <li>Recommendations for KPIs improvement</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-star2"></i></a>
                            </div>
                            <h3>Turnkey Indoor Coverage Solutions</h3>
                                                        <p>
                                <ul>
                                    <li>Analysis of OMC statistics</li>
                                    <li>Analysis of outdoor and indoor test data</li>
                                    <li>Establishing network performance KPIs</li>
                                    <li>Benchmarking KPIs against competing networks</li>
                                    <li>Recommendations for KPIs improvement</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="col_one_third">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-bulb"></i></a>
                            </div>
                            <h3>Transmission Network Planning</h3>
                            <p>
                                <ul>
                                    <li>Network dimensioning</li>
                                    <li>Sites search and selection</li>
                                    <li>LoS survey, path loss analysis & frequency planning</li>
                                    <li>Link routing and capacity, network synchronization & address planning</li>
                                    <li>Transmission optimization such as frequency interference & link availability analysis</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-heart2"></i></a>
                            </div>
                            <h3>NexGen Core & Access Networks</h3>
                            <p>
                                <ul>
                                    <li>Project Management</li>
                                    <li>Implementation of core & access network</li>
                                    <li>Testing & Commissioning of STM-n, CWDM, DWDM, E3 & E1 &  GB circuits</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-note"></i></a>
                            </div>
                            <h3>Power Supply Solution</h3>
                            <p>
                                <ul>
                                    <li>Rectifier</li>
                                    <li>Battery</li>
                                    <li>UPS</li>
                                    <li>Power Supply Cabinet</li>
                                    <li>Installation and commissioning</li>
                                    <li>1st Level repair service for Delta Rectifier Module</li>
                                    <li>Charge Discharge Monitoring Solution</li>
                                    <li>Alternative Power Solution (Fuel Cell, Solar Cell etc)</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="clear"></div>
                    
                    <div class="col_one_third">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-video"></i></a>
                            </div>
                            <h3>Outdoor/Indoor Wifi (Connexio)</h3>
                            <p>
                                <ul>
                                    <li>Beamforming technology</li>
                                    <ul>
                                        <li>WBS-2400 Omni</li>
                                        <li>WBS-2400 Sector</li>
                                        <li>WBSn-2400-O Omni</li>
                                        <li>WBSn-2400-S Sector</li>
                                        <li>WBSn-2450-O Omni Dual Band</li>
                                        <li>WBSn-2450-S Sector Dual Band</li>
                                        <li>WBSn-2450-SO Dual Band</li>
                                        <li>WBSn-2450-OS Dual Band</li>
                                        <li>WBS-5800 Omni</li>
                                        <li>WBS-5800 Sector</li>
                                    </ul>
                                    <li>Connexio Network Management Software</li>
                                    <li>Access controller, Billing module</li>
                                    <li>AAA (RADIUS) Server</li>                                    
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-params"></i></a>
                            </div>
                            <h3>Outdoor/Indoor Wifi (Connexio)</h3>
                            <p>Application
                                <ul>
                                    <li>Hotel, resort, golf course</li>
                                    <li>Camera surveillance</li>
                                    <li>University campus, dormitory, school</li>
                                    <li>Commercial Estate, Stadium, Convention Centre</li>
                                    <li>Train Station</li>
                                    <li>Sea port, Air port</li>
                                    <li>Mining Area</li>
                                    <li>Citywide</li>
                                    <li>Township</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-fire"></i></a>
                            </div>
                            <h3>IBC Related Products</h3>
                            <p>
                                <ul>
                                    <li>Feeder Cable & Accessories (Hansen)</li>
                                    <li>IBC Passive Components (Winhap)</li>
                                    <li>2G/3G RF Repeater (Winhap)</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

                <div class="clear"></div>

                <div class="section notopborder topmargin-sm bottommargin-sm noborder nobg">

                    <div class="container clearfix">

                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-user"></i>
                            <div class="counter counter-lined"><span data-from="100" data-to="2720" data-refresh-interval="50" data-speed="2000"></span>+</div>
                            <h5>Karyawan</h5>
                        </div>

                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-globe"></i>
                            <div class="counter counter-lined"><span data-from="3000" data-to="11" data-refresh-interval="100" data-speed="2500"></span></div>
                            <h5>Kantor Cabang</h5>
                        </div>

                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-chart"></i>
                            <div class="counter counter-lined"><span data-from="10" data-to="100" data-refresh-interval="25" data-speed="3500"></span>+</div>
                            <h5>Project yang Ditangani</h5>
                        </div>

                        <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-smile"></i>
                            <div class="counter counter-lined"><span data-from="60" data-to="20" data-refresh-interval="30" data-speed="2700"></span>+</div>
                            <h5>Customer</h5>
                        </div>

                    </div>

                </div>

                <!-- Portfolio Script
                ============================================= -->

                <!-- <div class="clear"></div> -->
                
                <div class="container divcenter clearfix">

                    <div class="heading-block center">
                        <h1> Gabung Bersama Kami !</h1>
                    </div>

                    <div style="position: relative;" data-height-lg="624" data-height-md="518" data-height-sm="397" data-height-xs="242" data-height-xxs="154">
                        <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/MAPS_nobackground.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                        <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/MAPS_nobackground.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">
                        <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/MAPS_remark.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="1000" alt="iPad">
                        <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/MAPS_remark.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInDown" data-delay="1000" alt="iPad">
                    </div>

                    <div class="heading-block center">
                        <h4>Kami terus tumbuh dan berkembang, membuat kami tetap dipercaya sebagai mitra kerja dengan berbagai vendor Telekomunikasi seperti Nokia, Huawei dan Erricsson untuk proyek di Indonesia maupun di asia tenggara.
                        Silahkan kunjungi halaman karir kami di <a href="<?= Url::to(['vacancy/index']) ?>"><div>vacancy.ptnw.net</div></a></h4>
                    </div>
                </div>

                <div class="col_full bottommargin-lg common-height">

                    <div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;">Why choose Us</h3>
                            <p style="line-height: 1.8;"><ul>
                            <li>Incorporated since Early 2004</li>
                            <li>Approx 2000 staffs</li>
                            <li>11 offices across Indonesia</li>
                            </ul>
                            </p>
                            
                            <!-- <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
                            <i class="icon-bulb bgicon"></i> -->
                        </div>
                    </div>

                    <div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;">Main Business</h3>
                            <p style="line-height: 1.8;"><ul>
                            <li>RNP/RNO</li>
                            <li>Inbuilding (IBC)</li>
                            <li>Products Solution (Power Suply)</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 dark col-padding ohidden" style="background-color: #e74c3c;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;">Strategic Support System</h3>
                            
                            <p style="line-height: 1.8;">
                                <ul>
                                    <li>NexWave Design and Strategic </li>
                                    <li>Troubleshoot Problem Supporting</li>
                                    <li>Training</li>
                                    <li>Network Profiling</li>
                                    <li>Capacity Monitoring</li>
                                    <li>Network Coverage Assessment</li>
                                </ul>
                            </p>                            
                        
                        <!--    <i class="icon-thumbs-up bgicon"></i> -->
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>
                
                <div  id='loginsection' class="section noborder" style="padding-top:0px">
                    <div class="well topmargin tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 600px;">
                        <div class="tab-container">
                            <div class="tab-content clearfix" id="tab-login">
                                <div class="panel panel-default nobottommargin">
                                    <div class="panel-body" style="padding: 40px;">
                                        <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                                            <h3>Login to your PTNW Account</h3>

                                            <div class="col_full">
                                                <label for="login-form-username">NIK / Email:</label>
                                                <input type="text" id="<?= $id_username ?>" name="login-form-username" value="" class="form-control">
                                            </div>

                                            <div class="col_full">
                                                <label for="login-form-password">Password:</label>
                                                <input type="password" id="<?= $id_password ?>" name="login-form-password" value="" class="form-control">
                                            </div>

                                            <div id="recaptcha"></div>

                                            <div style="height:50px;padding-top:10px">
                                                <div class="progress" id="loading" style="display:none">
                                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        <span class="sr-only">Please wait</span>
                                                    </div>
                                                </div>
                                                <div id="login-alert" class="alert alert-danger" style="padding:5px;text-align:center;display:none">
                                                    <!-- <button class="close" data-close="alert"></button> -->
                                                    <span>
                                                        Incorrect username or password </span>
                                                </div>
                                            </div>

                                            <div class="col_full nobottommargin" style="text-align:center">
                                                <button class="button button-3d button-rounded button-green" id="login-form-submit" name="login-form-submit" value="login" type="submit">Login</button>

                                                <button class="button button-3d button-rounded button-red" id="login-form-forgot" name="login-form-submit" value="forgotpassword" type="button">Forgot Password?</button>

                                                <a class="button button-3d button-rounded button-aqua" id="login-form-submit" name="login-form-submit" href="<?= Url::to(['vacancy/index']) ?>">Find a Job</a>
                                            </div>

                                        </form>
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
        <footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="<?php echo \yii::$app->view->theme->baseUrl; ?>/images/nexwave/logo_header_small.png" alt="" class="footer-logo">

                            <div style="background: url('<?php echo \yii::$app->view->theme->baseUrl; ?>/images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>NexWave Indonesia Office:</strong><br>
                                    Jl. Tebet Raya no.5<br>
                                    Tebet Barat, Jakarta Selatan, 12810<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (021) 8290809<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (021) 8292502 <br>
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <h4>Opening Hours</h4>

                            <p>Indonesia Office: Jakarta, Bandung, Semarang, Surabaya, Denpasar, Bandar Lampung, Makassar, Balikpapan.</p>

                            <ul class="iconlist nobottommargin">
                                <li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 9AM to 7PM</li>
                                <li><i class="icon-time text-danger"></i> <strong>Saturdays-Sundays:</strong> Closed</li>
                            </ul>

                            <i class="icon-time bgicon"></i>

                        </div>

                    </div>

                    <div class="col_one_third col_last">


                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2017 NexWave Dev
                        <!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
                    </div>

                    <div class="col_half col_last tright">

                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- modal -->
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Reset password</h4>
          </div>
          <div class="modal-body">
            
            <input type="text" class="form-control" placeholder="Email" id="email">

            <div style="height:50px;padding-top:10px" id="reset-info">
                <div class="progress" id="loading2" style="display:none">
                    <div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">Please wait</span>
                    </div>
                </div>

                <div id="reset-success" class="alert alert-success" style="display:none">An instruction was sent to your email.</div>
                <div id="reset-failed" class="alert alert-warning" style="display:none">Sorry, this email not registered.</div>

           </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="tombol-reset">Reset</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/js/plugins.min.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/js/functions.min.js"></script>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?= Url::base() ?>/js/fingerprint2.min.js"></script>

    <?php if ($_SERVER['HTTP_HOST'] === 'localhost'): ?>
    <script src="<?= Url::base() ?>/js/nds.js?v=3.3"></script>
    <?php else: ?>
    <script src="<?= Url::base() ?>/js/nds.min.js?v=3.3"></script>
    <?php endif; ?>
    
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script>


        $(document).ready(function() {

            $.nds.init('<?= $bu ?>');

            window.fingerprint = '';
            new Fingerprint2().get(function(result, components){
                fingerprint = result;
                if ($.nds.debug){
                    console.log('Fingerprint: ' + fingerprint);
                }
            });

            //BEGIN REVOLUTION SLIDER
            var apiRevoSlider = $('.tp-banner').show().revolution(
            {
                sliderType:"standard",
                jsFileLocation:"<?php echo \yii::$app->view->theme->baseUrl; ?>/include/rs-plugin/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                responsiveLevels:[1200,992,768,480,320],
                startwidth:1140,
                startheight:600,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:3,

                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">   <div class="tp-arr-imgholder"></div>    <div class="tp-arr-titleholder">{{title}}</div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                },

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,


                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[8,7,6,5,4,3,2,1],
                parallaxDisableOnMobile:"on",

                keyboardNavigation:"on",

                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner0",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",


                forceFullWidth:"off",
                fullScreenAlignForce:"off",
                minFullScreenHeight:"400",

                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffset:"0px"
            });

            apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
                setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
            });

            apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
                SEMICOLON.slider.revolutionSliderMenu();
            });
            //END REVOLUTION SLIDER
            
            //window.oncontextmenu = function(){ return false; };
            
            document.onmousedown = function(event){
                return (event.button==2) ? false : true;
            };

            $('#login-form-forgot').click(function(e){
                e.preventDefault();
                $('#modal').modal();
            });

            $('#tombol-reset').click(function(e){
                e.preventDefault();

                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var email = $('#email').val();

                if (email.trim().length == 0){
                    return;
                }

                if (!regex.test(email)){
                    return;
                }

                $('#loading2').show();

                var formdata = {
                    email : email,
                    _csrf : '<?= Yii::$app->request->getCsrfToken() ?>'
                };

                $.post('<?= Url::to(['site/ajaxforgotpassword']) ?>', formdata, function (data) {
                    $('#loading2').hide();
                    var parsed = JSON.parse(data);
                    if(parsed.found == 0){
                        $('#reset-info > div').hide();
                        $('#reset-failed').show();
                    }else if (parsed.found == 1){
                        $('#email').val('');
                        $('#reset-info > div').hide();
                        $('#reset-success').show();
                    }
                });
            });

            jQuery('#login-form').submit(function(e){
                e.preventDefault();

                /*
                if (!recaptcha_clicked){
                    alert('Please check on the recaptcha first');
                    return;
                }
                */

                var _u = jQuery('#<?= $id_username ?>').val();
                var _p = jQuery('#<?= $id_password ?>').val();
                var _r = jQuery('input[name="remember"]:checked').val();

                var formdata = {
                    username: _u,
                    password: _p,
                    fingerprint : fingerprint,
                    _csrf: '<?= Yii::$app->request->getCsrfToken() ?>'

                };

                if (_r !== null){
                    formdata.remember = _r;
                }

                jQuery('#login-alert').hide();
                jQuery('#loading').slideDown('fast');

                $.post('<?= Url::to(['site/ajaxlogin']) ?>', formdata, function (data) {
                    var parsed = JSON.parse(data);
                    console.log('parsed data');
                    console.log(parsed);
                    var returnUrl = '<?= Yii::$app->user->returnUrl ?>';
                    console.log('returnUrl: ' + returnUrl);
                    if (parsed.userlogin == '1') {

                        jQuery('#loading').slideUp('slow');

                        if (parsed.has_fingerprint == 0){
                            top.location.href = $.nds.base_url + '/security/addfingerprint';
                            return;
                        }

                        if (returnUrl.trim().length === 0){

                            if(parsed.position === 'Guest-OSS'){
                                top.location.href = '<?= Url::to(['osstracker/index']) ?>';
                            }
                            else if(parsed.position === 'OSS-External'){
                                top.location.href = '<?= Url::to(['osstracker/index']) ?>';
                            }
                            else if(parsed.user_status === 'External'){
                                top.location.href = '<?= Url::to(['timesheet/index']) ?>';
                            }
                            else{
                                top.location.href = '<?= Url::to(['site/home']) ?>';
                            }
                        }
                        else {
                            top.location.href = returnUrl;
                        }
                    }
                    else {

                        jQuery('#loading').slideUp('fast', function(){
                            jQuery('#login-alert').show();
                        });
                    }
                });
            });

            setTimeout(function(){
                $.nds.track('<?= $bu ?>','<?= $c ?>','<?= $a ?>','');
            }, 1000);

            /*
            window.recaptchacallback = function(){
                window.recaptcha_clicked = false;
                var myCallback = function(val) { 
                    recaptcha_clicked = true;
                };
                grecaptcha.render(
                document.getElementById('recaptcha'), 
                {
                    callback: myCallback, 
                    sitekey: '6LfnQCQUAAAAADbaNhpADjzFGt-VhRwea8RzXvK3'
                });
            };
            */
        });
        <?php 
        ob_end_flush();
        ?>
    </script>

    <?php $this->endBody() ?>

    <?= Analytics::widget() ?>

</body>
</html>
<?php $this->endPage() ?>