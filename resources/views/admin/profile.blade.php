@extends('layouts.admin-layouts')
@section('title', 'Profil Pengguna')

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

@section('main-header', 'Profil Pengguna')

@section('status-pelayanan')
<button type="button" class="btn btn-md btn-info" data-toggle="modal"
data-target="#modalubahprofil">
    <b>Ubah Profil</b>
</button>

{{-- MODAL UBAH PROFIL --}}
<div class="modal fade" id="modalubahprofil" tabindex="1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Ubah Data Pengguna</h4>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">Silahkan ubah data Pengguna berikut. </div>
            <form action="{{ route('post-ubah-profile', $users->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="container border-dark">

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="login_nama">Nama Lengkap</label>
                                <input type="text" class="form-control"
                                    id="login_nama"
                                    name="login_nama" value="{{ $users->login_nama }}">
                                <small id="login_nama"
                                    class="form-text text-muted">Contoh : Muh.
                                    Keenan
                                </small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="login_telepon">No. HP / Telepon</label>
                                <input type="number" class="form-control"
                                    id="login_telepon"
                                    name="login_telepon" value="{{ $users->login_telepon }}">
                                {{-- <small id="login_telepon" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="login_email">Email</label>
                                <input type="email" class="form-control"
                                    id="login_email"
                                    name="login_email" value="{{ $users->login_email }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="login_username">Username</label>
                                <input type="username" class="form-control"
                                    id="login_username"
                                    name="login_username" value="{{ $users->login_username }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="password_lama">Password Lama : </label>
                                <input type="password" class="form-control"
                                    id="password_lama"
                                    name="password_lama">
                                <small id="password_lama"
                                    class="form-text text-muted">Kosongkan jika tidak ingin mengganti password.
                                </small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="password_baru">Password Baru</label>
                                <input type="password" class="form-control"
                                    id="password_baru"
                                    name="password_baru">
                                <small id="password_baru" class="form-text text-muted">Kosongkan jika tidak ingin mengganti password.
                                </small>
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
{{-- END MODAL UBAH PROFILE --}}
@endsection

@section('main-content')

<div class="row">

	{{-- <div class="col-sm-2 col-md-2 col-lg-2">
		<img class="img img-thumbnail" src="{{ asset('foto/default-profile.jpg') }}" alt="" width="200px">
	</div> --}}

	<div class="col-sm-12 col-md-12 col-lg-12">
		<table class="border-0">
			<tr>
				<td>
					<ul class="list-unstyled">
						<li>Nama </li>
						{{-- <li>Tempat / Tanggal Lahir &nbsp; &nbsp; </li>
						<li>Jenis Kelamin </li> --}}
						<li>Username </li>
						<li>Email </li>
						<li>No. HP / Telepon </li>
					</ul>
				</td>
				<td>
					<ul class="list-unstyled">
						<li> : {{ $users->login_nama }}</li>
						{{-- <li> : @php echo "TIDAK ADA DATA"; @endphp</li>
						<li> : @php echo "TIDAK ADA DATA"; @endphp</li> --}}
						<li> : {{ $users->login_username }}</li>
						<li> : {{ $users->login_email }}</li>
						<li> : {{ $users->login_telepon }}</li>
					</ul>
				</td>
			</tr>
		</table>
	</div>

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
