<!-- MAIN CONTENT  -->
<!--main content start-->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Edit Kriteria</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <h4 class="mb"><i class="fa fa-user"></i> <?php echo $header_title; ?></h4>
                                    <form method="post" class="form-horizontal style-form" action="<?php echo site_url('kriteriac/prosses_kriteria') ?>">
                                        <?php if (isset($id)) { ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                            <div class="col-sm-10">
                                                <input name="id_kriteria" type="text" class="form-control round-form" value="<?php echo $id; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kd_kriteria" class="form-control round-form" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kriteria</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nm_kriteria" class="form-control round-form" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Bobot</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="bobot_kriteria" class="form-control round-form" required>
                                            </div>
                                        </div>
                                        <?php } else { ?>
                                        <?php
                                            if (isset($data_kriteria)) {
                                                foreach ($data_kriteria as $row) {
                                                    ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                            <div class="col-sm-10">
                                                <input name="id" type="text" class="form-control round-form" value="<?php echo $row->id_kriteria; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kd_kriteria" class="form-control round-form" value="<?php echo $row->kd_kriteria; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kriteria</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nm_kriteria" class="form-control round-form" value="<?php echo $row->nm_kriteria; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Bobot</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="bobot_kriteria" class="form-control round-form" value="<?php echo $row->bobot_kriteria; ?>" required>
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
        </div>
    </div>
</section>