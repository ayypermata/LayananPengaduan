<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                <?php echo $title; ?>
            </h2>
        </div>
        <!-- Basic Examples -->
        <!-- <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <?php echo $title; ?>
                        </h2>
                    </div>
                </div>
                <?php if ($this->session->userdata('level_user') == 'Admin') { ?>
                        <?php
                        foreach ($data_tipe_soal as $row) { ?>
                                <div class="card">
                                    <div class="header">
                                        <div class="table-responsive">
                                            <h2>Presepsi Terhadap <?php echo $row->tipe_soal ?></h2>
                                            <hr>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Dimensi</th>
                                                        <th colspan="5">Kualitas</th>
                                                        <th rowspan="2">Total</th>
                                                    </tr>
                                                    <tr>
                                                        <th>5</th>
                                                        <th>4</th>
                                                        <th>3</th>
                                                        <th>2</th>
                                                        <th>1</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $_total_ = 0;
                                                    $var = $this->adminm->get_soal_tipe($row->id_tipe_soal);
                                                    foreach ($var as $row2) {
                                                        $jawaban5 = count_jawaban($row2->id_soal, 5);
                                                        $jawaban4 = count_jawaban($row2->id_soal, 4);
                                                        $jawaban3 = count_jawaban($row2->id_soal, 3);
                                                        $jawaban2 = count_jawaban($row2->id_soal, 2);
                                                        $jawaban1 = count_jawaban($row2->id_soal, 1);
                                                        $total = $jawaban1 + $jawaban2 + $jawaban3 + $jawaban4 + $jawaban5;
                                                        $total2 = ($jawaban1 * 1) + ($jawaban2 * 2) + ($jawaban3 * 3) + ($jawaban4 * 4) + ($jawaban5 * 5);
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $row2->soal ?></td>
                                                                <td><?php echo $jawaban5 ?></td>
                                                                <td><?php echo $jawaban4 ?></td>
                                                                <td><?php echo $jawaban3 ?></td>
                                                                <td><?php echo $jawaban2 ?></td>
                                                                <td><?php echo $jawaban1 ?></td>
                                                                <td><?php echo $total ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Nilai</b></td>
                                                                <td><b><?php echo $jawaban5 * 5 ?></b></td>
                                                                <td><b><?php echo $jawaban4 * 4 ?></b></td>
                                                                <td><b><?php echo $jawaban3 * 3 ?></b></td>
                                                                <td><b><?php echo $jawaban2 * 2 ?></b></td>
                                                                <td><b><?php echo $jawaban1 * 1 ?></b></td>
                                                                <td style="background: yellow"><b><?php echo convert_nilai($total2) ?></b></td>
                                                            </tr>
                                                            <?php
                                                            $_total_ += $total2;
                                                        }
                                                        ?>
                                                    <tr>
                                                        <td colspan="6">Jumlah Orang</td>
                                                        <td><?php echo $total ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6">Total Nilai</td>
                                                        <td><?php echo convert_total($_total_) ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                        <?php }
                        ?>
                <?php } else { ?> -->
            <div class="body">
                <div class="list-group">
                    <?php
                    foreach ($isi_Kuisi as $row) {
                        if ($row->status == 'Selesai' and $row->is_kuisioner == 'True') { ?>
                            <a href="<?php echo base_url('dashboardc/kuisioner/' . $row->id_laporan_selesai) ?>" style=" background: lightpink;" class="list-group-item">
                                <span class="badge bg-cyan">Isi Kuisioner Sekarang</span> Laporan Selesai <?php echo $row->tgl_selesai ?>
                            </a>
                        <?php } elseif ($row->status == 'Selesai' and $row->is_kuisioner == 'False') { ?>
                            <a href="#" style=" background: pink;" class="list-group-item">
                                Terimakasih telah mengisi kuisioner Pickup untuk tanggal <?php echo $row->tgl_selesai ?>
                            </a>
                        <?php }
                    }
                    ?>
                </div>
            </div>

        <?php } ?>
    </div>
    </div>
    <!-- #END# Basic Examples -->
    </div>
</section>