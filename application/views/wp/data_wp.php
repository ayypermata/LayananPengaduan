<!-- MAIN CONTENT  -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-user"></i> <?php echo $header; ?></h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-user"></i> Data Nilai Alternatif</h4>
                    <?php
                    $message = $this->session->flashdata('notif');
                    if ($message) {

                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                    } ?>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
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
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-user"></i> Data bobot kriteria pensiun</h4>
                    <?php
                    $message = $this->session->flashdata('notif');
                    if ($message) {

                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                    } ?>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
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
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-user"></i> Vektor S</h4>
                    <?php
                    $message = $this->session->flashdata('notif');
                    if ($message) {

                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                    } ?>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
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
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-user"></i> Vektor V</h4>
                    <?php
                    $message = $this->session->flashdata('notif');
                    if ($message) {

                        echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
                    } ?>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
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
<!-- /MAIN CONTENT -->

<!--main content end-->
<?php
foreach ($data_alternatif as $row) {
    foreach ($data_kriteria as $row2) {
        ?>
        <!-- Modal -->
        <div id="myModal<?php echo $row->id_alternatif; ?>-<?php echo $row2->id_kriteria; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <form method="post" action="<?php echo site_url('wpc/prosses_nilai') ?>">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Nilai <?php echo $row->nm_alternatif; ?> - <?php echo $row2->nm_kriteria; ?></h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id_alternatif" value="<?php echo $row->id_alternatif; ?>"></input>
                            <input type="hidden" name="id_kriteria" value="<?php echo $row2->id_kriteria; ?>"></input>
                            <select class="form-control round-form" name="id_sub_kriteria" required>
                                <?php echo option_sub_kriteria($row->id_alternatif, $row2->id_kriteria); ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-defaul">Simpan</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php }
}
?>