
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sistem Laundry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url('asset'); ?>/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" id="topnav">

                <!-- Top navbar -->
                <?php $this->load->view('Layout/header'); ?>
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Form Input Kasir</h4>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="POST" class="form-horizontal" role="form" action="<?php echo base_url('kasir/insertKasir'); ?>">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Kasir</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama Kasir" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea required class="form-control" rows="5" name="alamat" placeholder="Alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">No Telepon</label>
                                                <div class="col-md-10">
                                                    <input required type="no_telp" name="no_telp" class="form-control" placeholder="No Telepon">
                                                </div>
                                            </div>

                                            <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                                <button type="reset" class="btn btn-info">Reset</button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                                    
                        

                    </div>
                    <!-- end container -->



                    <?php $this->load->view('Layout/footer'); ?>

                </div>
                <!-- End #page-right-content -->

                <div class="clearfix"></div>

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery.app.js"></script>

    </body>
</html>