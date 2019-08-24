<section class="content">
    <div class="container-fluid">
        <div class="block-header">

            <h2>
                <?php echo $header_title; ?>
            </h2>
        </div>

        <!-- #END# Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                    </div>
                    <form method="post" action="<?php echo base_url('dashboardc/proses_kuisioner') ?>">
                        <div class="container">
                            <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                            <?php
                            $no = 1;
                            $id_tipe_soal = '';
                            foreach ($data_soal as $row) {
                                if ($id_tipe_soal != $row->id_tipe_soal) { ?>
                            <div class="card-inside-title"> - <?php echo $row->tipe_soal ?> - </div>
                            <?php }
                                ?>
                            <div class="card-inside-title"><?php echo $no++ ?>. <?php echo $row->soal ?></div>
                            <div class="demo-radio-button">
                                <input name="jawaban_soal<?php echo $row->id_soal ?>" value="1" type="radio" id="radio_1_<?php echo $row->id_soal ?>" />
                                <label for="radio_1_<?php echo $row->id_soal ?>">Sangat Tidak Setuju</label>

                                <input name="jawaban_soal<?php echo $row->id_soal ?>" value="2" type="radio" id="radio_2_<?php echo $row->id_soal ?>" />
                                <label for="radio_2_<?php echo $row->id_soal ?>">Tidak Setuju</label>

                                <input name="jawaban_soal<?php echo $row->id_soal ?>" value="3" type="radio" id="radio_3_<?php echo $row->id_soal ?>" />
                                <label for="radio_3_<?php echo $row->id_soal ?>">Netral</label>

                                <input name="jawaban_soal<?php echo $row->id_soal ?>" value="4" type="radio" id="radio_4_<?php echo $row->id_soal ?>" />
                                <label for="radio_4_<?php echo $row->id_soal ?>">Setuju</label>

                                <input name="jawaban_soal<?php echo $row->id_soal ?>" value="5" type="radio" id="radio_5_<?php echo $row->id_soal ?>" checked />
                                <label for="radio_5_<?php echo $row->id_soal ?>">Sangat setuju</label>
                            </div>
                            <hr>
                            <?php
                                $id_tipe_soal = $row->id_tipe_soal;
                            }
                            ?>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>
    </div>
</section>