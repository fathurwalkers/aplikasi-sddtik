<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Detail;
use App\Models\Hasilrekap;
use App\Models\Login;

class PelayananController extends Controller
{
    public function hitung_bulan($id)
    {
        $testdata = Detail::find($id);
        $date1 = strtotime($testdata->detail_ttl);
        $date2 = strtotime(now());
        $totalbulan = 0;
        while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2) {
            $totalbulan++;
        }
        return $totalbulan;
    }

    public function hasil_pemeriksaan()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $data = Detail::all();
        return view('admin.hasil-pemeriksaan', [
            'users' => $users,
            'data' => $data
        ]);
    }

    public function pilih_bulan_pemeriksaan()
    {
        return view('admin.pilih-bulan-pemeriksaan');
    }

    public function pemeriksaan_berdasarkan_bulan(Request $request)
    {
        $ambil_bulan = date("m", strtotime($request->bulan));
        $pemeriksaan = Hasilrekap::whereMonth('updated_at', '=', 05)->get();
        dump($pemeriksaan);
        dump($ambil_bulan);
        dd($request->bulan);
        return view('admin.lihat-pemeriksaan-perbulan');
    }

    public function cetak_hasil_pemeriksaan($id)
    {
        $data = Detail::find($id);
        $hasil_pemeriksaan = Hasilrekap::where('data_id', $data->id)->get();
        return view('admin.cetak-hasil-pemeriksaan', [
            'data' => $data,
            'hasil_pemeriksaan' => $hasil_pemeriksaan,
        ]);
    }

    // DETEKSI PENYIMPANGAN PERTUMBUHAN ======================================================
    public function deteksi_penyimpangan_pertumbuhan()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('pelayanan.deteksi-penyimpangan-pertumbuhan', [
            'users' => $users
        ]);
    }

    public function bbtb()
    {
        $session_users  = session('data_login');
        $session_peserta  = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('pilih-peserta')->with('status', 'Tidak ada peserta yang dipilih, harap melakukan pemilihan peserta pelayanan terlebih dahulu.');
        }
        $users          = Login::find($session_users->id);
        return view('pelayanan.bbtb', [
            'users' => $users
        ]);
    }

    public function post_bbtb(Request $request)
    {
        $session_peserta = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
        } else {
            // $data = Detail::find($session_peserta->id);
            $data = Detail::find($session_peserta->id);
            if ($data == null) {
                return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
            } else {
                $cek_bulan = $this->hitung_bulan($data->id);
                $berat_badan = $request->jawaban_bb;
                $tinggi_badan = $request->jawaban_tb;
                switch ($cek_bulan) {
                    case $cek_bulan <= 3:
                        if ($berat_badan <= 4.600 && $tinggi_badan <= 40) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 5.700 && $tinggi_badan <= 60) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 5.700 && $tinggi_badan >= 60) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 6:
                        if ($berat_badan <= 5.900 && $tinggi_badan <= 52) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 7.400 && $tinggi_badan <= 66) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 7.400 && $tinggi_badan >= 66) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 9:
                        if ($berat_badan <= 7.100 && $tinggi_badan <= 56) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 8.900 && $tinggi_badan <= 70) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 8.900 && $tinggi_badan >= 70) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 12:
                        if ($berat_badan <= 7.900 && $tinggi_badan <= 59) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 9.900 && $tinggi_badan <= 74) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 9.900 && $tinggi_badan >= 74) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 15:
                        if ($berat_badan <= 8.500 && $tinggi_badan <= 62) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 10.600 && $tinggi_badan <= 78) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 10.600 && $tinggi_badan >= 78) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 18:
                        if ($berat_badan <= 9.000 && $tinggi_badan <= 65) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 11.300 && $tinggi_badan <= 81) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 11.300 && $tinggi_badan >= 81) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 21:
                        if ($berat_badan <= 9.500 && $tinggi_badan <= 67) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 11.900 && $tinggi_badan <= 84) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 11.900 && $tinggi_badan >= 84) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 24:
                        if ($berat_badan <= 9.900 && $tinggi_badan <= 69) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 12.400 && $tinggi_badan <= 87) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 12.400 && $tinggi_badan >= 87) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 24:
                        if ($berat_badan <= 10.800 && $tinggi_badan <= 73) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 13.500 && $tinggi_badan <= 92) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 13.500 && $tinggi_badan >= 92) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan <= 24:
                        if ($berat_badan <= 11.600 && $tinggi_badan <= 76) {
                            $hasil_bbtb = "Kurus, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan <= 14.500 && $tinggi_badan <= 96) {
                            $hasil_bbtb = "Normal, berat badan terhadap tinggi badan berstatus normal. tidak ada penyimpangan silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } elseif ($berat_badan >= 14.500 && $tinggi_badan >= 96) {
                            $hasil_bbtb = "Gemuk, berat badan terhadap tinggi badan berstatus menyimpang. silahkan kunjungi pelayanan kesehatan untuk informasi selanjutnya.";
                        } else {
                            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
                        }
                        break;
                    case $cek_bulan > 24:
                        return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini. hanya maksimal usian 3 Tahun (36 Bulan) saja yang dapat melakukan pelayanan berat badan terhadap tinggi badan ini.');
                        break;
                }
                $hasil_pemeriksaan = Hasilrekap::where('data_id', $data->id)->get();
                $array_hasil = [];
                foreach ($hasil_pemeriksaan as $hasil) {
                    if ($hasil->bulan >= $cek_bulan) {
                        $hasil_query = $hasil;
                        break;
                    }
                }
                $save_data = $data->update([
                    'detail_berat_badan_lahir' => $berat_badan,
                    'detail_tinggi_badan_lahir' => $tinggi_badan,
                    'updated_at' => now(),
                ]);
                $result = Hasilrekap::find($hasil_query["id"]);
                $save_result = $result->update([
                    'bbtb' => "1",
                    'keterangan_bbtb' => $hasil_bbtb,
                    'updated_at' => now()
                ]);
                return redirect()->route('dashboard')->with('status', $hasil_bbtb);
            }
        }
    }

    public function lk()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('pelayanan.lk', [
            'users' => $users
        ]);
    }
    // AKHIR DETEKSI PENYIMPANGAN PERTUMBUHAN ======================================================

    // DETEKSI PENYIMPANGAN PERKEMBANGAN ===========================================================
    public function deteksi_penyimpangan_perkembangan()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('pelayanan.deteksi-penyimpangan-perkembangan', [
            'users' => $users
        ]);
    }

    public function kpsp()
    {
        $session_users  = session('data_login');
        $session_peserta  = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('pilih-peserta')->with('status', 'Tidak ada peserta yang dipilih, harap melakukan pemilihan peserta pelayanan terlebih dahulu.');
        }
        $cek_bulan = $this->hitung_bulan($session_peserta->id);
        if ($cek_bulan <= 3) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-3', [
                'users' => $users
            ]);
        }
        if ($cek_bulan >= 6) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-6', [
                'users' => $users
            ]);
        }
        if ($cek_bulan >= 12) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-12', [
                'users' => $users
            ]);
        }
        if ($cek_bulan >= 15) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-15', [
                'users' => $users
            ]);
        }
        if ($cek_bulan >= 18) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-18', [
                'users' => $users
            ]);
        }
        if ($cek_bulan >= 21) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-21', [
                'users' => $users
            ]);
        }
        if ($cek_bulan >= 24) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-24', [
                'users' => $users
            ]);
        }
        if ($cek_bulan >= 30) {
            $users          = Login::find($session_users->id);
            return view('pelayanan.kpsp.kpsp-bulan-30', [
                'users' => $users
            ]);
        }
        if ($cek_bulan <= 31) {
            $users          = Login::find($session_users->id);
            return redirect()->route('dashboard')->with('status', 'Minimal usia (bulan) harus kurang dari 30 Bulan untuk melakukan pemeriksaan KPSP.');
        }
        return redirect()->route('dashboard')->with('status', 'Minimal usia (bulan) harus kurang dari 30 Bulan untuk melakukan pemeriksaan KPSP.');
    }

    public function post_kpsp(Request $request)
    {
        $bulan_request = $request->bulan;
        $jawaban_kpsp = $request->jawaban_kpsp;
        $benar = 0;
        $salah = 0;
        foreach ($jawaban_kpsp as $item) {
            switch ($item) {
                case 'YA':
                    $benar++;
                    break;
                case 'TIDAK':
                    $salah++;
                    break;
                case null:
                    $benar = $benar;
                    $salah = $salah;
                    break;
            }
        }
        switch ($bulan_request) {
            case 3:
                //
                break;
        }
        dd($jawaban_kpsp);
    }

    public function tdd()
    {
        $session_users  = session('data_login');
        $session_peserta  = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('pilih-peserta')->with('status', 'Tidak ada peserta yang dipilih, harap melakukan pemilihan peserta pelayanan terlebih dahulu.');
        }
        $users          = Login::find($session_users->id);
        return view('pelayanan.tdd', [
            'users' => $users
        ]);
    }

    public function post_tdd(Request $request)
    {
        $session_peserta = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
        } else {
            // $data = Detail::find($session_peserta->id);
            $data = Detail::find($session_peserta->id);
            if ($data == null) {
                return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
            } else {
                $jawaban_tdd = $request->jawaban_tdd;
                $benar = 0;
                $salah = 0;
                foreach ($jawaban_tdd as $item) {
                    switch ($item) {
                        case 'YA':
                            $benar++;
                            break;
                        case 'TIDAK':
                            $salah++;
                            break;
                        case null:
                            $benar = $benar;
                            $salah = $salah;
                            break;
                    }
                }
                switch ($benar) {
                    case 3:
                        $keterangan_tdd = "Normal ";
                        $keterangan_tdd .= "Perkembangan anak sesuai dengan tahapan usianya, silahkan lakukan penilaian kembali pada tahapan usia selanjutnya.";
                        break;
                    case 2:
                        $keterangan_tdd = "Penyimpangan ";
                        $keterangan_tdd .= "Perkembangan anak masuk kategori menyimpang, silahkan kunjungi pelayanan kesehatan.";
                        break;
                    case 1:
                        $keterangan_tdd = "Penyimpangan ";
                        $keterangan_tdd .= "Perkembangan anak masuk kategori menyimpang, silahkan kunjungi pelayanan kesehatan.";
                        break;
                    case 1:
                        $keterangan_tdd = "Penyimpangan ";
                        $keterangan_tdd .= "Perkembangan anak masuk kategori menyimpang, silahkan kunjungi pelayanan kesehatan.";
                        break;
                }
                $hasil_pemeriksaan = Hasilrekap::where('data_id', $data->id)->get();
                $cek_bulan = $this->hitung_bulan($data->id);
                $array_hasil = [];
                foreach ($hasil_pemeriksaan as $hasil) {
                    if ($hasil->bulan >= $cek_bulan) {
                        $hasil_query = $hasil;
                        break;
                    }
                }
                $result = Hasilrekap::find($hasil_query["id"]);
                $save_result = $result->update([
                    'tdd' => "1",
                    'keterangan_tdd' => $keterangan_tdd,
                    'updated_at' => now()
                ]);
                return redirect()->route('dashboard')->with('status', $keterangan_tdd);
            }
        }
    }

    public function tdl()
    {
        $session_users  = session('data_login');
        $session_peserta  = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('pilih-peserta')->with('status', 'Tidak ada peserta yang dipilih, harap melakukan pemilihan peserta pelayanan terlebih dahulu.');
        }
        $cek_bulan = $this->hitung_bulan($session_peserta->id);
        if ($cek_bulan <= 36) {
            return redirect()->route('dashboard')->with('status', 'Minimal usia (bulan) harus lebih dari 36 Bulan untuk melakukan pemeriksaan TDL.');
        }
        if ($cek_bulan >= 72) {
            return redirect()->route('dashboard')->with('status', 'Maksimal usia (bulan) tidak lebih dari 72 Bulan untuk melakukan pemeriksaan TDL.');
        }
        $users          = Login::find($session_users->id);
        return view('pelayanan.tdl', [
            'users' => $users
        ]);
    }

    public function post_tdl(Request $request)
    {
        $session_peserta = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
        } else {
            // $data = Detail::find($session_peserta->id);
            $data = Detail::find($session_peserta->id);
            if ($data == null) {
                return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
            } else {
                $totalbulan = $this->hitung_bulan($data->id);
                $jawaban_tdl = $request->jawaban_tdl;
                $hasil_pemeriksaan = Hasilrekap::where('data_id', $data->id)->get();
                $array_hasil = [];
                foreach ($hasil_pemeriksaan as $hasil) {
                    if ($hasil->bulan >= $totalbulan) {
                        $hasil_query = $hasil;
                        break;
                    }
                }
                $result = Hasilrekap::find($hasil_query["id"]);
                switch ($request->jawaban_tdl) {
                    case 'YA':
                        $keterangan = "Normal <br />
                        Pemeriksaan anak sudah sesuai (Normal), silahkan lakukan penilaian kembali pada tahapan usia selanjutnya.";
                        $status = "NORMAL";
                        break;
                    case 'TIDAK':
                        $keterangan = "Curiga Gangguan Penglihatan<br />
                        Pemeriksaan anak masuk kategori gangguan penglihatan, silahkan kunjungi pelayanan kesehatan.";
                        $status = "Gangguan Penglihatan";
                        break;
                }
                $save_result = $result->update([
                    'tdl' => '1',
                    'keterangan_tdl' => $keterangan,
                    'updated_at' => now(),
                ]);

                $alert = 'Pemeriksaan TDL Telah Berhasil. Status Pemeriksaan : ';
                $alert .= $status;
                return redirect()->route('dashboard')->with('status', $alert);
            }
        }
    }
    // END DETEKSI PENYIMPANGAN PERKEMBANGAN ========================================================

    // DETEKSI PENYIMPANGAN MENTAL EMOSIONAL ========================================================
    public function deteksi_penyimpangan_mental()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('pelayanan.deteksi-penyimpangan-mental-emosional', [
            'users' => $users
        ]);
    }

    public function kmpe()
    {
        $session_users  = session('data_login');
        $session_peserta  = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('pilih-peserta')->with('status', 'Tidak ada peserta yang dipilih, harap melakukan pemilihan peserta pelayanan terlebih dahulu.');
        }
        $cek_bulan = $this->hitung_bulan($session_peserta->id);
        if ($cek_bulan <= 36) {
            return redirect()->route('dashboard')->with('status', 'Minimal usia (bulan) harus lebih dari 36 Bulan untuk melakukan pemeriksaan Masalah Perilaku Emosional.');
        }
        if ($cek_bulan >= 72) {
            return redirect()->route('dashboard')->with('status', 'Maksimal usia (bulan) tidak lebih dari 72 Bulan untuk melakukan pemeriksaan Masalah Perilaku Emosional.');
        }
        $users          = Login::find($session_users->id);
        return view('pelayanan.kmpe', [
            'users' => $users
        ]);
    }

    public function post_kmpe(Request $request)
    {
        $session_peserta = session('peserta');
        if ($session_peserta == null) {
            return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
        } else {
            // $data = Detail::find($session_peserta->id);
            $data = Detail::find($session_peserta->id);
            if ($data == null) {
                return redirect()->route('dashboard')->with('status', 'Maaf, anda tidak dapat melakukan aksi ini.');
            } else {
                $jawaban_kmpe = $request->jawaban_kmpe;
                $benar = 0;
                $salah = 0;
                foreach ($jawaban_kmpe as $item) {
                    switch ($item) {
                        case 'YA':
                            $benar++;
                            break;
                        case 'TIDAK':
                            $salah++;
                            break;
                        case null:
                            $benar = $benar;
                            $salah = $salah;
                            break;
                    }
                }
                if ($salah == 14) {
                    $keterangan_kmpe = "Normal ";
                    $keterangan_kmpe .= "Pemeriksaan anak sudah sesuai (Normal), silahkan lakukan penilaian kembali pada tahapan usia selanjutnya.";
                } else {
                    $keterangan_kmpe = "Kemungkinan anak mengalami masalah mental emosional ";
                    $keterangan_kmpe .= "Pemeriksaan anak masuk kategori mengalami masalah mental emosional, silahkan kunjungi pelayanan kesehatan.";
                }
                $hasil_pemeriksaan = Hasilrekap::where('data_id', $data->id)->get();
                $cek_bulan = $this->hitung_bulan($data->id);
                $array_hasil = [];
                foreach ($hasil_pemeriksaan as $hasil) {
                    if ($hasil->bulan >= $cek_bulan) {
                        $hasil_query = $hasil;
                        break;
                    }
                }
                $result = Hasilrekap::find($hasil_query["id"]);
                $save_result = $result->update([
                    'kmpe' => "1",
                    'keterangan_kmpe' => $keterangan_kmpe,
                    'updated_at' => now()
                ]);
                return redirect()->route('dashboard')->with('status', $keterangan_kmpe);
            }
        }
    }

    public function mchat()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('pelayanan.mchat', [
            'users' => $users
        ]);
    }

    public function gpph()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('pelayanan.gpph', [
            'users' => $users
        ]);
    }
    // END DETEKSI PENYIMPANGAN MENTAL EMOSIONAL ====================================================
}
