
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rawna Rajput Shaadi</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <?php
    echo link_tag('assets/css/bootstrap-datetimepicker.min.css');
    echo link_tag('assets/css/animate.min.css');
    echo link_tag('assets/css/sweet-alert.css');
    echo link_tag('assets/css/material-design-iconic-font.min.css');
    echo link_tag('assets/css/jquery.mCustomScrollbar.min.css ');
    echo link_tag('assets/css/app.min.1.css');
    echo link_tag('assets/css/app.min.2.css');
    ?>
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
            <a href="index.html">Rawna Rajput Shaadi</a>
        </li>

        <li class="pull-right">
            <ul class="top-menu">
                <li id="toggle-width">
                    <div class="toggle-switch">
                        <input id="tw-switch" type="checkbox" hidden="hidden">
                        <label for="tw-switch" class="ts-helper"></label>
                    </div>
                </li>

                <li id="top-search">
                    <a href=""><i class="tm-icon zmdi zmdi-search"></i></a>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" href="">
                        <i class="tm-icon zmdi zmdi-email"></i
                        <i class="tmn-counts">6</i>
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
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="<?php echo base_url('assets/img/profile-pics/3.jpg');?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="<?php echo base_url('assets/img/profile-pics/4.jpg');?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="<?php echo base_url('assets/img/profile-pics/4.jpg');?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
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
                        <i class="tmn-counts">9</i>
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
                                            <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a class="lv-footer" href="">View Previous</a>
                        </div>

                    </div>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href="">
                        <i class="tm-icon zmdi zmdi-view-list-alt"></i>
                        <i class="tmn-counts">2</i>
                    </a>
                    <div class="dropdown-menu pull-right dropdown-menu-lg">
                        <div class="listview">
                            <div class="lv-header">
                                Tasks
                            </div>
                            <div class="lv-body">
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                            <span class="sr-only">95% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Google Chrome Extension</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Social Intranet Projects</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Youtube Client App</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="lv-footer" href="">View All</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li class="skin-switch hidden-xs">
                            <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                            <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                            <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                            <span class="ss-skin bgm-teal" data-skin="teal"></span>
                            <span class="ss-skin bgm-orange" data-skin="orange"></span>
                            <span class="ss-skin bgm-blue" data-skin="blue"></span>
                        </li>
                        <li class="divider hidden-xs"></li>
                        <li class="hidden-xs">
                            <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                    <a href=""><i class="tm-icon zmdi zmdi-comment-alt-text"></i></a>
                </li>
            </ul>
        </li>
    </ul>


    <!-- Top Search Content -->
    <div id="top-search-wrap">
        <div class="tsw-inner">
            <i id="top-search-close" class="zmdi zmdi-arrow-left"></i>
            <input type="text">
        </div>
    </div>
</header>

<section id="main">
    <aside id="sidebar" class="sidebar c-overflow">
        <div class="profile-menu">
            <a href="">
                <div class="profile-pic">
                    <img src="img/profile-pics/1.jpg" alt="">
                </div>

                <div class="profile-info">
                    Malinda Hollaway

                    <i class="zmdi zmdi-caret-down"></i>
                </div>
            </a>

            <ul class="main-menu">
                <li>
                    <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                </li>
            </ul>
        </div>

        <ul class="main-menu">
            <li><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-view-compact"></i> Headers</a>

                <ul>
                    <li><a href="textual-menu.html">Textual menu</a></li>
                    <li><a href="image-logo.html">Image logo</a></li>
                    <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                </ul>
            </li>
            <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-widgets"></i> Widgets</a>

                <ul>
                    <li><a href="widget-templates.html">Templates</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

                <ul>
                    <li><a href="tables.html">Normal Tables</a></li>
                    <li><a href="data-tables.html">Data Tables</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

                <ul>
                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                    <li><a href="form-components.html">Form Components</a></li>
                    <li><a href="form-examples.html">Form Examples</a></li>
                    <li><a href="form-validations.html">Form Validation</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                <ul>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="animations.html">Animations</a></li>
                    <li><a href="box-shadow.html">Box Shadow</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="preloaders.html">Preloaders</a></li>
                    <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                    <li><a href="media.html">Media</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="other-components.html">Others</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-trending-up"></i>Charts</a>
                <ul>
                    <li><a href="flot-charts.html">Flot Charts</a></li>
                    <li><a href="other-charts.html">Other Charts</a></li>
                </ul>
            </li>
            <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                <ul>
                    <li><a href="photos.html">Default</a></li>
                    <li><a href="photo-timeline.html">Timeline</a></li>
                </ul>
            </li>

            <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
            <li class="sub-menu toggled active">
                <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                <ul>

                    <li><a class="active" href="profile-about.html">Profile</a></li>
                    <li><a href="list-view.html">List View</a></li>
                    <li><a href="messages.html">Messages</a></li>
                    <li><a href="pricing-table.html">Pricing Table</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="wall.html">Wall</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="login.html">Login and Sign Up</a></li>
                    <li><a href="lockscreen.html">Lockscreen</a></li>
                    <li><a href="404.html">Error 404</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="form-examples.html"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                <ul>
                    <li><a href="form-elements.html">Level 2 link</a></li>
                    <li><a href="form-components.html">Another level 2 Link</a></li>
                    <li class="sub-menu">
                        <a href="form-examples.html">I have children too</a>

                        <ul>
                            <li><a href="">Level 3 link</a></li>
                            <li><a href="">Another Level 3 link</a></li>
                            <li><a href="">Third one</a></li>
                        </ul>
                    </li>
                    <li><a href="form-validations.html">One more 2</a></li>
                </ul>
            </li>
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
                    <div class="pull-left">
                        <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="lv-title">David Belle</div>
                        <small class="lv-small">Last seen 3 hours ago</small>
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
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                        <i class="chat-status-online"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Glenn Jecobs</div>
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
                    <div class="pull-left">
                        <img class="lv-img-sm" src="img/profile-pics/6.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Wendy Mitchell</div>
                        <small class="lv-small">Last seen 2 minutes ago</small>
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
                <h2>Malinda Hollaway <small>Web/UI Developer, Edinburgh, Scotland</small></h2>

                <ul class="actions m-t-20 hidden-xs">
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="">Privacy Settings</a>
                            </li>
                            <li>
                                <a href="">Account Settings</a>
                            </li>
                            <li>
                                <a href="">Other Settings</a>
                            </li>
                        </ul>
                    </li>
                </ul>
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
                            Total Connections
                        </div>
                    </div>

                    <div class="pmo-block pmo-contact hidden-xs">
                        <h2>Contact</h2>

                        <ul>
                            <li><i class="zmdi zmdi-phone"></i> 00971 12345678 9</li>
                            <li><i class="zmdi zmdi-email"></i> malinda-h@gmail.com</li>
                            <li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                            <li><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                            <li>
                                <i class="zmdi zmdi-pin"></i>
                                <address class="m-b-0 ng-binding">
                                    44-46 Morningside Road,<br>
                                    Edinburgh,<br>
                                    Scotland
                                </address>
                            </li>
                        </ul>
                    </div>

                    <div class="pmo-block pmo-items hidden-xs">
                        <h2>Connections</h2>

                        <div class="pmob-body">
                            <div class="row">
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/1.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/2.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/3.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/4.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/5.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/6.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/7.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/8.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/1.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/2.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/3.jpg');?>" alt="">
                                </a>
                                <a href="" class="col-xs-2">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/profile-pics/4.jpg');?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pm-body clearfix">
                    <ul class="tab-nav tn-justified">
                        <li class="active waves-effect"><a href="profile-about.html">About</a></li>
                        <li class="waves-effect"><a href="profile-timeline.html">Timeline</a></li>
                        <li class="waves-effect"><a href="profile-photos.html">Photos</a></li>
                        <li class="waves-effect"><a href="profile-connections.html">Connections</a></li>
                    </ul>


                    <div class="pmb-block">
                        <div class="pmbb-header">
                            <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Summary</h2>

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
                                Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.
                            </div>

                            <div class="pmbb-edit">
                                <div class="fg-line">
                                    <textarea class="form-control" rows="5" placeholder="Summary...">Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.</textarea>
                                </div>
                                <div class="m-t-10">
                                    <button class="btn btn-primary btn-sm">Save</button>
                                    <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pmb-block">
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
                            <h2><i class="zmdi zmdi-phone m-r-5"></i> Contact Information</h2>

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
                                    <dt>Mobile Phone</dt>
                                    <dd>00971 12345678 9</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Email Address</dt>
                                    <dd>malinda.h@gmail.com</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Twitter</dt>
                                    <dd>@malinda</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Skype</dt>
                                    <dd>malinda.hollaway</dd>
                                </dl>
                            </div>

                            <div class="pmbb-edit">
                                <dl class="dl-horizontal">
                                    <dt class="p-t-10">Mobile Phone</dt>
                                    <dd>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="eg. 00971 12345678 9">
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt class="p-t-10">Email Address</dt>
                                    <dd>
                                        <div class="fg-line">
                                            <input type="email" class="form-control" placeholder="eg. malinda.h@gmail.com">
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt class="p-t-10">Twitter</dt>
                                    <dd>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="eg. @malinda">
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt class="p-t-10">Skype</dt>
                                    <dd>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="eg. malinda.hollaway">
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
    </section>
</section>

<footer id="footer">
    Copyright &copy; 2015 Material Admin

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
echo script_tag('assets/js/jquery.min.js');
echo script_tag('assets/js/bootstrap.min.js');
echo script_tag('assets/js/jquery.mCustomScrollbar.concat.min.js');
echo script_tag('assets/js/waves.min.js');
echo script_tag('assets/js/bootstrap-growl.min.js');
echo script_tag('assets/js/sweet-alert.min.js');
echo script_tag('assets/js/moment.min.js');
echo script_tag('assets/js/bootstrap-datetimepicker.min.js');
//    echo script_tag('assets/js/jquery.placeholder.min.js');
echo script_tag('assets/js/functions.js');
echo script_tag('assets/js/demo.js');
?>
<!--<![endif]-->-->
</body>
</html>