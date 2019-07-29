<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('currency_format')) {

    function currency_format($number)

    {
        if ($number != '') {
            return 'Rp ' . number_format($number, 2, ',', '.');
        } else {
            return 0;
        }
    }


    function count_jawaban($id_soal, $nilai)
    {
        global $CI;

        $data = '';

        $data_row = $CI->adminm->count_jawaban($id_soal, $nilai);

        foreach ($data_row as $row) {
            $data = $row->jumlah;
        }
        return $data;
    }

    function convert_nilai($nilai)
    {
        global $CI;

        switch ($nilai) {
            case $nilai >= 80 && $nilai <= 160;
                $data = "Sangat Tidak Setuju";
                break;
            case $nilai >= 161 && $nilai <= 240;
                $data = "Kurang Setuju";
                break;
            case $nilai >= 241 && $nilai <= 320;
                $data = "Kurang Setuju";
                break;
            case $nilai >= 321 && $nilai <= 400;
                $data = "Kurang Setuju";
                break;
            case $nilai >= 401 && $nilai <= 480;
                $data = "Kurang Setuju";
                break;
            default:
                $data = "Tidak Termasuk Dalam Range";
                break;
        }

        return $data . ' (' . $nilai . ')';
    }

    function convert_total($nilai)
    {
        global $CI;

        switch ($nilai) {
            case $nilai >= 80 && $nilai <= 160;
                $data = "Sangat Tidak Setuju";
                break;
            case $nilai >= 161 && $nilai <= 240;
                $data = "Kurang Setuju";
                break;
            case $nilai >= 241 && $nilai <= 320;
                $data = "Kurang Setuju";
                break;
            case $nilai >= 321 && $nilai <= 400;
                $data = "Kurang Setuju";
                break;
            case $nilai >= 401 && $nilai <= 480;
                $data = "Kurang Setuju";
                break;
            default:
                $data = "Tidak Termasuk Dalam Range";
                break;
        }

        return $data . ' (' . $nilai . ')';
    }
}
