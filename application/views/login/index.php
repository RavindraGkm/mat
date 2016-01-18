<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawna Rajut Matrimonial</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
    <?php
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/font-awesome.css');
    echo link_tag('assets/css/animate.css');
    echo link_tag('assets/css/creative-brands.css');
    echo link_tag('assets/css/custom1.css');
    echo link_tag('assets/css/index.css');
    echo link_tag('assets/css/material-design-iconic-font.min.css');
    ?>
</head>
<body class="login-content">
<div class="container">
    <div class="row" id="text"><!-- start of row text -->
        <div class="col-md-12">
            <h2>Rawna Rajput Matrimonial</h2>
            <p>This website is just a plateform where two families can meet each other and know each other. So lets register and login to view all profiles.</p>
        </div>
    </div><!-- end of row text -->

    <div class="row countdown">
        <div class="col-md-12">
            <!--Login -->
            <div class="lc-block toggled" id="l-login">
                <h4 class="login-title">Login into your account</h4>
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                    <div class="fg-line">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>
                <ul class="login-navigation">
                    <li data-block="#l-register" class="bgm-red">Register</li>
                    <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
                </ul>
            </div>
            <!--Register-->
            <div class="lc-block" id="l-register">
                <h4 class="register-title">Register new user</h4>
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                </div>
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Mobile Number">
                    </div>
                </div>
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                    <div class="fg-line">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        <i class="input-helper"></i>
                        I agree <a href="">terms & conditions</a>
                    </label>
                </div>

                <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

                <ul class="login-navigation">
                    <li data-block="#l-login" class="bgm-green">Login</li>
                    <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
                </ul>
            </div>
            <!-- Forgot Password -->
            <div class="lc-block" id="l-forget-password">
                <p class="text-left forgot-password-text">If you forgot your password don't panic. Its very easy to get you password back. Just type your mail id and we will send your password on your mail id. If you forgot your mail id then plz contact on 8739870004.</p>

                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

                <ul class="login-navigation">
                    <li data-block="#l-login" class="bgm-green">Login</li>
                    <li data-block="#l-register" class="bgm-red">Register</li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
            <a class="navbar-brand visible-xs" href="#">Rawna Rajput Matrimonial</a>
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
echo script_tag('assets/js/jquery.min.js');
echo script_tag('assets/js/bootstrap.min.js');
echo script_tag('assets/js/custom.js');
echo script_tag('assets/js/waves.min.js');
echo script_tag('assets/js/jquery.vegas.js');
echo script_tag('assets/js/functions.js');
echo script_tag('assets/js/creative-brands.js');
?>

</body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        if ($('.login-content')[0]) {
            //Add class to HTML. This is used to center align the logn box
            $('html').addClass('login-content');

            $('body').on('click', '.login-navigation > li', function(){
                var z = $(this).data('block');
                var t = $(this).closest('.lc-block');

                t.removeClass('toggled');

                setTimeout(function(){
                    $(z).addClass('toggled');
                });

            })
        }
    });
</script>
