<?php

$CI = &get_instance();

function total_bobot_kriteria($id_kriteria)
{
    global $CI;

    $data = '';
    $total_bobot_kriteria = '';

    $bobot_kriteria = bobot_kriteria($id_kriteria);
    $data_row = $CI->m_wp->total_bobot_kriteria();
    foreach ($data_row as $row) {
        $total_bobot_kriteria = $row->total_bobot_kriteria;
    }
    $data = number_format($bobot_kriteria / $total_bobot_kriteria, 2);
    return $data;
}

function bobot_kriteria($id_kriteria)
{
    global $CI;

    $data = '';
    $id['id_kriteria'] = $id_kriteria;
    $data_row = $CI->m_wp->getSelectedData('tbl_kriteria', $id);

    foreach ($data_row as $row) {
        $data = $row->bobot_kriteria;
    }
    return $data;
}

function total_bobot_sub_kriteria($id_sub_kriteria, $id_kriteria)
{
    global $CI;

    $data = '';
    $total_bobot_kriteria = '';

    $bobot_sub_kriteria = bobot_sub_kriteria($id_sub_kriteria);
    $data_row = $CI->m_wp->total_bobot_sub_kriteria($id_kriteria);
    foreach ($data_row as $row) {
        $total_bobot_sub_kriteria = $row->total_bobot_sub_kriteria;
    }
    $data = number_format($bobot_sub_kriteria / $total_bobot_sub_kriteria, 8);
    return $data;
}

function bobot_sub_kriteria($id_sub_kriteria)
{
    global $CI;

    $data = '';
    $id['id_sub_kriteria'] = $id_sub_kriteria;
    $data_row = $CI->m_wp->getSelectedData('tbl_sub_kriteria', $id);

    foreach ($data_row as $row) {
        $data = $row->bobot_sub_kriteria;
    }
    return $data;
}

function bobot_global_sub_kriteria($id_sub_kriteria, $id_kriteria)
{
    global $CI;

    $perbaikan_bobot_sub_kriteria = total_bobot_sub_kriteria($id_sub_kriteria, $id_kriteria);
    $perbaikan_bobot_kriteria = total_bobot_kriteria($id_kriteria);

    $data = number_format($perbaikan_bobot_sub_kriteria * $perbaikan_bobot_kriteria, 4);
    return $data;
}

function nilai_alternatif($id_alternatif, $id_sub_kriteria)
{
    global $CI;

    $data = 0;

    $id = array(
        'id_alternatif' => $id_alternatif,
        'id_sub_kriteria' => $id_sub_kriteria
    );
    $data_row = $CI->m_wp->getSelectedData('tbl_nilai_alternatif', $id);

    foreach ($data_row as $row) {
        $data = $row->nilai_alternatif;
    }
    return $data;
}

function option_sub_kriteria($id_alternatif, $id_kriteria)
{
    global $CI;

    $data = '<option value="">Pilih</value>';
    $id = array(
        'id_kriteria' => $id_kriteria,
    );
    $data_row = $CI->m_wp->getSelectedData('tbl_sub_kriteria', $id);

    foreach ($data_row as $row) {
        $data .= '<option value="' . $row->id_sub_kriteria . '">' . $row->nm_sub_kriteria . '</option>';
    }
    return $data;
}

function value_sub_kriteria($id_alternatif, $id_kriteria)
{
    global $CI;

    $data = 'Pilih';
    $id_sub_kriteria = '';
    $id = array(
        'id_alternatif' => $id_alternatif,
        'id_kriteria' => $id_kriteria,
    );
    $data_row = $CI->m_wp->getSelectedData('tbl_nilai_alternatif', $id);

    foreach ($data_row as $row) {
        $id_sub_kriteria = $row->id_sub_kriteria;
    }
    if ($id_sub_kriteria != '') {
        $data = nm_sub_kriteria($id_sub_kriteria);
    }
    return $data;
}

function bobot_value_sub_kriteria($id_alternatif, $id_kriteria)
{
    global $CI;

    $data = 'Pilih';
    $id_sub_kriteria = '';
    $id = array(
        'id_alternatif' => $id_alternatif,
        'id_kriteria' => $id_kriteria,
    );
    $data_row = $CI->m_wp->getSelectedData('tbl_nilai_alternatif', $id);

    foreach ($data_row as $row) {
        $id_sub_kriteria = $row->id_sub_kriteria;
    }
    if ($id_sub_kriteria != '') {
        $data = bobot_sub_kriteria($id_sub_kriteria);
    }
    return $data;
}

function nm_sub_kriteria($id_sub_kriteria)
{
    global $CI;

    $data = '';
    $id = array(
        'id_sub_kriteria' => $id_sub_kriteria,
    );
    $data_row = $CI->m_wp->getSelectedData('tbl_sub_kriteria', $id);

    foreach ($data_row as $row) {
        $data = $row->nm_sub_kriteria;
    }
    return $data;
}


function convert_month($month)
{
    global $CI;

    switch ($month) {
        case '01':
            $bulan = 'Januari';
            break;
        case '02':
            $bulan = 'Febuari';
            break;
        case '03':
            $bulan = 'Maret';
            break;
        case '04':
            $bulan = 'April';
            break;
        case '05':
            $bulan = 'Mei';
            break;
        case '06':
            $bulan = 'Juni';
            break;
        case '07':
            $bulan = 'Juli';
            break;
        case '08':
            $bulan = 'Agustus';
            break;
        case '09':
            $bulan = 'September';
            break;
        case '10':
            $bulan = 'Oktober';
            break;
        case '11':
            $bulan = 'November';
            break;
        case '12':
            $bulan = 'Desember';
            break;
    }

    return $bulan; //print tanggal
}
