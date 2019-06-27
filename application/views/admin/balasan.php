<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <?php echo $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/responPengaduan'); ?>
            <div class="form-group row">
                <label for="id_user" class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $lapor_aduan['id']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-sm-3 col-form-label">Jenis Pengaduan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $lapor_aduan['jenis']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi Pengaduan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $lapor_aduan['deskripsi']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Gambar</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-7">
                            <img src="<?= base_url('assets/img/upload_lapor/') . $lapor_aduan['image']; ?>" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="balasan" class="col-sm-3 col-form-label">Balasan</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="balasan" name="balasan" value="<?= $lapor_aduan['balasan']; ?>" rows="5"></textarea>
                    <?= form_error('balasan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>
        </div> <!-- /.container-fluid -->

    </div>
</div>
</div>
<!-- End of Main Content -->
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>