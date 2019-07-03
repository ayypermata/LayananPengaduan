<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=tutorialpedia-export.xls");

// Tambahkan table
?>

<h3>Laporan Pengaduan</h3>

<table border="1" cellpadding="5">
    <tr>
        <th>NO</th>
        <th>JENIS PENGADUAN</th>
        <th>DESKRIPSI</th>
        <th>FOTO</th>
        <th>BALASAN</th>
        <th>STATUS</th>
    </tr>
    <?php
    // Load file koneksi.php
    include "admin/laporan_admin.php";

    // Buat query untuk menampilkan semua data siswa
    mysql_connect("localhost", "root", "root");
    mysql_select_db("lapor_aduan");

    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $sql = mysql_query("SELECT * FROM siswa ORDER BY id ASC");
    $no = 1;
    while ($data = mysql_fetch_assoc($sql)) {
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $data['jenis'] . "</td>";
        echo "<td>" . $data['deskripsi'] . "</td>";
        echo "<td>" . $data['foto'] . "</td>";
        echo "<td>" . $data['balasan'] . "</td>";
        echo "<td>" . $data['status'] . "</td>";
        echo "</tr>";

        $no++; // Tambah 1 setiap kali looping
    }
    ?>
</table>