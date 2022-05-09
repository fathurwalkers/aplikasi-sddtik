<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Login;
use App\Models\Detail;
use App\Models\Hasilrekap;

class GenerateController extends Controller
{
    public function generate_data()
    {
        $faker                  = Faker::create('id_ID');

        for ($i=0; $i < 5; $i++) {
            $arr_jenis_kelamin  = ["L", "P"];
            $arr_riwayat_persalinan  = ["PREMATUR", "ATERM"];

            $random_jenis_kelamin = Arr::random($arr_jenis_kelamin);
            $random_riwayat_persalinan = Arr::random($arr_riwayat_persalinan);

            switch ($random_jenis_kelamin) {
                case 'L':
                    // $data_foto = "default-img/male.jpg";
                    $nama_depan = $faker->firstNameMale();
                    $nama_belakang = $faker->lastNameMale();
                    $nama_lengkap = $nama_depan . " " . $nama_belakang;
                    $nik = $faker->nik('male');
                    break;
                case 'P':
                    // $data_foto = "default-img/female.jpg";
                    $nama_depan = $faker->firstNameFemale();
                    $nama_belakang = $faker->lastNameFemale();
                    $nama_lengkap = $nama_depan . " " . $nama_belakang;
                    $nik = $faker->nik('female');
                    break;
            }

            $data = new Detail;

            $ttl = $faker->dateTimeBetween('2013-01-01', '2021-10-25');
            $nama_ayah = $faker->firstNameMale() ." ". $faker->lastNameMale();
            $nama_ibu = $faker->firstNameFemale() ." ". $faker->lastNameFemale();
            $alamat = $faker->address();

            $save_data = $data->create([
                "detail_nama" => $nama_lengkap,
                "detail_nik" => $nik,
                "detail_ttl" => $ttl,
                "detail_jeniskelamin" => $random_jenis_kelamin,
                "detail_nama_ayah" => $nama_ayah,
                "detail_nama_ibu" => $nama_ibu,
                "detail_alamat" => $alamat,
                "detail_riwayat_persalinan" => $random_riwayat_persalinan,
                // "detail_berat_badan_lahir" => $faker->numberBetween(1,10),
                "detail_berat_badan_lahir" => $faker->randomFloat(2,10,400),
                "detail_tinggi_badan_lahir" => $faker->numberBetween(20,120),
                "created_at" => now(),
                "updated_at" => now()
            ]);
            $save_data->save();

            // HASIL PEMERIKSAAN / REKAPAN DATA ================
            $find_data = Detail::findOrFail($save_data->id);
            $hasil_rekap = new Hasilrekap;

            $number_bulan = [0, 3, 6, 9, 12, 15, 18, 21, 24, 30, 36, 42, 48, 54, 60, 66, 72];
            $count_number_bulan = count($number_bulan);

            foreach ($number_bulan as $item) {
                $save_hasil_rekap = $hasil_rekap->create([
                    "bulan" => intval($item),
                    "bbtb" => NULL,
                    "lk" => NULL,
                    "kpsp" => NULL,
                    "tdd" => NULL,
                    "tdl" => NULL,
                    "kmpe" => NULL,
                    "mchat" => NULL,
                    "gpph" => NULL,
                    "keterangan_bbtb" => NULL,
                    "keterangan_lk" => NULL,
                    "keterangan_kpsp" => NULL,
                    "keterangan_tdd" => NULL,
                    "keterangan_tdl" => NULL,
                    "keterangan_kmpe" => NULL,
                    "keterangan_mchat" => NULL,
                    "keterangan_gpph" => NULL,
                    "data_id" => $find_data->id,
                    "created_at" => now(),
                    "updated_at" => now()
                ]);
                $save_hasil_rekap->save();
            }
        }
    }
}
