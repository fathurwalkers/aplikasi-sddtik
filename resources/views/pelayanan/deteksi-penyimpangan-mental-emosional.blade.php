@extends('layouts.admin-layouts')
@section('title', 'Deteksi Dini Penyimpangan Mental Emosional')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Deteksi Dini Penyimpangan Mental Emosional')

@section('main-content')

    <div class="row">

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>KMPE </b></h5>
                    <p class="card-text">Kuesioner Masalah Perilaku Emosional </p>
                    <a href="{{ route('kmpe') }}" class="btn btn-info"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>M-CHAT </b></h5>
                    <p class="card-text mb-2">Modified Checklist for Autism in Toddlers </p>
                    <a href="{{ route('mchat') }}" class="btn btn-info mt-3"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>GPPH </b></h5>
                    <p class="card-text mb-2">Gangguan Pemusatan Perhatian dan Hiperaktivitas </p>
                    <a href="{{ route('gpph') }}" class="btn btn-info mt-3"><b>Mulai Tes ></b></a>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
