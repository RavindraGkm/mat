
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rawna Rajput Matrimonial</title>
<!--    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
<!--    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>-->
<!--    font-family: 'Lato', sans-serif;-->
    <?php
        echo link_tag('assets/css/bootstrap-datetimepicker.min.css');
        echo link_tag('assets/css/animate.min.css');
        echo link_tag('assets/css/sweet-alert.css');
        echo link_tag('assets/css/material-design-iconic-font.min.css');
        echo link_tag('assets/css/jquery.mCustomScrollbar.min.css ');
        echo link_tag('assets/css/app.min.1.css');
        echo link_tag('assets/css/app.min.2.css');
        echo link_tag('assets/css/lightGallery.css');
        echo link_tag('assets/css/font-awesome.css');
        echo link_tag('assets/css/font-awesome.min.css');
    ?>
    <style type="text/css">
        @font-face {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body>
<header id="header" class="clearfix" data-current-skin="blue">
    <ul class="header-inner">
        <li id="menu-trigger" data-trigger="#sidebar">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>

        <li class="logo hidden-xs">
            <a href="<?php echo base_url('home'); ?>">
                Rawna Rajput Matrimonial
            </a>
        </li>
        <li class="pull-right pull-right-margine">
            <ul class="top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" href="">
                        <i class="tm-icon zmdi zmdi-email"></i>
                        <i class="tmn-counts">2</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview">
                            <div class="lv-header">
                                Messages
                            </div>
                            <div class="lv-body">
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="<?php echo base_url('assets/img/profile-pics/1.jpg'); ?>" />
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="<?php echo base_url('assets/img/profile-pics/2.jpg');?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a class="lv-footer" href="">View All</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="">
                        <i class="tm-icon zmdi zmdi-notifications"></i>
                        <i class="tmn-counts">2</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview" id="notifications">
                            <div class="lv-header">
                                Notification

                                <ul class="actions">
                                    <li class="dropdown">
                                        <a href="" data-clear="notification">
                                            <i class="zmdi zmdi-check-all"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lv-body">
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="<?php echo base_url('assets/img/profile-pics/1.jpg');?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="<?php echo base_url('assets/img/profile-pics/2.jpg');?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a class="lv-footer" href="">View Previous</a>
                        </div>

                    </div>
                </li>
            </ul>
        </li>
    </ul>
</header>

<section id="main">
    <aside id="sidebar" class="sidebar c-overflow">
        <div class="profile-menu">
            <a href="">
                <div class="profile-pic">
                    <img src="<?php echo base_url('assets/img/profile-pics/1.jpg');?>" alt="">
                </div>

                <div class="profile-info">
                    Malinda Hollaway

                    <i class="zmdi zmdi-caret-down"></i>
                </div>
            </a>

            <ul class="main-menu">
                <li>
                    <a href="<?php echo base_url('view-profile');?>"><i class="zmdi zmdi-account"></i> View Profile</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                </li>
            </ul>
        </div>

        <ul class="main-menu">
            <li><a href="<?php echo base_url('home'); ?>"><i class="zmdi zmdi-home"></i> Home</a></li>
            <li><a href="<?php echo base_url('register'); ?>"><i class="zmdi zmdi-account-add"></i> Register</a></li>
        </ul>
    </aside>

    <aside id="chat" class="sidebar c-overflow">

        <div class="chat-search">
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Search People">
            </div>
        </div>

        <div class="listview">
            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                        <i class="chat-status-busy"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Jonathan Morris</div>
                        <small class="lv-small">Available</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                        <i class="chat-status-online"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Fredric Mitchell Jr.</div>
                        <small class="lv-small">Availble</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left">
                        <img class="lv-img-sm" src="img/profile-pics/5.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Bill Phillips</div>
                        <small class="lv-small">Last seen 3 days ago</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                        <i class="chat-status-busy"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Teena Bell Ann</div>
                        <small class="lv-small">Busy</small>
                    </div>
                </div>
            </a>
        </div>
    </aside>


    <section id="content">
        <div class="container">

            <div class="block-header">
                <h2>Malinda Hollaway <small></small></h2>


            </div>

            <div class="card" id="profile-main">
                <div class="pm-overview c-overflow">
                    <div class="pmo-pic">
                        <div class="p-relative">
                            <a href="">
                                <img class="img-responsive" src="<?php echo base_url('assets/img/profile-pics/profile-pic-2.jpg');?>" alt="">
                            </a>

                            <div class="dropdown pmop-message">
                                <a data-toggle="dropdown" href="" class="btn bgm-white btn-float z-depth-1">
                                    <i class="zmdi zmdi-comment-text-alt"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <textarea placeholder="Write something..."></textarea>

                                    <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                                </div>
                            </div>

                            <a href="" class="pmop-edit">
                                <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Update Profile Picture</span>
                            </a>
                        </div>


                        <div class="pmo-stat">
                            <h2 class="m-0 c-white">1562</h2>
                            Peoples Intrested
                        </div>
                    </div>

                    <div class="pmo-block pmo-contact hidden-xs">
                        <h2>Contact</h2>

                        <ul>
                            <li><i class="zmdi zmdi-phone"></i> +91 9988 455 455</li>
                            <li><i class="zmdi zmdi-email"></i> abc@gmail.com</li>
                            <li>
                                <i class="zmdi zmdi-pin"></i>
                                <address class="m-b-0 ng-binding">
                                    132 New Bhupalpura 100ft Road,<br>
                                    Udaipur,<br>
                                    Rajasthan
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
<!--========================================================================================================================================-->
                <div class="pm-body clearfix" role="tabpanel">
                    <!-- Nav tabs -->
<!--                    <ul class="nav nav-tabs tab-nav " role="tablist">-->
                    <ul class="tab-nav" role="tablist">
                        <li class="active   " role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">ABOUT ME</a></li>
                        <li class="" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">FAMILY BACKGROUND</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active pmb-block" id="home">
                            <div class="pmbb-body p-1-30 pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-account m-r-5"></i> Basic Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Full Name</dt>
                                            <dd>Mallinda Hollaway</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Gender</dt>
                                            <dd>Female</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Birthday</dt>
                                            <dd>June 23, 1990</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Birthday Time</dt>
                                            <dd>06:30 PM</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Birthday Place</dt>
                                            <dd>Sanwad, Udaipur (Raj.)</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Height</dt>
                                            <dd>5ft 4in</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Manglik</dt>
                                            <dd>Non manglik</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Martial Status</dt>
                                            <dd>Single</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Full Name</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mallinda Hollaway">
                                                </div>

                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Gender</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Birthday</dt>
                                            <dd>
                                                <div class="dtp-container dropdown fg-line">
                                                    <input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="Click here...">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Birth Time</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="06:30 PM">
                                                </div>

                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Birth Place</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="Sanwad, Udaipur (Raj.)">
                                                </div>

                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Hight</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>5ft</option>
                                                        <option>5ft 1in</option>
                                                        <option>5ft 2in</option>
                                                        <option>5ft 3in</option>
                                                        <option>5ft 4in</option>
                                                        <option>5ft 5in</option>
                                                        <option>5ft 6in</option>
                                                        <option>5ft 7in</option>
                                                        <option>5ft 8in</option>
                                                        <option>5ft 9in</option>
                                                        <option>5ft 10in</option>
                                                        <option>5ft 11in</option>
                                                        <option>6ft </option>
                                                        <option>6ft 1in</option>
                                                        <option>6ft 2in</option>
                                                        <option>6ft 3in</option>
                                                        <option>6ft 4in</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Manglik</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Select...</option>
                                                        <option>Manglik</option>
                                                        <option>Non Manglik</option>
                                                        <option>Anshik Manglik</option>
                                                        <option>Purn Manglik</option>
                                                        <option>I don't know</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Martial Status</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>

                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-book m-r-5"></i> Educational Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Highest Education</dt>
                                            <dd>BBM, MBA</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Highest Education</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="Education...">
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-wrench m-r-5"></i> Working Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Occupation</dt>
                                            <dd>Private Sector</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Salary per month</dt>
                                            <dd>20000</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Occupation</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Private Sector</option>
                                                        <option>Central Govt.</option>
                                                        <option>State Govt.</option>
                                                        <option>Business</option>
                                                        <option>MNC</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Salary per month</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="email" class="form-control" placeholder="20,000">
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-home m-r-5"></i> Living Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>State</dt>
                                            <dd>Rajasthan</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>City</dt>
                                            <dd>Udaipur</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Address</dt>
                                            <dd>132 New Bhupalpura, 100 ft Road</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">State</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Delhi</option>
                                                        <option>Gujrat</option>
                                                        <option>Hariyana</option>
                                                        <option>Maharashtra</option>
                                                        <option>Punjab</option>
                                                        <option>Rajasthan</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">City</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Ajmer</option>
                                                        <option>Bikaner</option>
                                                        <option>Bundi</option>
                                                        <option>Jaipur</option>
                                                        <option>Jodhpur</option>
                                                        <option>Rajsamand</option>
                                                        <option>Udaipur</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Address</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="Address...">
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane pmb-block" id="profile">
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-account m-r-5"></i> Father's Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Father's Name</dt>
                                            <dd>Mr. D. Hollaway</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Son of</dt>
                                            <dd>Mr.V. D. Hollaway</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Cast (Gotra)</dt>
                                            <dd>ABC</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Locality</dt>
                                            <dd>UDR</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Contact No.</dt>
                                            <dd>+91 9988 445 445</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Father's Name</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mr. D. Hollaway">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Son of</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mr.V. D. Hollaway">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Cast (Gotra)</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mr. D. Hollaway">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Locality</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="Udaipur">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Contact No.</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="+91 9988 455 455">
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-account m-r-5"></i> Mother's Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Mother's Name</dt>
                                            <dd>Mrs. D. Hollaway</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Mother's (Gotra)</dt>
                                            <dd>BCD</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Mother's Name</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mrs. D. Hollaway">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Daughter of</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mrs. P. R. Pollaway">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Mother's (Gotra)</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. BCD">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Belongs to</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="Jaipur">
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="fa fa-users fa-1x"></i> Sibling Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>No. of Brothers</dt>
                                            <dd>1</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>No. of Sisters</dt>
                                            <dd>1</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">No. of Brothers</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">No.of Sisters</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--========================================================================================================================================-->
            </div>
        </div>
    </section>
</section>

<footer id="footer">
    Copyright &copy; 2015 Rawna Rajput Matrimonial

    <ul class="f-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Reports</a></li>
        <li><a href="">Support</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</footer>

<!-- Page Loader -->
<div class="page-loader">
    <div class="preloader pls-blue">
        <svg class="pl-circular" viewBox="25 25 50 50">
            <circle class="plc-path" cx="50" cy="50" r="20" />
        </svg>

        <p>Please wait...</p>
    </div>
</div>

<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">

                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<!-- Javascript Libraries -->
<?php
    echo script_tag('assets/js/jquery.js');
    echo script_tag('assets/js/jquery.min.js');
    echo script_tag('assets/js/bootstrap.min.js');
    echo script_tag('assets/js/jquery.mCustomScrollbar.concat.min.js');
    echo script_tag('assets/js/waves.min.js');
    echo script_tag('assets/js/bootstrap-growl.min.js');
    echo script_tag('assets/js/sweet-alert.min.js');
    echo script_tag('assets/js/moment.min.js');
    echo script_tag('assets/js/bootstrap-datetimepicker.min.js');
    echo script_tag('assets/js/functions.js');
//    echo script_tag('assets/js/demo.js');
?>
<!--<![endif]-->-->
</body>
</html>