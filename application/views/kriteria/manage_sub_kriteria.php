<!-- MAIN CONTENT  -->
<!--main content start-->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <section id="main-content">
                <div class="container-fluid">
                    <section class="wrapper site-min-height">
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <?php
                                    $message = $this->session->flashdata('notif');
                                    if ($message) {
                                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                                    } ?>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h4 class="m-0 font-weight-bold text-primary">Data Kriteria</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
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
                                </div>
                            </div>
                        </div>

                    </section>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary"><?php echo $header_title; ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
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
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <?php
                        $message = $this->session->flashdata('notif');
                        if ($message) {

                            echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                        } ?>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary"><?php echo $header_title; ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
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
                </div>
            </div>


            <!-- /MAIN CONTENT -->
            <!--main content end-->