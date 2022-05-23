@extends('layouts.admin-layouts')
@section('title', 'Modified Checklist for Autism in Toddlers')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Modified Checklist for Autism in Toddlers')

@section('main-content')

    <div class="container">

        <form action="{{ route('post-mchat') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            1.
                            Apakah anak anda senang diayun, melambung di lutut anda dan sebagainya
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            2.
                            Apakah anak anda senang / tertarik dengan anak-anak lain
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            3.
                            Apakah anak anda senang memanjat seperti tangga
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            4.
                            Apakah anak anda senang bermain cilukba / petak umpet
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            5.
                            Apakah anak anda sering bermain pura-pura, contohnya; berbicara ditelepon atau bermain dengan boneka atau bermain pura-pura yang lain
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            6.
                            Apakah anak anda sering menunjuk dengan jarinya untuk bermain dengan sesuatu
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            7.
                            Apakah anak anda sering menunjuk dengan jarinya untuk mengindikasikan ia tertarik pada sesuatu
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            8.
                            Dapatkah anak anda bermain pantas dengan mainan kecil (seperti mobil atau benda kecil) tanpa memasukkan ke dalam mulut, menguyah atau menjatuhkan
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            9.
                            Apakah anda anda sering membawa benda didepan orang tua untuk menunjukkan kepada anda sesuatu
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            10.
                            Apakah anda anda melihat mata anda lebih dari satu atau dua detik
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            11.
                            Apakah anak anda sering terlihat sensitif yang berlebihan terhadap suara berisik
                            ? <br />
                            (seperti menutup telinga).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            12.
                            Apakah anak anda tersenyum sebagai respon terhadap wajah atau senyum anda
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            13.
                            Apakah anak anda meniru perilaku anda? (misal ketika membuat ekspresi wajah) apakah anak anda meniru anda
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            14.
                            Apakah anak anda merespon ketika ketika namanya dipanggil
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            15.
                            Jika anda menunjuk mainan yang ada di ruangan, apakah anak anda melihatnya
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            16.
                            Apakah anak anda berjalan
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            17.
                            Apakah anak anda melihat benda yang anda lihat
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            18.
                            Apakah anak anda membuat gerakan jari yang tidak biasanya dekat wajahnya
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            19.
                            Apakah anak anda berusaha menarik perhatian anda terhadap aktivitasnya
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            20.
                            Apakah anda sering khawatir apabila anak anda tuli
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            21.
                            Apakah anak anda mengerti apa yang dikatakan orang lain
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            22.
                            Apakah anak anda kadang-kadang memandang untuk hal yang tidak jelas atau mondar mandir tanpa tujuan
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
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
                            23.
                            Apakah anak anda melihat wajah anda untuk melihat reaksi anda ketika bertemu sesuatu yang tidak dikenal
                            ?
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_mchat[]">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
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
