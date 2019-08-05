<!-- MAIN CONTENT  -->
<!--main content start-->
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
            <a href="<?php echo site_url('alternatifc/manage_alternatif'); ?>" class="btn btn-default btn-round"> <i class="fa fa-plus-circle"></i> Tambah
            </a>

        </div>

        <div class="panel-body">
            <div class="table-responsive">
                <table id="laporanaduan" class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Alternatif</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        if (isset($data_alternatif)) {
                            foreach ($data_alternatif as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->id_alternatif; ?></td>
                                    <td><?php echo $row->nm_alternatif; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('alternatifc/manage_alternatif/' . $row->id_alternatif); ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                                        </a>

                                        <a href="<?php echo site_url('alternatifc/proses_hapus_alternatif/' . $row->id_alternatif); ?>" class="btn btn-default btn-xs" onclick="return confirm('Yakin ingin menghapus data ? ')"> <i class="fa fa-trash-o"></i> Hapus
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
    <!-- </section>

        <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
            <thead>
                <tr>
                    <th data-sortable="true">No</th>
                    <th data-sortable="true">ID</th>
                    <th data-sortable="true">Alternatif</th>
                    <th data-sortable="true">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if (isset($data_alternatif)) {
                    foreach ($data_alternatif as $row) {
                        ?>
                                                                        <tr>
                                                                            <td><?php echo $no++; ?></td>
                                                                            <td><?php echo $row->id_alternatif; ?></td>
                                                                            <td><?php echo $row->nm_alternatif; ?></td>
                                                                            <td>
                                                                                <a href="<?php echo site_url('alternatifc/manage_alternatif/' . $row->id_alternatif); ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                                                                                </a>

                                                                                <a href="<?php echo site_url('alternatifc/proses_hapus_alternatif/' . $row->id_alternatif); ?>" class="btn btn-default btn-xs" onclick="return confirm('Yakin ingin menghapus data ? ')"> <i class="fa fa-trash-o"></i> Hapus
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

</section> -->
    <!-- wrapper -->
</section>
<!-- /MAIN CONTENT -->

<!--main content end-->