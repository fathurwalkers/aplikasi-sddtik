@extends('layouts.admin-layouts')
@section('title', 'Lingkar Kepala')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Lingkar Kepala')

@section('main-content')

    <div class="container">

        <form action="{{ route('post-lk') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">Masukkan Nilai Pengukuran Lingkar Kepala (cm) : </label>
                        <input type="number" class="form-control" step="any" name="jawaban_lk">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <button class="btn btn-info btn-md" type="submit">
                            PROSES
                        </button>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
