<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NSMHCIS | Accounts</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css">
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/premium.css">

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
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> Administrators
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
                <a href="<?php echo site_url('admin-dashboard/Admin/userlist');?>" class="nav-header">
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

            <h1 class="page-title">Accounts</h1>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url();?>admin-dashboard/Admin">Home</a> </li>
                <li class="active">Accounts</li>
            </ul>

        </div>
        <div class="main-content">
            <div class="btn-toolbar list-toolbar">
                <a class="btn btn-primary" href="#"><i class="fa fa-plus"></i> New User</a>
                <a class="btn btn-default" href="#"><i class="fa fa-print"></i> Create Report</a>
                <!--
                <button class="btn btn-default">Import</button>
                <button class="btn btn-default">Export</button>
-->
                <div class="btn-group">
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                        <th style="width: 3.5em;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark Tompson</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View Account</a>
                            <a href="user.html" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit Account</a>
                            <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ashley Madel</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View Account</a>
                            <a href="user.html" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit Account</a>
                            <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Audrey Ann</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View Account</a>
                            <a href="user.html" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit Account</a>
                            <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>John Mayer</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View Account</a>
                            <a href="user.html" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit Account</a>
                            <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Aaron Haul</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View Account</a>
                            <a href="user.html" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit Account</a>
                            <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Chris Albert</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View Account</a>
                            <a href="user.html" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit Account</a>
                            <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove Account</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>

            <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Delete Confirmation</h3>
                        </div>
                        <div class="modal-body">
                            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?<br>This cannot be undone.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
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
