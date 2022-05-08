@extends('layouts.admin-layouts')
@section('title', 'Pilih Peserta')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Pilih Peserta')

@section('main-content')

    <div class="container">

        <form action="" method="POST">
            @csrf

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="detail_nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="detail_nama" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap ..." name="detail_nama">
                        <small id="emailHelp" class="form-text text-muted">Contoh : Muh. Khairy Keenan</small>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
