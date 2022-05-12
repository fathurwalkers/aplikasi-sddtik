@extends('layouts.admin-layouts')
@section('title', 'Berat Badan / Tinggi Badan')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Berat Badan / Tinggi Badan')

@section('main-content')

    <div class="container">
        <form action="{{ route('post-bbtb') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">Masukkan Berat Badan saat ini : </label>
                        <input type="number" class="form-control" step="any" name="jawaban_bb">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">Masukkan Tinggi Badan saat ini : </label>
                        <input type="number" class="form-control" step="any" name="jawaban_tb">
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-md btn-info">
                    Proses
                </button>
            </div>
        </form>
    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
