<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php echo $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-8">

            <form class="user" method="post" action="<?php base_url('user/lapor'); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" value="<?php echo set_value('kategori'); ?>">>
                        <option value="">== Pilih Kategori ==</option>
                        <option value="Pengaduan">Pengaduan</option>
                        <option value="Kritik">Kritik</option>
                        <option value="Saran">Saran</option>
                    </select>
                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="col-sm-10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Pengaduan</label>
                    <select class="form-control" id="jenis" name="jenis" value="<?php echo set_value('jenis'); ?>">>
                        <option value="">== Pilih Jenis Pengaduan ==</option>
                        <option value="Belum Diterima">Belum Diterima</option>
                        <option value="Kehilangan">Kehilangan</option>
                        <option value="Terlambat">Keterlambatan</option>
                        <option value="Tidak Utuh">Kiriman Tidak Utuh</option>
                        <option value="Pengembalian">Pengembalian</option>
                        <option value="Layanan Pos">Layanan Pos</option>
                        <option value="Lainnya">Lainnya..</option>
                    </select>
                    <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="col-sm-10">
                    </div>
                </div>
                </select>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Pengaduan</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" value="<?php echo set_value('deskripsi'); ?>" rows="8"></textarea>
                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">Sisipkan gambar</div>
                    <?php echo form_open_multipart('user/upload'); ?>
                    <div class="form-group col-md-6">
                        <input type="file" name="gambar" />
                    </div>
                </div>
        </div>

        <button type="summit" class="btn btn-primary btn-user btn-block" value="upload">
            Laporkan Pengaduan
        </button>
    </div>

    <br>
    <br>
    <li><a href="https://api.whatsapp.com/send?phone=+6287737992577&text=Haloo%20:)%20">Contact Admin : 082347723555</a></li>


</div>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<!-- End of Main Content -->