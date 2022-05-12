@extends('layouts.admin-layouts')
@section('title', 'Deteksi Dini Penyimpangan Pertumbuhan')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Deteksi Dini Penyimpangan Pertumbuhan')

@section('main-content')

    <div class="row group">

        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>BB/TB</b></h5>
                    <p class="card-text">Berat Badan Terhadap Tinggi Badan</p>
                    <a href="{{ route('bbtb') }}" class="btn btn-info"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div>

        {{-- <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>LK</b></h5>
                    <p class="card-text mb-2">Lingkar Kepala</p>
                    <a href="{{ route('lk') }}" class="btn btn-info mt-3"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div> --}}

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
