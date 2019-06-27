    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>

        <!-- Card Title Profile -->

        <?php echo $this->session->flashdata('message'); ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name']; ?></h5>
                        <p class="card-text"><?= $user['email'];  ?></p>
                        <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_create']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h2 class="h3 mb-4 text-gray-800">Whastapp Admin<br>

            <a href="https://api.whatsapp.com/send?phone=6287737992577&text=&source=&data=">Admin +6287737992577</a>
        </h2>


    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->