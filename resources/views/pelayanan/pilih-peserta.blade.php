@extends('layouts.admin-layouts')
@section('title', 'Pilih Peserta')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Pilih Peserta')

@section('status-pelayanan')
<button type="button" class="btn btn-md btn-info">
    <b>Tambah Peserta</b>
</button>
&nbsp;
@endsection

@section('main-content')

    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <form action="{{ route('post-pilih-peserta') }}" method="POST">
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
        </form>

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
