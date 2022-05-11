<div>
    @push('css')
    <style>
        .modal-backdrop.show {
            display: none !important;
        }
        .fix-text {
            font-size: 15px;
        }
        .fix-text-h5 {
            font-size: 3px;
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
    {{-- MODAL TAMBAH PESERTA --}}
    <div class="modal fade" id="modaltambahpeserta" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Pelaksana</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{-- <div class="modal-body">Silahkan ubah data Kendaraan berikut. </div> --}}
                <form action="{{ route('post-tambah-pelaksana') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="container border-dark mt-3">

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="login_nama">Nama Lengkap : </label>
                                    <input type="text" class="form-control" id="login_nama"
                                        placeholder="Masukkan nama lengkap" name="login_nama">
                                    <small id="login_nama" class="form-text text-muted">Contoh : Muh. Khairy Keenan
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="login_email">Email : </label>
                                    <input type="email" class="form-control" id="login_email"
                                        placeholder="Masukkan Email" name="login_email">
                                    {{-- <small id="login_email" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="login_username">Username : </label>
                                    <input type="username" class="form-control" id="login_username"
                                        placeholder="Masukkan Email" name="login_username">
                                    {{-- <small id="login_username" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="login_telepon">No. HP / Telepon : </label>
                                    <input type="number" class="form-control" id="login_telepon"
                                        placeholder="Masukkan No. HP / Telepon" name="login_telepon">
                                    {{-- <small id="login_telepon" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn gray btn-danger" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-info">
                            Tambah
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- End MODAL TAMBAH PESERTA --}}
</div>
