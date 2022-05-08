@extends('layouts.admin-layouts')
@section('title', 'Pilih Peserta')

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endpush
