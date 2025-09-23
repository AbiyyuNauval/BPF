<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class PegawaiController extends Controller
{
    public function index(){
        $current_semester = 3;

        $info = "Masih Awal, Kejar TAK!";
        if ($current_semester < 3){
            $info = "Masih Awal, Kejar TAK!";
        }   elseif ($current_semester > 3){
            $info = "Jangan main-main, kurang-kurangi main game!";
        }

        $data = [
            'name' => 'Abiyyu Nauval Sugiarto',
            'tgl_lahir' => '2006-10-02',
            'my_age' => 18,
            'last_login' => date('Y-m-d H:i:s'),
            'hobbies' => ['Main Game', 'Dengar Musik', 'Baca Komik', '', 'S2', 'S3'],
            'tgl_harus_wisuda' => '2027-10-10',
            'tgl_hari_ini' => date('Y-m-d'),
            'time_to_study_left' => '2 Tahun 0 Bulan 17 Hari',
            'current_semester' => $current_semester,
            'info' => $info,
            'future_goal' => 'Game Developer'
        ];
        return view('pegawai-home', $data);
    }
}


