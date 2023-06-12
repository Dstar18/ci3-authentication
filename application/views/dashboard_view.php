<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
    </head>
    <body>
        <div class="container p-3 my-3 border">
            <section class="content">
                <a href="<?=base_url('Login/logout')?>" class="btn btn-sm" title="Log out">
                    <i class="nav-icon fa fa-sign-out-alt"></i> Log Out
                </a> 
            </section>
            <div class="tab-content my-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-proposal" role="tabpanel" aria-labelledby="nav-proposal-tab">
                    <section class="content">
                        <div class="card">
                            <!-- Page Content -->
                            <div class="card-body">
                                <div class="col-12 text-center">
                                    <h5 class="lead"><b>Id User : <?=$user->iduser?></b></h5>
                                    <h5 class="lead"><b>Firstname : <?=$user->firstname?></b></h5>
                                    <h5 class="lead"><b>Lastname : <?=$user->lastname?></b></h5>
                                    <h5 class="lead"><b>Email : <?=$user->email?></b></h5>
                                    <h5 class="lead"><b>Role User : <?=$user->role?></b></h5>
                                    <h5 class="lead"><b>Username : <?=$user->username?></b></h5>
                                    <h5 class="lead"><b>Password : <?=$user->password?></b></h5>
                                    <h5 class="lead"><b>Created at : <?=$user->created_at?></b></h5>
                                    <h5 class="lead"><b>Session at : <?=$user->session_at?></b></h5>
                                </div>
                            </div>
                            <!-- /Page Content -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php $this->load->view('_partials/js.php');?>
        <!-- Modal -->
        </body>
</html>