@extends('layouts.admin-layouts')
@section('title', 'Kuesioner Masalah Perilaku Emosional')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Kuesioner Masalah Perilaku Emosional')

@section('main-content')

    <div class="container">

        <form action="{{ route('post-tdd') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">
                            1. Apakah anak anda sering bereaksi negatif, marah atau tegang tanpa sebab yang jelas ?<br />
                            (bereaksi negatif contohnya rewel, tidak sabaran, banyak menangis, mudah tersinggung atau bereaksi berlebihan bila merasa situasi tidak seperti yang diharapkannya atau kemauannya tidak terpenuhi).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            2. Apakah anak anda tampak lebih memilih untuk menyendiri atau bermain sendiri, atau menghindar dari anak seumurnya atau orang dewasa ?<br />
                            (ingin sendirian, menyendiri dengan ekspresi murung, tidak bersemangat, sedih, atau kehilangan minat terhadap hal-hal yang biasa sangat dinikmati).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            3. Apakah anak anda cenderung bersikap menentang?<br />
                            (membantah, melawan, tidak mau menurut atau melakukan hal yang sebaliknya dari apa yang diminta, serta tampak tidak perduli ketika diberitahu atau ditegur).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            4. Apakah anak anda mudah takut atau cemas berlebihan tanpa sebab yang jelas ?<br />
                            (misalnya takut pada binatang atau benda yang tidak berbahaya, terlihat cemas ketika tidak melihat ibu/pengasuhnya).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            5. Apakah anak anda sering sulit konsentrasi, perhatiannya mudah teralihkan atau banyak bergerak / tidak bisa diam ?<br />
                            (misalnya anak tidak bisa bertahan lama untuk bermain dengan satu permainan, mudah mengalihkan perhatian bila ada hal lain yang lebih menarik perhatian seperti bunyi atau gerakan, tidak bisa duduk dengan tenang, banyak bergerak atau cenderung berjalan / berlari mondar - mandir).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda lebih banyak menempel / selalu minta ditemani, mudah cemas dan tidak percaya diri ?
                            <br />
                            (
                                seakan minta perlindungan atau minta ditemani pada berbagai situasi, terutama ketika berada dalam situasu baru atau ada orang yang dikenalnya; mengekspresikan kecemasan serta terlihat tidak percaya diri
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda menunjukkan adanya perubahan pada tidur ?
                            <br />
                            (
                                Seperti sulit tidur, terjaga sepanjang hari, sering terbangun di waktu tidur malam oleh karena mimpi buruk mengigau, menangis didalam tidurnya
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda mengalami perubahan pola makan dari yang biasanya ?
                            <br />
                            (
                                kehilangan nafsu makan, tidak mau makan sama sekali, atau sebaliknya makan berlebihan, sangat memilih jenis makanan atau membiarkan makanan lama dimulut tanpa dikunyah/diemut
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda sering kali mengelih sakit kepala, sakit perut atau kelihat fisik lainnya dalam waktu-waktu tertentu ?
                            <br />
                            {{-- (
                                kehilangan nafsu makan, tidak mau makan sama sekali, atau sebaliknya makan berlebihan, sangat memilih jenis makanan atau membiarkan makanan lama dimulut tanpa dikunyah/diemut
                                ). --}}
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda mudah putus asa atau frustasi dan sering menunjukkan emosi yang negatif ?
                            <br />
                            (
                                Seperti sedih atau kecewa yang berkepanjangan, mudah mengeluh, marah atau protes. Misal ketika anak merasa kesulitan dalam menggambar, lalu berteriak minta tolong, marah, atau kertasnya disobek
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda menunjukkan kemunduran pola perilaku dari kemampuan yang sudah dimilikinya ?
                            <br />
                            (
                                seperti mengompol kembali, menghisap jempol, atau tidak mau berpisah dengan orangtua/pengasuhnya
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda sering berkelahi, bertengkar, atau menyerang anak lain baik secara verbal maupun non-verbal ?
                            <br />
                            (
                                seperti misalnya mengejek, meneriaki, merebut permainan, atau memukul temannya
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda sering diperlakukan tidak menyenangkan oleh anak lain atau orang dewasa ?
                            <br />
                            (
                                seperti misalnya ditinggal bermain, dihindari, diejek, dikata-katai, direbut mainannya atau disakiti secara fisik
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
                            Apakah anak anda cenderung berperilaku merusak atau cenderung selalu ingin menang atau menguasai.
                            <br />
                            (
                               Misalnya merusak benda, menyakiti dirinya atau binatang
                                ).
                        </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_kmpe[]">
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
