<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vidhya Bharti Teacher's Training College</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <?php
    echo link_tag('assets/css/bootstrap.css');
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/jquery.bxslider.css');
    echo link_tag('assets/css/style.css');
    ?>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-9 col-md-3 hidden-sm hidden-xs">
                <div class="well logo">
                    <img class="image-logo" src="<?php echo base_url('assets/img/logo.jpg'); ?>" />
                    <a class="logo" href="<?php echo base_url(); ?>">
                        Vidhya Bharti Teacher's Training College
                    </a>
                </div>
            </div>
            <!-- End Logo -->
            <!-- Shopping Cart List -->
            <div class="col-lg-3 col-md-4 col-sm-5">

            </div>
            <!-- End Shopping Cart List -->
        </div>
    </div>
</header>

<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- text logo on mobile view -->
            <a class="navbar-brand visible-xs" href="<?php echo base_url(); ?>">VBTTC</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a class="active" href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation -->

<div class="container main-container">
    <div class="row">
        <div class="col-lg-5 col-md-3 col-sm-12">

            <!-- OUR LOCATION -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="no-padding">
                    <span class="title">OUR LOCATION</span>
                </div>
                Asoliyo Ki Madri<br>
                Bhimal<br>
                Mavli, Dabok Road, Udaipur<br />
                <br />
                <iframe width="100%" height="300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23703.431752995075!2d73.96288574304062!3d24.79191836885036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3968762a47fdecc9%3A0xbd30af115afa3928!2sMavli%2C+Rajasthan+313203!5e0!3m2!1sen!2sin!4v1452192162763" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- End OUR LOCATION -->

        </div>

        <div class="clearfix visible-sm"></div>

        <!-- Cart -->
        <div class="col-lg-7 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">CONTACT US</span>
            </div>
            <div class="col-lg-12 col-sm-12 hero-feature">
                <p>If you have any query regarding the syllabus and anything, you can fill the form bellow. We will contact you as soon as possible with the same.</p>
                <table class="table table-bordered tbl-checkout">
                    <tbody>
                    <tr>
                        <td>First Name</td>
                        <td>
                            <input type="text" name="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>
                            <input type="text" name="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Telephone</td>
                        <td>
                            <input type="text" name="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td colspan="3">
                            <textarea name="" class="form-control" rows="5"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="btn-group btns-cart">
                    <button type="button" id="send_contact_info" class="btn btn-primary">Send Message &nbsp;<i class="fa fa-send"></i></button>
                </div>
            </div>
        </div>
        <!-- End Cart -->


    </div>
</div>

<footer>
    <div class="navbar-inverse text-center copyright">
        Copyright &copy; 2015 V.B.T.T.C. All rights reserved
    </div>
</footer>

<a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    <i class="fa fa-angle-double-up"></i>
</a>
<?php
echo script_tag('assets/js/jquery.js');
echo script_tag('assets/js/bootstrap.js');
echo script_tag('assets/js/jquery.bxslider.min.js');
echo script_tag('assets/js/jquery.blImageCenter.js');
echo script_tag('assets/js/mimity.js');
?>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        $("#send_contact_info").click(function() {
            var button = $(this);
            $(this).html('Sending....&nbsp;<i class="fa fa-send"></i>');
            setTimeout(function() {
                button.html('Send Message &nbsp;<i class="fa fa-send"></i>');
                alert("We received your message :)");
            }, 2000);
        });
    });
</script>