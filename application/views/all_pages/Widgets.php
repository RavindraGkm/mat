
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendor CSS -->
    <link href="vendors/bower_components/mediaelement/build/mediaelementplayer.css" rel="stylesheet">
    <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/app.min.1.css" rel="stylesheet">
    <link href="css/app.min.2.css" rel="stylesheet">
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
            <a href="index.html">Material Admin</a>
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
                        <i class="tm-icon zmdi zmdi-email"></i>
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
                                            <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
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
                                            <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
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
            <li class="sub-menu active toggled">
                <a href=""><i class="zmdi zmdi-widgets"></i> Widgets</a>

                <ul>
                    <li><a href="widget-templates.html">Templates</a></li>
                    <li><a class="active" href="widgets.html">Widgets</a></li>
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
            <li class="sub-menu">
                <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                <ul>

                    <li><a href="profile-about.html">Profile</a></li>
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
                <h2>Widgets</h2>

                <ul class="actions">
                    <li>
                        <a href="">
                            <i class="zmdi zmdi-trending-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="zmdi zmdi-check-all"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="">Refresh</a>
                            </li>
                            <li>
                                <a href="">Manage Widgets</a>
                            </li>
                            <li>
                                <a href="">Widgets Settings</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

            <div class="col-sm-4">
                <!-- Picture List -->
                <div class="card picture-list">
                    <div class="card-header">
                        <h2>Augue laoreet rutrum <small>Cras congue nec lorem eget posuere</small></h2>

                        <ul class="actions">
                            <li class="dropdown action-show">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="pl-body">
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/1.png" alt="">
                            </a>
                        </div>

                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/2.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/3.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/4.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/5.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/6.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/7.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/8.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/9.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/1.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/2.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="">
                                <img src="img/headers/square/3.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Posts -->
                <div class="card blog-post">
                    <div class="bp-header">
                        <img src="img/widgets/preview.jpg" alt="">

                        <a href="" class="bp-title">
                            <h2>Samsung Galaxy Alpha</h2>
                            <small>Vivamus sagittis lacus vel augue laoreet rutrum</small>
                        </a>
                    </div>

                    <div class="p-20">
                        Pellentesque lacinia sagittis libero. Praesent vitae justo purus. In hendrerit lorem nisl, ac lacinia urna aliquet non. Quisque nisi tellus, rhoncus quis est sit amete in nisl molestie fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna massa.
                    </div>
                </div>

                <!-- Tasks -->
                <div class="card">
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

                <!-- Video -->
                <div class="card">
                    <video src="media/big_buck_bunny.mp4" height="197" style="width: 100%"></video>
                </div>

                <!-- Widgets -->
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Contact Information <small>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</small></h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 00971123456789</li>
                                <li class="ng-binding"><i class="zmdi zmdi-email"></i> malinda.h@gmail.com</li>
                                <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                                <li class="ng-binding"><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        44-46 Morningside Road <br>
                                        Edinburgh <br>
                                        Scotland
                                    </address>
                                </li>
                            </ul>
                        </div>

                        <a class="pmo-map" href="">
                            <img src="img/demo/map.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <!-- Tabs -->
                <div class="card">
                    <div class="card-header">
                        <h2>Praesent vitae justo purus <small>In hendrerit lorem nislac lacinia</small></h2>
                    </div>

                    <div class="card-body">
                        <ul class="tab-nav tn-justified tn-icon" role="tablist">
                            <li role="presentation" class="active">
                                <a class="col-sx-4" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                                    <i class="zmdi zmdi-home icon-tab"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="col-xs-4" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                                    <i class="zmdi zmdi-pin icon-tab"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="col-xs-4" href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                                    <i class="zmdi zmdi-star icon-tab"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content p-20">
                            <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-1">
                                <img src="img/headers/sm/6.png" class="img-responsive m-b-15" alt="">
                                Morbi id orci lacus. Nunc semper condimentum sem vel imperdiet. Praesent tristique purus id est dictum, vel vestibulum ante interdum.
                            </div>

                            <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-2">
                                <img src="img/headers/sm/2.png" class="img-responsive m-b-15" alt="">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet dapibus tellus. Nullam aliquet dignissim semper. Cras sit amet ligula congue, dapibus enim id, dapibus tellus.
                            </div>

                            <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-3">
                                <img src="img/headers/sm/4.png" class="img-responsive m-b-15" alt="">
                                Serhoncus quis est sit amete in nisl molestie fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna massa.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Todo Lists -->
                <div id="todo-lists">
                    <div class="tl-header">
                        <h2>Todo Lists</h2>
                        <small>Add, edit and manage your Todo Lists</small>

                        <ul class="actions actions-alt">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>

                    <div class="tl-body">
                        <div id="add-tl-item">
                            <i class="add-new-item zmdi zmdi-plus"></i>

                            <div class="add-tl-body">
                                <textarea placeholder="What you want to do..."></textarea>

                                <div class="add-tl-actions">
                                    <a href="" data-tl-action="dismiss"><i class="zmdi zmdi-close"></i></a>
                                    <a href="" data-tl-action="save"><i class="zmdi zmdi-check"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox media">
                            <div class="pull-right">
                                <ul class="actions actions-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Delete</a></li>
                                            <li><a href="">Archive</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="media-body">
                                <label>
                                    <input type="checkbox">
                                    <i class="input-helper"></i>
                                    <span>Duis vitae nibh molestie pharetra augue vitae</span>
                                </label>
                            </div>
                        </div>

                        <div class="checkbox media">
                            <div class="pull-right">
                                <ul class="actions actions-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Delete</a></li>
                                            <li><a href="">Archive</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="media-body">
                                <label>
                                    <input type="checkbox">
                                    <i class="input-helper"></i>
                                    <span>In vel imperdiet leoorbi mollis leo sit amet quam fringilla varius mauris orci turpis</span>
                                </label>
                            </div>

                        </div>

                        <div class="checkbox media">
                            <div class="pull-right">
                                <ul class="actions actions-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Delete</a></li>
                                            <li><a href="">Archive</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="media-body">
                                <label>
                                    <input type="checkbox">
                                    <i class="input-helper"></i>
                                    <span>Suspendisse quis sollicitudin erosvel dictum nunc</span>
                                </label>
                            </div>
                        </div>

                        <div class="checkbox media">
                            <div class="pull-right">
                                <ul class="actions actions-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Delete</a></li>
                                            <li><a href="">Archive</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="media-body">
                                <label>
                                    <input type="checkbox">
                                    <i class="input-helper"></i>
                                    <span>Suspendisse potenti. Cras dolor augue, tincidunt sit amet lorem id, blandit rutrum libero</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social -->
                <div class="card go-social">
                    <div class="card-header">
                        <h2>Social with us <small>Nunc sit amet dapibus tellus</small></h2>
                    </div>

                    <div class="card-body clearfix">
                        <a class="col-xs-4" href="">
                            <img src="img/social/facebook-128.png" class="img-responsive" alt="">
                        </a>

                        <a class="col-xs-4" href="">
                            <img src="img/social/twitter-128.png" class="img-responsive" alt="">
                        </a>

                        <a class="col-xs-4" href="">
                            <img src="img/social/googleplus-128.png" class="img-responsive" alt="">
                        </a>

                        <a class="col-xs-4" href="">
                            <img src="img/social/linkedin-128.png" class="img-responsive" alt="">
                        </a>

                        <a class="col-xs-4" href="">
                            <img src="img/social/youtube-128.png" class="img-responsive" alt="">
                        </a>

                        <a class="col-xs-4" href="">
                            <img src="img/social/blogger-128.png" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>

                <!-- Form -->
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Sample Form <small>Pellentesque ac lectus sed elit dictum vehicula</small></h2>
                    </div>

                    <div class="card-body card-padding">
                        <div class="form-group fg-float m-b-30">
                            <div class="fg-line">
                                <input type="email" class="form-control input-sm">
                                <label class="fg-label">Name</label>
                            </div>
                        </div>

                        <div class="form-group fg-float m-b-30">
                            <div class="fg-line">
                                <input type="email" class="form-control input-sm">
                                <label class="fg-label">Email address</label>
                            </div>
                        </div>

                        <div class="form-group fg-float m-b-30">
                            <div class="fg-line">
                                <input type="email" class="form-control input-sm">
                                <label class="fg-label">Contact Number</label>
                            </div>
                        </div>

                        <div class="form-group fg-float">
                            <div class="fg-line">
                                <textarea class="form-control auto-size input-sm"></textarea>
                                <label class="fg-label">Message</label>
                            </div>
                        </div>

                        <button class="btn btn-info">Submit</button>
                        <button class="btn btn-link">Cancel</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <!-- Rating -->
                <div class="card rating-list">
                    <div class="listview">
                        <div class="lv-header">
                            <div class="m-t-5">
                                Average Rating 3.0
                            </div>

                            <div class="clearfix"></div>

                            <div class="rl-star">
                                <i class="zmdi zmdi-star active"></i>
                                <i class="zmdi zmdi-star active"></i>
                                <i class="zmdi zmdi-star active"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                            </div>
                        </div>

                        <div class="lv-body">
                            <div class="p-15">
                                <div class="lv-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            1 <i class="zmdi zmdi-star"></i>
                                        </div>

                                        <div class="pull-right">20</div>

                                        <div class="media-body">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="lv-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            2 <i class="zmdi zmdi-star"></i>
                                        </div>

                                        <div class="pull-right">45</div>

                                        <div class="media-body">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="lv-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            3 <i class="zmdi zmdi-star"></i>
                                        </div>

                                        <div class="pull-right">60</div>

                                        <div class="media-body">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="lv-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            4 <i class="zmdi zmdi-star"></i>
                                        </div>

                                        <div class="pull-right">78</div>

                                        <div class="media-body">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="lv-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            5 <i class="zmdi zmdi-star"></i>
                                        </div>

                                        <div class="pull-right">22</div>

                                        <div class="media-body">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Profile view -->
                <div class="card profile-view">
                    <div class="pv-header">
                        <img src="img/profile-pics/profile-pic.jpg" class="pv-main" alt="">
                    </div>

                    <div class="pv-body">
                        <h2>Malinda Hollaway</h2>
                        <small>Praesent vitae justo purus. In hendrerit lorem nislac lacinia urnaunc vitae ante id magna </small>

                        <ul class="pv-contact">
                            <li><i class="zmdi zmdi-pin"></i> Jupitor</li>
                            <li><i class="zmdi zmdi-phone"></i> +11 55694785</li>
                        </ul>

                        <ul class="pv-follow">
                            <li>589 Followers</li>
                            <li>8545 Followings</li>
                        </ul>

                        <a href="" class="pv-follow-btn">Follow</a>
                    </div>
                </div>

                <!-- Listview -->
                <div class="card">
                    <div class="listview">
                        <div class="lv-header">
                            Messages
                        </div>
                        <div class="lv-body">
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
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
                        <a class="lv-footer" href="">View All</a>
                    </div>
                </div>

                <!-- Custom header -->
                <div class="card">
                    <div class="card-header bgm-cyan"> <!-- Please refer the Colors page in User Interface for more color classes -->
                        <h2>Text with custom header <small>Nam at dui sed lacus lacinia lobortis</small></h2>
                    </div>

                    <div class="card-body card-padding">
                        Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. Donec eget felis et sem scelerisque euismod eget sit amet nunc.
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
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>

<script src="vendors/bower_components/moment/min/moment.min.js"></script>
<script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
<script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
<script src="vendors/bower_components/mediaelement/build/mediaelement-and-player.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="js/functions.js"></script>
<script src="js/demo.js"></script>
</body>
</html>