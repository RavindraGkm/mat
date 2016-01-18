
<!DOCTYPE html>
<html>
<head>
    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========================
    	Title 
    =========================== -->
    <title>Billboard</title>

    <!-- ==========================
    	Favicons 
    =========================== -->
<!--    <link rel="shortcut icon" href="icons/favicon.ico">-->
<!--    <link rel="apple-touch-icon" href="icons/icon.png">-->
<!--    <link rel="apple-touch-icon" sizes="72x72" href="icons/icon-72x72.png">-->
<!--    <link rel="apple-touch-icon" sizes="114x114" href="icons/icon-114x114.png">-->

    <!-- ==========================
    	Fonts 
    =========================== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
    <!-- ==========================
    	CSS 
    =========================== -->
    <?php
        echo link_tag('assets/css/bootstrap.min.css');
        echo link_tag('assets/css/font-awesome.css');
        echo link_tag('assets/css/animate.css');
        echo link_tag('assets/css/creative-brands.css');
        echo link_tag('assets/css/custom1.css');
        echo link_tag('assets/css/TimeCircles.css');
        echo link_tag('assets/css/jquery.vegas.css');
        echo link_tag('assets/css/app.min.1.css');
        echo link_tag('assets/css/app.min.2.css');
        echo link_tag('assets/css/material-design-iconic-font.min.css');
    ?>

    <!-- ==========================
    	JS 
    =========================== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body class="login-content">

<h1>Billboard</h1>

<!-- ==========================
    MODALS - START
=========================== -->
<section id="modal">
    <!-- ==========================
        MODAL SUBSCRIBE - START
    =========================== -->
    <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="subscribe" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3>Subscribe email</h3>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <img src="image/icon1.png" class="img-responsive" alt="" />
                        </div>

                        <div class="col-md-4 col-sm-3 col-xs-8">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus rhoncus. Maecenas aliquet accumsan leo. Phasellus faucibus molestie nisl. Nullam at arcu a est.</p>
                        </div>

                        <div class="col-md-6 center-block"><!-- Subscribe form -->
                            <div class="subscribe-wrap">
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="btn btn-submit pv-follow-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================
      MODAL SUBSCRIBE - END
       =========================== -->

    <!-- ==========================
     MODAL CONTACT - START
 =========================== -->

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3>Contact</h3>
                        </div>

                        <div class="col-md-18 col-sm-8"><!-- Google Map -->

                            <section class="" id="google-map">
                                <div id="map-canvas"></div>
                            </section>

                        </div>

                        <div class="col-md-4 col-sm-4"><!-- Address -->
                            <address>
                                <h4>Company Name</h4><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                (123) 456-7890
                            </address>

                            <address>
                                <a href="mailto:#">first.last@example.com</a>
                            </address>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========================
       MODAL CONTACT  - END
        =========================== -->

    <!-- ==========================
     MODAL WORK - START
     =========================== -->

    <div class="modal fade" id="work" tabindex="-1" role="dialog" aria-labelledby="work" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3>About our work</h3>
                        </div>
                        <!-- about our work 1. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="image/icon5.png" class="img-responsive" alt="" />
                            <h4>Fancy features</h4>
                            <p class="center-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                        <!-- about our work 2. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="image/icon3.png" class="img-responsive" alt="" />
                            <h4>Fully responsive</h4>
                            <p class="center-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                        <!-- about our work 3. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="image/icon4.png" class="img-responsive" alt="" />
                            <h4>Sound</h4>
                            <p class="center-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                        <!-- about our work 4. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="image/icon2.png" class="img-responsive" alt="" />
                            <h4>Map integration</h4>
                            <p class="center-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========================
       MODAL WORK - END
        =========================== -->

</section>

<!-- ==========================
    MODALS - END
=========================== -->
<!-- ==========================
    CONTENT - START
=========================== -->

<div class="container">
    <div class="row" id="text"><!-- start of row text -->
        <div class="col-md-12">
            <h2>Rawna Rajput Matrimonial</h2>
            <p>In this exact moment we <span class="highlight">working really hard</span> on our new project. You can look forward to an amazing service, which completely <span class="highlight">rock your world</span>. It's going to literally turn your world upside down. <span class="highlight">So stay tuned</span>. For more information visit our website or you can check our <span class="highlight"><i class="fa fa-facebook-square"></i> Facebook</span></p>

            <a class="btn pv-follow-btn" data-toggle="modal" data-target="#subscribe">Login</a>
            <a class="btn pv-follow-btn" data-toggle="modal" data-target="#subscribe">Register</a>
        </div>
    </div><!-- end of row text -->

    <div class="row countdown"><!-- start of row countdown -->

        <div class="col-md-12"><!-- Line Separator -->
<!--            <div class="line"><h3>How much longer</h3></div>-->
            <div class="lc-block toggled" id="l-login">
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                </div>

                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                    <div class="fg-line">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        <i class="input-helper"></i>
                        Keep me signed in
                    </label>
                </div>

                <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

                <ul class="login-navigation">
                    <li data-block="#l-register" class="bgm-red">Register</li>
                    <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
                </ul>
            </div>

        </div>

    </div><!-- end of row countdown -->

</div><!-- end of container -->


<!-- ==========================
    FOOTER - START
=========================== -->


<footer class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="#">Billboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="brands brands-inline navbar-left">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>



            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#subscribe">Login</a></li>
                <li><a href="#" data-toggle="modal" data-target="#work">Register</a></li>
                <li><a href="#" data-toggle="modal" data-target="#contact">Contact Us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</footer>

<!-- ==========================
   FOOTER - END
=========================== -->

<!-- ==========================
 JS
=========================== -->
<?php
    echo script_tag('assets/js/jquery-latest.min.js');
    echo script_tag('assets/js/bootstrap.min.js');
    echo script_tag('assets/js/custom.js');
    echo script_tag('assets/js/waves.min.js');
    echo script_tag('assets/js/jquery.vegas.js');
    echo script_tag('assets/js/jquery.placeholder.min.js');
    echo script_tag('assets/js/functions.js');
    echo script_tag('assets/js/creative-brands.js');
    echo script_tag('assets/js/TimeCircles.js');
?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>


</body>
</html>
