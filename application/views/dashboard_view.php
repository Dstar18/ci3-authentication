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
                                    <h5 class="lead"><b>Id User : <?=$user?></b></h5>
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