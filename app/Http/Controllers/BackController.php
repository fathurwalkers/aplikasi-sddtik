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

class BackController extends Controller
{
    public function index()
    {
        $data = session('peserta');
        $total_pengguna = Login::all()->count();
        $total_peserta = Detail::all()->count();
        $total_pemeriksaan = Hasilrekap::all()->count();
        $total_pelaksana = Login::where('login_level', 'pelaksana')->count();
        if ($data == null) {
            return view('admin.index', [
                'data' => $data,
                'total_pengguna' => $total_pengguna,
                'total_peserta' => $total_peserta,
                'total_pemeriksaan' => $total_pemeriksaan,
                'total_pelaksana' => $total_pelaksana,
            ]);
        } else {
            return view('admin.index', [
                'data' => $data,
                'total_pengguna' => $total_pengguna,
                'total_peserta' => $total_peserta,
                'total_pemeriksaan' => $total_pemeriksaan,
                'total_pelaksana' => $total_pelaksana,
            ]);
        }
    }

    public function data_pelaksana()
    {
        $data = Login::where('login_level', 'pelaksana')->get();
        return view('admin.data-pelaksana', [
            'data' => $data,
        ]);
    }

    public function hapus_pelaksana(Request $request, $id)
    {
        $pelaksana_id = $id;
        $findpelaksana = Login::findOrFail($pelaksana_id);
        $findpelaksana->forceDelete();
        return redirect()->route('data-pelaksana')->with('status', 'Data Pelaksana telah dihapus.');
    }

    public function data_peserta()
    {
        $data = Detail::all();
        return view('admin.data-peserta', [
            'data' => $data
        ]);
    }

    public function hapus_peserta(Request $request, $id)
    {
        $peserta_id = $id;
        $findpeserta = Detail::findOrFail($peserta_id);
        $findpeserta->forceDelete();
        return redirect()->route('data-peserta')->with('status', 'Data peserta telah dihapus.');
    }

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

    public function pilih_peserta()
    {
        $session_peserta = session('peserta');
        if($session_peserta == null){
            $data = Detail::all();
            return view('pelayanan.pilih-peserta', [
                'data' => $data
            ]);
        } else {
            return redirect()->route('dashboard')->with('status', 'anda tidak dapat ke menuju ke halaman ini karena Peserta pelayanan telah dipilih.');
        }
    }

    public function post_pilih_peserta(Request $request)
    {
        $id_peserta = $request->id_peserta;
        $data = Detail::find($id_peserta);
        $users = session(['peserta' => $data]);
        return redirect()->route('dashboard')->with('status', 'Peserta telah dipilih, anda dapat melakukan pelayanan sekarang.');
    }

    public function hapus_session_peserta(Request $request)
    {
        $request->session()->forget('peserta');
        return redirect()->route('dashboard')->with('status', 'Peserta pelayan yang dipilih telah selesai, silahkan memilih peserta lain untuk melakukan pelayanan.');
    }

    public function post_tambah_peserta(Request $request)
    {
        $validate_data = $request->validate(
            [
                'detail_nama' => 'required',
                'detail_nik' => 'required',
                'detail_ttl' => 'required',
                'detail_jeniskelamin' => 'required|filled',
                'detail_nama_ayah' => 'required',
                'detail_nama_ibu' => 'required',
                'detail_alamat' => 'required',
                'detail_riwayat_persalinan' => 'required|filled',
                'detail_berat_badan_lahir' => 'required',
                'detail_tinggi_badan_lahir' => 'required',
            ],
            [
                'detail_nama.required' => 'Nama lengkap tidak boleh kosong',
                'detail_nik.required' => 'NIK tidak boleh kosong',
                'detail_ttl.required' => 'Tanggal Lahir tidak boleh kosong',
                'detail_jeniskelamin.required' => 'Jenis Kelamin tidak boleh kosong',
                'detail_nama_ayah.required' => 'Nama Ayah tidak boleh kosong',
                'detail_nama_ibu.required' => 'Nama Ibu tidak boleh kosong',
                'detail_alamat.required' => 'Alamat tidak boleh kosong',
                'detail_riwayat_persalinan.required' => 'Riwayat Persalinan tidak boleh kosong',
                'detail_berat_badan_lahir.required' => 'Berat Badan Lahir tidak boleh kosong',
                'detail_tinggi_badan_lahir.required' => 'Tinggi Badan Lahir tidak boleh kosong',
            ]
        );
        $data_peserta = new Detail;
        $save_data_peserta = $data_peserta->create([
            'detail_nama' => $validate_data["detail_nama"],
            'detail_nik' => $validate_data["detail_nik"],
            'detail_ttl' => $validate_data["detail_ttl"],
            'detail_jeniskelamin' => $validate_data["detail_jeniskelamin"],
            'detail_nama_ayah' => $validate_data["detail_nama_ayah"],
            'detail_nama_ibu' => $validate_data["detail_nama_ibu"],
            'detail_alamat' => $validate_data["detail_alamat"],
            'detail_riwayat_persalinan' => $validate_data["detail_riwayat_persalinan"],
            'detail_berat_badan_lahir' => $validate_data["detail_berat_badan_lahir"],
            'detail_tinggi_badan_lahir' => $validate_data["detail_tinggi_badan_lahir"],
        ]);
        $save_data_peserta->save();
        return redirect()->route('data-peserta')->with('status', 'Data peserta berhasil ditambahkan.');
    }

    public function post_update_peserta(Request $request, $id)
    {
        $data_peserta = Detail::find($id);
        $req_date = $request->detail_ttl;
        if
        $validate_data = $request->validate(
            [
                'detail_nama' => 'required',
                'detail_nik' => 'required',
                'detail_ttl' => 'required',
                'detail_jeniskelamin' => 'required|filled',
                'detail_nama_ayah' => 'required',
                'detail_nama_ibu' => 'required',
                'detail_alamat' => 'required',
                'detail_riwayat_persalinan' => 'required|filled',
                'detail_berat_badan_lahir' => 'required',
                'detail_tinggi_badan_lahir' => 'required',
            ],
            [
                'detail_nama.required' => 'Nama lengkap tidak boleh kosong',
                'detail_nik.required' => 'NIK tidak boleh kosong',
                'detail_ttl.required' => 'Tanggal Lahir tidak boleh kosong',
                'detail_jeniskelamin.required' => 'Jenis Kelamin tidak boleh kosong',
                'detail_nama_ayah.required' => 'Nama Ayah tidak boleh kosong',
                'detail_nama_ibu.required' => 'Nama Ibu tidak boleh kosong',
                'detail_alamat.required' => 'Alamat tidak boleh kosong',
                'detail_riwayat_persalinan.required' => 'Riwayat Persalinan tidak boleh kosong',
                'detail_berat_badan_lahir.required' => 'Berat Badan Lahir tidak boleh kosong',
                'detail_tinggi_badan_lahir.required' => 'Tinggi Badan Lahir tidak boleh kosong',
            ]
        );
        $save_data_peserta = $data_peserta->update($validate_data);
        $save_data_peserta->save();
        $save_data_peserta = $data_peserta->update([
            'detail_ttl' => $detail_ttl,
            'updated_at' => now()
        ]);
        $save_data_peserta->save();
        return redirect()->route('data-peserta')->with('status', 'Data peserta berhasil diubah.');

    }

    public function profile()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.profile', [
            'users' => $users
        ]);
    }
}
