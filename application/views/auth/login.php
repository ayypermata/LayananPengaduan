<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">LAYANAN PENGADUAN PT.POS INDONESIA</h1>
                            <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                        </div>
                        <?php echo $this->session->flashdata('message'); ?>
                        <form class="user" method="post" action="<?php echo base_url('auth'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?php echo set_value('email'); ?>">
                                <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="summit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                        </form>
                        <hr>

                        <div class="text-center">
                            <a class="small" href="<?php echo base_url('auth/registration'); ?>">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.backstretch.min.js') ?>"></script>
    <script>
        $.backstretch("<?php echo base_url('assets/img/background.jpg') ?>", {
            speed: 500
        });
    </script>