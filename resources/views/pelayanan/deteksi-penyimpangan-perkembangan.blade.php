@extends('layouts.admin-layouts')
@section('title', 'Deteksi Dini Penyimpangan Perkembangan')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Deteksi Dini Penyimpangan Perkembangan')

@section('main-content')

    <div class="row group">

        {{-- <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>KPSP </b></h5>
                    <p class="card-text">Kuesioner Pra Skrining Perkembangan</p>
                    <a href="{{ route('kpsp') }}" class="btn btn-info"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div> --}}

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>TDD </b></h5>
                    <p class="card-text mb-2">Tes Daya Dengar</p>
                    <a href="{{ route('tdd') }}" class="btn btn-info mt-3"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>TDL</b></h5>
                    <p class="card-text mb-2">Tes Daya Lihat</p>
                    <a href="{{ route('tdl') }}" class="btn btn-info mt-3"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
