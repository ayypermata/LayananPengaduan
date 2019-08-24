<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <!-- Vertical Layout | With Floating Label -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary"> <?php echo $header_title; ?></h4>
                </div>
                <div class="container-fluid">
                    <div class="block-header">
                        <form method="post" action="<?php echo site_url('laporanc/data_laporan'); ?>">
                            <div class="form-group form-float">
                                <div class="form-line">
                                </div>
                                </br>
                                <select class="form-control" name="status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Belum Diproses">Belum Diproses</option>
                                    <option value="Sedang Diproses">Sedang Diproses</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Batal">Batal</option>
                                </select>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Cari</button>
                    <br> </br>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary"> <?php echo $form_title; ?></h4>
                </div>
                <div class="card-body">
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <button a onclick="printDiv('printableArea')" class="btn btn-primary m-t-15 waves-effect">Print Laporan</a></button>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Kategori</th>
                                    <th>Jenis</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (isset($data_laporan)) {
                                    foreach ($data_laporan as $row) {
                                        ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->kategori; ?></td>
                                    <td><?php echo $row->jenis; ?></td>
                                    <td><?php echo $row->date_create; ?></td>
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
</section>



<div id="printableArea" class="visibility">
    <div align="center">
        <h3>Laporan Pengaduan</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered" id="laporanaduan" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if (isset($data_laporan)) {
                    foreach ($data_laporan as $row) {
                        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->kategori; ?></td>
                    <td><?php echo $row->jenis; ?></td>
                    <td><?php echo $row->status; ?></td>
                    <td><?php echo $row->date_create; ?></td>
                </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
<style type="text/css">
    .visibility {
        border: 1px solid #000;
        visibility: hidden;
    }
</style>