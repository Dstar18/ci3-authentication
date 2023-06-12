<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
        <title>Register</title>
    </head>

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="<?=base_url()?>"><b>Authentication &</b> OAuth2</a>
            </div>

            <!-- Message response -->
            <?php
            if(isset($message->error)){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <a><i class="icon fas fa-ban"></i> Error! - <?=$message->error?></a>
                </div>
            <?php } ?>
            <?php
            if(isset($message->result)){ ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <a><i class="icon fas fa-check"></i> <?=$message->result?></a>
                </div>
            <?php } ?>
            <!-- /Message response -->
            
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new membership</p>
                    <form action="<?=base_url('Register/insert')?>" method="post">

                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?php if(form_error('firstname')){?>is-invalid<?php }?>" name="firstname" placeholder="Firstname" <?php if(validation_errors() || isset($message->error)){ ?>value="<?= set_value('firstname')?>"<?php }?>>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger"><?php echo form_error('firstname');?></small>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?php if(form_error('lastname')){?>is-invalid<?php }?>" name="lastname" placeholder="Lastname" <?php if(validation_errors() || isset($message->error)){ ?>value="<?= set_value('lastname')?>"<?php }?>>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger"><?php echo form_error('lastname');?></small>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?php if(form_error('email')){?>is-invalid<?php }?>" name="email" placeholder="Email" <?php if(validation_errors() || isset($message->error)){ ?>value="<?= set_value('email')?>"<?php }?>>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger"><?php echo form_error('email');?></small>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?php if(form_error('username')){?>is-invalid<?php }?>" name="username" placeholder="Username" <?php if(validation_errors() || isset($message->error)){ ?>value="<?= set_value('username')?>"<?php }?>>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger"><?php echo form_error('username');?></small>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?php if(form_error('password')){?>is-invalid<?php }?>" name="password" placeholder="Password" <?php if(validation_errors() || isset($message->error)){ ?>value="<?= set_value('password')?>"<?php }?>>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger"><?php echo form_error('password');?></small>

                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                    <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="<?=$this->userlogin->register_oauth2_google()['urlOauth2']?>" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign up using Google+
                        </a>
                    </div>
                    <p class="mb-0">
                        <a href="<?=base_url('Login')?>" class="text-center">I already have a membership</a>
                    </p>
                </div>
            </div>
        </div>
      <!-- JS -->
      <?php $this->load->view('_partials/js.php');?>
      <!-- /JS -->
    </body>
</html>