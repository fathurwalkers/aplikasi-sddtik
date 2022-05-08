@extends('layouts.admin-layouts')
@section('title', 'Format Layout')

@push('css')
    <style>
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
    </style>
@endpush

@section('main-header', 'Format Layout')

@section('status-pelayanan')
@if ($data == null)
<button type="disabled" class="btn btn-md btn-info disabled">
    <b>Status Pelayanan : NONAKTIF</b>
</button>
&nbsp;
@else
<button type="submit" class="btn btn-md btn-info"  data-toggle="modal" data-target="#modallihat{{ $data->id }}">
    <b>Status Pelayanan : AKTIF</b>
</button>
&nbsp;
@endif

@if ($data !== null)
<x-modal-lihat-peserta-pelayanan :data="$data" />
@endif

@endsection

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div>
                        <p class="statistics-title">Jumlah Pengguna</p>
                        <h3 class="rate-percentage">32.53%</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                    </div>
                    <div>
                        <p class="statistics-title">Jumlah Peserta</p>
                        <h3 class="rate-percentage">7,682</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                    </div>
                    <div>
                        <p class="statistics-title">Total Pemeriksaan</p>
                        <h3 class="rate-percentage">68.8</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                    </div>
                    <div class="d-none d-md-block">
                        <p class="statistics-title">Jumlah Pelaksana</p>
                        <h3 class="rate-percentage">2m:35s</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                    </div>
                    {{-- <div class="d-none d-md-block">
                        <p class="statistics-title">Log Aktifitas</p>
                        <h3 class="rate-percentage">68.8</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                    </div>
                    <div class="d-none d-md-block">
                        <p class="statistics-title">Avg. Time on Site</p>
                        <h3 class="rate-percentage">2m:35s</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
