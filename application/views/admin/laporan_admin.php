<div class="container-fluid">

    <!-- Page Heading -->
    <?php echo $this->session->flashdata('message'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary"><?= $title; ?></h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" data-show-refresh="true" id="laporanaduan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>KATEGORI</th>
                            <th>JENIS PENGADUAN</th>
                            <th>DESKRIPSI</th>
                            <th>FOTO</th>
                            <th>TGL PENGADUAN</th>
                            <th>BALASAN USER</th>
                            <th>TGL BALASAN USER</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($laporpeng as $l) {
                            ?>
                        <td><?= $no++ ?></td>
                        <td><?= $l->id_user ?></td>
                        <td><?= $l->kategori ?></td>
                        <td><?= $l->jenis ?></td>
                        <td><?= $l->deskripsi ?></td>
                        <td> <span class="image-block img-hover">
                                <a class="image-zoom" href="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" data-gal="prettyPhoto[gallery]">
                                    <img height="300" width="150" src="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" class="img-fluid w3layouts agileits" alt="">

                                </a>
                        <td><?= $l->date_create ?></td>
                        <td><?= $l->balasan_user ?></td>
                        <td><?= $l->tgl_updateuser ?></td>
                        <td><?= $l->status ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/responPengaduan/<?php echo $l->id; ?>">
                                <input type="button" value="Edit" class="tombol small gray"></a>
                            <a href="<?php echo base_url(); ?>/admin/delete/<?php echo $l->id; ?>" onclick="return confirm('Anda yakin Ingin menghapus Data ?')">
                                <input type="button" value="Hapus" class="tombol small gray"></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>