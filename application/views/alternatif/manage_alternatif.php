<!-- MAIN CONTENT  -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="container">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Edit Data Alternatif</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
                            <thead>
                                <tr>
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
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>