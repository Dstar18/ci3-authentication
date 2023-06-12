<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
        <title>Authentication | Log in</title>
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?=base_url()?>"><b>Authentication &</b> OAuth2</a>
            </div>

            <!-- Message -->
            <?php
            if($message){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dsimis="alert" aria-hidden="ture">&times;</button>
                    <a><i class="icon fas fa-ban"></i> <?php echo $message; ?></a>
                </div>
            <?php } ?>
            <!-- /Message -->
            
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form action="<?=base_url('Login/auth')?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </form>
                    <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="<?=$this->userlogin->oauth2_google()['urlOauth2']?>" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div>
                    <p class="mb-0">
                        <a href="<?=base_url('Register')?>" class="text-center">Register a new membership</a>
                    </p>
                </div>
            </div>
        </div>
      <!-- JS -->
      <?php $this->load->view('_partials/js.php');?>
      <!-- /JS -->
    </body>
</html>