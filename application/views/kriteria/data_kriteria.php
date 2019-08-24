<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                <?php echo $header_title; ?>
            </h2>
        </div>

        <?php
        $message = $this->session->flashdata('notif');
        if ($message) {

            echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
        } ?>
        <div align="left">
            <a href="<?php echo site_url('kriteriac/manage_kriteria'); ?>" class="btn btn-default btn-round"> <i class="fa fa-plus-circle"></i> Tambah
            </a>

        </div>



        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Data Kriteria</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID</th>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot Kriteria</th>
                                <th>Perbaikan</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            if (isset($data_kriteria)) {
                                foreach ($data_kriteria as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->id_kriteria; ?></td>
                                        <td><?php echo $row->kd_kriteria; ?></td>
                                        <td><?php echo $row->nm_kriteria; ?></td>
                                        <td><?php echo $row->bobot_kriteria; ?></td>
                                        <td><?php echo total_bobot_kriteria($row->id_kriteria); ?></td>
                                        <td>
                                            <a href="<?php echo site_url('kriteriac/sub_kriteria/' . $row->id_kriteria); ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i>Sub
                                            </a>
                                            <a href="<?php echo site_url('kriteriac/manage_kriteria/' . $row->id_kriteria); ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                                            </a>

                                            <a href="<?php echo site_url('kriteriac/proses_hapus_kriteria/' . $row->id_kriteria); ?>" class="btn btn-default btn-xs" onclick="return confirm('Yakin ingin menghapus data ? ')"> <i class="fa fa-trash-o"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>