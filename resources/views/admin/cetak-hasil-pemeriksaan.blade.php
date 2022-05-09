<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tabel</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid rgb(35, 34, 34);
        }

        th {
            font-size: 14px;
            font-weight: normal;
        }

        td {
            text-align: center;
        }

        tr th{

            background-color: #6D89D2;
            color: white;
        }

        thead tr td{
            background-color: #6A7AA6;
            color: white;
        }

        tbody tr:nth-child(odd){
            background-color: gainsboro;
        }



    </style>
</head>

<body>
{{-- ✅ --}}
    {{-- <div class="container">

    </div> --}}
    <div class="container py-3">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-2 d-flex justify-content-center mb-2">
                <h4>HASIL PEMERIKSAAN</h4>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4 col-md-4 col-lg-4">
                Nama <br />
                NIK <br />
                Tanggal Lahir <br />
                Jenis Kelamin <br />
                Nama Ibu <br />
                Nama Ayah <br />
                Alamat <br />
                Riwayat Persalinan <br />
                Berat Badan Lahir <br />
                Tinggi Badan Lahir <br />
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                : {{ $data->detail_nama }} <br />
                : {{ $data->detail_nik }} <br />
                : {{ date("d/m/Y", strtotime($data->detail_ttl)) }} <br />
                :
                @switch($data->jeniskelamin)
                    @case("L")
                        Laki-Laki <br />
                        @break
                    @case("P")
                        Perempuan <br />
                        @break
                @endswitch
                : {{ $data->detail_nama_ayah }} <br />
                : {{ $data->detail_nama_ibu }} <br />
                : {{ $data->detail_alamat }} <br />
                : {{ $data->detail_riwayat_persalinan }} <br />
                : {{ $data->detail_berat_badan_lahir }} <br />
                : {{ $data->detail_tinggi_badan_lahir }} <br />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <table cellpadding="5">
                    <thead>
                        <tr>
                            <th style="padding: 30px;" rowspan="2">
                                <p class="d-flex justify-content-center align-items-center mb-0" style="width: 70px;">Umur Anak</p>
                            </th>
                            <th colspan="8" class=" text-center fw-bold">Jenis Deteksi Tumbuh Kembang Yang Harus Dilakukan</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th class="text-center" colspan="2">Deteksi Dini Penyimpangan Pertumbuhan</th>
                            <th class="text-center" colspan="3">Deteksi Dini penyimpangan Perkembangan</th>
                            <th class="text-center" colspan="3">Deteksi Dini Penyimpangan Mental Emosional (Dilakukan atas Indikasi)
                            </th>
                            <th></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>BB/TB</td>
                            <td>LK</td>
                            <td>KPSP</td>
                            <td>TDD</td>
                            <td>TDL</td>
                            <td>KMPE</td>
                            <td>M-CHAT</td>
                            <td>GPPH</td>
                            <td style="">KET</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($hasil_pemeriksaan as $item)
                            <tr>
                                <td>
                                    {{ $item->bulan }}
                                </td>
                                <td>
                                    @if ($item->bb == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->tb == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->lk == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->kpsp == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->tdd == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->tdl == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->kmpe == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->mchat == "1")
                                        ✅
                                    @endif
                                </td>
                                <td>
                                    @if ($item->gpph == "1")
                                        ✅
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
