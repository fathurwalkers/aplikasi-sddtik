@extends('layouts.admin-layouts')
@section('title', 'Data Peserta')

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
            padding: 6px 8px !important;
            border-color: #d8d8d8 !important;
            border-top-color: #d8d8d8 !important;
            border-right-color: #d8d8d8 !important;
            border-bottom-color: #d8d8d8 !important;
            border-left-color: #d8d8d8 !important;
            table-layout: fixed !important;
            white-space: nowrap !important;
        }

        .button-text-fix {
            font-size: 11px !important;
        }

        table.dataTable {
            color: rgb(0, 0, 0) !important;
        }

        .fixed-text-th {
            font-size: 15px !important;
        }

    </style>
@endpush

@section('main-header', 'Data Peserta')

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
                                    <td>{{ date('d/m/Y', strtotime($item->detail_ttl)) }}</td>
                                    <td>
                                        @switch($item->detail_jeniskelamin)
                                            @case('L')
                                                Laki-Laki
                                            @break

                                            @case('P')
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
                                        <button class="btn btn-info btn-lg" type="button" data-toggle="modal"
                                            data-target="#modalupdate{{ $item->id }}">
                                            UBAH
                                        </button>

                                        <button class="btn btn-danger btn-lg" type="button" data-toggle="modal"
                                            data-target="#modaldelete{{ $item->id }}">
                                            HAPUS
                                        </button>

                                        {{-- MODAL DELETE --}}
                                        <div class="modal fade" id="modaldelete{{ $item->id }}" tabindex="1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Konfirmasi Tindakan</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">Apakah anda yakin ingin menghapus peserta
                                                        ini?
                                                    </div>
                                                    <form action="{{ route('hapus-peserta', $item->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn gray btn-outline-secondary"
                                                                data-dismiss="modal">BATALKAN</button>
                                                            <button type="submit" class="btn btn-outline-danger">
                                                                YA, HAPUS
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- End MODAL DELETE --}}

                                        {{-- MODAL TAMBAH PESERTA --}}
                                        <div class="modal fade" id="modalupdate{{ $item->id }}" tabindex="1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Ubah Data Peserta</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">Silahkan ubah data peserta berikut. </div>
                                                    <form action="{{ route('post-update-peserta', $item->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="container border-dark">

                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_nama">Nama Lengkap</label>
                                                                        <input type="text" class="form-control"
                                                                            id="detail_nama"
                                                                            placeholder="Masukkan merk nama lengkap..."
                                                                            name="detail_nama" value="{{ $item->detail_nama }}">
                                                                        <small id="detail_nama"
                                                                            class="form-text text-muted">Contoh : Muh.
                                                                            Keenan
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_nik">NIK</label>
                                                                        <input type="number" class="form-control"
                                                                            id="detail_nik" placeholder="Masukkan NIK"
                                                                            name="detail_nik" value="{{ $item->detail_nik }}">
                                                                        {{-- <small id="detail_nik" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_ttl">Tanggal Lahir</label>
                                                                        <input type="date" class="form-control"
                                                                            id="detail_ttl"
                                                                            placeholder="Masukkan Tanggal Lahir"
                                                                            name="detail_ttl" value="{{ date('m/d/Y', strtotime($item->detail_ttl)) }}">
                                                                        {{-- <small id="detail_ttl" class="form-text text-muted">Contoh : 100000 </small> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_jeniskelamin">Jenis
                                                                            Kelamin</label>
                                                                        <select id="detail_jeniskelamin"
                                                                            class="form-control"
                                                                            name="detail_jeniskelamin">
                                                                            <option value="{{ $item->detail_jeniskelamin }}" selected>{{ $item->detail_jeniskelamin }}
                                                                            </option>
                                                                            <option value="L">Laki-Laki</option>
                                                                            <option value="P">Perempuan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_nama_ayah">Nama Ayah</label>
                                                                        <input type="text" class="form-control"
                                                                            id="detail_nama_ayah"
                                                                            placeholder="Masukkan nama ayah"
                                                                            name="detail_nama_ayah" value="{{ $item->detail_nama_ayah }}">
                                                                        {{-- <small id="detail_nama_ayah" class="form-text text-muted">Contoh : Muh. Khairy Keenan --}}
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_nama_ibu">Nama Ibu</label>
                                                                        <input type="text" class="form-control"
                                                                            id="detail_nama_ibu"
                                                                            placeholder="Masukkan nama ibu"
                                                                            name="detail_nama_ibu" value="{{ $item->detail_nama_ibu }}">
                                                                        {{-- <small id="detail_nama_ibu" class="form-text text-muted">Contoh : Muh. Khairy Keenan --}}
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="detail_alamat">Alamat</label>
                                                                        <input type="text" class="form-control"
                                                                            id="detail_alamat" placeholder="Masukkan Alamat"
                                                                            name="detail_alamat" value="{{ $item->detail_alamat }}">
                                                                        {{-- <small id="detail_alamat" class="form-text text-muted">Contoh : Muh. Khairy Keenan --}}
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_berat_badan_lahir">Berat Badan
                                                                            Lahir (kg)</label>
                                                                        <input type="number" class="form-control"
                                                                            id="detail_berat_badan_lahir"
                                                                            placeholder="Masukkan Beran badan lahir"
                                                                            name="detail_berat_badan_lahir" value="{{ $item->detail_berat_badan_lahir }}">
                                                                        {{-- <small id="detail_berat_badan_lahir" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="detail_tinggi_badan_lahir">Tinggi Badan
                                                                            Lahir (cm)</label>
                                                                        <input type="number" class="form-control"
                                                                            id="detail_tinggi_badan_lahir"
                                                                            placeholder="Masukkan Beran badan lahir"
                                                                            name="detail_tinggi_badan_lahir" value="{{ $item->detail_tinggi_badan_lahir }}">
                                                                        {{-- <small id="detail_tinggi_badan_lahir" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="detail_riwayat_persalinan">Riwayat
                                                                            Persalinan</label>
                                                                        <select id="detail_riwayat_persalinan"
                                                                            class="form-control"
                                                                            name="detail_riwayat_persalinan">
                                                                            <option value="{{ $item->detail_riwayat_persalinan }}" selected>{{ $item->detail_riwayat_persalinan }}"</option>
                                                                            <option value="ATERM">ATERM</option>
                                                                            <option value="PREMATUR">PREMATUR</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn gray btn-danger"
                                                                data-dismiss="modal">Batalkan</button>
                                                            <button type="submit" class="btn btn-info">
                                                                Ubah
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- End MODAL TAMBAH PESERTA --}}
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
                        <label for="exampleSelectGender">Data Peserta pelayanan : </label>
                        <select class="form-control" id="exampleSelectGender" name="id_peserta">
                            <option selected>Data Peserta...</option>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
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
