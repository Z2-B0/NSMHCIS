<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css">
    <script type='text/javascript' src="<?php echo base_url();?>assets/lib/fullcalendar-3.9.0/fullcalendar/lib/jquery.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url();?>assets/lib/fullcalendar-3.9.0/fullcalendar/lib/jquery.ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/premium.css">
    <link rel='stylesheet' type='text/css' href="<?php echo base_url();?>assets/lib/fullcalendar-3.9.0/fullcalendar/fullcalendar.css" />
    <!--    <link rel='stylesheet' type='text/css' href="<?php echo base_url();?>assets/lib/fullcalendar-3.9.0/fullcalendar/fullcalendar.print.css" media='print' />-->
    <script type='text/javascript' src="<?php echo base_url();?>assets/lib/fullcalendar-3.9.0/fullcalendar/lib/moment.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url();?>assets/lib/fullcalendar-3.9.0/fullcalendar/fullcalendar.js"></script>



    <script type='text/javascript'>
        $(document).ready(function() {

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                }
            });
        });

    </script>
    <style type='text/css'>
        #calendar {
            width: 100%;
            margin: 0 auto;
        }

    </style>

</head>

<body class=" theme-blue">
    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if (match) var color = match[1];
            if (color) {
                $('body').removeClass(function(index, css) {
                    return (css.match(/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({
                html: true
            });

        });

    </script>
    <style type="text/css">
        #line-chart {
            height: 300px;
            width: 800px;
            margin: 0px auto;
            margin-top: 1em;
        }

        .navbar-default .navbar-brand,
        .navbar-default .navbar-brand:hover {
            color: #fff;
        }

    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });

    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">


    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
    <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->

    <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-plus"></span> NSMHCIS</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
            <ul id="main-menu" class="nav navbar-nav navbar-right">
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> Administrator
                    <i class="fa fa-caret-down"></i>
                </a>

                    <ul class="dropdown-menu">
                        <li><a href="./">My Account</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Admin Panel</li>
                        <li><a href="./">Users</a></li>
                        <li><a href="./">Security</a></li>
                        <li><a tabindex="-1" href="./">Payments</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>

    <div class="sidebar-nav">
        <ul>
            <li>
                <a href="<?php echo base_url();?>admin-dashboard/Admin" class="nav-header">
                    <i class="fa fa-fw fa-dashboard"></i> Main Dashboard
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>admin-dashboard/Admin/userlist" class="nav-header">
                    <i class="fa fa-fw fa-users"></i> View Accounts
                </a>
            </li>
            <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-edit"></i> Manage Requests<i class="fa fa-collapse"></i></a></li>
            <li>
                <ul class="dashboard-menu nav nav-list collapse in">
                    <li>
                        <a href="users.html">
                            <span class="fa fa-caret-right"></span> Baptismal
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <span class="fa fa-caret-right"></span> 
                            First Communion
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <span class="fa fa-caret-right"></span> 
                            First Confirmation
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <span class="fa fa-caret-right"></span> Wedding
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <span class="fa fa-caret-right"></span> 
                            Funeral Services
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="<?php echo base_url();?>admin-dashboard/Admin/calendar" class="nav-header">
                    <i class="fa fa-fw fa-calendar"></i> Calendar
                </a>
            </li>
            <li>
                <a href="help.html" class="nav-header">
                    <i class="fa fa-fw fa-question-circle"></i> Help
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        <div class="header">
            <div class="stats">
                <p class="stat"><span class="label label-info">10</span> Users</p>
                <p class="stat"><span class="label label-success">19</span> Events</p>
                <p class="stat"><span class="label label-danger">12</span> Calendars</p>
            </div>

            <h1 class="page-title">Calendar</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Calendar</li>
            </ul>

        </div>
        <div class="main-content">
            <div>
                <a href="#" class="btn btn-primary"><span class="fa fa-plus-square-o"></span> New Event</a>
            </div>
            <h3>Upcoming Events</h3>

            <div id="calendar">
            </div>
            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
            </footer>
        </div>
    </div>


    <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function() {
                return false;
            });
        });

    </script>


</body>

</html>
