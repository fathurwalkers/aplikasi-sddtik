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

        .table>:not(caption)>*>* {
            padding: 0.5rem 0.5rem;
            background-color: white!important;
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
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
            <div class="col-sm-12 col-md-12 col-lg-12">
                <ul class="list-inline">
                    <li class="list-inline-item">Nama Lengkap</li>
                    <li class="list-inline-item"> : {{ $data->detail_nama }}</li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">NIK</li>
                    <li class="list-inline-item"> : {{ $data->detail_nik }}</li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">TTL</li>
                    <li class="list-inline-item"> : {{ date("d/m/Y", strtotime($data->detail_nik)) }}</li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">Jenis Kelamin</li>
                    <li class="list-inline-item"> :
                        @switch($data->detail_jeniskelamin)
                            @case("L")
                                Laki - Laki
                                @break
                            @case("P")
                                Perempuan
                                @break
                        @endswitch
                    </li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">Nama ayah</li>
                    <li class="list-inline-item"> : {{ $data->detail_nama_ayah }}</li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">Nama ibu</li>
                    <li class="list-inline-item"> : {{ $data->detail_nama_ibu }}</li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">Alamat</li>
                    <li class="list-inline-item"> : {{ $data->detail_alamat }}</li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">Berat Badan Lahir (gram)</li>
                    <li class="list-inline-item"> : {{ $data->detail_berat_badan_lahir }}</li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">Tinggi Badan Lahir (cm)</li>
                    <li class="list-inline-item"> : {{ $data->detail_tinggi_badan_lahir }}</li>
                </ul>
            </div>
        </div>
        <hr />
        <div class="row mb-1">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                <h5>Keterangan Pemeriksaan</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <table class="table table-bordered border-1">
                    <thead>
                        <tr class="text-dark">
                            <td class="text-dark">Bulan</td>
                            <td class="text-dark">Waktu Pemeriksaan Terakhir</td>
                            <td class="text-dark">BB/TB</td>
                            <td class="text-dark">LK</td>
                            <td class="text-dark">KPSP</td>
                            <td class="text-dark">TDD</td>
                            <td class="text-dark">TDL</td>
                            <td class="text-dark">KMPE</td>
                            <td class="text-dark">M-CHAT</td>
                            <td class="text-dark">GPPH</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_pemeriksaan as $item)
                            <tr>
                                <td>{{ $item->bulan }}</td>
                                <td>
                                    @if ($item->created_at == $item->updated_at)
                                        Tidak ada
                                    @else
                                        {{ date("d/M/Y", strtotime($item->updated_at)) }}
                                    @endif
                                </td>
                                <td>{{ $item->keterangan_bbtb }}</td>
                                <td>{{ $item->keterangan_lk }}</td>
                                <td>{{ $item->keterangan_kpsp }}</td>
                                <td>{{ $item->keterangan_tdd }}</td>
                                <td>{{ $item->keterangan_tdl }}</td>
                                <td>{{ $item->keterangan_kmpe }}</td>
                                <td>{{ $item->keterangan_mchat }}</td>
                                <td>{{ $item->keterangan_gpph }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
                            <td>Bulan</td>
                            <td>BB/TB</td>
                            <td>LK</td>
                            <td>KPSP</td>
                            <td>TDD</td>
                            <td>TDL</td>
                            <td>KMPE</td>
                            <td>M-CHAT</td>
                            <td>GPPH</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($hasil_pemeriksaan as $item)
                            <tr>
                                <td>
                                    {{ $item->bulan }}
                                </td>
                                <td>
                                    @if ($item->bbtb == "1")
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
