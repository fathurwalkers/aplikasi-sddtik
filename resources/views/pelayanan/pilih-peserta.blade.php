@extends('layouts.admin-layouts')
@section('title', 'Pilih Peserta')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('datatables') }}/datatables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<style>
    .cke {
        visibility: visible !important;
    }
    .modal-backdrop.show {
        display: none !important;
    }
    .fix-text {
        font-size: 15px;
    }
    .fix-text-h5 {
        font-size: 12px;
    }
    table.dataTable tbody th,
    table.dataTable tbody td {
        padding: 6px 8px!important;
        border-color: #d8d8d8!important;
        border-top-color: #d8d8d8!important;
        border-right-color: #d8d8d8!important;
        border-bottom-color: #d8d8d8!important;
        border-left-color: #d8d8d8!important;
        table-layout:fixed!important;
        white-space: nowrap!important;
    }
    .button-text-fix {
        font-size: 11px!important;
    }
    table.dataTable {
        color: rgb(0, 0, 0)!important;
    }
    .fixed-text-th {
        font-size: 15px!important;
    }
</style>
@endpush

@section('main-header', 'Pilih Peserta')

@section('status-pelayanan')
    <a href="#" class="btn btn-md btn-info" data-toggle="modal" data-target="#modaltambahpeserta">
        <b>Tambah Peserta</b>
    </a>
    <x-modal-tambah-peserta />
    &nbsp;
@endsection

@section('main-content')

    <div class="container">

        {{-- <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div> --}}
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        ERROR : Ada data yang tidak isi.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr class="">
                                <th class="fixed-text-th">No</th>
                                <th class="fixed-text-th">Nama Lengkap</th>
                                <th class="fixed-text-th">NIK</th>
                                <th class="fixed-text-th">TTL</th>
                                <th class="fixed-text-th">Jenis Kelamin</th>
                                <th class="fixed-text-th">Riwayat Persalinan</th>
                                <th class="fixed-text-th">BB</th>
                                <th class="fixed-text-th">TB</th>
                                <th class="fixed-text-th">Usia (Bulan)</th>
                                <th class="fixed-text-th">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->detail_nama }}</td>
                                    <td>{{ $item->detail_nik }}</td>
                                    <td>{{ date("d/m/Y", strtotime($item->detail_ttl)) }}</td>
                                    <td>
                                        @switch($item->detail_jeniskelamin)
                                            @case("L")
                                                Laki-Laki
                                                @break
                                            @case("P")
                                                Perempuan
                                                @break
                                        @endswitch
                                    </td>
                                    <td>{{ $item->detail_riwayat_persalinan }}</td>
                                    <td>{{ $item->detail_berat_badan_lahir }}</td>
                                    <td>{{ $item->detail_tinggi_badan_lahir }}</td>
                                    <td>
                                        @php
                                            $date1 = strtotime($item->detail_ttl);
                                            $date2 = strtotime(now());
                                            $totalbulan = 0;

                                            while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2) {
                                                $totalbulan++;
                                            }
                                            @endphp
                                        {{ $totalbulan }} Bulan
                                    </td>
                                    <td>
                                        <form action="{{ route('post-pilih-peserta') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_peserta" value="{{ $item->id }}">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                PILIH
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- <form action="{{ route('post-pilih-peserta') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">Pilih Peserta pelayanan : </label>
                        <select class="form-control" id="exampleSelectGender" name="id_peserta">
                            <option selected>Pilih peserta...</option>
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}">{{ $item->detail_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <button class="btn btn-info btn-md" type="submit">
                            PILIH
                        </button>
                    </div>
                </div>
            </div>
        </form> --}}

    </div>

@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('datatables') }}/datatables.min.js"></script> --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
            // let table = new DataTable('#example1', {
            //     // options
            // });
        });
    </script>
@endpush
