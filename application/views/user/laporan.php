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
                            <th>BALASAN ADMIN</th>
                            <th>TGL BALASAN ADMIN</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($laporpeng as $l) : ?>
                        <td><?= $no++ ?></td>
                        <td><?= $l->kategori ?></td>
                        <td><?= $l->jenis ?></td>
                        <td><?= $l->deskripsi ?></td>
                        <td>
                            <span class="image-block img-hover">
                                <a class="image-zoom" href="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" data-gal="prettyPhoto[gallery]">
                                    <img height="300" width="150" src="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" class="img-fluid w3layouts agileits" alt="">
                                </a>
                            </span>
                        </td>
                        <td><?= $l->balasan ?></td>
                        <td><?= $l->tgl_updateadmin ?></td>
                        <td><?= $l->status ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>user/responuser/<?php echo $l->id; ?>">
                                <input type="button" value="Edit" class="tombol small gray"></a>
                            <a href="<?php echo base_url(); ?>/admin/done/<?php echo $l->id; ?>"><button class="tombol small gray">Selesai</button></a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </html>