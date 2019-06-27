<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php echo $this->session->flashdata('message'); ?>

    <html>

    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <th>NO</th>
                <th>JENIS PENGADUAN</th>
                <th>DESKRIPSI</th>
                <th>FOTO</th>
                <th>STATUS</th>
            </tr>
            <tr>
                <?php $no = 1;
                foreach ($laporpeng as $l) : ?>
                    <td><?= $no++ ?></td>
                    <td><?= $l->jenis ?></td>
                    <td><?= $l->deskripsi ?></td>
                    <td>
                        <span class="image-block img-hover">
                            <a class="image-zoom" href="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" data-gal="prettyPhoto[gallery]">
                                <img height="300" width="150" src="<?php echo base_url(); ?>/assets/img/upload_lapor/<?= $l->image ?>" class="img-fluid w3layouts agileits" alt="">
                            </a>
                        </span>
                    </td>
                    <td><?= $l->balasan ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

    </body>

    </html>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <!-- End of Main Content -->