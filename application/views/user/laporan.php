<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
                        <th>AKSI</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($laporpeng as $l) : ?>
                        <td><?= $no++ ?></td>
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
                            <!-- <a href="<?php echo base_url(); ?>/admin/delete/<?php echo $l->id; ?>" onclick="return confirm('Anda yakin Ingin menghapus Data ?')">
                                                                <input type="button" value="Hapus" class="tombol small gray"></a> -->
                            <a href="<?php echo base_url(); ?>/admin/done/<?php echo $l->id; ?>"><button class="tombol small gray">Selesai</button></a>

                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    </html>