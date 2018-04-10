<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login | National Shrine of Mary Help of Christians</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 margin-top">
                <div class="login-panel panel">
                    <div class="panel-body">
                        <div class="panel-heading" style="color:black!important;">
                            <img src="<?php echo base_url();?>assets/images/maryhelplogo.jpg" style="border-radius:100%; height:100px; width:100px; display: block; margin:auto; border:1px solid #babfc6;" class="v-center">
                            <h3 class="text-center"><i class="fas fa-lock"></i> Welcome
                            </h3>
                            <p class="text-center">Login to the System</p>
                        </div>
                        <div class="container-fluid panel-body">
                            <?php echo form_open('login/User/login');?>
                            <div class="container-fluid">
                                <div class="form-group">
                                    <input class="form-control input-sm" placeholder="Username" type="text" name="username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-sm" placeholder="Password" type="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="fas fa-sign-in-alt"></span> Submit</button>
                                <a class="btn btn-lg btn-info btn-block" href="<?php echo base_url();?>home-page/Main"><span class="fas fa-sign-in-alt"></span> Back</a>
                            </div>
                            <?php echo form_close();?>
                        </div>
                        <?php
				        if($this->session->flashdata('error')){
					?>
                            <div class="alert alert-danger text-center">
                                <?php echo $this->session->flashdata('error'); ?>
                                <?php
				        }
			         ?>
                            </div>
                    </div>
                </div>
                <?php
				if($this->session->flashdata('error')){
					?>
                <div class="alert alert-danger text-center" style="margin-top:20px;">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php
				}
			?>
            </div>
        </div>
    </div>
</body>

</html>
