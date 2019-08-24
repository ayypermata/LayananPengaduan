<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <?php echo $this->session->flashdata('message'); ?>

    <html>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Laporan Pengaduan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KATEGORI</th>
                            <th>JENIS PENGADUAN</th>
                            <th>DESKRIPSI</th>
                            <th>FOTO</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($lapordone as $d) : ?>
                        <td><?= $no++ ?></td>
                        <td><?= $d->kategori ?></td>
                        <td><?= $d->jenis ?></td>
                        <td><?= $d->deskripsi ?></td>
                        <td>
                            <span class="image-block img-hover">
                                <a class="image-zoom" href="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $d->image ?>" data-gal="prettyPhoto[gallery]">
                                    <img height="300" width="150" src="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $d->image ?>" class="img-fluid w3layouts agileits" alt="">
                                </a>
                            </span>
                        </td>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </html>