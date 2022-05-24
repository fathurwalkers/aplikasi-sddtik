@extends('layouts.admin-layouts')
@section('title', 'Gangguan Pemusatan Perhatian dan Hiperaktivitas')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Gangguan Pemusatan Perhatian dan Hiperaktivitas')

@section('main-content')

    <div class="container">

        <form action="{{ route('post-gpph') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            1. Tidak kenal lelah, atau aktivitas yang berlebihan.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            2. Mudah menjadi gembiar, impulsive.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            3. Mengganggu anak-anak lain.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            4. Gagal menyelesaikan kegiatan yang telah pendek dimulai, Rentang perhatian.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            5. Menggerak-gerakkan anggota badan atau kepala secara terus menerus.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            6. Kurang perhatian, mudah teralihkan.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            7. Permintaannya harus segera dipenuhi, mudah menjadi frustasi.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            8. Sering dan mudah menangis.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            9. Suasana hatinya mudah berubah dengan cepat dan drastic.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            10. Ledakkan kekesalan, tingkah laku eksplosif dan tak terduga.
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_gpph[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <button class="btn btn-info btn-md" type="submit">
                            PROSES
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
