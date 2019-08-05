<!-- MAIN CONTENT  -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-user"></i> <?php echo $header; ?></h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-user"></i> <?php echo $header_title; ?></h4>
                    <?php
                    $message = $this->session->flashdata('notif');
                    if ($message) {

                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                    } ?>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="false" data-select-item-name="toolbar1" data-pagination="false" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-sortable="true">No</th>
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Kode</th>
                                <th data-sortable="true">Kriteria</th>
                                <th data-sortable="true">Bobot</th>
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
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> <?php echo $header_title; ?></h4>
                    <form method="post" class="form-horizontal style-form" action="<?php echo site_url('kriteriac/prosses_sub_kriteria') ?>">
                        <?php if (isset($id)) { ?>
                            <input name="id_kriteria" type="hidden" class="form-control round-form" value="<?php echo $this->uri->segment(3); ?>" readonly>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                <div class="col-sm-10">
                                    <input name="id_sub_kriteria" type="text" class="form-control round-form" value="<?php echo $id; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Sub Kriteria</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nm_sub_kriteria" class="form-control round-form" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Bobot</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bobot_sub_kriteria" class="form-control round-form" required>
                                </div>
                            </div>
                        <?php } else { ?>
                            <?php
                            if (isset($detail_sub_kriteria)) {
                                foreach ($detail_sub_kriteria as $row) {
                                    ?>
                                    <input name="id_kriteria" type="hidden" class="form-control round-form" value="<?php echo $this->uri->segment(3); ?>" readonly>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                        <div class="col-sm-10">
                                            <input name="id" type="text" class="form-control round-form" value="<?php echo $row->id_sub_kriteria; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Sub Kriteria</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nm_sub_kriteria" class="form-control round-form" value="<?php echo $row->nm_sub_kriteria; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Bobot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="bobot_sub_kriteria" class="form-control round-form" value="<?php echo $row->bobot_sub_kriteria; ?>" required>
                                        </div>
                                    </div>
                                <?php }
                            }
                            ?>
                        <?php } ?>
                        <div align="center">
                            <button type="submit" class="btn btn-theme">Simpan</button>
                            <a href="<?php echo base_url('kriteriac/data_kriteria') ?>" type="button" class="btn btn-theme">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-user"></i> <?php echo $header_title; ?></h4>
                    <?php
                    $message = $this->session->flashdata('notif');
                    if ($message) {

                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                    } ?>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-sortable="true">No</th>
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Sub Kriteria</th>
                                <th data-sortable="true">Bobot</th>
                                <th data-sortable="true">Perbaikan Bobot</th>
                                <th data-sortable="true">Bobot Global</th>
                                <th data-sortable="true">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if (isset($data_sub_kriteria)) {
                                foreach ($data_sub_kriteria as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->id_sub_kriteria; ?></td>
                                        <td><?php echo $row->nm_sub_kriteria; ?></td>
                                        <td><?php echo $row->bobot_sub_kriteria; ?></td>
                                        <td><?php echo total_bobot_sub_kriteria($row->id_sub_kriteria, $row->id_kriteria); ?></td>
                                        <td><?php echo bobot_global_sub_kriteria($row->id_sub_kriteria, $row->id_kriteria); ?></td>
                                        <td>
                                            <a href="<?php echo site_url('kriteriac/sub_kriteria/' . $row->id_kriteria . '/' . $row->id_sub_kriteria); ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                                            </a>

                                            <a href="<?php echo site_url('kriteriac/proses_hapus_sub_kriteria/' . $row->id_kriteria . '/' . $row->id_sub_kriteria); ?>" class="btn btn-default btn-xs" onclick="return confirm('Yakin ingin menghapus data ? ')"> <i class="fa fa-trash-o"></i> Hapus
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
    </section>
    <!-- wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->