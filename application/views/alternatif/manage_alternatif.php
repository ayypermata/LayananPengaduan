<!-- MAIN CONTENT  -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-user"></i> Home</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> <?php echo $header_title; ?></h4>
                    <form method="post" class="form-horizontal style-form" action="<?php echo site_url('alternatifc/prosses_alternatif') ?>">
                        <?php if (isset($id)) { ?>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                <div class="col-sm-10">
                                    <input name="id_alternatif" type="text" class="form-control round-form" value="<?php echo $id; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Alternatif</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nm_alternatif" class="form-control round-form" required>
                                </div>
                            </div>
                        <?php } else { ?>
                            <?php
                            if (isset($data_alternatif)) {
                                foreach ($data_alternatif as $row) {
                                    ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                        <div class="col-sm-10">
                                            <input name="id" type="text" class="form-control round-form" value="<?php echo $row->id_alternatif; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Alternatif</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nm_alternatif" class="form-control round-form" value="<?php echo $row->nm_alternatif; ?>" required>
                                        </div>
                                    </div>
                                <?php }
                            }
                            ?>
                        <?php } ?>
                        <div align="center">
                            <button type="submit" class="btn btn-theme">Simpan</button>
                            <a href="<?php echo base_url('alternatifc/data_alternatif') ?>" type="button" class="btn btn-theme">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>