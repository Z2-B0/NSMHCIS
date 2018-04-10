<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NSMHCIS | Parishioner</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/premium.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.timepicker.min.css">

    <style>
        #signup-step {
            margin: auto;
            padding: 0;
            width: 53%
        }

        #signup-step li {
            list-style: none;
            float: left;
            padding: 5px 10px;
            border-top: #004C9C 1px solid;
            border-left: #004C9C 1px solid;
            border-right: #004C9C 1px solid;
            border-radius: 5px 5px 0 0;
        }

        .active {
            color: #FFF;
        }

        #signup-step li.active {
            background-color: #004C9C;
        }

        #signup-form {
            clear: both;
            border: 1px #004C9C solid;
            padding: 20px;
            width: 50%;
            margin: auto;
        }

        .btnAction {
            padding: 5px 10px;
            background-color: #F00;
            border: 0;
            color: #FFF;
            cursor: pointer;
            margin-top: 15px;
        }

        label {
            line-height: 35px;
        }

    </style>
</head>

<body class="theme-blue">
    <?php
        $user = $this->session->userdata('user');
        extract($user);
    ?>


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
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>User
                    <i class="fa fa-caret-down"></i>
                </a>

                        <ul class="dropdown-menu">
                            <li><a href="./">My Account</a></li>
                            <li class="divider"></li>
                            <!--
                            <li class="dropdown-header">Admin Panel</li>
                            <li><a href="./">Users</a></li>
                            <li><a href="./">Security</a></li>
                            <li><a tabindex="-1" href="./">Payments</a></li>
-->
                            <!--<li class="divider"></li>-->
                            <li><a tabindex="-1" href="<?php echo base_url();?>login/User/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>

        <div class="sidebar-nav">
            <ul>
                <li>
                    <a href="<?php echo base_url();?>parishioners/Parishioners" class="nav-header">
                        <i class="fa fa-fw fa-dashboard"></i>Baptism
                    </a>
                </li>
                <li>
                    <a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">
                        <i class="fa fa-fw fa-edit">
                        </i> Request for Service
                        <i class="fa fa-collapse"></i>
                    </a>
                </li>
                <li>
                    <ul class="dashboard-menu nav nav-list collapse in">
                        <li>
                            <a href="users.html">
                                <span class="fa fa-caret-right">
                                </span> 
                                Baptismal
                            </a>
                        </li>
                        <li>
                            <a href="user.html">
                                <span class="fa fa-caret-right">
                                </span> 
                                First Communion
                            </a>
                        </li>
                        <li>
                            <a href="media.html">
                                <span class="fa fa-caret-right">
                                </span> 
                                First Confirmation
                            </a>
                        </li>
                        <li>
                            <a href="media.html">
                                <span class="fa fa-caret-right">
                                </span> Wedding
                            </a>
                        </li>
                        <li>
                            <a href="media.html">
                                <span class="fa fa-caret-right">
                                </span> 
                            Funeral Services
                        </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-header">
                        <i class="fa fa-fw fa-user"></i> My Requests
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-header">
                        <i class="fa fa-fw fa-list">
                        </i> View All Events
                    </a>
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
                <!--
                <div class="stats">
                    <p class="stat">Latest Request Stats</p>
                    <p class="stat"><span class="label label-primary">2</span> Baptism</p>
                    <p class="stat"><span class="label label-info">1</span> First Communion</p>
                    <p class="stat"><span class="label label-success">2</span> First Confirmation</p>
                    <p class="stat"><span class="label label-danger">0</span> Weddings</p>
                    <p class="stat"><span class="label label-warning">2</span> Funeral Service</p>
                </div>
-->

                <h1 class="page-title">Baptism Service</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>admin-dashboard/Admin">Home</a> </li>
                    <li>Dashboard</li>
                    <li>Baptism Service</li>
                </ul>

            </div>
            <div class="main-content">
                <div class="row v-center">
                    <ul id="signup-step" style="display:none;">
                        <li id="reservation" class="active">Reservation</li>
                        <li id="baptism_info">Baptism Information</li>
                        <li id="sponsor">Sponsor</li>
                    </ul>
                    <form method="POST" action="<?php echo base_url();?>parishioners/Baptism/func_insert">
                        <div id="reservation-field">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <table class="table table-borderless">
                                    <thead>
                                        <th style="color:red;">Please fill in the fields.</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>Attendants</label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select name="txtattendant" class="form-control input-sm">
                                                    <option value="Company">Company</option>
                                                    <option value="Family">Family</option>
                                                    <option value="Organization">Organization</option>
                                                    <option value="School">School</option>
                                                </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Name of </label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <span id="txtattendantname-error"></span>
                                                    <input type="text" name="txtattendantname" id="txtattendantname" class="form-control input-sm" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Date</label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="date" name="txtdate" class="input-sm form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Time Start</label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input name="txttimes" type="text" class="form-control input-sm timepicker" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Time End</label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input name="txttimee" type="text" class="form-control input-sm timepicker" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Description</label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="txtdescription" class="form-control input-sm" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Person to Contact</label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="txtpersontocontact" class="form-control input-sm" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Contact Number</label><label style="color:red;">*</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="txtpersontocontactno" class="form-control input-sm" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" name="submit" value="Submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!--
                    <div id="baptism_info-field" style="display:none;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="table table-borderless">
                                <thead>
                                    <th style="color:red;">Please fill in the fields.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label>Child Name</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        First Name
                                                        <input type="text" name="child_fn" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Middle Name
                                                        <input type="text" name="child_mn" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Last Name
                                                        <input type="text" name="child_ln" class="form-control input-sm" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Birthday &amp; Age</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        Date
                                                        <input type="date" name="child_bday" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-2">
                                                        Age
                                                        <input type="text" name="child_age" class="form-control input-sm" readonly/>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Gender &amp; Birth Place</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        Gender
                                                        <select name="child_gender" class="form-control input-sm">
                                                            <option value="F">Female</option>
                                                            <option value="M">Male</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        Place of Birth
                                                        <input type="text" name="child_pob" class="form-control input-sm" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Mother's Information</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-13">
                                                        <div class="col-lg-4">
                                                            Mother's First Name
                                                            <input type="text" name="mom_fn" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Mother's Middle Name
                                                            <input type="text" name="mom_mn" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Mother's Last Name
                                                            <input type="text" name="mom_ln" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Mother's Birth Place
                                                            <input type="text" name="mom_pob" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Mother's Religion
                                                            <input type="text" name="mom_rel" class="form-control input-sm" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Father's Information</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-13">
                                                        <div class="col-lg-4">
                                                            Father's First Name
                                                            <input type="text" name="dad_fn" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Father's Middle Name
                                                            <input type="text" name="dad_mn" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Father's Last Name
                                                            <input type="text" name="dad_ln" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Father's Birth Place
                                                            <input type="text" name="dad_pob" class="form-control input-sm" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            Father's Religion
                                                            <input type="text" name="dad_rel" class="form-control input-sm" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Parents Marital Status</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="txtmaritalstatus" class="form-control input-sm" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Address</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="txtdaddress" class="form-control input-sm" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Person to Contact</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="txtpcontact" class="form-control input-sm" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Contact Number</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="txtpcontactno" class="form-control input-sm" />
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-dark">Back</button>
                            <button type="submit" class="btn btn-info">Next</button>

                        </div>
                    </div>


                    <div id="sponsor-field" style="display:none;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="table table-borderless">
                                <thead>
                                    <th style="color:red;">Please fill in the fields.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label>Sponsor #1</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        Sponsor's Name
                                                        <input type="text" name="sp1_name" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Sponsor's Address
                                                        <input type="text" name="sp1_addr" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Sponsor's Place of Birth
                                                        <input type="text" name="sp1_pob" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Sponsor's Religion
                                                        <input type="text" name="sp1_rel" class="form-control input-sm" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Sponsor #2</label><label style="color:red;">*</label>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        Sponsor's Name
                                                        <input type="text" name="sp2_name" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Sponsor's Address
                                                        <input type="text" name="sp2_addr" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Sponsor's Place of Birth
                                                        <input type="text" name="sp2_pob" class="form-control input-sm" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        Sponsor's Religion
                                                        <input type="text" name="sp2_rel" class="form-control input-sm" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <input class="btn btn-info" type="button" name="back" id="back" value="Back" style="display:none;">
                        <input class="btn btn-info" type="button" name="next" id="next" value="Next">
                        <input class="btn btn-primary" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
                    </div>
-->
                </div>
                <footer>
                    <hr>

                    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                    <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                    <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                </footer>

            </div>
        </div>


        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.timepicker.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('input.timepicker').timepicker({});
            });

            $('.timepicker').timepicker({
                timeFormat: 'h:mm p',
                interval: 15,
                minTime: '10:00am',
                maxTime: '6:00pm',
                defaultTime: '10:00am',
                startTime: '10:00am',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });

            function validate() {
                let output = true;

                //            if ($("#reservation").css('display') != 'none') {
                //                if (!($("#txtattendantname").val())) {
                //                    output = false;
                //                    $("#txtattendantname-error").html("Attendants identity required.");
                //                } else {
                //                    $("#txtattendantname-error").html("");
                //                }

                return output;
                //}
            }

            $(document).ready(function() {
                $("#next").click(function() {
                    let output = validate();
                    if (output === true) {
                        var current = $(".active");
                        var next = $(".active").next("li");
                        if (next.length > 0) {
                            $("#" + current.attr("id") + "-field").hide();
                            $("#" + next.attr("id") + "-field").show();
                            $("#back").show();
                            $("#finish").hide();
                            $(".active").removeClass("active");
                            next.addClass("active");

                            if ($(".active").attr("id") == $("li").last().attr("id")) {
                                $("#next").hide();
                                $("#finish").show();
                            }
                        }
                    }
                });


                $("#back").click(function() {
                    var current = $(".active");
                    var prev = $(".active").prev("li");
                    if (prev.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + prev.attr("id") + "-field").show();
                        $("#next").show();
                        $("#finish").hide();
                        $(".active").removeClass("active");
                        prev.addClass("active");
                        if ($(".active").attr("id") == $("li").first().attr("id")) {
                            $("#back").hide();
                        }
                    }
                });

                $("input#finish").click(function(e) {
                    let output = validate();
                    var current = $(".active");

                    if (output === true) {
                        return true;
                    } else {
                        //prevent refresh
                        e.preventDefault();
                        $("#" + current.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").show();
                    }
                });
            });

            $(function() {
                var uls = $('.sidebar-nav > ul > *').clone();
                uls.addClass('visible-xs');
                $('#main-menu').append(uls.clone());
            });

        </script>

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
