<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css">
<script type="text/javascript" src="assets/DataTables/datatables.min.js"> </script>
<!-- Begin Page Content <?= anchor('admin/index/' . $user['id'] . '', '<i class="fa fa-reply" aria-hidden="true"></i>', 'class="btn btn-sm btn-warning"'); ?> <a href="#myModal" class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</span></td>
-->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php echo $this->session->flashdata('message'); ?>

    <a href="<?php echo base_url(); ?>index.php/admin/cetak" target=" _blank"><button class="btn btn-primary btn-user"><i class="fa fa-print"></i>Cetak Laporan</button></a>
    </button>

    <p>
        <div class="row" id="plugin_datatable">
            <table id="data_aduan" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>JENIS PENGADUAN</th>
                        <th>DESKRIPSI</th>
                        <th>FOTO</th>
                        <th>BALASAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($laporpeng as $l) {
                        ?>
                        <td><?= $no++ ?></td>
                        <td><?= $l->jenis ?></td>
                        <td><?= $l->deskripsi ?></td>
                        <td> <span class="image-block img-hover">
                                <a class="image-zoom" href="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" data-gal="prettyPhoto[gallery]">
                                    <img height="300" width="150" src="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" class="img-fluid w3layouts agileits" alt="">
                                </a>
                        <td><?= $l->balasan ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/responPengaduan/<?php echo $l->id; ?>">
                                <input type="button" value="Edit" class="tombol small gray"></a>
                            <a href="<?php echo base_url(); ?>/admin/delete/<?php echo $l->id; ?>" onclick="return confirm('Anda yakin Ingin menghapus Data ?')">
                                <input type="button" value="Hapus" class="tombol small gray"></a> </td>
                        </tr>
                    <?php } ?>
            </table>
            </form>
        </div>


        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css" />

        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript">
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

            <
            script type = ”text / javascript” >

                $(document).ready(function()

                    {

                        $(‘#myTable’).DataTable();

                    });
        </script>
        <!-- End of Main Content -->