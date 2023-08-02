<div class="modal fade" id="tambahKategoriStories" tabindex="-1" role="dialog"
aria-labelledby="modalSayaLabel" aria-hidden="true">
<div class="modal-dialog modal-lg border-0" role="document">
    <div class="modal-content">
        <div class="modal-header ">
            <h5 class="modal-title" id="modalSayaLabel">Buat Kategori Stories Baru</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/admin/create/data/kategori-stories/store" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <div class="input-group mb-3">
                        <input type="text" name="nama_kategori" autocomplete='off' class="form-control
                        @error('nama_kategori') is-invalid @enderror">
                        @error('nama_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-secondary text-white">Tambah Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


