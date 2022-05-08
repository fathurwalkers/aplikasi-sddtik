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
            font-size: 15px;
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
    {{-- MODAL LIHAT --}}
    <div class="modal fade bd-example-modal-lg" id="modallihat{{ $data->id }}" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Data Peserta Pelayanan : " {{ $data->detail_nama }} "</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5 class="fix-text">Nama Lengkap </h5 class="fix-text">
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <h5 class="fix-text">: {{ $data->detail_nama }} </h5 class="fix-text">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn gray btn-warning" data-dismiss="modal">TUTUP</button>
                    <form action="{{ route('hapus-session-peserta') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus Pelayanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
