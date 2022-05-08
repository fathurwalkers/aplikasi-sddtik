<div>
    {{-- MODAL LIHAT --}}
    <div class="modal fade" id="modallihat{{ $data->id }}" tabindex="1" role="dialog" aria-hidden="true">
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
                    <button type="button" class="btn gray btn-info" data-dismiss="modal">TUTUP</button>
                </div>
            </div>
        </div>
    </div>
</div>
