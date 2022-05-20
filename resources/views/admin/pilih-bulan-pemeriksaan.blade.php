@extends('layouts.admin-layouts')
@section('title', 'Tes Daya Dengar')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Tes Daya Dengar')

@section('main-content')

    <div class="container">

        <form action="{{ route('pemeriksaan-berdasarkan-bulan') }}" method="GET">
            @csrf
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="bulan">
                            Silahkan memilih bulan pemeriksaan untuk melihat hasil pemeriksaan berdasarkan bulan yang dipilih.
                        </label>
                        <input type="date" name="bulan" class="form-control" id="bulan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <button class="btn btn-info btn-md" type="submit">
                            CEK HASIL
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
