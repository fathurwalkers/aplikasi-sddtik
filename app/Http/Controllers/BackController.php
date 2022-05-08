<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Detail;
use App\Models\Login;

class BackController extends Controller
{
    public function index()
    {
        $data = session('peserta');
        if ($data == null) {
            return view('admin.index', [
                'data' => $data
            ]);
        } else {
            return view('admin.index', [
                'data' => $data
            ]);
        }
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

    public function profile()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.profile', [
            'users' => $users
        ]);
    }
}
