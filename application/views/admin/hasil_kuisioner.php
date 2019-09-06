<!-- Illustrations -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="container-fluid">
                <div class="card shadow mb-2">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary">Hasil Kuisioner</h4>
                    </div>
                    <div class="card-body">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <button a onclick="printDiv('printableArea')" class="btn btn-primary m-t-15 waves-effect">Print Laporan</a></button>
                            </li>
                        </ul>
                        <div class="text-center">
                            <div>
                                <?php
                                foreach ($data_tipe_soal as $row) { ?>
                                    <div class="card">
                                        <div class="header">
                                            <div class="table-responsive">
                                                <h5 class="m-0 font-weight-bold text-primary">Presepsi Terhadap <?php echo $row->tipe_soal ?></h5>
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
                                                                <td style="background: lightblue"><b><?php echo convert_nilai($total2) ?></b></td>
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
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="printableArea" class="visibility">
    <div align="center">
        <h3>Laporan Hasil Kuesioner</h3>
    </div>
    <div>
        <?php
        foreach ($data_tipe_soal as $row) { ?>
            <div class="card">
                <div class="header">
                    <div class="table-responsive">
                        <h5 class="m-0 font-weight-bold text-primary">Presepsi Terhadap <?php echo $row->tipe_soal ?></h5>
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
                                        <td style="background: lightblue"><b><?php echo convert_nilai($total2) ?></b></td>
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
        <?php } ?>
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