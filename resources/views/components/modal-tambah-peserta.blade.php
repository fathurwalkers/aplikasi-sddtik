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
                    <h4 class="modal-title">Tambah Data Peserta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{-- <div class="modal-body">Silahkan ubah data Kendaraan berikut. </div> --}}
                <form action="{{ route('post-tambah-peserta') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="container border-dark">

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="detail_nama"
                                        placeholder="Masukkan nama lengkap" name="detail_nama">
                                    <small id="detail_nama" class="form-text text-muted">Contoh : Muh. Khairy Keenan
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_nik">NIK</label>
                                    <input type="number" class="form-control" id="detail_nik"
                                        placeholder="Masukkan NIK" name="detail_nik">
                                    {{-- <small id="detail_nik" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_ttl">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="detail_ttl"
                                        placeholder="Masukkan Tanggal Lahir" name="detail_ttl">
                                    {{-- <small id="detail_ttl" class="form-text text-muted">Contoh : 100000 </small> --}}
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_jeniskelamin">Jenis Kelamin</label>
                                    <select id="detail_jeniskelamin" class="form-control" name="detail_jeniskelamin">
                                        <option value="" selected>Pilih jenis kelamin...</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_nama_ayah">Nama Ayah</label>
                                    <input type="text" class="form-control" id="detail_nama_ayah"
                                        placeholder="Masukkan nama ayah" name="detail_nama_ayah">
                                    {{-- <small id="detail_nama_ayah" class="form-text text-muted">Contoh : Muh. Khairy Keenan --}}
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_nama_ibu">Nama Ibu</label>
                                    <input type="text" class="form-control" id="detail_nama_ibu"
                                        placeholder="Masukkan nama ibu" name="detail_nama_ibu">
                                    {{-- <small id="detail_nama_ibu" class="form-text text-muted">Contoh : Muh. Khairy Keenan --}}
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="detail_alamat">Alamat</label>
                                    <input type="text" class="form-control" id="detail_alamat"
                                        placeholder="Masukkan Alamat" name="detail_alamat">
                                    {{-- <small id="detail_alamat" class="form-text text-muted">Contoh : Muh. Khairy Keenan --}}
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_berat_badan_lahir">Berat Badan Lahir (gram)</label>
                                    <input type="number" class="form-control" id="detail_berat_badan_lahir"
                                        placeholder="Masukkan Beran badan lahir" name="detail_berat_badan_lahir">
                                    {{-- <small id="detail_berat_badan_lahir" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="detail_tinggi_badan_lahir">Tinggi Badan Lahir (cm)</label>
                                    <input type="number" class="form-control" id="detail_tinggi_badan_lahir"
                                        placeholder="Masukkan Beran badan lahir" name="detail_tinggi_badan_lahir">
                                    {{-- <small id="detail_tinggi_badan_lahir" class="form-text text-muted">Contoh : DAIHATSU 2022. --}}
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="detail_riwayat_persalinan">Riwayat Persalinan</label>
                                    <select id="detail_riwayat_persalinan" class="form-control" name="detail_riwayat_persalinan">
                                        <option value="" selected>Pilih Riwayat Persalinan...</option>
                                        <option value="ATERM">ATERM</option>
                                        <option value="PREMATUR">PREMATUR</option>
                                        <option value="POST TERM">POST TERM</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="kendaraan_foto">Foto</label>
                                <input type="file" class="form-control-file" id="kendaraan_foto" name="kendaraan_foto">
                            </div>
                        </div>
                    </div> --}}

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
