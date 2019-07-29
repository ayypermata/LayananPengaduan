<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"> Kuisioner </h1>

    <div class="container-fluid">
        <div class="card mb-10">
            <?php
            foreach ($data_selesai as $row) {
                if ($row->done == '1' and $row->is_kuisioner == 'True') { ?>
                    <a href="<?php echo base_url('user/isi_kuisioner/' . $row->id_user) ?>" style=" background: lightpink;" class="list-group-item">
                        <span class="">Isi Kuisioner Sekarang</span> (Tanggal Laporan Masuk <?php echo $row->date_create ?>)
                    </a>
                <?php } elseif ($row->done == '1' and $row->is_kuisioner == 'False') { ?>
                    <div style="background-color:lightblue" class="list-group-item">
                        <span>Terimakasih telah mengisi kuisioner</span> (Tanggal Laporan Masuk <?php echo  $row->date_create ?>) </div>
                <?php }
            }
            ?>
        </div>
    </div>
</div>