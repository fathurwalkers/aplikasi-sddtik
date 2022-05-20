@extends('layouts.admin-layouts')
@section('title', 'Tes Daya Dengar')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Tes Daya Dengar')

@section('main-content')

    <div class="container">

        <form action="{{ route('post-tdd') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            1. Kemampuan Ekpresif <br />
                            Apakah anak mulai menggunakan kata-kata lain, selain kata mama, papa, anggota keluarga lain dan hewan peliharaan? <br />
                            Apakah anak mulai mengungkapkan kata yang berarti "milik" misal "susu kamu", "bonekaku"?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_tdd[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            1. Kemampuan Reseptif <br />
                            Apakah anak dapat mengerjakan 2 macam perintah dalam satu kalimat, seperti ambil sepatu dan taruh disini, tanpa diberi contoh ? <br />
                            Apakah anak dapat menunjuk minimal 2 nama benda didepannya (cangkir, bola, sendok) ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_tdd[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="bulan">
                            Silahkan memilih bulan pemeriksaan untuk melihat hasil pemeriksaan berdasarkan bulan yang dipilih.
                        </label>
                        <input type="date" name="bulan" class="form-control" id="bulan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <button class="btn btn-info btn-md" type="submit">
                            CEK HASIL
                        </button>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
