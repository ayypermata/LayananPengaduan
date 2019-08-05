<!-- MAIN CONTENT  -->
<!--main content start-->
<div class="container-fluid">
    <div class="card shadow mb-2">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data Nilai Alternatif</h4>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <?php
                        $message = $this->session->flashdata('notif');
                        if ($message) {
                            echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                        } ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="laporanaduan" class="table table-bordered table-hover" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true">No</th>
                                            <th data-sortable="true">Alternatif</th>
                                            <?php
                                            if (isset($data_kriteria)) {
                                                foreach ($data_kriteria as $row) {
                                                    ?>
                                                    <th data-sortable="true"><?php echo $row->nm_kriteria; ?></th>
                                                <?php }
                                            }
                                            ?>
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
                                                    <td><?php echo $row->nm_alternatif; ?></td>
                                                    <?php
                                                    if (isset($data_kriteria)) {
                                                        foreach ($data_kriteria as $row2) {
                                                            ?>
                                                            <td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $row->id_alternatif; ?>-<?php echo $row2->id_kriteria; ?>"><?php echo value_sub_kriteria($row->id_alternatif, $row2->id_kriteria); ?></a></td>
                                                        <?php }
                                                    }
                                                    ?>
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
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-2">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data bobot kriteria pengaduan</h4>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <?php
                                    $message = $this->session->flashdata('notif');
                                    if ($message) {
                                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                                    } ?>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="laporanaduan" class="table table-bordered table-hover" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th data-sortable="true">No</th>
                                                        <th data-sortable="true">Alternatif</th>
                                                        <?php
                                                        if (isset($data_kriteria)) {
                                                            foreach ($data_kriteria as $row) {
                                                                ?>
                                                                <th data-sortable="true"><?php echo $row->nm_kriteria; ?></th>
                                                            <?php }
                                                        }
                                                        ?>
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
                                                                <td><?php echo $row->nm_alternatif; ?></td>
                                                                <?php
                                                                if (isset($data_kriteria)) {
                                                                    foreach ($data_kriteria as $row2) {
                                                                        ?>
                                                                        <td><?php echo bobot_value_sub_kriteria($row->id_alternatif, $row2->id_kriteria); ?></td>
                                                                    <?php }
                                                                }
                                                                ?>
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
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-2">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Vektor S</h4>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <?php
                                    $message = $this->session->flashdata('notif');
                                    if ($message) {
                                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                                    } ?>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="laporanaduan" class="table table-bordered table-hover" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th data-sortable="true">No</th>
                                                        <th data-sortable="true">Alternatif</th>
                                                        <th data-sortable="true">Vektor S</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    $total = '';
                                                    if (isset($data_alternatif)) {
                                                        foreach ($data_alternatif as $row) {
                                                            $total += get_nilai_alternatif($row->id_alternatif);
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $no++; ?></td>
                                                                <td><?php echo $row->nm_alternatif; ?></td>
                                                                <td><?php echo get_nilai_alternatif($row->id_alternatif); ?></td>
                                                            </tr>
                                                        <?php }
                                                    }
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <th data-sortable="true"></th>
                                                    <th data-sortable="true">Total</th>
                                                    <th data-sortable="true"><?php echo $total; ?></th>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-2">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Vektor V</h4>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <?php
                                    $message = $this->session->flashdata('notif');
                                    if ($message) {
                                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                                    } ?>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="laporanaduan" class="table table-bordered table-hover" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th data-sortable="true">No</th>
                                                        <th data-sortable="true">Alternatif</th>
                                                        <th data-sortable="true">Vektor S</th>
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
                                                                <td><?php echo $row->nm_alternatif; ?></td>
                                                                <td><?php echo get_nilai_alternatif($row->id_alternatif) / $total; ?></td>
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
                            <!-- wrapper -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>