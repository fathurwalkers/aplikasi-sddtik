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
                    <h4 class="modal-title">Ubah Data Kendaraan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">Silahkan ubah data Kendaraan berikut. </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="container border-dark">

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="detail_nama">Merk Kendaraan</label>
                                    <input type="text" class="form-control" id="detail_nama"
                                        placeholder="Masukkan merk kendaraan" name="detail_nama">
                                    <small id="detail_nama" class="form-text text-muted">Contoh : Muh. Khairy Keenan
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="kendaraan_tahun">Tahun</label>
                                    <input type="number" class="form-control" id="kendaraan_tahun"
                                        placeholder="Masukkan merk kendaraan" name="kendaraan_tahun">
                                    <small id="kendaraan_tahun" class="form-text text-muted">Contoh : DAIHATSU 2022.
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="kendaraan_harga_sewa">Harga Sewa</label>
                                    <input type="number" class="form-control" id="kendaraan_harga_sewa" placeholder="Masukkan merk kendaraan" name="kendaraan_harga_sewa">
                                    <small id="kendaraan_harga_sewa" class="form-text text-muted">Contoh : 200000
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="kendaraan_max_mil">Max Mil Kendaraan</label>
                                    <input type="number" class="form-control" id="kendaraan_max_mil"
                                        placeholder="Masukkan Max Mil kendaraan" name="kendaraan_max_mil">
                                    <small id="kendaraan_max_mil" class="form-text text-muted">Contoh : 100000 </small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="kendaraan_status">Status Penyewaan</label>
                                    <select id="kendaraan_status" class="form-control" name="kendaraan_status">
                                        <option value="" selected>l</option>
                                        <option value="TERSEDIA">Tersedia</option>
                                        <option value="RENTAL">Dalam Penyewaan</option>
                                        <option value="KOSONG">Tidak Tersedia</option>
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
