<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Usia 18 Bulan</title>
    <style>
        p {
            font-size: 15px;
            text-align: justify;
        }

        @media screen and (max-width : 400px) {
            p {
                font-size: 3.4vw;
            }

            h5 {
                font-size: 3.7vw;
            }

            option {
                font-size: 3.2vw !important;
            }
        }
    </style>
</head>

<body>

    <div class="container col-lg-8 col-12 py-2 px-lg-5 px-4" style="background-color: #6A7AA6;">

        <!-- title -->
        <div class="row px-1 rounded-3 mb-3 bg-white py-1">
            <div class="col-12 py-2 ">
                <div class="title d-flex justify-content-center mb-1">
                    <h5 class="ms-1">KPSP BAYI UMUR 18 BULAN</h5>
                </div>
                <div class="mb-1 ms-3">
                    <p class="mb-0">Alat dan Bahan yang dibutuhkan :</p>
                    <p class="mb-0">- Kismis</p>
                    <p class="mb-0">- Bola tenis</p>
                    <p>- Kubus</p>
                </div>
            </div>
        </div>
        <!-- end-of-title -->

        <form action="{{ route('post-kpsp') }}" method="POST">
            @csrf

            <input type="hidden" name="bulan" value="18">

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12  py-2">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">1.</p>
                        <p class="ms-1 mb-1">Letakkan kismis diatas meja dekat anak, apakah anak dapat mengambil dengan ibu jari dan telunjuk ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Gerak Halus</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">2.</p>
                        <p class="ms-1 mb-1">Gelindingkan bola tenis ke arah anak, apakah dapat mengelindingkan/melempar bola kembali kepada anak ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Gerak Halus</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">3.</p>
                        <p class="ms-1 mb-1">Apakah anak dapat bertepuk tangan atau melambaikan tangan tanpa bantuan ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Sosialisasi dan Kemandirian</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">4.</p>
                        <p class="ms-1 mb-1">Apakah anak dapat mengatakan "papa" ketika melihat atau memanggil ayahnya atau mengatakan "mama" ketika melihat atau memanggil ibunya?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Bicara dan Bahasa</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">5.</p>
                        <p class="ms-1 mb-1">Apakah anak dapat menunjukkan apa yang diingikan tanpa menangis atau merengek ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Sosialisasi dan Kemandirian</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">6.</p>
                        <p class="ms-1 mb-1">Apakah anak dapat minum dari cangkir/gelas sendiri tanpa tumpah ? </p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Sosialisasi dan Kemandirian</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">7.</p>
                        <p class="ms-1 mb-1">Apakah anak dapat berdiri kira-kira 5 detik tanpa pegangan ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Gerak kasar</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">8.</p>
                        <p class="ms-1 mb-1">Apakah anak dapat berdiri kira kira lebih dari 30 detik tanpa pegangan ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Gerak Kasar</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">9.</p>
                        <p class="ms-1 mb-1">Letakkan kubus di lantai, minta anak memungut, apakah anak dapat memungut dan berdiri kembali tanpa berpegangan ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Gerak Kasar</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row px-2 rounded-3 bg-white mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 ">
                <div class="content">
                    <div class="ask d-flex">
                        <p class="mb-0">10.</p>
                        <p class="ms-1 mb-1">Minta anak berjalan sepanjang ruangan, dapatkan ia berjalan tanpa terhunyung/jatuh ?</p>
                    </div>
                    <div class="info ms-3">
                        <p class="text-danger mb-1" style="font-size: 13px;">* Gerak Kasar</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-white mb-3 py-1">
                <div class="form-group px-1">
                    <select name="jawaban_kpsp[]"
                        class="form-control form-select shadow-none border-top-0 border-start-0 border-end-0 rounded-0"
                        id="jawaban" aria-label="Default select example"
                        style="border-bottom: 2px solid rgb(59, 59, 59);">
                        <option selected disabled>Pilih jawaban anda</option>
                        <option value="YA">YA</option>
                        <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-control bg-transparent border-0 px-0 text-lg-center text-start">
            <button type="submit" class="btn col-4 text-white rounded-pill " style="background-color: rgb(46, 178, 249);">Kirim</button>
        </div>

    </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
