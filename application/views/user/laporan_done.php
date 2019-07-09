<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">LAPORAN SELESAI (USER)</h1>

    <?php echo $this->session->flashdata('message'); ?>

    <html>

    <div class="panel-body">
        <div class="table-responsive">
            <table id="laporanaduan" class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>JENIS PENGADUAN</th>
                        <th>DESKRIPSI</th>
                        <th>FOTO</th>
                        <th>BALASAN ADMIN</th>
                        <th>TGL BALAS</th>
                        <th>STATUS</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($lapordone as $d) : ?>
                        <td><?= $no++ ?></td>
                        <td><?= $d->jenis ?></td>
                        <td><?= $d->deskripsi ?></td>
                        <td>
                            <span class="image-block img-hover">
                                <a class="image-zoom" href="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $d->image ?>" data-gal="prettyPhoto[gallery]">
                                    <img height="300" width="150" src="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $d->image ?>" class="img-fluid w3layouts agileits" alt="">
                                </a>
                            </span>
                        </td>
                        <td><?= $d->balasan ?></td>
                        <td><?= $d->tgl_updateadmin ?></td>
                        <td><?= $d->status ?></td>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    </html>