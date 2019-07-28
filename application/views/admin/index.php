    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">SELAMAT DATANG <?= $user['name']; ?></h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name']; ?></h5>
                        <p class="card-text"><?= $user['email'];  ?></p>
                        <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_create']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
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
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->