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
        return view('admin.hasil-pemeriksaan', [
            'users' => $users
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
        $users          = Login::find($session_users->id);
        return view('pelayanan.bbtb', [
            'users' => $users
        ]);
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
        $users          = Login::find($session_users->id);
        return view('pelayanan.kpsp', [
            'users' => $users
        ]);
    }

    public function tdd()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('pelayanan.tdd', [
            'users' => $users
        ]);
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
        $users          = Login::find($session_users->id);
        return view('pelayanan.kmpe', [
            'users' => $users
        ]);
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
